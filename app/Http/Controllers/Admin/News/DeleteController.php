<?php

namespace App\Http\Controllers\Admin\News;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DeleteController extends Controller
{
    public function __invoke(News $news){
        if(!empty($news->pimage)){
            Storage::disk('public')->delete('image', $news->image);
        }
    $news->delete();
        return redirect()->route('admin.news.index');
    }
}
