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
 
require_once(t3lib_extMgm::extPath('doctrine', 'tx_doctrine.php'));
require_once(t3lib_extMgm::extPath('doctrine', 'tests/res/class.tx_doctrine_Node.php'));
require_once(t3lib_extMgm::extPath('doctrine', 'models/class.tx_doctrine_FeUser.php'));

/**
 * Testcase for basic Doctrine functionality
 *
 * @author		Christopher Hlubek <hlubek (at) networkteam.com>
 * @package		TYPO3
 * @subpackage	tx_doctrine
 */
class tx_doctrine_basic_testcase extends tx_phpunit_testcase {
	
	/**
	 *
	 * @var tx_doctrine_Node
	 */
	var $nodeTable;
	
	/**
	 *
	 * @var tx_doctrine_Content
	 */
	var $contentTable;
	
	function setUp() {
		$this->nodeTable = Doctrine::getTable('tx_doctrine_Node');
		$this->nodeTable->export();
		
		$this->contentTable = Doctrine::getTable('tx_doctrine_Content');
		$this->contentTable->export();
		
		$this->deleteRecords();
	}
	
	function tearDown() {
		$this->deleteRecords();
	}
	
	function deleteRecords() {
		$records = $this->contentTable->findAll();
		foreach($records as $record) {
			$record->delete();
		}
			
		$records = $this->nodeTable->findAll();
		foreach($records as $record) {
			$record->delete();
		}
	}
	
	function testDoctrineConnection() {
		$conn = Doctrine_Manager::connection();
		$this->assertNotNull($conn, "Doctrine connection is not null");
	}
	
	function testDoctrineWorks() {
		
		$record = new tx_doctrine_Node();
		$record->name = 'Hello, World';
		$record->save();
		
		// find all records
		$records = $this->nodeTable->findAll();

		$this->assertEquals(1, $records->count(), 'Node was inserted');
		
		$this->assertEquals('Hello, World', $record->name);

		
		// $this->assertEquals(true, $record->deleted);
	}
	
	function testForeignKeyConditionalRelation() {

		$relation = new tx_doctrine_Relation_ForeignKeyConditional(array(
        	'type' => Doctrine_Relation::MANY_AGGREGATE,
        	'alias' => 'Childs',
        	'class' => 'tx_doctrine_Node',
        	'table' => Doctrine::getTable('tx_doctrine_Node'),
        	'localTable' => Doctrine::getTable('tx_doctrine_Node'),
        	'local' => 'id',
        	'foreign' => 'parent_id',
        	'condition' => 'this.deleted = false'
        	));

		$this->assertEquals(
			'FROM tx_doctrine_Node WHERE tx_doctrine_Node.parent_id IN (?) AND tx_doctrine_Node.deleted = false',
			$relation->getRelationDql(1));

	}
	
	function testForeignKeyConditional() {
		$relation = $this->nodeTable->getRelation('Childs');
		$this->assertTrue($relation instanceof tx_doctrine_Relation_ForeignKeyConditional);
		// $this->assertEquals('tx_doctrine_Node', $relation->definition['class']);
		
		$root = new tx_doctrine_Node();
		$root->name = 'root';
		$root->save();
		
		$child1 = new tx_doctrine_Node();
		$child1->name = 'child1';
		
		$child1->Parent = $root;
		$child1->save();
		
		$child1 = $this->nodeTable->find($child1->id);
		
		$this->assertEquals($root->id, $child1->parent_id);
		
		$root = $this->nodeTable->find($root->id);
		
		$this->assertNotNull($root, 'root Node was found');
		
		$root->refreshRelated('Childs');
		
		$childs = $root->Childs;
		
		$this->assertEquals(1, count($childs), 'root should have one child');
		$this->assertEquals($child1->id, $childs[0]->id);
		
		$child1->deleted = true;
		$child1->save();

		// We have to refresh the Childs!
		$root->refreshRelated('Childs');
		$childs = $root->Childs;
		$this->assertEquals(0, count($childs));
	}
	
	function testNodeContents() {
		$root = new tx_doctrine_Node();
		$root->name = 'root';
		$root->save();
		
		$content = new tx_doctrine_Content();
		$content->name = 'My first content';
		
		$content->Parent = $root;
		$content->save();
		
		$root->refreshRelated('Contents');
		
		$this->assertEquals(1, count($root->Contents), 'Node has one content');
		
		$content->deleted = true;
		$content->save();
		
		$root->refreshRelated('Contents');
		
		$this->assertEquals(0, count($root->Contents), 'Node has no deleted content');
	}
	
	function testDoctrineFeUser() {
		$feUserTable = Doctrine::getTable('tx_doctrine_FeUser');
		$this->assertEquals('fe_users', $feUserTable->getTableName());
		// test column definition
		$nameColumn = $feUserTable->getColumnDefinition('name');
		$this->assertEquals('string', $nameColumn['type']);
		
		$usernameColumn = $feUserTable->getColumnDefinition('username');
		$this->assertEquals('string', $nameColumn['type']);
	}
	
	function testCustomRelationParser() {
		$parser = $this->nodeTable->getRelationParser();
		$this->assertTrue($parser instanceof tx_doctrine_Relation_Parser,
			'Relation parser is instance of tx_doctrine_RelationParser');

		$relation = new tx_doctrine_Relation_ForeignKeyConditional(array(
        	'type' => Doctrine_Relation::MANY_AGGREGATE,
        	'alias' => 'Test',
        	'class' => 'tx_doctrine_Node',
        	'table' => $this->nodeTable,
        	'localTable' => $this->nodeTable,
        	'local' => 'id',
        	'foreign' => 'parent_id',
        	'condition' => 'this.deleted = false'
        	));
		
		$parser->setRelation('Test', $relation);
		
		$this->assertEquals($relation, $parser->getRelation('Test'));
	}
}

?>