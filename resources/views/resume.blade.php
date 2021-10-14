<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @section('title', 'Ariq Fachry - Resume')
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
                        <h2 id="hi" class="fadeInRight" style="background-color: #DA0037">Hi There</h2>
                        <p> Currently a third year vocational student at faculty of vocational in Surabaya State University, Indonesia. 
                            I have a strong interest in software development and game development. I also have quite experienced 
                            in web development especially in Front-End development. I am open for new oppurtunities and interesting
                            projects.
                        </p>
                        <div class="text-left" id="personal">
                            <div class="row">
                                <div class="col-6">
                                    <p>
                                        <strong>Name: </strong>
                                        <span class="ip">Ariq Fachry Ramadhan</span>
                                    </p>
                                    <p>
                                        <strong>Date of Birth: </strong>
                                        <span class="ip">26 November 2001</span>
                                    </p>
                                </div>
                                <div class="col-6">
                                    <p>
                                        <strong>Email: </strong>
                                        <span class="ip">ariqfachry2611@gmail.com</span>
                                    </p>
                                    <p>
                                        <strong>Phone: </strong>
                                        <span class="ip">+62-8211-2725-688</span>
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex flex-row align-items-center text-center">
                                <a class="sns" href="https://www.linkedin.com/in/ariq-fachry-3293701b5" style="margin-left: 0 !important">
                                    <span class="fab fa-linkedin-in fa-2x"></span>
                                </a>
                                <a class="sns" href="https://github.com/AriqF">
                                    <span class="fab fa-github fa-2x"></span>
                                </a>
                                <a class="sns" href="https://instagram.com/ariq.fr" >
                                    <span class="fab fa-instagram fa-2x"></span>
                                </a>
                            </div>
                         </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-section" id="profile">
            <div class="container">
                <h2 class="subheader-resume">Formal Education</h2>
                {{-- <hr style="border: 0.5px solid  #fff"> --}}
                <table class="table table-education" data-aos="fade-down" data-aos-duration="1000">
                    <tbody>
                        <tr>
                            <td class="td-org">
                                Software Engineering <span class="text-muted"> - State University of Surabaya</span>
                                <br> <span class="text-muted"><small>Surabaya - Indonesia</small></span>
                            </td>
                            <td class="td-year">
                                2019 - Present
                            </td>
                        </tr>
                        <tr>
                            <td class="td-org">
                            Natural Science <span class="text-muted"> - SMAN 2 Gunungputri</span>
                            <br> <span class="text-muted"><small>Bogor - Indonesia</small></span>
                            </td>
                            <td class="td-year">
                                2016 - 2019
                            </td>
                        </tr>
                        <tr>
                            <td class="td-org">
                            An Nahl Junior High School
                            <br> <span class="text-muted"><small>Bogor - Indonesia</small></span>
                            </td>
                            <td class="td-year">
                                2013 - 2016
                            </td>
                        </tr>
   
                    </tbody>
                </table>

                <h2 class="subheader-resume">Non Formal Education</h2>
                {{-- <hr style="border: 0.5px solid  #fff"> --}}
                <table class="table table-education" data-aos="fade-down" data-aos-duration="1000">
                    <tbody>
                        <tr>
                            <td class="td-org">
                                English Course <span class="text-muted"> - The British Institute</span>
                                <br> <span class="text-muted"><small>Bogor - Indonesia</small></span>
                            </td>
                            <td class="td-year">
                                2017 - 2018
                            </td>
                        </tr>   
                    </tbody>
                </table>

                <h2 class="subheader-resume">Certification and Awards</h2>
                {{-- <hr style="border: 0.5px solid  #fff"> --}}
                <table class="table table-education " data-aos="fade-down" data-aos-duration="1000">
                    <tbody>
                        <tr>
                            <td class="td-org">
                                English TEP 517 <span class="text-muted"> - State University of Surabaya Language Center</span>
                                <br> <span class="text-muted"><small>Surabaya - Indonesia</small></span>
                            </td>
                            <td class="td-year">
                                2019
                            </td>
                        </tr> 
                        <tr>
                            <td class="td-org">
                                Contribution as a Delegate in World Study Abroad in Tokyo<span class="text-muted"> - World Study Abroad Organization</span>
                                <br> <span class="text-muted"><small>Tokyo - Japan</small></span>
                            </td>
                            <td class="td-year">
                                2018
                            </td>
                        </tr>  
                        <tr>
                            <td class="td-org">
                                Best Graduate Student<span class="text-muted"> - An Nahl Junior High School</span>
                                <br> <span class="text-muted"><small>Bogor - Indonesia</small></span>
                            </td>
                            <td class="td-year">
                                2016
                            </td>
                        </tr>   
                    </tbody>
                </table>

                <h2 class="subheader-resume">Programming Skills</h2>
                <hr style="border-bottom: 1px solid #fff">
                <h4 style="margin-top: 32px">Front-End</h4>
                <div class="row mt-3 flex-column" data-aos="fade-right" data-aos-duration="1000">
                    <div class="col-md-6 skill-box">
                        <div class="row">
                            <div class="col-6 text-left"><label for="progress-htmlcss">HTML&CSS</label></div>
                            <div class="col-6 text-right"><label for="progress-htmlcss">Advanced<label></div>
                        </div>     
                        <div class="progress" style="height: 5px;" id="progress-htmlcss">
                            <div class="progress-bar" role="progressbar" style="width: 95%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>                          
                        </div>
                    </div>

                    <div class="col-md-6 skill-box">
                        <div class="row">
                            <div class="col-6 text-left"><label for="progress-htmlcss">Javascript</label></div>
                            <div class="col-6 text-right"><label for="progress-htmlcss">Intermediate<label></div>
                        </div>     
                        <div class="progress" style="height: 5px;" id="progress-htmlcss">
                            <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>                          
                        </div>
                    </div>
                </div>

                <h4>Back-End</h4>
                <div class="row mt-3 flex-column" data-aos="fade-left" data-aos-duration="1000">
                    <div class="col-md-6 skill-box">
                        <div class="row">
                            <div class="col-6 text-left"><label for="progress-htmlcss">PHP Native</label></div>
                            <div class="col-6 text-right"><label for="progress-htmlcss">Intermediate<label></div>
                        </div>     
                        <div class="progress" style="height: 5px;" id="progress-htmlcss">
                            <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>                          
                        </div>
                    </div>

                    <div class="col-md-6 skill-box">
                        <div class="row">
                            <div class="col-6 text-left"><label for="progress-htmlcss">Laravel</label></div>
                            <div class="col-6 text-right"><label for="progress-htmlcss">Beginner<label></div>
                        </div>     
                        <div class="progress" style="height: 5px;" id="progress-htmlcss">
                            <div class="progress-bar" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>                          
                        </div>
                    </div>
                </div>

                <h4>Object-Oriented Programmings</h4>
                <div class="row mt-3 flex-column" data-aos="fade-right" data-aos-duration="1000">
                    <div class="col-md-6 skill-box" >
                        <div class="row">
                            <div class="col-6 text-left"><label for="progress-htmlcss">Java</label></div>
                            <div class="col-6 text-right"><label for="progress-htmlcss">Intermediate<label></div>
                        </div>     
                        <div class="progress" style="height: 5px;" id="progress-htmlcss">
                            <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>                          
                        </div>
                    </div>

                    <div class="col-md-6 skill-box">
                        <div class="row">
                            <div class="col-6 text-left"><label for="progress-htmlcss">C#</label></div>
                            <div class="col-6 text-right"><label for="progress-htmlcss">Intermediate<label></div>
                        </div>     
                        <div class="progress" style="height: 5px;" id="progress-htmlcss">
                            <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>                          
                        </div>
                    </div>
                </div>
            

            </div>
        </div>


        

@endsection