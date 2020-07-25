<!DOCTYPE html>
<html lang="en">

<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Site Metas -->
<title>Tech Blog - Stylish Magazine Blog Template</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Site Icons -->
<link rel="shortcut icon" href="{{asset('tech-blog/images/favicon.ico')}}" type="image/x-icon" />
<link rel="apple-touch-icon" href="{{asset('tech-blog/images/apple-touch-icon.png')}}">

<!-- Design fonts -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

<!-- Bootstrap core CSS -->
<link href="{{asset('tech-blog/css/bootstrap.css')}}" rel="stylesheet">

<!-- FontAwesome Icons core CSS -->
<link href="{{asset('tech-blog/css/font-awesome.min.css')}}" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="{{asset('tech-blog/style.css')}}" rel="stylesheet">

<!-- Responsive styles for this template -->
<link href="{{asset('tech-blog/css/responsive.css')}}" rel="stylesheet">

<!-- Colors for this template -->
<link href="{{asset('tech-blog/css/colors.css')}}" rel="stylesheet">

<!-- Version Tech CSS for this template -->
<link href="{{asset('tech-blog/css/version/tech.css')}}" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!-- axios -->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<!-- csrf -->


</head>
<body>

<div id="wrapper">
    <header class="tech-header header">
        <div class="container-fluid">
            <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse" style="background-color: white !important;">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a style="background-color:black;" class="navbar-brand" href="/index"><img src="{{asset('tech-blog/images/version/tech-logo.png')}}" alt=""></a>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/index">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/blog">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/category">Category</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Contact Us</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav mr-2">
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-rss"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-android"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-apple"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div><!-- end container-fluid -->
    </header><!-- end market-header -->

    @yield('main')



    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="widget">
                        <div class="footer-text text-left">
                            <a href="index.html"><img src="{{asset('tech-blog/images/version/tech-footer-logo.png')}}" alt="" class="img-fluid"></a>
                            <p>Tech Blog is a technology blog, we sharing marketing, news and gadget articles.</p>
                            <div class="social">
                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fa fa-instagram"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Google Plus"><i class="fa fa-google-plus"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                            </div>

                            <hr class="invis">

                            <div class="newsletter-widget text-left">
                                <form class="form-inline">
                                    <input type="text" class="form-control" placeholder="Enter your email address">
                                    <button type="submit" class="btn btn-primary">SUBMIT</button>
                                </form>
                            </div><!-- end newsletter -->
                        </div><!-- end footer-text -->
                    </div><!-- end widget -->
                </div><!-- end col -->

                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                    <div class="widget">
                        <h2 class="widget-title">Popular Categories</h2>
                        <div class="link-widget">
                            <ul>
                                <li><a href="#">Marketing <span>(21)</span></a></li>
                                <li><a href="#">SEO Service <span>(15)</span></a></li>
                                <li><a href="#">Digital Agency <span>(31)</span></a></li>
                                <li><a href="#">Make Money <span>(22)</span></a></li>
                                <li><a href="#">Blogging <span>(66)</span></a></li>
                            </ul>
                        </div><!-- end link-widget -->
                    </div><!-- end widget -->
                </div><!-- end col -->

                <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
                    <div class="widget">
                        <h2 class="widget-title">Copyrights</h2>
                        <div class="link-widget">
                            <ul>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Advertising</a></li>
                                <li><a href="#">Write for us</a></li>
                                <li><a href="#">Trademark</a></li>
                                <li><a href="#">License & Help</a></li>
                            </ul>
                        </div><!-- end link-widget -->
                    </div><!-- end widget -->
                </div><!-- end col -->
            </div>

            <div class="row">
                <div class="col-md-12 text-center">
                    <br>
                    <div class="copyright">&copy;</a>.</div>
                </div>
            </div>
        </div><!-- end container -->
    </footer><!-- end footer -->

    <div class="dmtop">Scroll to Top</div>

</div><!-- end wrapper -->

<!-- Core JavaScript
================================================== -->
<script src="{{asset('tech-blog/js/jquery.min.js')}}"></script>
<script src="{{asset('tech-blog/js/tether.min.js')}}"></script>
<script src="{{asset('tech-blog/js/bootstrap.min.js')}}"></script>
<script src="{{asset('tech-blog/js/custom.js')}}"></script>

</body>
</html>
