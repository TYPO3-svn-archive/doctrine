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
 * Custom table to register the custom relation parser.
 *
 */
class tx_doctrine_Table extends Doctrine_Table {
	public function __construct($name, Doctrine_Connection $conn, $initDefinition = false) {
		parent::__construct($name, $conn, 0);
		
		$this->_parser = new tx_doctrine_Relation_Parser($this);

		// FIXME the following could could change and is coupled to the internals of Doctrine_Table::__construct
		$record = $this->initDefinition();

		$this->initIdentifier();

		$record->setUp();

		// if tree, set up tree
		if ($this->isTree()) {
			$this->getTree()->setUp();
		}
	}
}
?>