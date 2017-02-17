@extends('admin.master')
@section('content')
    <section id="main-content" class=" ">
        <section class="wrapper main-wrapper row" style=''>
            <div class='col-xs-12'>
                <div class="page-title">
                    <div class="pull-left">
                        <!-- PAGE HEADING TAG - START -->
                        <h1 class="title">Phương thức thanh toán</h1>
                        <!-- PAGE HEADING TAG - END -->
                    </div>
                    <div class="pull-right hidden-xs">
                        <ol class="breadcrumb">
                            <li>
                                <a href="{{ route('dashboard') }}"><i class="fa fa-home"></i>Dashboard</a>
                            </li>
                            <li class="active">
                                <strong>Phương thức thanh toán</strong>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <!-- MAIN CONTENT AREA STARTS -->

            <div class="col-lg-12">
                <section class="box ">
                    <header class="panel_header">
                        <h2 class="title pull-left">Phương thức thanh toán</h2>
                        <div class="actions panel_actions pull-right">
                            <a class="fa fa-plus-circle" data-toggle="modal" href="#add-method-payment"></a>
                            <a class="box_toggle fa fa-chevron-down"></a>
                            <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                            <a class="box_close fa fa-times"></a>
                        </div>
                    </header>
                    @include('admin.notify.message')
                    <div class="content-body">
                        <div class="row">
                            <div class="col-xs-12  table-responsive">
                                <table id="example" class="table table-hover table-condensed">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Hình thức thanh toán</th>
                                            <th>Mô tả</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($method_payment as $item)
                                        <tr>
                                            <td width="5%">{{ $item->id }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->description }}</td>
                                            <td width="15%">
                                                <form action="{{ route('method-payment.destroy',[$item->id] ) }}" method="POST">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    <div class="btn-group" role="group" aria-label="...">
                                                        <button type="button" class="btn btn-info" data-toggle="modal" href="#edit-method-payment{{ $item->id }}">
                                                            <i class="fa fa-pencil-square" aria-hidden="true"></i>
                                                        </button>
                                                        <button type="submit" class="btn btn-danger">
                                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- MAIN CONTENT AREA ENDS -->
        </section>
    </section>
    @include('admin.method-payment.method-payment-add')
    
    @include('admin.method-payment.method-payment-edit')
@endsection