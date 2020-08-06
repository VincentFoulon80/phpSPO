<?php

/**
 * Generated by phpSPO model generator 2020-05-24T22:08:35+00:00 
 */
namespace Office365\Graph;

use Exception;
use Office365\Runtime\ClientObject;
use Office365\Runtime\InvokeMethodQuery;

/**
 *  "A profile photo of a user, group or an Outlook contact accessed from Exchange Online. It's binary data not encoded in base-64."
 */
class ProfilePhoto extends ClientObject
{

    /**
     * Download a photo content
     * @param resource $handle
     * @throws Exception
     */
    public function getContent($handle)
    {
        $qry = new InvokeMethodQuery($this,"\$value");
        $this->getContext()->addQuery($qry);
        $this->getContext()->getPendingRequest()->beforeExecuteRequestOnce(function ($request) use ($handle){
            $request->StreamHandle = $handle;
        });
    }


    /**
     * The height of the photo. Read-only.
     * @return integer
     */
    public function getHeight()
    {
        if (!$this->isPropertyAvailable("Height")) {
            return null;
        }
        return $this->getProperty("Height");
    }
    /**
     * The height of the photo. Read-only.
     * @var integer
     */
    public function setHeight($value)
    {
        $this->setProperty("Height", $value, true);
    }
    /**
     * The width of the photo. Read-only.
     * @return integer
     */
    public function getWidth()
    {
        if (!$this->isPropertyAvailable("Width")) {
            return null;
        }
        return $this->getProperty("Width");
    }
    /**
     * The width of the photo. Read-only.
     * @var integer
     */
    public function setWidth($value)
    {
        $this->setProperty("Width", $value, true);
    }
}