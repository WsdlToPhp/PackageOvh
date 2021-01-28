<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for prepaidGetHistory StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PrepaidGetHistory extends AbstractStructBase
{
    /**
     * The session
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The nic
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $nic;
    /**
     * The page
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $page;
    /**
     * Constructor method for prepaidGetHistory
     * @uses PrepaidGetHistory::setSession()
     * @uses PrepaidGetHistory::setNic()
     * @uses PrepaidGetHistory::setPage()
     * @param string $session
     * @param string $nic
     * @param int $page
     */
    public function __construct($session = null, $nic = null, $page = null)
    {
        $this
            ->setSession($session)
            ->setNic($nic)
            ->setPage($page);
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
     * @return \Ovh\StructType\PrepaidGetHistory
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
     * Get nic value
     * @return string|null
     */
    public function getNic()
    {
        return $this->nic;
    }
    /**
     * Set nic value
     * @param string $nic
     * @return \Ovh\StructType\PrepaidGetHistory
     */
    public function setNic($nic = null)
    {
        // validation for constraint: string
        if (!is_null($nic) && !is_string($nic)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nic, true), gettype($nic)), __LINE__);
        }
        $this->nic = $nic;
        return $this;
    }
    /**
     * Get page value
     * @return int|null
     */
    public function getPage()
    {
        return $this->page;
    }
    /**
     * Set page value
     * @param int $page
     * @return \Ovh\StructType\PrepaidGetHistory
     */
    public function setPage($page = null)
    {
        // validation for constraint: int
        if (!is_null($page) && !(is_int($page) || ctype_digit($page))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($page, true), gettype($page)), __LINE__);
        }
        $this->page = $page;
        return $this;
    }
}
