<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ProductCategory;
use App\Product;
use Illuminate\Support\Facades\Storage;
use DB;

class AdminProductController extends Controller
{
    //
    public function product()
    {
        /*$data=Product::all();*/
    
        $data=DB::table('products')->leftJoin('product_categories','products.product_category_id','=','product_categories.id' )->select('products.id','products.product_name','products.product_category_id','product_categories.category_name','products.product_image','products.product_description','products.page_title','products.meta_keywords','products.meta_description')->whereNull('products.deleted_at')->get();
      /* $data=Product::with('ProductCategory')->get();
       print_r($data);
       die();*/
       
        $data= $data->toArray();
       /* print_r($data[1]->product_image);
        die();*/
        return view('admin.products.admin_product', compact('data'));
    }

    public function addProduct(Request $request)
    {
       
        /* echo "<pre>";
        print_r($request->toArray());
        die();*/
        $this->validate($request, [
            'product_name' => 'regex:/^[\pL\s\-\,\.\&\w-]+$/u|required', 
             'product_category_id' => 'numeric|required',
             'product_image'=>'mimes:jpeg,bmp,png|max:2048|required',
             'product_description'=> 'required'
        ]);
      
        $dublicate=Product::where('product_name',$request->product_name)->where('product_category_id',$request->product_category_id)->get();
        if(count($dublicate->toArray())!=0)
        {
            return back()->with('product_dup_err_msg','Product Already Available!');
        }

        $img=request()->product_image->getClientOriginalName();
        $img_path="products/".$img;
        
     //   $path=$request->product_image->storeAs('public/products',$img);
        $path=$request->product_image->storeAs('products',$img);

        $request=$request->toArray();
        $request['product_image']=$img_path;
        
        $flag=Product::create($request);
        if(isset($flag->id))
        {
            return redirect('/admin/product')->with('addProduct_success_msg','Product Added Successfully!');
        }
        else
        {
             return redirect('/admin/product')->with('addProduct_error_msg','Something Went Wrong!');
        } 
    }


    public function updateProduct($id,Request $request)
    {
         $this->validate($request, [
            'product_name' => 'regex:/^[\pL\s\-\,\.\&\w-]+$/u|required',
             'product_category_id' => 'numeric|required',
             'product_image'=>'mimes:jpeg,bmp,png|max:2048',
             'product_description'=> 'required'
            ]);

        $product=Product::find($id);
        $old_product_img_path=$product->product_image;

       if($request->product_image)
       {
        

      //  Storage::delete('public/'.$product->product_image);
        Storage::delete($product->product_image);

        $img=request()->product_image->getClientOriginalName();
        $img_path="products/".$img;
        
    //    $path=$request->product_image->storeAs('public/products',$img);
        $path=$request->product_image->storeAs('products',$img);

        $request=$request->toArray();
        $request['product_image']=$img_path;
       }
       else
       {
            $request=$request->toArray();
            $request['product_image']=$old_product_img_path;
            
       }

        $product->fill($request);
        $flag=$product->save();
        if(isset($flag))
        {
            return redirect('/admin/product')->with('updateProduct_success_msg','Product Update Successfully!');
        }
        else
        {
            return redirect('/admin/product')->with('updateProduct_error_msg','Something Went Wrong!');
        }    
    }


    public function deleteProduct($id)
    {
        /*echo "delete:".$id;
        die();*/

        $data=Product::find($id);
    //    Storage::delete('public/'.$data->product_image);
        Storage::delete($data->product_image);
        $flag=$data->delete();
        if(isset($flag))
        {
            return redirect('/admin/product')->with('deleteProduct_success_msg','Product Deleted Successfully!');
        }
        else
        {
             return redirect('/admin/product')->with('deleteProduct_error_msg','Something Went Wrong!');
        }
        
    }


     public function productForm($id = '')
    {
        $data = [];
        if ($id) {
            $data=Product::find($id);
   
        }

        $category=ProductCategory::all();
        $category=$category->toArray();
       /* echo "<pre>";
        print_r($category);
        die();*/
        return view('admin.products.product_form', compact('data','category'));
    }


    public function product_category()
    {
    	
        $product_categories=ProductCategory::all();
    	return view('admin.products.admin_product_category',compact('product_categories'));
    }




    public function addProductCategory(Request $request)
    {
        /*echo "<pre>";
        print_r($request->toArray());
        die();*/
        $this->validate($request, [
            'category_name' => 'regex:/^[\pL\s\-\,\.\&\w-]+$/u|required', 
             'image'=>'mimes:jpeg,bmp,png|max:2048',
             'description'=>'required',
        ]);
       /* $request_arr= $request->toArray();*/

        $img=request()->image->getClientOriginalName();
        $img_path="product_categories/".$img;
        
     //   $path=$request->image->storeAs('public/product_categories',$img);
        $path=$request->image->storeAs('product_categories',$img);

        $request_arr=$request->toArray();
        $request_arr['image']=$img_path;


        $flage=ProductCategory::create($request_arr);
        if(isset($flage))
        {
            return redirect('/admin/product-category')->with('addProductCategory_success_msg','Product Category Added Successfully!');
        }
        else
        {
            return redirect('/admin/product-category')->with('addProductCategory_error_msg','Something Went Wrong!');
        }
        
    }

    public function updateProductCategory($id,Request $request)
    {
        $this->validate($request, [
            'category_name' => 'regex:/^[\pL\s\-\,\.\&\w-]+$/u|required', 
            'image'=>'mimes:jpeg,bmp,png|max:2048',
            'description'=>'required',
        ]);

        $data=ProductCategory::find($id);

        $old_product_cat_img_path=$data->image;

       if($request->image)
       {
        
     //   Storage::delete('public/'.$data->image);
        Storage::delete($data->image);

        $img=request()->image->getClientOriginalName();
        $img_path="product_categories/".$img;
        
      //  $path=$request->image->storeAs('public/product_categories',$img);
        $path=$request->image->storeAs('product_categories',$img);

        $request=$request->toArray();
        $request['image']=$img_path;
       }
       else
       {
            $request=$request->toArray();
            $request['image']=$old_product_cat_img_path;
            
       }


      /*  $data->category_name=$request['category_name'];*/
         $data->fill($request);
        $flag=$data->save();
        if(isset($flag))
        {
            return redirect('/admin/product-category')->with('updateProductCategory_success_msg','Product Category Update Successfully!');
        }
        else
        {
            return redirect('/admin/product-category')->with('updateProductCategory_error_msg','Something Went Wrong!');
        }    
    }

    public function deleteProductCategory($id)
    {
        
       
        $products=Product::where('product_category_id',$id)->get();
        $products_arr=$products->toArray();
       

        $product_ids= array_column($products_arr, 'id');
        $product_image= array_column($products_arr, 'product_image');
       
        Product::destroy($product_ids);

        /*$cnt=count($product_ids);
        $img=[];
        for($i=0; $i<$cnt; $i++)
        {
            $img[$i]='public/'.$photos[$i];
        }

        
        Storage::delete($img);*/


        $data=ProductCategory::find($id);
        $flag=$data->delete();

        if(isset($flag))
        {
            return redirect('/admin/product-category')->with('deleteProductCategory_success_msg','Product Category Deleted Successfully!');
        }
        else
        {
             return redirect('/admin/product-category')->with('deleteProductCategory_error_msg','Something Went Wrong!');
        }
    }

   
    public function productCategoryForm($id = '')
    {
    	$data = [];
    	if ($id) {
    		$data=ProductCategory::find($id);
   
    	}
    	return view('admin.products.product_category_form', compact('data'));
    }

   

    

    

  

    
}
