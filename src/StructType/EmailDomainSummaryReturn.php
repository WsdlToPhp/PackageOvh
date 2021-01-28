<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for emailDomainSummaryReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EmailDomainSummaryReturn extends AbstractStructBase
{
    /**
     * The masterNic
     * @var string
     */
    public $masterNic;
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
     * Constructor method for emailDomainSummaryReturn
     * @uses EmailDomainSummaryReturn::setMasterNic()
     * @uses EmailDomainSummaryReturn::setNbpops()
     * @uses EmailDomainSummaryReturn::setNbforwards()
     * @uses EmailDomainSummaryReturn::setNbaliases()
     * @uses EmailDomainSummaryReturn::setNbresponders()
     * @uses EmailDomainSummaryReturn::setNbmls()
     * @param string $masterNic
     * @param int $nbpops
     * @param int $nbforwards
     * @param int $nbaliases
     * @param int $nbresponders
     * @param int $nbmls
     */
    public function __construct($masterNic = null, $nbpops = null, $nbforwards = null, $nbaliases = null, $nbresponders = null, $nbmls = null)
    {
        $this
            ->setMasterNic($masterNic)
            ->setNbpops($nbpops)
            ->setNbforwards($nbforwards)
            ->setNbaliases($nbaliases)
            ->setNbresponders($nbresponders)
            ->setNbmls($nbmls);
    }
    /**
     * Get masterNic value
     * @return string|null
     */
    public function getMasterNic()
    {
        return $this->masterNic;
    }
    /**
     * Set masterNic value
     * @param string $masterNic
     * @return \Ovh\StructType\EmailDomainSummaryReturn
     */
    public function setMasterNic($masterNic = null)
    {
        // validation for constraint: string
        if (!is_null($masterNic) && !is_string($masterNic)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($masterNic, true), gettype($masterNic)), __LINE__);
        }
        $this->masterNic = $masterNic;
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
     * @return \Ovh\StructType\EmailDomainSummaryReturn
     */
    public function setNbpops($nbpops = null)
    {
        // validation for constraint: int
        if (!is_null($nbpops) && !(is_int($nbpops) || ctype_digit($nbpops))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($nbpops, true), gettype($nbpops)), __LINE__);
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
     * @return \Ovh\StructType\EmailDomainSummaryReturn
     */
    public function setNbforwards($nbforwards = null)
    {
        // validation for constraint: int
        if (!is_null($nbforwards) && !(is_int($nbforwards) || ctype_digit($nbforwards))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($nbforwards, true), gettype($nbforwards)), __LINE__);
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
     * @return \Ovh\StructType\EmailDomainSummaryReturn
     */
    public function setNbaliases($nbaliases = null)
    {
        // validation for constraint: int
        if (!is_null($nbaliases) && !(is_int($nbaliases) || ctype_digit($nbaliases))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($nbaliases, true), gettype($nbaliases)), __LINE__);
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
     * @return \Ovh\StructType\EmailDomainSummaryReturn
     */
    public function setNbresponders($nbresponders = null)
    {
        // validation for constraint: int
        if (!is_null($nbresponders) && !(is_int($nbresponders) || ctype_digit($nbresponders))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($nbresponders, true), gettype($nbresponders)), __LINE__);
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
     * @return \Ovh\StructType\EmailDomainSummaryReturn
     */
    public function setNbmls($nbmls = null)
    {
        // validation for constraint: int
        if (!is_null($nbmls) && !(is_int($nbmls) || ctype_digit($nbmls))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($nbmls, true), gettype($nbmls)), __LINE__);
        }
        $this->nbmls = $nbmls;
        return $this;
    }
}
