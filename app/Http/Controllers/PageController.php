<?php

namespace App\Http\Controllers;

use App\Models\CarouselContent;
use App\Models\Personnel;
use App\Models\Post;
use App\Models\Publication;
use App\Models\Vacancy;
use Illuminate\Http\Request;

class PageController extends Controller
{
    function homepage(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
//        $carouselItems = [
//            [
//                'title' => 'Welcome to Our Platform',
//                'description' => 'Discover the best services we offer.',
//                'button_text' => 'Learn More',
//                'button_link' => '#',
//                'image' => 'https://picsum.photos/1280/768?random=2',
//                'alignment' => 'items-start', // Align content to the start of the slide
//            ],
//            [
//                'title' => 'Our Mandate',
//                'description' => 'We are here to serve you with passion and integrity.',
//                'button_text' => 'Read More',
//                'button_link' => '#',
//                'image' => 'https://picsum.photos/1280/768?random=3',
//                'alignment' => 'items-center', // Align content to the center
//            ],
//            [
//                'title' => 'Join Our Community',
//                'description' => 'Become a part of a thriving network of professionals.',
//                'button_text' => 'Sign Up',
//                'button_link' => '#',
//                'image' => 'https://picsum.photos/1280/768?random=4',
//                'alignment' => 'items-end', // Align content to the end of the slide
//            ]
//        ];

        $slides = CarouselContent::orderBy('created_at', 'asc')->get();

        $news = Post::orderBy('created_at', 'desc')->take(3)->get();
        $publications = Publication::orderBy('created_at', 'desc')->take(2)->get();

        return view('homepage', [
            'carouselItems'=>$slides,
            'news'=>$news,
            'publications'=>$publications,
        ]);
    }

    function about(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        return view('about');
    }

    function contact(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        return view('contact');
    }

    function licenses(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        return view('licenses');
    }

    function publications(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        $publications = Publication::orderBy('created_at', 'desc')->paginate(9);
        $vacancies = Vacancy::orderBy('created_at', 'desc')->take(3)->get();
        return view('publications', [
            'publications'=>$publications,
            'vacancies'=>$vacancies,
        ]);
    }

    function news(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        $featuredPosts = Post::orderBy('created_at', 'desc')->take(5)->get();
        $otherPosts = Post::orderBy('created_at', 'desc')->skip(5)->paginate(9);

        return view('news', [
            'featuredPosts'=>$featuredPosts,
            'otherPosts'=>$otherPosts
        ]);
    }

    function resources(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        return view('resources');
    }

    function form(Request $request){
        $request->validate([
            'g-recaptcha-response' => 'required|captcha',
        ]);
    }

    function newsread($id): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        $news = Post::find($id);
        $featuredPosts = Post::orderBy('created_at', 'desc')->take(5)->get();
        return view('news-read', [
            'news'=>$news,
            'featuredPosts'=>$featuredPosts
        ]);
    }

    function vacancies(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        $vacancies = Vacancy::orderBy('created_at', 'desc')->paginate(9);
        return view('vacancies', [
            'vacancies'=>$vacancies
        ]);
    }

    function vacanciesread($id): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        $vacancy = Vacancy::find($id);
        $vacancies = Vacancy::orderBy('created_at', 'desc')->take(5)->get();
        return view('vacancies-read', [
            'vacancy'=>$vacancy,
            'vacancies'=>$vacancies
        ]);
    }

    function staff(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        $management = Personnel::where('level', 'management')
            ->orderBy('rank') // Sorting by rank for management
            ->get();

        $board = Personnel::where('level', 'board')
            ->orderBy('rank') // Sorting by rank for board
            ->get();

        $staff = Personnel::where('level', 'staff')
            ->orderBy('rank') // Corrected: sorting by rank for staff
            ->get();

        return view('personnel', [
            'management' => $management,
            'board' => $board,
            'staff' => $staff,
        ]);

    }
}
