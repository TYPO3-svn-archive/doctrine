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
 
require_once(t3lib_extMgm::extPath('doctrine', 'class.tx_doctrine.php'));
require_once(t3lib_extMgm::extPath('doctrine', 'tests/res/class.Record.php'));

/**
 * Testcase for basic Doctrine functionality
 *
 * @author		Christopher Hlubek <hlubek (at) networkteam.com>
 * @package		TYPO3
 * @subpackage	tx_doctrine
 */
class tx_doctrine_basic_testcase extends tx_phpunit_testcase {
	
	function testDoctrineConnection() {
		$conn = Doctrine_Manager::connection();
		$this->assertNotNull($conn);
	}
	
	function testDoctrineWorks() {
		$recordTable = Doctrine::getTable('Record');
		
		// export model to table(s)
		$recordTable->export();
		
		$record = new Record();
		$record->name = 'Hello, World';
		$record->save();
		

		$this->assertNotNull($recordTable);
		
		// find all records
		$records = $recordTable->findAll();

		$this->assertEquals(1, $records->count(), 'Record was inserted');
		
		$this->assertEquals('Hello, World', $record->name);
		
		foreach($records as $record) {
			$record->delete();
		}
		
		// $this->assertEquals(true, $record->deleted);
	}
}

?>