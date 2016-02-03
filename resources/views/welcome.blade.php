@extends('layouts.layout')

@section('title')
Welcome
@stop


@section('body')
 <div class="page-content">
                    
     
     
                                        <div class="row" style = "margin-top:17%;">
                        <div class="col-md-6">
                            <div class="portlet light portlet-fit ">
                                
                                <div class="portlet-body">
                                    <a href = "{{ URL::asset('admin')}}" class="mt-element-step">
                                        <div class="row step-default">
                                            <div class="col-md-12 bg-grey mt-step-col active">
                                                
                                                <div class="mt-step-title uppercase font-grey-cascade">Admin</div>
                                                <div class="mt-step-content font-grey-cascade">Click Here to view Admin Console</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portlet light portlet-fit ">
                                
                                <div class="portlet-body">
                                    <a href = "{{ URL::asset('explore')}}" class="mt-element-step">
                                        <div class="row step-default">
                                            <div class="col-md-12 bg-grey mt-step-col done">
                                                
                                                <div class="mt-step-title uppercase font-grey-cascade">Explore</div>
                                                <div class="mt-step-content font-grey-cascade">Click here to Preview Website</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
     
     
     
                    
                </div>
@stop