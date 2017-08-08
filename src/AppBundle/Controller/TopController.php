<?php
namespace AppBundle\Controller;

use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class TopController
 * @package AppBundle\Controller
 */
class TopController extends Controller
{

    public function indexAction()
    {

        return $this->render('top/index.html.twig', array(
            'url' =>  $this->getParameter('url_ssl'),
        ));
    }


    public function searchAction(Request $request)
    {
        $searchWord = $request->get('search') ?? "すいか";


        $itemList = $this->get('db')->itemSearch($searchWord);

        return $this->render('top/list.html.twig', array(
            'url' =>  $this->getParameter('url_ssl'),
            'itemList' => $itemList,
        ));
    }

    public function listAction()
    {

        $itemList = $this->get('db')->itemList();


        return $this->render('top/list.html.twig', array(
            'url' =>  $this->getParameter('url_ssl'),
            'itemList' => $itemList,
        ));
    }

    public function categoryAction(Request $request)
    {
        $categoryId = $request->get('id') ?? 1;
        $itemList = $this->get('db')->itemCategoryList($categoryId);


        return $this->render('top/list.html.twig', array(
            'url' =>  $this->getParameter('url_ssl'),
            'itemList' => $itemList,
        ));
    }


    public function detailAction(Request $request)
    {
        $itemId = $request->get('id') ?? 1;

        $itemDetail = $this->get('db')->itemDetail($itemId);

        return $this->render('top/detail.html.twig', array(
            'url' =>  $this->getParameter('url_ssl'),
            'itemDetail' => $itemDetail,
            'itemId' => $itemId,
        ));
    }

    public function reservationAction(Request $request)
    {
        $searchWord = $request->get('word');

        $this->get('db')->find($searchWord);

        return $this->render('top/search.html.twig', array(

        ));
    }

    public function paymentAction()
    {

        return $this->render('top/payment.html.twig', array(
            'url' =>  $this->getParameter('url_ssl'),

        ));
    }

    public function paymentCompleteAction()
    {

        return $this->render('top/payment_comp.html.twig', array(
            'url' =>  $this->getParameter('url_ssl'),

        ));
    }

    public function contactAction(Request $request)
    {
//        $searchWord = $request->get('word');
//
//        $this->get('db')->find($searchWord);
        $itemId = $request->get('itemId');
        $orderQuantity = $request->get('OrderQuantity');
        return $this->render('top/contact.html.twig', array(
            'url' =>  $this->getParameter('url_ssl'),
            'itemId'=>$itemId,
            'orderQuantity' => $orderQuantity,
        ));
    }
    public function doAction(Request $request)
    {
        try {
            $postalCode = $request->get('postalCode');
            $pref = $request->get('pref');
            $address = $request->get('address');
            $rowName = $request->get('rowName');
            $name = $request->get('name');
            $sex_id = $request->get('sex_id');
            $age_id = $request->get('age_id');
            $mailAddress = $request->get('mailAddress');
            $tel = $request->get('tel');

            $customerInfo = $this->get('db')->setCustomerInfo($name, $address, $mailAddress, $tel, '');

            $customerId = $customerInfo[0]['id'];

            $itemId = $request->get('itemId');
            $orderQuantity = $request->get('orderQuantity');


            $this->get('db')->setReservation($customerId, intval($itemId), $orderQuantity);
        } catch (Exception $e) {
            return $this->redirect('/payment');
        }
        return $this->redirect('/payment');
    }

    public function guideAction()
    {

        return $this->render('top/guide.html.twig', array(
            'url' =>  $this->getParameter('url_ssl'),
        ));
    }
}
