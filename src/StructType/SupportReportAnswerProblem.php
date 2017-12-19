<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for supportReportAnswerProblem StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SupportReportAnswerProblem extends AbstractStructBase
{
    /**
     * The session
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The messageId
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $messageId;
    /**
     * The reportReason
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $reportReason;
    /**
     * Constructor method for supportReportAnswerProblem
     * @uses SupportReportAnswerProblem::setSession()
     * @uses SupportReportAnswerProblem::setMessageId()
     * @uses SupportReportAnswerProblem::setReportReason()
     * @param string $session
     * @param int $messageId
     * @param string $reportReason
     */
    public function __construct($session = null, $messageId = null, $reportReason = null)
    {
        $this
            ->setSession($session)
            ->setMessageId($messageId)
            ->setReportReason($reportReason);
    }
    /**
     * Get session value
     * @return string|null
     */
    public function getSession()
    {
        return $this->session;
    }
    /**
     * Set session value
     * @param string $session
     * @return \Ovh\StructType\SupportReportAnswerProblem
     */
    public function setSession($session = null)
    {
        // validation for constraint: string
        if (!is_null($session) && !is_string($session)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($session)), __LINE__);
        }
        $this->session = $session;
        return $this;
    }
    /**
     * Get messageId value
     * @return int|null
     */
    public function getMessageId()
    {
        return $this->messageId;
    }
    /**
     * Set messageId value
     * @param int $messageId
     * @return \Ovh\StructType\SupportReportAnswerProblem
     */
    public function setMessageId($messageId = null)
    {
        // validation for constraint: int
        if (!is_null($messageId) && !is_numeric($messageId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($messageId)), __LINE__);
        }
        $this->messageId = $messageId;
        return $this;
    }
    /**
     * Get reportReason value
     * @return string|null
     */
    public function getReportReason()
    {
        return $this->reportReason;
    }
    /**
     * Set reportReason value
     * @param string $reportReason
     * @return \Ovh\StructType\SupportReportAnswerProblem
     */
    public function setReportReason($reportReason = null)
    {
        // validation for constraint: string
        if (!is_null($reportReason) && !is_string($reportReason)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reportReason)), __LINE__);
        }
        $this->reportReason = $reportReason;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\SupportReportAnswerProblem
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
