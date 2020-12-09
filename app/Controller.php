<?php

namespace App;

use App\Model;
use App\View;

/**
 * Site controller class.
 */
class Controller
{
    /**
     * Index page method.
     *
     * @return void
     */
    public function index()
    {
        View::render('index', [
            'title' => 'Dashboard'
            ]
        );
    }

    /**
     * Users list page method.
     *
     * @return void
     */
    public function users()
    {
        View::render('users', [
            'title' => 'Users List',
            'users' => Model::getAllUser()
            ]
        );
    }

    /**
     * Advertisements list page method.
     *
     * @return void
     */
    public function advertisements()
    {
        View::render('advertisements', [
            'title' => 'Advertisements List',
            'advertisements' => Model::getAllAdvertisement()
            ]
        );
    }
}
