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
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque metus arcu, malesuada a est eget, maximus efficitur sapien. </p>
                                    <ul class="none-style">
                                        <li><i class="fa fa-home"></i> 379 5th Ave  New York, NYC 10018</li>
                                        <li><i class="fa fa-phone"></i> (+1) 96 716 6879</li>
                                        <li><i class="fa fa-fax"></i> (+1) 96 716 6879</li>
                                        <li><i class="fa fa-envelope-o"></i> contact@site.com</li>
                                        <li><i class="fa fa-clock-o"></i> Mon-Fri 09:00 - 17:00 Mon-Fri</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-8">
                                <div class="contact-form">
                                    <h4>Send us a message</h4>

                                    <form action="mail-it.php" method="post" id="ajax-form" class="comment-form" novalidate="">
                                        <div class="row-comment">
                                            <p class="col-4">
                                                <input id="name" name="name" type="text" value="" placeholder="Your Name">
                                                <span class="error" id="err-name">please enter name</span>
                                            </p>
                                            <p class="col-4">
                                                <input id="email" name="email" type="email" value="" placeholder="Your Email">
                                                <span class="error" id="err-email">please enter e-mail</span>
                                                <span class="error" id="err-emailvld">e-mail is not a valid format</span>
                                            </p>
                                            <p class="col-4"><input id="phone" name="phone" type="text" value="" placeholder="Phone Number"></p>
                                        </div>
                                        <p class="comment-form-comment"><textarea id="message" name="message" placeholder="Your Message"></textarea></p>
                                        <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit ot-btn btn-color" value="Send Email"></p>
                                        <div class="error text-align-center" id="err-form">There was a problem validating the form please check!</div>
                                        <div class="error text-align-center" id="err-timedout">The connection to the server timed out!</div>
                                        <div class="error" id="err-state"></div>
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