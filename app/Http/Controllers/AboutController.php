<?php

namespace App\Http\Controllers;

use NckRtl\RouteMaker\Route;

class AboutController extends Controller
{
    #[Route(uri: '/about')]
    public function show(): \Inertia\Response
    {
        return inertia('About');
    }
}
