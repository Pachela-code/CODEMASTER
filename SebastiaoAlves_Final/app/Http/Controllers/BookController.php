<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class BookController extends Controller
{
    public function index()
    {
        return view('books.index', [
            'books' =>  Book::all()
        ]);
    }

    public function create()
    {
        return view('books.create');
    }

    public function edit(Book $book)
    {
        return view('books.edit', [
            'book' => $book
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:100',
            'text' => 'required|string',
            'is_featured' => 'nullable',
            'image' => 'required|file|mimes:png,jpg,webp,jpeg|max:3000'
        ]);

        if (Book::where('is_featured', true)->count() >= 3 && $request->is_featured) {
            return Redirect::back()->withInput($request->all())->with('status', 'max-featured');
        }

        DB::transaction(function () use ($request) {
            $book =  Book::create([
                'title' => $request->title,
                'text' => $request->text,
                'is_featured' => $request->is_featured ?? false
            ]);

            $bookMedia = $book->media()->create();
            $bookMedia->baseMedia()->associate(
                $bookMedia->addMedia($request->file('image'))->toMediaCollection()
            )->save();
        });


        return Redirect::route('books.index')->with('status', 'book-created');
    }

    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title' => 'required|string|max:225',
            'text' => 'required|string',
            'is_featured' => 'nullable',
            'image' => 'nullable|file|mimes:png,jpg,webp,jpeg|max:3000',
        ]);

        if (Book::all()->except($book->id)->where('is_featured', true)->count() >= 3  && $request->is_featured) {
            return Redirect::back()->withInput($request->all())->with('status', 'max-featured');
        }
        DB::transaction(function () use ($request, $book) {
            $book->update([
                'title' => $request->title,
                'text' => $request->text,
                'is_featured' => $request->is_featured ?? false
            ]);

            if ($request->image) {
                if ($book->media) {
                    $book->media->delete();
                }
                $bookMedia = $book->media()->create();

                $bookMedia->baseMedia()->associate(
                    $bookMedia->addMedia($request->file('image'))->toMediaCollection()
                )->save();
            }
        });

        return Redirect::route('books.edit', $book->id)->with('status', 'book-updated');
    }

    public function destroy(Book $book)
    {
        DB::transaction(function () use ($book) {
            if ($book->media) {
                $book->media->delete();
            }

            $book->delete();
        });

        return Redirect::route('books.index')->with('status', 'book-deleted');
    }
}
