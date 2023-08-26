<?php

namespace App\Livewire;

use App\Models\Dashboard;
use Livewire\Component;

class FormAlat extends Component
{
    public $nama_alat;

    public function createAlat()
    {
        Dashboard::create([
            'nama_alat' => $this->nama_alat
        ]);
    }
    public function render()
    {
        $dashboard = Dashboard::all();
        return view('livewire.form-alat', ['dashboard' => $dashboard]);
    }
}
