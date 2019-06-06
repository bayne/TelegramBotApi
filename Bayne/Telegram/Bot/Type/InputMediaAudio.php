<?php

namespace Bayne\Telegram\Bot\Type;

use Bayne\Telegram\Bot\Type;

class InputMediaAudio extends Type\AbstractType
{
   /**
    * https://core.telegram.org/bots/api#inputmediaaudio
    *
    * Type of the result, must be audio
    *
    * @var string
    */
   protected $type;

   /**
    * https://core.telegram.org/bots/api#inputmediaaudio
    *
    * File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://” to upload a new one using multipart/form-data under  name. More info on Sending Files »
    *
    * @var string
    */
   protected $media;

   /**
    * https://core.telegram.org/bots/api#inputmediaaudio
    *
    * Optional. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail‘s width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can’t be reused and can be only uploaded as a new file, so you can pass “attach://” if the thumbnail was uploaded using multipart/form-data under . More info on Sending Files »
    *
    * @var Type\InputFileInterface|string
    */
   protected $thumb;

   /**
    * https://core.telegram.org/bots/api#inputmediaaudio
    *
    * Optional. Caption of the audio to be sent, 0-1024 characters
    *
    * @var string
    */
   protected $caption;

   /**
    * https://core.telegram.org/bots/api#inputmediaaudio
    *
    * Optional. Send Markdown or HTML, if you want Telegram apps to show bold, italic, fixed-width text or inline URLs in the media caption.
    *
    * @var string
    */
   protected $parseMode;

   /**
    * https://core.telegram.org/bots/api#inputmediaaudio
    *
    * Optional. Duration of the audio in seconds
    *
    * @var int
    */
   protected $duration;

   /**
    * https://core.telegram.org/bots/api#inputmediaaudio
    *
    * Optional. Performer of the audio
    *
    * @var string
    */
   protected $performer;

   /**
    * https://core.telegram.org/bots/api#inputmediaaudio
    *
    * Optional. Title of the audio
    *
    * @var string
    */
   protected $title;


   /**
    * @param string $type
    * @return InputMediaAudio
    */
   public function setType($type)
   {
       $this->type = $type;
       return $this;
   }

   /**
    * @return string
    */
   public function getType()
   {
       return $this->type;
   }

   /**
    * @param string $media
    * @return InputMediaAudio
    */
   public function setMedia($media)
   {
       $this->media = $media;
       return $this;
   }

   /**
    * @return string
    */
   public function getMedia()
   {
       return $this->media;
   }

   /**
    * @param Type\InputFileInterface|string $thumb
    * @return InputMediaAudio
    */
   public function setThumb($thumb)
   {
       $this->thumb = $thumb;
       return $this;
   }

   /**
    * @return Type\InputFileInterface|string
    */
   public function getThumb()
   {
       return $this->thumb;
   }

   /**
    * @param string $caption
    * @return InputMediaAudio
    */
   public function setCaption($caption)
   {
       $this->caption = $caption;
       return $this;
   }

   /**
    * @return string
    */
   public function getCaption()
   {
       return $this->caption;
   }

   /**
    * @param string $parseMode
    * @return InputMediaAudio
    */
   public function setParseMode($parseMode)
   {
       $this->parseMode = $parseMode;
       return $this;
   }

   /**
    * @return string
    */
   public function getParseMode()
   {
       return $this->parseMode;
   }

   /**
    * @param int $duration
    * @return InputMediaAudio
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
    * @return InputMediaAudio
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
    * @return InputMediaAudio
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

}