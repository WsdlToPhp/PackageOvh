<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for responderEmailDel StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ResponderEmailDel extends AbstractStructBase
{
    /**
     * The session
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The domain
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $domain;
    /**
     * The responder
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $responder;
    /**
     * Constructor method for responderEmailDel
     * @uses ResponderEmailDel::setSession()
     * @uses ResponderEmailDel::setDomain()
     * @uses ResponderEmailDel::setResponder()
     * @param string $session
     * @param string $domain
     * @param string $responder
     */
    public function __construct($session = null, $domain = null, $responder = null)
    {
        $this
            ->setSession($session)
            ->setDomain($domain)
            ->setResponder($responder);
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
     * @return \Ovh\StructType\ResponderEmailDel
     */
    public function setSession($session = null)
    {
        // validation for constraint: string
        if (!is_null($session) && !is_string($session)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($session, true), gettype($session)), __LINE__);
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
     * @return \Ovh\StructType\ResponderEmailDel
     */
    public function setDomain($domain = null)
    {
        // validation for constraint: string
        if (!is_null($domain) && !is_string($domain)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($domain, true), gettype($domain)), __LINE__);
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
     * @return \Ovh\StructType\ResponderEmailDel
     */
    public function setResponder($responder = null)
    {
        // validation for constraint: string
        if (!is_null($responder) && !is_string($responder)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($responder, true), gettype($responder)), __LINE__);
        }
        $this->responder = $responder;
        return $this;
    }
}
