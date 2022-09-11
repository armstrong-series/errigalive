@extends('Layout.master')
@section('title')<title>ErrigaLive | Shop </title>@endsection

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">EriggaLive</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Shop</a></li>
            </ol>
        </div>
        <header>
            <div class="text-right">
                <button type="button" class="btn btn-sm btn-rounded btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">
                    <span
                    class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i>
                </span>Add Product</button>
            </div>
        </header>
        <div class="row">

            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="new-arrival-product">
                            <div class="new-arrivals-img-contnent">
                                <img class="img-fluid" src="{{ asset('dashboard/images/product/1.jpg') }}" alt="">
                            </div>
                            <div class="new-arrival-content text-center mt-3">
                                <h4><a href="#">Bonorum et Malorum</a></h4>
                                <ul class="star-rating">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star-half-empty"></i></li>
                                    <li><i class="fa fa-star-half-empty"></i></li>
                                </ul>
                                <span class="price">$761.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="new-arrival-product">
                            <div class="new-arrivals-img-contnent">
                                <img class="img-fluid" src="{{ asset('dashboard/images/product/2.jpg') }}" alt="">
                            </div>
                            <div class="new-arrival-content text-center mt-3">
                                <h4><a href="ecom-product-detail.html">Striped Dress</a></h4>
                                <ul class="star-rating">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <span class="price">$159.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="new-arrival-product">
                            <div class="new-arrivals-img-contnent">
                                <img class="img-fluid" src="{{ asset('dashboard/images/product/3.jpg') }}" alt="">
                            </div>
                            <div class="new-arrival-content text-center mt-3">
                                <h4><a href="ecom-product-detail.html">BBow polka-dot</a></h4>
                                <ul class="star-rating">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <span class="price">$357.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                @csrf
                <div class="modal-body">
                    <div class="">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Add a Product </h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <div class="">
                                        <div class="form-group">
                                            <h5>Product Name</h5>
                                            <input type="text" name="product_name" class="form-control input-rounded" placeholder="Enter product Name">
                                        </div>
                                        <div class="form-group">
                                            <h5>Product Description</h5>
                                            <textarea class="form-control" rows="4" id="comment" placeholder="Enter Product Description"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <h5>Product Price</h5>
                                            <input type="number" name="price" class="form-control input-rounded" placeholder="Add a price to Product">
                                        </div>
                                        <div class="form-group">
                                            <h5>Product Image</h5>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Upload</span>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input">
                                                    <label class="custom-file-label">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-rounded btn-secondary btn-sm light" data-dismiss="modal">Skip</button>
                    <button type="button" class="btn btn-rounded btn-info btn-sm">Proceed</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection




