<?php

namespace App\Http\Controllers\Admin\Expenditure;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke(){

        return view('admin.expenditure.create');
    }
}
