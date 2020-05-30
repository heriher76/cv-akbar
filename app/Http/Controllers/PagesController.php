<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MyBio;
use App\AboutMe;
use App\Education;
use App\Address;
use App\Gallery;
use App\Portfolio;
use App\Skill;

class PagesController extends Controller
{
    public function index() {
    	$myBio = MyBio::first();
    	$myAbout = AboutMe::first();
    	$myAddress = Address::first();
    	$myEducations = Education::all();
    	$myPortfolios = Portfolio::all();
    	$myGalleries = Gallery::all();
    	$mySkills = Skill::all();

    	return view('front.index', compact('myBio', 'myAbout', 'myAddress', 'myGalleries', 'myPortfolios', 'mySkills', 'myEducations'));
    }
}
