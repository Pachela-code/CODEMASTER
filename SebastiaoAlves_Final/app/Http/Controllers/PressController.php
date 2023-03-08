<?php

namespace App\Http\Controllers;

use App\Models\Press;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class PressController extends Controller
{
    public function index()
    {
        return view('presses.index', [
            'presses' => Press::all()
        ]);
    }

    public function create()
    {
        return view('presses.create');
    }

    public function edit(Press $press)
    {
        return view('presses.edit', [
            'press' => $press
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:100',
            'text' => 'required|string',
            'image' => 'nullable|file|mimes:png,jpg,webp,jpeg|max:3000'
        ]);

        DB::transaction(function () use ($request) {
            $press =  Press::create([
                'title' => $request->title,
                'text' => $request->text,
            ]);

            if ($request->image) {
                $pressMedia = $press->media()->create();
                $pressMedia->baseMedia()->associate(
                    $pressMedia->addMedia($request->file('image'))->toMediaCollection()
                )->save();
            }
        });

        return Redirect::route('press.index')->with('status', 'press-created');
    }

    public function update(Request $request, Press $press)
    {
        $request->validate([
            'title' => 'required|string|max:225',
            'text' => 'required|string',
            'image' => 'nullable|file|mimes:png,jpg,webp,jpeg|max:3000',
        ]);

        DB::transaction(function () use ($request, $press) {
            $press->update([
                'title' => $request->title,
                'text' => $request->text,
            ]);

            if ($request->image) {
                if ($press->media) {
                    $press->media->delete();
                }
                $pressMedia = $press->media()->create();

                $pressMedia->baseMedia()->associate(
                    $pressMedia->addMedia($request->file('image'))->toMediaCollection()
                )->save();
            }
        });

        return Redirect::route('press.edit', $press->id)->with('status', 'press-updated');
    }

    public function destroy(Press $press)
    {
        DB::transaction(function () use ($press) {
            if ($press->media) {
                $press->media->delete();
            }

            $press->delete();
        });

        return Redirect::route('press.index')->with('status', 'press-deleted');
    }
}
