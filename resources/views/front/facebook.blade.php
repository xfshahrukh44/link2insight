@extends('front.layouts.app')

@section('title', 'Facebook Pages')

@section('content')
    <section class='<?php echo isset($addWebsite) ? $addWebsite : "addWebsite"; ?>'>
        <div class="container">
            <form action="{{route('addFacebookPage')}}" method="POST" class="addWebsite-form">
                @csrf
                <input type="text" placeholder="Add FB Page URL" name="url" required>
                <button type="submit" class="addWebsite-btn">
{{--                    <span><i class="fa-regular fa-circle-plus"></i></span>--}}
                    Add Page
                </button>
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
            @if (count($facebook_pages) > 0 )
                <div class="row smmProt-card mt-2 px-3">
                    <a href="{{route('refreshData')}}" class="btn btn-success btn-block btn_refresh_data">
                        <i class="fas fa-arrows-rotate mr-2"></i>Refresh Data
                    </a>
                </div>
            @endif

            <div class="row smmProt-card mt-2">
                @foreach($facebook_pages as $facebook_page)
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="portCard">
                            <div class="portCard-img">
                                <a href="" data-toggle="modal" data-target="#smmModal_{{$facebook_page->id ?? 'N/A'}}">
                                    <img src="{{$facebook_page->image ?? 'N/A'}}" alt="image" class="img-fluid w-100 object-fit">
                                </a>
                            </div>
                            <div class="portCard-content">
                                <a href="" data-toggle="modal" data-target="#smmModal_{{$facebook_page->id ?? 'N/A'}}">
                                    <img src="{{$facebook_page->image ?? 'N/A'}}" alt="webLogo" class="img-fluid object-fit">
                                    <h5>{{$facebook_page->name ?? 'N/A'}}</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
{{--            {{$facebook_pages->links()}}--}}
        </div>
    </section>


    <!-- smmPopup -->
    @foreach($facebook_pages as $facebook_page)
        <div class="smmPopup modal fade" id="smmModal_{{$facebook_page->id ?? 'N/A'}}" tabindex="-1" role="dialog" aria-labelledby="smmModal"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-8 col-md-8">
                                <div class="portCard mt-0">
                                    <div class="portCard-img">
                                        <a href="">
                                            <img src="{{$facebook_page->image ?? 'N/A'}}" alt="image"
                                                 class="img-fluid w-100 h-100 object-fit">
                                        </a>
                                    </div>
                                    <div class="portCard-content">
                                        <a href="">
                                            <img src="{{$facebook_page->image ?? 'N/A'}}" alt="webLogo" class="img-fluid object-fit">
                                            <h5>{{$facebook_page->name ?? 'N/A'}}</h5>
                                        </a>
                                        <div class="portCard-btn">
                                            <button><span><i class="fa-solid fa-heart"></i></span> {{$facebook_page->likes ?? 'N/A'}}</button>
                                            <button><span><i class="fa-solid fa-user-plus"></i></span> {{$facebook_page->followers ?? 'N/A'}}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="postCard">
                                    <div class="postCard-img">
                                        <img src="{{$facebook_page->image ?? 'N/A'}}" alt="image"
                                             class="img-fluid w-100 h-100 object-fit">
                                    </div>
                                    <div class="postCard-content">
{{--                                        <p>08-10-2023</p>--}}
                                        <h5>Last Posted</h5>
                                        <p>{{$facebook_page->last_post_at ?? 'N/A'}}</p>
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
                                                    <h4>{{$facebook_page->likes ?? 'N/A'}}</h4>
                                                    <p>
                                                        Page Likes
{{--                                                        <span><i class="fa-solid fa-caret-up"></i> 45%</span>--}}
                                                    </p>
                                                </div>
{{--                                                <div class="totalCard-img">--}}
{{--                                                    <img src="{{asset('images/totalCard-img.webp')}}" alt="image" class="img-fluid">--}}
{{--                                                </div>--}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="totalCard mb-0">
                                            <h5>Total Number of Followers</h5>
                                            <div class="totalCard-flex">
                                                <div class="totalCard-content">
                                                    <h4>{{$facebook_page->followers ?? 'N/A'}}</h4>
                                                    <p>
                                                        Page Followers
{{--                                                        <span><i class="fa-solid fa-caret-up"></i> 45%</span>--}}
                                                    </p>
                                                </div>
{{--                                                <div class="totalCard-img">--}}
{{--                                                    <img src="{{asset('images/totalCard-img.webp')}}" alt="image" class="img-fluid">--}}
{{--                                                </div>--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="webDate mt-0">
                                    <div class="webDate-content mb-0">
                                        <h5>Started Date</h5>
                                        <h4>
                                            {{$facebook_page->started_date[0] ?? 'N/A'}}
                                            <span class="d-block">{{$facebook_page->started_date[1] ?? 'N/A'}}</span>
                                        </h4>
                                    </div>
                                    <div class="webDate-content mb-0">
                                        <h5>Total Months</h5>
                                        <h4>
                                            {{$facebook_page->total_months[0] ?? 'N/A'}}
                                            <span class="d-block">{{$facebook_page->total_months[1] ?? 'N/A'}} days</span>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <form action="{{route('updateHandler')}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-10 form-group">
                                        <strong>Handler</strong>
                                        <input type="hidden" name="facebook_page_id" value="{{$facebook_page->id}}">
                                        <select class="form-control handler_select" name="handler_id" id="">
                                            <option value="">No Handler</option>
                                            @foreach($users as $user)
                                                <option value="{{$user->id}}" {!! $facebook_page->handler_id == $user->id ? 'selected' : '' !!}>{{$user->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-2 form-group m-auto text-center">
                                        <button class="btn btn-primary btn-block btn-sm">Update</button>
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection

@section('scripts')
    <script>
        @if(session()->has('success'))
            toastr.success('{{session()->get('success')}}');
        @endif
        @if(session()->has('error'))
            toastr.error('{{session()->get('error')}}');
        @endif
    </script>

    <script>
        $(document).ready(function () {
            $('.btn_refresh_data').on('click', function () {
                // $('.btn_refresh_data').prop('href', "#");
            });
        });
    </script>
@endsection
