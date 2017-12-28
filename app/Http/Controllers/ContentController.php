<?php

namespace App\Http\Controllers;


use App\Http\Requests\ContactUsRequest;
use App\Models\Contact;
use App\Models\News;
use App\Models\Product;

class ContentController extends Controller
{
    public function homePage()
    {
        return view('home', [
            'latest_news' => News::query()
                ->orderBy('created_at', 'DESC')
                ->first(),
            'latest_product' => $product = Product::query()
                ->orderBy('created_at', 'DESC')
                ->first(),
            'page' => 'home',
            'keywords' => $product->keywords,
            'description' => $product->description,
        ]);
    }

    public function aboutUs()
    {
        return view('about_us', [
            'page' => 'about_us',
            'keywords' => config('app.keywords'),
            'description' => config('app.description'),
        ]);
    }

    public function contactUs()
    {
        return view('contact_us', [
            'page' => 'contact_us',
            'keywords' => config('app.keywords'),
            'description' => config('app.description'),
        ]);
    }

    public function storeContactUs(ContactUsRequest $request)
    {
        Contact::query()->create($request->all());

        return response()->json(['success']);
    }
}
