<?php

namespace Bayne\Telegram\Bot\Object;

use Bayne\Telegram\Bot\Object;

class UserProfilePhotos extends Object\AbstractObject
{
   /**
    * https://core.telegram.org/bots/api#userprofilephotos
    *
    * Total number of profile pictures the target user has
    *
    * @var int
    */
   protected $totalCount;

   /**
    * https://core.telegram.org/bots/api#userprofilephotos
    *
    * Requested profile pictures (in up to 4 sizes each)
    *
    * @var array[]
    */
   protected $photos;


   /**
    * @param int $totalCount
    * @return UserProfilePhotos
    */
   public function setTotalCount($totalCount)
   {
       $this->totalCount = $totalCount;
       return $this;
   }

   /**
    * @return int
    */
   public function getTotalCount()
   {
       return $this->totalCount;
   }

   /**
    * @param array[] $photos
    * @return UserProfilePhotos
    */
   public function setPhotos($photos)
   {
       $this->photos = $photos;
       return $this;
   }

   /**
    * @return array[]
    */
   public function getPhotos()
   {
       return $this->photos;
   }

}