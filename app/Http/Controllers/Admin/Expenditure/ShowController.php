<?php

namespace App\Http\Controllers\Admin\Expenditure;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(User $user){
        return view('admin.user.show', compact('user'));
    }
}
