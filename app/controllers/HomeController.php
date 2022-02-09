<?php

class HomeController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = $this->model('Status');
    }

    public function login()
    {
        $users = $this->model->getUsers();
        foreach ( $users as $user  ) {

            if ( $user['username'] == $_POST['username'] && $_POST['password'] == PASS) {
                setcookie('userSession', $_POST['username'], time() + (86400 * 155), '/');
            }
            header('location: '.ROOT);
        }
    }
    
    public function index()
    {
        $dbData = $this->model->getStatus();
        $using = $this->model->getUsing();

        $data = [
            'titulo' => 'Uso de WhatsApp',
            'dbData' => $dbData,
            'using' => $using
        ];
        $this->view('home', $data);
    }

    public function removeCookies()
    {
        setcookie('userSession', '', time() - (86400 * 155), '/');
        header('location: '.ROOT);
    }

    public function setSatus($status)
    {
        if ( $status == 1 ) {
        $this->model->setStatusToOne();
        $this->model->usingWhatsApp($_COOKIE['userSession']);
        header('location: '.ROOT);
        } else {
        $this->model->setStatusToZero();
        header('location: '.ROOT);
        }
    }
}
