<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\File;
use App\Models\Image;
use App\Models\Category;

use DB;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $productInstance= new Product();
        $products=$productInstance-> orderProductAdmin($request->get('order_by'), Auth::user()->id);
      
        // $product = Product::all();
        if ($request->ajax()) {
            return response()->json($products,200);
          }
        // $products = Product::where('user_id', '=', Auth::user()->id)->get();
        return view('admin.products.index', compact('products'));
    }

    // public function indexImage()
    // {
    //     $images = Product::select('image_url', '=', Auth::user()->id)->get();
    //     return view('admin.products.show', ['images' => $images]);
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        return view('admin.products.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate(request(), [
            'name' => 'required|unique:products,name',
            'price' => 'required|numeric',
            'description' => 'required',
        ]);


        //funsi store
        $product = new Product();
        $product->user_id = Auth::user()->id;
        $product->name = $request->post('name');
        $product->price = $request->post('price');
        $product->description = strip_tags($request->post('description'));
        
        if($request->filled('category')){
            $product->category_id=$request->post('category');
        }else {
            $product->category_id=0;
        }

        $product->save();

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $image = new Image();
                $image->image_title = $product->name;
                $image->image_src = $file->getClientOriginalName();
                $image->image_desc = $product->description;
                $product->images()->save($image);
                $file->move(public_path() . '/img', $image->image_src);
            }
        }

        return redirect('admin/products')->with('success', 'Product allready saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */ 
    public function show($id) 
    {
        // $product = Product::find($id);
        // $rating = $product->reviews()->avg('rating');
        // $descriptions =DB::table('product_reviews')
        //             ->join('users','product_reviews.user_id','=','users.id')
        //             ->join('products','product_reviews.product_id','=','products.id')
        //             ->select('product_reviews.description','product_reviews.created_at','users.name')
        //             ->where('product_reviews.product_id','=',$id)                  
        //             ->get();
        
        
        //     return view('show', compact('product','rating', 'descriptions'));

        // Without Rating
        $products = Product::find($id);
       
        return view('admin.products.show', compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $this->validate(request(), [
        //     'nameProduct' => 'required|unique:products,name',
        //     'descProduct' => 'required',
        //     'priceProduct' => 'required|numeric',
        // ]);

        $product = Product::find($id);
        $product->user_id = Auth::user()->id;
        $product->name = $request->get('nameProduct');
        $product->description = $request->get('descProduct');
        $product->price = $request->get('priceProduct');
        
        if($request->filled('category')){
            $product->category_id=$request->get('category');
        }else {
            $product->category_id=0;
        }

        $product->save();

        return redirect('admin/products')->with('success', 'Product is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect('admin/products')->with('success', 'Product deleted!');
    }


}
