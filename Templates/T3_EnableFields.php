<?php
require_once(t3lib_extMgm::extPath('doctrine', 'Templates/Listener/T3_EnableFields.php'));

class Doctrine_Template_T3_EnableFields extends Doctrine_Template {
	/**
	 * Array of T3_EnableField options
	 *
	 * @var string
	 */
	protected $_options = array(
		'delete' => NULL,
		'disabled' => NULL,
		'starttime' => NULL,
		'endtime' => NULL,
		'fe_group' => NULL,
	);

	/**
	 * __construct
	 *
	 * @param string $array
	 * @return void
	 */
	public function __construct(array $options = array()) {
		$this->_options = Doctrine_Lib::arrayDeepMerge($this->_options, $options);
	}

	/**
	 * Set table definition for T3_EnableField behavior and register listener
	 *
	 * @return void
	 */
	public function setTableDefinition() {
		if (isset($this->_options['delete'])) {
			$this->hasColumn($this->_options['delete'], 'boolean', 1, array('default' => false, 'notnull' => true));
		}
		if (isset($this->_options['disabled'])) {
			$this->hasColumn($this->_options['disabled'], 'boolean', 1, array('default' => false, 'notnull' => true));
		}
		if (isset($this->_options['starttime'])) {
			$this->hasColumn($this->_options['starttime'], 'integer', 4, array('type' => 'integer', 'length' => 4, 'default' => '0', 'notnull' => true));
		}
		if (isset($this->_options['endtime'])) {
			$this->hasColumn($this->_options['endtime'], 'integer', 4, array('type' => 'integer', 'length' => 4, 'default' => '0', 'notnull' => true));
		}
		if (isset($this->_options['fe_group'])) {
			$this->hasColumn($this->_options['fe_group'], 'integer', 4, array('type' => 'integer', 'length' => 4, 'default' => '0', 'notnull' => true));
		}

		$this->addListener(new Doctrine_Template_Listener_T3_EnableFields($this->_options));
	}
}