@extends('layouts.parkingManager')

@section('content')
    <div class="list-block">
        <h3>Current Cars</h3>

        <table>
            <thead>
                <tr>
                    <th>Plate</th>
                    <th>Brand</th>
                    <th>Model</th>
                    <th>Erabiltzailea</th>
                    <th>Ezabatu?</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($autoa as $car)
                    @include('partials.autoaErrenkada', ['car' => $car])
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
