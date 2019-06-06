<?php

namespace Bayne\Telegram\Bot\Type;

use Bayne\Telegram\Bot\Type;

class PassportFile extends Type\AbstractType
{
   /**
    * https://core.telegram.org/bots/api#passportfile
    *
    * Unique identifier for this file
    *
    * @var string
    */
   protected $fileId;

   /**
    * https://core.telegram.org/bots/api#passportfile
    *
    * File size
    *
    * @var int
    */
   protected $fileSize;

   /**
    * https://core.telegram.org/bots/api#passportfile
    *
    * Unix time when the file was uploaded
    *
    * @var int
    */
   protected $fileDate;


   /**
    * @param string $fileId
    * @return PassportFile
    */
   public function setFileId($fileId)
   {
       $this->fileId = $fileId;
       return $this;
   }

   /**
    * @return string
    */
   public function getFileId()
   {
       return $this->fileId;
   }

   /**
    * @param int $fileSize
    * @return PassportFile
    */
   public function setFileSize($fileSize)
   {
       $this->fileSize = $fileSize;
       return $this;
   }

   /**
    * @return int
    */
   public function getFileSize()
   {
       return $this->fileSize;
   }

   /**
    * @param int $fileDate
    * @return PassportFile
    */
   public function setFileDate($fileDate)
   {
       $this->fileDate = $fileDate;
       return $this;
   }

   /**
    * @return int
    */
   public function getFileDate()
   {
       return $this->fileDate;
   }

}