<?php
/**
 * Created by PhpStorm.
 * User: s-sakuma
 * Date: 2016/10/13
 * Time: 11:29
 */
namespace AppBundle\Entity;

use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;

use Doctrine\ORM\Mapping as ORM;

class PasswordRemainder
{
    public $mail;

    public $newPassword1;

    public $newPassword2;

    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        $metadata->addPropertyConstraint('mail', new NotBlank());
        $metadata->addPropertyConstraint('mail', new Email());
        $metadata->addPropertyConstraint('newPassword1', new NotBlank());
        $metadata->addPropertyConstraint('newPassword2', new NotBlank());
        $metadata->addPropertyConstraint('newPassword1', new Length(['min'=>8, 'max'=>20]));
        $metadata->addPropertyConstraint('newPassword2', new Length(['min'=>8, 'max'=>20]));
    }
  
}