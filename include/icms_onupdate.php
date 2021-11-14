<?php
/**
* File containing onUpdate and onInstall functions for the module
*
* This file is included by the core in order to trigger onInstall or onUpdate functions when needed.
* Of course, onUpdate function will be triggered when the module is updated, and onInstall when
* the module is originally installed. The name of this file needs to be defined in the
* icms_version.php
*
* <code>
* $modversion['onInstall'] = "include/icms_onupdate.php";
* $modversion['onUpdate'] = "include/icms_onupdate.php";
* </code>
*
* @copyright	The ImpressCMS Project <http://www.impresscms.org/>
* @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
* @since		1.0
* @author		Gustavo Pilla <nekro@impresscms.org>
* @version		$Id$
*/

if (!defined("ICMS_ROOT_PATH")) die("ICMS root path not defined");

// this needs to be the latest db version
define('IMMESSAGING_DB_VERSION', 1);

/**
 * it is possible to define custom functions which will be call when the module is updating at the
 * correct time in update incrementation. Simpy define a function named <direname_db_upgrade_db_version>
 */
/*function immenu_db_upgrade_1() {
}
function immenu_db_upgrade_2() {
}*/

function xoops_module_update_immessage($module) {
	/**
	 * Using the IcmsDatabaseUpdater to automaticallly manage the database upgrade dynamically
	 * according to the class defined in the module
	 */
	$icmsDatabaseUpdater = XoopsDatabaseFactory::getDatabaseUpdater();
	$icmsDatabaseUpdater->moduleUpgrade($module);
    return true;
}

function xoops_module_install_immessage($module) {

	return true;
}
