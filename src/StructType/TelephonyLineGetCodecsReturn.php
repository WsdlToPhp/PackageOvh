<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyLineGetCodecsReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyLineGetCodecsReturn extends AbstractStructBase
{
    /**
     * The codecs
     * @var string
     */
    public $codecs;
    /**
     * The availableCodecsList
     * @var \Ovh\ArrayType\MyArrayOfStringType
     */
    public $availableCodecsList;
    /**
     * The defaultCodecs
     * @var string
     */
    public $defaultCodecs;
    /**
     * Constructor method for telephonyLineGetCodecsReturn
     * @uses TelephonyLineGetCodecsReturn::setCodecs()
     * @uses TelephonyLineGetCodecsReturn::setAvailableCodecsList()
     * @uses TelephonyLineGetCodecsReturn::setDefaultCodecs()
     * @param string $codecs
     * @param \Ovh\ArrayType\MyArrayOfStringType $availableCodecsList
     * @param string $defaultCodecs
     */
    public function __construct($codecs = null, \Ovh\ArrayType\MyArrayOfStringType $availableCodecsList = null, $defaultCodecs = null)
    {
        $this
            ->setCodecs($codecs)
            ->setAvailableCodecsList($availableCodecsList)
            ->setDefaultCodecs($defaultCodecs);
    }
    /**
     * Get codecs value
     * @return string|null
     */
    public function getCodecs()
    {
        return $this->codecs;
    }
    /**
     * Set codecs value
     * @param string $codecs
     * @return \Ovh\StructType\TelephonyLineGetCodecsReturn
     */
    public function setCodecs($codecs = null)
    {
        // validation for constraint: string
        if (!is_null($codecs) && !is_string($codecs)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codecs, true), gettype($codecs)), __LINE__);
        }
        $this->codecs = $codecs;
        return $this;
    }
    /**
     * Get availableCodecsList value
     * @return \Ovh\ArrayType\MyArrayOfStringType|null
     */
    public function getAvailableCodecsList()
    {
        return $this->availableCodecsList;
    }
    /**
     * Set availableCodecsList value
     * @param \Ovh\ArrayType\MyArrayOfStringType $availableCodecsList
     * @return \Ovh\StructType\TelephonyLineGetCodecsReturn
     */
    public function setAvailableCodecsList(\Ovh\ArrayType\MyArrayOfStringType $availableCodecsList = null)
    {
        $this->availableCodecsList = $availableCodecsList;
        return $this;
    }
    /**
     * Get defaultCodecs value
     * @return string|null
     */
    public function getDefaultCodecs()
    {
        return $this->defaultCodecs;
    }
    /**
     * Set defaultCodecs value
     * @param string $defaultCodecs
     * @return \Ovh\StructType\TelephonyLineGetCodecsReturn
     */
    public function setDefaultCodecs($defaultCodecs = null)
    {
        // validation for constraint: string
        if (!is_null($defaultCodecs) && !is_string($defaultCodecs)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($defaultCodecs, true), gettype($defaultCodecs)), __LINE__);
        }
        $this->defaultCodecs = $defaultCodecs;
        return $this;
    }
}
