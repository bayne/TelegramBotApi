<?php

namespace Bayne\Telegram\Bot\Type;

use Bayne\Telegram\Bot\Type;

class VideoNote extends Type\AbstractType
{
   /**
    * https://core.telegram.org/bots/api#videonote
    *
    * Unique identifier for this file
    *
    * @var string
    */
   protected $fileId;

   /**
    * https://core.telegram.org/bots/api#videonote
    *
    * Video width and height (diameter of the video message) as defined by sender
    *
    * @var int
    */
   protected $length;

   /**
    * https://core.telegram.org/bots/api#videonote
    *
    * Duration of the video in seconds as defined by sender
    *
    * @var int
    */
   protected $duration;

   /**
    * https://core.telegram.org/bots/api#videonote
    *
    * Optional. Video thumbnail
    *
    * @var Type\PhotoSize
    */
   protected $thumb;

   /**
    * https://core.telegram.org/bots/api#videonote
    *
    * Optional. File size
    *
    * @var int
    */
   protected $fileSize;


   /**
    * @param string $fileId
    * @return VideoNote
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
    * @param int $length
    * @return VideoNote
    */
   public function setLength($length)
   {
       $this->length = $length;
       return $this;
   }

   /**
    * @return int
    */
   public function getLength()
   {
       return $this->length;
   }

   /**
    * @param int $duration
    * @return VideoNote
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
    * @return VideoNote
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
    * @param int $fileSize
    * @return VideoNote
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