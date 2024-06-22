<?php

namespace App\View\Components\Transaction;

use Illuminate\View\Component;

class TableDetails extends Component
{
    public $details;
    public $id;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($details, $id)
    {
        $this->details = $details;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.transaction.table-details');
    }
}
