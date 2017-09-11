<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Routing\Controller as BaseController;

class PageController extends BaseController
{
    public function index( $pageSlug )
    {
    	return view( 'frontend/pages/homepage' );
    }
}
