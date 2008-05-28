<?php

require_once(t3lib_extMgm::extPath('doctrine', 'classes/class.tx_doctrine_Relation_Parser.php'));

class tx_doctrine_NodeTable extends Doctrine_Table {
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