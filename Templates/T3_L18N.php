<?php
require_once(t3lib_extMgm::extPath('doctrine', 'Templates/Listener/T3_L18N.php'));

class Doctrine_Template_T3_L18N extends Doctrine_Template {
	/**
	 * Array of T3_L18N options
	 *
	 * @var string
	 */
	protected $_options = array(
		'name' =>  'sys_language_uid'
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
	 * Set table definition for T3_L18N behavior
	 *
	 * @return void
	 */
	public function setTableDefinition() {
		$this->addListener(new Doctrine_Template_Listener_T3_L18N($this->_options));
	}

	/**
	 * Returns translated record
	 * Usage:
	 * $user = new Doctrine_Query()->from('user')->fetchOne();
	 * $user->translate('hideNonTranslated');
	 *
	 * @param string TYPO3 $overlayMode
	 * @param integer $languageUid uid of target language. If NULL, current language is retrieved ($GLOBALS['TSFE']->sys_language_content)
	 * @return Doctrine_Record_Abstract the translated record
	 */
	public function translate($overlayMode = '', $languageUid = NULL) {
		$record = $this->getInvoker();
		if ($languageUid === NULL) {
			$languageUid = $GLOBALS['TSFE']->sys_language_content;
		}

		if ($languageUid > 0) {
			$tableName = $record->getTable()->getTableName();
			$recordArray = $GLOBALS['TSFE']->sys_page->getRecordOverlay($tableName, $record->toArray(), $languageUid, $overlayMode);
			if (is_array($recordArray)) {
				$record->synchronizeWithArray($recordArray);
			}
		}

		return $record;
	}
}