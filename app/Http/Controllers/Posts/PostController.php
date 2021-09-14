<?php

namespace App\Http\Controllers\Posts;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Kurianbenny\Crm\Helpers\CrmHelper;

class PostController extends Controller
{
    //

    public function index(){

        //echo "this is from app";

        $params = array(array(1,2,3),"test");

        CrmHelper::getMethod('SendMail',$params);

    }

}
