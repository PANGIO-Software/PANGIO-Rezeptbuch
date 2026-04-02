<?php
namespace App\Controllers;

use App\Models\UserModel;

class Users extends BaseController {
    private UserModel $userModel;

    public function __construct() {
        parent::__construct();

        $this->userModel = new UserModel();
    }

    public function index() :void {
        $data = [
            'title' => esc(LANG->users->titles->index),
            'elements' => $this->userModel->select()
        ];

        $this->view->renderHeader($data)
                   ->render('users/index', $data)
                   ->renderFooter();
    }
}