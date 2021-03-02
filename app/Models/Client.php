<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Unit;
class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'unit_id'
    ];
    public function unit_id(){
        return $this->belongsTo(Unit::class);
    }
}
