<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// importing DALs
use App\Http\Controllers\DAL\CreateDAL;
use App\Http\Controllers\DAL\ViewDAL;
use App\Http\Controllers\DAL\EditDAL;
use App\Http\Controllers\DAL\DeleteDAL;

// importing requests
use App\Http\Requests\AddProductRequest;
use App\Http\Requests\EditProductRequest;

class ProductController extends Controller
{
    public function __construct()
    {
        // authenticate
        $this->middleware('jwt');
        // initiating DALs
        $this->create_dal = new CreateDAL;
        $this->edit_dal = new EditDAL;
        $this->view_dal = new ViewDAL;
        $this->delete_dal = new DeleteDAL;
    }
    public function addProduct(AddProductRequest $request)
    {

        $added_product = $this->create_dal->addProduct($request);

        if (!empty($added_product)) {
            return response($added_product, 200);
        } else {
            return response("failed to add product!", 400);
        }
    }

    public function fetchProducts()
    {
        $products = $this->view_dal->fetchProducts();

        if (!empty($products)) {
            return response($products, 200);
        } else {
            return response("No product found!", 400);
        }
    }

    public function editProduct(EditProductRequest $request)
    {
        $edited_product = $this->edit_dal->editProduct($request);

        if (!empty($edited_product)) {
            return response($edited_product, 200);
        } else {
            return response("Failed to edit product!", 400);
        }
    }

    public function fetchUpdatedProducts()
    {
        $products = $this->view_dal->fetchUpdatedProducts();

        if (!empty($products)) {
            return response($products, 200);
        } else {
            return response("No product found!", 400);
        }
    }

    public function deleteProduct(Request $request)
    {
        $product_deletion_status = $this->delete_dal->deleteProduct($request->product_id);

        if ($product_deletion_status == true) {
            return response("Product deleted!", 200);
        } else {
            return response("Falied to delete product!", 400);
        }
    }
}
