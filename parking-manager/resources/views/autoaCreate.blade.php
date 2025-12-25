@extends('layouts.parkingManager')

@section('content')
    <div class="form-block">
        
        <form action="/autoa" method="POST">
            @csrf
            <h3>Kotxe berria</h3>

            <div class="form-row">
                <label>Plaka</label>
                @error('plaka')
                    <span class="error">{{ $message }}</span>
                @enderror
                <br>
                <input type="text" name="plaka" />
            </div>

            <div class="form-row">
                <label>Beraz</label>
                @error('beraz')
                    <span class="error">{{ $message }}</span>
                @enderror
                <br>
                <input type="text" name="beraz" />
            </div>

            <div class="form-row">
                <label>Modeloa</label>
                @error('modeloa')
                    <span class="error">{{ $message }}</span>
                @enderror
                <br>
                <input type="text" name="modeloa" />
            </div>
            
            <br>
            <h3>Erabiltzaile berria</h3>

            <div class="form-row">
                <label>Aukeratu erabiltzailea</label><br>
                <select name="erabiltzailea_id">
                    <option value="">-- Hautatu erabiltzailea --</option>
                     @foreach($erabiltzaileak as $erabiltzailea)
                        <option value="{{ $erabiltzailea->id }}">
                            {{ $erabiltzailea->izena }} {{ $erabiltzailea->abizena }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-row">
                <label>Izena</label>
                @error('izena')
                    <span class="error">{{ $message }}</span>
                @enderror
                <br>
                <input type="text" name="izena" />
            </div>

            <div class="form-row">
                <label>Abizena</label>
                @error('abizena')
                    <span class="error">{{ $message }}</span>
                @enderror
                <br>
                <input type="text" name="abizena" />
            </div>

            <div class="form-row">
                <label>Email-a</label>
                @error('email')
                    <span class="error">{{ $message }}</span>
                @enderror
                <br>
                <input type="text" name="email" />
            </div>

            <button type="submit"><i class="fa-solid fa-plus"></i> Sortu Kotxea</button>
        </form>
    </div>
@endsection
