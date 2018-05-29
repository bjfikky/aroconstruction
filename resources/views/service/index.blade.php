@extends('layouts.master')

@section('content')

    <div id="content">
        <div class="entry-content">

            <div class="page-title">
                <div class="container">
                    <h1>Our Services</h1>
                </div>
            </div>

            <div class="breadcrumbs">
                <div class="container">
                    <ul class="crumb">
                        <li><a href="#"><i class="fa fa-home"></i> Home</a></li> <span>/</span>
                        <li class="active"> Our Services</li>
                    </ul>
                </div>
            </div>

            <div class="page-content">
                <section class="list-services">
                    <div class="container">
                        <div class="row">

                            @foreach( $services as $service)
                                <div class="col-md-4 col-sm-6">
                                    <div class="service-box">
                                        <h4><a href="service-details.html">{{ $service['title'] }}</a></h4>
                                        <a href="service-details.html"><img src={{ $service['image-url'] }} alt=""></a>

                                        <p>{{ $service['body'] }}</p>
                                        {{--<a href="service-details.html" class="more-link">Read More</a>--}}
                                    </div>
                                </div>
                            @endforeach



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
