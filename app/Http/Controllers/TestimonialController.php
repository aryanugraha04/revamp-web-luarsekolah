<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = \App\Models\Testimonial::where('status', 'active')->get();
        return view('testimonial_section', compact('testimonials'));
    }
}
