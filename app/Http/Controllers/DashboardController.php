<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use App\Models\Logdata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Dashboard::orderBy('nama_alat', 'asc')->get();
        $title = 'Hapus alat';
        $text = "Apakah Anda yakin ingin menghapus alat ini?";
        confirmDelete($title, $text);
        return view("Dashboard.index", ['datas' => $datas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (auth()->user()->is_admin === false) abort(403);

        $validatedData = $this->validate(
            $request,
            ['nama_alat' => 'required']
        );

        $dashboard = Dashboard::create($validatedData);
        if ($dashboard) {
            Alert::success('Sukses!', 'Alat berhasil ditambahkan');
            return to_route('dashboard');
        } else {
            Alert::error('Error!', 'Alat gagal ditambahkan');
        }
        return to_route('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dashboard $dashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dashboard $dashboard)
    {
        return response()->json([
            'status' => 200,
            'dashboard' => $dashboard
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $id = $request->input('id-alat');
        $dashboard = Dashboard::find($id);

        $dashboard->nama_alat = $request->input('nama-alat');
        $updated = $dashboard->update();
        if ($updated) {
            Alert::success('Sukses!', 'Alat berhasil diperbarui');
            return to_route('dashboard');
        } else {
            Alert::error('Error!', 'Alat gagal diperbarui');
        }
        return to_route('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dashboard $dashboard)
    {
        if (auth()->user()->is_admin === false) abort(403);

        $dashboard->delete();
        alert()->success('Sukses!', 'Alat berhasil dihapus');
        return back();
    }

    public function getData(Request $request)
    {
        $alat_id = $request->segment(3);
        $ph = $request->segment(4);
        $suhu = $request->segment(5);
        $amonia = $request->segment(6);
        $tss = $request->segment(7);
        $tds = $request->segment(8);
        $salinitas = $request->segment(9);
        $status = 0;

        if ($suhu >= 25 && $suhu <= 27) {
            $amonia < 0.25 && $ph >= 6 or $ph <= 8 ?  $status = 1 : $status = 0;
        }

        $data = [
            "alat_id" => $alat_id,
            "ph" => $ph,
            "suhu" => $suhu,
            "amonia" => $amonia,
            "tss" => $tss,
            "tds" => $tds,
            "salinitas" => $salinitas,
            "status" => $status,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString()
        ];
        try {
            Dashboard::where('id', $alat_id)->firstOrFail()->update($data);

            Logdata::insert($data);
            return response()->json(['message' => 'Success'], 200);
        } catch (\Throwable $th) {
            return response()->json(['error' => 'Not Found'], 404);
        }
    }

    public function getSensorValue()
    {
        $dashboard = Dashboard::get();
        return response()->json($dashboard);
    }
}
