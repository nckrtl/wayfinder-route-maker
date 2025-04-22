<?php

namespace App\Http\Controllers;

use NckRtl\RouteMaker\Route;

class HomeController extends Controller
{
    #[Route(uri: '/')]
    public function show(): \Inertia\Response
    {
        return inertia('Home');
    }

    public function redirect(): \Illuminate\Http\RedirectResponse
    {
        return redirect()->route('Controllers.HomeController.show');
    }
}
