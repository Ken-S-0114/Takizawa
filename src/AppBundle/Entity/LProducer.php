<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LProducer
 *
 * @ORM\Table(name="l_producer")
 * @ORM\Entity
 */
class LProducer
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=128, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=128, nullable=true)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="mail_address", type="string", length=128, nullable=true)
     */
    private $mailAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="tel_number", type="string", length=32, nullable=true)
     */
    private $telNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="img_url", type="string", length=512, nullable=true)
     */
    private $imgUrl;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="register_date", type="datetime", nullable=false)
     */
    private $registerDate = '';



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return LProducer
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return LProducer
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set mailAddress
     *
     * @param string $mailAddress
     *
     * @return LProducer
     */
    public function setMailAddress($mailAddress)
    {
        $this->mailAddress = $mailAddress;

        return $this;
    }

    /**
     * Get mailAddress
     *
     * @return string
     */
    public function getMailAddress()
    {
        return $this->mailAddress;
    }

    /**
     * Set telNumber
     *
     * @param string $telNumber
     *
     * @return LProducer
     */
    public function setTelNumber($telNumber)
    {
        $this->telNumber = $telNumber;

        return $this;
    }

    /**
     * Get telNumber
     *
     * @return string
     */
    public function getTelNumber()
    {
        return $this->telNumber;
    }

    /**
     * Set imgUrl
     *
     * @param string $imgUrl
     *
     * @return LProducer
     */
    public function setImgUrl($imgUrl)
    {
        $this->imgUrl = $imgUrl;

        return $this;
    }

    /**
     * Get imgUrl
     *
     * @return string
     */
    public function getImgUrl()
    {
        return $this->imgUrl;
    }

    /**
     * Set registerDate
     *
     * @param \DateTime $registerDate
     *
     * @return LProducer
     */
    public function setRegisterDate($registerDate)
    {
        $this->registerDate = $registerDate;

        return $this;
    }

    /**
     * Get registerDate
     *
     * @return \DateTime
     */
    public function getRegisterDate()
    {
        return $this->registerDate;
    }
}
