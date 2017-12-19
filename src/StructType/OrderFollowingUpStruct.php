<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for orderFollowingUpStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class OrderFollowingUpStruct extends AbstractStructBase
{
    /**
     * The id
     * @var string
     */
    public $id;
    /**
     * The urlId
     * @var string
     */
    public $urlId;
    /**
     * The type
     * @var string
     */
    public $type;
    /**
     * The creationDate
     * @var string
     */
    public $creationDate;
    /**
     * The payment
     * @var string
     */
    public $payment;
    /**
     * The procedure
     * @var string
     */
    public $procedure;
    /**
     * The install
     * @var string
     */
    public $install;
    /**
     * The shipping
     * @var string
     */
    public $shipping;
    /**
     * The cloture
     * @var string
     */
    public $cloture;
    /**
     * The paymentBuffer
     * @var \PayPal\StructType\BufferStepStruct
     */
    public $paymentBuffer;
    /**
     * The procedureBuffer
     * @var \PayPal\StructType\BufferStepStruct
     */
    public $procedureBuffer;
    /**
     * The installBuffer
     * @var \PayPal\StructType\BufferStepStruct
     */
    public $installBuffer;
    /**
     * The shippingBuffer
     * @var \PayPal\StructType\BufferStepStruct
     */
    public $shippingBuffer;
    /**
     * The clotureBuffer
     * @var \PayPal\StructType\BufferStepStruct
     */
    public $clotureBuffer;
    /**
     * The avancement
     * @var string
     */
    public $avancement;
    /**
     * Constructor method for orderFollowingUpStruct
     * @uses OrderFollowingUpStruct::setId()
     * @uses OrderFollowingUpStruct::setUrlId()
     * @uses OrderFollowingUpStruct::setType()
     * @uses OrderFollowingUpStruct::setCreationDate()
     * @uses OrderFollowingUpStruct::setPayment()
     * @uses OrderFollowingUpStruct::setProcedure()
     * @uses OrderFollowingUpStruct::setInstall()
     * @uses OrderFollowingUpStruct::setShipping()
     * @uses OrderFollowingUpStruct::setCloture()
     * @uses OrderFollowingUpStruct::setPaymentBuffer()
     * @uses OrderFollowingUpStruct::setProcedureBuffer()
     * @uses OrderFollowingUpStruct::setInstallBuffer()
     * @uses OrderFollowingUpStruct::setShippingBuffer()
     * @uses OrderFollowingUpStruct::setClotureBuffer()
     * @uses OrderFollowingUpStruct::setAvancement()
     * @param string $id
     * @param string $urlId
     * @param string $type
     * @param string $creationDate
     * @param string $payment
     * @param string $procedure
     * @param string $install
     * @param string $shipping
     * @param string $cloture
     * @param \PayPal\StructType\BufferStepStruct $paymentBuffer
     * @param \PayPal\StructType\BufferStepStruct $procedureBuffer
     * @param \PayPal\StructType\BufferStepStruct $installBuffer
     * @param \PayPal\StructType\BufferStepStruct $shippingBuffer
     * @param \PayPal\StructType\BufferStepStruct $clotureBuffer
     * @param string $avancement
     */
    public function __construct($id = null, $urlId = null, $type = null, $creationDate = null, $payment = null, $procedure = null, $install = null, $shipping = null, $cloture = null, \PayPal\StructType\BufferStepStruct $paymentBuffer = null, \PayPal\StructType\BufferStepStruct $procedureBuffer = null, \PayPal\StructType\BufferStepStruct $installBuffer = null, \PayPal\StructType\BufferStepStruct $shippingBuffer = null, \PayPal\StructType\BufferStepStruct $clotureBuffer = null, $avancement = null)
    {
        $this
            ->setId($id)
            ->setUrlId($urlId)
            ->setType($type)
            ->setCreationDate($creationDate)
            ->setPayment($payment)
            ->setProcedure($procedure)
            ->setInstall($install)
            ->setShipping($shipping)
            ->setCloture($cloture)
            ->setPaymentBuffer($paymentBuffer)
            ->setProcedureBuffer($procedureBuffer)
            ->setInstallBuffer($installBuffer)
            ->setShippingBuffer($shippingBuffer)
            ->setClotureBuffer($clotureBuffer)
            ->setAvancement($avancement);
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \PayPal\StructType\OrderFollowingUpStruct
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Get urlId value
     * @return string|null
     */
    public function getUrlId()
    {
        return $this->urlId;
    }
    /**
     * Set urlId value
     * @param string $urlId
     * @return \PayPal\StructType\OrderFollowingUpStruct
     */
    public function setUrlId($urlId = null)
    {
        // validation for constraint: string
        if (!is_null($urlId) && !is_string($urlId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($urlId)), __LINE__);
        }
        $this->urlId = $urlId;
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
     * @return \PayPal\StructType\OrderFollowingUpStruct
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
     * Get creationDate value
     * @return string|null
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }
    /**
     * Set creationDate value
     * @param string $creationDate
     * @return \PayPal\StructType\OrderFollowingUpStruct
     */
    public function setCreationDate($creationDate = null)
    {
        // validation for constraint: string
        if (!is_null($creationDate) && !is_string($creationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($creationDate)), __LINE__);
        }
        $this->creationDate = $creationDate;
        return $this;
    }
    /**
     * Get payment value
     * @return string|null
     */
    public function getPayment()
    {
        return $this->payment;
    }
    /**
     * Set payment value
     * @param string $payment
     * @return \PayPal\StructType\OrderFollowingUpStruct
     */
    public function setPayment($payment = null)
    {
        // validation for constraint: string
        if (!is_null($payment) && !is_string($payment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($payment)), __LINE__);
        }
        $this->payment = $payment;
        return $this;
    }
    /**
     * Get procedure value
     * @return string|null
     */
    public function getProcedure()
    {
        return $this->procedure;
    }
    /**
     * Set procedure value
     * @param string $procedure
     * @return \PayPal\StructType\OrderFollowingUpStruct
     */
    public function setProcedure($procedure = null)
    {
        // validation for constraint: string
        if (!is_null($procedure) && !is_string($procedure)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($procedure)), __LINE__);
        }
        $this->procedure = $procedure;
        return $this;
    }
    /**
     * Get install value
     * @return string|null
     */
    public function getInstall()
    {
        return $this->install;
    }
    /**
     * Set install value
     * @param string $install
     * @return \PayPal\StructType\OrderFollowingUpStruct
     */
    public function setInstall($install = null)
    {
        // validation for constraint: string
        if (!is_null($install) && !is_string($install)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($install)), __LINE__);
        }
        $this->install = $install;
        return $this;
    }
    /**
     * Get shipping value
     * @return string|null
     */
    public function getShipping()
    {
        return $this->shipping;
    }
    /**
     * Set shipping value
     * @param string $shipping
     * @return \PayPal\StructType\OrderFollowingUpStruct
     */
    public function setShipping($shipping = null)
    {
        // validation for constraint: string
        if (!is_null($shipping) && !is_string($shipping)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shipping)), __LINE__);
        }
        $this->shipping = $shipping;
        return $this;
    }
    /**
     * Get cloture value
     * @return string|null
     */
    public function getCloture()
    {
        return $this->cloture;
    }
    /**
     * Set cloture value
     * @param string $cloture
     * @return \PayPal\StructType\OrderFollowingUpStruct
     */
    public function setCloture($cloture = null)
    {
        // validation for constraint: string
        if (!is_null($cloture) && !is_string($cloture)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cloture)), __LINE__);
        }
        $this->cloture = $cloture;
        return $this;
    }
    /**
     * Get paymentBuffer value
     * @return \PayPal\StructType\BufferStepStruct|null
     */
    public function getPaymentBuffer()
    {
        return $this->paymentBuffer;
    }
    /**
     * Set paymentBuffer value
     * @param \PayPal\StructType\BufferStepStruct $paymentBuffer
     * @return \PayPal\StructType\OrderFollowingUpStruct
     */
    public function setPaymentBuffer(\PayPal\StructType\BufferStepStruct $paymentBuffer = null)
    {
        $this->paymentBuffer = $paymentBuffer;
        return $this;
    }
    /**
     * Get procedureBuffer value
     * @return \PayPal\StructType\BufferStepStruct|null
     */
    public function getProcedureBuffer()
    {
        return $this->procedureBuffer;
    }
    /**
     * Set procedureBuffer value
     * @param \PayPal\StructType\BufferStepStruct $procedureBuffer
     * @return \PayPal\StructType\OrderFollowingUpStruct
     */
    public function setProcedureBuffer(\PayPal\StructType\BufferStepStruct $procedureBuffer = null)
    {
        $this->procedureBuffer = $procedureBuffer;
        return $this;
    }
    /**
     * Get installBuffer value
     * @return \PayPal\StructType\BufferStepStruct|null
     */
    public function getInstallBuffer()
    {
        return $this->installBuffer;
    }
    /**
     * Set installBuffer value
     * @param \PayPal\StructType\BufferStepStruct $installBuffer
     * @return \PayPal\StructType\OrderFollowingUpStruct
     */
    public function setInstallBuffer(\PayPal\StructType\BufferStepStruct $installBuffer = null)
    {
        $this->installBuffer = $installBuffer;
        return $this;
    }
    /**
     * Get shippingBuffer value
     * @return \PayPal\StructType\BufferStepStruct|null
     */
    public function getShippingBuffer()
    {
        return $this->shippingBuffer;
    }
    /**
     * Set shippingBuffer value
     * @param \PayPal\StructType\BufferStepStruct $shippingBuffer
     * @return \PayPal\StructType\OrderFollowingUpStruct
     */
    public function setShippingBuffer(\PayPal\StructType\BufferStepStruct $shippingBuffer = null)
    {
        $this->shippingBuffer = $shippingBuffer;
        return $this;
    }
    /**
     * Get clotureBuffer value
     * @return \PayPal\StructType\BufferStepStruct|null
     */
    public function getClotureBuffer()
    {
        return $this->clotureBuffer;
    }
    /**
     * Set clotureBuffer value
     * @param \PayPal\StructType\BufferStepStruct $clotureBuffer
     * @return \PayPal\StructType\OrderFollowingUpStruct
     */
    public function setClotureBuffer(\PayPal\StructType\BufferStepStruct $clotureBuffer = null)
    {
        $this->clotureBuffer = $clotureBuffer;
        return $this;
    }
    /**
     * Get avancement value
     * @return string|null
     */
    public function getAvancement()
    {
        return $this->avancement;
    }
    /**
     * Set avancement value
     * @param string $avancement
     * @return \PayPal\StructType\OrderFollowingUpStruct
     */
    public function setAvancement($avancement = null)
    {
        // validation for constraint: string
        if (!is_null($avancement) && !is_string($avancement)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($avancement)), __LINE__);
        }
        $this->avancement = $avancement;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\OrderFollowingUpStruct
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
