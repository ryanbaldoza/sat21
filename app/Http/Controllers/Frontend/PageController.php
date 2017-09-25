<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Routing\Controller as BaseController;

class PageController extends BaseController
{
    public function home()
    {
    	return view( 'frontend/pages/homepage' );
    }

    public function aboutus()
    {
    	return view( 'frontend/pages/aboutus' );
    }

    public function howitworks()
    {
    	return view( 'frontend/pages/howitworks' );
    }

    public function advertiser()
    {
    	return view( 'frontend/pages/advertiser' );
    }

    public function contactus()
    {
	   return view( 'frontend/pages/contactus' );
    }

    public function policy()
    {
       return view( 'frontend/pages/policy' );
    }
}
