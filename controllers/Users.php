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

    public function create() :void {
        $data = [
            'title' => esc(LANG->users->titles->create)
        ];

        $requiredFields = [
            'username',
            'password'
        ];

        if ($this->request->is('post') && $this->request->validate($requiredFields)) {
            $input = [
                'username' => esc($this->request->get('username')),
                'password' => password_hash($this->request->get('password'), PASSWORD_DEFAULT),
                'administrator' => (int)(bool)$this->request->get('administrator')
            ];

            if ($this->userModel->insert($input)) {
                setFlashMessage('success', esc(LANG->messages->success->save));
            }
            else {
                setFlashMessage('error', esc(LANG->messages->error->save));
            }

            redirect('users');
        }

        $this->view->renderHeader($data)
                   ->render('users/create', $data)
                   ->renderFooter();
    }
}