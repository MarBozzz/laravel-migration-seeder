@extends('layout.main')

@section('content')
    <h1>
        <div class="container">
            <h1 class="text-center pb-5">Orari Treni</h1>

            <div class="row text-center">
                 @foreach ($trains as $train)
                     <div class="col-3">
                        <a href="#" class="card mb-5 pb-5">
                            <div class="card-body">
                            <h3 class="card-title py-5">Treno: {{ $train->company_name }}</h3>
                            <p class="card-text">Numero: {{ $train->train_code }}</p>
                            <p class="card-text">Proveniente da: {{ $train->departure_station }}</p>
                            <p class="card-text">Diretto a: {{ $train->arrival_station }}</p>
                            </div>
                        </a>
                     </div>

                 @endforeach
            </div>
        </div>
    </h1>
@endsection
