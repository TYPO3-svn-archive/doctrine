<?php
/***************************************************************
 *  Copyright notice
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * class tx_doctrine_TcaImport
 *
 * @package TYPO3
 * @subpackage tx_doctrine
 * @version $Id$
 */

require_once(t3lib_extMgm::extPath('doctrine') . 'class.tx_doctrine.php');

class tx_doctrine_TcaImport extends Doctrine_Import {

	protected $tableData = array();
	protected $tca = array();
	protected $definition = array();
	protected $tableName = '';
	protected $targetPath = '';
	protected $classPrefix = '';

	public function getTargetPath() {
		return $this->targetPath;
	}

	public function setTargetPath($value) {
		$this->targetPath = $value;
	}

	public function getClassPrefix() {
		return $this->classPrefix;
	}

	public function setClassPrefix($value) {
		$this->classPrefix = $value;
	}

	public function generateModel($tableName, $generateTableClass = FALSE) {
		$this->tableName = $tableName;
		t3lib_div::loadTCA($this->tableName);
		
		$this->tca = is_array($GLOBALS['TCA'][$this->tableName]) ? $GLOBALS['TCA'][$this->tableName] : array();
		$this->tableData = $GLOBALS['TYPO3_DB']->admin_get_fields($this->tableName);

		$this->definition = array();
		$this->definition['tableName'] = $this->tableName;
		$this->definition['className'] = $this->classPrefix . $this->tableName;
		$this->definition['relations'] = $this->buildColumnRelations();
		$this->definition['columns'] = $this->buildColumnDefinitions();
		$this->definition['actAs'] = $this->buildBehaviorDefinitions();

		$builder = new Doctrine_Import_Builder();
		$builder->setTargetPath($this->targetPath);
		$builder->generateTableClasses($generateTableClass);

		$builder->buildRecord($this->definition);
	}

	protected function buildColumnDefinitions() {
		$columns = array();

		foreach ($this->tableData as $fieldName => $properties) {
			if (isset($this->definition['relations'][$fieldName])) {
				continue;
			}
			$properties = array_change_key_case($properties, CASE_LOWER);
	
			$declarations = $this->conn->dataDict->getPortableDeclaration($properties);
	
			$values = isset($declarations['values']) ? $declarations['values'] : array();
			$columns[$fieldName] = array(
				'name' => $properties['field'],
				'type' => $declarations['type'][0],
				'alltypes' => $declarations['type'],
				'ntype' => $properties['type'],
				'length' => $declarations['length'],
				'fixed' => $declarations['fixed'],
				'unsigned' => $declarations['unsigned'],
				'values' => $values,
				'primary' => (strtolower($properties['key']) == 'pri'),
				'default' => $properties['default'],
				'notnull' => (bool) ($properties['null'] != 'YES'),
				'autoincrement' => (bool)(strpos($properties['extra'], 'auto_increment') !== false),
			);
		}
		
		return $columns;
	}

	protected function buildColumnRelations() {
		$relations = array();
		if (!is_array($this->tca['columns'])) {
			return $relations;
		}
		
		foreach ($this->tca['columns'] as $fieldName => $properties) {
			$config = $properties['config'];
			if (!isset($config['foreign_table'])) {
				continue;
			}
			$relation = array();
			$class = $this->classPrefix . $config['foreign_table'];
			$relation['class'] = $class;

				// many-to-many
			if (isset($config['maxitems']) && $config['maxitems'] > 1) {
				$relation['type'] = Doctrine_Relation::MANY;
				$relation['refClass'] = $this->classPrefix . $config['MM'];
				$relation['local'] = 'uid_local';
				$relation['foreign'] = 'uid_foreign';
				$alias = $fieldName;
			} else {
				$relation['local'] = $fieldName;
				$relation['foreign'] = 'uid';
				$alias = $config['foreign_table'];
			}
			$relation['alias'] = $alias;
			$relations[$alias] = $relation;
		}
		
		return $relations;
	}

	protected function buildBehaviorDefinitions() {
		$behaviors = array();
		$behaviors = $this->addL18NBehavior($behaviors);
		$behaviors = $this->addEnableFieldsBehavior($behaviors);

		return $behaviors;
	}
	
	protected function addL18NBehavior(array $behaviors) {
		if (isset($this->tca['ctrl']['languageField'])) {
			$behaviors['T3_L18N'] = array('name' => $this->tca['ctrl']['languageField']);
		}
		
		return $behaviors;
	}
	
	protected function addEnableFieldsBehavior(array $behaviors) {
		$options = array();
			// deleted
		if (isset($this->tca['ctrl']['delete'])) {
			$options['delete'] = $this->tca['ctrl']['delete'];
		}
			// disabled
		if (isset($this->tca['ctrl']['enablecolumns']['disabled'])) {
			$options['disabled'] = $this->tca['ctrl']['enablecolumns']['disabled'];
		}
			// starttime
		if (isset($this->tca['ctrl']['enablecolumns']['starttime'])) {
			$options['starttime'] = $this->tca['ctrl']['enablecolumns']['starttime'];
		}
			// endtime
		if (isset($this->tca['ctrl']['enablecolumns']['endtime'])) {
			$options['endtime'] = $this->tca['ctrl']['enablecolumns']['endtime'];
		}
			// fe_group
		if (isset($this->tca['ctrl']['enablecolumns']['fe_group'])) {
			$options['fe_group'] = $this->tca['ctrl']['enablecolumns']['fe_group'];
		}
		
		if (!empty($options)) {
			$behaviors['T3_EnableFields'] = $options;
		}
		return $behaviors;
	}
}
?>