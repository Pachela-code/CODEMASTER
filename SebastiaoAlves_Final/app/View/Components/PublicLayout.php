<?php

namespace App\View\Components;

use App\Models\Banner;
use App\Models\Book;
use App\Models\SiteInformation;
use Illuminate\View\Component;

class PublicLayout extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('layouts.public', [
            'banners' => Banner::all(),
            'books' => Book::all(),
            'site_information' => SiteInformation::all()->first()
        ]);
    }
}
