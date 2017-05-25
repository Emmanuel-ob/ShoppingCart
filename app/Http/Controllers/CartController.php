<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class CartController extends Controller
{
	private $product;
    
   
    public function __construct(Product $productModel){
        //parent::__construct();
        $this->product = $productModel;
        
    }
    

     public function add(Request $request, $id)
{
    $product_from_db = Product::find($id);
    $product = [];
    
    //you can add all data you need like this etc...
    $itemId = $product_from_db->id;
    $itemName = $product_from_db->name;
    $itemPrice = $product_from_db->price;
    $quantity = $request->quantity;   
    $checker = "product.$itemName";
    $product = ['name' => $itemName, 'price' => $itemPrice, 'quantity' => $quantity, 'id' => $itemId];
    if (\Session::has($checker)){
        \Session::pull($checker);
        $product['quantity'] = $product['quantity'] + $quantity;
        \Session::put($checker, $product);
    } else {
      \Session::put($checker, $product);
        }
       //   $data = \Session::get('product');
       // dd($data);    
    return redirect()->back();
}

    public function show()
    {  
    $items = $this->product->all();  
    $products = session('cart');
    return view('cart', compact('products', 'items'));
    }

    public function showCart()
    {    
    $cart_items = session('cart');
    return view('viewCart', compact('cart_items'));
    }

    // public function store(Request $request)

    // {
    //     $productName = $request->product_title;
    //     $productPrice = $request->product_price;

    //     $cart = [];
    //     $top = "cart.$productName";
    //     $cart = ['name' => $productName, 'price' => $productPrice, 'quantity' => 1];

    //     if (\Session::has($top)){
    //       \Session::pull($top);
    //       $cart['quantity'] = $cart['quantity'] + 1;
    //       \Session::put($top, $cart);
    //     } else {
    //       \Session::put($top, $cart);
    //     }
    //     //Redirect back to home page
    //     return redirect()->back();

    // }

}
