<?php

/**
 * Generated by phpSPO model generator 2020-05-26T22:10:14+00:00 
 */
namespace Office365\Graph;

use Office365\Runtime\ClientValueObject;
class Location extends ClientValueObject
{
    /**
     * @var string
     */
    public $DisplayName;
    /**
     * @var string
     */
    public $LocationEmailAddress;
    /**
     * @var PhysicalAddress
     */
    public $Address;
    /**
     * @var string
     */
    public $LocationUri;
    /**
     * @var string
     */
    public $UniqueId;
    /**
     * @var OutlookGeoCoordinates
     */
    public $Coordinates;
}