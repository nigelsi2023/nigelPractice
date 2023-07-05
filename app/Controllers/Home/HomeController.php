<?php
namespace App\Controllers\Home;

use App\Config\Mail;
use App\Services\Request;
use App\Controllers\Controller;
use App\Models\Website\Website;

class HomeController extends Controller {
    public function index() {
        return view('guest.home.index');
    }

    // public function show(int $id, string $slug) {
    //     dd([$id, $slug]);
    // }
    public function show(Request $request, int $id, string $slug) {
        dd([$id, $slug, $request]);
    }

    public function store(Request $request) {
        dd($request->all());
    }
}
