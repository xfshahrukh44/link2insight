@extends('front.layouts.app')

@section('title', 'Facebook Pages')

@section('content')
    <section class='<?php echo isset($addWebsite) ? $addWebsite : "addWebsite"; ?>'>
        <div class="container">
            <form action="{{route('addFacebookPage')}}" method="POST" class="addWebsite-form">
                @csrf
                <input type="text" placeholder="Add FB Page URL" name="url" required>
                <button type="submit" class="addWebsite-btn"><span><i class="fa-regular fa-circle-plus"></i></span> Add Page</button>
            </form>
        </div>
    </section>
    <section class="portfolioSec">
        <div class="container">
{{--            <div class="portfolioHeader">--}}
{{--                <select>--}}
{{--                    <option value="Popular">Popular </option>--}}
{{--                    <option value="Popular">Popular </option>--}}
{{--                    <option value="Popular">Popular </option>--}}
{{--                </select>--}}
{{--                <button type="button" class="filterBtn"><span><i class="fa-solid fa-bars-filter"></i></span>--}}
{{--                    Filters</button>--}}
{{--            </div>--}}
            <div class="row smmProt-card mt-2">
                @foreach($facebook_pages as $facebook_page)
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="portCard">
                            <div class="portCard-img">
                                <a href="" data-toggle="modal" data-target="#smmModal">
                                    <img src="{{$facebook_page->image}}" alt="image" class="img-fluid w-100 object-fit">
                                </a>
                            </div>
                            <div class="portCard-content">
                                <a href="" data-toggle="modal" data-target="#smmModal">
                                    <img src="{{$facebook_page->image}}" alt="webLogo" class="img-fluid object-fit">
                                    <h5>{{$facebook_page->name}}</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


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
                                    <img src="{{asset('images/lastPost-img.webp')}}" alt="image"
                                         class="img-fluid w-100 h-100 object-fit">
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
@endsection


