<footer>
    <div class="widget-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h4><img src="{{ asset('images/logo-footer.png') }}" alt=""></h4>
                        <p>ARO Construction Services LLC (AROCS) is a registered residential, commercial, small industrial, environmental, and roadway related pre-construction and construction services contractor.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h4>Company</h4>
                        <div class="row">
                            <div class="col-xs-6 col-lg-5">
                                <ul>
                                    <li><a href="{{ action('HomeController@index') }}">Home</a></li>
                                    <li><a href="{{ action('ServiceController@index') }}">Services</a></li>
                                    <li><a href="{{ action('AboutController@index') }}">About Us</a></li>
                                    <li><a href="{{ action('ContactController@index') }}">Contact</a></li>
                                </ul>
                            </div>
                            <div class="col-xs-6 col-lg-7">
                                <ul>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="">Projects</a></li>
                                    <li><a href="#">404 Page</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <h4>Contact Us</h4>
                    <div class="textwidget">
                        <p><i class="fa fa-home"></i> 9831 Sadler Lane, MD 21128</p>
                        <p><i class="fa fa-phone"></i> (+1) 410 776 7550</p>
                        <p><i class="fa fa-mobile"></i> (+1) 443 474 8046</p>
                        <p><i class="fa fa-envelope-o"></i> info@aroconstructionservices.com</p>
                        <p><i class="fa fa-clock-o"></i> Mon-Fri 09:00 - 17:00 Mon-Fri</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <h4>Gallery</h4>
                    <div class="gallery-image">
                        <a href="#"><img src="http://placehold.it/80x80/ccc.jpg" alt=""></a>
                        <a href="#"><img src="http://placehold.it/80x80/ccc.jpg" alt=""></a>
                        <a href="#"><img src="http://placehold.it/80x80/ccc.jpg" alt=""></a>
                        <a href="#"><img src="http://placehold.it/80x80/ccc.jpg" alt=""></a>
                        <a href="#"><img src="http://placehold.it/80x80/ccc.jpg" alt=""></a>
                        <a href="#"><img src="http://placehold.it/80x80/ccc.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sub-footer">
        <div class="container">
            <p>Copyright © <?php echo date("Y"); ?> Aro Construction Services || Developed by <a href="http://www.benorim.com" target="_blank">Benjamin Orimoloye</a></p>
        </div>
    </div>
</footer>
<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>


<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/smk-accordion.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/classie.js') }}"></script>
<script type="text/javascript">
    (function($) { "use strict";
        $('.vimeo a,.youtube a').click(function (e) {
            e.preventDefault();
            var videoLink = $(this).attr('href');
            var classeV = $(this).parent();
            var PlaceV = $(this).parent();
            if ($(this).parent().hasClass('youtube')) {
                $(this).parent().wrapAll('<div class="video-wrapper">');
                $(PlaceV).html('<iframe frameborder="0" height="333" src="' + videoLink + '?autoplay=1&showinfo=0" title="YouTube video player" width="100%"></iframe>');
            } else {
                $(this).parent().wrapAll('<div class="video-wrapper">');
                $(PlaceV).html('<iframe src="' + videoLink + '?title=0&amp;byline=0&amp;portrait=0&amp;autoplay=1&amp;color=cfa144" width="100%" height="300" frameborder="0"></iframe>');
            }
        });
    })(jQuery);
</script>

<script type="text/javascript" src="{{ asset('js/custom-index.js') }}"></script>

<!-- SLIDER REVOLUTION SCRIPTS  -->
<script type="text/javascript" src="{{ asset('rs-plugin/js/jquery.themepunch.plugins.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('js/revslider-custom.js') }}"></script>