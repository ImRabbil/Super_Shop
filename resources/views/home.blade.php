@extends('layouts.app')

@section('content')
<div class="content-page">
<div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">Welcome !</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#">R&S</a></li>
                                    <li class="active">Technology</li>
                                </ol>
                            </div>
                        </div>

                        <!-- Start Widget -->
                        <div class="row">
                            <div class="{{-- col-md-6 --}} col-sm-6 col-lg-4">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-info"><i {{-- class="ion-social-usd" --}}class="ion-android-contacts"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <span class="counter">{{$employee}}</span>
                                        Employees
                                    </div>
                                    <div class="tiles-progress">
                                        <div class="m-t-20">
                                            <h5 class="text-uppercase">Employees <span class="pull-right"></span></h5>
                                            <div {{-- class="progress progress-sm m-0" --}}>
{{--                                                 <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                                    <span class="sr-only">10% Complete</span>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="{{-- col-md-6 --}} col-sm-6 col-lg-4">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-purple"><i class="ion-ios7-cart"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <span class="counter">{{  $order  }}</span>
                                        Orders
                                    </div>
                                    <div class="tiles-progress">
                                        <div class="m-t-20">
                                            <h5 class="text-uppercase">Orders <span class="pull-right"></span></h5>
                                            <div {{-- class="progress progress-sm m-0" --}}>
                                               {{--  <div class="progress-bar progress-bar-purple" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                                                    <span class="sr-only">90% Complete</span>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                          

                            <div class="{{-- col-md-6 --}} col-sm-6 col-lg-4">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-primary"><i class="ion-android-contacts"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <span class="counter">{{ $user }}</span>
                                         Users
                                    </div>
                                    <div class="tiles-progress">
                                        <div class="m-t-20">
                                            <h5 class="text-uppercase">Users <span class="pull-right"></span></h5>
                                            <div {{-- class="progress progress-sm m-0" --}}>
                                                {{-- <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%;">
                                                    <span class="sr-only">57% Complete</span>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                             <div class="{{-- col-md-6 --}} col-sm-6 col-lg-4">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-primary"><i class="ion-android-contacts"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <span class="counter">{{  $customer  }}</span>
                                        Customers
                                    </div>
                                    <div class="tiles-progress">
                                        <div class="m-t-20">
                                            <h5 class="text-uppercase">Customers <span class="pull-right"></span></h5>
                                            <div >
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                             <div class="{{-- col-md-6 --}} col-sm-6 col-lg-4">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-primary"><i class="ion-android-contacts"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <span class="counter">{{  $product  }}</span>
                                        Products
                                    </div>
                                    <div class="tiles-progress">
                                        <div class="m-t-20">
                                            <h5 class="text-uppercase">Products <span class="pull-right"></span></h5>
                                            <div >
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                             <div class="{{-- col-md-6 --}} col-sm-6 col-lg-4">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-primary"><i class="ion-android-contacts"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <span class="counter">{{  $category }}</span>
                                        Category
                                    </div>
                                    <div class="tiles-progress">
                                        <div class="m-t-20">
                                            <h5 class="text-uppercase">Category <span class="pull-right"></span></h5>
                                            <div >
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                             <div class="{{-- col-md-6 --}} col-sm-6 col-lg-4">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-primary"><i class="ion-android-contacts"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <span class="counter">{{  $supplier  }}</span>
                                        Suplier
                                    </div>
                                    <div class="tiles-progress">
                                        <div class="m-t-20">
                                            <h5 class="text-uppercase">Suplier <span class="pull-right"></span></h5>
                                            <div >
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>




                        </div> 
                        <!-- End row-->


                      {{--   <div class="row">
                            <div class="col-lg-8">
                                <div class="portlet"><!-- /portlet heading -->
                                    <div class="portlet-heading">
                                        <h3 class="portlet-title text-dark text-uppercase">
                                            Website Stats
                                        </h3>
                                        <div class="portlet-widgets">
                                            <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                                            <span class="divider"></span>
                                            <a data-toggle="collapse" data-parent="#accordion1" href="#portlet1"><i class="ion-minus-round"></i></a>
                                            <span class="divider"></span>
                                            <a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div id="portlet1" class="panel-collapse collapse in">
                                        <div class="portlet-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div id="website-stats" style="position: relative;height: 320px;"></div>
                                                    <div class="row text-center m-t-30">
                                                        <div class="col-sm-4">
                                                            <h4 class="counter">86,956</h4>
                                                            <small class="text-muted"> Weekly Report</small>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <h4 class="counter">86,69</h4>
                                                            <small class="text-muted">Monthly Report</small>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <h4 class="counter">948,16</h4>
                                                            <small class="text-muted">Yearly Report</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> /Portlet
                            </div> <!-- end col -->

                            <div class="col-lg-4">
                                <div class="portlet"><!-- /portlet heading -->
                                    <div class="portlet-heading">
                                        <h3 class="portlet-title text-dark text-uppercase">
                                            Website Stats
                                        </h3>
                                        <div class="portlet-widgets">
                                            <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                                            <span class="divider"></span>
                                            <a data-toggle="collapse" data-parent="#accordion1" href="#portlet2"><i class="ion-minus-round"></i></a>
                                            <span class="divider"></span>
                                            <a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div id="portlet2" class="panel-collapse collapse in">
                                        <div class="portlet-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div id="pie-chart">
                                                        <div id="pie-chart-container" class="flot-chart" style="height: 320px;">
                                                        </div>
                                                    </div>

                                                    <div class="row text-center m-t-30">
                                                        <div class="col-sm-6">
                                                            <h4 class="counter">86,956</h4>
                                                            <small class="text-muted"> Weekly Report</small>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <h4 class="counter">86,69</h4>
                                                            <small class="text-muted">Monthly Report</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- /Portlet -->
                            </div> <!-- end col -->
                        </div> <!-- End row -->
 --}}

                        

                    </div> <!-- container -->
                               
                </div> <!-- content -->
@endsection
