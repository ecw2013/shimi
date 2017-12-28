<?php

namespace App\Http\Controllers;

use App\Models\News;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('news.index', [
            'newses' => News::query()->paginate(config('app.paginate_limit', 6)),
            'page' => 'news',
            'keywords' => config('app.keywords'),
            'description' => config('app.description'),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param News $news
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function show(News $news)
    {
        return view('news.show', [
            'news' => $news,
            'page' => 'news',
            'keywords' => $news->keywords,
            'description' => $news->description,
        ]);
    }
}
