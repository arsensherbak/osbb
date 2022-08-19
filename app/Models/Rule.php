<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    use HasFactory;
    protected $guarded = false;

    public function violation(){
        return $this->hasOne(Violation::class);
    }
}
