<?php

namespace App\Http\Controllers;

use App\Notifications\PaymentRecieved;
use Illuminate\Support\Facades\Notification;
use Illuminate\Http\Request;

class PaymentsController extends Controller
{
    //
    public function create()
    {
        return view('payments.create');
    }

    public function store()
    {
        request()->user()->notify(new PaymentRecieved());
        return redirect(route('payments.create'))->with('message', 'Notification sent');
    }
}
