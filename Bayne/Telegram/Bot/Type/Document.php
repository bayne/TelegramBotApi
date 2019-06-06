<?php

namespace Bayne\Telegram\Bot\Type;

use Bayne\Telegram\Bot\Type;

class Document extends Type\AbstractType
{
   /**
    * https://core.telegram.org/bots/api#document
    *
    * Unique file identifier
    *
    * @var string
    */
   protected $fileId;

   /**
    * https://core.telegram.org/bots/api#document
    *
    * Optional. Document thumbnail as defined by sender
    *
    * @var Type\PhotoSize
    */
   protected $thumb;

   /**
    * https://core.telegram.org/bots/api#document
    *
    * Optional. Original filename as defined by sender
    *
    * @var string
    */
   protected $fileName;

   /**
    * https://core.telegram.org/bots/api#document
    *
    * Optional. MIME type of the file as defined by sender
    *
    * @var string
    */
   protected $mimeType;

   /**
    * https://core.telegram.org/bots/api#document
    *
    * Optional. File size
    *
    * @var int
    */
   protected $fileSize;


   /**
    * @param string $fileId
    * @return Document
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
    * @param Type\PhotoSize $thumb
    * @return Document
    */
   public function setThumb(Type\PhotoSize $thumb)
   {
       $this->thumb = $thumb;
       return $this;
   }

   /**
    * @return Type\PhotoSize
    */
   public function getThumb()
   {
       return $this->thumb;
   }

   /**
    * @param string $fileName
    * @return Document
    */
   public function setFileName($fileName)
   {
       $this->fileName = $fileName;
       return $this;
   }

   /**
    * @return string
    */
   public function getFileName()
   {
       return $this->fileName;
   }

   /**
    * @param string $mimeType
    * @return Document
    */
   public function setMimeType($mimeType)
   {
       $this->mimeType = $mimeType;
       return $this;
   }

   /**
    * @return string
    */
   public function getMimeType()
   {
       return $this->mimeType;
   }

   /**
    * @param int $fileSize
    * @return Document
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

}