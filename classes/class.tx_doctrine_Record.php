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

require_once(t3lib_extMgm::extPath('doctrine', 'classes/class.tx_doctrine_Relation_ForeignKeyConditional.php'));

class tx_doctrine_Record extends Doctrine_Record {

    /**
     * Advanced hasMany
     * binds One-to-Many / Many-to-Many aggregate relation
     * 
     * Includes support for conditional foreign key relation with option 'conditional'.
     * 
     * @param string $componentName     the name of the related component
     * @param string $options           relation options
     * @see Doctrine_Relation::_$definition
     * @see tx_doctrine_Relation_ForeignKeyConditional
     * @return Doctrine_Record          this object
     */
    public function hasMany($componentName, $options) {
    	if(isset($options['condition'])) {
    		list($class, $alias) = explode(' as ', $componentName, 2);
    		$options['type'] = Doctrine_Relation::MANY_AGGREGATE;
    		$options['alias'] = $alias;
    		$options['class'] = $class;
    		$options['table'] = ($class == get_class($this)) ? $this->getTable() : Doctrine::getTable($class);
    		$options['localTable'] = $this->getTable();
    		// local and foreign should be set already in $options
    		
    		$relation = new tx_doctrine_Relation_ForeignKeyConditional($options);

    		$this->getTable()->getRelationParser()->setRelation($alias, $relation);

    		return $this;
    	} else {
    		return parent::hasMany($componentName, $options);
    	}
    }
}
?>