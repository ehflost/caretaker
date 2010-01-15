<?php
/***************************************************************
* Copyright notice
*
* (c) 2009-2010 by n@work GmbH and networkteam GmbH
*
* All rights reserved
*
* This script is part of the Caretaker project. The Caretaker project
* is free software; you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation; either version 2 of the License, or
* (at your option) any later version.
*
* The GNU General Public License can be found at
* http://www.gnu.org/copyleft/gpl.html.
*
* This script is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
* GNU General Public License for more details.
*
* This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

/**
 * This is a file of the caretaker project.
 * http://forge.typo3.org/projects/show/extension-caretaker
 *
 * Project sponsored by:
 * n@work GmbH - http://www.work.de
 * networkteam GmbH - http://www.networkteam.com/
 * 
 * @author Thomas Hempel <thomas@work.de>
 *
 * $Id: ext_localconf.php 28437 2010-01-06 09:46:28Z martoro $
 */

	// load Service Helper
include_once(t3lib_extMgm::extPath('caretaker').'classes/helpers/class.tx_caretaker_ServiceHelper.php');

	// register Test-Services
tx_caretaker_ServiceHelper::registerCaretakerTestService ($_EXTKEY , 'classes/services/tests' , 'tx_caretaker_ping',  'Ping' , 'Retrieves System Informations' );
tx_caretaker_ServiceHelper::registerCaretakerTestService ($_EXTKEY , 'classes/services/tests' , 'tx_caretaker_http',  'HTTP' , 'Call an URI and check the HTTP-Status' );

	//register Notification-Services
tx_caretaker_ServiceHelper::registerCaretakerNotificationService( $_EXTKEY, 'SimpleMailNotificationService', 'classes/services/notifications/class.tx_caretaker_SimpleMailNotificationService.php', 'tx_caretaker_SimpleMailNotificationService' );
tx_caretaker_ServiceHelper::registerCaretakerNotificationService( $_EXTKEY, 'CliNotificationService', 'classes/services/notifications/class.tx_caretaker_CliNotificationService.php', 'tx_caretaker_CliNotificationService' );
tx_caretaker_ServiceHelper::registerCaretakerNotificationService( $_EXTKEY, 'NotificationService', 'classes/services/notifications/escalation/class.tx_caretaker_NotificationService.php', 'tx_caretaker_NotificationService' );

	// register ExitPoint services
tx_caretaker_ServiceHelper::registerNotificationExitPoint($_EXTKEY, 'classes/services/notifications/escalation/exitpoints', 'tx_caretaker_NotificationMail', 'E-Mail', 'Sends an e-mail');

?>