<?php

namespace App\Controller;

use App\Model\UserModel;
use Vendor\Controller\Controller;

require('../inc/functions.php');

class UserController extends Controller
{

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function register()
    {
        $error = [];

        if (isset($_POST["submitted"])) {

            // $user = $this->encodeChars($_POST);
            $user["Password"] = password_hash($_POST["Password"], PASSWORD_DEFAULT);
            if (empty($_POST['Password'])) {
                $error['Password'] = 'Veillez remplir ce champ';
            }
            $user['FirstName'] = $_POST['FirstName'];
            $user['LastName'] = $_POST['LastName'];
            $user['Email'] = $_POST['Email'];
            $user['BirthDate'] = $_POST['BirthDate'];
            $user['Address'] = $_POST['Address'];
            if (empty($_POST['Address'])) {
                $error['Address'] = 'Veillez remplir ce champ';
            }
            $user['City']  = $_POST['City'];
            if (empty($_POST['City'])) {
                $error['City'] = 'Veillez remplir ce champ';
            }
            $user['ZipCode'] = $_POST['ZipCode'];
            $user['Phone'] = $_POST['Phone'];

            $error = validationText($error, $_POST["FirstName"], "FirstName", 3, 25);
            $error =  validationText($error, $_POST["LastName"], "LastName", 3, 25);
            $error = validationEmail($error, $_POST["Email"], "Email");
            $error = validDate($error, $_POST['BirthDate'], 'BirthDate');
            $error = validPostal($error, $_POST['ZipCode'], 'ZipCode');
            $error = validPhoneNumber($error, $_POST['Phone'], 'Phone');

            $email = $user['Email'];
            $criteria['Email'] = "$email";

            $userVerify = $this->userModel->findOneBy($criteria);

            if (!empty($userVerify)) {
                $error['Email'] = "Cet email existe déjà";
            }

            if (count($error) == 0) {
                $this->userModel->create($user);

                header("Location:login&id=new");
            }
        }

        $this->render("auth.register", ["error" => $error]);
    }

    public function login()
    {
        $error = [];

        if (isset($_POST["submitted"])) {

            $user["Password"] = $_POST['Password'];
            $user['Email'] = $_POST['Email'];
            $email = $user['Email'];
            $criteria['Email'] = "$email";
            $userVerifyEmail = $this->userModel->findOneBy($criteria);     
            $user['LastName'] = $userVerifyEmail->LastName;


            $error = validationEmail($error, $_POST['Email'], 'Email');
            if(empty($_POST['Password'])) {
                $error['Password'] = 'Veuillez renseigner ce champ.';
            }
            if(count($error) == 0) {
                if ($userVerifyEmail && password_verify($_POST["Password"], $userVerifyEmail->Password)) {

                    $_SESSION["user"] = $user;
                    header("Location:home");
                } else {
                    $error["Password"] = "Utilisateur ou mot de passe incorrect.";
                }
            }
        }
        $this->render("auth.login", [
            "error" => $error
        ]);
    }

    public function logout()
    {
        session_destroy();
        header("Location:home");
    }

    // public function getUser()
    // {
    //     $articleModel = new ArticleModel();
    //     $user = $this->userModel->readOne($_GET["id"]);

    //     $articles = $articleModel->userArticles($_GET["id"]);
    //     foreach ($articles as $article ) {
    //         $article->subContent = substr($article->content, 0, 30). " ...";
    //     }

    //     $this->render("user", [
    //         "user" => $user,
    //         "articles" => $articles
    //     ]);
    // }
}
