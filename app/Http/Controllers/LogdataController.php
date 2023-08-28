<?php

namespace App\Http\Controllers;

use App\Models\Logdata;
use Illuminate\Http\Request;

class LogdataController extends Controller
{
    public function show($id)
    {
        $logs = Logdata::where('alat_id', $id)->orderBy('created_at', 'desc')->paginate(50);
        if ($logs->isEmpty()) {
            abort(404);
        }
        return view('Logdata/Detail', ['logs' => $logs]);
    }
}
