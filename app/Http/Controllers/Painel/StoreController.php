<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Woocommerce;
class StoreController extends Controller
{
    //
    public function index()
    {
    	return view('painel.store.index');
    }

    public function orders()
    {
    	$result =  Woocommerce::get('orders');
		return view("painel.store.orders.list",compact("result"));
    }

    public function categories()
    {
    	$categories = Woocommerce::get('products/categories');
    	return view ("painel.store.categories.list",compact('categories'));
    }

    public function addProduct()
    {
    	$categories = Woocommerce::get('products/categories');
    	return view('painel.store.products.add',compact('categories'));
    }

    public function createProduct(Request $request)
    {
    	$data = [
    'name' => $request->name,
    'type' => 'simple',
    'regular_price' => $request->price,
    'description' => $request->content,
    'short_description' => $request->desc,
    'categories' => [
        [
            'id' => 9
        ],
        [
            'id' => 14
        ]
    ],
    'images' => [
        [
            'src' => 'http://demo.woothemes.com/woocommerce/wp-content/uploads/sites/56/2013/06/T_2_front.jpg',
            'position' => 0
        ],
        [
            'src' => 'http://demo.woothemes.com/woocommerce/wp-content/uploads/sites/56/2013/06/T_2_back.jpg',
            'position' => 1
        ]
    ]
];
	return Woocommerce::post('products',$data);
    }
}
