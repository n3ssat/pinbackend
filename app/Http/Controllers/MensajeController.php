<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

$details = [
    'title' => 'Post title: ' . $request->title,
    'body' => $request->description
    ];
    \Mail::to('vannej321@gmail.com')->send(new \App\Mail\mensajeInfo($details));
