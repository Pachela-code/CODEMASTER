<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\BannerMedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Validator;

class BannerController extends Controller
{
    public function index()
    {

        return view('banner.index', [
            'banners' => Banner::all()
        ]);
    }

    public function create()
    {
        return view('banner.create');
    }

    public function edit(Banner $banner)
    {
        return view('banner.edit', [
            'banner' => $banner
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:225',
            'remark' => 'required|string|max:225',
            'text' => 'required|string',
            'link' => 'required',
            'desktop_image' => 'required|file|mimes:png,jpg,webp,jpeg|max:3000',
            'mobile_image' => 'required|file|mimes:png,jpg,webp,jpeg|max:3000'
        ]);


        DB::transaction(function () use ($request) {
            $banner =  Banner::create([
                'title' => $request->title,
                'remark' => $request->remark,
                'text' => $request->text,
                'link' => $request->link
            ]);


            $bannerDesktopMedia = $banner->media()->create([
                'type' => 'desktop'
            ]);

            $bannerDesktopMedia->baseMedia()->associate(
                $bannerDesktopMedia->addMedia($request->file('desktop_image'))->toMediaCollection()
            )->save();

            $bannerMobileMedia = $banner->media()->create([
                'type' => 'mobile'
            ]);

            $bannerMobileMedia->baseMedia()->associate(
                $bannerMobileMedia->addMedia($request->file('mobile_image'))->toMediaCollection()
            )->save();
        });


        return Redirect::route('banners.index')->with('status', 'banner-created');
    }

    public function update(Request $request, Banner $banner)
    {
        $request->validate([
            'title' => 'required|string|max:225',
            'remark' => 'required|string|max:225',
            'text' => 'required|string',
            'link' => 'required',
            'desktop_image' => 'nullable|file|mimes:png,jpg,webp,jpeg|max:3000',
            'mobile_image' => 'nullable|file|mimes:png,jpg,webp,jpeg|max:3000'
        ]);


        DB::transaction(function () use ($request, $banner) {

            $banner->update([
                'title' => $request->title,
                'remark' => $request->remark,
                'text' => $request->text,
                'link' => $request->link
            ]);



            if ($request->desktop_image) {
                if ($banner->media()->where('type', 'desktop')->first()) {
                    $banner->media()->where('type', 'desktop')->first()->delete();
                }
                $bannerDesktopMedia = $banner->media()->create([
                    'type' => 'desktop'
                ]);

                $bannerDesktopMedia->baseMedia()->associate(
                    $bannerDesktopMedia->addMedia($request->file('desktop_image'))->toMediaCollection()
                )->save();
            }

            if ($request->mobile_image) {
                if ($banner->media()->where('type', 'mobile')->first()) {
                    $banner->media()->where('type', 'mobile')->first()->delete();
                }
                $bannerMobileMedia = $banner->media()->create([
                    'type' => 'mobile'
                ]);

                $bannerMobileMedia->baseMedia()->associate(
                    $bannerMobileMedia->addMedia($request->file('mobile_image'))->toMediaCollection()
                )->save();
            }
        });

        return Redirect::route('banners.edit', $banner->id)->with('status', 'banner-updated');
    }

    public function destroy(Banner $banner)
    {
        DB::transaction(function () use ($banner) {
            if ($banner->media()->where('type', 'desktop')->first()) {
                $banner->media()->where('type', 'desktop')->first()->delete();
            }
            if ($banner->media()->where('type', 'mobile')->first()) {
                $banner->media()->where('type', 'mobile')->first()->delete();
            }
            $banner->delete();
        });

        return Redirect::route('banners.index')->with('status', 'banner-deleted');
    }
}
