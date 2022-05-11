<?php

namespace Pledge\Install\Controllers;

use Illuminate\Routing\Controller;

class WelcomeController extends Controller
{
    /**
     * Display the install welcome page.
     *
     * @return \Illuminate\View\View
     */

    public function welcome()
    {
        return view('vendor.install.welcome');
    }

}
