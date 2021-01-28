<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rpsMigrationGetProgressStatusReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class RpsMigrationGetProgressStatusReturn extends AbstractStructBase
{
    /**
     * The step1
     * @var \Ovh\StructType\RpsMigrationGetProgressStatusStepStruct
     */
    public $step1;
    /**
     * The step2
     * @var \Ovh\StructType\RpsMigrationGetProgressStatusStepStruct
     */
    public $step2;
    /**
     * The step3
     * @var \Ovh\StructType\RpsMigrationGetProgressStatusStepStruct
     */
    public $step3;
    /**
     * The step4
     * @var \Ovh\StructType\RpsMigrationGetProgressStatusStepStruct
     */
    public $step4;
    /**
     * Constructor method for rpsMigrationGetProgressStatusReturn
     * @uses RpsMigrationGetProgressStatusReturn::setStep1()
     * @uses RpsMigrationGetProgressStatusReturn::setStep2()
     * @uses RpsMigrationGetProgressStatusReturn::setStep3()
     * @uses RpsMigrationGetProgressStatusReturn::setStep4()
     * @param \Ovh\StructType\RpsMigrationGetProgressStatusStepStruct $step1
     * @param \Ovh\StructType\RpsMigrationGetProgressStatusStepStruct $step2
     * @param \Ovh\StructType\RpsMigrationGetProgressStatusStepStruct $step3
     * @param \Ovh\StructType\RpsMigrationGetProgressStatusStepStruct $step4
     */
    public function __construct(\Ovh\StructType\RpsMigrationGetProgressStatusStepStruct $step1 = null, \Ovh\StructType\RpsMigrationGetProgressStatusStepStruct $step2 = null, \Ovh\StructType\RpsMigrationGetProgressStatusStepStruct $step3 = null, \Ovh\StructType\RpsMigrationGetProgressStatusStepStruct $step4 = null)
    {
        $this
            ->setStep1($step1)
            ->setStep2($step2)
            ->setStep3($step3)
            ->setStep4($step4);
    }
    /**
     * Get step1 value
     * @return \Ovh\StructType\RpsMigrationGetProgressStatusStepStruct|null
     */
    public function getStep1()
    {
        return $this->step1;
    }
    /**
     * Set step1 value
     * @param \Ovh\StructType\RpsMigrationGetProgressStatusStepStruct $step1
     * @return \Ovh\StructType\RpsMigrationGetProgressStatusReturn
     */
    public function setStep1(\Ovh\StructType\RpsMigrationGetProgressStatusStepStruct $step1 = null)
    {
        $this->step1 = $step1;
        return $this;
    }
    /**
     * Get step2 value
     * @return \Ovh\StructType\RpsMigrationGetProgressStatusStepStruct|null
     */
    public function getStep2()
    {
        return $this->step2;
    }
    /**
     * Set step2 value
     * @param \Ovh\StructType\RpsMigrationGetProgressStatusStepStruct $step2
     * @return \Ovh\StructType\RpsMigrationGetProgressStatusReturn
     */
    public function setStep2(\Ovh\StructType\RpsMigrationGetProgressStatusStepStruct $step2 = null)
    {
        $this->step2 = $step2;
        return $this;
    }
    /**
     * Get step3 value
     * @return \Ovh\StructType\RpsMigrationGetProgressStatusStepStruct|null
     */
    public function getStep3()
    {
        return $this->step3;
    }
    /**
     * Set step3 value
     * @param \Ovh\StructType\RpsMigrationGetProgressStatusStepStruct $step3
     * @return \Ovh\StructType\RpsMigrationGetProgressStatusReturn
     */
    public function setStep3(\Ovh\StructType\RpsMigrationGetProgressStatusStepStruct $step3 = null)
    {
        $this->step3 = $step3;
        return $this;
    }
    /**
     * Get step4 value
     * @return \Ovh\StructType\RpsMigrationGetProgressStatusStepStruct|null
     */
    public function getStep4()
    {
        return $this->step4;
    }
    /**
     * Set step4 value
     * @param \Ovh\StructType\RpsMigrationGetProgressStatusStepStruct $step4
     * @return \Ovh\StructType\RpsMigrationGetProgressStatusReturn
     */
    public function setStep4(\Ovh\StructType\RpsMigrationGetProgressStatusStepStruct $step4 = null)
    {
        $this->step4 = $step4;
        return $this;
    }
}
