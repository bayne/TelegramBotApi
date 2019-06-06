<?php

namespace Bayne\Telegram\Bot\Type;

use Bayne\Telegram\Bot\Type;

class InputMediaPhoto extends Type\AbstractType
{
   /**
    * https://core.telegram.org/bots/api#inputmediaphoto
    *
    * Type of the result, must be photo
    *
    * @var string
    */
   protected $type;

   /**
    * https://core.telegram.org/bots/api#inputmediaphoto
    *
    * File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://” to upload a new one using multipart/form-data under  name. More info on Sending Files »
    *
    * @var string
    */
   protected $media;

   /**
    * https://core.telegram.org/bots/api#inputmediaphoto
    *
    * Optional. Caption of the photo to be sent, 0-1024 characters
    *
    * @var string
    */
   protected $caption;

   /**
    * https://core.telegram.org/bots/api#inputmediaphoto
    *
    * Optional. Send Markdown or HTML, if you want Telegram apps to show bold, italic, fixed-width text or inline URLs in the media caption.
    *
    * @var string
    */
   protected $parseMode;


   /**
    * @param string $type
    * @return InputMediaPhoto
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
    * @return InputMediaPhoto
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
    * @param string $caption
    * @return InputMediaPhoto
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
    * @return InputMediaPhoto
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

}