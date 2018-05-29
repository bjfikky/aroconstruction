@extends('layouts.master')

@section('content')

    <div id="content">
        <div class="entry-content">

            <div class="page-title">
                <div class="container">
                    <h1>Contact Us</h1>
                </div>
            </div>

            <div class="breadcrumbs">
                <div class="container">
                    <ul class="crumb">
                        <li><a href="#"><i class="fa fa-home"></i> Home</a></li> <span>/</span>
                        <li class="active"> Contact Us</li>
                    </ul>
                </div>
            </div>

            <div class="page-content">
                <section class="form-info">
                    <div class="container">
                        <div class="row">

                            <div class="col-md-4">
                                <div class="contact-info">
                                    <h4>Contact Info</h4>
                                    <p>Use any of the mediums below to reach out to us. It usually takes about 48 hours for us to reply emails. </p>
                                    <ul class="none-style">
                                        <li><i class="fa fa-home"></i> 9831 Sadler Lane, Perry Hall, MD 21128</li>
                                        <li><i class="fa fa-phone"></i>  (+1) 410 776 7550</li>
                                        <li><i class="fa fa-mobile-phone"></i> (+1) 443 474 8046</li>
                                        <li><i class="fa fa-envelope-o"></i> info@aroconstructionservices.com</li>
                                        <li><i class="fa fa-clock-o"></i> Mon-Fri 09:00 - 17:00 Mon-Fri</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-8">
                                <div class="contact-form">

                                    @if(Session::has('message'))
                                        <div class="alert alert-success"><strong><i class="fa fa-info-circle" aria-hidden="true"></i> {{ Session::get('message') }}</strong></div>
                                    @endif

                                    <h4>Send us a message</h4>

                                    <form action="/contact" method="post" id="ajax-form" class="comment-form" >
                                        {{ csrf_field() }}
                                        <div class="row-comment">
                                            <p class="col-4">
                                                <input id="name" name="name" type="text" value="" placeholder="Your Name">
                                                @if($errors->has('name'))
                                                    <span class="error" id="err-name">{{ $errors->first('name') }}</span>
                                                @endif
                                            </p>

                                            <p class="col-4">
                                                <input id="email" name="email" type="text" value="" placeholder="Your Email">
                                                @if($errors->has('name'))
                                                    @foreach( $errors->get('email') as $message )
                                                        <span class="error" id="err-email">{{ $message }}</span>
                                                    @endforeach
                                                @endif
                                            </p>

                                            <p class="col-4"><input id="phone" name="phone" type="text" value="" placeholder="Phone Number (optional)"></p>
                                        </div>

                                        <p class="comment-form-comment">
                                            <textarea id="message" name="message" placeholder="Your Message"></textarea>
                                            @if($errors->has('name'))
                                                @foreach( $errors->get('message') as $message )
                                                    <span class="error" id="err-email">{{ $message }}</span>
                                                @endforeach
                                            @endif
                                        </p>

                                        <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit ot-btn btn-color" value="Send Email"></p>
                                    </form>

                                    <div id="ajaxsuccess">Successfully sent!!</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>

                <section>
                    <div id="google_map"></div>
                </section>

            </div>

        </div>
    </div>
    <script>
        function initMap() {
            var uluru = {lat: 39.427485, lng: -76.467364};
            var map = new google.maps.Map(document.getElementById('google_map'), {
                zoom: 12,
                center: uluru
            });
            var marker = new google.maps.Marker({
                position: uluru,
                map: map
            });
        }
    </script>

    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0ligScmjhFiCNSEasybszicy23_7rftU&callback=initMap">
    </script>

@endsection