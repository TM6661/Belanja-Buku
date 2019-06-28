<?php

namespace App\Models;


use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Models;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'price'];

    public function images()
    {
        return $this->belongsToMany('App\Models\Image', 'products_image');
    }

    public function reviews()
    {
        return $this->hasMany('App\Models\ProductReview', 'product_id');
    }

    public function productReviews(Request $request)
    {
        return $this->hasMany('App\Models\ProductReviews', 'product_id');
    }


        public function orderProducts($order_by)
    {
        $query = DB::table('products');
        
        if ($order_by == 'best_seller')
    	{
    		$query   ->leftJoin('order_items', 'order_items.product_id','=','products.id')
                        ->select(DB::raw('sum(order_items.quantity) as quantity, products.*'))
                        ->groupBy('products.id','products.user_id','products.name','products.price','products.description','products.image_url','products.video_url','products.category_id','view_count','products.created_at','products.updated_at')
                        ->orderBy('quantity','desc');
                    
    	}

        else if ($order_by == 'terbaik')
        {
            $query  ->leftJoin('product_reviews', 'product_reviews.product_id','=','products.id')
                    ->select(DB::raw('avg(product_reviews.rating) as rating, products.*'))
                    ->groupBy('products.id','products.user_id','products.name','products.price','products.description','products.image_url','products.video_url','products.category_id','view_count','products.created_at','products.updated_at')
                    ->orderBy('rating','desc');
        }

    	else if ($order_by == 'terbaru')
    	{
    		$query->orderBy('created_at','desc');
    	}
    	else if ($order_by == 'termurah')
    	{
    		$query->orderBy('price','asc');
    	}
    	else if ($order_by == 'termahal')
    	{
            $query->orderBy('price','desc');
        }
        else if ($order_by == 'viewer')
        {
            $query->orderBy('view_count','desc');
        }
        else if ($order_by == 'sejarah')
        {
            $query->where('category_id', 1);
        }else if ($order_by == 'novel'){
            $query->where('category_id', 2);
        }
        
        return $query->paginate(3);
    }
    public function orderProductAdmin($order_by, $user_id)
    {
         $query = DB::table('products');
        
        if ($order_by == 'best_seller')
        {
            $query   ->leftJoin('order_items', 'order_items.product_id','=','products.id')
                        ->select(DB::raw('sum(order_items.quantity) as quantity, products.*'))
                        ->groupBy('products.id','products.user_id','products.name','products.price','products.description','products.image_url','products.video_url','view_count','products.category_id','products.created_at','products.updated_at')
                        ->orderBy('quantity','desc');
                    
        }

        else if ($order_by == 'terbaik')
        {
            $query  ->leftJoin('product_reviews', 'product_reviews.product_id','=','products.id')
                    ->select(DB::raw('avg(product_reviews.rating) as rating, products.*'))
                    ->groupBy('products.id','products.user_id','products.name','products.price','products.description','products.image_url','products.video_url','view_count','products.category_id','products.created_at','products.updated_at')
                    ->orderBy('rating','desc');
        }

        else if ($order_by == 'terbaru')
        {
           $query->orderBy('created_at','desc');
        }

        else if ($order_by == 'termurah')
        {
           $query->orderBy('price','asc');
        }

        else if ($order_by == 'termahal')
        {
            $query->orderBy('price','desc');
        }
        else if ($order_by == 'viewer')
        {
            $query->orderBy('view_count','desc');
        }
        
        
       return $query->where('products.user_id', $user_id)->get();
    }
}
