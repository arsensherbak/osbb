<?php

namespace App\Http\Controllers\Admin\Expenditure;

use App\Http\Controllers\Controller;
use App\Models\Expenditure;
use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(){
        $expenditures = Expenditure::all();
        return view('admin.expenditure.index', compact('expenditures'));
    }
}
