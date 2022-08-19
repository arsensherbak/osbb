<?php

namespace App\Http\Controllers\Admin\Expenditure;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UpdateRequest;
use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, User $user){
        $data = $request->validated();
        $user->update($data);
        return view('admin.user.show', compact('user'));
    }
}
