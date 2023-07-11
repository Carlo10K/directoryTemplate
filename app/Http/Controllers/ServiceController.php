<?php

namespace App\Http\Controllers;
use \App\Http\Response;

class ServiceController{
    public function index(){
        return new Response('service');
    }
}