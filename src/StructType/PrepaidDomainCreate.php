<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for prepaidDomainCreate StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PrepaidDomainCreate extends AbstractStructBase
{
    /**
     * The session
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The domain
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $domain;
    /**
     * The nicowner
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $nicowner;
    /**
     * The nicadmin
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $nicadmin;
    /**
     * The nictech
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $nictech;
    /**
     * The nicbilling
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $nicbilling;
    /**
     * The dns1
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $dns1;
    /**
     * The dns2
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $dns2;
    /**
     * The dns3
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $dns3;
    /**
     * The dns4
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $dns4;
    /**
     * The dns5
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $dns5;
    /**
     * The frpartBirthday
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $frpartBirthday;
    /**
     * The frpartBirthCountry
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $frpartBirthCountry;
    /**
     * The frpartBirthDepartment
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $frpartBirthDepartment;
    /**
     * The frpartBirthTown
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $frpartBirthTown;
    /**
     * The dryRun
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $dryRun;
    /**
     * Constructor method for prepaidDomainCreate
     * @uses PrepaidDomainCreate::setSession()
     * @uses PrepaidDomainCreate::setDomain()
     * @uses PrepaidDomainCreate::setNicowner()
     * @uses PrepaidDomainCreate::setNicadmin()
     * @uses PrepaidDomainCreate::setNictech()
     * @uses PrepaidDomainCreate::setNicbilling()
     * @uses PrepaidDomainCreate::setDns1()
     * @uses PrepaidDomainCreate::setDns2()
     * @uses PrepaidDomainCreate::setDns3()
     * @uses PrepaidDomainCreate::setDns4()
     * @uses PrepaidDomainCreate::setDns5()
     * @uses PrepaidDomainCreate::setFrpartBirthday()
     * @uses PrepaidDomainCreate::setFrpartBirthCountry()
     * @uses PrepaidDomainCreate::setFrpartBirthDepartment()
     * @uses PrepaidDomainCreate::setFrpartBirthTown()
     * @uses PrepaidDomainCreate::setDryRun()
     * @param string $session
     * @param string $domain
     * @param string $nicowner
     * @param string $nicadmin
     * @param string $nictech
     * @param string $nicbilling
     * @param string $dns1
     * @param string $dns2
     * @param string $dns3
     * @param string $dns4
     * @param string $dns5
     * @param string $frpartBirthday
     * @param string $frpartBirthCountry
     * @param string $frpartBirthDepartment
     * @param string $frpartBirthTown
     * @param bool $dryRun
     */
    public function __construct($session = null, $domain = null, $nicowner = null, $nicadmin = null, $nictech = null, $nicbilling = null, $dns1 = null, $dns2 = null, $dns3 = null, $dns4 = null, $dns5 = null, $frpartBirthday = null, $frpartBirthCountry = null, $frpartBirthDepartment = null, $frpartBirthTown = null, $dryRun = null)
    {
        $this
            ->setSession($session)
            ->setDomain($domain)
            ->setNicowner($nicowner)
            ->setNicadmin($nicadmin)
            ->setNictech($nictech)
            ->setNicbilling($nicbilling)
            ->setDns1($dns1)
            ->setDns2($dns2)
            ->setDns3($dns3)
            ->setDns4($dns4)
            ->setDns5($dns5)
            ->setFrpartBirthday($frpartBirthday)
            ->setFrpartBirthCountry($frpartBirthCountry)
            ->setFrpartBirthDepartment($frpartBirthDepartment)
            ->setFrpartBirthTown($frpartBirthTown)
            ->setDryRun($dryRun);
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
     * @return \Ovh\StructType\PrepaidDomainCreate
     */
    public function setSession($session = null)
    {
        // validation for constraint: string
        if (!is_null($session) && !is_string($session)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($session)), __LINE__);
        }
        $this->session = $session;
        return $this;
    }
    /**
     * Get domain value
     * @return string|null
     */
    public function getDomain()
    {
        return $this->domain;
    }
    /**
     * Set domain value
     * @param string $domain
     * @return \Ovh\StructType\PrepaidDomainCreate
     */
    public function setDomain($domain = null)
    {
        // validation for constraint: string
        if (!is_null($domain) && !is_string($domain)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($domain)), __LINE__);
        }
        $this->domain = $domain;
        return $this;
    }
    /**
     * Get nicowner value
     * @return string|null
     */
    public function getNicowner()
    {
        return $this->nicowner;
    }
    /**
     * Set nicowner value
     * @param string $nicowner
     * @return \Ovh\StructType\PrepaidDomainCreate
     */
    public function setNicowner($nicowner = null)
    {
        // validation for constraint: string
        if (!is_null($nicowner) && !is_string($nicowner)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nicowner)), __LINE__);
        }
        $this->nicowner = $nicowner;
        return $this;
    }
    /**
     * Get nicadmin value
     * @return string|null
     */
    public function getNicadmin()
    {
        return $this->nicadmin;
    }
    /**
     * Set nicadmin value
     * @param string $nicadmin
     * @return \Ovh\StructType\PrepaidDomainCreate
     */
    public function setNicadmin($nicadmin = null)
    {
        // validation for constraint: string
        if (!is_null($nicadmin) && !is_string($nicadmin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nicadmin)), __LINE__);
        }
        $this->nicadmin = $nicadmin;
        return $this;
    }
    /**
     * Get nictech value
     * @return string|null
     */
    public function getNictech()
    {
        return $this->nictech;
    }
    /**
     * Set nictech value
     * @param string $nictech
     * @return \Ovh\StructType\PrepaidDomainCreate
     */
    public function setNictech($nictech = null)
    {
        // validation for constraint: string
        if (!is_null($nictech) && !is_string($nictech)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nictech)), __LINE__);
        }
        $this->nictech = $nictech;
        return $this;
    }
    /**
     * Get nicbilling value
     * @return string|null
     */
    public function getNicbilling()
    {
        return $this->nicbilling;
    }
    /**
     * Set nicbilling value
     * @param string $nicbilling
     * @return \Ovh\StructType\PrepaidDomainCreate
     */
    public function setNicbilling($nicbilling = null)
    {
        // validation for constraint: string
        if (!is_null($nicbilling) && !is_string($nicbilling)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nicbilling)), __LINE__);
        }
        $this->nicbilling = $nicbilling;
        return $this;
    }
    /**
     * Get dns1 value
     * @return string|null
     */
    public function getDns1()
    {
        return $this->dns1;
    }
    /**
     * Set dns1 value
     * @param string $dns1
     * @return \Ovh\StructType\PrepaidDomainCreate
     */
    public function setDns1($dns1 = null)
    {
        // validation for constraint: string
        if (!is_null($dns1) && !is_string($dns1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dns1)), __LINE__);
        }
        $this->dns1 = $dns1;
        return $this;
    }
    /**
     * Get dns2 value
     * @return string|null
     */
    public function getDns2()
    {
        return $this->dns2;
    }
    /**
     * Set dns2 value
     * @param string $dns2
     * @return \Ovh\StructType\PrepaidDomainCreate
     */
    public function setDns2($dns2 = null)
    {
        // validation for constraint: string
        if (!is_null($dns2) && !is_string($dns2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dns2)), __LINE__);
        }
        $this->dns2 = $dns2;
        return $this;
    }
    /**
     * Get dns3 value
     * @return string|null
     */
    public function getDns3()
    {
        return $this->dns3;
    }
    /**
     * Set dns3 value
     * @param string $dns3
     * @return \Ovh\StructType\PrepaidDomainCreate
     */
    public function setDns3($dns3 = null)
    {
        // validation for constraint: string
        if (!is_null($dns3) && !is_string($dns3)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dns3)), __LINE__);
        }
        $this->dns3 = $dns3;
        return $this;
    }
    /**
     * Get dns4 value
     * @return string|null
     */
    public function getDns4()
    {
        return $this->dns4;
    }
    /**
     * Set dns4 value
     * @param string $dns4
     * @return \Ovh\StructType\PrepaidDomainCreate
     */
    public function setDns4($dns4 = null)
    {
        // validation for constraint: string
        if (!is_null($dns4) && !is_string($dns4)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dns4)), __LINE__);
        }
        $this->dns4 = $dns4;
        return $this;
    }
    /**
     * Get dns5 value
     * @return string|null
     */
    public function getDns5()
    {
        return $this->dns5;
    }
    /**
     * Set dns5 value
     * @param string $dns5
     * @return \Ovh\StructType\PrepaidDomainCreate
     */
    public function setDns5($dns5 = null)
    {
        // validation for constraint: string
        if (!is_null($dns5) && !is_string($dns5)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dns5)), __LINE__);
        }
        $this->dns5 = $dns5;
        return $this;
    }
    /**
     * Get frpartBirthday value
     * @return string|null
     */
    public function getFrpartBirthday()
    {
        return $this->frpartBirthday;
    }
    /**
     * Set frpartBirthday value
     * @param string $frpartBirthday
     * @return \Ovh\StructType\PrepaidDomainCreate
     */
    public function setFrpartBirthday($frpartBirthday = null)
    {
        // validation for constraint: string
        if (!is_null($frpartBirthday) && !is_string($frpartBirthday)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($frpartBirthday)), __LINE__);
        }
        $this->frpartBirthday = $frpartBirthday;
        return $this;
    }
    /**
     * Get frpartBirthCountry value
     * @return string|null
     */
    public function getFrpartBirthCountry()
    {
        return $this->frpartBirthCountry;
    }
    /**
     * Set frpartBirthCountry value
     * @param string $frpartBirthCountry
     * @return \Ovh\StructType\PrepaidDomainCreate
     */
    public function setFrpartBirthCountry($frpartBirthCountry = null)
    {
        // validation for constraint: string
        if (!is_null($frpartBirthCountry) && !is_string($frpartBirthCountry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($frpartBirthCountry)), __LINE__);
        }
        $this->frpartBirthCountry = $frpartBirthCountry;
        return $this;
    }
    /**
     * Get frpartBirthDepartment value
     * @return string|null
     */
    public function getFrpartBirthDepartment()
    {
        return $this->frpartBirthDepartment;
    }
    /**
     * Set frpartBirthDepartment value
     * @param string $frpartBirthDepartment
     * @return \Ovh\StructType\PrepaidDomainCreate
     */
    public function setFrpartBirthDepartment($frpartBirthDepartment = null)
    {
        // validation for constraint: string
        if (!is_null($frpartBirthDepartment) && !is_string($frpartBirthDepartment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($frpartBirthDepartment)), __LINE__);
        }
        $this->frpartBirthDepartment = $frpartBirthDepartment;
        return $this;
    }
    /**
     * Get frpartBirthTown value
     * @return string|null
     */
    public function getFrpartBirthTown()
    {
        return $this->frpartBirthTown;
    }
    /**
     * Set frpartBirthTown value
     * @param string $frpartBirthTown
     * @return \Ovh\StructType\PrepaidDomainCreate
     */
    public function setFrpartBirthTown($frpartBirthTown = null)
    {
        // validation for constraint: string
        if (!is_null($frpartBirthTown) && !is_string($frpartBirthTown)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($frpartBirthTown)), __LINE__);
        }
        $this->frpartBirthTown = $frpartBirthTown;
        return $this;
    }
    /**
     * Get dryRun value
     * @return bool|null
     */
    public function getDryRun()
    {
        return $this->dryRun;
    }
    /**
     * Set dryRun value
     * @param bool $dryRun
     * @return \Ovh\StructType\PrepaidDomainCreate
     */
    public function setDryRun($dryRun = null)
    {
        // validation for constraint: boolean
        if (!is_null($dryRun) && !is_bool($dryRun)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($dryRun)), __LINE__);
        }
        $this->dryRun = $dryRun;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\PrepaidDomainCreate
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
