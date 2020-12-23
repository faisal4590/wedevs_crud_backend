<?php

namespace App\Http\Controllers\DAL;

use Illuminate\Support\Facades\Response;
use App\Products;

class ViewDAL
{
    public function fetchProducts()
    {
        $products = Products::orderBy('id', 'desc')
            ->get();
        if (!empty($products)) {
            return $products->toArray();
        } else {
            return NULL;
        }
    }

    public function fetchUpdatedProducts()
    {
        $products = Products::orderBy('id', 'desc')
            ->get();
        if (!empty($products)) {
            return $products->toArray();
        } else {
            return NULL;
        }
    }
}
