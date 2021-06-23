{{-- @extends('layouts.app') --}}
@extends('reviews')


@section('sec')

  <main>

    <div class="container">

      @foreach ($data as $el)
      
      <!-- Отзыв -->
      <div class="review-card text-center mb-4">

        <div class="text-center pb-3">

          <span class="review-name">{{ $el->name }}</span>

          <p class="review-pet color-blue pt-1">Питомец: {{ $el->pet_type }}</p>

        </div>
        
        <span class="review-text ">{{ $el->review_text }}</span>

        <p class="pt-3"><small>{{ $el->created_at }}</small></p>

      </div>
        
      @endforeach

    </div>

  </main>
@endsection

  