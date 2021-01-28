<?php

namespace Ovh\ServiceType;

use \SoapClient\SoapClientBase;

/**
 * This class stands for Overquota ServiceType
 * @subpackage Services
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Overquota extends SoapClientBase
{
    /**
     * Method to call the operation originally named overquotaInfo
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\OverquotaInfo $parameters
     * @return \Ovh\StructType\OverquotaInfoResponse|bool
     */
    public function overquotaInfo(\Ovh\StructType\OverquotaInfo $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('overquotaInfo', array(
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
     * @return \Ovh\StructType\OverquotaInfoResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
