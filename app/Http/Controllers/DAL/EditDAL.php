<?php

namespace App\Http\Controllers\DAL;

use Illuminate\Support\Facades\Response;
use App\Products;

class EditDAL
{
    public function editProduct($request)
    {
        $product = Products::findOrFail($request->id);

        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        if (isset($request->image) && $request->image != '') {
            $product->image = $request->image;
        }

        $product->save();

        if (!empty($product)) {
            return $product->toArray();
        } else {
            return NULL;
        }
    }
}
