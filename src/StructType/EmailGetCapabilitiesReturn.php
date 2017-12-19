<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for emailGetCapabilitiesReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EmailGetCapabilitiesReturn extends AbstractStructBase
{
    /**
     * The name
     * @var string
     */
    public $name;
    /**
     * The nbpops
     * @var int
     */
    public $nbpops;
    /**
     * The nbforwards
     * @var int
     */
    public $nbforwards;
    /**
     * The nbaliases
     * @var int
     */
    public $nbaliases;
    /**
     * The nbresponders
     * @var int
     */
    public $nbresponders;
    /**
     * The nbmls
     * @var int
     */
    public $nbmls;
    /**
     * Constructor method for emailGetCapabilitiesReturn
     * @uses EmailGetCapabilitiesReturn::setName()
     * @uses EmailGetCapabilitiesReturn::setNbpops()
     * @uses EmailGetCapabilitiesReturn::setNbforwards()
     * @uses EmailGetCapabilitiesReturn::setNbaliases()
     * @uses EmailGetCapabilitiesReturn::setNbresponders()
     * @uses EmailGetCapabilitiesReturn::setNbmls()
     * @param string $name
     * @param int $nbpops
     * @param int $nbforwards
     * @param int $nbaliases
     * @param int $nbresponders
     * @param int $nbmls
     */
    public function __construct($name = null, $nbpops = null, $nbforwards = null, $nbaliases = null, $nbresponders = null, $nbmls = null)
    {
        $this
            ->setName($name)
            ->setNbpops($nbpops)
            ->setNbforwards($nbforwards)
            ->setNbaliases($nbaliases)
            ->setNbresponders($nbresponders)
            ->setNbmls($nbmls);
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \PayPal\StructType\EmailGetCapabilitiesReturn
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
    /**
     * Get nbpops value
     * @return int|null
     */
    public function getNbpops()
    {
        return $this->nbpops;
    }
    /**
     * Set nbpops value
     * @param int $nbpops
     * @return \PayPal\StructType\EmailGetCapabilitiesReturn
     */
    public function setNbpops($nbpops = null)
    {
        // validation for constraint: int
        if (!is_null($nbpops) && !is_numeric($nbpops)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($nbpops)), __LINE__);
        }
        $this->nbpops = $nbpops;
        return $this;
    }
    /**
     * Get nbforwards value
     * @return int|null
     */
    public function getNbforwards()
    {
        return $this->nbforwards;
    }
    /**
     * Set nbforwards value
     * @param int $nbforwards
     * @return \PayPal\StructType\EmailGetCapabilitiesReturn
     */
    public function setNbforwards($nbforwards = null)
    {
        // validation for constraint: int
        if (!is_null($nbforwards) && !is_numeric($nbforwards)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($nbforwards)), __LINE__);
        }
        $this->nbforwards = $nbforwards;
        return $this;
    }
    /**
     * Get nbaliases value
     * @return int|null
     */
    public function getNbaliases()
    {
        return $this->nbaliases;
    }
    /**
     * Set nbaliases value
     * @param int $nbaliases
     * @return \PayPal\StructType\EmailGetCapabilitiesReturn
     */
    public function setNbaliases($nbaliases = null)
    {
        // validation for constraint: int
        if (!is_null($nbaliases) && !is_numeric($nbaliases)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($nbaliases)), __LINE__);
        }
        $this->nbaliases = $nbaliases;
        return $this;
    }
    /**
     * Get nbresponders value
     * @return int|null
     */
    public function getNbresponders()
    {
        return $this->nbresponders;
    }
    /**
     * Set nbresponders value
     * @param int $nbresponders
     * @return \PayPal\StructType\EmailGetCapabilitiesReturn
     */
    public function setNbresponders($nbresponders = null)
    {
        // validation for constraint: int
        if (!is_null($nbresponders) && !is_numeric($nbresponders)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($nbresponders)), __LINE__);
        }
        $this->nbresponders = $nbresponders;
        return $this;
    }
    /**
     * Get nbmls value
     * @return int|null
     */
    public function getNbmls()
    {
        return $this->nbmls;
    }
    /**
     * Set nbmls value
     * @param int $nbmls
     * @return \PayPal\StructType\EmailGetCapabilitiesReturn
     */
    public function setNbmls($nbmls = null)
    {
        // validation for constraint: int
        if (!is_null($nbmls) && !is_numeric($nbmls)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($nbmls)), __LINE__);
        }
        $this->nbmls = $nbmls;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\EmailGetCapabilitiesReturn
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
