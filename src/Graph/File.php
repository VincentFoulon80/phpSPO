<?php

/**
 * Generated by phpSPO model generator 2020-05-25T06:42:59+00:00 
 */
namespace Office365\Graph;

use Office365\Runtime\ClientValueObject;
class File extends ClientValueObject
{
    /**
     * @var string
     */
    public $MimeType;
    /**
     * @var bool
     */
    public $ProcessingMetadata;
    /**
     * @var Hashes
     */
    public $Hashes;
}