<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2008 Christopher Hlubek <hlubek (at) networkteam.com>
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
 
/**
 * Model for fe_user
 *
 * @author	Christopher Hlubek <hlubek (at) networkteam.com>
 * @package	TYPO3
 * @subpackage	tx_doctrine
 */
class tx_doctrine_FeUser extends Doctrine_Record {
	public function setTableDefinition() {
		$this->setTableName('fe_users');
		$this->hasColumn('uid', 'integer', null, 'primary');
        $this->hasColumn('name', 'string', 80);
        // TODO Model the eval=uniqueInPID
        $this->hasColumn('username', 'string', 50);
        $this->hasColumn('password', 'string', 40);
        // TODO usergroup is a commalist relation
        $this->hasColumn('usergroup', 'string');
        
        $this->hasColumn('disable', 'boolean', 1);
        
        $this->hasColumn('deleted', 'boolean', 1);
    }

    public function setUp() {
        $this->actAs('Timestampable', array('created' =>  array('name'    =>  'crdate',
                                                                'type'    =>  'unix_timestamp',
                                                                'disabled' => false,
                                                                'options' =>  array()),
                                            'updated' =>  array('name'    =>  'tstamp',
                                                                'type'    =>  'unix_timestamp',
                                                                'disabled' => false,
                                                                'options' =>  array())));
    }
}
?>