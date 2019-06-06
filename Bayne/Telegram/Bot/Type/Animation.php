<?php

namespace Bayne\Telegram\Bot\Type;

use Bayne\Telegram\Bot\Type;

class Animation extends Type\AbstractType
{
   /**
    * https://core.telegram.org/bots/api#animation
    *
    * Unique file identifier
    *
    * @var string
    */
   protected $fileId;

   /**
    * https://core.telegram.org/bots/api#animation
    *
    * Video width as defined by sender
    *
    * @var int
    */
   protected $width;

   /**
    * https://core.telegram.org/bots/api#animation
    *
    * Video height as defined by sender
    *
    * @var int
    */
   protected $height;

   /**
    * https://core.telegram.org/bots/api#animation
    *
    * Duration of the video in seconds as defined by sender
    *
    * @var int
    */
   protected $duration;

   /**
    * https://core.telegram.org/bots/api#animation
    *
    * Optional. Animation thumbnail as defined by sender
    *
    * @var Type\PhotoSize
    */
   protected $thumb;

   /**
    * https://core.telegram.org/bots/api#animation
    *
    * Optional. Original animation filename as defined by sender
    *
    * @var string
    */
   protected $fileName;

   /**
    * https://core.telegram.org/bots/api#animation
    *
    * Optional. MIME type of the file as defined by sender
    *
    * @var string
    */
   protected $mimeType;

   /**
    * https://core.telegram.org/bots/api#animation
    *
    * Optional. File size
    *
    * @var int
    */
   protected $fileSize;


   /**
    * @param string $fileId
    * @return Animation
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
    * @param int $width
    * @return Animation
    */
   public function setWidth($width)
   {
       $this->width = $width;
       return $this;
   }

   /**
    * @return int
    */
   public function getWidth()
   {
       return $this->width;
   }

   /**
    * @param int $height
    * @return Animation
    */
   public function setHeight($height)
   {
       $this->height = $height;
       return $this;
   }

   /**
    * @return int
    */
   public function getHeight()
   {
       return $this->height;
   }

   /**
    * @param int $duration
    * @return Animation
    */
   public function setDuration($duration)
   {
       $this->duration = $duration;
       return $this;
   }

   /**
    * @return int
    */
   public function getDuration()
   {
       return $this->duration;
   }

   /**
    * @param Type\PhotoSize $thumb
    * @return Animation
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
    * @return Animation
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
    * @return Animation
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
    * @return Animation
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