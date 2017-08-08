<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LItems
 *
 * @ORM\Table(name="l_items")
 * @ORM\Entity
 */
class LItems
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
     * @ORM\Column(name="item_name", type="string", length=512, nullable=true)
     */
    private $itemName;

    /**
     * @var integer
     *
     * @ORM\Column(name="producer_id", type="integer", nullable=true)
     */
    private $producerId;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="string", length=32, nullable=true)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="context", type="text", length=65535, nullable=true)
     */
    private $context;

    /**
     * @var string
     *
     * @ORM\Column(name="item_img_url", type="string", length=512, nullable=true)
     */
    private $itemImgUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="shipping_time", type="string", length=64, nullable=true)
     */
    private $shippingTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="category_id", type="integer", nullable=true)
     */
    private $categoryId;

    /**
     * @var integer
     *
     * @ORM\Column(name="sort_flg", type="integer", nullable=true)
     */
    private $sortFlg;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="register_date", type="datetime", nullable=false)
     */
    private $registerDate = 'CURRENT_TIMESTAMP';



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
     * Set itemName
     *
     * @param string $itemName
     *
     * @return LItems
     */
    public function setItemName($itemName)
    {
        $this->itemName = $itemName;

        return $this;
    }

    /**
     * Get itemName
     *
     * @return string
     */
    public function getItemName()
    {
        return $this->itemName;
    }

    /**
     * Set producerId
     *
     * @param integer $producerId
     *
     * @return LItems
     */
    public function setProducerId($producerId)
    {
        $this->producerId = $producerId;

        return $this;
    }

    /**
     * Get producerId
     *
     * @return integer
     */
    public function getProducerId()
    {
        return $this->producerId;
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return LItems
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set context
     *
     * @param string $context
     *
     * @return LItems
     */
    public function setContext($context)
    {
        $this->context = $context;

        return $this;
    }

    /**
     * Get context
     *
     * @return string
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Set itemImgUrl
     *
     * @param string $itemImgUrl
     *
     * @return LItems
     */
    public function setItemImgUrl($itemImgUrl)
    {
        $this->itemImgUrl = $itemImgUrl;

        return $this;
    }

    /**
     * Get itemImgUrl
     *
     * @return string
     */
    public function getItemImgUrl()
    {
        return $this->itemImgUrl;
    }

    /**
     * Set shippingTime
     *
     * @param string $shippingTime
     *
     * @return LItems
     */
    public function setShippingTime($shippingTime)
    {
        $this->shippingTime = $shippingTime;

        return $this;
    }

    /**
     * Get shippingTime
     *
     * @return string
     */
    public function getShippingTime()
    {
        return $this->shippingTime;
    }

    /**
     * Set categoryId
     *
     * @param integer $categoryId
     *
     * @return LItems
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    /**
     * Get categoryId
     *
     * @return integer
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * Set sortFlg
     *
     * @param integer $sortFlg
     *
     * @return LItems
     */
    public function setSortFlg($sortFlg)
    {
        $this->sortFlg = $sortFlg;

        return $this;
    }

    /**
     * Get sortFlg
     *
     * @return integer
     */
    public function getSortFlg()
    {
        return $this->sortFlg;
    }

    /**
     * Set registerDate
     *
     * @param \DateTime $registerDate
     *
     * @return LItems
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
