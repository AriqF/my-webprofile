<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @section('title', 'Ariq Fachry - Profile')
        @extends('layouts.master')
        <link rel="stylesheet" href="{{ asset('css/index.css') }}" type="text/css"> 
        <link rel="stylesheet" href="{{ asset('css/utility.css') }}" type="text/css"> 
    </head>
    <body style="background-color: #171717;">
        <!--extends navbar-->
        @extends('layouts.index-layout')
        @section('mainContent')
        
        <div class="page-section" id="profile-header">
            <div class="container">
                <div class="row text-left align-items-center">
                    <div class="col-xl-4 col-lg-12 col-md-12" id="img-section">
                        <img class="img-fluid" src="{{asset('img/afr.jpg')}}">
                    </div>
                    <div class="col-xl-8 col-lg-12 col-md-12 align-items-center" id="text-section">
                        <h2 id="hi">Hello, I'm <h2 class="fadeInRight" style="background-color: #DA0037;">Ariq Fachry</h2></h2>
                        <p>Currently a third year vocational student at faculty of vocational in Surabaya State University, Indonesia. 
                            I have a strong interest in software development and game development. I also have quite experienced 
                            in web development especially in Front-End development. I am open for new oppurtunities and interesting
                            projects.
                        </p>
                        <div class="d-flex flex-row" id="project-buttons" style="margin-top: 24px">
                            <div class="p-2" style="padding-left: 0 !important;">
                                <a href="{{url('/contact')}}" class="btnr btnr-red">Contact Me</a>
                            </div>
                            <div class="p-2">
                                <a href="#projects" class="btnr btnr-trans">Projects</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-section" id="projects">
            <div class="container">
                <div class="container-fluid text-center">
                    <h2 style="margin-top: 48px">My Projects</h2>
                    <p class="ls-1"><span  style="background-color: #DA0037; padding: 2px 12px 2px 12px;">Check out a few of my projects</span></p>
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-xs-12">
                            <div class="project-items" data-aos="zoom-in-right" data-aos-duration="1000">
                                <img class="img-fluid project-img" src="{{asset('img/mokarya2.png')}}">
                                <h4>MoKarya</h4>
                                <div class="box-body">
                                    <div class="d-flex d-row text-center" id="tag-container">
                                        <div class="tag pl-0"><span class="badge badge-info">HTML&CSS</span></div>
                                        <div class="tag"><span class="badge badge-info">php</span></div> 
                                        <div class="tag"><span class="badge badge-info">MySQL</span></div>
                                    </div>
                                    <p>
                                        MoKarya is a website created with the aim that users can share their work. 
                                        This website created with native php and MySQL as a database.
                                    </p>   
                                </div>
                                <div class="box-button">
                                    <div class="d-flex flex-row">
                                        <div class="p-2" style="padding-left: 0 !important;"><a href="https://github.com/AriqF/MoKarya" class="btnrs btnr-git"><i class="fab fa-github"></i> Github Repo</a></div>
                                    </div>  
                                </div>                   
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-4 col-md-6 col-xs-12">
                            <div class="project-items " data-aos="zoom-in" data-aos-duration="1000">
                                <img class="img-fluid project-img" src="{{asset('img/ringkasnet.png')}}">
                                <h4>Ringkas.Net</h4>
                                <div class="box-body">
                                    <div class="d-flex d-row text-center" id="tag-container">
                                        <div class="tag pl-0"><span class="badge badge-info">HTML&CSS</span></div>
                                        <div class="tag"><span class="badge badge-info">php</span></div> 
                                        <div class="tag"><span class="badge badge-info">MySQL</span></div>
                                    </div>
                                    <p>
                                        Ringkas.Net is a kind of a website to write and share people's thought. This website
                                        is created using php native and MySQL as database.
                                    </p>
                                </div>
                                <div class="box-button">
                                    <div class="d-flex flex-row">
                                        <div class="p-2" style="padding-left: 0 !important;"><a href="https://github.com/AriqF/Ringkas-Net" class="btnrs btnr-git"><i class="fab fa-github"></i> Github Repo</a></div>
                                    </div>   
                                </div>

                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-4 col-md-6 col-xs-12">
                            <div class="project-items" data-aos="zoom-in-left" data-aos-duration="1000">
                                <img class="img-fluid project-img" src="{{asset('img/mango.png')}}">
                                <h4>ManGo</h4>
                                <div class="box-body">
                                    <div class="d-flex d-row text-center" id="tag-container">
                                        <div class="tag pl-0"><span class="badge badge-info">HTML&CSS</span></div>
                                        <div class="tag"><span class="badge badge-info">Laravel</span></div> 
                                        <div class="tag"><span class="badge badge-info">MySQL</span></div>
                                    </div>
                                    <p>
                                        A website for all users to learn and study Japanese basic level. Created using
                                        Laravel and MySQL as Database. This project is currently in progress
                                    </p>
                                </div>
                                <div class="box-button">
                                    <div class="d-flex flex-row">
                                        <div class="p-2" style="padding-left: 0 !important;"><a href="https://github.com/AriqF/man-go" class="btnrs btnr-git"><i class="fab fa-github"></i> Github Repo</a></div>
                                    </div>                                   
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-4 col-md-6 col-xs-12">
                            <div class="project-items " data-aos="zoom-in-right" data-aos-duration="1000">
                                <img class="img-fluid project-img" src="{{asset('img/laratales.png')}}">
                                <h4>Lara Tales</h4>
                                <div class="box-body">
                                    <div class="d-flex d-row text-center" id="tag-container">
                                        <div class="tag pl-0"><span class="badge badge-info">Unity</span></div>
                                        <div class="tag"><span class="badge badge-info">C#</span></div> 
                                    </div>
                                    <p>
                                        Lara Tales is an Action 2D Platformer game. This game consist of several stages with enemy and bosses.
                                        This game is currently in progress.
                                    </p>
                                </div>
                                <div class="box-button">
                                    <div class="d-flex flex-row">
                                        <div class="p-2" style="padding-left: 0 !important;"><a href="https://github.com/AriqF/Lara-Tales" class="btnrs btnr-git"><i class="fab fa-github"></i> Github Repo</a></div>
                                        
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
@endsection