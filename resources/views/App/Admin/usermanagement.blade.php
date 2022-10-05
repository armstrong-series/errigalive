
  @extends('Layout.master')
  @section('title')<title>User Management</title>@endsection

  @section('styles')
  <style>
  .scrollbar{
      scrollbar-width: thin;
  }
  </style>
  @endsection
@section('content')
    <div class="content-body">
        <div class="container-fluid" id="user-management">
            <div class="page-titles">
                <ol class="breadcrumb">

                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Usermanagement</a></li>
                </ol>
                <header>
                    <div class="text-right">
                        <button type="button" data-toggle="modal" data-target="#addUser" class="btn btn-rounded btn-md btn-primary"><span
                            class="btn-icon-left text-info"><i class="fas fa-user"></i>
                        </span>Add User</button>
                    </div>
                </header>
            </div>



            <div class="row">
                <div class="col-lg-12">
                    <div class="card scrollbar" style="max-height:300px; overflow:auto;">
                        <div class="card-header">
                            <h4 class="card-title">Users</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-responsive-md">
                                    <thead>
                                        <tr>
                                            <th><strong>NAME</strong></th>
                                            <th><strong>Email</strong></th>
                                            <th><strong>Role</strong></th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="(user, index) in users">

                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="images/avatar/1.jpg" class="rounded-lg mr-2" width="24" alt=""/>
                                                     <span class="w-space-no">@{{ user.name }}</span>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-primary light">@{{ user.email }}</span></td>
                                            <td>@{{ user.user_type }}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <div v-if="user.email==='admin@eriggalive.com'">
                                                        <a class="btn text-primary shadow btn-xs sharp mr-1" data-toggle="modal" href="javascript:void(0);" disabled><i class="fal fa-pen-fancy"></i></a>
                                                        <a href="javascript:void(0);" class="btn text-danger shadow btn-xs sharp" disabled><i class="fal fa-trash-alt"></i></a>
                                                    </div>
                                                    <div v-if="user.email!=='admin@eriggalive.com'">
                                                        <a class="btn text-primary shadow btn-xs sharp mr-1" data-toggle="modal" href="javascript:void(0);" data-target="#editUser" @click="selectUser(index)"><i class="fal fa-pen-fancy"></i></a>
                                                        <a href="javascript:void(0);" class="btn text-danger shadow btn-xs sharp" @click="deleteUser(index)" disabled><i class="fal fa-trash-alt"></i></a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <textarea name="" id="createUser" cols="30" style="display:none;" rows="10">{{ route('admin.user.create')}}</textarea>
                <textarea name="" id="updateUser" cols="30" style="display:none;" rows="10">{{ route('admin.user.update')}}</textarea>
                <textarea name="" id="users" cols="30" style="display:none;" rows="10">{{ json_encode($users) }}</textarea>
                <textarea name="" id="deleteUser" cols="30" style="display:none;" rows="10">{{ route('admin.user.delete') }}</textarea>
                @include('Includes.user-dialog')
            </div>
        </div>
    </div>
@endsection


@section('script')
 <script src="{{ asset('app/usermanagement.js')}}" type="text/javascript"></script>
@endsection
