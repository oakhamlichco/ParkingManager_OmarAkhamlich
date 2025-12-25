@extends('layouts.parkingManager')

@section('content')
    <div class="form-block">
        <h3>Bilaketa aurreratua</h3>

        <form action="/bilaketa-aurreratua" method="GET">
            <div class="form-row">
                <label>Data (sarrera eguna)</label><br>
                <input type="date" name="data" value="{{ $data ?? '' }}">
            </div>

            <div class="form-row">
                <label>Erabiltzailea</label><br>
                <select name="erabiltzailea_id">
                    <option value="">-- Guztiak --</option>
                   @foreach ($erabiltzaileak as $erabiltzailea)
                        <option value="{{ $erabiltzailea->id }}" @selected(isset($erabiltzaileaId) && $erabiltzaileaId == $erabiltzailea->id)>
                            {{ $erabiltzailea->izena }} {{ $erabiltzailea->abizena }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit">
                <i class="fa-solid fa-magnifying-glass"></i> Bilatu
            </button>
        </form>
    </div>

    @if(isset($emaitza))
        <div class="list-block">
            <h3>Emaitzak</h3>

            @if($emaitza->isEmpty())
                <p>Emaitzarik ez.</p>
            @else
                <table>
                    <thead>
                        <tr>
                            <th>Plaka</th>
                            <th>Marka</th>
                            <th>Modeloa</th>
                            <th>Erabiltzailea</th>
                            <th>Sarrera data</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($emaitza as $autoa)
                            <tr>
                                <td>{{ $autoa->Plaka }}</td>
                                <td>{{ $autoa->Beraz }}</td>
                                <td>{{ $autoa->Modeloa }}</td>
                                <td>
                                    @if($autoa->erabiltzailea)
                                        {{ $autoa->erabiltzailea->izena }} {{ $autoa->erabiltzailea->abizena }}
                                    @else
                                        (erabiltzailerik ez)
                                    @endif
                                </td>
                                <td>{{ $autoa->created_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    @endif
@endsection
