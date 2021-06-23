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
    return redirect()->route('review')->with('success', 'Спасибо за отзыв');
  }

  public function allData() {

    $feedback = new Feedback;
    return view('review-card', ['data' => $feedback->orderBy('created_at', 'desc')->get()]);

  }

}
