@extends('layouts.master')

@section('content')

    <div id="content">
        <div class="entry-content">

            <div class="page-content">
                <section class="home-slider">
                    <div id="slider">
                        <!-- revolution slider begin -->
                        <div class="fullwidthbanner-container">
                            <div id="revolution-slider">

                                <ul>
                                    <li data-transition="slidedown" data-slotamount="7" data-masterspeed="800">
                                        <!--  BACKGROUND IMAGE -->
                                        <img src="{{ asset('images/optimized-slide-1.jpg') }}" alt="">

                                        <div class="tp-caption sfr stt custom-font-2 tp-resizeme"
                                             data-x="right"
                                             data-y="188"
                                             data-speed="400"
                                             data-start="1000"
                                             data-easing="easeInOut">
                                            Welcome to <span class="color">Aro</span>
                                        </div>

                                        <div class="tp-caption sfr stb custom-font-1 tp-resizeme"
                                             data-x="right"
                                             data-y="230"
                                             data-speed="400"
                                             data-start="1400"
                                             data-easing="easeInOut">
                                            Construction services
                                        </div>

                                        <div class="tp-caption sfr stl tp-resizeme"
                                             data-x="right"
                                             data-hoffset="-160"
                                             data-y="320"
                                             data-speed="400"
                                             data-start="1700"
                                             data-easing="easeInOut">
                                            <a class="ot-btn btn-color tp-resizeme" href="services.html">Our services</a>
                                        </div>
                                        <div class="tp-caption sfr str tp-resizeme"
                                             data-x="right"
                                             data-y="320"
                                             data-speed="400"
                                             data-start="1800"
                                             data-easing="easeInOut">
                                            <a class="ot-btn btn-border tp-resizeme" href="contact.html">Get a quote</a>
                                        </div>
                                    </li>

                                    <li data-transition="slidedown" data-slotamount="7" data-masterspeed="800" data-delay="6000">
                                        <!--  BACKGROUND IMAGE -->
                                        <img src="{{ asset('images/bg-home1.jpg') }}" alt="">

                                        <div class="tp-caption sfl stt custom-font-2 tp-resizeme"
                                             data-x="right"
                                             data-y="188"
                                             data-speed="400"
                                             data-start="1000"
                                             data-easing="easeInOut">
                                            Customer Focused
                                        </div>

                                        <div class="tp-caption sfl stb custom-font-1 tp-resizeme"
                                             data-x="right"
                                             data-y="230"
                                             data-speed="400"
                                             data-start="1400"
                                             data-easing="easeInOut">
                                            Construction Solutions
                                        </div>

                                        <div class="tp-caption sfl stl tp-resizeme"
                                             data-x="right"
                                             data-hoffset="-160"
                                             data-y="320"
                                             data-speed="400"
                                             data-start="1800"
                                             data-easing="easeInOut">
                                            <a class="ot-btn btn-color tp-resizeme" href="project-list.html">Our Projects</a>
                                        </div>
                                        <div class="tp-caption sfl str tp-resizeme"
                                             data-x="right"
                                             data-y="320"
                                             data-speed="400"
                                             data-start="1700"
                                             data-easing="easeInOut">
                                            <a class="ot-btn btn-border tp-resizeme" href="contact.html">Get a quote</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- revolution slider close -->
                    </div>
                </section>
                <section class="features-home">
                    <div class="parallax parallax-hourse">
                        <div class="container">
                            <div class="row">

                                <div class="col-sm-4">
                                    <div class="features">
                                        <div class="top-img"><img src="images/features1.png" alt=""></div>
                                        <h4>Modern Design</h4>
                                        <p>We provide building designs that will surely wow you and stand out among other buildings.</p>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="features">
                                        <div class="top-img"><img src="images/features2.png" alt=""></div>
                                        <h4>Construction Managment</h4>
                                        <p>Count on us to stand with you from the start of the construction till you're completely satisfied.</p>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="features">
                                        <div class="top-img"><img src="images/features3.png" alt=""></div>
                                        <h4>General Contractor</h4>
                                        <p>We render all construction and construction related services such as supplying building materials.</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>

                <section class="shadow-section">
                    <div class="container">
                        <div class="box-shadow"></div>
                    </div>
                </section>

                <section class="latest-project features-about">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="text-center after">LATEST PROJECTS</h2>
                            <div class="latest-list">
                                <div class="item-latest">
                                    <div class="image-project" >
                                        <img src="{{ asset('images/projects/b1.jpg') }}" alt="">
                                        <a href="project-details.html" class="overlay"></a>
                                        <div class="content-bottom">
                                            <div class="inner">
                                                <h4><a href="project-details.html">Dimen Center</a></h4>
                                                <div class="cat-name"><a href="#">Office</a>, <a href="#">Education</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-latest">
                                    <div class="image-project" >
                                        <img src="{{ asset('images/projects/brick.jpg') }}" alt="">
                                        <a href="" class="overlay"></a>
                                        <div class="content-bottom">
                                            <div class="inner">
                                                <h4><a href="#">Damon Resort</a></h4>
                                                <div class="cat-name"><a href="#">Interior Design</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-latest">
                                    <div class="image-project">
                                        <img src="{{ asset('images/projects/res_des.jpg') }}" alt="">
                                        <a href="project-details.html" class="overlay"></a>
                                        <div class="content-bottom">
                                            <div class="inner">
                                                <h4><a href="project-details.html">Dream House</a></h4>
                                                <div class="cat-name"><a href="#">House</a>, <a href="#">Health</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-latest">
                                    <div class="image-project" >
                                        <img src="{{ asset('images/projects/res_bd.jpg') }}" alt="">
                                        <a href="project-details.html" class="overlay"></a>
                                        <div class="content-bottom">
                                            <div class="inner">
                                                <h4><a href="project-details.html">Hospital Center</a></h4>
                                                <div class="cat-name"><a href="#">Health</a>, <a href="#">Green Park</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-latest">
                                    <div class="image-project" >
                                        <img src="{{ asset('images/projects/pipe.jpg') }}" alt="">
                                        <a href="project-details.html" class="overlay"></a>
                                        <div class="content-bottom">
                                            <div class="inner">
                                                <h4><a href="project-details.html">Dagittis Park</a></h4>
                                                <div class="cat-name"><a href="#">Education</a>, <a href="#">Green Park</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-latest">
                                    <div class="image-project" >
                                        <img src="{{ asset('images/projects/wall.jpg') }}" alt="">
                                        <a href="project-details.html" class="overlay"></a>
                                        <div class="content-bottom">
                                            <div class="inner">
                                                <h4><a href="project-details.html">Posuere Hospital</a></h4>
                                                <div class="cat-name"><a href="#">Health</a>, <a href="#">House</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-latest">
                                    <div class="image-project" >
                                        <img src="{{ asset('images/projects/highway_support.jpg') }}" alt="">
                                        <a href="project-details.html" class="overlay"></a>
                                        <div class="content-bottom">
                                            <div class="inner">
                                                <h4><a href="project-details.html">Primis office</a></h4>
                                                <div class="cat-name"><a href="#">Office</a>, <a href="#">Interior Design</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-latest">
                                    <div class="image-project" >
                                        <img src="http://placehold.it/750x561/ccc.jpg" alt="">
                                        <a href="project-details.html" class="overlay"></a>
                                        <div class="content-bottom">
                                            <div class="inner">
                                                <h4><a href="project-details.html">Dagittis City</a></h4>
                                                <div class="cat-name"><a href="#">Office</a>, <a href="#">Green Park</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="why-choose">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="text-center after">WHY CHOOSE ARO</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <figure class="vimeo">
                                    <a href="http://player.vimeo.com/video/112734492">
                                        <img src="http://placehold.it/750x421/ccc.jpg" alt="" />
                                        <img class="btn-play" src="images/video-play.png" alt="" />
                                    </a>
                                </figure>
                            </div>
                            <div class="col-md-6">
                                <div class="features box4">
                                    <h4><i class="fa fa-cogs"></i>Transparency</h4>
                                    <p>Nothing is hidden. We are honest and will keep you informed throughout the project, answering any questions you might have along the way.  </p>
                                </div>
                                <div class="features box4">
                                    <h4><span><i class="fa fa-diamond"></i>Expertise</span></h4>
                                    <p>There's nothing we haven not dealt with in the construction industry. And that is no surprise based on over 30 years of experience.</p>
                                </div>
                                <div class="features box4">
                                    <h4><span><i class="fa fa-suitcase"></i>Reliability</span></h4>
                                    <p>Our services are MBE/DBE/SBE certified and provided in accordance with the Federal, States, Cities and Counties specifications.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="parallax-action">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="get-action">
                                    <h4>WORKING WITH US</h4>
                                    <p>WE DESIGN, CONSTRUCT, REFURBISH AND OPERATE<br> OUTSTANDING BUILDINGS.</p>
                                    <div><a href="#" class="ot-btn btn-color btn-small">Get a Quote</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                {{--<section class="testi-partner">--}}
                    {{--<div class="container">--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-md-6">--}}
                                {{--<h2 class="left after">TESTIMONIALS</h2>--}}
                                {{--<div class="testi-carousel">--}}

                                    {{--<div id="sync-3" class="owl-carousel text">--}}

                                        {{--@foreach($testimonials as $testimonial)--}}

                                            {{--<div class="item">--}}
                                                {{--<p>{{ $testimonial['testimony'] }}</p>--}}
                                                {{--<div class="info">--}}
                                                    {{--<strong>{{ $testimonial['name'] }}</strong>--}}
                                                    {{--<span>{{ $testimonial['title'] }}, {{ $testimonial['company'] }}</span>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}

                                        {{--@endforeach--}}




                                    {{--</div>--}}

                                    {{--<div id="sync-4" class="owl-carousel images">--}}
                                        {{--<div class="testi-img">--}}
                                            {{--<img src="http://placehold.it/149x149/ccc.jpg" alt="">--}}
                                        {{--</div>--}}
                                    {{--</div>--}}

                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-6">--}}
                                {{--<h2 class="left after">CERTIFICATIONS</h2>--}}
                                {{--<div class="list-logo">--}}
                                    {{--<div class="item-logo">--}}
                                        {{--<a href="#"><img src="http://placehold.it/80x63/ccc.jpg" alt=""></a>--}}
                                    {{--</div>--}}
                                    {{--<div class="item-logo">--}}
                                        {{--<a href="#"><img src="http://placehold.it/80x63/ccc.jpg" alt=""></a>--}}
                                    {{--</div>--}}
                                    {{--<div class="item-logo">--}}
                                        {{--<a href="#"><img src="http://placehold.it/80x63/ccc.jpg" alt=""></a>--}}
                                    {{--</div>--}}
                                    {{--<div class="item-logo">--}}
                                        {{--<a href="#"><img src="http://placehold.it/80x63/ccc.jpg" alt=""></a>--}}
                                    {{--</div>--}}
                                    {{--<div class="item-logo">--}}
                                        {{--<a href="#"><img src="http://placehold.it/80x63/ccc.jpg" alt=""></a>--}}
                                    {{--</div>--}}
                                    {{--<div class="item-logo">--}}
                                        {{--<a href="#"><img src="http://placehold.it/80x63/ccc.jpg" alt=""></a>--}}
                                    {{--</div>--}}
                                    {{--<div class="item-logo">--}}
                                        {{--<a href="#"><img src="http://placehold.it/80x63/ccc.jpg" alt=""></a>--}}
                                    {{--</div>--}}
                                    {{--<div class="item-logo">--}}
                                        {{--<a href="#"><img src="http://placehold.it/80x63/ccc.jpg" alt=""></a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</section>--}}

                <section class="shadow-section">
                    <div class="container">
                        <div class="box-shadow"></div>
                    </div>
                </section>

                {{--<section class="latest-blog features-about">--}}
                    {{--<div class="container">--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-md-12">--}}
                                {{--<h2 class="text-center after">LATEST FROM BLOG</h2>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="row">--}}
                            {{--<div id="latest-post" class="owl-carousel latest-post">--}}
                                {{--<div class="item-post">--}}
                                    {{--<a href="blog-post.html"><img src="http://placehold.it/750x446/ccc.jpg" alt=""></a>--}}
                                    {{--<div class="desc">--}}
                                        {{--<h4><a href="blog-post.html">U.S construction scheme hits maximum marks for safety</a></h4>--}}
                                        {{--<p>Phasellus lorem enim, luctus ut velit eget, convallis egestas eros. Sed ornare ligula eget tortor tempor, quis porta tellus dictum.</p>--}}
                                        {{--<p><a href="blog-post.html" class="more-link">Continue Reading</a></p>--}}
                                    {{--</div>--}}
                                    {{--<p class="date-post">April 15, 2016</p>--}}
                                {{--</div>--}}
                                {{--<div class="item-post">--}}
                                    {{--<a href="blog-post.html"><img src="http://placehold.it/750x446/ccc.jpg" alt=""></a>--}}
                                    {{--<div class="desc">--}}
                                        {{--<h4><a href="blog-post.html">Successful property development is never just about bricks</a></h4>--}}
                                        {{--<p>Nulla cursus augue elit, at ullamcorper urna rhoncus a. Proin ipsum tortor, gravida at convallis a, tempor sed magna</p>--}}
                                        {{--<p><a href="blog-post.html" class="more-link">Continue Reading</a></p>--}}
                                    {{--</div>--}}
                                    {{--<p class="date-post">Marh 25, 2016</p>--}}
                                {{--</div>--}}
                                {{--<div class="item-post">--}}
                                    {{--<a href="blog-post.html"><img src="http://placehold.it/750x446/ccc.jpg" alt=""></a>--}}
                                    {{--<div class="desc">--}}
                                        {{--<h4><a href="blog-post.html">ARC Design obtains planning permission for your house</a></h4>--}}
                                        {{--<p>Morbi iaculis, sem vel luctus pulvinar, tortor dolor pharetra enim, porta gravida nulla turpis sed risus. In turpis ligula</p>--}}
                                        {{--<p><a href="blog-post.html" class="more-link">Continue Reading</a></p>--}}
                                    {{--</div>--}}
                                    {{--<p class="date-post">February 10, 2016</p>--}}
                                {{--</div>--}}
                                {{--<div class="item-post">--}}
                                    {{--<a href="blog-post.html"><img src="http://placehold.it/750x446/ccc.jpg" alt=""></a>--}}
                                    {{--<div class="desc">--}}
                                        {{--<h4><a href="blog-post.html">Build Amazing Theme For You</a></h4>--}}
                                        {{--<p>In hac habitasse platea dictumst. Mauris orci lectus, pretium sed vehicula at, aliquet quis tellus. Elementum in nec, accumsan et nisi. Fusce in odio consequat odio iaculis vulputate.</p>--}}
                                        {{--<p><a href="blog-post.html" class="more-link">Continue Reading</a></p>--}}
                                    {{--</div>--}}
                                    {{--<p class="date-post">February 05, 2016</p>--}}
                                {{--</div>--}}
                                {{--<div class="item-post">--}}
                                    {{--<a href="blog-post.html"><img src="http://placehold.it/750x446/ccc.jpg" alt=""></a>--}}
                                    {{--<div class="desc">--}}
                                        {{--<h4><a href="blog-post.html">We’re Construction Strong</a></h4>--}}
                                        {{--<p>Cras commodo vitae turpis eu cursus. In tristique dolor et gravida commodo. Aliquam non ornare velit. Etiam felis ipsum, hendrerit ut euismod interdum.</p>--}}
                                        {{--<p><a href="blog-post.html" class="more-link">Continue Reading</a></p>--}}
                                    {{--</div>--}}
                                    {{--<p class="date-post">February 05, 2016</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</section>--}}

                {{--<section class="action-image">--}}
                    {{--<div class="container">--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-md-8">--}}
                                {{--<div class="get-action dark">--}}
                                    {{--<h4>WORKING WITH US</h4>--}}
                                    {{--<p>WE DESIGN, CONSTRUCT, REFURBISH AND OPERATE OUTSTANDING BUILDINGS.</p>--}}
                                    {{--<div><a href="#" class="ot-btn btn-color btn-small">Get a Quote</a></div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-4">--}}
                                {{--<div class="image-right">--}}
                                    {{--<img src="{{ asset('images/projects/front.jpg') }}" alt="">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</section>--}}

            </div>

        </div>
    </div>

@endsection

