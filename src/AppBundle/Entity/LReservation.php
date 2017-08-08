<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LReservation
 *
 * @ORM\Table(name="l_reservation")
 * @ORM\Entity
 */
class LReservation
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
     * @var integer
     *
     * @ORM\Column(name="l_items_id", type="integer", nullable=true)
     */
    private $lItemsId;

    /**
     * @var integer
     *
     * @ORM\Column(name="l_customer_id", type="integer", nullable=true)
     */
    private $lCustomerId;

    /**
     * @var integer
     *
     * @ORM\Column(name="order_quantity", type="integer", nullable=true)
     */
    private $orderQuantity;

    /**
     * @var integer
     *
     * @ORM\Column(name="shipment_flg", type="integer", nullable=true)
     */
    private $shipmentFlg;

    /**
     * @var integer
     *
     * @ORM\Column(name="cancel_flg", type="integer", nullable=true)
     */
    private $cancelFlg;

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
     * Set lItemsId
     *
     * @param integer $lItemsId
     *
     * @return LReservation
     */
    public function setLItemsId($lItemsId)
    {
        $this->lItemsId = $lItemsId;

        return $this;
    }

    /**
     * Get lItemsId
     *
     * @return integer
     */
    public function getLItemsId()
    {
        return $this->lItemsId;
    }

    /**
     * Set lCustomerId
     *
     * @param integer $lCustomerId
     *
     * @return LReservation
     */
    public function setLCustomerId($lCustomerId)
    {
        $this->lCustomerId = $lCustomerId;

        return $this;
    }

    /**
     * Get lCustomerId
     *
     * @return integer
     */
    public function getLCustomerId()
    {
        return $this->lCustomerId;
    }

    /**
     * Set orderQuantity
     *
     * @param integer $orderQuantity
     *
     * @return LReservation
     */
    public function setOrderQuantity($orderQuantity)
    {
        $this->orderQuantity = $orderQuantity;

        return $this;
    }

    /**
     * Get orderQuantity
     *
     * @return integer
     */
    public function getOrderQuantity()
    {
        return $this->orderQuantity;
    }

    /**
     * Set shipmentFlg
     *
     * @param integer $shipmentFlg
     *
     * @return LReservation
     */
    public function setShipmentFlg($shipmentFlg)
    {
        $this->shipmentFlg = $shipmentFlg;

        return $this;
    }

    /**
     * Get shipmentFlg
     *
     * @return integer
     */
    public function getShipmentFlg()
    {
        return $this->shipmentFlg;
    }

    /**
     * Set cancelFlg
     *
     * @param integer $cancelFlg
     *
     * @return LReservation
     */
    public function setCancelFlg($cancelFlg)
    {
        $this->cancelFlg = $cancelFlg;

        return $this;
    }

    /**
     * Get cancelFlg
     *
     * @return integer
     */
    public function getCancelFlg()
    {
        return $this->cancelFlg;
    }

    /**
     * Set registerDate
     *
     * @param \DateTime $registerDate
     *
     * @return LReservation
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
