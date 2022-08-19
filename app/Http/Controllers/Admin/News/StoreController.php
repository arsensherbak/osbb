<?php

namespace App\Http\Controllers\Admin\News;

use App\Http\Controllers\Controller;
use App\Http\Requests\News\StoreRequest;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request){
        $data = $request->validated();
        $data['image'] = Storage::disk('public')->put('/image', $data['image']);
        News::firstOrCreate($data);
        return redirect()->route('admin.news.index');

    }
}
