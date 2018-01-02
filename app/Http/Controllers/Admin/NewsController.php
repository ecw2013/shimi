<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\NewsRequest;
use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.news.index', [
            'newses' => News::query()->paginate(20)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param NewsRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsRequest $request)
    {
        $news = News::query()->create($request->all());

        if ($request->hasFile('image')) {
            $news->picture_path = $request->file('image')->store('news');
            $news->save();
        }

        return redirect(route('admin.news.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param News $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        return view('admin.news.edit', ['news' => $news]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param NewsRequest $request
     * @param News $news
     * @return \Illuminate\Http\Response
     */
    public function update(NewsRequest $request, News $news)
    {
        $news->update($request->all());

        if ($request->hasFile('image')) {
            if (!is_null($news->picture_path)) {
                Storage::delete($news->picture_path);
            }
            $news->picture_path = $request->file('image')->store('news');
            $news->save();
        }

        return redirect(route('admin.news.edit', ['news' => $news]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param News $news
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(News $news)
    {
        if (!is_null($news->picture_path)) {
            Storage::delete($news->picture_path);
        }

        $news->delete();

        return redirect(route('admin.news.index'));
    }
}
