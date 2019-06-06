<?php

namespace Bayne\Telegram\Bot\Type;

use Bayne\Telegram\Bot\Type;

class File extends Type\AbstractType
{
   /**
    * https://core.telegram.org/bots/api#file
    *
    * Unique identifier for this file
    *
    * @var string
    */
   protected $fileId;

   /**
    * https://core.telegram.org/bots/api#file
    *
    * Optional. File size, if known
    *
    * @var int
    */
   protected $fileSize;

   /**
    * https://core.telegram.org/bots/api#file
    *
    * Optional. File path. Use https://api.telegram.org/file/bot/ to get the file.
    *
    * @var string
    */
   protected $filePath;


   /**
    * @param string $fileId
    * @return File
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
    * @return File
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
    * @param string $filePath
    * @return File
    */
   public function setFilePath($filePath)
   {
       $this->filePath = $filePath;
       return $this;
   }

   /**
    * @return string
    */
   public function getFilePath()
   {
       return $this->filePath;
   }

}