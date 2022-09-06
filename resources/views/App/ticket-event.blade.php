@extends('Layout.master')
@section('title')<title>ErrigaLive | Events</title>@endsection

  
@section('content')
 
    <div class="content-body">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">eriggalive</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Events</a></li>
                </ol>
            </div>
            <!-- row -->
            <div class="row">
                
                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-body p-4">
                       
                            <div class="bootstrap-carousel">
                                <div class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="{{ asset('dashboard/images/big/img2.jpg') }}" alt="First slide">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5>First slide label</h5>
                                                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="{{ asset('dashboard/images/big/img3.jpg') }}" alt="Second slide">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5>Second slide label</h5>
                                                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="{{ asset('dashboard/images/big/img4.jpg') }}" alt="Third slide">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5>Third slide label</h5>
                                                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
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

     