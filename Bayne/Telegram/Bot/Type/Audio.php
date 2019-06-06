<?php

namespace Bayne\Telegram\Bot\Type;

use Bayne\Telegram\Bot\Type;

class Audio extends Type\AbstractType
{
   /**
    * https://core.telegram.org/bots/api#audio
    *
    * Unique identifier for this file
    *
    * @var string
    */
   protected $fileId;

   /**
    * https://core.telegram.org/bots/api#audio
    *
    * Duration of the audio in seconds as defined by sender
    *
    * @var int
    */
   protected $duration;

   /**
    * https://core.telegram.org/bots/api#audio
    *
    * Optional. Performer of the audio as defined by sender or by audio tags
    *
    * @var string
    */
   protected $performer;

   /**
    * https://core.telegram.org/bots/api#audio
    *
    * Optional. Title of the audio as defined by sender or by audio tags
    *
    * @var string
    */
   protected $title;

   /**
    * https://core.telegram.org/bots/api#audio
    *
    * Optional. MIME type of the file as defined by sender
    *
    * @var string
    */
   protected $mimeType;

   /**
    * https://core.telegram.org/bots/api#audio
    *
    * Optional. File size
    *
    * @var int
    */
   protected $fileSize;

   /**
    * https://core.telegram.org/bots/api#audio
    *
    * Optional. Thumbnail of the album cover to which the music file belongs
    *
    * @var Type\PhotoSize
    */
   protected $thumb;


   /**
    * @param string $fileId
    * @return Audio
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
    * @param int $duration
    * @return Audio
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
    * @param string $performer
    * @return Audio
    */
   public function setPerformer($performer)
   {
       $this->performer = $performer;
       return $this;
   }

   /**
    * @return string
    */
   public function getPerformer()
   {
       return $this->performer;
   }

   /**
    * @param string $title
    * @return Audio
    */
   public function setTitle($title)
   {
       $this->title = $title;
       return $this;
   }

   /**
    * @return string
    */
   public function getTitle()
   {
       return $this->title;
   }

   /**
    * @param string $mimeType
    * @return Audio
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
    * @return Audio
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
    * @param Type\PhotoSize $thumb
    * @return Audio
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

}