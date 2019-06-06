<?php

namespace Bayne\Telegram\Bot\Type;

use Bayne\Telegram\Bot\Type;

class InlineQueryResultContact extends Type\AbstractInlineQueryResult
{
   /**
    * https://core.telegram.org/bots/api#inlinequeryresultcontact
    *
    * Type of the result, must be contact
    *
    * @var string
    */
   protected $type;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultcontact
    *
    * Unique identifier for this result, 1-64 Bytes
    *
    * @var string
    */
   protected $id;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultcontact
    *
    * Contact&#039;s phone number
    *
    * @var string
    */
   protected $phoneNumber;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultcontact
    *
    * Contact&#039;s first name
    *
    * @var string
    */
   protected $firstName;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultcontact
    *
    * Optional. Contact&#039;s last name
    *
    * @var string
    */
   protected $lastName;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultcontact
    *
    * Optional. Additional data about the contact in the form of a vCard, 0-2048 bytes
    *
    * @var string
    */
   protected $vcard;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultcontact
    *
    * Optional. Inline keyboard attached to the message
    *
    * @var Type\InlineKeyboardMarkup
    */
   protected $replyMarkup;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultcontact
    *
    * Optional. Content of the message to be sent instead of the contact
    *
    * @var Type\AbstractInputMessageContent
    */
   protected $inputMessageContent;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultcontact
    *
    * Optional. Url of the thumbnail for the result
    *
    * @var string
    */
   protected $thumbUrl;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultcontact
    *
    * Optional. Thumbnail width
    *
    * @var int
    */
   protected $thumbWidth;

   /**
    * https://core.telegram.org/bots/api#inlinequeryresultcontact
    *
    * Optional. Thumbnail height
    *
    * @var int
    */
   protected $thumbHeight;


   /**
    * @param string $type
    * @return InlineQueryResultContact
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
    * @param string $id
    * @return InlineQueryResultContact
    */
   public function setId($id)
   {
       $this->id = $id;
       return $this;
   }

   /**
    * @return string
    */
   public function getId()
   {
       return $this->id;
   }

   /**
    * @param string $phoneNumber
    * @return InlineQueryResultContact
    */
   public function setPhoneNumber($phoneNumber)
   {
       $this->phoneNumber = $phoneNumber;
       return $this;
   }

   /**
    * @return string
    */
   public function getPhoneNumber()
   {
       return $this->phoneNumber;
   }

   /**
    * @param string $firstName
    * @return InlineQueryResultContact
    */
   public function setFirstName($firstName)
   {
       $this->firstName = $firstName;
       return $this;
   }

   /**
    * @return string
    */
   public function getFirstName()
   {
       return $this->firstName;
   }

   /**
    * @param string $lastName
    * @return InlineQueryResultContact
    */
   public function setLastName($lastName)
   {
       $this->lastName = $lastName;
       return $this;
   }

   /**
    * @return string
    */
   public function getLastName()
   {
       return $this->lastName;
   }

   /**
    * @param string $vcard
    * @return InlineQueryResultContact
    */
   public function setVcard($vcard)
   {
       $this->vcard = $vcard;
       return $this;
   }

   /**
    * @return string
    */
   public function getVcard()
   {
       return $this->vcard;
   }

   /**
    * @param Type\InlineKeyboardMarkup $replyMarkup
    * @return InlineQueryResultContact
    */
   public function setReplyMarkup(Type\InlineKeyboardMarkup $replyMarkup)
   {
       $this->replyMarkup = $replyMarkup;
       return $this;
   }

   /**
    * @return Type\InlineKeyboardMarkup
    */
   public function getReplyMarkup()
   {
       return $this->replyMarkup;
   }

   /**
    * @param Type\AbstractInputMessageContent $inputMessageContent
    * @return InlineQueryResultContact
    */
   public function setInputMessageContent(Type\AbstractInputMessageContent $inputMessageContent)
   {
       $this->inputMessageContent = $inputMessageContent;
       return $this;
   }

   /**
    * @return Type\AbstractInputMessageContent
    */
   public function getInputMessageContent()
   {
       return $this->inputMessageContent;
   }

   /**
    * @param string $thumbUrl
    * @return InlineQueryResultContact
    */
   public function setThumbUrl($thumbUrl)
   {
       $this->thumbUrl = $thumbUrl;
       return $this;
   }

   /**
    * @return string
    */
   public function getThumbUrl()
   {
       return $this->thumbUrl;
   }

   /**
    * @param int $thumbWidth
    * @return InlineQueryResultContact
    */
   public function setThumbWidth($thumbWidth)
   {
       $this->thumbWidth = $thumbWidth;
       return $this;
   }

   /**
    * @return int
    */
   public function getThumbWidth()
   {
       return $this->thumbWidth;
   }

   /**
    * @param int $thumbHeight
    * @return InlineQueryResultContact
    */
   public function setThumbHeight($thumbHeight)
   {
       $this->thumbHeight = $thumbHeight;
       return $this;
   }

   /**
    * @return int
    */
   public function getThumbHeight()
   {
       return $this->thumbHeight;
   }

}