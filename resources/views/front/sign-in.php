<?php $header = "header header--none";
$addWebsite = "addWebsite header--none";
include 'include/header.php' ?>


<section class="signUp-sec">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-7">
                <div class="signUp-main">
                    <div class="signUp-bg">
                        <img src="images/signup-bg.webp" alt="image" class="bg-img img-fluid w-100 object-fit">
                        <div class="signUp-content">
                            <div class="signUp-logo">
                                <a href="index.php"><img src="images/logo.webp" alt="" class="img-fluid"></a>
                            </div>
                            <h4>Lorem Ipsum is simply
                                dummy text of the printing
                                and typesetting industry.
                            </h4>
                            <a href="" class="signupBtn signUp-btn">Sign Up Now</a>
                        </div>
                    </div>
                    <div class="signUp-img">
                        <img src="images/signup-img.webp" alt="image" class="img-fluid w-100 object-fit">
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-5">
                <div class="signIn-olive secondForm">
                    <div class="signIn-detail">
                        <h4 class="text-center">Sign in to Oilve Digitals</h4>
                        <a href="" class="googleBtn mb-0">
                            <span><img src="images/googleIcon.webp" alt="image" class="img-fluid"></span>
                            Sign up with Google
                        </a>
                        <div class="or">
                            <span></span>
                            <p>or sign in with email</p>
                            <span></span>
                        </div>
                        <div class="signIn-form">
                            <form action="" class="userForm">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="inputField">
                                            <label for="">Username or Email</label>
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="inputField password">
                                            <label for="">Password
                                                <span><a href="">forgot?</a></span>
                                            </label>
                                            <input type="password">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="inputField-btn mb-4">
                                            <button type="submit">Sign In</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <p class="already text-center">Don't have an account? <a href="" class="signUp-btn">Sign Up</a></p>
                        </div>
                    </div>
                    <div class="signIn-form">
                        <form action="" class="userForm">
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


<?php $footer = "footer footer--none";
include 'include/footer.php' ?>