<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Woocommerce;
class WoocommerceController extends Controller
{
    //
    public function getOrders()
    {

		

		$result =  Woocommerce::get('orders');
		

		return view("painel.store.orders",compact("result"));
    }

    public function getOrderDetail(Request $request)
    {
    	$order = Woocommerce::get('orders/'.$request->id);
        //dd($order);
    	return view('painel.store.order-detail',compact("order"));
    }

    public function getProducts()
    {
        $products = Woocommerce::get('products');
        return view('painel.store.products.list',compact('products'));
    }

    public function getProductDetail(Request $request)
    {

    }

    public function addProduct(Request $request)
    {
            //separador de tags
        /*$data = "kkk,sdsd,qsqd,dqdqd,dqdq,dqdq";
    $slice =  explode(',', $data);
foreach ($slice as $key ) {
    # code...
    echo $key."<br>";
}*/
        return $request->all();
    }
}
