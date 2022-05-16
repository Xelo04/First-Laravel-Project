<?php

namespace App\Http\Controllers;

use App\Models\Site;
use Illuminate\Http\Request;

class SitesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $sites = Site::all();
        return view('sites/index', compact('sites'));
    }
    public function add()
    {
        return view('sites/add');
    }
    public function save(Request $request)
    {
        Site::create($request->all());
        $sites = Site::all();
        return view('sites/index', compact('sites'));
    }
    public function show(Site $site)
    {
        return view('sites/show', compact('site'));
    }
    public function user()
    {
        return view('sites/user');
    }
}
