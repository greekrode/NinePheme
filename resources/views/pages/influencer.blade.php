@extends('layouts.default')
@section('content')
<div class="main" role="main">

        <!-- Page Heading -->
        <section class="page-heading">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1>Profile</h1>
                    </div>
                    <div class="col-md-6">
                        <ul class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            {{-- <li><a href="#"></a></li> --}}
                            <li class="active">Profile</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Page Heading / End -->

        <!-- Page Content -->
        <section class="page-content">
            <div class="container">

                <div class="row">
                    <div class="content col-md-8">
                        
                        <div class="job-profile-info">
                            <div class="row">
                                <div class="col-md-5">
                                    <figure class="alignnone">
                                        <img src="http://placehold.it/320x290" alt="">
                                    </figure>
                                </div>
                                <div class="col-md-7">
                                    <h2 class="name">Lameka Reeves</h2>
                                    <i class="tagline"></i>
                                    <ul class="meta">
                                        <li>Public Figure</li>
                                        <li>Open Minded</li>
                                    </ul>
                                    <ul class="info">
                                        <li><i class="fa fa-map-marker"></i> Looking within 20 miles of <a href="#">London, UK</a></li>
                                        <li><i class="fa fa-clock-o"></i> Updated 4 minutes ago.</li>
                                    </ul>

                                    <ul class="info" style="font-size:35px !important; display:inline-block !important;">
                                        <li style="display: inline-block !important"><i class="fa fa-instagram"></i></li>
                                        <li style="display: inline-block !important"><i class="fa fa-facebook"></i></li>
                                        <li style="display: inline-block !important"><i class="fa fa-twitter"></i></li>
                                    </ul>
                                    

                                    <div class="spacer-lg"></div>
                            
                                    <a href="#" class="btn btn-success btn-lg"><span class="fa fa-envelope"></span> Send Message</a>
                                </div>
                            </div>

                            <div class="spacer-lg"></div>
                            
                            <h4>Description</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu nisi ac mi malesuada vestibulum. Phasellus tempor nunc eleifend cursus molestie. Mauris lectus arcu, pellentesque at sodales sit amet, condimentum id nunc.</p>
                            
                            <p>Donec ornare mattis suscipit. Praesent fermentum accumsan vulputate. Sed velit nulla, sagittis non erat id, dictum vestibulum ligula. Maecenas sed enim sem. Etiam scelerisque gravida purus nec interdum. Phasellus venenatis ligula in faucibus consequat. Aliquam dictum nulla eu varius porta. Maecenas congue dui id posuere fermentum. Morbi at iaculis nibh, at semper augue</p>
                            
                            <hr class="lg">
                            
                            <h4>Location</h4>
                            <!-- Google Map -->
                            {{-- <div class="googlemap-wrapper">
                                <div id="map_canvas" class="map-canvas"></div>
                            </div> --}}

                            <div class="googlemap-wrapper">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.034436022635!2d98.6901483143507!3d3.579561997395105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30313052b621d0bd%3A0xa4360a312fa96218!2sStandard+Compressor!5e0!3m2!1sen!2sid!4v1526832507115" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                            <!-- Google Map / End -->
                            
                            <hr class="lg">
                            
                            <div class="row">
                                <div class="col-sm-4 col-md-4">
                                    <h4>Skills</h4>
                                    <div class="list list__arrow2">
                                        <ul>
                                            <li>Lorem Ipsum</li>
                                            <li>Lorem Ipsum</li>
                                            <li>Lorem Ipsum</li>
                                            <li>Lorem Ipsum</li>
                                            <li>Lorem Ipsum</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4">
                                    <h4>Experience</h4>
                                    <div class="list list__arrow2">
                                        <ul>
                                            <li>Lorem Ipsum</li>
                                            <li>Lorem Ipsum</li>
                                            <li>Lorem Ipsum</li>
                                            <li>Lorem Ipsum</li>
                                            <li>Lorem Ipsum</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4">
                                    <h4>Education</h4>
                                    <div class="list list__arrow2">
                                        <ul>
                                            <li>
                                                University of California, Berkeley<br>
                                                <span class="date text-muted"><i class="fa fa-calendar"></i> Jan 2009 - Mar 2010</span>
                                                <div class="position">Bachelor degree</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                    <!-- Sidebar -->
                    <aside class="sidebar col-md-3 col-md-offset-1 col-bordered">
                        <hr class="visible-sm visible-xs lg">
                        <!-- Widget :: Recent Jobs -->
                        <div class="widget_recent_jobs widget widget__sidebar">
                            {{-- <h3 class="widget-title">Pet Sitting Jobs</h3>
                            <div class="widget-content">
                                <ul class="job_listings">
                                    <li>
                                        <a href="#">
                                            <div class="position">
                                                <h3>Dog Walker Needed</h3>
                                            </div>
                                            <ul class="meta">
                                                <li class="location">
                                                    Anywhere
                                                </li>
                                                <li class="company">
                                                    Sara White
                                                </li>
                                                <li class="job-type">
                                                    Pet Sitter
                                                </li>
                                            </ul>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="position">
                                                <h3>Seeking reliable pet sitter for 2</h3>
                                            </div>
                                            <ul class="meta">
                                                <li class="location">
                                                    London, UK
                                                </li>
                                                <li class="company">
                                                    John Doe
                                                </li>
                                                <li class="job-type">
                                                    Pet Sitter
                                                </li>
                                            </ul>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="position">
                                                <h3>Pet sitter needed for one dog</h3>
                                            </div>
                                            <ul class="meta">
                                                <li class="location">
                                                    Fayetteville, NC
                                                </li>
                                                <li class="company">
                                                    Bill Russell
                                                </li>
                                                <li class="job-type">
                                                    Pet Sitter
                                                </li>
                                            </ul>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="position">
                                                <h3>Seeking reliable pet sitter for 2</h3>
                                            </div>
                                            <ul class="meta">
                                                <li class="location">
                                                    Varina, NC
                                                </li>
                                                <li class="company">
                                                    Timothy Black
                                                </li>
                                                <li class="job-type">
                                                    Pet Sitter
                                                </li>
                                            </ul>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="position">
                                                <h3>Dog owner looking to walk/sit for dog</h3>
                                            </div>
                                            <ul class="meta">
                                                <li class="location">
                                                    Sanford, NC
                                                </li>
                                                <li class="company">
                                                    Eddy Merry
                                                </li>
                                                <li class="job-type">
                                                    Pet Sitter
                                                </li>
                                            </ul>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="position">
                                                <h3>Seeking reliable pet sitter for 2</h3>
                                            </div>
                                            <ul class="meta">
                                                <li class="location">
                                                    Apex, NC
                                                </li>
                                                <li class="company">
                                                    Sara White
                                                </li>
                                                <li class="job-type">
                                                    Pet Sitter
                                                </li>
                                            </ul>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="position">
                                                <h3>Local Dog Walking and Pet Services</h3>
                                            </div>
                                            <ul class="meta">
                                                <li class="location">
                                                    London, UK
                                                </li>
                                                <li class="company">
                                                    Allen O’Neal
                                                </li>
                                                <li class="job-type">
                                                    Dog Walking
                                                </li>
                                            </ul>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="position">
                                                <h3>Pet sitter, Dog walker, &amp; more!</h3>
                                            </div>
                                            <ul class="meta">
                                                <li class="location">
                                                    Morrisville, NC
                                                </li>
                                                <li class="company">
                                                    Tim Purple
                                                </li>
                                                <li class="job-type">
                                                    Petsitter
                                                </li>
                                            </ul>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="position">
                                                <h3>Seeking reliable pet sitter for 2</h3>
                                            </div>
                                            <ul class="meta">
                                                <li class="location">
                                                    London, UK
                                                </li>
                                                <li class="company">
                                                    Sara White
                                                </li>
                                                <li class="job-type">
                                                    Petsitter
                                                </li>
                                            </ul>
                                        </a>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>
                        <!-- /Widget :: Recent Jobs -->
                    </aside>
                    <!-- Sidebar / End -->

                </div>
            </div>
        </section>
@stop        