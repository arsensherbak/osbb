<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Violation extends Model
{
    use HasFactory;
    protected $guarded = false;

    public function rule(){
        return $this->belongsTo(Rule::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
