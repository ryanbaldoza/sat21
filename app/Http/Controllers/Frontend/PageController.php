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
    
    public function createservice()
    {
       return view( 'frontend/pages/createservice' );
    }

    public function choosecategory()
    {
       return view( 'frontend/pages/choosecategory' );
    }

    public function applytags()
    {
       return view( 'frontend/pages/applytags' );
    }
    public function signup_for_serviceprovider()
    {
       return view( 'frontend/registration/serviceprovider' );
    }
    public function signup_for_serviceprovider_form()
    {
       return view( 'frontend/registration/reg-form' );
    }
}
