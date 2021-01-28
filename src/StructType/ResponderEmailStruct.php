<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for responderEmailStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ResponderEmailStruct extends AbstractStructBase
{
    /**
     * The domain
     * @var string
     */
    public $domain;
    /**
     * The responder
     * @var string
     */
    public $responder;
    /**
     * The content
     * @var string
     */
    public $content;
    /**
     * The hasPop
     * @var bool
     */
    public $hasPop;
    /**
     * The hasAlias
     * @var bool
     */
    public $hasAlias;
    /**
     * Constructor method for responderEmailStruct
     * @uses ResponderEmailStruct::setDomain()
     * @uses ResponderEmailStruct::setResponder()
     * @uses ResponderEmailStruct::setContent()
     * @uses ResponderEmailStruct::setHasPop()
     * @uses ResponderEmailStruct::setHasAlias()
     * @param string $domain
     * @param string $responder
     * @param string $content
     * @param bool $hasPop
     * @param bool $hasAlias
     */
    public function __construct($domain = null, $responder = null, $content = null, $hasPop = null, $hasAlias = null)
    {
        $this
            ->setDomain($domain)
            ->setResponder($responder)
            ->setContent($content)
            ->setHasPop($hasPop)
            ->setHasAlias($hasAlias);
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
     * @return \Ovh\StructType\ResponderEmailStruct
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
     * @return \Ovh\StructType\ResponderEmailStruct
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
     * @return \Ovh\StructType\ResponderEmailStruct
     */
    public function setContent($content = null)
    {
        // validation for constraint: string
        if (!is_null($content) && !is_string($content)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($content, true), gettype($content)), __LINE__);
        }
        $this->content = $content;
        return $this;
    }
    /**
     * Get hasPop value
     * @return bool|null
     */
    public function getHasPop()
    {
        return $this->hasPop;
    }
    /**
     * Set hasPop value
     * @param bool $hasPop
     * @return \Ovh\StructType\ResponderEmailStruct
     */
    public function setHasPop($hasPop = null)
    {
        // validation for constraint: boolean
        if (!is_null($hasPop) && !is_bool($hasPop)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasPop, true), gettype($hasPop)), __LINE__);
        }
        $this->hasPop = $hasPop;
        return $this;
    }
    /**
     * Get hasAlias value
     * @return bool|null
     */
    public function getHasAlias()
    {
        return $this->hasAlias;
    }
    /**
     * Set hasAlias value
     * @param bool $hasAlias
     * @return \Ovh\StructType\ResponderEmailStruct
     */
    public function setHasAlias($hasAlias = null)
    {
        // validation for constraint: boolean
        if (!is_null($hasAlias) && !is_bool($hasAlias)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasAlias, true), gettype($hasAlias)), __LINE__);
        }
        $this->hasAlias = $hasAlias;
        return $this;
    }
}
