<?php

namespace App\Http\Controllers\Web;

use App\Product;
use App\ProductPacking;
use App\ProductPackingSpec;
use App\Transaction;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Cart;
use Request;
use Illuminate\Support\Facades\Auth as Auth;

class IndexController extends Controller
{
    /**
     * 网站前台首页
     */
    public function index()
    {
        return view('web.index');
    }
}
