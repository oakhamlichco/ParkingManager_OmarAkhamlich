@extends('layouts.parkingManager')

@section('content')

    <div class="form-block">
        <h3>Bilatu Plaka bitartez</h3>

        <form action="/search" method="GET">
            <div class="form-row">
                <label>Bilatu plaka</label><br>
                <input type="text" name="matrikula" value="{{ request('matrikula') }}" />
            </div>

            <button type="submit">
                <i class="fa-solid fa-magnifying-glass"></i> Bilatu
            </button>
        </form>
    </div>

    @if(isset($emaitza))
        <div class="list-block">
            <h3>Results</h3>

            @if($emaitza->isEmpty())
                <p>Ez dago kotxerik.</p>
            @else
                <table>
                    <thead>
                        <tr>
                            <th>Plaka</th>
                            <th>Beraz</th>
                            <th>Modeloa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($emaitza as $car)
                            <tr>
                                <td>{{ $car->Plaka }}</td>
                                <td>{{ $car->Beraz }}</td>
                                <td>{{ $car->Modeloa }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    @endif

@endsection
