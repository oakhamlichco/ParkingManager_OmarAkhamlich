<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autoa;
use App\Models\Erabiltzailea;
use Illuminate\Support\Facades\DB;


class AutoaController extends Controller
{
    public function index()
    {
        $autoak = Autoa::lortu();
        return view('autoaLista')-> with( 'autoa', $autoak);
    }

    public function store(Request $request)
    {

        $request->validate([
            'beraz'   => 'required',
            'modeloa' => 'required',
        ],
        [
            'beraz.required'   => 'Marka sartu behar duzu!',
            'modeloa.required' => 'Modeloa sartu behar duzu!',
        ]);

       

        $plaka = $request-> input('plaka', '9999aaa');
        $beraz = $request ->input('beraz');
        $modeloa = $request -> input('modeloa');

        $erabiltzaileaId = $request->input('erabiltzailea_id');

        // 
        if (empty($erabiltzaileaId)) {
            $izena  = $request->input('izena');
            $abizena= $request->input('abizena');
            $email  = $request->input('email'); 


            $erabiltzaile = new Erabiltzailea();
            $erabiltzaile->izena  = $izena;
            $erabiltzaile->abizena= $abizena;
            $erabiltzaile->email  = $email;
            $erabiltzaile->save();

            $erabiltzaileaId = $erabiltzaile->id;
        }

        $autoa = new Autoa;
        $autoa->Plaka           = $plaka;
        $autoa->Beraz           = $beraz;
        $autoa->Modeloa         = $modeloa;
        $autoa->erabiltzaile_id = $erabiltzaileaId;
        $autoa->save();

        return redirect('/');
    }

    public function delete(string $id)
    {
        $autoEzabatu = Autoa::find($id);
        $autoEzabatu->delete();

        return redirect('/');
    }

    public function create()
    {
        $erabiltzaileak = DB::table('erabiltzaileak')->get();

        return view('autoaCreate')->with('erabiltzaileak', $erabiltzaileak);
    }

    public function bilatu()
    {
        return view('bilatuMatrikula');
    }

    //7. puntua betetzeko
    public function search(Request $request)
    {
        $matrikula = $request -> input("matrikula");
        $aurkituta = DB::table('cars') ->where('Plaka', 'like','%'.$matrikula.'%' )->get();

        return view('bilatuMatrikula')->with('emaitza', $aurkituta);
    }

    public function bilaketaAurreratua(Request $request)
    {
        $erabiltzaileak = Erabiltzailea::all();

        $data = $request->input('data');             
        $erabiltzaileaId = $request->input('erabiltzailea_id');

        $autoak = Autoa::query()->with('erabiltzailea');

        if ($data) {
            $autoak->whereDate('created_at', $data);
        }

        if ($erabiltzaileaId) {
            $autoak->where('erabiltzaile_id', $erabiltzaileaId);
        }

        $emaitza = $autoak->get();

        return view('bilaketaAurreratua', compact('erabiltzaileak', 'emaitza', 'data', 'erabiltzaileaId'));
    }


}
