<?php

namespace App\Http\Controllers\Admin\News;

use App\Http\Controllers\Controller;
use App\Http\Requests\News\UpdateRequest;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, News $news){
        $data = $request->validated();
        if(isset($data['image'])){
            $data['image'] = Storage::disk('public')->put('/image', $data['image']);
        }
        $news->update($data);
        return view('admin.news.show', compact('news'));
    }
}
