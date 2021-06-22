<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FeedbackRequest;
use App\Models\Feedback;

class FeedbackController extends Controller{
    
  public function submit(FeedbackRequest $req) {

    $feedback = new Feedback();
    $feedback->name = $req->input('name');
    $feedback->pet_type = $req->input('pet_type');
    $feedback->review_text = $req->input('review_text');

    $feedback->save();

    // Переадресация
    return redirect()->route('reviews')->with('success', 'Спасибо за отзыв');
  }

  public function allData() {
    return view('reviews', ['data'=> Feedback::all()]);
  }

}
