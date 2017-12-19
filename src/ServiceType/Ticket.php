<?php

namespace Ovh\ServiceType;

use \SoapClient\SoapClientBase;

/**
 * This class stands for Ticket ServiceType
 * @subpackage Services
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Ticket extends SoapClientBase
{
    /**
     * Method to call the operation originally named ticketListIncidentsByDomain
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TicketListIncidentsByDomain $parameters
     * @return \Ovh\StructType\TicketListIncidentsByDomainResponse|bool
     */
    public function ticketListIncidentsByDomain(\Ovh\StructType\TicketListIncidentsByDomain $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ticketListIncidentsByDomain($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ticketListIncidents
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TicketListIncidents $parameters
     * @return \Ovh\StructType\TicketListIncidentsResponse|bool
     */
    public function ticketListIncidents(\Ovh\StructType\TicketListIncidents $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ticketListIncidents($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ticketReopen
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TicketReopen $parameters
     * @return \Ovh\StructType\TicketReopenResponse|bool
     */
    public function ticketReopen(\Ovh\StructType\TicketReopen $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ticketReopen($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ticketListContact
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TicketListContact $parameters
     * @return \Ovh\StructType\TicketListContactResponse|bool
     */
    public function ticketListContact(\Ovh\StructType\TicketListContact $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ticketListContact($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ticketGet
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TicketGet $parameters
     * @return \Ovh\StructType\TicketGetResponse|bool
     */
    public function ticketGet(\Ovh\StructType\TicketGet $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ticketGet($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ticketAnswer
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TicketAnswer $parameters
     * @return \Ovh\StructType\TicketAnswerResponse|bool
     */
    public function ticketAnswer(\Ovh\StructType\TicketAnswer $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ticketAnswer($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ticketClose
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TicketClose $parameters
     * @return \Ovh\StructType\TicketCloseResponse|bool
     */
    public function ticketClose(\Ovh\StructType\TicketClose $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ticketClose($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ticketCreate
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\TicketCreate $parameters
     * @return \Ovh\StructType\TicketCreateResponse|bool
     */
    public function ticketCreate(\Ovh\StructType\TicketCreate $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ticketCreate($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \Ovh\StructType\TicketAnswerResponse|\Ovh\StructType\TicketCloseResponse|\Ovh\StructType\TicketCreateResponse|\Ovh\StructType\TicketGetResponse|\Ovh\StructType\TicketListContactResponse|\Ovh\StructType\TicketListIncidentsByDomainResponse|\Ovh\StructType\TicketListIncidentsResponse|\Ovh\StructType\TicketReopenResponse
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
