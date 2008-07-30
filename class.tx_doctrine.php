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
	
	public static function init() {
		spl_autoload_register(array('Doctrine', 'autoload'));

			// include custom tx_doctrine classes 	
		require_once(t3lib_extMgm::extPath('doctrine', 'classes/class.tx_doctrine_Record.php'));
		require_once(t3lib_extMgm::extPath('doctrine', 'classes/class.tx_doctrine_Table.php'));

			// Get the connection parameters from TYPO3
			// FIXME hardcoded to MySQL
		Doctrine_Manager::connection(
			new PDO(
				'mysql:host=' . TYPO3_db_host . ';dbname=' . TYPO3_db,
				TYPO3_db_username,
				TYPO3_db_password,
				array( PDO::ATTR_PERSISTENT => true))
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


tx_doctrine::init();
?>