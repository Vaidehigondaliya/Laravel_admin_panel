<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Datatables;
use Validator;
use URL;

class ProductController extends Controller
{
    public function addProduct(){
        // function to add product
        return view("admin.views.add_product");
    }
    public function listProduct(){
        // function to list product
        return view("admin.views.list_product");
    } 
    public function listallProduct(){
        $products = Product::query();
        return Datatables::of($products)
        ->editColumn("image", function($products) {

            return '<img src="' . $products->image . '" style="height:100px;width:100px;"/>';
        })
        ->editColumn("action", function($products) {
            return '<a href="'.URL::to('/edit-product/'.$products->id).'" class="btn btn-info class-product-edit" data-id="' . $products->id . '">Edit</a>
            <a href="javascript:void(0)" class="btn btn-danger class-product-delete" data-id="' . $products->id . '">Delete</a>';
        })
        ->rawColumns(["action","image"])
        ->make(true);
    }
    public function saveProduct(Request $request){
        // dd($request->all());
        $validator = Validator::make(array(
            "name" => $request->name
                ), array(
            "name" => "required|unique:products"
        ));
    
        if ($validator->fails()) {

            return redirect("add-product")->withErrors($validator)->withInput();
        } else {
            // dd($request->all());

            // successfully we have passed our form
            $products = new Product;
            $products->name = $request->name;
            $products->description = $request->description;

            $valid_images = array("png", "jpg", "jpeg", "gif");

            if ($request->hasFile("image") && in_array($request->image->extension(), $valid_images)) {

                $image = $request->image;
                $imageName = time() . "." . $image->getClientOriginalName();
                $image->move("resource/assets/images/products/", $imageName);
                $uploadedImage = "resource/assets/images/products/" . $imageName;
                $products->image = $uploadedImage;
            }
            $products->features = $request->features;

            $products->save();

            $request->session()->flash("message", "Products has been created successfully");

            return redirect("add-product");
        }
    }

    public function deleteProduct(Request $request){
        $id = $request->delete_id;
        $product_data = Product::find($id);

        if (isset($product_data->id)) {
            $product_data->delete();
            echo json_encode(array("status" => 1, "message" => "Product deleted successfully"));
        } else {
            echo json_encode(array("status" => 0, "message" => "Product doesnot exists"));
        }
        die();
    }
    public function editProduct($id = null){
        // function to edit product
        $products = Product::find($id);
        return view("admin.views.edit_product",["name"=>$products]);
    }
    public function editsaveProduct(Request $request){

        $update_id = $request->update_id;
        
        // successfully we have passed our form
        $products = Product::find($update_id);
        $products->name = $request->name;
        $products->description = $request->description;

        $valid_images = array("png", "jpg", "jpeg", "gif");

            if ($request->hasFile("image") && in_array($request->image->extension(), $valid_images)) {

                $image = $request->image;
                $imageName = time() . "." . $image->getClientOriginalName();
                $image->move("resource/assets/images/products/", $imageName);
                $uploadedImage = "resource/assets/images/products/" . $imageName;
                $products->image = $uploadedImage;
            }
            
        $products->features = $request->features;

        $products->save();

        $request->session()->flash("message", "Products has been updated successfully");

        return redirect("edit-product/". $update_id);
       
    }
}
