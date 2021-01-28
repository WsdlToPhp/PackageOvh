<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ripeReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class RipeReturn extends AbstractStructBase
{
    /**
     * The inetnum
     * @var \Ovh\StructType\RipeInetnumStruct
     */
    public $inetnum;
    /**
     * The organisation
     * @var \Ovh\StructType\RipeOrganisationStruct
     */
    public $organisation;
    /**
     * Constructor method for ripeReturn
     * @uses RipeReturn::setInetnum()
     * @uses RipeReturn::setOrganisation()
     * @param \Ovh\StructType\RipeInetnumStruct $inetnum
     * @param \Ovh\StructType\RipeOrganisationStruct $organisation
     */
    public function __construct(\Ovh\StructType\RipeInetnumStruct $inetnum = null, \Ovh\StructType\RipeOrganisationStruct $organisation = null)
    {
        $this
            ->setInetnum($inetnum)
            ->setOrganisation($organisation);
    }
    /**
     * Get inetnum value
     * @return \Ovh\StructType\RipeInetnumStruct|null
     */
    public function getInetnum()
    {
        return $this->inetnum;
    }
    /**
     * Set inetnum value
     * @param \Ovh\StructType\RipeInetnumStruct $inetnum
     * @return \Ovh\StructType\RipeReturn
     */
    public function setInetnum(\Ovh\StructType\RipeInetnumStruct $inetnum = null)
    {
        $this->inetnum = $inetnum;
        return $this;
    }
    /**
     * Get organisation value
     * @return \Ovh\StructType\RipeOrganisationStruct|null
     */
    public function getOrganisation()
    {
        return $this->organisation;
    }
    /**
     * Set organisation value
     * @param \Ovh\StructType\RipeOrganisationStruct $organisation
     * @return \Ovh\StructType\RipeReturn
     */
    public function setOrganisation(\Ovh\StructType\RipeOrganisationStruct $organisation = null)
    {
        $this->organisation = $organisation;
        return $this;
    }
}
