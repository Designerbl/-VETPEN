<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\OrderRequest;
use App\Models\Order;

class OrderController extends Controller{

  public function submit(OrderRequest $reqo) {

    $order = new Order();
    $order->name_order = $reqo->input('name_order');
    $order->pet_order = $reqo->input('pet_order');
    $order->phone_order = $reqo->input('phone_order');

    $order->save();

    // Переадресация
    return redirect()->route('home')->with('success', 'Заявка отправлена');
  }

}
