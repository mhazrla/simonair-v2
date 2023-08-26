<?php

namespace App\Http\Controllers;

use App\Models\Logdata;
use Illuminate\Http\Request;

class LogdataController extends Controller
{
    public function show($id)
    {
        $logs = Logdata::where('alat_id', $id)->paginate(10);
        if ($logs->isEmpty()) {
            abort(404);
        }
        return view('Logdata/Detail', ['logs' => $logs]);
    }
}
