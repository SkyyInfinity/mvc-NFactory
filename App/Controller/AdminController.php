<?php

namespace App\Controller;

use App\Model\BookingModel;
use Vendor\Controller\Controller;


require('../inc/functions.php');

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

        $this->render("admin.admin", [
            "admins" => $admins,

        ]);
    }


}
