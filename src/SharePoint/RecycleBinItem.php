<?php

/**
 * Generated  2024-10-28T19:27:51+00:00 16.0.25409.12005
 */
namespace Office365\SharePoint;

use Office365\Runtime\ClientObject;
use Office365\Runtime\ResourcePath;
/**
 * Represents 
 * a Recycle 
 * Bin item in the Recycle Bin of a site (2) 
 * or a site 
 * collection.
 */
class RecycleBinItem extends ClientObject
{
    /**
     * Gets the email 
     * address of the user (1) who 
     * originally created the Recycle Bin item.
     * @return string
     */
    public function getAuthorEmail()
    {
        if (!$this->isPropertyAvailable("AuthorEmail")) {
            return null;
        }
        return $this->getProperty("AuthorEmail");
    }
    /**
     * Gets the email 
     * address of the user (1) who 
     * originally created the Recycle Bin item.
     * @var string
     */
    public function setAuthorEmail($value)
    {
        $this->setProperty("AuthorEmail", $value, true);
    }
    /**
     * Gets the user 
     * display name of the user (1) who 
     * originally created the Recycle Bin item.It MUST 
     * NOT be NULL. 
     * @return string
     */
    public function getAuthorName()
    {
        if (!$this->isPropertyAvailable("AuthorName")) {
            return null;
        }
        return $this->getProperty("AuthorName");
    }
    /**
     * Gets the user 
     * display name of the user (1) who 
     * originally created the Recycle Bin item.It MUST 
     * NOT be NULL. 
     * @var string
     */
    public function setAuthorName($value)
    {
        $this->setProperty("AuthorName", $value, true);
    }
    /**
     * Gets the email 
     * address of the user (1) who deleted 
     * the Recycle 
     * Bin item.
     * @return string
     */
    public function getDeletedByEmail()
    {
        if (!$this->isPropertyAvailable("DeletedByEmail")) {
            return null;
        }
        return $this->getProperty("DeletedByEmail");
    }
    /**
     * Gets the email 
     * address of the user (1) who deleted 
     * the Recycle 
     * Bin item.
     * @var string
     */
    public function setDeletedByEmail($value)
    {
        $this->setProperty("DeletedByEmail", $value, true);
    }
    /**
     * Gets the user 
     * display name of the user (1) who deleted 
     * the Recycle 
     * Bin item.It MUST 
     * NOT be NULL. 
     * @return string
     */
    public function getDeletedByName()
    {
        return $this->getProperty("DeletedByName");
    }
    /**
     * Gets the user 
     * display name of the user (1) who deleted 
     * the Recycle 
     * Bin item.It MUST 
     * NOT be NULL. 
     * @var string
     */
    public function setDeletedByName($value)
    {
        $this->setProperty("DeletedByName", $value, true);
    }
    /**
     * Specifies 
     * when the Recycle Bin item was 
     * moved to the Recycle Bin.
     * @return string
     */
    public function getDeletedDate()
    {
        return $this->getProperty("DeletedDate");
    }
    /**
     * Specifies 
     * when the Recycle Bin item was 
     * moved to the Recycle Bin.
     * @var string
     */
    public function setDeletedDate($value)
    {
        $this->setProperty("DeletedDate", $value, true);
    }
    /**
     * Specifies 
     * when, in the default time zone for the 
     * current site (2), the Recycle 
     * Bin item was moved to the Recycle Bin.
     * @return string
     */
    public function getDeletedDateLocalFormatted()
    {
        if (!$this->isPropertyAvailable("DeletedDateLocalFormatted")) {
            return null;
        }
        return $this->getProperty("DeletedDateLocalFormatted");
    }
    /**
     * Specifies 
     * when, in the default time zone for the 
     * current site (2), the Recycle 
     * Bin item was moved to the Recycle Bin.
     * @var string
     */
    public function setDeletedDateLocalFormatted($value)
    {
        $this->setProperty("DeletedDateLocalFormatted", $value, true);
    }
    /**
     * Specifies 
     * the site-relative 
     * URL of the list or folder 
     * that originally contained the Recycle Bin item.It MUST 
     * NOT be NULL. It MUST be a URL of relative form. Its length MUST be equal to or 
     * less than 256. 
     * @return string
     */
    public function getDirName()
    {
        return $this->getProperty("DirName");
    }
    /**
     * Specifies 
     * the site-relative 
     * URL of the list or folder 
     * that originally contained the Recycle Bin item.It MUST 
     * NOT be NULL. It MUST be a URL of relative form. Its length MUST be equal to or 
     * less than 256. 
     * @var string
     */
    public function setDirName($value)
    {
        $this->setProperty("DirName", $value, true);
    }
    /**
     * Specifies 
     * the identifier of the Recycle Bin item.It MUST 
     * NOT be an empty GUID. 
     * @return string
     */
    public function getId()
    {
        return $this->getProperty("Id");
    }
    /**
     * Specifies 
     * the identifier of the Recycle Bin item.It MUST 
     * NOT be an empty GUID. 
     * @var string
     */
    public function setId($value)
    {
        $this->setProperty("Id", $value, true);
    }
    /**
     * Specifies 
     * the Recycle 
     * Bin stage of the Recycle Bin item.It MUST 
     * NOT be None.
     * @return integer
     */
    public function getItemState()
    {
        return $this->getProperty("ItemState");
    }
    /**
     * Specifies 
     * the Recycle 
     * Bin stage of the Recycle Bin item.It MUST 
     * NOT be None.
     * @var integer
     */
    public function setItemState($value)
    {
        $this->setProperty("ItemState", $value, true);
    }
    /**
     * Specifies 
     * the type of the Recycle Bin item. It MUST 
     * NOT be None.
     * @return integer
     */
    public function getItemType()
    {
        return $this->getProperty("ItemType");
    }
    /**
     * Specifies 
     * the type of the Recycle Bin item. It MUST 
     * NOT be None.
     * @var integer
     */
    public function setItemType($value)
    {
        $this->setProperty("ItemType", $value, true);
    }
    /**
     * Specifies 
     * the leaf 
     * name of the Recycle Bin item.It MUST 
     * NOT be NULL. Its length MUST be equal to or less than 260. It MUST NOT contain 
     * the following characters: \x00-\x1F, \x22, \x23, \x25, \x26, \x2A, \x3A, \x3C, 
     * x3E, \x3F, \x5C and \x7B-\x9F. 
     * @return string
     */
    public function getLeafName()
    {
        if (!$this->isPropertyAvailable("LeafName")) {
            return null;
        }
        return $this->getProperty("LeafName");
    }
    /**
     * Specifies 
     * the leaf 
     * name of the Recycle Bin item.It MUST 
     * NOT be NULL. Its length MUST be equal to or less than 260. It MUST NOT contain 
     * the following characters: \x00-\x1F, \x22, \x23, \x25, \x26, \x2A, \x3A, \x3C, 
     * x3E, \x3F, \x5C and \x7B-\x9F. 
     * @var string
     */
    public function setLeafName($value)
    {
        $this->setProperty("LeafName", $value, true);
    }
    /**
     * Specifies 
     * the size of the Recycle Bin item in 
     * bytes.Its value 
     * MUST be equal to or greater than 0. 
     * @return integer
     */
    public function getSize()
    {
        return $this->getProperty("Size");
    }
    /**
     * Specifies 
     * the size of the Recycle Bin item in 
     * bytes.Its value 
     * MUST be equal to or greater than 0. 
     * @var integer
     */
    public function setSize($value)
    {
        $this->setProperty("Size", $value, true);
    }
    /**
     * Specifies 
     * the title of the Recycle Bin item.It MUST 
     * NOT be NULL. Its length MUST be equal to or less than 255. 
     * @return string
     */
    public function getTitle()
    {
        return $this->getProperty("Title");
    }
    /**
     * Specifies 
     * the title of the Recycle Bin item.It MUST 
     * NOT be NULL. Its length MUST be equal to or less than 255. 
     * @var string
     */
    public function setTitle($value)
    {
        $this->setProperty("Title", $value, true);
    }
    /**
     * Gets the email 
     * address of the user (1) who 
     * originally created the Recycle Bin item.
     * @return User
     */
    public function getAuthor()
    {
        return $this->getProperty("Author", new User($this->getContext(), new ResourcePath("Author", $this->getResourcePath())));
    }
    /**
     * Gets the email 
     * address of the user (1) who deleted 
     * the Recycle 
     * Bin item.
     * @return User
     */
    public function getDeletedBy()
    {
        return $this->getProperty("DeletedBy", new User($this->getContext(), new ResourcePath("DeletedBy", $this->getResourcePath())));
    }
    /**
     * Returns 
     * the site relative path of the list or folder that originally contained the 
     * Recycle Bin item.It MUST 
     * NOT be NULL. 
     * @return SPResourcePath
     */
    public function getDirNamePath()
    {
        return $this->getProperty("DirNamePath", new SPResourcePath());
    }
    /**
     * Returns 
     * the site relative path of the list or folder that originally contained the 
     * Recycle Bin item.It MUST 
     * NOT be NULL. 
     * @var SPResourcePath
     */
    public function setDirNamePath($value)
    {
        $this->setProperty("DirNamePath", $value, true);
    }
    /**
     * Returns 
     * the leaf name of the Recycle Bin item.It MUST 
     * NOT be NULL. It MUST NOT contain the following characters: 
     * (["#%\*:<>?\\|\x7F]). 
     * @return SPResourcePath
     */
    public function getLeafNamePath()
    {
        return $this->getProperty("LeafNamePath", new SPResourcePath());
    }
    /**
     * Returns 
     * the leaf name of the Recycle Bin item.It MUST 
     * NOT be NULL. It MUST NOT contain the following characters: 
     * (["#%\*:<>?\\|\x7F]). 
     * @var SPResourcePath
     */
    public function setLeafNamePath($value)
    {
        $this->setProperty("LeafNamePath", $value, true);
    }
    /**
     * @return string
     */
    public function getUniqueId()
    {
        return $this->getProperty("UniqueId");
    }
    /**
     * @var string
     */
    public function setUniqueId($value)
    {
        return $this->setProperty("UniqueId", $value, true);
    }
}