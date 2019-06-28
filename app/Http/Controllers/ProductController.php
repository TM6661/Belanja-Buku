<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Image;
use App\Models\ProductReview;
use Auth;
use App\User;
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
        $productInstance = new Product();
        // $productInstance = DB::table('products')->paginate();
        $products = $productInstance->orderProducts($request->get('order_by'))->all();

        if($request->ajax()){
            return response()->json($products, 200);
        }
        return view('index', compact('products'));
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
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        $rating = $product->reviews()->avg('rating');
        $views = $product->increment('view_count');
        $descriptions =DB::table('product_reviews')
                    ->join('users','product_reviews.user_id','=','users.id')
                    ->join('products','product_reviews.product_id','=','products.id')
                    ->select('product_reviews.description','product_reviews.created_at','users.name')
                    ->where('product_reviews.product_id','=',$id)                  
                    ->get();
        
            return view('show', compact('product','rating', 'descriptions')); 
       
        
    }


    public function store(Request $request)
    {
        $productReview = new ProductReview();
        $productReview->user_id = Auth::user()->id;
        $productReview->product_id = $request->post('product_id');
        $productReview->description = $request->post('description');
        $productReview->rating = $request->post('rating');
        if ($productReview->rating > 5) {
            return redirect('/')->with('error', 'Rating must be 1 - 5');
        }
        $productReview->save(); 
        return back();
    }

    public function image($imageName)
    {
        $filePath = storage_path(env('PATH_IMAGE').'products/'.imageName);
        return Image::make($filePath)->response();
    }


}
