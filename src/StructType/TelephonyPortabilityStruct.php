<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyPortabilityStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyPortabilityStruct extends AbstractStructBase
{
    /**
     * The id
     * @var int
     */
    public $id;
    /**
     * The customerFullName
     * @var string
     */
    public $customerFullName;
    /**
     * The billingAccount
     * @var string
     */
    public $billingAccount;
    /**
     * The callNumber
     * @var string
     */
    public $callNumber;
    /**
     * The extraNumbers
     * @var \Ovh\ArrayType\MyArrayOfStringType
     */
    public $extraNumbers;
    /**
     * The planDate
     * @var string
     */
    public $planDate;
    /**
     * The resellerOrder
     * @var bool
     */
    public $resellerOrder;
    /**
     * The customerMailSent
     * @var bool
     */
    public $customerMailSent;
    /**
     * The customerMailSendDate
     * @var string
     */
    public $customerMailSendDate;
    /**
     * The customerMailReturned
     * @var bool
     */
    public $customerMailReturned;
    /**
     * The customerMailReturnDate
     * @var string
     */
    public $customerMailReturnDate;
    /**
     * The customerMailTracking
     * @var string
     */
    public $customerMailTracking;
    /**
     * The rangeHolderName
     * @var string
     */
    public $rangeHolderName;
    /**
     * The losingCpName
     * @var string
     */
    public $losingCpName;
    /**
     * The rhOrderSent
     * @var bool
     */
    public $rhOrderSent;
    /**
     * The rhOrderReceived
     * @var bool
     */
    public $rhOrderReceived;
    /**
     * The rhOrderAck
     * @var string
     */
    public $rhOrderAck;
    /**
     * The rhOrderAckComment
     * @var string
     */
    public $rhOrderAckComment;
    /**
     * The rhOrderPort
     * @var string
     */
    public $rhOrderPort;
    /**
     * The rhOrderPortComment
     * @var string
     */
    public $rhOrderPortComment;
    /**
     * The lcpOrderSent
     * @var bool
     */
    public $lcpOrderSent;
    /**
     * The lcpOrderReceived
     * @var bool
     */
    public $lcpOrderReceived;
    /**
     * The lcpOrderAck
     * @var string
     */
    public $lcpOrderAck;
    /**
     * The lcpOrderAckComment
     * @var string
     */
    public $lcpOrderAckComment;
    /**
     * The lcpOrderPort
     * @var string
     */
    public $lcpOrderPort;
    /**
     * The lcpOrderPortComment
     * @var string
     */
    public $lcpOrderPortComment;
    /**
     * Constructor method for telephonyPortabilityStruct
     * @uses TelephonyPortabilityStruct::setId()
     * @uses TelephonyPortabilityStruct::setCustomerFullName()
     * @uses TelephonyPortabilityStruct::setBillingAccount()
     * @uses TelephonyPortabilityStruct::setCallNumber()
     * @uses TelephonyPortabilityStruct::setExtraNumbers()
     * @uses TelephonyPortabilityStruct::setPlanDate()
     * @uses TelephonyPortabilityStruct::setResellerOrder()
     * @uses TelephonyPortabilityStruct::setCustomerMailSent()
     * @uses TelephonyPortabilityStruct::setCustomerMailSendDate()
     * @uses TelephonyPortabilityStruct::setCustomerMailReturned()
     * @uses TelephonyPortabilityStruct::setCustomerMailReturnDate()
     * @uses TelephonyPortabilityStruct::setCustomerMailTracking()
     * @uses TelephonyPortabilityStruct::setRangeHolderName()
     * @uses TelephonyPortabilityStruct::setLosingCpName()
     * @uses TelephonyPortabilityStruct::setRhOrderSent()
     * @uses TelephonyPortabilityStruct::setRhOrderReceived()
     * @uses TelephonyPortabilityStruct::setRhOrderAck()
     * @uses TelephonyPortabilityStruct::setRhOrderAckComment()
     * @uses TelephonyPortabilityStruct::setRhOrderPort()
     * @uses TelephonyPortabilityStruct::setRhOrderPortComment()
     * @uses TelephonyPortabilityStruct::setLcpOrderSent()
     * @uses TelephonyPortabilityStruct::setLcpOrderReceived()
     * @uses TelephonyPortabilityStruct::setLcpOrderAck()
     * @uses TelephonyPortabilityStruct::setLcpOrderAckComment()
     * @uses TelephonyPortabilityStruct::setLcpOrderPort()
     * @uses TelephonyPortabilityStruct::setLcpOrderPortComment()
     * @param int $id
     * @param string $customerFullName
     * @param string $billingAccount
     * @param string $callNumber
     * @param \Ovh\ArrayType\MyArrayOfStringType $extraNumbers
     * @param string $planDate
     * @param bool $resellerOrder
     * @param bool $customerMailSent
     * @param string $customerMailSendDate
     * @param bool $customerMailReturned
     * @param string $customerMailReturnDate
     * @param string $customerMailTracking
     * @param string $rangeHolderName
     * @param string $losingCpName
     * @param bool $rhOrderSent
     * @param bool $rhOrderReceived
     * @param string $rhOrderAck
     * @param string $rhOrderAckComment
     * @param string $rhOrderPort
     * @param string $rhOrderPortComment
     * @param bool $lcpOrderSent
     * @param bool $lcpOrderReceived
     * @param string $lcpOrderAck
     * @param string $lcpOrderAckComment
     * @param string $lcpOrderPort
     * @param string $lcpOrderPortComment
     */
    public function __construct($id = null, $customerFullName = null, $billingAccount = null, $callNumber = null, \Ovh\ArrayType\MyArrayOfStringType $extraNumbers = null, $planDate = null, $resellerOrder = null, $customerMailSent = null, $customerMailSendDate = null, $customerMailReturned = null, $customerMailReturnDate = null, $customerMailTracking = null, $rangeHolderName = null, $losingCpName = null, $rhOrderSent = null, $rhOrderReceived = null, $rhOrderAck = null, $rhOrderAckComment = null, $rhOrderPort = null, $rhOrderPortComment = null, $lcpOrderSent = null, $lcpOrderReceived = null, $lcpOrderAck = null, $lcpOrderAckComment = null, $lcpOrderPort = null, $lcpOrderPortComment = null)
    {
        $this
            ->setId($id)
            ->setCustomerFullName($customerFullName)
            ->setBillingAccount($billingAccount)
            ->setCallNumber($callNumber)
            ->setExtraNumbers($extraNumbers)
            ->setPlanDate($planDate)
            ->setResellerOrder($resellerOrder)
            ->setCustomerMailSent($customerMailSent)
            ->setCustomerMailSendDate($customerMailSendDate)
            ->setCustomerMailReturned($customerMailReturned)
            ->setCustomerMailReturnDate($customerMailReturnDate)
            ->setCustomerMailTracking($customerMailTracking)
            ->setRangeHolderName($rangeHolderName)
            ->setLosingCpName($losingCpName)
            ->setRhOrderSent($rhOrderSent)
            ->setRhOrderReceived($rhOrderReceived)
            ->setRhOrderAck($rhOrderAck)
            ->setRhOrderAckComment($rhOrderAckComment)
            ->setRhOrderPort($rhOrderPort)
            ->setRhOrderPortComment($rhOrderPortComment)
            ->setLcpOrderSent($lcpOrderSent)
            ->setLcpOrderReceived($lcpOrderReceived)
            ->setLcpOrderAck($lcpOrderAck)
            ->setLcpOrderAckComment($lcpOrderAckComment)
            ->setLcpOrderPort($lcpOrderPort)
            ->setLcpOrderPortComment($lcpOrderPortComment);
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \Ovh\StructType\TelephonyPortabilityStruct
     */
    public function setId($id = null)
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Get customerFullName value
     * @return string|null
     */
    public function getCustomerFullName()
    {
        return $this->customerFullName;
    }
    /**
     * Set customerFullName value
     * @param string $customerFullName
     * @return \Ovh\StructType\TelephonyPortabilityStruct
     */
    public function setCustomerFullName($customerFullName = null)
    {
        // validation for constraint: string
        if (!is_null($customerFullName) && !is_string($customerFullName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerFullName, true), gettype($customerFullName)), __LINE__);
        }
        $this->customerFullName = $customerFullName;
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
     * @return \Ovh\StructType\TelephonyPortabilityStruct
     */
    public function setBillingAccount($billingAccount = null)
    {
        // validation for constraint: string
        if (!is_null($billingAccount) && !is_string($billingAccount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($billingAccount, true), gettype($billingAccount)), __LINE__);
        }
        $this->billingAccount = $billingAccount;
        return $this;
    }
    /**
     * Get callNumber value
     * @return string|null
     */
    public function getCallNumber()
    {
        return $this->callNumber;
    }
    /**
     * Set callNumber value
     * @param string $callNumber
     * @return \Ovh\StructType\TelephonyPortabilityStruct
     */
    public function setCallNumber($callNumber = null)
    {
        // validation for constraint: string
        if (!is_null($callNumber) && !is_string($callNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($callNumber, true), gettype($callNumber)), __LINE__);
        }
        $this->callNumber = $callNumber;
        return $this;
    }
    /**
     * Get extraNumbers value
     * @return \Ovh\ArrayType\MyArrayOfStringType|null
     */
    public function getExtraNumbers()
    {
        return $this->extraNumbers;
    }
    /**
     * Set extraNumbers value
     * @param \Ovh\ArrayType\MyArrayOfStringType $extraNumbers
     * @return \Ovh\StructType\TelephonyPortabilityStruct
     */
    public function setExtraNumbers(\Ovh\ArrayType\MyArrayOfStringType $extraNumbers = null)
    {
        $this->extraNumbers = $extraNumbers;
        return $this;
    }
    /**
     * Get planDate value
     * @return string|null
     */
    public function getPlanDate()
    {
        return $this->planDate;
    }
    /**
     * Set planDate value
     * @param string $planDate
     * @return \Ovh\StructType\TelephonyPortabilityStruct
     */
    public function setPlanDate($planDate = null)
    {
        // validation for constraint: string
        if (!is_null($planDate) && !is_string($planDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($planDate, true), gettype($planDate)), __LINE__);
        }
        $this->planDate = $planDate;
        return $this;
    }
    /**
     * Get resellerOrder value
     * @return bool|null
     */
    public function getResellerOrder()
    {
        return $this->resellerOrder;
    }
    /**
     * Set resellerOrder value
     * @param bool $resellerOrder
     * @return \Ovh\StructType\TelephonyPortabilityStruct
     */
    public function setResellerOrder($resellerOrder = null)
    {
        // validation for constraint: boolean
        if (!is_null($resellerOrder) && !is_bool($resellerOrder)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($resellerOrder, true), gettype($resellerOrder)), __LINE__);
        }
        $this->resellerOrder = $resellerOrder;
        return $this;
    }
    /**
     * Get customerMailSent value
     * @return bool|null
     */
    public function getCustomerMailSent()
    {
        return $this->customerMailSent;
    }
    /**
     * Set customerMailSent value
     * @param bool $customerMailSent
     * @return \Ovh\StructType\TelephonyPortabilityStruct
     */
    public function setCustomerMailSent($customerMailSent = null)
    {
        // validation for constraint: boolean
        if (!is_null($customerMailSent) && !is_bool($customerMailSent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($customerMailSent, true), gettype($customerMailSent)), __LINE__);
        }
        $this->customerMailSent = $customerMailSent;
        return $this;
    }
    /**
     * Get customerMailSendDate value
     * @return string|null
     */
    public function getCustomerMailSendDate()
    {
        return $this->customerMailSendDate;
    }
    /**
     * Set customerMailSendDate value
     * @param string $customerMailSendDate
     * @return \Ovh\StructType\TelephonyPortabilityStruct
     */
    public function setCustomerMailSendDate($customerMailSendDate = null)
    {
        // validation for constraint: string
        if (!is_null($customerMailSendDate) && !is_string($customerMailSendDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerMailSendDate, true), gettype($customerMailSendDate)), __LINE__);
        }
        $this->customerMailSendDate = $customerMailSendDate;
        return $this;
    }
    /**
     * Get customerMailReturned value
     * @return bool|null
     */
    public function getCustomerMailReturned()
    {
        return $this->customerMailReturned;
    }
    /**
     * Set customerMailReturned value
     * @param bool $customerMailReturned
     * @return \Ovh\StructType\TelephonyPortabilityStruct
     */
    public function setCustomerMailReturned($customerMailReturned = null)
    {
        // validation for constraint: boolean
        if (!is_null($customerMailReturned) && !is_bool($customerMailReturned)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($customerMailReturned, true), gettype($customerMailReturned)), __LINE__);
        }
        $this->customerMailReturned = $customerMailReturned;
        return $this;
    }
    /**
     * Get customerMailReturnDate value
     * @return string|null
     */
    public function getCustomerMailReturnDate()
    {
        return $this->customerMailReturnDate;
    }
    /**
     * Set customerMailReturnDate value
     * @param string $customerMailReturnDate
     * @return \Ovh\StructType\TelephonyPortabilityStruct
     */
    public function setCustomerMailReturnDate($customerMailReturnDate = null)
    {
        // validation for constraint: string
        if (!is_null($customerMailReturnDate) && !is_string($customerMailReturnDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerMailReturnDate, true), gettype($customerMailReturnDate)), __LINE__);
        }
        $this->customerMailReturnDate = $customerMailReturnDate;
        return $this;
    }
    /**
     * Get customerMailTracking value
     * @return string|null
     */
    public function getCustomerMailTracking()
    {
        return $this->customerMailTracking;
    }
    /**
     * Set customerMailTracking value
     * @param string $customerMailTracking
     * @return \Ovh\StructType\TelephonyPortabilityStruct
     */
    public function setCustomerMailTracking($customerMailTracking = null)
    {
        // validation for constraint: string
        if (!is_null($customerMailTracking) && !is_string($customerMailTracking)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerMailTracking, true), gettype($customerMailTracking)), __LINE__);
        }
        $this->customerMailTracking = $customerMailTracking;
        return $this;
    }
    /**
     * Get rangeHolderName value
     * @return string|null
     */
    public function getRangeHolderName()
    {
        return $this->rangeHolderName;
    }
    /**
     * Set rangeHolderName value
     * @param string $rangeHolderName
     * @return \Ovh\StructType\TelephonyPortabilityStruct
     */
    public function setRangeHolderName($rangeHolderName = null)
    {
        // validation for constraint: string
        if (!is_null($rangeHolderName) && !is_string($rangeHolderName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rangeHolderName, true), gettype($rangeHolderName)), __LINE__);
        }
        $this->rangeHolderName = $rangeHolderName;
        return $this;
    }
    /**
     * Get losingCpName value
     * @return string|null
     */
    public function getLosingCpName()
    {
        return $this->losingCpName;
    }
    /**
     * Set losingCpName value
     * @param string $losingCpName
     * @return \Ovh\StructType\TelephonyPortabilityStruct
     */
    public function setLosingCpName($losingCpName = null)
    {
        // validation for constraint: string
        if (!is_null($losingCpName) && !is_string($losingCpName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($losingCpName, true), gettype($losingCpName)), __LINE__);
        }
        $this->losingCpName = $losingCpName;
        return $this;
    }
    /**
     * Get rhOrderSent value
     * @return bool|null
     */
    public function getRhOrderSent()
    {
        return $this->rhOrderSent;
    }
    /**
     * Set rhOrderSent value
     * @param bool $rhOrderSent
     * @return \Ovh\StructType\TelephonyPortabilityStruct
     */
    public function setRhOrderSent($rhOrderSent = null)
    {
        // validation for constraint: boolean
        if (!is_null($rhOrderSent) && !is_bool($rhOrderSent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($rhOrderSent, true), gettype($rhOrderSent)), __LINE__);
        }
        $this->rhOrderSent = $rhOrderSent;
        return $this;
    }
    /**
     * Get rhOrderReceived value
     * @return bool|null
     */
    public function getRhOrderReceived()
    {
        return $this->rhOrderReceived;
    }
    /**
     * Set rhOrderReceived value
     * @param bool $rhOrderReceived
     * @return \Ovh\StructType\TelephonyPortabilityStruct
     */
    public function setRhOrderReceived($rhOrderReceived = null)
    {
        // validation for constraint: boolean
        if (!is_null($rhOrderReceived) && !is_bool($rhOrderReceived)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($rhOrderReceived, true), gettype($rhOrderReceived)), __LINE__);
        }
        $this->rhOrderReceived = $rhOrderReceived;
        return $this;
    }
    /**
     * Get rhOrderAck value
     * @return string|null
     */
    public function getRhOrderAck()
    {
        return $this->rhOrderAck;
    }
    /**
     * Set rhOrderAck value
     * @param string $rhOrderAck
     * @return \Ovh\StructType\TelephonyPortabilityStruct
     */
    public function setRhOrderAck($rhOrderAck = null)
    {
        // validation for constraint: string
        if (!is_null($rhOrderAck) && !is_string($rhOrderAck)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rhOrderAck, true), gettype($rhOrderAck)), __LINE__);
        }
        $this->rhOrderAck = $rhOrderAck;
        return $this;
    }
    /**
     * Get rhOrderAckComment value
     * @return string|null
     */
    public function getRhOrderAckComment()
    {
        return $this->rhOrderAckComment;
    }
    /**
     * Set rhOrderAckComment value
     * @param string $rhOrderAckComment
     * @return \Ovh\StructType\TelephonyPortabilityStruct
     */
    public function setRhOrderAckComment($rhOrderAckComment = null)
    {
        // validation for constraint: string
        if (!is_null($rhOrderAckComment) && !is_string($rhOrderAckComment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rhOrderAckComment, true), gettype($rhOrderAckComment)), __LINE__);
        }
        $this->rhOrderAckComment = $rhOrderAckComment;
        return $this;
    }
    /**
     * Get rhOrderPort value
     * @return string|null
     */
    public function getRhOrderPort()
    {
        return $this->rhOrderPort;
    }
    /**
     * Set rhOrderPort value
     * @param string $rhOrderPort
     * @return \Ovh\StructType\TelephonyPortabilityStruct
     */
    public function setRhOrderPort($rhOrderPort = null)
    {
        // validation for constraint: string
        if (!is_null($rhOrderPort) && !is_string($rhOrderPort)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rhOrderPort, true), gettype($rhOrderPort)), __LINE__);
        }
        $this->rhOrderPort = $rhOrderPort;
        return $this;
    }
    /**
     * Get rhOrderPortComment value
     * @return string|null
     */
    public function getRhOrderPortComment()
    {
        return $this->rhOrderPortComment;
    }
    /**
     * Set rhOrderPortComment value
     * @param string $rhOrderPortComment
     * @return \Ovh\StructType\TelephonyPortabilityStruct
     */
    public function setRhOrderPortComment($rhOrderPortComment = null)
    {
        // validation for constraint: string
        if (!is_null($rhOrderPortComment) && !is_string($rhOrderPortComment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rhOrderPortComment, true), gettype($rhOrderPortComment)), __LINE__);
        }
        $this->rhOrderPortComment = $rhOrderPortComment;
        return $this;
    }
    /**
     * Get lcpOrderSent value
     * @return bool|null
     */
    public function getLcpOrderSent()
    {
        return $this->lcpOrderSent;
    }
    /**
     * Set lcpOrderSent value
     * @param bool $lcpOrderSent
     * @return \Ovh\StructType\TelephonyPortabilityStruct
     */
    public function setLcpOrderSent($lcpOrderSent = null)
    {
        // validation for constraint: boolean
        if (!is_null($lcpOrderSent) && !is_bool($lcpOrderSent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($lcpOrderSent, true), gettype($lcpOrderSent)), __LINE__);
        }
        $this->lcpOrderSent = $lcpOrderSent;
        return $this;
    }
    /**
     * Get lcpOrderReceived value
     * @return bool|null
     */
    public function getLcpOrderReceived()
    {
        return $this->lcpOrderReceived;
    }
    /**
     * Set lcpOrderReceived value
     * @param bool $lcpOrderReceived
     * @return \Ovh\StructType\TelephonyPortabilityStruct
     */
    public function setLcpOrderReceived($lcpOrderReceived = null)
    {
        // validation for constraint: boolean
        if (!is_null($lcpOrderReceived) && !is_bool($lcpOrderReceived)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($lcpOrderReceived, true), gettype($lcpOrderReceived)), __LINE__);
        }
        $this->lcpOrderReceived = $lcpOrderReceived;
        return $this;
    }
    /**
     * Get lcpOrderAck value
     * @return string|null
     */
    public function getLcpOrderAck()
    {
        return $this->lcpOrderAck;
    }
    /**
     * Set lcpOrderAck value
     * @param string $lcpOrderAck
     * @return \Ovh\StructType\TelephonyPortabilityStruct
     */
    public function setLcpOrderAck($lcpOrderAck = null)
    {
        // validation for constraint: string
        if (!is_null($lcpOrderAck) && !is_string($lcpOrderAck)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lcpOrderAck, true), gettype($lcpOrderAck)), __LINE__);
        }
        $this->lcpOrderAck = $lcpOrderAck;
        return $this;
    }
    /**
     * Get lcpOrderAckComment value
     * @return string|null
     */
    public function getLcpOrderAckComment()
    {
        return $this->lcpOrderAckComment;
    }
    /**
     * Set lcpOrderAckComment value
     * @param string $lcpOrderAckComment
     * @return \Ovh\StructType\TelephonyPortabilityStruct
     */
    public function setLcpOrderAckComment($lcpOrderAckComment = null)
    {
        // validation for constraint: string
        if (!is_null($lcpOrderAckComment) && !is_string($lcpOrderAckComment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lcpOrderAckComment, true), gettype($lcpOrderAckComment)), __LINE__);
        }
        $this->lcpOrderAckComment = $lcpOrderAckComment;
        return $this;
    }
    /**
     * Get lcpOrderPort value
     * @return string|null
     */
    public function getLcpOrderPort()
    {
        return $this->lcpOrderPort;
    }
    /**
     * Set lcpOrderPort value
     * @param string $lcpOrderPort
     * @return \Ovh\StructType\TelephonyPortabilityStruct
     */
    public function setLcpOrderPort($lcpOrderPort = null)
    {
        // validation for constraint: string
        if (!is_null($lcpOrderPort) && !is_string($lcpOrderPort)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lcpOrderPort, true), gettype($lcpOrderPort)), __LINE__);
        }
        $this->lcpOrderPort = $lcpOrderPort;
        return $this;
    }
    /**
     * Get lcpOrderPortComment value
     * @return string|null
     */
    public function getLcpOrderPortComment()
    {
        return $this->lcpOrderPortComment;
    }
    /**
     * Set lcpOrderPortComment value
     * @param string $lcpOrderPortComment
     * @return \Ovh\StructType\TelephonyPortabilityStruct
     */
    public function setLcpOrderPortComment($lcpOrderPortComment = null)
    {
        // validation for constraint: string
        if (!is_null($lcpOrderPortComment) && !is_string($lcpOrderPortComment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lcpOrderPortComment, true), gettype($lcpOrderPortComment)), __LINE__);
        }
        $this->lcpOrderPortComment = $lcpOrderPortComment;
        return $this;
    }
}
