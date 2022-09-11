@extends('Layout.master')
@section('title')<title>ErrigaLive | Profile </title>@endsection


@section('content')

<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">App</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Profile</a></li>
            </ol>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="profile card card-body px-3 pt-3 pb-0">
                    <div class="profile-head">
                        <div class="photo-content">
                            <div class="cover-photo"></div>
                        </div>
                        <div class="profile-info">
                            <div class="profile-photo">
                                <img src="{{ asset('dashboard/images/profile/profile.png') }}" class="img-fluid rounded-circle" alt="">
                            </div>
                            <div class="profile-details">
                                <div class="profile-name px-3 pt-2">
                                    <h4 class="text-primary mb-0">{{ Auth::user()->name }}</h4>
                                    <p>{{ Auth::user()->user_type }}</p>
                                </div>
                                <div class="profile-email px-2 pt-2">
                                    <h4 class="text-muted mb-0">{{ Auth::user()->email }}</h4>

                                </div>
                                <div class="dropdown ml-auto">
                                    <a href="#" class="btn btn-primary light sharp" data-toggle="dropdown" aria-expanded="true"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item"><i class="fa fa-user-circle text-primary mr-2"></i> View profile</li>
                                        <li class="dropdown-item"><i class="fa fa-users text-primary mr-2"></i> Add to close friends</li>
                                        <li class="dropdown-item"><i class="fa fa-plus text-primary mr-2"></i> Add to group</li>
                                        <li class="dropdown-item"><i class="fa fa-ban text-primary mr-2"></i> Block</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <div class="profile-statistics mb-5">
                            <div class="text-center">
                                <div class="row">
                                    <div class="col">
                                        <h3 class="m-b-0">150</h3><span>Follower</span>
                                    </div>
                                    <div class="col">
                                        <h3 class="m-b-0">140</h3><span>Place Stay</span>
                                    </div>
                                    <div class="col">
                                        <h3 class="m-b-0">45</h3><span>Reviews</span>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <a href="javascript:void()" class="btn btn-primary mb-1 mr-1">Follow</a>
                                    <a href="javascript:void()" class="btn btn-primary mb-1">Send Message</a>
                                </div>
                            </div>
                        </div>

                        <div class="profile-interest mb-5">
                            <h5 class="text-primary d-inline">Interest</h5>
                            <div class="row mt-4">
                                <div class="col-lg-4 col-xl-4 col-sm-4 col-6 int-col">
                                    <a href="javascript:void()" class="interest-cat">
                                        <img src="{{ asset('dashboard/images/profile/2.jpg') }}" alt="" class="img-fluid">
                                        <p>Shopping Mall</p>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-xl-4 col-sm-4 col-6 int-col">
                                    <a href="javascript:void()" class="interest-cat">
                                        <img src="{{ asset('dashboard/images/profile/3.jpg') }}" alt="" class="img-fluid">
                                        <p>Photography</p>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-xl-4 col-sm-4 col-6 int-col">
                                    <a href="javascript:void()" class="interest-cat">
                                        <img src="{{ asset('dashboard/images/profile/4.jpg') }}" alt="" class="img-fluid">
                                        <p>Art &amp; Gallery</p>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-xl-4 col-sm-4 col-6 int-col">
                                    <a href="javascript:void()" class="interest-cat">
                                        <img src="{{ asset('dashboard/images/profile/2.jpg') }}" alt="" class="img-fluid">
                                        <p>Visiting Place</p>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-xl-4 col-sm-4 col-6 int-col">
                                    <a href="javascript:void()" class="interest-cat">
                                        <img src="{{ asset('dashboard/images/profile/3.jpg') }}" alt="" class="img-fluid">
                                        <p>Shopping</p>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-xl-4 col-sm-4 col-6 int-col">
                                    <a href="javascript:void()" class="interest-cat">
                                        <img src="{{ asset('dashboard/images/profile/4.jpg') }}" alt="" class="img-fluid">
                                        <p>Biking</p>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <div class="profile-tab">
                            <div class="custom-tab-1">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item"><a href="#my-posts" data-toggle="tab" class="nav-link active show">Posts</a>
                                    </li>

                                    <li class="nav-item"><a href="#profile-settings" data-toggle="tab" class="nav-link">Setting</a>
                                    </li>
                                </ul>
                                <div class="tab-content">


                                    <div id="profile-settings" class="tab-pane fade">
                                        <div class="pt-3">
                                            <div class="settings-form">
                                                <h4 class="text-primary">Account Setting</h4>
                                                <form>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label>Email</label>
                                                            <input type="email" placeholder="Email" class="form-control">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label>Password</label>
                                                            <input type="password" placeholder="Password" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Address</label>
                                                        <input type="text" placeholder="1234 Main St" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Address 2</label>
                                                        <input type="text" placeholder="Apartment, studio, or floor" class="form-control">
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label>City</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label>State</label>
                                                            <select class="form-control" id="inputState">
                                                                <option selected="">Choose...</option>
                                                                <option>Option 1</option>
                                                                <option>Option 2</option>
                                                                <option>Option 3</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-2">
                                                            <label>Zip</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>

                                                    <button class="btn btn-primary btn-sm" type="submit">Update</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
