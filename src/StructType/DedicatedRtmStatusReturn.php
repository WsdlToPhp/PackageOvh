<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedRtmStatusReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedRtmStatusReturn extends AbstractStructBase
{
    /**
     * The cpu
     * @var \PayPal\StructType\RtmCpuStruct
     */
    public $cpu;
    /**
     * The hardDrives
     * @var \PayPal\ArrayType\MyArrayOfRtmHddStructType
     */
    public $hardDrives;
    /**
     * The systemInfo
     * @var \PayPal\StructType\RtmSystemStruct
     */
    public $systemInfo;
    /**
     * The memory
     * @var \PayPal\StructType\RtmMemoryStruct
     */
    public $memory;
    /**
     * The motherboard
     * @var \PayPal\StructType\RtmMotherboardStruct
     */
    public $motherboard;
    /**
     * The lspci
     * @var \PayPal\ArrayType\MyArrayOfRtmLspciStructType
     */
    public $lspci;
    /**
     * The portsUsed
     * @var \PayPal\StructType\RtmPortsStruct
     */
    public $portsUsed;
    /**
     * The raid
     * @var \PayPal\StructType\RtmRaidStruct
     */
    public $raid;
    /**
     * Constructor method for dedicatedRtmStatusReturn
     * @uses DedicatedRtmStatusReturn::setCpu()
     * @uses DedicatedRtmStatusReturn::setHardDrives()
     * @uses DedicatedRtmStatusReturn::setSystemInfo()
     * @uses DedicatedRtmStatusReturn::setMemory()
     * @uses DedicatedRtmStatusReturn::setMotherboard()
     * @uses DedicatedRtmStatusReturn::setLspci()
     * @uses DedicatedRtmStatusReturn::setPortsUsed()
     * @uses DedicatedRtmStatusReturn::setRaid()
     * @param \PayPal\StructType\RtmCpuStruct $cpu
     * @param \PayPal\ArrayType\MyArrayOfRtmHddStructType $hardDrives
     * @param \PayPal\StructType\RtmSystemStruct $systemInfo
     * @param \PayPal\StructType\RtmMemoryStruct $memory
     * @param \PayPal\StructType\RtmMotherboardStruct $motherboard
     * @param \PayPal\ArrayType\MyArrayOfRtmLspciStructType $lspci
     * @param \PayPal\StructType\RtmPortsStruct $portsUsed
     * @param \PayPal\StructType\RtmRaidStruct $raid
     */
    public function __construct(\PayPal\StructType\RtmCpuStruct $cpu = null, \PayPal\ArrayType\MyArrayOfRtmHddStructType $hardDrives = null, \PayPal\StructType\RtmSystemStruct $systemInfo = null, \PayPal\StructType\RtmMemoryStruct $memory = null, \PayPal\StructType\RtmMotherboardStruct $motherboard = null, \PayPal\ArrayType\MyArrayOfRtmLspciStructType $lspci = null, \PayPal\StructType\RtmPortsStruct $portsUsed = null, \PayPal\StructType\RtmRaidStruct $raid = null)
    {
        $this
            ->setCpu($cpu)
            ->setHardDrives($hardDrives)
            ->setSystemInfo($systemInfo)
            ->setMemory($memory)
            ->setMotherboard($motherboard)
            ->setLspci($lspci)
            ->setPortsUsed($portsUsed)
            ->setRaid($raid);
    }
    /**
     * Get cpu value
     * @return \PayPal\StructType\RtmCpuStruct|null
     */
    public function getCpu()
    {
        return $this->cpu;
    }
    /**
     * Set cpu value
     * @param \PayPal\StructType\RtmCpuStruct $cpu
     * @return \PayPal\StructType\DedicatedRtmStatusReturn
     */
    public function setCpu(\PayPal\StructType\RtmCpuStruct $cpu = null)
    {
        $this->cpu = $cpu;
        return $this;
    }
    /**
     * Get hardDrives value
     * @return \PayPal\ArrayType\MyArrayOfRtmHddStructType|null
     */
    public function getHardDrives()
    {
        return $this->hardDrives;
    }
    /**
     * Set hardDrives value
     * @param \PayPal\ArrayType\MyArrayOfRtmHddStructType $hardDrives
     * @return \PayPal\StructType\DedicatedRtmStatusReturn
     */
    public function setHardDrives(\PayPal\ArrayType\MyArrayOfRtmHddStructType $hardDrives = null)
    {
        $this->hardDrives = $hardDrives;
        return $this;
    }
    /**
     * Get systemInfo value
     * @return \PayPal\StructType\RtmSystemStruct|null
     */
    public function getSystemInfo()
    {
        return $this->systemInfo;
    }
    /**
     * Set systemInfo value
     * @param \PayPal\StructType\RtmSystemStruct $systemInfo
     * @return \PayPal\StructType\DedicatedRtmStatusReturn
     */
    public function setSystemInfo(\PayPal\StructType\RtmSystemStruct $systemInfo = null)
    {
        $this->systemInfo = $systemInfo;
        return $this;
    }
    /**
     * Get memory value
     * @return \PayPal\StructType\RtmMemoryStruct|null
     */
    public function getMemory()
    {
        return $this->memory;
    }
    /**
     * Set memory value
     * @param \PayPal\StructType\RtmMemoryStruct $memory
     * @return \PayPal\StructType\DedicatedRtmStatusReturn
     */
    public function setMemory(\PayPal\StructType\RtmMemoryStruct $memory = null)
    {
        $this->memory = $memory;
        return $this;
    }
    /**
     * Get motherboard value
     * @return \PayPal\StructType\RtmMotherboardStruct|null
     */
    public function getMotherboard()
    {
        return $this->motherboard;
    }
    /**
     * Set motherboard value
     * @param \PayPal\StructType\RtmMotherboardStruct $motherboard
     * @return \PayPal\StructType\DedicatedRtmStatusReturn
     */
    public function setMotherboard(\PayPal\StructType\RtmMotherboardStruct $motherboard = null)
    {
        $this->motherboard = $motherboard;
        return $this;
    }
    /**
     * Get lspci value
     * @return \PayPal\ArrayType\MyArrayOfRtmLspciStructType|null
     */
    public function getLspci()
    {
        return $this->lspci;
    }
    /**
     * Set lspci value
     * @param \PayPal\ArrayType\MyArrayOfRtmLspciStructType $lspci
     * @return \PayPal\StructType\DedicatedRtmStatusReturn
     */
    public function setLspci(\PayPal\ArrayType\MyArrayOfRtmLspciStructType $lspci = null)
    {
        $this->lspci = $lspci;
        return $this;
    }
    /**
     * Get portsUsed value
     * @return \PayPal\StructType\RtmPortsStruct|null
     */
    public function getPortsUsed()
    {
        return $this->portsUsed;
    }
    /**
     * Set portsUsed value
     * @param \PayPal\StructType\RtmPortsStruct $portsUsed
     * @return \PayPal\StructType\DedicatedRtmStatusReturn
     */
    public function setPortsUsed(\PayPal\StructType\RtmPortsStruct $portsUsed = null)
    {
        $this->portsUsed = $portsUsed;
        return $this;
    }
    /**
     * Get raid value
     * @return \PayPal\StructType\RtmRaidStruct|null
     */
    public function getRaid()
    {
        return $this->raid;
    }
    /**
     * Set raid value
     * @param \PayPal\StructType\RtmRaidStruct $raid
     * @return \PayPal\StructType\DedicatedRtmStatusReturn
     */
    public function setRaid(\PayPal\StructType\RtmRaidStruct $raid = null)
    {
        $this->raid = $raid;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\DedicatedRtmStatusReturn
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
