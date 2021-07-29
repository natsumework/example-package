<?php

namespace Natsumework\ExamplePackage\Http\Controllers;

use Illuminate\Routing\Controller;

class ExampleController extends Controller
{
    public function index()
    {
        return view('example-package::example', [
        ]);
    }
}
