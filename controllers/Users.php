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
        $search = $this->request->is('post') ? $this->request->get('search') : '';
        $elements = $this->userModel->select();

        if ($this->request->is('post')) {
            $elements = $this->filterElements($elements, $search);
        }

        $data = [
            'title' => esc(LANG->users->titles->index),
            'elements' => $elements,
            'search' => $search
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

    public function show(int $id) :void {
        $data = [
            'title' => esc(LANG->users->titles->show),
            'element' => $this->userModel->select($id)
        ];

        $this->view->renderHeader($data)
                   ->render('users/show', $data)
                   ->renderFooter();
    }

    private function filterElements(array $elements, string $search): array {
        $search = strtolower($search);

        return array_values(array_filter($elements, function($element) use ($search) {
            if (!isset($element['username'])) return false;
            $username = strtolower($element['username']);
            return str_contains($search, $username) || str_contains($username, $search);
        }));
    }
}