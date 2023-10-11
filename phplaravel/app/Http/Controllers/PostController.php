<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Controllers\PostController;

class PostController extends Controller
{
    public function index(){
        return view('front_agency');
    }
    public function about(){
        $data['title']='About Us';
        return view('front_about',$data);
    }
    public function service(){
        $data['title']='Services';
        return view('front_service',$data);
    }
    public function package(){
        $data['title']='Packages';
        return view('front_package',$data);
    }
    public function distination(){
        $data['title']='Our desitination';
        return view('front_distination',$data);
    }
    public function booking(){
        $data['title']='Booking';
        return view('front_booking',$data);
    }
    public function team(){
        $data['title']='Our Guid';
        return view('front_team',$data);
    }
    public function testimonial(){
        $data['title']='Testimonial';
        return view('front_testimonial',$data);
    }
}

