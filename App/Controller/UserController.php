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
            $user['FirstName'] = $_POST['FirstName'];
            $user['LastName'] = $_POST['LastName'];
            $user['Email'] = $_POST['email'];
            $user['BirthDate'] = $_POST['BirthDate'];
            $user['Address'] = $_POST['Address'];
            $user['City']  = $_POST['City'];
            $user['ZipCode'] = $_POST['ZipCode'];
            $user['Phone'] = $_POST['Phone'];
            $error = validationText($error, $_POST["FirstName"], "FirstName", 3, 25);
            $error =  validationText($error, $_POST["LastName"], "LastName", 3, 25);
            $error = validationEmail($error, $_POST["email"], "email");
            if (empty($error == 0)) {
                echo 'bravo';

                $this->userModel->create($user);
            }


            // header("Location:index.php?page=login");
        }

        $this->render("auth.register", ["error" => $error]);
    }

    public function login()
    {
        // if (isset($data["email"])) {

        //     $user = $this->userModel->getUserByEmail($data["email"]);

        //     if ($user && password_verify($data["password"], $user->password)) {
        //         $_SESSION["user"] = $user;
        //         $_SESSION["user"]->role = json_decode($user->role);
        //         header("Location:index.php");
        //     } else {
        //         $error = "Utilisateur ou mot de passe incorrect.";
        //     }

        // }
        $this->render("auth.login", [
            "user" => "test",
        ]);
    }

    // public function logout()
    // {
    //     session_destroy();
    //     header("Location:index.php");
    // }

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
