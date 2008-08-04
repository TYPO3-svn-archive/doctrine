<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

$GLOBALS['_EXTCONF'] = unserialize($GLOBALS['_EXTCONF']);

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF'][$GLOBALS['_EXTKEY']]['dsn'] = $GLOBALS['_EXTCONF']['dsn'];
?>