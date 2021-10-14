<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @section('title', 'Ariq Fachry - Contact')
        @extends('layouts.master')
        <link rel="stylesheet" href="{{ asset('css/index.css') }}" type="text/css"> 
        <link rel="stylesheet" href="{{ asset('css/utility.css') }}" type="text/css"> 
    </head>
    <body style="background-color: #171717;">
        <!--extends navbar-->
        @extends('layouts.index-layout')
        @section('mainContent')
        <div class="page-section" id="contact-page">
            <div class="container">
                <h1 style="font-size: 32px">Contact</h1>
                <h5 style="margin-bottom: 32px">Very Happy To Have Further Discussion</h5>
                <div class="row">
                    <div class="col-xl-6 col-lg-12 col-md-12">
                        @if(Session::has('message_sent'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('message_sent')}}
                            </div>
                        @endif
                        <form class="needs-validation" method="POST" enctype="multipart/form-data" action="{{route('contact.send')}}">
                            @csrf
                            <div class="form-floating mb-3">
                                <input id="name" type="text" class="form-control" name="name" placeholder="Your Name" required autofocus>            
                            </div>
                            <div class="form-floating mb-3">
                                <input id="email" type="email" class="form-control" name="email" placeholder="Your Email" autocomplete="email" required autofocus>            
                            </div>
                            <div class="form-floating mb-3">
                                <input id="subject" type="text" class="form-control" name="subject" placeholder="Subject" required autofocus>            
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" name="message" placeholder="Your Message" rows="5"></textarea>
                            </div>
                            <div style="margin-bottom: 10px;">
                            </div>
                            
                            <div class="d-grid">
                                <button class="btnr btnr-red" type="submit" style="padding: 12px 42px"><i class="far fa-paper-plane"></i> Kirim</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-12" id="box-right">
                        <ul class="pl-0 fadeInDown" id="contacts-list" style="list-style: none;">
                            <li ><i class="fas fa-phone-alt"></i> +62-8211-2725-688</li>
                            <li ><i class="fas fa-map-marked-alt"></i> Gunungputri, Bogor, West Java Indonesia</li>
                            <li ><i class="far fa-envelope"></i> ariqfachry2611@gmail.com</li>
                        </ul>
                        <div id="quotes" class="pl-0 fadeInUp">
                            <h4 class="text-muted">
                                "Skill is fine, and genius is splendid, but the rights contacts are more valuable than either"
                                <small>- Arthur Conan Doyle</small>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection