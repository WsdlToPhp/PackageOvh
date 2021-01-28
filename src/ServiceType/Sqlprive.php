<?php

namespace Ovh\ServiceType;

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
     * @param \Ovh\StructType\SqlpriveMysqlRestart $parameters
     * @return \Ovh\StructType\SqlpriveMysqlRestartResponse|bool
     */
    public function sqlpriveMysqlRestart(\Ovh\StructType\SqlpriveMysqlRestart $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('sqlpriveMysqlRestart', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
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
     * @param \Ovh\StructType\SqlpriveMysqlVersion $parameters
     * @return \Ovh\StructType\SqlpriveMysqlVersionResponse|bool
     */
    public function sqlpriveMysqlVersion(\Ovh\StructType\SqlpriveMysqlVersion $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('sqlpriveMysqlVersion', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
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
     * @param \Ovh\StructType\SqlpriveMysqlDatabaseImportFromFile $parameters
     * @return \Ovh\StructType\SqlpriveMysqlDatabaseImportFromFileResponse|bool
     */
    public function sqlpriveMysqlDatabaseImportFromFile(\Ovh\StructType\SqlpriveMysqlDatabaseImportFromFile $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('sqlpriveMysqlDatabaseImportFromFile', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
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
     * @param \Ovh\StructType\SqlpriveMysqlUserList $parameters
     * @return \Ovh\StructType\SqlpriveMysqlUserListResponse|bool
     */
    public function sqlpriveMysqlUserList(\Ovh\StructType\SqlpriveMysqlUserList $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('sqlpriveMysqlUserList', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
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
     * @param \Ovh\StructType\SqlpriveMysqlRamUsed $parameters
     * @return \Ovh\StructType\SqlpriveMysqlRamUsedResponse|bool
     */
    public function sqlpriveMysqlRamUsed(\Ovh\StructType\SqlpriveMysqlRamUsed $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('sqlpriveMysqlRamUsed', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
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
     * @param \Ovh\StructType\SqlpriveAlertInfo $parameters
     * @return \Ovh\StructType\SqlpriveAlertInfoResponse|bool
     */
    public function sqlpriveAlertInfo(\Ovh\StructType\SqlpriveAlertInfo $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('sqlpriveAlertInfo', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
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
     * @param \Ovh\StructType\SqlpriveList $parameters
     * @return \Ovh\StructType\SqlpriveListResponse|bool
     */
    public function sqlpriveList(\Ovh\StructType\SqlpriveList $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('sqlpriveList', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
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
     * @param \Ovh\StructType\SqlpriveMysqlLogs $parameters
     * @return \Ovh\StructType\SqlpriveMysqlLogsResponse|bool
     */
    public function sqlpriveMysqlLogs(\Ovh\StructType\SqlpriveMysqlLogs $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('sqlpriveMysqlLogs', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
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
     * @param \Ovh\StructType\SqlpriveCronSet $parameters
     * @return \Ovh\StructType\SqlpriveCronSetResponse|bool
     */
    public function sqlpriveCronSet(\Ovh\StructType\SqlpriveCronSet $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('sqlpriveCronSet', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
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
     * @param \Ovh\StructType\SqlpriveMysqlDatabasePrivilegeList $parameters
     * @return \Ovh\StructType\SqlpriveMysqlDatabasePrivilegeListResponse|bool
     */
    public function sqlpriveMysqlDatabasePrivilegeList(\Ovh\StructType\SqlpriveMysqlDatabasePrivilegeList $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('sqlpriveMysqlDatabasePrivilegeList', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
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
     * @param \Ovh\StructType\SqlpriveCronDel $parameters
     * @return \Ovh\StructType\SqlpriveCronDelResponse|bool
     */
    public function sqlpriveCronDel(\Ovh\StructType\SqlpriveCronDel $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('sqlpriveCronDel', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
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
     * @param \Ovh\StructType\SqlpriveMysqlDatabaseImportFromHost $parameters
     * @return \Ovh\StructType\SqlpriveMysqlDatabaseImportFromHostResponse|bool
     */
    public function sqlpriveMysqlDatabaseImportFromHost(\Ovh\StructType\SqlpriveMysqlDatabaseImportFromHost $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('sqlpriveMysqlDatabaseImportFromHost', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
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
     * @param \Ovh\StructType\SqlpriveAlertSet $parameters
     * @return \Ovh\StructType\SqlpriveAlertSetResponse|bool
     */
    public function sqlpriveAlertSet(\Ovh\StructType\SqlpriveAlertSet $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('sqlpriveAlertSet', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
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
     * @param \Ovh\StructType\SqlpriveMysqlOvhMyAdmin $parameters
     * @return \Ovh\StructType\SqlpriveMysqlOvhMyAdminResponse|bool
     */
    public function sqlpriveMysqlOvhMyAdmin(\Ovh\StructType\SqlpriveMysqlOvhMyAdmin $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('sqlpriveMysqlOvhMyAdmin', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
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
     * @param \Ovh\StructType\SqlpriveMysqlDatabaseList $parameters
     * @return \Ovh\StructType\SqlpriveMysqlDatabaseListResponse|bool
     */
    public function sqlpriveMysqlDatabaseList(\Ovh\StructType\SqlpriveMysqlDatabaseList $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('sqlpriveMysqlDatabaseList', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
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
     * @param \Ovh\StructType\SqlpriveMysqlProcessList $parameters
     * @return \Ovh\StructType\SqlpriveMysqlProcessListResponse|bool
     */
    public function sqlpriveMysqlProcessList(\Ovh\StructType\SqlpriveMysqlProcessList $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('sqlpriveMysqlProcessList', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
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
     * @param \Ovh\StructType\SqlpriveMysqlActivateOvhManagement $parameters
     * @return \Ovh\StructType\SqlpriveMysqlActivateOvhManagementResponse|bool
     */
    public function sqlpriveMysqlActivateOvhManagement(\Ovh\StructType\SqlpriveMysqlActivateOvhManagement $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('sqlpriveMysqlActivateOvhManagement', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
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
     * @param \Ovh\StructType\SqlpriveMysqlGetPossibleDump $parameters
     * @return \Ovh\StructType\SqlpriveMysqlGetPossibleDumpResponse|bool
     */
    public function sqlpriveMysqlGetPossibleDump(\Ovh\StructType\SqlpriveMysqlGetPossibleDump $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('sqlpriveMysqlGetPossibleDump', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
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
     * @param \Ovh\StructType\SqlpriveFtpPassword $parameters
     * @return \Ovh\StructType\SqlpriveFtpPasswordResponse|bool
     */
    public function sqlpriveFtpPassword(\Ovh\StructType\SqlpriveFtpPassword $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('sqlpriveFtpPassword', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
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
     * @param \Ovh\StructType\SqlpriveMysqlRootPassword $parameters
     * @return \Ovh\StructType\SqlpriveMysqlRootPasswordResponse|bool
     */
    public function sqlpriveMysqlRootPassword(\Ovh\StructType\SqlpriveMysqlRootPassword $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('sqlpriveMysqlRootPassword', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
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
     * @param \Ovh\StructType\SqlpriveMysqlProcessKill $parameters
     * @return \Ovh\StructType\SqlpriveMysqlProcessKillResponse|bool
     */
    public function sqlpriveMysqlProcessKill(\Ovh\StructType\SqlpriveMysqlProcessKill $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('sqlpriveMysqlProcessKill', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
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
     * @param \Ovh\StructType\SqlpriveMysqlDatabaseSave $parameters
     * @return \Ovh\StructType\SqlpriveMysqlDatabaseSaveResponse|bool
     */
    public function sqlpriveMysqlDatabaseSave(\Ovh\StructType\SqlpriveMysqlDatabaseSave $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('sqlpriveMysqlDatabaseSave', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
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
     * @param \Ovh\StructType\SqlpriveCronGet $parameters
     * @return \Ovh\StructType\SqlpriveCronGetResponse|bool
     */
    public function sqlpriveCronGet(\Ovh\StructType\SqlpriveCronGet $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('sqlpriveCronGet', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \Ovh\StructType\SqlpriveAlertInfoResponse|\Ovh\StructType\SqlpriveAlertSetResponse|\Ovh\StructType\SqlpriveCronDelResponse|\Ovh\StructType\SqlpriveCronGetResponse|\Ovh\StructType\SqlpriveCronSetResponse|\Ovh\StructType\SqlpriveFtpPasswordResponse|\Ovh\StructType\SqlpriveListResponse|\Ovh\StructType\SqlpriveMysqlActivateOvhManagementResponse|\Ovh\StructType\SqlpriveMysqlDatabaseImportFromFileResponse|\Ovh\StructType\SqlpriveMysqlDatabaseImportFromHostResponse|\Ovh\StructType\SqlpriveMysqlDatabaseListResponse|\Ovh\StructType\SqlpriveMysqlDatabasePrivilegeListResponse|\Ovh\StructType\SqlpriveMysqlDatabaseSaveResponse|\Ovh\StructType\SqlpriveMysqlGetPossibleDumpResponse|\Ovh\StructType\SqlpriveMysqlLogsResponse|\Ovh\StructType\SqlpriveMysqlOvhMyAdminResponse|\Ovh\StructType\SqlpriveMysqlProcessKillResponse|\Ovh\StructType\SqlpriveMysqlProcessListResponse|\Ovh\StructType\SqlpriveMysqlRamUsedResponse|\Ovh\StructType\SqlpriveMysqlRestartResponse|\Ovh\StructType\SqlpriveMysqlRootPasswordResponse|\Ovh\StructType\SqlpriveMysqlUserListResponse|\Ovh\StructType\SqlpriveMysqlVersionResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
