<?php

namespace App\Controller;

use App\Model\BookingModel;
use App\Model\OrderModel;
use Vendor\Controller\Controller;




class AdminController extends Controller
{

    
    

    public function admin()
    {
        /**
         * fonction qui liste toute les reservations de tables
         * 
         */

        $adminModel = new BookingModel();

        $admins = $adminModel->findAll();

        foreach ($admins as $admin) {
            $id = $admin->User_Id;

            $getFirstName = $adminModel->jointure($id);

            $admin->FirstName = $getFirstName[0]->FirstName;
        }

         /**
         * fonction qui liste toute les reservations de tables
         * 
         */

        $orderModel = new OrderModel();

        $orders = $orderModel->myFindAll();

        foreach ($orders as $order) {
            $id = $order->User_Id;
            $orderFirstName = $orderModel->jointure($id);
            $order->FirstName = $orderFirstName[0]->FirstName;
        }

        $this->render("admin.admin", [
            "admins" => $admins,
            "orders"=> $orders

        ]);
    }


}
