<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DiscountRequest;
use App\Models\Discount;

class DiscountController extends Controller
{
    public function allData() {

        $discount = new Discount;
        return view('discount', ['data' => $discount->all()]);
    
    }
}
