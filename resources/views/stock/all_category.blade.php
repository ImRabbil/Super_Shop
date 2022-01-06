@extends('layouts.stockapp')

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
                             <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">All Category Brand List</h3>
                                        <a href="{{ route('add.category')}}" class="btn btn-sm btn-info pull-right">Add New</a>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <table id="datatable" class="table table-striped table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>Sl</th>
                                                            <th>Name</th>
                                                           {{--  <th>Action</th> --}}
                                                        </tr>
                                                    </thead>

                                             
                                                    <tbody>
                                                        @foreach($category as $row)
                                                        <tr>
                                                            <td>{{ $row->id}}</td>
                                                            <td>{{ $row->cat_name}}</td>
                                                        
                                                            <td>
                                                                <a href="{{route('edit-category', $row->id)}}" class="btn btn-sm btn-success">Edit</a>
                                                                
                                                                <a href="{{route('delete-category', $row->id)}}" id="delete" class="btn btn-sm btn-danger">Delete</a>


                                                            </td>
                                                        </tr>
                                                        @endforeach

                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          
                          

                        </div>

                    </div> <!-- container -->
                               
                </div> <!-- content -->


                
@endsection
