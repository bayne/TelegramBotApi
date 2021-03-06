<?php

namespace Bayne\Telegram\Bot\Type;

use Bayne\Telegram\Bot\Type;

class UserProfilePhotos extends Type\AbstractType
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
    * @var array[]|array
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
    * @param array[]|array $photos
    * @return UserProfilePhotos
    */
   public function setPhotos($photos)
   {
       $this->photos = $photos;
       return $this;
   }

   /**
    * @return array[]|array
    */
   public function getPhotos()
   {
       return $this->photos;
   }

}