<?php

namespace PayPal\ServiceType;

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
     * @param \PayPal\StructType\TicketListIncidentsByDomain $parameters
     * @return \PayPal\StructType\TicketListIncidentsByDomainResponse|bool
     */
    public function ticketListIncidentsByDomain(\PayPal\StructType\TicketListIncidentsByDomain $parameters)
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
     * @param \PayPal\StructType\TicketListIncidents $parameters
     * @return \PayPal\StructType\TicketListIncidentsResponse|bool
     */
    public function ticketListIncidents(\PayPal\StructType\TicketListIncidents $parameters)
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
     * @param \PayPal\StructType\TicketReopen $parameters
     * @return \PayPal\StructType\TicketReopenResponse|bool
     */
    public function ticketReopen(\PayPal\StructType\TicketReopen $parameters)
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
     * @param \PayPal\StructType\TicketListContact $parameters
     * @return \PayPal\StructType\TicketListContactResponse|bool
     */
    public function ticketListContact(\PayPal\StructType\TicketListContact $parameters)
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
     * @param \PayPal\StructType\TicketGet $parameters
     * @return \PayPal\StructType\TicketGetResponse|bool
     */
    public function ticketGet(\PayPal\StructType\TicketGet $parameters)
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
     * @param \PayPal\StructType\TicketAnswer $parameters
     * @return \PayPal\StructType\TicketAnswerResponse|bool
     */
    public function ticketAnswer(\PayPal\StructType\TicketAnswer $parameters)
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
     * @param \PayPal\StructType\TicketClose $parameters
     * @return \PayPal\StructType\TicketCloseResponse|bool
     */
    public function ticketClose(\PayPal\StructType\TicketClose $parameters)
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
     * @param \PayPal\StructType\TicketCreate $parameters
     * @return \PayPal\StructType\TicketCreateResponse|bool
     */
    public function ticketCreate(\PayPal\StructType\TicketCreate $parameters)
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
     * @return \PayPal\StructType\TicketAnswerResponse|\PayPal\StructType\TicketCloseResponse|\PayPal\StructType\TicketCreateResponse|\PayPal\StructType\TicketGetResponse|\PayPal\StructType\TicketListContactResponse|\PayPal\StructType\TicketListIncidentsByDomainResponse|\PayPal\StructType\TicketListIncidentsResponse|\PayPal\StructType\TicketReopenResponse
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
