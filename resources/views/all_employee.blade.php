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
                             <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">All Employees</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <table id="datatable" class="table table-striped table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Phone</th>
                                                            <th>Address</th>
                                                            <th>Salary</th>
                                                            <th>Image</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>

                                             
                                                    <tbody>
                                                        @foreach($employees as $row)
                                                        <tr>
                                                            <td>{{ $row->name}}</td>
                                                            <td>{{ $row->phone}}</td>
                                                            <td>{{ $row->address}}</td>
                                                            <td>{{ $row->salary}}</td>

  
                                                           <td>
                                                             <img src="{{ URL::to($row->photo)}}" width="60px" height="60px">  

                                                           </td>



                                                            {{-- <td><img src="{{ asset('public/employee/'.$row->photo) }}" style="height: 60px; width: 60px;"></td>--}}
                                                            <td> 
                                                                <a href="{{URL::to('edit-employee/'.$row->id)}}" class="btn btn-sm btn-info">Edit</a>
                                                                <a href="{{URL::to('delete-employee/'.$row->id)}}" id="delete" class="btn btn-sm btn-danger">Delete</a>
                                                                <a href="{{URL::to('view-employee/'.$row->id)}}"class="btn btn-sm btn-success">View</a>
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
