<?php

namespace App\Http\Controllers;

use NckRtl\RouteMaker\Route;

class ContactController extends Controller
{
    #[Route(uri: '/contact')]
    public function show(): \Inertia\Response
    {
        return inertia('Contact');
    }
}
