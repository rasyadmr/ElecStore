<?php

namespace App\View\Components\Product;

use Illuminate\View\Component;
use App\Models\Product;

class CardOwner extends Component
{
    public Product $product;

    /**
     * Create a new component instance.
     */
    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.product.card-owner');
    }
}
