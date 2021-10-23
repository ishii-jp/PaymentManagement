<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PaymentController extends Controller
{
    /**
     * 支払い入力画面
     * /payment
     *
     * @return View
     */
    public function index(): View
    {
        return view('payment');
    }
}
