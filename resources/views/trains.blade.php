@extends('layout.main')

@section('content')
    <div class="container">
        <h1 class="text-center py-5">Orari Treni</h1>
        <div class="row">
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">Treno</th>
                    <th scope="col">Numero</th>
                    <th scope="col">Provenienza</th>
                    <th scope="col">Destinazione</th>
                    <th scope="col">Orario di Partenza</th>
                    <th scope="col">Orario di Arrivo</th>
                    <th scope="col">Numero Carrozze</th>
                    <th scope="col">In Orario</th>
                    <th scope="col">Soppresso</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($trains as $train)
                    <tr>
                    <td>{{ $train->company_name }}</td>
                    <td>{{ $train->train_code }}</td>
                    <td>{{ $train->departure_station }}</td>
                    <td>{{ $train->arrival_station }}</td>
                    <td>{{ $train->departure_time }}</td>
                    <td>{{ $train->arrival_time }}</td>
                    <td>{{ $train->couches_number }}</td>
                    <td>{{ $train->is_punctual === 0 ? 'No' : 'Si'}}</td>
                    <td>{{ $train->is_suppressed === 0 ? 'No' : 'Si'}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
