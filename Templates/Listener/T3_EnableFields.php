<?php

class Doctrine_Template_Listener_T3_EnableFields extends Doctrine_Record_Listener {
	/**
	 * Array of options
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
	 * Skip the normal delete options so we can override it with our own
	 *
	 * @param Doctrine_Event $event
	 * @return void
	 */
	public function preDelete(Doctrine_Event $event) {
		if (!isset($this->_options['delete'])) {
			return;
		}
		
		$event->skipOperation();
	}

	/**
	 * Implement postDelete() hook and set the deleted flag to true
	 *
	 * @param Doctrine_Event $event
	 * @return void
	 */
	public function postDelete(Doctrine_Event $event) {
		if (!isset($this->_options['delete'])) {
			return;
		}

		$name = $this->_options['delete'];
		$event->getInvoker()->$name = true;
		$event->getInvoker()->save();
	}

	/**
	 * Implement preDqlDelete() hook and modify a dql delete query so it updates the deleted flag
	 * instead of deleting the record
	 *
	 * @param Doctrine_Event $event
	 * @return void
	 */
	public function preDqlDelete(Doctrine_Event $event) {
		if (!isset($this->_options['delete'])) {
			return;
		}

		$params = $event->getParams();
		$field = $params['alias'] . '.' . $this->_options['delete'];
		$query = $event->getQuery();
		if ( ! $query->contains($field)) {
			$query->from('')->update($params['component'] . ' ' . $params['alias']);
			$query->set($field, '?', array(false));
			$query->addWhere($field . ' = ?', array(true));
		}
	}

	/**
	 * Implement preDqlSelect() hook and insert deleted, disabled, starttime, endtime and fe_group conditions
	 * into current query.
	 *
	 * @param Doctrine_Event $event 
	 * @return void
	 */
	public function preDqlSelect(Doctrine_Event $event) {
		$params = $event->getParams();
		$query = $event->getQuery();
		$tableName = $event->getInvoker()->getTable()->name;
		
			// delete
		if (isset($this->_options['delete'])) {
			$deleteField = $params['alias'] . '.' . $this->_options['delete'];
			if (!$query->contains($deleteField)) {
				$query->addWhere($deleteField . ' = ?', array(false));
			}
		}

			// disabled
		$showDisabled = $tableName == 'pages' ? $GLOBALS['TSFE']->showHiddenPage : $GLOBALS['TSFE']->showHiddenRecords;
		if (!$showDisabled && isset($this->_options['disabled'])) {
			$disabledField = $params['alias'] . '.' . $this->_options['disabled'];
			if (!$query->contains($disabledField)) {
				$query->addWhere($disabledField . ' = ?', array(false));
			}
		}

			// starttime
		if (isset($this->_options['starttime'])) {
			$starttimeField = $params['alias'] . '.' . $this->_options['starttime'];
			if (!$query->contains($starttimeField)) {
				$query->addWhere($starttimeField . ' <= ?', array($GLOBALS['SIM_ACCESS_TIME']));
			}
		}

			// endtime
		if (isset($this->_options['endtime'])) {
			$endtimeField = $params['alias'] . '.' . $this->_options['endtime'];
			if (!$query->contains($endtimeField)) {
				$query->addWhere($endtimeField . ' = 0 OR ' . $endtimeField . ' > ?', array($GLOBALS['SIM_ACCESS_TIME']));
			}
		}

			// fe_group
		if (isset($this->_options['fe_group'])) {
			$feGroupField = $params['alias'] . '.' . $this->_options['fe_group'];
			if (!$query->contains($feGroupField)) {
				$memberGroups = t3lib_div::intExplode(',',$GLOBALS['TSFE']->gr_list);
				$orChecks = array();
				$orChecks[] = $feGroupField . '=\'\'';
				$orChecks[] = $feGroupField . ' IS NULL';
				$orChecks[] = $feGroupField . '=\'0\'';
				foreach($memberGroups as $groupUid)	{
					$orChecks[] = '(' . $feGroupField . ' LIKE \'%,' . $groupUid . ',%\' OR ' . $feGroupField . ' LIKE \'' . $groupUid . ',%\' OR ' . $feGroupField . ' LIKE \'%,' . $groupUid . '\' OR ' . $feGroupField . ' = \'' . $groupUid . '\')';
				}
				$query->addWhere(implode(' OR ',$orChecks));
			}
		}
	}
}