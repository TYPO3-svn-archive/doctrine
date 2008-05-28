<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2008 Christopher Hlubek <hlubek (at) networkteam.com>
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

require_once(t3lib_extMgm::extPath('doctrine', 'tests/res/class.tx_doctrine_NodeTable.php'));
require_once(t3lib_extMgm::extPath('doctrine', 'tests/res/class.tx_doctrine_Content.php'));

/**
 * Just a simple node fixture for Doctrine tests
 *
 * @author	Christopher Hlubek <hlubek (at) networkteam.com>
 * @package	TYPO3
 * @subpackage	tx_doctrine
 */
class tx_doctrine_Node extends tx_doctrine_Record {
	public function setTableDefinition() {
		$this->setTableName('tx_doctrine_nodes');
		// $this->hasColumn('id', 'integer', null, 'primary');
        $this->hasColumn('name', 'string', 30);
        $this->hasColumn('parent_id', 'integer');
        $this->hasColumn('deleted', 'boolean', 1, array('default' => false));
    }

    public function setUp() {
        // $this->actAs('Timestampable');

        $this->hasOne('tx_doctrine_Node as Parent',
        	array('local' => 'parent_id', 'foreign' => 'id', 'onDelete' => 'CASCADE'));

        $this->hasMany('tx_doctrine_Node as Childs',
        	array('local' => 'id', 'foreign' => 'parent_id', 'condition' => 'this.deleted = false'));

        $this->hasMany('tx_doctrine_Content as Contents',
        	array('local' => 'id', 'foreign' => 'parent_id', 'condition' => 'this.deleted = false'));
        	
        $this->index('parent_id', array('fields' => 'parent_id'));
    }
}
?>