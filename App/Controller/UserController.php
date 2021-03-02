<?php
namespace App\Controller;

use App\Model\UserModel;
use Vendor\Controller\Controller;

class UserController extends Controller{

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function register()
    {
        // if (isset($data["email"])) {
        //     $user = $this->encodeChars($data);
        //     $user["password"] = password_hash($data["password"], PASSWORD_DEFAULT);
        //     $user["role"] = json_encode(['user']);
        //     $this->userModel->create($user);

        //     header("Location:index.php?page=login");
        // }

        $this->render("auth.register");

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