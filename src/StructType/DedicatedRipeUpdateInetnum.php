<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedRipeUpdateInetnum StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedRipeUpdateInetnum extends AbstractStructBase
{
    /**
     * The session
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The block
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $block;
    /**
     * The netname
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $netname;
    /**
     * The descr
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $descr;
    /**
     * The ripeId
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $ripeId;
    /**
     * Constructor method for dedicatedRipeUpdateInetnum
     * @uses DedicatedRipeUpdateInetnum::setSession()
     * @uses DedicatedRipeUpdateInetnum::setBlock()
     * @uses DedicatedRipeUpdateInetnum::setNetname()
     * @uses DedicatedRipeUpdateInetnum::setDescr()
     * @uses DedicatedRipeUpdateInetnum::setRipeId()
     * @param string $session
     * @param string $block
     * @param string $netname
     * @param string $descr
     * @param string $ripeId
     */
    public function __construct($session = null, $block = null, $netname = null, $descr = null, $ripeId = null)
    {
        $this
            ->setSession($session)
            ->setBlock($block)
            ->setNetname($netname)
            ->setDescr($descr)
            ->setRipeId($ripeId);
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
     * @return \Ovh\StructType\DedicatedRipeUpdateInetnum
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
     * Get block value
     * @return string|null
     */
    public function getBlock()
    {
        return $this->block;
    }
    /**
     * Set block value
     * @param string $block
     * @return \Ovh\StructType\DedicatedRipeUpdateInetnum
     */
    public function setBlock($block = null)
    {
        // validation for constraint: string
        if (!is_null($block) && !is_string($block)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($block)), __LINE__);
        }
        $this->block = $block;
        return $this;
    }
    /**
     * Get netname value
     * @return string|null
     */
    public function getNetname()
    {
        return $this->netname;
    }
    /**
     * Set netname value
     * @param string $netname
     * @return \Ovh\StructType\DedicatedRipeUpdateInetnum
     */
    public function setNetname($netname = null)
    {
        // validation for constraint: string
        if (!is_null($netname) && !is_string($netname)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($netname)), __LINE__);
        }
        $this->netname = $netname;
        return $this;
    }
    /**
     * Get descr value
     * @return string|null
     */
    public function getDescr()
    {
        return $this->descr;
    }
    /**
     * Set descr value
     * @param string $descr
     * @return \Ovh\StructType\DedicatedRipeUpdateInetnum
     */
    public function setDescr($descr = null)
    {
        // validation for constraint: string
        if (!is_null($descr) && !is_string($descr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($descr)), __LINE__);
        }
        $this->descr = $descr;
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
     * @return \Ovh\StructType\DedicatedRipeUpdateInetnum
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\DedicatedRipeUpdateInetnum
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
