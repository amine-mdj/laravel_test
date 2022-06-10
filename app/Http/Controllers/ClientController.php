<?php

namespace App\Http\Controllers;
use App\Jobs\SendWelcomeClientMailJob;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\Validator;

class ClientController extends Controller
{
    public function send()
    {
        foreach (Client::all() as $client) {
           
           SendWelcomeClientMailJob::dispatch($client) ;
             
        }
        
        return view('mailsent');
    }
}
