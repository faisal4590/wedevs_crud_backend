<?php

namespace App\Http\Controllers\DAL;

use App\Products;

class DeleteDAL
{

    public function deleteProduct($product_id)
    {
        /// delete the video
        $product = Products::find($product_id);
        $product->delete();
        // dd($product);

        if (!empty($product)) {
            return true;
        } else {
            return false;
        }
    }
}
