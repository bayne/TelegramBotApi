<?php

namespace Bayne\Telegram\Bot\Type;

use Bayne\Telegram\Bot\Type;

class LoginUrl extends Type\AbstractType
{
   /**
    * https://core.telegram.org/bots/api#loginurl
    *
    * An HTTP URL to be opened with user authorization data added to the query string when the button is pressed. If the user refuses to provide authorization data, the original URL without information about the user will be opened. The data added is the same as described in Receiving authorization data.NOTE: You must always check the hash of the received data to verify the authentication and the integrity of the data as described in Checking authorization.
    *
    * @var string
    */
   protected $url;

   /**
    * https://core.telegram.org/bots/api#loginurl
    *
    * Optional. New text of the button in forwarded messages.
    *
    * @var string
    */
   protected $forwardText;

   /**
    * https://core.telegram.org/bots/api#loginurl
    *
    * Optional. Username of a bot, which will be used for user authorization. See Setting up a bot for more details. If not specified, the current bot&#039;s username will be assumed. The url&#039;s domain must be the same as the domain linked with the bot. See Linking your domain to the bot for more details.
    *
    * @var string
    */
   protected $botUsername;

   /**
    * https://core.telegram.org/bots/api#loginurl
    *
    * Optional. Pass True to request the permission for your bot to send messages to the user.
    *
    * @var bool
    */
   protected $requestWriteAccess;


   /**
    * @param string $url
    * @return LoginUrl
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
    * @param string $forwardText
    * @return LoginUrl
    */
   public function setForwardText($forwardText)
   {
       $this->forwardText = $forwardText;
       return $this;
   }

   /**
    * @return string
    */
   public function getForwardText()
   {
       return $this->forwardText;
   }

   /**
    * @param string $botUsername
    * @return LoginUrl
    */
   public function setBotUsername($botUsername)
   {
       $this->botUsername = $botUsername;
       return $this;
   }

   /**
    * @return string
    */
   public function getBotUsername()
   {
       return $this->botUsername;
   }

   /**
    * @param bool $requestWriteAccess
    * @return LoginUrl
    */
   public function setRequestWriteAccess($requestWriteAccess)
   {
       $this->requestWriteAccess = $requestWriteAccess;
       return $this;
   }

   /**
    * @return bool
    */
   public function getRequestWriteAccess()
   {
       return $this->requestWriteAccess;
   }

}