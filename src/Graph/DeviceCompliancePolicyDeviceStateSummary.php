<?php

/**
 * Generated by phpSPO model generator 2020-05-26T22:10:14+00:00 
 */
namespace Office365\Graph;

use Office365\Runtime\ClientObject;
use Office365\Runtime\ResourcePath;
class DeviceCompliancePolicyDeviceStateSummary extends ClientObject
{
    /**
     * @return integer
     */
    public function getInGracePeriodCount()
    {
        if (!$this->isPropertyAvailable("InGracePeriodCount")) {
            return null;
        }
        return $this->getProperty("InGracePeriodCount");
    }
    /**
     * @var integer
     */
    public function setInGracePeriodCount($value)
    {
        $this->setProperty("InGracePeriodCount", $value, true);
    }
    /**
     * @return integer
     */
    public function getConfigManagerCount()
    {
        if (!$this->isPropertyAvailable("ConfigManagerCount")) {
            return null;
        }
        return $this->getProperty("ConfigManagerCount");
    }
    /**
     * @var integer
     */
    public function setConfigManagerCount($value)
    {
        $this->setProperty("ConfigManagerCount", $value, true);
    }
    /**
     * @return integer
     */
    public function getUnknownDeviceCount()
    {
        if (!$this->isPropertyAvailable("UnknownDeviceCount")) {
            return null;
        }
        return $this->getProperty("UnknownDeviceCount");
    }
    /**
     * @var integer
     */
    public function setUnknownDeviceCount($value)
    {
        $this->setProperty("UnknownDeviceCount", $value, true);
    }
    /**
     * @return integer
     */
    public function getNotApplicableDeviceCount()
    {
        if (!$this->isPropertyAvailable("NotApplicableDeviceCount")) {
            return null;
        }
        return $this->getProperty("NotApplicableDeviceCount");
    }
    /**
     * @var integer
     */
    public function setNotApplicableDeviceCount($value)
    {
        $this->setProperty("NotApplicableDeviceCount", $value, true);
    }
    /**
     * @return integer
     */
    public function getCompliantDeviceCount()
    {
        if (!$this->isPropertyAvailable("CompliantDeviceCount")) {
            return null;
        }
        return $this->getProperty("CompliantDeviceCount");
    }
    /**
     * @var integer
     */
    public function setCompliantDeviceCount($value)
    {
        $this->setProperty("CompliantDeviceCount", $value, true);
    }
    /**
     * @return integer
     */
    public function getRemediatedDeviceCount()
    {
        if (!$this->isPropertyAvailable("RemediatedDeviceCount")) {
            return null;
        }
        return $this->getProperty("RemediatedDeviceCount");
    }
    /**
     * @var integer
     */
    public function setRemediatedDeviceCount($value)
    {
        $this->setProperty("RemediatedDeviceCount", $value, true);
    }
    /**
     * @return integer
     */
    public function getNonCompliantDeviceCount()
    {
        if (!$this->isPropertyAvailable("NonCompliantDeviceCount")) {
            return null;
        }
        return $this->getProperty("NonCompliantDeviceCount");
    }
    /**
     * @var integer
     */
    public function setNonCompliantDeviceCount($value)
    {
        $this->setProperty("NonCompliantDeviceCount", $value, true);
    }
    /**
     * @return integer
     */
    public function getErrorDeviceCount()
    {
        if (!$this->isPropertyAvailable("ErrorDeviceCount")) {
            return null;
        }
        return $this->getProperty("ErrorDeviceCount");
    }
    /**
     * @var integer
     */
    public function setErrorDeviceCount($value)
    {
        $this->setProperty("ErrorDeviceCount", $value, true);
    }
    /**
     * @return integer
     */
    public function getConflictDeviceCount()
    {
        if (!$this->isPropertyAvailable("ConflictDeviceCount")) {
            return null;
        }
        return $this->getProperty("ConflictDeviceCount");
    }
    /**
     * @var integer
     */
    public function setConflictDeviceCount($value)
    {
        $this->setProperty("ConflictDeviceCount", $value, true);
    }
}