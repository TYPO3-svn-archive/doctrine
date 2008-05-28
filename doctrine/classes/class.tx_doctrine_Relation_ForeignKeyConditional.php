<?php
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