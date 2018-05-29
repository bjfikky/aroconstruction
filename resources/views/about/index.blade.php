@extends('layouts.master')

@section('content')

    <div id="content">
        <div class="entry-content">

            <div class="page-title">
                <div class="container">
                    <h1>About Us</h1>
                </div>
            </div>

            <div class="breadcrumbs">
                <div class="container">
                    <ul class="crumb">
                        <li><a href="#"><i class="fa fa-home"></i> Home</a></li> <span>/</span>
                        <li class="active"> About Us</li>
                    </ul>
                </div>
            </div>

            <div class="page-content">
                <section class="top-about">
                    <div class="container">
                        <div class="row">

                            <div class="col-md-6">
                                <h4>What We Do</h4>
                                <p>ARO Construction Services LLC (AROCS) is registered in Maryland to perform construction services that include Prime/Sub
                                    contracting services for new residential, commercial and small industrial buildings.
                                    AROCS is MBE, DBE and SBR minority business certified under the following NAICS Codes:
                                    236115, 236210, 236220, 425120, 541350 and 561730. <br>We provide:
                                <ul>
                                    <li class="services">Construction Management Services</li>
                                    <li class="services">Property Maintenance and landscaping Care Services</li>
                                    <li class="services">Wholesale Trade Agent and Broker of Construction</li>
                                    <li class="services">Material and Supplies Services including</li>
                                    <li class="services">Building and Home Inspection Services</li>
                                </ul>

                                </p>

                                <h4 class="values">Our Values</h4>
                                <div class="accordion">

                                    <div class="accordion_in">
                                        <div class="acc_head"><i class="fa fa-crop"></i>Creative Design</div>
                                        <div class="acc_content">
                                            <p>No two projects are exactly alike. This is why we apply a touch of creativity onto everything we design, making sure that all our designs are unique and beautiful. </p>
                                        </div>
                                    </div>

                                    <div class="accordion_in">
                                        <div class="acc_head"><i class="fa fa-cogs"></i> Transparency</div>
                                        <div class="acc_content">
                                            <p>We also guarantee to always keep our clients involved and informed throughout all the phases of the project. We encourage our clients to ask questions, raise concerns, provide feedback, and express their opinions. </p>
                                        </div>
                                    </div>

                                    <div class="accordion_in">
                                        <div class="acc_head"><i class="fa fa-diamond"></i> Expertise</div>
                                        <div class="acc_content">
                                            <p>ARO Construction Services maintain experienced crew members that render quality services to clients and by so doing, build good reputation and confidence among its clients. </p>
                                        </div>
                                    </div>

                                    <div class="accordion_in">
                                        <div class="acc_head"><i class="fa fa-suitcase"></i> Reliablitity</div>
                                        <div class="acc_content">
                                            <p>Our services are MBE/DBE/SBE certified and provided in accordance with the Federal, States, Cities and Counties Specifications, Plans and Standards. We stick to schedule and inform our clients ASAP when there is an unavoidable need to push back on schedule.</p>
                                        </div>
                                    </div>

                                    <div class="accordion_in acc_active">
                                        <div class="acc_head"><i class="fa fa-trophy"></i> High Technologies</div>
                                        <div class="acc_content">
                                            <p>Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed velit. Proin gravida arcu nisl, a dignissim mauris placerat id. Vivamus interdum urna at sapien varius elementum. Suspendisse ut mi felis et libero lacinia vel. Aenean elementum odio ut lorem cursus, eu auctor magna pellentesque. </p>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-6">
                                <figure class="vimeo">
                                    <a href="http://player.vimeo.com/video/112734492">
                                        <img src="http://placehold.it/750x421/ccc.jpg" alt="" />
                                        <img class="btn-play" src="images/video-play.png" alt="" />
                                    </a>
                                </figure>
                                <div class="image-about">
                                    <img src="http://placehold.it/275x275/ccc.jpg" alt="">
                                    <img src="http://placehold.it/275x275/ccc.jpg" alt="">
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

                <section class="features-about">
                    <div class="parallax parallax-hourse">
                        <div class="container">
                            <div class="row">

                                <div class="col-sm-4">
                                    <div class="features">
                                        <div class="top-img"><img src="images/features1.png"></div>
                                        <h4>Modern Design</h4>
                                        <p>We provide building designs that will surely wow you and stand out among other buildings.</p>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="features">
                                        <div class="top-img"><img src="images/features2.png"></div>
                                        <h4>Construction Managment</h4>
                                        <p>Count on us to stand with you from the start of the construction till you're completely satisfied.</p>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="features">
                                        <div class="top-img"><img src="images/features3.png"></div>
                                        <h4>General Contractor</h4>
                                        <p>We render all construction and construction related services such as supplying building materials.</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>

                <section class="team-about">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="team-member">
                                    <div class="member-image">
                                        <img src="{{ asset('images/ceo1.jpg') }}" alt="">
                                        <div class="overlay">
                                            <div class="social-team">
                                                <a href="#"><i class="fa fa-envelope"></i></a>
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <h5>Lawrence Okpulor</h5>
                                    <p>Founder and CEO</p>
                                </div>
                            </div>

                            <div class="col-md-8 col-sm-6">
                                <p>Lawrence Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto dignissimos
                                    ducimus eligendi eum ipsum itaque nemo nostrum quaerat sit vel. Ab amet distinctio dolorem
                                    ipsam iusto obcaecati quae reiciendis, sunt.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="action-about">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="call-action">
                                    <h4>We Have Worked on More Than 50+ Projects with Clients, if you interested?</h4>
                                    <a href="#" class="ot-btn btn-color">Get a quote</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>

        </div>
    </div>

@endsection

