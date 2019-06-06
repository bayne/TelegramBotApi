<?php

namespace Bayne\Telegram\Bot\Type;

use Bayne\Telegram\Bot\Type;

class Video extends Type\AbstractType
{
   /**
    * https://core.telegram.org/bots/api#video
    *
    * Unique identifier for this file
    *
    * @var string
    */
   protected $fileId;

   /**
    * https://core.telegram.org/bots/api#video
    *
    * Video width as defined by sender
    *
    * @var int
    */
   protected $width;

   /**
    * https://core.telegram.org/bots/api#video
    *
    * Video height as defined by sender
    *
    * @var int
    */
   protected $height;

   /**
    * https://core.telegram.org/bots/api#video
    *
    * Duration of the video in seconds as defined by sender
    *
    * @var int
    */
   protected $duration;

   /**
    * https://core.telegram.org/bots/api#video
    *
    * Optional. Video thumbnail
    *
    * @var Type\PhotoSize
    */
   protected $thumb;

   /**
    * https://core.telegram.org/bots/api#video
    *
    * Optional. Mime type of a file as defined by sender
    *
    * @var string
    */
   protected $mimeType;

   /**
    * https://core.telegram.org/bots/api#video
    *
    * Optional. File size
    *
    * @var int
    */
   protected $fileSize;


   /**
    * @param string $fileId
    * @return Video
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
    * @return Video
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
    * @return Video
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
    * @return Video
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
    * @return Video
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
    * @param string $mimeType
    * @return Video
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
    * @return Video
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