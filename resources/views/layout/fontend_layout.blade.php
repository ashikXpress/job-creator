<!doctype html>
<html lang="en" class="no-js">
<head>
@include('layout.assets._fontend_style')

</head>
<body class="boxed-style">

<!-- Container -->
<div id="container">
    <!-- Header
        ================================================== -->
    <header class="clearfix">

        <div class="top-line">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <ul class="info-list">
                            <li>
                                <span class="live-time"><i class="fa fa-calendar-o"></i>Saturday, 10 Jann 2018</span>
                            </li>
                            <li>
                                <a href="contact.html">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <ul class="info-list right-align">
                            <li>
                                  @if(Auth::guest())
                                    <a href="{{route('userLogin')}}">sign in</a>
                                @else
                                    <a href="#">Profile {{Auth::user()->name}}</a>
                                @endif

                            </li>
                            <li>
                                @if(Auth::guest())
                                    <a href="{{route('createUser')}}">Register</a>
                                @else
                                    <a href="{{route('userLogout')}}">Logout</a>
                                @endif
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-banner-place">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img src="images/logo.png" alt="">
                </a>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="category1.html">Politics</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="category1.html">World</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="category1.html">Elections</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="category1.html">Opinion</a>
                        </li>
                        <li class="nav-item drop-link">
                            <a class="nav-link food" href="#">Pages</a>
                            <ul class="dropdown">
                                <li><a href="archive.html">Archive Page</a></li>
                                <li><a href="tag.html">Tags Page</a></li>
                                <li><a href="search.html">Search Page</a></li>
                                <li><a href="register.html">Register Page</a></li>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                                <li><a href="404-error.html">404 Error</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- End Header -->

    <!-- content-section
        ================================================== -->
    <section id="content-section">
        <div class="container">

            <div class="row">
                <div class="col-lg-8">

                   @yield('content')

                </div>

                <div class="col-lg-4 sidebar-sticky">

                    <!-- Sidebar -->
                    <div class="sidebar theiaStickySidebar">
                        <div class="search-widget widget">
                            <form>
                                <input type="search" placeholder="Search for..."/>
                                <button type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </form>
                        </div>
                        <div class="widget news-widget">
                            <h1>Breaking News</h1>
                            <ul class="list-news">
                                <li>
                                    <h2><a href="single-post.html">The Guardian view on Germany’s coalition deal: Merkel in the balance</a></h2>
                                </li>
                                <li>
                                    <h2><a href="single-post.html">Philip Dunne, sacked after his NHS remarks, must now face his constituents</a></h2>
                                </li>
                                <li>
                                    <h2><a href="single-post.html">Cameroon’s heartbreaking struggles are a relic of British colonialism</a></h2>
                                </li>
                                <li>
                                    <h2><a href="single-post.html">India has 600 million young people – and they’re set to change our world</a></h2>
                                </li>
                                <li>
                                    <h2><a href="single-post.html">Ramaphosa vows to fight corruption in ruling ANC</a></h2>
                                </li>
                            </ul>
                        </div>

                        <div class="advertisement">
                            <a href="#"><img src="upload/addsense/300x250.jpg" alt=""></a>
                        </div>

                        <div class="widget tags-widget">
                            <h1>Tags</h1>
                            <ul class="tags-list">
                                <li><a href="#">World</a></li>
                                <li><a href="#">Politic</a></li>
                                <li><a href="#">Travel</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Company</a></li>
                                <li><a href="#">Traditional</a></li>
                                <li><a href="#">Future</a></li>
                                <li><a href="#">Culture</a></li>
                            </ul>
                        </div>

                    </div>

                </div>
            </div>

            <!-- Posts-block -->

            <!-- End Posts-block -->
            <!-- Advertisement -->
            <div class="advertisement">
                <a href="#"><img src="upload/addsense/620x80grey.jpg" alt=""></a>
            </div>
            <!-- End Advertisement -->



            <!-- Posts-block -->

            <!-- End Posts-block -->

        </div>
    </section>
    <!-- End content section -->

    <!-- footer
        ================================================== -->
    <footer>
        <div class="container">

            <div class="up-footer">

                <div class="footer-widget text-widget">
                    <h1><a href="index.html"><img src="images/logo-black.png" alt=""></a></h1>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <ul class="social-icons">
                        <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>

            </div>

        </div>
        <div class="down-footer">
            <div class="container">
                <ul class="list-footer">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
                <p>&copy; Copyright By Nunforest 2017</p>
            </div>
        </div>
    </footer>
    <!-- End footer -->

</div>
<!-- End Container -->

<!-- Login Modal -->

<!-- End Login Modal -->

@include('layout.assets._fontend_script')

</body>
</html>