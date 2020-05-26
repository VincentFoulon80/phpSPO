<?php

/**
 * Generated by phpSPO model generator 2020-05-26T22:10:14+00:00 
 */
namespace Office365\Graph;

use Office365\Runtime\ClientValueObject;
class DeviceExchangeAccessStateSummary extends ClientValueObject
{
    /**
     * @var integer
     */
    public $AllowedDeviceCount;
    /**
     * @var integer
     */
    public $BlockedDeviceCount;
    /**
     * @var integer
     */
    public $QuarantinedDeviceCount;
    /**
     * @var integer
     */
    public $UnknownDeviceCount;
    /**
     * @var integer
     */
    public $UnavailableDeviceCount;
}