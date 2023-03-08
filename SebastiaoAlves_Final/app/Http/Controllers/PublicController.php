<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Press;
use Illuminate\Http\Request;
use App\Models\SiteInformation;

class PublicController extends Controller
{
    public function home()
    {
        return view(
            'public.home',
            [
                'site_information' => SiteInformation::first(),
                'featured_books' => Book::where('is_featured', true)->get()
            ]
        );
    }

    public function autor()
    {
        return view('public.autor', [
            'author' => SiteInformation::first()
        ]);
    }

    public function livros(Book $book)
    {
        return view('public.livros', [
            'book' => $book
        ]);
    }

    public function imprensa()
    {
        return view('public.imprensa', [
            'presses' => Press::latest()->paginate(2)
        ]);
    }

    public function contactos()
    {
        return view('public.contactos', [
            'site_information' => SiteInformation::first(),
        ]);
    }
}
