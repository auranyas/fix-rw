<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    use HasFactory;
    protected $table = 'wargas';
    protected $fillable = [
        'nama',
        'usia',
        'nik',
        'jk',
        'rt_id'
    ];
    public function rt(){
        return $this->belongsTo(Rt::class);
    }
}
