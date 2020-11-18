<?php

namespace App\Controllers;

use \App\Models\Account;
use App\Core\AControllerBase;


class AccountController extends AControllerBase
{

    public function index()
    {
        return[];
    }

    public function profile() {
        $id = $_SESSION['userId'];

        $accounts=Account::getAll();
        foreach ($accounts as $acc) {
            if ($acc->getId() == $id) {
                return [
                    'username' => $acc->getUsername(),
                    'realm' => $acc->getRealm(),
                    'email' => $acc->getEmail(),
                    'faction' => $acc->getFaction(),
                    'about' => $acc->getAbout(),
                ];
            }
        }
    }

    public function modifyProfile() {
        $id = $_SESSION['userId'];
        $account = new Account();
        $account->getOne($id);


        if (isset($_POST['username'])){
            $account->setUsername($_POST['username']);
            $account->setPassword($_POST['password']);
            $account->setEmail($_POST['email']);
            $account->setFaction($_POST['faction']);
            $account->setRealm($_POST['realm']);
            $account->setAbout($_POST['about']);
            $account->save();
            header('Location: ?c=home');
        }

        return [
            'Account' => $account
        ];
    }


    public function add(){
        if (!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['email']) ){
            $username=$_POST['username'];
            $password=$_POST['password'];
            $email=$_POST['email'];

            $accounts=Account::getAll();

            foreach ($accounts as $acc) {
                if ($acc->getUsername() == $username && $acc->getPassword()==$password)
                {
                    return [
                        'login' => 0
                    ];
                }
            }
            $account = new Account($username, $password, $email);
            echo $account->getEmail();
            $account->save();
            $this->login();
            header('Location: ?c=home');
            return [
                'login' => 1
            ];
        }
    }

    public function delete(){
        $id = $_SESSION['userId'];
        $account = new Account();
        $account->getOne($id);
        $account->delete();
        header('Location: ?c=home');
        $this->logout();
        exit();
    }

    public function login() {
        if (isset($_POST['username'])){
            $username=$_POST['username'];
            $password=$_POST['password'];
            $accounts=Account::getAll();

            foreach ($accounts as $acc) {
                if ($acc->getUsername() == $username && $acc->getPassword()==$password)
                {
                    $_SESSION['userId'] = $acc->getId();
                    header('Location: ?c=home');
                    return [
                        'login' => 1
                    ];
                }
            }
            return [
                'login' => 5
            ];
        }
    }

    public function logout() {
        $_SESSION = array();

        if(ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '' , time()-42000, $params["path"], $params["domain"],
                      $params["secure"],$params["httponly"]);
        }
        session_destroy();
        header('Location: ?c=home');
    }
}