<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?php echo isset($title) ? $title : 'Home';  ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('images/favicon.webp')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}" />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-v4-rtl/4.4.1-1/css/bootstrap.min.css"/> -->
    <link rel="stylesheet" href="{{asset('css/custom.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}" />
</head>

<body>
<!-- header -->
<header class='<?php echo isset($header) ? $header : "header"; ?>'>
    <div class="container-fluid">
        <div class="header-main">
            <ul class="createUser">
{{--                <li><a href="" data-toggle="modal" data-target="#userModal">Create User</a></li>--}}
            </ul>
            <a href="index.php" class="header-main__logo">
                <img src="{{asset('images/logo.webp')}}" alt="logo" class="imgFluid w-100 h-100 object-fit">
            </a>
{{--            <ul class="header-main__nav">--}}
{{--                <li>--}}
{{--                    <form action="">--}}
{{--                        <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>--}}
{{--                        <input type="text">--}}
{{--                    </form>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <button class="notificationBtn">--}}
{{--                        <i class="fa-regular fa-bell bell"></i>--}}
{{--                    </button>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <div class="userProfile">--}}
{{--                        <a href="" class="d-block"><img src="{{asset('images/user.webp')}}" alt="user"--}}
{{--                                                        class="img-fluid w-100 object-fit"></a>--}}
{{--                    </div>--}}
{{--                </li>--}}
            </ul>
        </div>
        <nav class="navbar navbar-expand-lg p-0 responsiveHeader-main d-none">
            <a class="navbar-brand header-main__logo m-0" href="index.php">
                <img src="{{asset('images/logo.webp')}}" alt="img">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span><i class="fa-solid fa-bars"></i></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="header-main__nav">
                    <li>
                        <form action="">
                            <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                            <input type="text">
                        </form>
                    </li>
                    <li>
                        <button class="notificationBtn">
                            <i class="fa-regular fa-bell bell"></i>
                        </button>
                    </li>
                    <li>
                        <div class="userProfile">
                            <a href="" class="d-block"><img src="{{asset('images/user.webp')}}" alt="user"
                                                            class="img-fluid w-100 object-fit"></a>
                        </div>
                    </li>
                </ul>
                <ul class="createUser d-flex align-items-center justify-content-center">
                    <li><a href="login.php">login</a></li>
                    <li>\</li>
                    <li><a href="" data-toggle="modal" data-target="#userModal">Create User</a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>


<section class="signUp-sec">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-7">
                <div class="signUp-main">
                    <div class="signUp-bg">
                        <img src="{{asset('images/signup-bg.webp')}}" alt="image" class="bg-img img-fluid w-100 object-fit">
                        <div class="signUp-content">
                            <div class="signUp-logo">
                                <a href="index.php"><img src="{{asset('images/logo.webp')}}" alt="" class="img-fluid"></a>
                            </div>
                            <h4>Lorem Ipsum is simply
                                dummy text of the printing
                                and typesetting industry.
                            </h4>
{{--                            <a href="" class="signupBtn signUp-btn">Sign Up Now</a>--}}
                        </div>
                    </div>
                    <div class="signUp-img">
                        <img src="{{asset('images/signup-img.webp')}}" alt="image" class="img-fluid w-100 object-fit">
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-5">
                <div class="signIn-olive secondForm">
                    <div class="signIn-detail">
                        <h4 class="text-center">Sign in to Oilve Digitals</h4>
{{--                        <a href="" class="googleBtn mb-0">--}}
{{--                            <span><img src="{{asset('images/googleIcon.webp')}}" alt="image" class="img-fluid"></span>--}}
{{--                            Sign up with Google--}}
{{--                        </a>--}}
{{--                        <div class="or">--}}
{{--                            <span></span>--}}
{{--                            <p>or sign in with email</p>--}}
{{--                            <span></span>--}}
{{--                        </div>--}}
                        <div class="signIn-form">
                            <form action="{{route('login')}}" class="userForm" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="inputField">
                                            <label for="">Username</label>
                                            <input name="username" tabindex="1" type="text" autofocus required>
{{--                                            @error('username')--}}
{{--                                                <span class="text-danger">{{$message}}</span>--}}
{{--                                            @enderror--}}
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="inputField password">
                                            <label for="">Password
{{--                                                <span><a href="">forgot?</a></span>--}}
                                            </label>
                                            <input name="password" tabindex="2" type="password" required>
                                        </div>
                                    </div>
                                    {{--errors--}}
                                    @if(session()->has('errors'))
                                        <div class="col-lg-12">
                                            <ol class="text-center" style="list-style-type: unset !important;">
                                                @foreach(session()->get('errors') as $error)
                                                    <li>
                                                        <small class="text-danger">{{$error}}</small>
                                                    </li>
                                                @endforeach
                                            </ol>
                                        </div>
                                    @endif
                                    <div class="col-lg-12">
                                        <div class="inputField-btn mb-4">
                                            <button type="submit">Sign In</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
{{--                            <p class="already text-center">Don't have an account? <a href="" class="signUp-btn">Sign Up</a></p>--}}
                        </div>
                    </div>
                    <div class="signIn-form">
                        <form action="{{route('login')}}" class="userForm" method="POST">
                            @csrf
                            <h4 class="text-center">Sign Up to Oilve Digitals</h4>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="inputField">
                                        <label for="">Name</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="inputField">
                                        <label for="">Username</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="inputField">
                                        <label for="">Email</label>
                                        <input type="email">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="inputField">
                                        <label for="">Password</label>
                                        <input type="password" placeholder="6+ characters">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="inputField checkBox">
                                        <input type="checkbox" id="check1">
                                        <p class="terms" for="check1">By creating an account you agree with our <a
                                                href="">Terms of
                                                Service</a>, <a href="">Privacy Policy</a>, and our default <a
                                                href="">Notification Settings</a>.</p>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="inputField-btn mb-4">
                                        <button type="submit">Sign Up</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <p class="already text-center">Already have an account? <a href="" class="signUp-btn">Sign In</a></p>
                        <p class="terms text-center">This site is protected by reCAPTCHA and the Google
                            <a href="">Privacy Policy</a> and <a href="">Terms of Service</a> apply.</p>
                    </div>
                    <div class="signIn-copyright">
                        <p>All Rights Reserved - 2023</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- footer -->
<footer class='<?php echo isset($footer) ? $footer : "footer"; ?>'>
    <p class="text-center">All Rights Reserved - 2023</p>
</footer>
<!-- adminPopup -->
<div class="adminPopup modal fade" id="adminModal" tabindex="-1" role="dialog" aria-labelledby="adminModal"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="portCard mt-0">
                            <div class="portCard-img">
                                <a href="">
                                    <img src="{{asset('images/portCard-popup-img.webp')}}" alt="image"
                                         class="img-fluid w-100 object-fit">
                                </a>
                            </div>
                            <div class="portCard-content">
                                <a href="">
                                    <img src="{{asset('images/webLogo1.webp')}}" alt="webLogo" class="img-fluid object-fit">
                                    <h5>CreativeDesignCrew</h5>
                                </a>
                                <div class="portCard-btn">
                                    <button><span><i class="fa-solid fa-heart"></i></span> 10k</button>
                                    <button><span><i class="fa-solid fa-user-plus"></i></span> 5k</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="totalCard">
                            <h5>Total Number of Likes</h5>
                            <div class="totalCard-flex">
                                <div class="totalCard-content">
                                    <h4>1,532</h4>
                                    <p>Page Likes <span><i class="fa-solid fa-caret-up"></i> 45%</span></p>
                                </div>
                                <div class="totalCard-img">
                                    <img src="{{asset('images/totalCard-img.webp')}}" alt="image" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="totalCard">
                            <h5>Total Number of Followers</h5>
                            <div class="totalCard-flex">
                                <div class="totalCard-content">
                                    <h4>1,532</h4>
                                    <p>Page Likes <span><i class="fa-solid fa-caret-up"></i> 45%</span></p>
                                </div>
                                <div class="totalCard-img">
                                    <img src="{{asset('images/totalCard-img.webp')}}" alt="image" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="postCard">
                            <div class="postCard-img">
                                <img src="{{asset('images/lastPost-img.webp')}}" alt="image" class="img-fluid w-100 h-100 object-fit">
                            </div>
                            <div class="postCard-content">
                                <p>08-10-2023</p>
                                <h5>Last Posted</h5>
                                <p>07:12 PM</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="webDetails">
                            <div class="webRank">
                                <a href="" class="webBtn"><span><i class="fa-light fa-globe"></i></span>
                                    www.creativedesigncrew.com</a>
                                <div class="webRank-content">
                                    <h5>Page rank of each keyword</h5>
                                    <ul>
                                        <li>
                                            <span>Lorem</span>
                                            <span>1st Page</span>
                                        </li>
                                        <li>
                                            <span>Lorem Ipsum</span>
                                            <span>2nd Page</span>
                                        </li>
                                        <li>
                                            <span>Web page</span>
                                            <span>3rd Page</span>
                                        </li>
                                        <li>
                                            <span>Eolved Over</span>
                                            <span>4th Page</span>
                                        </li>
                                        <li>
                                            <span>Lorem</span>
                                            <span>5th Page</span>
                                        </li>
                                        <li>
                                            <span>Lorem Ipsum</span>
                                            <span>6th Page</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="webDate">
                                <div class="webDate-content">
                                    <h5>Started Date</h5>
                                    <h4>12 <span class="d-block">Jan 2023</span></h4>
                                </div>
                                <div class="webDate-content mb-0">
                                    <h5>Total Months</h5>
                                    <h4>29 <span class="d-block">09 Days</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- addUser -->
<div class="addUser modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="userModal"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="" class="userForm">
                            <h4 class="text-center">Add User Details</h4>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="inputField">
                                        <label for="">Name</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="inputField">
                                        <label for="">Username</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="inputField">
                                        <label for="">Email</label>
                                        <input type="email">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="inputField">
                                        <label for="">Password</label>
                                        <input type="password" placeholder="6+ characters">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="inputField-btn">
                                        <button type="submit">Add Now</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- seoPopup -->
<div class="seoPopup modal fade" id="seoModal" tabindex="-1" role="dialog" aria-labelledby="seoModal"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="portCard mt-0">
                            <div class="portCard-img">
                                <a href="">
                                    <img src="{{asset('images/seopopup-img.webp')}}" alt="image" class="img-fluid w-100 object-fit">
                                </a>
                            </div>
                            <div class="portCard-content">
                                <a href="">
                                    <img src="{{asset('images/webLogo1.webp')}}" alt="webLogo" class="img-fluid object-fit">
                                    <h5>CreativeDesignCrew</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-6 col-md-6">
                        <div class="webRank">
                            <a href="" class="webBtn"><span><i class="fa-light fa-globe"></i></span>
                                www.creativedesigncrew.com</a>
                            <a href="" class="addBtn" data-toggle="modal" data-dismiss="modal"
                               data-target="#keywordModal"><span><i class="fa-regular fa-circle-plus"></i></span>Add
                                Keyword</a>
                        </div>
                        <div class="webDate">
                            <div class="webDate-content">
                                <h5>Started Date</h5>
                                <h4>12 <span class="d-block">Jan 2023</span></h4>
                            </div>
                            <div class="webDate-content">
                                <h5>Total Months</h5>
                                <h4>29 <span class="d-block">09 Days</span></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="webRank-content mt-0">
                            <h5>Page rank of each keyword</h5>
                            <ul>
                                <li>
                                    <span>Lorem</span>
                                    <span>1st Page</span>
                                </li>
                                <li>
                                    <span>Lorem Ipsum</span>
                                    <span>2nd Page</span>
                                </li>
                                <li>
                                    <span>Web page</span>
                                    <span>3rd Page</span>
                                </li>
                                <li>
                                    <span>Eolved Over</span>
                                    <span>4th Page</span>
                                </li>
                                <li>
                                    <span>Lorem</span>
                                    <span>5th Page</span>
                                </li>
                                <li>
                                    <span>Lorem Ipsum</span>
                                    <span>6th Page</span>
                                </li>
                                <li>
                                    <span>Web page</span>
                                    <span>7th Page</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- keywordPopup -->
<div class="keywordPopup modal fade" id="keywordModal" tabindex="-1" role="dialog" aria-labelledby="keywordModal"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="keyword">
                            <h4 class="text-center">Add Keyword</h4>
                            <form action="" class="addWebsite-form mb-0">
                                <input type="text" placeholder="Lorm Ipusm">
                                <button type="submit" class="addWebsite-btn"><span><i
                                            class="fa-regular fa-circle-plus"></i></span> Add Keyword</button>
                            </form>
                            <div class="keyword-content">
                                <h5>Keywords <span><img src="{{asset('images/line.webp')}}" alt="image" class="img-fluid"></span></h5>
                                <div class="keywordBtn">
                                    <button type="button">Lorem</button>
                                    <button type="button">Lorem Ipsum</button>
                                    <button type="button">simply dummy</button>
                                    <button type="button">printing</button>
                                    <button type="button">typesetting</button>
                                    <button type="button">dummy text ever</button>
                                    <button type="button">unknown printer</button>
                                    <button type="button">five centuries</button>
                                    <button type="button">leap</button>
                                    <button type="button">electronic</button>
                                    <button type="button">essentially unchanged</button>
                                    <button type="button">sheets</button>
                                    <button type="button">containing Lorem</button>
                                    <button type="button">packages</button>
                                    <button type="button">Lorem</button>
                                    <button type="button">Lorem Ipsum</button>
                                    <button type="button">simply dummy</button>
                                    <button type="button">printing</button>
                                    <button type="button">typesetting</button>
                                    <button type="button">dummy text ever</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- smmPopup -->
<div class="smmPopup modal fade" id="smmModal" tabindex="-1" role="dialog" aria-labelledby="smmModal"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <div class="portCard mt-0">
                            <div class="portCard-img">
                                <a href="">
                                    <img src="{{asset('images/portCard-popup-img.webp')}}" alt="image"
                                         class="img-fluid w-100 h-100 object-fit">
                                </a>
                            </div>
                            <div class="portCard-content">
                                <a href="">
                                    <img src="{{asset('images/webLogo1.webp')}}" alt="webLogo" class="img-fluid object-fit">
                                    <h5>CreativeDesignCrew</h5>
                                </a>
                                <div class="portCard-btn">
                                    <button><span><i class="fa-solid fa-heart"></i></span> 10k</button>
                                    <button><span><i class="fa-solid fa-user-plus"></i></span> 5k</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="postCard">
                            <div class="postCard-img">
                                <img src="{{asset('images/lastPost-img.webp')}}" alt="image" class="img-fluid w-100 h-100 object-fit">
                            </div>
                            <div class="postCard-content">
                                <p>08-10-2023</p>
                                <h5>Last Posted</h5>
                                <p>07:12 PM</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-8 col-md-8">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="totalCard mb-0">
                                    <h5>Total Number of Likes</h5>
                                    <div class="totalCard-flex">
                                        <div class="totalCard-content">
                                            <h4>1,532</h4>
                                            <p>Page Likes <span><i class="fa-solid fa-caret-up"></i> 45%</span></p>
                                        </div>
                                        <div class="totalCard-img">
                                            <img src="{{asset('images/totalCard-img.webp')}}" alt="image" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="totalCard mb-0">
                                    <h5>Total Number of Followers</h5>
                                    <div class="totalCard-flex">
                                        <div class="totalCard-content">
                                            <h4>1,532</h4>
                                            <p>Page Likes <span><i class="fa-solid fa-caret-up"></i> 45%</span></p>
                                        </div>
                                        <div class="totalCard-img">
                                            <img src="{{asset('images/totalCard-img.webp')}}" alt="image" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="webDate mt-0">
                            <div class="webDate-content mb-0">
                                <h5>Started Date</h5>
                                <h4>12 <span class="d-block">Jan 2023</span></h4>
                            </div>
                            <div class="webDate-content mb-0">
                                <h5>Total Months</h5>
                                <h4>29 <span class="d-block">09 Days</span></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="{{asset('js/all.min.js')}}"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script> -->
<script src="{{asset('js/custom.min.js')}}"></script>

</body>

</html>
