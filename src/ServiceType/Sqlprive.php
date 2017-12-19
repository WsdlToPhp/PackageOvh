<?php

namespace PayPal\ServiceType;

use \SoapClient\SoapClientBase;

/**
 * This class stands for Sqlprive ServiceType
 * @subpackage Services
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Sqlprive extends SoapClientBase
{
    /**
     * Method to call the operation originally named sqlpriveMysqlRestart
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\SqlpriveMysqlRestart $parameters
     * @return \PayPal\StructType\SqlpriveMysqlRestartResponse|bool
     */
    public function sqlpriveMysqlRestart(\PayPal\StructType\SqlpriveMysqlRestart $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->sqlpriveMysqlRestart($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named sqlpriveMysqlVersion
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\SqlpriveMysqlVersion $parameters
     * @return \PayPal\StructType\SqlpriveMysqlVersionResponse|bool
     */
    public function sqlpriveMysqlVersion(\PayPal\StructType\SqlpriveMysqlVersion $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->sqlpriveMysqlVersion($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * sqlpriveMysqlDatabaseImportFromFile
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\SqlpriveMysqlDatabaseImportFromFile $parameters
     * @return \PayPal\StructType\SqlpriveMysqlDatabaseImportFromFileResponse|bool
     */
    public function sqlpriveMysqlDatabaseImportFromFile(\PayPal\StructType\SqlpriveMysqlDatabaseImportFromFile $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->sqlpriveMysqlDatabaseImportFromFile($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named sqlpriveMysqlUserList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\SqlpriveMysqlUserList $parameters
     * @return \PayPal\StructType\SqlpriveMysqlUserListResponse|bool
     */
    public function sqlpriveMysqlUserList(\PayPal\StructType\SqlpriveMysqlUserList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->sqlpriveMysqlUserList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named sqlpriveMysqlRamUsed
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\SqlpriveMysqlRamUsed $parameters
     * @return \PayPal\StructType\SqlpriveMysqlRamUsedResponse|bool
     */
    public function sqlpriveMysqlRamUsed(\PayPal\StructType\SqlpriveMysqlRamUsed $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->sqlpriveMysqlRamUsed($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named sqlpriveAlertInfo
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\SqlpriveAlertInfo $parameters
     * @return \PayPal\StructType\SqlpriveAlertInfoResponse|bool
     */
    public function sqlpriveAlertInfo(\PayPal\StructType\SqlpriveAlertInfo $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->sqlpriveAlertInfo($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named sqlpriveList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\SqlpriveList $parameters
     * @return \PayPal\StructType\SqlpriveListResponse|bool
     */
    public function sqlpriveList(\PayPal\StructType\SqlpriveList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->sqlpriveList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named sqlpriveMysqlLogs
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\SqlpriveMysqlLogs $parameters
     * @return \PayPal\StructType\SqlpriveMysqlLogsResponse|bool
     */
    public function sqlpriveMysqlLogs(\PayPal\StructType\SqlpriveMysqlLogs $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->sqlpriveMysqlLogs($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named sqlpriveCronSet
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\SqlpriveCronSet $parameters
     * @return \PayPal\StructType\SqlpriveCronSetResponse|bool
     */
    public function sqlpriveCronSet(\PayPal\StructType\SqlpriveCronSet $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->sqlpriveCronSet($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named sqlpriveMysqlDatabasePrivilegeList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\SqlpriveMysqlDatabasePrivilegeList $parameters
     * @return \PayPal\StructType\SqlpriveMysqlDatabasePrivilegeListResponse|bool
     */
    public function sqlpriveMysqlDatabasePrivilegeList(\PayPal\StructType\SqlpriveMysqlDatabasePrivilegeList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->sqlpriveMysqlDatabasePrivilegeList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named sqlpriveCronDel
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\SqlpriveCronDel $parameters
     * @return \PayPal\StructType\SqlpriveCronDelResponse|bool
     */
    public function sqlpriveCronDel(\PayPal\StructType\SqlpriveCronDel $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->sqlpriveCronDel($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * sqlpriveMysqlDatabaseImportFromHost
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\SqlpriveMysqlDatabaseImportFromHost $parameters
     * @return \PayPal\StructType\SqlpriveMysqlDatabaseImportFromHostResponse|bool
     */
    public function sqlpriveMysqlDatabaseImportFromHost(\PayPal\StructType\SqlpriveMysqlDatabaseImportFromHost $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->sqlpriveMysqlDatabaseImportFromHost($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named sqlpriveAlertSet
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\SqlpriveAlertSet $parameters
     * @return \PayPal\StructType\SqlpriveAlertSetResponse|bool
     */
    public function sqlpriveAlertSet(\PayPal\StructType\SqlpriveAlertSet $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->sqlpriveAlertSet($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named sqlpriveMysqlOvhMyAdmin
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\SqlpriveMysqlOvhMyAdmin $parameters
     * @return \PayPal\StructType\SqlpriveMysqlOvhMyAdminResponse|bool
     */
    public function sqlpriveMysqlOvhMyAdmin(\PayPal\StructType\SqlpriveMysqlOvhMyAdmin $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->sqlpriveMysqlOvhMyAdmin($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named sqlpriveMysqlDatabaseList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\SqlpriveMysqlDatabaseList $parameters
     * @return \PayPal\StructType\SqlpriveMysqlDatabaseListResponse|bool
     */
    public function sqlpriveMysqlDatabaseList(\PayPal\StructType\SqlpriveMysqlDatabaseList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->sqlpriveMysqlDatabaseList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named sqlpriveMysqlProcessList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\SqlpriveMysqlProcessList $parameters
     * @return \PayPal\StructType\SqlpriveMysqlProcessListResponse|bool
     */
    public function sqlpriveMysqlProcessList(\PayPal\StructType\SqlpriveMysqlProcessList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->sqlpriveMysqlProcessList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named sqlpriveMysqlActivateOvhManagement
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\SqlpriveMysqlActivateOvhManagement $parameters
     * @return \PayPal\StructType\SqlpriveMysqlActivateOvhManagementResponse|bool
     */
    public function sqlpriveMysqlActivateOvhManagement(\PayPal\StructType\SqlpriveMysqlActivateOvhManagement $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->sqlpriveMysqlActivateOvhManagement($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named sqlpriveMysqlGetPossibleDump
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\SqlpriveMysqlGetPossibleDump $parameters
     * @return \PayPal\StructType\SqlpriveMysqlGetPossibleDumpResponse|bool
     */
    public function sqlpriveMysqlGetPossibleDump(\PayPal\StructType\SqlpriveMysqlGetPossibleDump $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->sqlpriveMysqlGetPossibleDump($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named sqlpriveFtpPassword
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\SqlpriveFtpPassword $parameters
     * @return \PayPal\StructType\SqlpriveFtpPasswordResponse|bool
     */
    public function sqlpriveFtpPassword(\PayPal\StructType\SqlpriveFtpPassword $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->sqlpriveFtpPassword($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named sqlpriveMysqlRootPassword
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\SqlpriveMysqlRootPassword $parameters
     * @return \PayPal\StructType\SqlpriveMysqlRootPasswordResponse|bool
     */
    public function sqlpriveMysqlRootPassword(\PayPal\StructType\SqlpriveMysqlRootPassword $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->sqlpriveMysqlRootPassword($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named sqlpriveMysqlProcessKill
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\SqlpriveMysqlProcessKill $parameters
     * @return \PayPal\StructType\SqlpriveMysqlProcessKillResponse|bool
     */
    public function sqlpriveMysqlProcessKill(\PayPal\StructType\SqlpriveMysqlProcessKill $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->sqlpriveMysqlProcessKill($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named sqlpriveMysqlDatabaseSave
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\SqlpriveMysqlDatabaseSave $parameters
     * @return \PayPal\StructType\SqlpriveMysqlDatabaseSaveResponse|bool
     */
    public function sqlpriveMysqlDatabaseSave(\PayPal\StructType\SqlpriveMysqlDatabaseSave $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->sqlpriveMysqlDatabaseSave($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named sqlpriveCronGet
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\SqlpriveCronGet $parameters
     * @return \PayPal\StructType\SqlpriveCronGetResponse|bool
     */
    public function sqlpriveCronGet(\PayPal\StructType\SqlpriveCronGet $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->sqlpriveCronGet($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \PayPal\StructType\SqlpriveAlertInfoResponse|\PayPal\StructType\SqlpriveAlertSetResponse|\PayPal\StructType\SqlpriveCronDelResponse|\PayPal\StructType\SqlpriveCronGetResponse|\PayPal\StructType\SqlpriveCronSetResponse|\PayPal\StructType\SqlpriveFtpPasswordResponse|\PayPal\StructType\SqlpriveListResponse|\PayPal\StructType\SqlpriveMysqlActivateOvhManagementResponse|\PayPal\StructType\SqlpriveMysqlDatabaseImportFromFileResponse|\PayPal\StructType\SqlpriveMysqlDatabaseImportFromHostResponse|\PayPal\StructType\SqlpriveMysqlDatabaseListResponse|\PayPal\StructType\SqlpriveMysqlDatabasePrivilegeListResponse|\PayPal\StructType\SqlpriveMysqlDatabaseSaveResponse|\PayPal\StructType\SqlpriveMysqlGetPossibleDumpResponse|\PayPal\StructType\SqlpriveMysqlLogsResponse|\PayPal\StructType\SqlpriveMysqlOvhMyAdminResponse|\PayPal\StructType\SqlpriveMysqlProcessKillResponse|\PayPal\StructType\SqlpriveMysqlProcessListResponse|\PayPal\StructType\SqlpriveMysqlRamUsedResponse|\PayPal\StructType\SqlpriveMysqlRestartResponse|\PayPal\StructType\SqlpriveMysqlRootPasswordResponse|\PayPal\StructType\SqlpriveMysqlUserListResponse|\PayPal\StructType\SqlpriveMysqlVersionResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
