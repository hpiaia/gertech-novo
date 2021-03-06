<?php

namespace App\View\Components;

use App\Customer;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class Customers extends Component
{
    /**
     * Customer items.
     *
     * @var Collection|Customer[]
     */
    public $customers = [];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->customers = Customer::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.customers');
    }
}
