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
        View::render('list', [
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
        View::render('list', [
            'title' => 'Advertisements List',
            'advertisements' => Model::getAllAdvertisement()
            ]
        );
    }
}
