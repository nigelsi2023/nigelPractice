<?php
namespace App\Controllers\Website;

use App\Services\Alert;
use App\Services\Request;
use App\Controllers\Controller;
use App\Models\Website\Website;

class WebsiteController extends Controller {
    public function index() {
        $websites = Website::all();
        return view('guest.website.index', compact('websites'));
    }

    public function store(Request $request) {
        // dd($request->all());
        $website = new Website();
        $website->name = $request->name;
        $website->url = $request->url;
        $website->save();

        Alert::success('Website Created Successfully');
        return redirect_back();
    }
    
    public function show(Request $request, int $id, string $slug) {
        dd([$id, $slug, $request]);
    }
}
