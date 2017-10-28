<?php

namespace Bayne\Telegram\Bot\Object;

use Bayne\Telegram\Bot\Object;

class StickerSet extends Object\AbstractObject
{
   /**
    * https://core.telegram.org/bots/api#stickerset
    *
    * Sticker set name
    *
    * @var string
    */
   protected $name;

   /**
    * https://core.telegram.org/bots/api#stickerset
    *
    * Sticker set title
    *
    * @var string
    */
   protected $title;

   /**
    * https://core.telegram.org/bots/api#stickerset
    *
    * True, if the sticker set contains masks
    *
    * @var bool
    */
   protected $containsMasks;

   /**
    * https://core.telegram.org/bots/api#stickerset
    *
    * List of all set stickers
    *
    * @var Object\Sticker[]
    */
   protected $stickers;


   /**
    * @param string $name
    * @return StickerSet
    */
   public function setName($name)
   {
       $this->name = $name;
       return $this;
   }

   /**
    * @return string
    */
   public function getName()
   {
       return $this->name;
   }

   /**
    * @param string $title
    * @return StickerSet
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
    * @param bool $containsMasks
    * @return StickerSet
    */
   public function setContainsMasks($containsMasks)
   {
       $this->containsMasks = $containsMasks;
       return $this;
   }

   /**
    * @return bool
    */
   public function getContainsMasks()
   {
       return $this->containsMasks;
   }

   /**
    * @param Object\Sticker[] $stickers
    * @return StickerSet
    */
   public function setStickers($stickers)
   {
       $this->stickers = $stickers;
       return $this;
   }

   /**
    * @return Object\Sticker[]
    */
   public function getStickers()
   {
       return $this->stickers;
   }

}