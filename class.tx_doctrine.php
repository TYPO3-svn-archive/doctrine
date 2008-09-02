<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2008 Christopher Hlubek <hlubek (at) networkteam.com>, Bastian Waidelich <bastian@typo3.org>
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

require_once(t3lib_extMgm::extPath('doctrine', 'lib/doctrine/Doctrine.php'));

class tx_doctrine {
	
	public static function init($dsn = NULL, $username = NULL, $password = NULL) {
		$configuration = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['doctrine']);
		spl_autoload_register(array('Doctrine', 'autoload'));

			// include custom tx_doctrine classes 	
		require_once(t3lib_extMgm::extPath('doctrine', 'classes/class.tx_doctrine_Record.php'));
		require_once(t3lib_extMgm::extPath('doctrine', 'classes/class.tx_doctrine_Table.php'));

		if ($dsn === NULL) {
			$dsn = $configuration['dsn'];
		}
		if (!strlen($dsn)) {
			die('no DSN specified!');
		}
		if ($username === NULL) {
			$username = TYPO3_db_username;
		}
		if ($password === NULL) {
			$password = TYPO3_db_password;
		}
		$dsn = sprintf(
			$dsn,
			TYPO3_db_host,
			TYPO3_db
		);

		Doctrine_Manager::connection(
			new PDO(
				$dsn,
				$username,
				$password,
				array(PDO::ATTR_PERSISTENT => TRUE))
			);
	}
	
	public static function loadModel($className, $extensionKey) {
		$modelPath = t3lib_extMgm::extPath($extensionKey) . 'models';
		$baseModelPath = $modelPath . '/generated';

		require_once ($baseModelPath . '/Base' . $className . '.php');
		require_once ($modelPath . '/' . $className . '.php');
		
		Doctrine::loadModel($className);
	}
}
?>