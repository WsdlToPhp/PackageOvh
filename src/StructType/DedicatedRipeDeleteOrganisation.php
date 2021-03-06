<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedRipeDeleteOrganisation StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedRipeDeleteOrganisation extends AbstractStructBase
{
    /**
     * The session
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The ripeId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $ripeId;
    /**
     * The comment
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $comment;
    /**
     * Constructor method for dedicatedRipeDeleteOrganisation
     * @uses DedicatedRipeDeleteOrganisation::setSession()
     * @uses DedicatedRipeDeleteOrganisation::setRipeId()
     * @uses DedicatedRipeDeleteOrganisation::setComment()
     * @param string $session
     * @param string $ripeId
     * @param string $comment
     */
    public function __construct($session = null, $ripeId = null, $comment = null)
    {
        $this
            ->setSession($session)
            ->setRipeId($ripeId)
            ->setComment($comment);
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
     * @return \Ovh\StructType\DedicatedRipeDeleteOrganisation
     */
    public function setSession($session = null)
    {
        // validation for constraint: string
        if (!is_null($session) && !is_string($session)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($session, true), gettype($session)), __LINE__);
        }
        $this->session = $session;
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
     * @return \Ovh\StructType\DedicatedRipeDeleteOrganisation
     */
    public function setRipeId($ripeId = null)
    {
        // validation for constraint: string
        if (!is_null($ripeId) && !is_string($ripeId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ripeId, true), gettype($ripeId)), __LINE__);
        }
        $this->ripeId = $ripeId;
        return $this;
    }
    /**
     * Get comment value
     * @return string|null
     */
    public function getComment()
    {
        return $this->comment;
    }
    /**
     * Set comment value
     * @param string $comment
     * @return \Ovh\StructType\DedicatedRipeDeleteOrganisation
     */
    public function setComment($comment = null)
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comment, true), gettype($comment)), __LINE__);
        }
        $this->comment = $comment;
        return $this;
    }
}
