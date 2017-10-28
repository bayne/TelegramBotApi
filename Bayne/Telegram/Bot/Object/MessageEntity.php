<?php

namespace Bayne\Telegram\Bot\Object;

use Bayne\Telegram\Bot\Object;

class MessageEntity extends Object\AbstractObject
{
   /**
    * https://core.telegram.org/bots/api#messageentity
    *
    * Type of the entity. Can be mention (@username), hashtag, bot_command, url, email, bold (bold text), italic (italic text), code (monowidth string), pre (monowidth block), text_link (for clickable text URLs), text_mention (for users without usernames)
    *
    * @var string
    */
   protected $type;

   /**
    * https://core.telegram.org/bots/api#messageentity
    *
    * Offset in UTF-16 code units to the start of the entity
    *
    * @var int
    */
   protected $offset;

   /**
    * https://core.telegram.org/bots/api#messageentity
    *
    * Length of the entity in UTF-16 code units
    *
    * @var int
    */
   protected $length;

   /**
    * https://core.telegram.org/bots/api#messageentity
    *
    * Optional. For “text_link” only, url that will be opened after user taps on the text
    *
    * @var string
    */
   protected $url;

   /**
    * https://core.telegram.org/bots/api#messageentity
    *
    * Optional. For “text_mention” only, the mentioned user
    *
    * @var Object\User
    */
   protected $user;


   /**
    * @param string $type
    * @return MessageEntity
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
    * @param int $offset
    * @return MessageEntity
    */
   public function setOffset($offset)
   {
       $this->offset = $offset;
       return $this;
   }

   /**
    * @return int
    */
   public function getOffset()
   {
       return $this->offset;
   }

   /**
    * @param int $length
    * @return MessageEntity
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
    * @param string $url
    * @return MessageEntity
    */
   public function setUrl($url)
   {
       $this->url = $url;
       return $this;
   }

   /**
    * @return string
    */
   public function getUrl()
   {
       return $this->url;
   }

   /**
    * @param Object\User $user
    * @return MessageEntity
    */
   public function setUser(Object\User $user)
   {
       $this->user = $user;
       return $this;
   }

   /**
    * @return Object\User
    */
   public function getUser()
   {
       return $this->user;
   }

}