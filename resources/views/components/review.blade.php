<!-- @section('review')

@foreach($data as $el)
<div class="review-card d-grid justify-content-center mb-4">

  <div class="d-grid justify-content-center pb-3">
    <span class="review-name">{{ $el->name }}</span>
    <span class="review-name"><label for="">Питомец:</label>{{ $el->pet_type}}</span>
  </div>
  
  <span class="review-text">{{ $el->review_text }}
  </span>

</div>
@endforeach

@endsection -->