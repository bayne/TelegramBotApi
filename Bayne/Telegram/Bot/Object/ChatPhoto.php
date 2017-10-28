<?php

namespace Bayne\Telegram\Bot\Object;

use Bayne\Telegram\Bot\Object;

class ChatPhoto extends Object\AbstractObject
{
   /**
    * https://core.telegram.org/bots/api#chatphoto
    *
    * Unique file identifier of small (160x160) chat photo. This file_id can be used only for photo download.
    *
    * @var string
    */
   protected $smallFileId;

   /**
    * https://core.telegram.org/bots/api#chatphoto
    *
    * Unique file identifier of big (640x640) chat photo. This file_id can be used only for photo download.
    *
    * @var string
    */
   protected $bigFileId;


   /**
    * @param string $smallFileId
    * @return ChatPhoto
    */
   public function setSmallFileId($smallFileId)
   {
       $this->smallFileId = $smallFileId;
       return $this;
   }

   /**
    * @return string
    */
   public function getSmallFileId()
   {
       return $this->smallFileId;
   }

   /**
    * @param string $bigFileId
    * @return ChatPhoto
    */
   public function setBigFileId($bigFileId)
   {
       $this->bigFileId = $bigFileId;
       return $this;
   }

   /**
    * @return string
    */
   public function getBigFileId()
   {
       return $this->bigFileId;
   }

}