<?php

namespace Bayne\Telegram\Bot\Type;

use Bayne\Telegram\Bot\Type;

class Sticker extends Type\AbstractType
{
   /**
    * https://core.telegram.org/bots/api#sticker
    *
    * Unique identifier for this file
    *
    * @var string
    */
   protected $fileId;

   /**
    * https://core.telegram.org/bots/api#sticker
    *
    * Sticker width
    *
    * @var int
    */
   protected $width;

   /**
    * https://core.telegram.org/bots/api#sticker
    *
    * Sticker height
    *
    * @var int
    */
   protected $height;

   /**
    * https://core.telegram.org/bots/api#sticker
    *
    * Optional. Sticker thumbnail in the .webp or .jpg format
    *
    * @var Type\PhotoSize
    */
   protected $thumb;

   /**
    * https://core.telegram.org/bots/api#sticker
    *
    * Optional. Emoji associated with the sticker
    *
    * @var string
    */
   protected $emoji;

   /**
    * https://core.telegram.org/bots/api#sticker
    *
    * Optional. Name of the sticker set to which the sticker belongs
    *
    * @var string
    */
   protected $setName;

   /**
    * https://core.telegram.org/bots/api#sticker
    *
    * Optional. For mask stickers, the position where the mask should be placed
    *
    * @var Type\MaskPosition
    */
   protected $maskPosition;

   /**
    * https://core.telegram.org/bots/api#sticker
    *
    * Optional. File size
    *
    * @var int
    */
   protected $fileSize;


   /**
    * @param string $fileId
    * @return Sticker
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
    * @return Sticker
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
    * @return Sticker
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
    * @param Type\PhotoSize $thumb
    * @return Sticker
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
    * @param string $emoji
    * @return Sticker
    */
   public function setEmoji($emoji)
   {
       $this->emoji = $emoji;
       return $this;
   }

   /**
    * @return string
    */
   public function getEmoji()
   {
       return $this->emoji;
   }

   /**
    * @param string $setName
    * @return Sticker
    */
   public function setSetName($setName)
   {
       $this->setName = $setName;
       return $this;
   }

   /**
    * @return string
    */
   public function getSetName()
   {
       return $this->setName;
   }

   /**
    * @param Type\MaskPosition $maskPosition
    * @return Sticker
    */
   public function setMaskPosition(Type\MaskPosition $maskPosition)
   {
       $this->maskPosition = $maskPosition;
       return $this;
   }

   /**
    * @return Type\MaskPosition
    */
   public function getMaskPosition()
   {
       return $this->maskPosition;
   }

   /**
    * @param int $fileSize
    * @return Sticker
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