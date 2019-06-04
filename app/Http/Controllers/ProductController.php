<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show()
    {
        $detail = view('product/show');

        $content = view('common/layout',[
        'detail' => $detail
        ]);
        return $content;
    }
}
