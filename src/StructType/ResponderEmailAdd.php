<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for responderEmailAdd StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ResponderEmailAdd extends AbstractStructBase
{
    /**
     * The session
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The domain
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $domain;
    /**
     * The responder
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $responder;
    /**
     * The content
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $content;
    /**
     * The delivered_to
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $delivered_to;
    /**
     * The nic
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $nic;
    /**
     * Constructor method for responderEmailAdd
     * @uses ResponderEmailAdd::setSession()
     * @uses ResponderEmailAdd::setDomain()
     * @uses ResponderEmailAdd::setResponder()
     * @uses ResponderEmailAdd::setContent()
     * @uses ResponderEmailAdd::setDelivered_to()
     * @uses ResponderEmailAdd::setNic()
     * @param string $session
     * @param string $domain
     * @param string $responder
     * @param string $content
     * @param string $delivered_to
     * @param string $nic
     */
    public function __construct($session = null, $domain = null, $responder = null, $content = null, $delivered_to = null, $nic = null)
    {
        $this
            ->setSession($session)
            ->setDomain($domain)
            ->setResponder($responder)
            ->setContent($content)
            ->setDelivered_to($delivered_to)
            ->setNic($nic);
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
     * @return \PayPal\StructType\ResponderEmailAdd
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
     * Get domain value
     * @return string|null
     */
    public function getDomain()
    {
        return $this->domain;
    }
    /**
     * Set domain value
     * @param string $domain
     * @return \PayPal\StructType\ResponderEmailAdd
     */
    public function setDomain($domain = null)
    {
        // validation for constraint: string
        if (!is_null($domain) && !is_string($domain)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($domain)), __LINE__);
        }
        $this->domain = $domain;
        return $this;
    }
    /**
     * Get responder value
     * @return string|null
     */
    public function getResponder()
    {
        return $this->responder;
    }
    /**
     * Set responder value
     * @param string $responder
     * @return \PayPal\StructType\ResponderEmailAdd
     */
    public function setResponder($responder = null)
    {
        // validation for constraint: string
        if (!is_null($responder) && !is_string($responder)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($responder)), __LINE__);
        }
        $this->responder = $responder;
        return $this;
    }
    /**
     * Get content value
     * @return string|null
     */
    public function getContent()
    {
        return $this->content;
    }
    /**
     * Set content value
     * @param string $content
     * @return \PayPal\StructType\ResponderEmailAdd
     */
    public function setContent($content = null)
    {
        // validation for constraint: string
        if (!is_null($content) && !is_string($content)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($content)), __LINE__);
        }
        $this->content = $content;
        return $this;
    }
    /**
     * Get delivered_to value
     * @return string|null
     */
    public function getDelivered_to()
    {
        return $this->delivered_to;
    }
    /**
     * Set delivered_to value
     * @param string $delivered_to
     * @return \PayPal\StructType\ResponderEmailAdd
     */
    public function setDelivered_to($delivered_to = null)
    {
        // validation for constraint: string
        if (!is_null($delivered_to) && !is_string($delivered_to)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($delivered_to)), __LINE__);
        }
        $this->delivered_to = $delivered_to;
        return $this;
    }
    /**
     * Get nic value
     * @return string|null
     */
    public function getNic()
    {
        return $this->nic;
    }
    /**
     * Set nic value
     * @param string $nic
     * @return \PayPal\StructType\ResponderEmailAdd
     */
    public function setNic($nic = null)
    {
        // validation for constraint: string
        if (!is_null($nic) && !is_string($nic)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nic)), __LINE__);
        }
        $this->nic = $nic;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\ResponderEmailAdd
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
