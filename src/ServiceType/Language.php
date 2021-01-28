<?php

namespace Ovh\ServiceType;

use \SoapClient\SoapClientBase;

/**
 * This class stands for Language ServiceType
 * @subpackage Services
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Language extends SoapClientBase
{
    /**
     * Method to call the operation originally named language
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\Language $parameters
     * @return \Ovh\StructType\LanguageResponse|bool
     */
    public function language(\Ovh\StructType\Language $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('language', array(
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
     * @return \Ovh\StructType\LanguageResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
