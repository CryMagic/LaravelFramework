@extends('admin.master')
@section('content')
<section id="main-content" class=" ">
    <section class="wrapper main-wrapper row" style=''>

        <div class='col-xs-12'>
            <div class="page-title">

                <div class="pull-left">
                    <!-- PAGE HEADING TAG - START -->
                    <h1 class="title">Ecommerce</h1>
                    <!-- PAGE HEADING TAG - END -->
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <!-- MAIN CONTENT AREA STARTS -->


        <div class="col-xs-12">
            <section class="box nobox ">
                <div class="content-body">


                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12">

                            <div class="r1_graph1 db_box db_box_large">
                                <span class='bold'>68.95%</span>
                                <span class='pull-right'><small>New/Repeating Users</small></span>
                                <div class="clearfix"></div>
                                <span class="db_dynamicbar">Loading...</span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">

                            <div class="r1_graph2 db_box db_box_large">
                                <span class='bold'>2332</span>
                                <span class='pull-right'><small>Links Shared</small></span>
                                <div class="clearfix"></div>
                                <span class="db_linesparkline">Loading...</span>
                            </div>

                        </div>

                        <div class="col-md-4 hidden-sm col-sm-12 col-xs-12">

                            <div class="r1_graph1 db_box db_box_large">
                                <span class='bold'>67/98</span>
                                <span class='pull-right'><small>Total / Unique visitors</small></span>
                                <div class="clearfix"></div>
                                <span class="db_compositebar">Loading...</span>
                            </div>
                        </div>

                    </div>
                    <!-- End .row -->

                    <div class="row">

                        <div class="col-xs-12">
                            <div class="r1_maingraph db_box">
                                <span class='pull-left'>
            <i class='icon-purple fa fa-square icon-xs'></i>&nbsp;<small>Page Views</small>
            &nbsp; &nbsp;<i class='fa fa-square icon-xs icon-primary'></i>&nbsp;
            <small>Unique Visitors</small>
        </span>
                                <div id="db_morris_bar_graph" style="height:auto;width:100%;"></div>
                            </div>
                        </div>


                    </div>
                    <!-- End .row -->

                </div>
            </section>
        </div>

        <div class="col-xs-12 col-md-4">
            <div class="row">
                <div class="col-xs-12">
                    <section class="box ">
                        <header class="panel_header">
                            <h2 class="title pull-left">New Users</h2>
                            <div class="actions panel_actions pull-right">
                                <a class="box_toggle fa fa-chevron-down"></a>
                                <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                                <a class="box_close fa fa-times"></a>
                            </div>
                        </header>
                        <div class="content-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th style="width:60%">Name</th>
                                        <th style="width:30%">Progress</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>

                                        <td>Harry P.</td>
                                        <td><span class="playlist_song2">...</span></td>
                                    </tr>
                                    <tr>

                                        <td>Will Mark</td>
                                        <td><span class="playlist_song3">...</span></td>
                                    </tr>
                                    <tr>

                                        <td>Jason D.</td>
                                        <td><span class="playlist_song4">...</span></td>
                                    </tr>

                                    <tr>

                                        <td>Nik P.</td>
                                        <td><span class="playlist_song6">...</span></td>
                                    </tr>
                                    <tr>

                                        <td>Kate Wilson</td>
                                        <td><span class="playlist_song7">...</span></td>
                                    </tr>
                                </tbody>
                            </table>


                        </div>
                    </section>

                </div>
            </div>
        </div>

        <div class="col-xs-12 col-md-4">
            <div class="row">
                <div class="col-xs-12">
                    <section class="box ">
                        <header class="panel_header">
                            <h2 class="title pull-left">New Vendors</h2>
                            <div class="actions panel_actions pull-right">
                                <a class="box_toggle fa fa-chevron-down"></a>
                                <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                                <a class="box_close fa fa-times"></a>
                            </div>
                        </header>
                        <div class="content-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th style="width:60%">Name</th>
                                        <th style="width:30%">Progress</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>

                                        <td>John Doug</td>
                                        <td><span class="playlist_song1">...</span></td>
                                    </tr>
                                    <tr>

                                        <td>Harry P.</td>
                                        <td><span class="playlist_song2">...</span></td>
                                    </tr>

                                    <tr>

                                        <td>Clarke M.</td>
                                        <td><span class="playlist_song5">...</span></td>
                                    </tr>
                                    <tr>

                                        <td>Nik P.</td>
                                        <td><span class="playlist_song6">...</span></td>
                                    </tr>
                                    <tr>

                                        <td>Kate Wilson</td>
                                        <td><span class="playlist_song7">...</span></td>
                                    </tr>
                                </tbody>
                            </table>


                        </div>
                    </section>

                </div>
            </div>
        </div>

        <div class="col-xs-12 col-md-4">
            <div class="row">
                <div class="col-xs-12">
                    <section class="box ">
                        <header class="panel_header">
                            <h2 class="title pull-left">New Customers</h2>
                            <div class="actions panel_actions pull-right">
                                <a class="box_toggle fa fa-chevron-down"></a>
                                <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                                <a class="box_close fa fa-times"></a>
                            </div>
                        </header>
                        <div class="content-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th style="width:60%">Name</th>
                                        <th style="width:30%">Progress</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>

                                        <td>Harry P.</td>
                                        <td><span class="playlist_song2">...</span></td>
                                    </tr>
                                    <tr>

                                        <td>Will Mark</td>
                                        <td><span class="playlist_song3">...</span></td>
                                    </tr>
                                    <tr>

                                        <td>Jason D.</td>
                                        <td><span class="playlist_song4">...</span></td>
                                    </tr>
                                    <tr>

                                        <td>Clarke M.</td>
                                        <td><span class="playlist_song5">...</span></td>
                                    </tr>
                                    <tr>

                                        <td>Nik P.</td>
                                        <td><span class="playlist_song6">...</span></td>
                                    </tr>

                                </tbody>
                            </table>


                        </div>
                    </section>

                </div>
            </div>
        </div>
        <!-- MAIN CONTENT AREA ENDS -->
    </section>
</section>
@endsection
@section('script')
    
    <script src="{{ url('assets/plugins/morris-chart/js/morris.min.js') }}" type="text/javascript"></script>
    <script>
        window.jQuery || document.write('<script src="{{ url('assets/js/jquery-1.11.2.min.js') }}"><\/script>');
    </script>
    <script src="{{ url('assets/js/eco-dashboard.js') }}" type="text/javascript"></script>
@endsection