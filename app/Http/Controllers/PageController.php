<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function pageEcommerce(){
        return view('app.ecommerce.orders_ecommerce');
    }
    public function pageShippingQuoter(){
        return view('app.shipping_quoter.shipping_quoter');
    }

    public function pageSalesPackagingMaterial(){
        return view('app.sales_packaging_material.sales_packaging_material');
    }
}
