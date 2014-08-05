<?php
/**
 * Create the needed database fields
 *
 * @category   Extension
 * @package    Calendarize
 * @subpackage Slots
 * @author     Tim Lochmüller <tim@fruit-lab.de>
 */

namespace HDNET\Calendarize\Slots;

use HDNET\Calendarize\Register;

/**
 * Create the needed database fields
 *
 * @package    Calendarize
 * @subpackage Slots
 * @author     Tim Lochmüller <tim@fruit-lab.de>
 */
class Database {

	/**
	 * Add the smart object SQL string the the signal below
	 *
	 * @signalClass \TYPO3\CMS\Install\Service\SqlExpectedSchemaService
	 * @signalName tablesDefinitionIsBeingBuilt
	 */
	public function loadSmartObjectTables(array $sqlString) {
		$sqlString[] = $this->getCalendarizeDatabaseString();
		return array('sqlString' => $sqlString);
	}

	/**
	 * Add the smart object SQL string the the signal below
	 *
	 * @signalClass \TYPO3\CMS\Extensionmanager\Utility\InstallUtility
	 * @signalName tablesDefinitionIsBeingBuilt
	 */
	public function updateSmartObjectTables(array $sqlString, $extensionKey) {
		$sqlString[] = $this->getCalendarizeDatabaseString();
		return array(
			'sqlString'    => $sqlString,
			'extensionKey' => $extensionKey
		);
	}

	/**
	 * @return string
	 */
	protected function getCalendarizeDatabaseString() {
		$sql = array();
		foreach (Register::getRegister() as $configuration) {
			$sql[] = 'CREATE TABLE ' . $configuration['tableName'] . ' (
			calendarize tinytext
			);';
		}
		return implode(LF, $sql);
	}
} 