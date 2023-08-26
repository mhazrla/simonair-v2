<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Logdata extends Model
{
    use HasFactory;
    protected $fillable = ['alat_id', 'status', 'nama_alat', 'ph', 'suhu', 'amonia', 'tss', 'tds', 'salinitas'];
    protected $guarded = [];

    public function dashboard(): BelongsTo
    {
        return $this->belongsTo(Dashboard::class, 'alat_id', 'id');
    }
}
