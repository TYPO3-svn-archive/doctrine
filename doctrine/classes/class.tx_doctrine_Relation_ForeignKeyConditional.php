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

/**
 * Custom foreign key relation to allow conditional selection of components.
 * 
 * A DQL condition can be given with the 'condition' option. In the condition
 * the component alias can be refered by 'this' (e.g. <code>'condition' => 'this.deleted = false'</code>). 
 *
 * @see tx_doctrine_Record::hasMany
 */
class tx_doctrine_Relation_ForeignKeyConditional extends Doctrine_Relation_ForeignKey {
	
	public function __construct(array $definition) {
		// Add condition option to the options definition of Doctrine_Relation_ForeignKey
		$this->definition['condition'] = true;
		parent::__construct($definition);
	}
	
	public function getRelationDql($count) {
		// Use the DQL generated from the original foreign key relation
		$dql = parent::getRelationDql($count);
		
		$component = $this->getTable()->getComponentName();
		
		$condition = $this->definition['condition'];
		
		$dql .= ' AND ' . str_replace('this', $component, $condition);
		
		return $dql;
	}
}
?>