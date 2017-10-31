<?php

namespace Bayne\Telegram\Bot\Object;

use Bayne\Telegram\Bot\Object;

class WebhookInfo extends Object\AbstractObject
{
   /**
    * https://core.telegram.org/bots/api#webhookinfo
    *
    * Webhook URL, may be empty if webhook is not set up
    *
    * @var string
    */
   protected $url;

   /**
    * https://core.telegram.org/bots/api#webhookinfo
    *
    * True, if a custom certificate was provided for webhook certificate checks
    *
    * @var bool
    */
   protected $hasCustomCertificate;

   /**
    * https://core.telegram.org/bots/api#webhookinfo
    *
    * Number of updates awaiting delivery
    *
    * @var int
    */
   protected $pendingUpdateCount;

   /**
    * https://core.telegram.org/bots/api#webhookinfo
    *
    * Optional. Unix time for the most recent error that happened when trying to deliver an update via webhook
    *
    * @var int
    */
   protected $lastErrorDate;

   /**
    * https://core.telegram.org/bots/api#webhookinfo
    *
    * Optional. Error message in human-readable format for the most recent error that happened when trying to deliver an update via webhook
    *
    * @var string
    */
   protected $lastErrorMessage;

   /**
    * https://core.telegram.org/bots/api#webhookinfo
    *
    * Optional. Maximum allowed number of simultaneous HTTPS connections to the webhook for update delivery
    *
    * @var int
    */
   protected $maxConnections;

   /**
    * https://core.telegram.org/bots/api#webhookinfo
    *
    * Optional. A list of update types the bot is subscribed to. Defaults to all update types
    *
    * @var string[]|array
    */
   protected $allowedUpdates;


   /**
    * @param string $url
    * @return WebhookInfo
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
    * @param bool $hasCustomCertificate
    * @return WebhookInfo
    */
   public function setHasCustomCertificate($hasCustomCertificate)
   {
       $this->hasCustomCertificate = $hasCustomCertificate;
       return $this;
   }

   /**
    * @return bool
    */
   public function getHasCustomCertificate()
   {
       return $this->hasCustomCertificate;
   }

   /**
    * @param int $pendingUpdateCount
    * @return WebhookInfo
    */
   public function setPendingUpdateCount($pendingUpdateCount)
   {
       $this->pendingUpdateCount = $pendingUpdateCount;
       return $this;
   }

   /**
    * @return int
    */
   public function getPendingUpdateCount()
   {
       return $this->pendingUpdateCount;
   }

   /**
    * @param int $lastErrorDate
    * @return WebhookInfo
    */
   public function setLastErrorDate($lastErrorDate)
   {
       $this->lastErrorDate = $lastErrorDate;
       return $this;
   }

   /**
    * @return int
    */
   public function getLastErrorDate()
   {
       return $this->lastErrorDate;
   }

   /**
    * @param string $lastErrorMessage
    * @return WebhookInfo
    */
   public function setLastErrorMessage($lastErrorMessage)
   {
       $this->lastErrorMessage = $lastErrorMessage;
       return $this;
   }

   /**
    * @return string
    */
   public function getLastErrorMessage()
   {
       return $this->lastErrorMessage;
   }

   /**
    * @param int $maxConnections
    * @return WebhookInfo
    */
   public function setMaxConnections($maxConnections)
   {
       $this->maxConnections = $maxConnections;
       return $this;
   }

   /**
    * @return int
    */
   public function getMaxConnections()
   {
       return $this->maxConnections;
   }

   /**
    * @param string[]|array $allowedUpdates
    * @return WebhookInfo
    */
   public function setAllowedUpdates($allowedUpdates)
   {
       $this->allowedUpdates = $allowedUpdates;
       return $this;
   }

   /**
    * @return string[]|array
    */
   public function getAllowedUpdates()
   {
       return $this->allowedUpdates;
   }

}