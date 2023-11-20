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
                                    <img src="images/portCard-popup-img.webp" alt="image"
                                        class="img-fluid w-100 object-fit">
                                </a>
                            </div>
                            <div class="portCard-content">
                                <a href="">
                                    <img src="images/webLogo1.webp" alt="webLogo" class="img-fluid object-fit">
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
                                    <img src="images/totalCard-img.webp" alt="image" class="img-fluid">
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
                                    <img src="images/totalCard-img.webp" alt="image" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="postCard">
                            <div class="postCard-img">
                                <img src="images/lastPost-img.webp" alt="image" class="img-fluid w-100 h-100 object-fit">
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
                                    <img src="images/seopopup-img.webp" alt="image" class="img-fluid w-100 object-fit">
                                </a>
                            </div>
                            <div class="portCard-content">
                                <a href="">
                                    <img src="images/webLogo1.webp" alt="webLogo" class="img-fluid object-fit">
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
                                <h5>Keywords <span><img src="images/line.webp" alt="image" class="img-fluid"></span></h5>
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
                                    <img src="images/portCard-popup-img.webp" alt="image"
                                        class="img-fluid w-100 h-100 object-fit">
                                </a>
                            </div>
                            <div class="portCard-content">
                                <a href="">
                                    <img src="images/webLogo1.webp" alt="webLogo" class="img-fluid object-fit">
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
                                <img src="images/lastPost-img.webp" alt="image" class="img-fluid w-100 h-100 object-fit">
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
                                            <img src="images/totalCard-img.webp" alt="image" class="img-fluid">
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
                                            <img src="images/totalCard-img.webp" alt="image" class="img-fluid">
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

<?php include 'include/js.php'; ?>

</body>

</html>