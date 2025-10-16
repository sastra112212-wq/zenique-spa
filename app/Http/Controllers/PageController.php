<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function services()
    {
        $services = [
            [
                'category' => 'Massages',
                'items' => [
                    ['name' => 'Balinese Massage', 'duration' => '30/60/90 Min', 'price' => '95K / 195K / 250K'],
                    ['name' => 'Deep Tissue Massage', 'duration' => '60/90 Min', 'price' => '250K / 350K'],
                    ['name' => 'Hot Stone Massage', 'duration' => '90 Min', 'price' => '350K'],
                    ['name' => 'Aromatherapy Massage', 'duration' => '60 Min', 'price' => '225K'],
                    ['name' => 'Aloe Vera Massage', 'duration' => '60 Min', 'price' => '225K'],
                    ['name' => 'Back and Shoulder', 'duration' => '30 Min', 'price' => '130K'],
                    ['name' => 'Foot Massage', 'duration' => '30/60 Min', 'price' => '95K / 195K'],
                    ['name' => 'Face Massage', 'duration' => '30 Min', 'price' => '130K'],
                ]
            ],
            [
                'category' => 'Body Treatments',
                'items' => [
                    ['name' => 'Body Scrub', 'duration' => '30 Min', 'price' => '195K'],
                    ['name' => 'Ear Candle', 'duration' => '30 Min', 'price' => '130K'],
                    ['name' => 'Facial', 'duration' => '40 Min', 'price' => '195K'],
                ]
            ],
            [
                'category' => 'Hair Care',
                'items' => [
                    ['name' => 'Hair Braiding', 'duration' => 'Short/Medium/Long', 'price' => '300K / 350K / 500K'],
                    ['name' => 'Cream Bath', 'duration' => '60 Min', 'price' => '150K'],
                    ['name' => 'Hair Mask', 'duration' => '60 Min', 'price' => '175K'],
                ]
            ],
            [
                'category' => 'Nail Care',
                'items' => [
                    ['name' => 'Manicure', 'duration' => '45 Min', 'price' => '150K'],
                    ['name' => 'Pedicure', 'duration' => '60 Min', 'price' => '175K'],
                    ['name' => 'Nail Polish', 'duration' => '20 Min', 'price' => '50K'],
                ]
            ],
            [
                'category' => 'Waxing',
                'items' => [
                    ['name' => 'Full Back', 'duration' => '-', 'price' => '300K'],
                    ['name' => 'Hand', 'duration' => '-', 'price' => '200K'],
                    ['name' => 'Underarm', 'duration' => '-', 'price' => '100K'],
                    ['name' => 'Half Leg', 'duration' => '-', 'price' => '250K'],
                    ['name' => 'Full Leg', 'duration' => '-', 'price' => '300K'],
                ]
            ],
            [
                'category' => 'Special Packages',
                'items' => [
                    ['name' => 'Package 1 (Massage + Scrub + Cream Bath)', 'duration' => '~2.5 Hours', 'price' => '540K'],
                    ['name' => 'Package 2 (Massage + Facial + Scrub + Cream Bath)', 'duration' => '~3.5 Hours', 'price' => '690K'],
                    ['name' => 'Package 3 (Massage + Facial + Scrub + Mani-Pedi)', 'duration' => '~4 Hours', 'price' => '850K'],
                ]
            ],
        ];
        
        return view('pages.services', ['services' => $services]);
    }

    public function gallery()
    {
        $images = ['gallery1.jpg', 'gallery2.jpg', 'gallery3.jpg', 'gallery4.jpg', 'gallery5.jpg', 'gallery6.jpg', 'gallery7.jpg', 'gallery8.jpg'];
        return view('pages.gallery', ['images' => $images]);
    }
    
    public function contact()
    {
        return view('pages.contact');
    }
}