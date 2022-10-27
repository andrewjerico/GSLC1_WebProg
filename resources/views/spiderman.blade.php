@extends('main')

@section('container')
<div class="row">
    @for ($i = 0; $i < 6; $i++)
      <div class="col-md-2 mt-3">
        <div class="card bg-dark">
            <img src="{{ asset('img/spiderman.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text text-light fs-5" style="margin-top: -15px">Spiderman: No...</p>
              <p class="card-text text-light fs-6" style="margin-top: -15px">2021</p>
            </div>
        </div>
      </div>
    @endfor
  </div>
@endsection