<?php

namespace App\Models;

use Attribute;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['number'];

    public function season()
    {
        return $this->belongsTo(Season::class);
    }

    protected function watched(): Attribute
    {
        return new Attribute(
            get: function($watced)=> (bool) {
                retorna
            }
        );
    }
}
