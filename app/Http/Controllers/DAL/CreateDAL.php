<?php

namespace App\Http\Controllers\DAL;

use Illuminate\Support\Facades\Response;
use App\Products;
use DB;

class CreateDAL
{
    public function addProduct($request)
    {
        $form_data = array(
            'title'  => $request->title,
            'description'  => $request->description,
            'price'  => $request->price,
            'image' => $request->image,
        );

        $product = Products::create($form_data);

        if (!empty($product)) {
            return $product->toArray();
        } else {
            return NULL;
        }
    }
}
