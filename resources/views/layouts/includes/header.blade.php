<div class="images-preloader">
    <div id="preloader_1" class="rectangle-bounce">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<div class="top-line"></div>
<header class="static">
    <div class="container">
        <h1 class="logo">
            <a href="{{ action('HomeController@index') }}"><img src="{{ asset('images/logo.png') }}" alt=""></a>
        </h1>
        <div class="top-info">
            <p><span>Cell Phone:</span> (+1) 443 474 8046</p>
            <p class="e-mail"><span>Email:</span> <a href="mailto:info@aroconstructionservices.com">info@aroconstructionservices.com</a></p>
            <div class="socials">
                <a href="https://fb.me/AroConstructionServices" target="_blank"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                {{--<a href="#"><i class="fa fa-google-plus"></i></a>--}}
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="https://www.instagram.com/aroconstructionservices/" target="_blank"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
        <button class="btn-toggle"><i class="fa fa-reorder"></i></button>
        <nav class="nav">
            <ul class="main-menu">
                <li class="menu-item-has-children">
                    <div class="arrow-parent"><i class="fa fa-angle-down"></i></div>
                    <a href="{{ action('HomeController@index') }}">Home</a>
                </li>


                {{--<li>--}}
                    {{--<div class="arrow-parent"><i class="fa fa-angle-down"></i></div>--}}
                    {{--<a href="project-list.html">Projects</a>--}}
                    {{--<ul class="dropdown-menu">--}}
                        {{--<li><a href="project-list.html">Project List v1</a></li>--}}
                        {{--<li><a href="project-listv2.html">Project List v2</a></li>--}}
                        {{--<li><a href="project-details.html">Project Details v1</a></li>--}}
                        {{--<li><a href="project-detailsv2.html">Project Details v2</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}


                <li><a href="{{ action('ServiceController@index') }}">Services</a></li>
                <li><a href="{{ action('AboutController@index') }}">About Us</a></li>
                {{--<li><a href="">Blog</a></li>--}}
                <li><a href="{{ action('ContactController@index') }}">Contact Us</a></li>

                {{--<li class="menu-item-has-children">--}}
                    {{--<div class="arrow-parent"><i class="fa fa-angle-down"></i></div>--}}
                    {{--<a href="#">Pages</a>--}}
                    {{--<ul class="dropdown-menu">--}}
                        {{--<li><a href="contact.html">Contact Us</a></li>--}}
                        {{--<li class="menu-item-has-children">--}}
                            {{--<div class="arrow-parent"><i class="fa fa-angle-down"></i></div>--}}
                            {{--<a href="blog.html">Blog</a>--}}
                            {{--<ul class="dropdown-menu">--}}
                                {{--<li><a href="blog.html">Blog List</a></li>--}}
                                {{--<li><a href="blog-post.html">Blog Details</a></li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li><a href="elements.html">Elements</a></li>--}}
                        {{--<li><a href="typography.html">Typography</a></li>--}}
                        {{--<li><a href="404.html">Page 404</a></li>--}}
                        {{--<li><a href="coming-soon.html">Coming Soon</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
            </ul>
        </nav>
    </div>
</header>