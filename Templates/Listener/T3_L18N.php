<?php

class Doctrine_Template_Listener_T3_L18N extends Doctrine_Record_Listener {
	/**
	 * Array of L18N options
	 *
	 * @var string
	 */
	protected $_options = array();

	/**
	 * __construct
	 *
	 * @param string $options 
	 * @return void
	 */
	public function __construct(array $options) {
		$this->_options = $options;
	}


	/**
	 * Implement preDqlSelect() hook and insert language conditions
	 * into current query.
	 *
	 * @param Doctrine_Event $event 
	 * @return void
	 */
	public function preDqlSelect(Doctrine_Event $event) {
		$params = $event->getParams();
		$field = $params['alias'] . '.' . $this->_options['name'];
		$query = $event->getQuery();
		if ( ! $query->contains($field)) {
			$query->addWhere($field . ' IN (?)', '0, -1');
		}
	}
}