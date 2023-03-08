<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteInformation;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class SiteInformationController extends Controller
{
    public function edit()
    {
        return view('site-info.edit', [
            'site_information' => SiteInformation::first()
        ]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'author_image' => 'nullable|file|mimes:png,jpg,webp,jpeg|max:3000',
            'email' => 'required|email',
            'phone' => 'required|string|max:15',
            'address' => 'required|string|max:155',
            'author_name' => 'required|string|max:100',
            'author_text' => 'required|string',
            'latest_text' => 'nullable|string',
            'facebook_url' => 'required|string|max:100',
            'instagram_url' => 'required|string|max:100',
            'linkedin_url' => 'required|string|max:100',
        ]);


        DB::transaction(function () use ($request) {
            $info = SiteInformation::first();

            $info->update($request->all());


            if ($request->file('author_image')) {
                if (count($info->getMedia())) {
                    $info->getMedia()[0]->delete();
                }
                $info->addMedia($request->file('author_image'))->toMediaCollection();
            }
        });


        return Redirect::back()->with('status', 'information-updated');
    }
}
