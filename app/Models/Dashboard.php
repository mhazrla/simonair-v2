<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Dashboard extends Model
{
    use HasFactory, HasUuids;
    protected $fillable = ['status', 'nama_alat', 'ph', 'suhu', 'amonia', 'tss', 'tds', 'salinitas'];
    protected $guarded = [];

    public function logdata(): HasOne
    {
        return $this->hasOne(Logdata::class);
    }
}
