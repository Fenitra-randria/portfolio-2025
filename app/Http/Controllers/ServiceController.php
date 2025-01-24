<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{

    public function index()
    {
        $services = Service::take(10)->get();

        return view('front.services.index', compact('services'));
    }

    public function show($slug)
    {
        $service = Service::where('slug', $slug)->first();
        if (!$service) {
            abort(404, 'Service not found');
        }

        $recentServices = Service::where('slug', '!=', $slug)
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        return view('front.services.details', compact('service', 'recentServices'));
    }
}
