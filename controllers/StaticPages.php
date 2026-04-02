<?php
namespace App\Controllers;

use JetBrains\PhpStorm\NoReturn;
use App\Models\UserModel;

class StaticPages extends BaseController {
    private UserModel $userModel;

    public function __construct() {
        parent::__construct();

        $this->userModel = new UserModel();
    }

    public function profile() :void {
        $id = (int)$_SESSION['user']['id'];
    }

    public function login() :void {
        $data = [
            'title' => esc(LANG->staticPages->titles->login)
        ];

        $requiredFields = [
            'username',
            'password'
        ];

        if ($this->request->is('post') && $this->request->validate($requiredFields)) {
            $username = esc($this->request->get('username'));
            $password = $this->request->get('password');
            $user = $this->userModel->select(0, $username);

            if (!empty($user) && password_verify($password, $user['password'])) {
                $_SESSION['user'] = [
                    'id' => $user['id'],
                    'username' => $user['username'],
                    'administrator' => $user['administrator']
                ];

                redirect('recipes');
            }
            else {
                setFlashMessage('error', esc(LANG->messages->error->credentials));

                redirect('login');
            }
        }

        $this->view->render('static-pages/login', $data);
    }

    #[NoReturn]
    public function logout() :void {
        unset($_SESSION['user']);

        redirect('login');
    }
}