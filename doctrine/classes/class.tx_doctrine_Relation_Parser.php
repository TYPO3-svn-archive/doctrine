<?php

class tx_doctrine_Relation_Parser extends Doctrine_Relation_Parser {
    /**
     * Set a relation for an alias
     * 
     * @param string $name
     * @param Doctrine_Relation $relation
     */
    public function setRelation($name, $relation) {
    	$this->_relations[$name] = $relation;
    }
}
?>