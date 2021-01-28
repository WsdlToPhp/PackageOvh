<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for globalAccessStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GlobalAccessStruct extends AbstractStructBase
{
    /**
     * The name
     * @var string
     */
    public $name;
    /**
     * The domain
     * @var bool
     */
    public $domain;
    /**
     * The hosting
     * @var bool
     */
    public $hosting;
    /**
     * The email
     * @var bool
     */
    public $email;
    /**
     * The pop
     * @var bool
     */
    public $pop;
    /**
     * The dedicated
     * @var bool
     */
    public $dedicated;
    /**
     * The reverse
     * @var string
     */
    public $reverse;
    /**
     * The alldom
     * @var bool
     */
    public $alldom;
    /**
     * The ssl
     * @var bool
     */
    public $ssl;
    /**
     * The rps
     * @var bool
     */
    public $rps;
    /**
     * The rpsOrphan
     * @var bool
     */
    public $rpsOrphan;
    /**
     * The vs
     * @var bool
     */
    public $vs;
    /**
     * The voip
     * @var bool
     */
    public $voip;
    /**
     * The housing
     * @var bool
     */
    public $housing;
    /**
     * The sqlpriv
     * @var bool
     */
    public $sqlpriv;
    /**
     * Constructor method for globalAccessStruct
     * @uses GlobalAccessStruct::setName()
     * @uses GlobalAccessStruct::setDomain()
     * @uses GlobalAccessStruct::setHosting()
     * @uses GlobalAccessStruct::setEmail()
     * @uses GlobalAccessStruct::setPop()
     * @uses GlobalAccessStruct::setDedicated()
     * @uses GlobalAccessStruct::setReverse()
     * @uses GlobalAccessStruct::setAlldom()
     * @uses GlobalAccessStruct::setSsl()
     * @uses GlobalAccessStruct::setRps()
     * @uses GlobalAccessStruct::setRpsOrphan()
     * @uses GlobalAccessStruct::setVs()
     * @uses GlobalAccessStruct::setVoip()
     * @uses GlobalAccessStruct::setHousing()
     * @uses GlobalAccessStruct::setSqlpriv()
     * @param string $name
     * @param bool $domain
     * @param bool $hosting
     * @param bool $email
     * @param bool $pop
     * @param bool $dedicated
     * @param string $reverse
     * @param bool $alldom
     * @param bool $ssl
     * @param bool $rps
     * @param bool $rpsOrphan
     * @param bool $vs
     * @param bool $voip
     * @param bool $housing
     * @param bool $sqlpriv
     */
    public function __construct($name = null, $domain = null, $hosting = null, $email = null, $pop = null, $dedicated = null, $reverse = null, $alldom = null, $ssl = null, $rps = null, $rpsOrphan = null, $vs = null, $voip = null, $housing = null, $sqlpriv = null)
    {
        $this
            ->setName($name)
            ->setDomain($domain)
            ->setHosting($hosting)
            ->setEmail($email)
            ->setPop($pop)
            ->setDedicated($dedicated)
            ->setReverse($reverse)
            ->setAlldom($alldom)
            ->setSsl($ssl)
            ->setRps($rps)
            ->setRpsOrphan($rpsOrphan)
            ->setVs($vs)
            ->setVoip($voip)
            ->setHousing($housing)
            ->setSqlpriv($sqlpriv);
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Ovh\StructType\GlobalAccessStruct
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
    /**
     * Get domain value
     * @return bool|null
     */
    public function getDomain()
    {
        return $this->domain;
    }
    /**
     * Set domain value
     * @param bool $domain
     * @return \Ovh\StructType\GlobalAccessStruct
     */
    public function setDomain($domain = null)
    {
        // validation for constraint: boolean
        if (!is_null($domain) && !is_bool($domain)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($domain, true), gettype($domain)), __LINE__);
        }
        $this->domain = $domain;
        return $this;
    }
    /**
     * Get hosting value
     * @return bool|null
     */
    public function getHosting()
    {
        return $this->hosting;
    }
    /**
     * Set hosting value
     * @param bool $hosting
     * @return \Ovh\StructType\GlobalAccessStruct
     */
    public function setHosting($hosting = null)
    {
        // validation for constraint: boolean
        if (!is_null($hosting) && !is_bool($hosting)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hosting, true), gettype($hosting)), __LINE__);
        }
        $this->hosting = $hosting;
        return $this;
    }
    /**
     * Get email value
     * @return bool|null
     */
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param bool $email
     * @return \Ovh\StructType\GlobalAccessStruct
     */
    public function setEmail($email = null)
    {
        // validation for constraint: boolean
        if (!is_null($email) && !is_bool($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        $this->email = $email;
        return $this;
    }
    /**
     * Get pop value
     * @return bool|null
     */
    public function getPop()
    {
        return $this->pop;
    }
    /**
     * Set pop value
     * @param bool $pop
     * @return \Ovh\StructType\GlobalAccessStruct
     */
    public function setPop($pop = null)
    {
        // validation for constraint: boolean
        if (!is_null($pop) && !is_bool($pop)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($pop, true), gettype($pop)), __LINE__);
        }
        $this->pop = $pop;
        return $this;
    }
    /**
     * Get dedicated value
     * @return bool|null
     */
    public function getDedicated()
    {
        return $this->dedicated;
    }
    /**
     * Set dedicated value
     * @param bool $dedicated
     * @return \Ovh\StructType\GlobalAccessStruct
     */
    public function setDedicated($dedicated = null)
    {
        // validation for constraint: boolean
        if (!is_null($dedicated) && !is_bool($dedicated)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($dedicated, true), gettype($dedicated)), __LINE__);
        }
        $this->dedicated = $dedicated;
        return $this;
    }
    /**
     * Get reverse value
     * @return string|null
     */
    public function getReverse()
    {
        return $this->reverse;
    }
    /**
     * Set reverse value
     * @param string $reverse
     * @return \Ovh\StructType\GlobalAccessStruct
     */
    public function setReverse($reverse = null)
    {
        // validation for constraint: string
        if (!is_null($reverse) && !is_string($reverse)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reverse, true), gettype($reverse)), __LINE__);
        }
        $this->reverse = $reverse;
        return $this;
    }
    /**
     * Get alldom value
     * @return bool|null
     */
    public function getAlldom()
    {
        return $this->alldom;
    }
    /**
     * Set alldom value
     * @param bool $alldom
     * @return \Ovh\StructType\GlobalAccessStruct
     */
    public function setAlldom($alldom = null)
    {
        // validation for constraint: boolean
        if (!is_null($alldom) && !is_bool($alldom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($alldom, true), gettype($alldom)), __LINE__);
        }
        $this->alldom = $alldom;
        return $this;
    }
    /**
     * Get ssl value
     * @return bool|null
     */
    public function getSsl()
    {
        return $this->ssl;
    }
    /**
     * Set ssl value
     * @param bool $ssl
     * @return \Ovh\StructType\GlobalAccessStruct
     */
    public function setSsl($ssl = null)
    {
        // validation for constraint: boolean
        if (!is_null($ssl) && !is_bool($ssl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($ssl, true), gettype($ssl)), __LINE__);
        }
        $this->ssl = $ssl;
        return $this;
    }
    /**
     * Get rps value
     * @return bool|null
     */
    public function getRps()
    {
        return $this->rps;
    }
    /**
     * Set rps value
     * @param bool $rps
     * @return \Ovh\StructType\GlobalAccessStruct
     */
    public function setRps($rps = null)
    {
        // validation for constraint: boolean
        if (!is_null($rps) && !is_bool($rps)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($rps, true), gettype($rps)), __LINE__);
        }
        $this->rps = $rps;
        return $this;
    }
    /**
     * Get rpsOrphan value
     * @return bool|null
     */
    public function getRpsOrphan()
    {
        return $this->rpsOrphan;
    }
    /**
     * Set rpsOrphan value
     * @param bool $rpsOrphan
     * @return \Ovh\StructType\GlobalAccessStruct
     */
    public function setRpsOrphan($rpsOrphan = null)
    {
        // validation for constraint: boolean
        if (!is_null($rpsOrphan) && !is_bool($rpsOrphan)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($rpsOrphan, true), gettype($rpsOrphan)), __LINE__);
        }
        $this->rpsOrphan = $rpsOrphan;
        return $this;
    }
    /**
     * Get vs value
     * @return bool|null
     */
    public function getVs()
    {
        return $this->vs;
    }
    /**
     * Set vs value
     * @param bool $vs
     * @return \Ovh\StructType\GlobalAccessStruct
     */
    public function setVs($vs = null)
    {
        // validation for constraint: boolean
        if (!is_null($vs) && !is_bool($vs)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($vs, true), gettype($vs)), __LINE__);
        }
        $this->vs = $vs;
        return $this;
    }
    /**
     * Get voip value
     * @return bool|null
     */
    public function getVoip()
    {
        return $this->voip;
    }
    /**
     * Set voip value
     * @param bool $voip
     * @return \Ovh\StructType\GlobalAccessStruct
     */
    public function setVoip($voip = null)
    {
        // validation for constraint: boolean
        if (!is_null($voip) && !is_bool($voip)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($voip, true), gettype($voip)), __LINE__);
        }
        $this->voip = $voip;
        return $this;
    }
    /**
     * Get housing value
     * @return bool|null
     */
    public function getHousing()
    {
        return $this->housing;
    }
    /**
     * Set housing value
     * @param bool $housing
     * @return \Ovh\StructType\GlobalAccessStruct
     */
    public function setHousing($housing = null)
    {
        // validation for constraint: boolean
        if (!is_null($housing) && !is_bool($housing)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($housing, true), gettype($housing)), __LINE__);
        }
        $this->housing = $housing;
        return $this;
    }
    /**
     * Get sqlpriv value
     * @return bool|null
     */
    public function getSqlpriv()
    {
        return $this->sqlpriv;
    }
    /**
     * Set sqlpriv value
     * @param bool $sqlpriv
     * @return \Ovh\StructType\GlobalAccessStruct
     */
    public function setSqlpriv($sqlpriv = null)
    {
        // validation for constraint: boolean
        if (!is_null($sqlpriv) && !is_bool($sqlpriv)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($sqlpriv, true), gettype($sqlpriv)), __LINE__);
        }
        $this->sqlpriv = $sqlpriv;
        return $this;
    }
}
