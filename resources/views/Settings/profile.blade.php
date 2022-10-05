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
                                <img src="{{ asset('avatar.png') }}" class="img-fluid rounded-circle" alt="">
                            </div>
                            <div class="profile-details">
                                <div class="profile-name px-3 pt-2">
                                    @if(Auth::user()->first_name && Auth::user()->last_name)
                                      <h4 class="text-primary mb-0">{{ Auth::user()->first_name }}</h4>
                                        @elseif(Auth::user()->name)
                                        <h4 class="text-primary mb-0">{{ Auth::user()->name }}</h4>
                                    @endif

                                    @if(Auth::user()->user_type === 'admin')
                                        <p>Administrator</p>
                                         @elseif(Auth::user()->user_type === 'regular')
                                         <p>Customer</p>
                                         @elseif(Auth::user()->user_type === 'support')
                                         <p>Support</p>
                                    @endif
                                </div>
                                <div class="profile-email px-2 pt-2">
                                    <h4 class="text-muted mb-0">{{ Auth::user()->email }}</h4>
                                </div>
                                <div class="dropdown ml-auto">
                                    <a href="#" class="btn btn-primary light sharp" data-toggle="dropdown" aria-expanded="true"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item">Delete Account&nbsp;&nbsp;<i class="fal fa-trash-alt text-danger"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Acount Information</h4>
                    </div>
                    <div class="card-body">
                        @csrf
                        <div class="basic-form">
                            <div>
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="{{ Auth::user()->name }}">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" disabled type="text" placeholder="{{ Auth::user()->email }}">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="password" placeholder="Enter new password">
                                </div>

                                <div class="form-group">
                                    <input class="form-control" type="password" placeholder="Confirm password">
                                </div>

                                <div class="form-group">
                                    <select class="form-control form-control-sm">
                                        <option>Choose Nationality</option>
                                        <option value="ghana">Ghana</option>
                                        <option value="kenya">Kenya</option>
                                        <option value="rwanda">Rwanda</option>
                                        <option value="uganda">Uganda</option>
                                        <option value="south-africa">South-Africa</option>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <button type="button" class="btn btn-rounded btn-sm btn-primary">Save Changes</button>
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
