@extends('index')

@section('discount')


      @foreach ($data as $el)
      
      <div class="d-flex justify-content-center">
        <div class="card d-flex align-items-start flex-column">

          <div class="pb-4">
            <p class="discount">{{ $el->discount_title }}</p>
            <p class="discount-inner">{{ $el->discount_subtitle }}</p>
          </div>

          <div class="d-flex w-100 align-items-center justify-content-between">
            <button type="submit" class="btn-discount"><span class="btn-discount-inner">Подробнее об акции</span></button>
            <span class="color-white">до {{ $el->discount_date_end }}</span>
          </div>

        </div>
      </div>
        
      @endforeach

@endsection
