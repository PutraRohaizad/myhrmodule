@extends('role::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('role.name') !!}
    </p>

    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">Role Management</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            {{ Breadcrumbs::render('srbac.rolemanagement') }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <section>
                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title">Role Management</h2>
                        </div>
                        <div class="card-body">
                            <table class="table" id="table" style="width:100%">
                                <thead>
                                    <tr>
                                        <th class="fit">No.</th>
                                        <th>Role ID</th>
                                        <th>Role Name</th>
                                        <th>Total User Registered</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
