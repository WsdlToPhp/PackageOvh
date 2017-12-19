<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyLineStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyLineStruct extends AbstractStructBase
{
    /**
     * The number
     * @var string
     */
    public $number;
    /**
     * The billingAccount
     * @var string
     */
    public $billingAccount;
    /**
     * The offer
     * @var string
     */
    public $offer;
    /**
     * The type
     * @var string
     */
    public $type;
    /**
     * The service
     * @var string
     */
    public $service;
    /**
     * The expirationDate
     * @var string
     */
    public $expirationDate;
    /**
     * The description
     * @var string
     */
    public $description;
    /**
     * The betaGamaOffer
     * @var bool
     */
    public $betaGamaOffer;
    /**
     * The setOn
     * @var string
     */
    public $setOn;
    /**
     * The aliasPool
     * @var \PayPal\StructType\TelephonyLineAliasPoolStruct
     */
    public $aliasPool;
    /**
     * The pendingAction
     * @var \PayPal\StructType\TelephonyPendingActionStruct
     */
    public $pendingAction;
    /**
     * The simultaneousLines
     * @var int
     */
    public $simultaneousLines;
    /**
     * Constructor method for telephonyLineStruct
     * @uses TelephonyLineStruct::setNumber()
     * @uses TelephonyLineStruct::setBillingAccount()
     * @uses TelephonyLineStruct::setOffer()
     * @uses TelephonyLineStruct::setType()
     * @uses TelephonyLineStruct::setService()
     * @uses TelephonyLineStruct::setExpirationDate()
     * @uses TelephonyLineStruct::setDescription()
     * @uses TelephonyLineStruct::setBetaGamaOffer()
     * @uses TelephonyLineStruct::setSetOn()
     * @uses TelephonyLineStruct::setAliasPool()
     * @uses TelephonyLineStruct::setPendingAction()
     * @uses TelephonyLineStruct::setSimultaneousLines()
     * @param string $number
     * @param string $billingAccount
     * @param string $offer
     * @param string $type
     * @param string $service
     * @param string $expirationDate
     * @param string $description
     * @param bool $betaGamaOffer
     * @param string $setOn
     * @param \PayPal\StructType\TelephonyLineAliasPoolStruct $aliasPool
     * @param \PayPal\StructType\TelephonyPendingActionStruct $pendingAction
     * @param int $simultaneousLines
     */
    public function __construct($number = null, $billingAccount = null, $offer = null, $type = null, $service = null, $expirationDate = null, $description = null, $betaGamaOffer = null, $setOn = null, \PayPal\StructType\TelephonyLineAliasPoolStruct $aliasPool = null, \PayPal\StructType\TelephonyPendingActionStruct $pendingAction = null, $simultaneousLines = null)
    {
        $this
            ->setNumber($number)
            ->setBillingAccount($billingAccount)
            ->setOffer($offer)
            ->setType($type)
            ->setService($service)
            ->setExpirationDate($expirationDate)
            ->setDescription($description)
            ->setBetaGamaOffer($betaGamaOffer)
            ->setSetOn($setOn)
            ->setAliasPool($aliasPool)
            ->setPendingAction($pendingAction)
            ->setSimultaneousLines($simultaneousLines);
    }
    /**
     * Get number value
     * @return string|null
     */
    public function getNumber()
    {
        return $this->number;
    }
    /**
     * Set number value
     * @param string $number
     * @return \PayPal\StructType\TelephonyLineStruct
     */
    public function setNumber($number = null)
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($number)), __LINE__);
        }
        $this->number = $number;
        return $this;
    }
    /**
     * Get billingAccount value
     * @return string|null
     */
    public function getBillingAccount()
    {
        return $this->billingAccount;
    }
    /**
     * Set billingAccount value
     * @param string $billingAccount
     * @return \PayPal\StructType\TelephonyLineStruct
     */
    public function setBillingAccount($billingAccount = null)
    {
        // validation for constraint: string
        if (!is_null($billingAccount) && !is_string($billingAccount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($billingAccount)), __LINE__);
        }
        $this->billingAccount = $billingAccount;
        return $this;
    }
    /**
     * Get offer value
     * @return string|null
     */
    public function getOffer()
    {
        return $this->offer;
    }
    /**
     * Set offer value
     * @param string $offer
     * @return \PayPal\StructType\TelephonyLineStruct
     */
    public function setOffer($offer = null)
    {
        // validation for constraint: string
        if (!is_null($offer) && !is_string($offer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($offer)), __LINE__);
        }
        $this->offer = $offer;
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \PayPal\StructType\TelephonyLineStruct
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Get service value
     * @return string|null
     */
    public function getService()
    {
        return $this->service;
    }
    /**
     * Set service value
     * @param string $service
     * @return \PayPal\StructType\TelephonyLineStruct
     */
    public function setService($service = null)
    {
        // validation for constraint: string
        if (!is_null($service) && !is_string($service)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($service)), __LINE__);
        }
        $this->service = $service;
        return $this;
    }
    /**
     * Get expirationDate value
     * @return string|null
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }
    /**
     * Set expirationDate value
     * @param string $expirationDate
     * @return \PayPal\StructType\TelephonyLineStruct
     */
    public function setExpirationDate($expirationDate = null)
    {
        // validation for constraint: string
        if (!is_null($expirationDate) && !is_string($expirationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($expirationDate)), __LINE__);
        }
        $this->expirationDate = $expirationDate;
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \PayPal\StructType\TelephonyLineStruct
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->description = $description;
        return $this;
    }
    /**
     * Get betaGamaOffer value
     * @return bool|null
     */
    public function getBetaGamaOffer()
    {
        return $this->betaGamaOffer;
    }
    /**
     * Set betaGamaOffer value
     * @param bool $betaGamaOffer
     * @return \PayPal\StructType\TelephonyLineStruct
     */
    public function setBetaGamaOffer($betaGamaOffer = null)
    {
        // validation for constraint: boolean
        if (!is_null($betaGamaOffer) && !is_bool($betaGamaOffer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($betaGamaOffer)), __LINE__);
        }
        $this->betaGamaOffer = $betaGamaOffer;
        return $this;
    }
    /**
     * Get setOn value
     * @return string|null
     */
    public function getSetOn()
    {
        return $this->setOn;
    }
    /**
     * Set setOn value
     * @param string $setOn
     * @return \PayPal\StructType\TelephonyLineStruct
     */
    public function setSetOn($setOn = null)
    {
        // validation for constraint: string
        if (!is_null($setOn) && !is_string($setOn)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($setOn)), __LINE__);
        }
        $this->setOn = $setOn;
        return $this;
    }
    /**
     * Get aliasPool value
     * @return \PayPal\StructType\TelephonyLineAliasPoolStruct|null
     */
    public function getAliasPool()
    {
        return $this->aliasPool;
    }
    /**
     * Set aliasPool value
     * @param \PayPal\StructType\TelephonyLineAliasPoolStruct $aliasPool
     * @return \PayPal\StructType\TelephonyLineStruct
     */
    public function setAliasPool(\PayPal\StructType\TelephonyLineAliasPoolStruct $aliasPool = null)
    {
        $this->aliasPool = $aliasPool;
        return $this;
    }
    /**
     * Get pendingAction value
     * @return \PayPal\StructType\TelephonyPendingActionStruct|null
     */
    public function getPendingAction()
    {
        return $this->pendingAction;
    }
    /**
     * Set pendingAction value
     * @param \PayPal\StructType\TelephonyPendingActionStruct $pendingAction
     * @return \PayPal\StructType\TelephonyLineStruct
     */
    public function setPendingAction(\PayPal\StructType\TelephonyPendingActionStruct $pendingAction = null)
    {
        $this->pendingAction = $pendingAction;
        return $this;
    }
    /**
     * Get simultaneousLines value
     * @return int|null
     */
    public function getSimultaneousLines()
    {
        return $this->simultaneousLines;
    }
    /**
     * Set simultaneousLines value
     * @param int $simultaneousLines
     * @return \PayPal\StructType\TelephonyLineStruct
     */
    public function setSimultaneousLines($simultaneousLines = null)
    {
        // validation for constraint: int
        if (!is_null($simultaneousLines) && !is_numeric($simultaneousLines)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($simultaneousLines)), __LINE__);
        }
        $this->simultaneousLines = $simultaneousLines;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonyLineStruct
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