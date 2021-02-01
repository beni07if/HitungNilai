<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Nilai extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tugas',
        'pr',
        'uts',
        'uas',
    ];

    public function User(){
        return $this->hasMany(Nilai::class);
    }
}
