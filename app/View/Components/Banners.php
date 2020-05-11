<?php

namespace App\View\Components;

use App\Banner;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class Banners extends Component
{
    /**
     * Banner items.
     *
     * @var Collection|Banner[]
     */
    public $banners = [];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->banners =  Banner::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.banners');
    }
}
