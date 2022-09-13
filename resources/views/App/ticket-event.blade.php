@extends('Layout.master')
@section('title')<title>ErrigaLive | Events</title>@endsection
@section('styles')
 <style scoped>
    .fileUpload {
      position: relative;
      overflow: hidden;
      margin: 10px;
      }
    .fileUpload input.upload {
      position: absolute;
      top: 0;
      right: 0;
      margin: 0;
      padding: 0;
      font-size: 20px;
      cursor: pointer;
      opacity: 0;
      filter: alpha(opacity=0);
    }
    * {
    box-sizing: border-box;
    }

    np-image-preview {
      padding: 20px;
      background: #eee;
      border-radius: 16px;
      margin: 10px;
      }

    img.np-preview {
        background-color: #fff;
        /* border: 1px solid #ddd; */
        padding: 5px;
        height: 230px;
        width: 400px;
        margin: 10px;
      }

  </style>
@endsection

@section('content')

    <div class="content-body" id="event">
        <div class="container-fluid"  id="event">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">eriggalive</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Events</a></li>
                </ol>
            </div>

            <header>
                <div class="text-right">
                    <button type="button" class="btn btn-sm btn-rounded btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">
                        <span class="btn-icon-left text-info">
                         <i class="fa fa-plus color-info"></i>
                    </span>Add Event</button>
                </div>
            </header>
            <!-- row -->
            <div class="row">
                <div class="col-md-4" v-for="(event, index) in events">
                    <div class="card mb-3">
                        <img class="card-img-top img-fluid" :src="'/storage/events/banner/'+event.event_banner" alt="Card image cap">

                        <div class="card-header">
                            <h5 v-cloak class="card-title">@{{ event.name }}</h5>
                        </div>

                        <div class="card-body">
                            <p class="card-text">@{{ event.description }}</p>

                            <div class="text-right">
                                <p><i class="fas fa-calendar-day"></i>&nbsp;&nbsp;@{{ event.date}}</p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="dropdown custom-dropdown">
                                <button type="button" class="btn btn-sm btn-outline-info " data-toggle="dropdown">
                                    <i class="fal fa-layer-group"></i>
                                    <i class="fa fa-angle-down ml-3"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="javascript:void(0);" class="btn btn-primary mb-2" data-toggle="modal" @click="selectEvent(index)" data-target="#exampleModalCenter"><small>Edit Event&nbsp;&nbsp;<i class="fas fa-pen-fancy"></i></small></a>
                                    <a class="dropdown-item"  data-toggle="modal" href="#"><small>Change Thumbnail&nbsp;&nbsp;<i class="fas fa-image"></i></small></a>
                                    <a class="dropdown-item text-danger" href="javascript:void(0);" @click="deleteEvent(index)"><small>Delete&nbsp;&nbsp;<i class="fas fa-trash"></i></small></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <textarea name="" id="createEvent" style="display:none" cols="30" rows="10">{{ route('event.create') }}</textarea>
                <textarea name="" id="updateEvent" style="display:none" cols="30" rows="10">{{ route('event.update') }}</textarea>
                <textarea name="" id="deleteEvent" style="display:none" cols="30" rows="10">{{ route('event.delete') }}</textarea>
                <textarea name="" id="events" style="display:none" cols="30" rows="10">{{ json_encode($events) }}</textarea>
            </div>

                @include('Includes.events-dialog')

        </div>
    </div>



@endsection

@section('script')
 <script src="{{ asset('app/event.js')}}" type="text/javascript"></script>
@endsection

