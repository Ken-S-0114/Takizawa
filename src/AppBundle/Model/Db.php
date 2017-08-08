<?php
namespace AppBundle\Model;

use AppBundle\Entity\LCustomer;
use AppBundle\Entity\LProducer;
use AppBundle\Entity\LReservation;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMException;
use DateTime;


/**
 * Class Base
 */
class Db
{
    /** @var EntityManager $em */
    private $em;

    /**
     *
     * Base constructor.
     * @param EntityManager $em
     */
    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    /**
     * 商品リスト取得
     *
     * @return array
     */
    public function itemList()
    {
        $qb = $this->em->createQueryBuilder()
            ->select('l_items')
            ->from('AppBundle\Entity\LItems', 'l_items')
            ->getQuery()
            ->getArrayResult();

        return $qb;
    }

    /**
     * 商品詳細取得
     * @param int $itemId 商品ID
     *
     * @return array
     */
    public function itemDetail($itemId)
    {
        $qb = $this->em->createQueryBuilder()
            ->select('l_items')
            ->from('AppBundle\Entity\LItems', 'l_items')
            ->where('l_items.id = :itemId')
            ->setParameter('itemId', $itemId);
        $result = $qb->getQuery()->getOneOrNullResult();

        return $result;
    }

    /**
     * 商品詳細取得
     * @param int $itemId 商品ID
     *
     * @return array
     */
    public function itemSearch($word)
    {
        try {
            $qb = $this->em->createQueryBuilder()
                ->select('l_items')
                ->from('AppBundle\Entity\LItems', 'l_items')
                ->where('l_items.itemName like :word')
                ->setParameter('word', '%'.$word.'%');

            $result = $qb->getQuery()->getArrayResult();

        } catch (ORMException $e) {
            error_log('itemSearch'. $e);
            return false;
        }

        return $result;
    }

    /**
     * 商品カテゴリリスト取得
     * @param int $itemId 商品ID
     *
     * @return array
     */
    public function itemCategoryList($categoryId)
    {
        $qb = $this->em->createQueryBuilder()
            ->select('l_items')
            ->from('AppBundle\Entity\LItems', 'l_items')
            ->where('l_items.categoryId = :categoryId')
            ->setParameter('categoryId', $categoryId);
        $result = $qb->getQuery()->getArrayResult();

        return $result;
    }

    /**
     * 予約情報保存
     *
     * @param $customerId
     * @param $itemId
     * @return bool
     */
    public function setReservation($customerId, $itemId, $kosuu)
    {
        try {
            $reserv = new LReservation();
            $reserv->setLCustomerId($customerId);
            $reserv->setLItemsId($itemId);
            $reserv->setOrderQuantity($kosuu);
            $reserv->setCancelFlg(0);
            $reserv->setShipmentFlg(0);
            $reserv->setRegisterDate(new DateTime(date('Y-m-d H:i:s')));
            $this->em->persist($reserv);
            $this->em->flush();
        } catch (ORMException $e) {
            return false;
        }
        return true;
    }

    /**
     * 顧客情報保存
     *
     * @param $customerId
     * @param $itemId
     * @return int
     */
    public function setCustomerInfo($name, $address, $mailAddress, $telNumber, $imgUrl)
    {
        try {
            $customer = new LCustomer();
            $customer->setName($name);
            $customer->setAddress($address);
            $customer->setMailAddress($mailAddress);
            $customer->setTelNumber($telNumber);
            $customer->setImgUrl($imgUrl ?? '');
            $customer->setRegisterDate(new DateTime(date('Y-m-d H:i:s')));
            $this->em->persist($customer);
            $this->em->flush();
        } catch (ORMException $e) {
            return false;
        }
        $qb = $this->em->createQueryBuilder()
            ->select('l_customer')
            ->from('AppBundle\Entity\LCustomer', 'l_customer')
            ->where('l_customer.telNumber = :tel')
            ->setParameter('tel', $telNumber)
            ->getQuery()
            ->getArrayResult();
//            ->getOneOrNullResult();

        return $qb;

    }

    /**
     * 生産者情報保存
     *
     * @param $customerId
     * @param $itemId
     * @return bool
     */
    public function setProducerInfo($name, $address, $mailAddress, $telNumber, $imgUrl)
    {
        try {
            $producer = new LProducer();
            $producer->setName($name);
            $producer->setAddress($address);
            $producer->setMailAddress($mailAddress);
            $producer->setTelNumber($telNumber);
            $producer->setImgUrl($imgUrl ?? '');
            $producer->setRegisterDate(new DateTime(date('Y-m-d H:i:s')));
            $this->em->persist($customer);
            $this->em->flush();
        } catch (ORMException $e) {
            return false;
        }
        return true;
    }

    /**
     * 顧客詳細取得
     * @param int $itemId 商品ID
     *
     * @return array
     */
    public function findCustomer($customerId)
    {
        $qb = $this->em->createQueryBuilder()
            ->select('l_customer')
            ->from('AppBundle\Entity\LCustomer', 'l_customer')
            ->where('l_customer.id = :$customerId')
            ->setParameter('$customerId', $customerId)
            ->getQuery()
            ->getOneOrNullResult();

        return $qb;
    }
}