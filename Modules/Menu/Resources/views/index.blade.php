@extends('layout.mainlayout')

@section('content')

<!-- Page Header -->
<div class="page-header">
    <div class="row">
        <div class="col-sm-12">
            <h3 class="page-title">MENU LISTS</h3>
            <ul class="breadcrumb">
                <li class="breadcrumb-item active">Menu</li>
            </ul>
        </div>
    </div>
</div>



<div id="showMessage"></div>

<!-- /Page Header -->
<div class="row">
    <div class="card card-table flex-fill">
        <div class="card-header">
            <h3 class="card-title mb-0">Menus</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table custom-table mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Menu Title</th>
                            {{-- <th>Email</th> --}}
                            <th>Status</th>
                            {{-- <th class="text-right">Action</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($menus as $menu)
                        <tr>
                            <td>{{$loop->index+1}}</td>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="#" class="avatar"><img alt="" src="img/profiles/avatar-19.jpg"></a>
                                    <a href="client-profile">{{$menu->title}} </a>
                                </h2>
                            </td>
                            <td>
                                <div class="dropdown action-label">
                                    {{-- <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#"
                                                data-toggle="dropdown" aria-expanded="false"> 
                                                <i class="fa fa-dot-circle-o text-success"></i> Active
                                            </a> --}}
                                    <select class="select floating" name="updateStatus" id="updateStatus-{{$menu->id}}"
                                        onchange="statusUpdate({{$menu->id}})">
                                        <option value="1" @if($menu->active == 1) selected @endif>
                                            Active
                                        </option>
                                        <option value="0" @if($menu->active == 0) selected @endif>
                                            Inactive
                                        </option>

                                    </select>
                                    {{-- <div class="dropdown-menu dropdown-menu-right" onclick="statusUpdate({{$menu->id}})">
                                    <a class="dropdown-item" href="#" data-toggle="dropdown" aria-expanded="false"><i
                                            class="fa fa-dot-circle-o text-success"></i>
                                        Active</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i>
                                        Inactive</a>
                                </div> --}}
                                </div>
                            </td>
                                    {{-- <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown"
                                                aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="javascript:void(0)"><i
                                                        class="fa fa-pencil m-r-5"></i> Edit</a>
                                                <a class="dropdown-item" href="javascript:void(0)"><i
                                                        class="fa fa-trash-o m-r-5"></i> Delete</a>
                                            </div>
                                        </div>
                                    </td> --}}
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    {{-- <div class="card-footer">
                    <a href="clients">View all clients</a>
                </div> --}}
    </div>
</div>
@endsection

<script>
    function statusUpdate(id){
         const status = document.querySelector(`#updateStatus-${id}`);

         fetch(`/menu/status/${id}`, {
             method: 'PUT',
             body: JSON.stringify({
                 'status': status.value
             }),
             headers: {
                 "Content-type": "application/json; charset=UTF-8",
                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
             }
         })
         .then(response => response.json())
         .then(json => {
             if(json.success){
                var displayMessage = document.querySelector('#success');
                var showMessage = document.querySelector('#showMessage');

                $('#showMessage').append(`
                <div class="alert alert-dismissable alert success" style="background: rgb(120, 221, 79);" id="success">
                    <button type="button" class="close" data-dismiss="alert" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>
                        <span id="message"></span>
                    </strong>
                </div>
                `)
                 $('#message').text(json.success);
               
             }
         })
         .catch(error => console.error(error));
     }
</script>