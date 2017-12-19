<?php

namespace Ovh\StructType;

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
     * @var \Ovh\StructType\RtmCpuStruct
     */
    public $cpu;
    /**
     * The hardDrives
     * @var \Ovh\ArrayType\MyArrayOfRtmHddStructType
     */
    public $hardDrives;
    /**
     * The systemInfo
     * @var \Ovh\StructType\RtmSystemStruct
     */
    public $systemInfo;
    /**
     * The memory
     * @var \Ovh\StructType\RtmMemoryStruct
     */
    public $memory;
    /**
     * The motherboard
     * @var \Ovh\StructType\RtmMotherboardStruct
     */
    public $motherboard;
    /**
     * The lspci
     * @var \Ovh\ArrayType\MyArrayOfRtmLspciStructType
     */
    public $lspci;
    /**
     * The portsUsed
     * @var \Ovh\StructType\RtmPortsStruct
     */
    public $portsUsed;
    /**
     * The raid
     * @var \Ovh\StructType\RtmRaidStruct
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
     * @param \Ovh\StructType\RtmCpuStruct $cpu
     * @param \Ovh\ArrayType\MyArrayOfRtmHddStructType $hardDrives
     * @param \Ovh\StructType\RtmSystemStruct $systemInfo
     * @param \Ovh\StructType\RtmMemoryStruct $memory
     * @param \Ovh\StructType\RtmMotherboardStruct $motherboard
     * @param \Ovh\ArrayType\MyArrayOfRtmLspciStructType $lspci
     * @param \Ovh\StructType\RtmPortsStruct $portsUsed
     * @param \Ovh\StructType\RtmRaidStruct $raid
     */
    public function __construct(\Ovh\StructType\RtmCpuStruct $cpu = null, \Ovh\ArrayType\MyArrayOfRtmHddStructType $hardDrives = null, \Ovh\StructType\RtmSystemStruct $systemInfo = null, \Ovh\StructType\RtmMemoryStruct $memory = null, \Ovh\StructType\RtmMotherboardStruct $motherboard = null, \Ovh\ArrayType\MyArrayOfRtmLspciStructType $lspci = null, \Ovh\StructType\RtmPortsStruct $portsUsed = null, \Ovh\StructType\RtmRaidStruct $raid = null)
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
     * @return \Ovh\StructType\RtmCpuStruct|null
     */
    public function getCpu()
    {
        return $this->cpu;
    }
    /**
     * Set cpu value
     * @param \Ovh\StructType\RtmCpuStruct $cpu
     * @return \Ovh\StructType\DedicatedRtmStatusReturn
     */
    public function setCpu(\Ovh\StructType\RtmCpuStruct $cpu = null)
    {
        $this->cpu = $cpu;
        return $this;
    }
    /**
     * Get hardDrives value
     * @return \Ovh\ArrayType\MyArrayOfRtmHddStructType|null
     */
    public function getHardDrives()
    {
        return $this->hardDrives;
    }
    /**
     * Set hardDrives value
     * @param \Ovh\ArrayType\MyArrayOfRtmHddStructType $hardDrives
     * @return \Ovh\StructType\DedicatedRtmStatusReturn
     */
    public function setHardDrives(\Ovh\ArrayType\MyArrayOfRtmHddStructType $hardDrives = null)
    {
        $this->hardDrives = $hardDrives;
        return $this;
    }
    /**
     * Get systemInfo value
     * @return \Ovh\StructType\RtmSystemStruct|null
     */
    public function getSystemInfo()
    {
        return $this->systemInfo;
    }
    /**
     * Set systemInfo value
     * @param \Ovh\StructType\RtmSystemStruct $systemInfo
     * @return \Ovh\StructType\DedicatedRtmStatusReturn
     */
    public function setSystemInfo(\Ovh\StructType\RtmSystemStruct $systemInfo = null)
    {
        $this->systemInfo = $systemInfo;
        return $this;
    }
    /**
     * Get memory value
     * @return \Ovh\StructType\RtmMemoryStruct|null
     */
    public function getMemory()
    {
        return $this->memory;
    }
    /**
     * Set memory value
     * @param \Ovh\StructType\RtmMemoryStruct $memory
     * @return \Ovh\StructType\DedicatedRtmStatusReturn
     */
    public function setMemory(\Ovh\StructType\RtmMemoryStruct $memory = null)
    {
        $this->memory = $memory;
        return $this;
    }
    /**
     * Get motherboard value
     * @return \Ovh\StructType\RtmMotherboardStruct|null
     */
    public function getMotherboard()
    {
        return $this->motherboard;
    }
    /**
     * Set motherboard value
     * @param \Ovh\StructType\RtmMotherboardStruct $motherboard
     * @return \Ovh\StructType\DedicatedRtmStatusReturn
     */
    public function setMotherboard(\Ovh\StructType\RtmMotherboardStruct $motherboard = null)
    {
        $this->motherboard = $motherboard;
        return $this;
    }
    /**
     * Get lspci value
     * @return \Ovh\ArrayType\MyArrayOfRtmLspciStructType|null
     */
    public function getLspci()
    {
        return $this->lspci;
    }
    /**
     * Set lspci value
     * @param \Ovh\ArrayType\MyArrayOfRtmLspciStructType $lspci
     * @return \Ovh\StructType\DedicatedRtmStatusReturn
     */
    public function setLspci(\Ovh\ArrayType\MyArrayOfRtmLspciStructType $lspci = null)
    {
        $this->lspci = $lspci;
        return $this;
    }
    /**
     * Get portsUsed value
     * @return \Ovh\StructType\RtmPortsStruct|null
     */
    public function getPortsUsed()
    {
        return $this->portsUsed;
    }
    /**
     * Set portsUsed value
     * @param \Ovh\StructType\RtmPortsStruct $portsUsed
     * @return \Ovh\StructType\DedicatedRtmStatusReturn
     */
    public function setPortsUsed(\Ovh\StructType\RtmPortsStruct $portsUsed = null)
    {
        $this->portsUsed = $portsUsed;
        return $this;
    }
    /**
     * Get raid value
     * @return \Ovh\StructType\RtmRaidStruct|null
     */
    public function getRaid()
    {
        return $this->raid;
    }
    /**
     * Set raid value
     * @param \Ovh\StructType\RtmRaidStruct $raid
     * @return \Ovh\StructType\DedicatedRtmStatusReturn
     */
    public function setRaid(\Ovh\StructType\RtmRaidStruct $raid = null)
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
     * @return \Ovh\StructType\DedicatedRtmStatusReturn
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
