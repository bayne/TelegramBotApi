<?php

namespace Bayne\Telegram\Bot\Type;

use Bayne\Telegram\Bot\Type;

class EncryptedPassportElement extends Type\AbstractType
{
   /**
    * https://core.telegram.org/bots/api#encryptedpassportelement
    *
    * Element type. One of “personal_details”, “passport”, “driver_license”, “identity_card”, “internal_passport”, “address”, “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration”, “temporary_registration”, “phone_number”, “email”.
    *
    * @var string
    */
   protected $type;

   /**
    * https://core.telegram.org/bots/api#encryptedpassportelement
    *
    * Optional. Base64-encoded encrypted Telegram Passport element data provided by the user, available for “personal_details”, “passport”, “driver_license”, “identity_card”, “internal_passport” and “address” types. Can be decrypted and verified using the accompanying EncryptedCredentials.
    *
    * @var string
    */
   protected $data;

   /**
    * https://core.telegram.org/bots/api#encryptedpassportelement
    *
    * Optional. User&#039;s verified phone number, available only for “phone_number” type
    *
    * @var string
    */
   protected $phoneNumber;

   /**
    * https://core.telegram.org/bots/api#encryptedpassportelement
    *
    * Optional. User&#039;s verified email address, available only for “email” type
    *
    * @var string
    */
   protected $email;

   /**
    * https://core.telegram.org/bots/api#encryptedpassportelement
    *
    * Optional. Array of encrypted files with documents provided by the user, available for “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration” and “temporary_registration” types. Files can be decrypted and verified using the accompanying EncryptedCredentials.
    *
    * @var Type\PassportFile[]|array
    */
   protected $files;

   /**
    * https://core.telegram.org/bots/api#encryptedpassportelement
    *
    * Optional. Encrypted file with the front side of the document, provided by the user. Available for “passport”, “driver_license”, “identity_card” and “internal_passport”. The file can be decrypted and verified using the accompanying EncryptedCredentials.
    *
    * @var Type\PassportFile
    */
   protected $frontSide;

   /**
    * https://core.telegram.org/bots/api#encryptedpassportelement
    *
    * Optional. Encrypted file with the reverse side of the document, provided by the user. Available for “driver_license” and “identity_card”. The file can be decrypted and verified using the accompanying EncryptedCredentials.
    *
    * @var Type\PassportFile
    */
   protected $reverseSide;

   /**
    * https://core.telegram.org/bots/api#encryptedpassportelement
    *
    * Optional. Encrypted file with the selfie of the user holding a document, provided by the user; available for “passport”, “driver_license”, “identity_card” and “internal_passport”. The file can be decrypted and verified using the accompanying EncryptedCredentials.
    *
    * @var Type\PassportFile
    */
   protected $selfie;

   /**
    * https://core.telegram.org/bots/api#encryptedpassportelement
    *
    * Optional. Array of encrypted files with translated versions of documents provided by the user. Available if requested for “passport”, “driver_license”, “identity_card”, “internal_passport”, “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration” and “temporary_registration” types. Files can be decrypted and verified using the accompanying EncryptedCredentials.
    *
    * @var Type\PassportFile[]|array
    */
   protected $translation;

   /**
    * https://core.telegram.org/bots/api#encryptedpassportelement
    *
    * Base64-encoded element hash for using in PassportElementErrorUnspecified
    *
    * @var string
    */
   protected $hash;


   /**
    * @param string $type
    * @return EncryptedPassportElement
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
    * @param string $data
    * @return EncryptedPassportElement
    */
   public function setData($data)
   {
       $this->data = $data;
       return $this;
   }

   /**
    * @return string
    */
   public function getData()
   {
       return $this->data;
   }

   /**
    * @param string $phoneNumber
    * @return EncryptedPassportElement
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
    * @param string $email
    * @return EncryptedPassportElement
    */
   public function setEmail($email)
   {
       $this->email = $email;
       return $this;
   }

   /**
    * @return string
    */
   public function getEmail()
   {
       return $this->email;
   }

   /**
    * @param Type\PassportFile[]|array $files
    * @return EncryptedPassportElement
    */
   public function setFiles($files)
   {
       $this->files = $files;
       return $this;
   }

   /**
    * @return Type\PassportFile[]|array
    */
   public function getFiles()
   {
       return $this->files;
   }

   /**
    * @param Type\PassportFile $frontSide
    * @return EncryptedPassportElement
    */
   public function setFrontSide(Type\PassportFile $frontSide)
   {
       $this->frontSide = $frontSide;
       return $this;
   }

   /**
    * @return Type\PassportFile
    */
   public function getFrontSide()
   {
       return $this->frontSide;
   }

   /**
    * @param Type\PassportFile $reverseSide
    * @return EncryptedPassportElement
    */
   public function setReverseSide(Type\PassportFile $reverseSide)
   {
       $this->reverseSide = $reverseSide;
       return $this;
   }

   /**
    * @return Type\PassportFile
    */
   public function getReverseSide()
   {
       return $this->reverseSide;
   }

   /**
    * @param Type\PassportFile $selfie
    * @return EncryptedPassportElement
    */
   public function setSelfie(Type\PassportFile $selfie)
   {
       $this->selfie = $selfie;
       return $this;
   }

   /**
    * @return Type\PassportFile
    */
   public function getSelfie()
   {
       return $this->selfie;
   }

   /**
    * @param Type\PassportFile[]|array $translation
    * @return EncryptedPassportElement
    */
   public function setTranslation($translation)
   {
       $this->translation = $translation;
       return $this;
   }

   /**
    * @return Type\PassportFile[]|array
    */
   public function getTranslation()
   {
       return $this->translation;
   }

   /**
    * @param string $hash
    * @return EncryptedPassportElement
    */
   public function setHash($hash)
   {
       $this->hash = $hash;
       return $this;
   }

   /**
    * @return string
    */
   public function getHash()
   {
       return $this->hash;
   }

}