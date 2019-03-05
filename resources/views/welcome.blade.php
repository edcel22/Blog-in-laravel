@extends('main')
@section('title','| Home Page')
@section('content')
            <section class="banner">
                <h1>Welcome to My Blog!</h1>
                <h3>Thank you so much for visiting.This is my test website built with laravel.Please read my popular post!</h3>
                <button class="popular-post">Popular Post</button>
            </section>

            <div class="contents">
                <div class="sub-post">
                    <section class="post-one">
                        <h2>Post Title</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in </p>
                        <button class="read-more">Read More</button>
                    </section>

                    <hr>
                    <section class="post-one">
                        <h2>Post Title</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in </p>
                        <button class="read-more">Read More</button>
                    </section>
                    <hr>
                    <section class="post-one">
                        <h2>Post Title</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in </p>
                        <button class="read-more">Read More</button>
                    </section>
                    <hr>
                    <section class="post-one">
                        <h2>Post Title</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in </p>
                        <button class="read-more">Read More</button>
                    </section>
                </div>
                {{-- SIDE BAR --}}
                <div class="sidebar">
                    <h1>Sidebar</h1>
                </div>
                            
            </div>
@endsection                
