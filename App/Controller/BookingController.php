<?php
namespace App\Controller;

use App\Model\BookingModel;
use Vendor\Controller\Controller;

/**
 * Le CRUD (create, read, update, delete) sont l'ensemble des méthodes permettant de manipuler
 * des données dans la base de données.
 */
class BookingController extends Controller{


    public function booking()
    {
        $bookingModel = new BookingModel();
        $error = [];

        if (isset($_POST["submitted"])) {
            // $user = $this->encodeChars($_POST);
            $booking["BookingDate"] = $_POST["date"];
            $booking['BookingTime'] = $_POST['time'];
            $booking['NumberOfSeats'] = $_POST['tablenumb'];
            $booking['User_Id'] = 16;
            $error = emptyError($error,$_POST['date'],'date');
            $error = emptyError($error,$_POST['time'],'time');
            $error = emptyError($error,$_POST['tablenumb'],'tablenumb');


            if (empty($error)) {
              $bookingModel->create($booking);
            }



        }
        $this->render("booking", [
            "error" => $error,
            ]);

    }

}
