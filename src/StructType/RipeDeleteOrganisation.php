<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ripeDeleteOrganisation StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class RipeDeleteOrganisation extends AbstractStructBase
{
    /**
     * The session
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The ripeId
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $ripeId;
    /**
     * The comment
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $comment;
    /**
     * Constructor method for ripeDeleteOrganisation
     * @uses RipeDeleteOrganisation::setSession()
     * @uses RipeDeleteOrganisation::setRipeId()
     * @uses RipeDeleteOrganisation::setComment()
     * @param string $session
     * @param string $ripeId
     * @param string $comment
     */
    public function __construct($session = null, $ripeId = null, $comment = null)
    {
        $this
            ->setSession($session)
            ->setRipeId($ripeId)
            ->setComment($comment);
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
     * @return \PayPal\StructType\RipeDeleteOrganisation
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
     * Get ripeId value
     * @return string|null
     */
    public function getRipeId()
    {
        return $this->ripeId;
    }
    /**
     * Set ripeId value
     * @param string $ripeId
     * @return \PayPal\StructType\RipeDeleteOrganisation
     */
    public function setRipeId($ripeId = null)
    {
        // validation for constraint: string
        if (!is_null($ripeId) && !is_string($ripeId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ripeId)), __LINE__);
        }
        $this->ripeId = $ripeId;
        return $this;
    }
    /**
     * Get comment value
     * @return string|null
     */
    public function getComment()
    {
        return $this->comment;
    }
    /**
     * Set comment value
     * @param string $comment
     * @return \PayPal\StructType\RipeDeleteOrganisation
     */
    public function setComment($comment = null)
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($comment)), __LINE__);
        }
        $this->comment = $comment;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\RipeDeleteOrganisation
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
