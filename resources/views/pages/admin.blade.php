@extends('layouts.layout')

@section('title')
Welcome
@stop


@section('body')
 <div class="page-content">
                    
     
     
                   <div class="portlet-title">
                                    
                                    <div class="actions pull-right">
                                        <div class="btn-group btn-group-devided">
                                            <a href="{{ URL::asset('/add')}}" class="btn btn-lg green"> Add Academy
                                                                        <i class="fa fa-plus"></i>
                                                                    </a>
                                        </div>
                                    </div>
                                </div>
     
     
     
     
     
     @if (count($academy) < 1)
                              There are no records.
     
                              
                              
                              @else
     
     
     
     
     
     <div class="col-md-6">
                            <!-- BEGIN SAMPLE TABLE PORTLET-->
                            <div class="portlet">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-building-o"></i>Academy List </div>
                                    
                                </div>
                                <div class="portlet-body">
                                    <div class="table-scrollable">
                                        <table class="table table-striped table-bordered table-advance table-hover">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        Name </th>
                                                    <th class="hidden-xs">
                                                        View </th>
                                                    <th>
                                                         Edit </th>
                                                    <th>  Delete </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                                @foreach ($academy as $aca)
                                                
                                                <tr>
                                                    <td class="highlight">
                                                        <div class="success"></div>
                                                        <a href="javascript:;"> {{$aca->academy_name}} </a>
                                                    </td>
                                                     <td>
                                                        <a href="javascript:;" class="btn btn-outline btn-circle red btn-sm blue">
                                                            <i class="fa fa-share"></i> View </a>
                                                    </td>
                                                    
                                                    <td>
                                                        <a href="{{ URL::asset('/edit/'. $aca->academy_id)}}" class="btn btn-outline btn-circle btn-sm purple">
                                                            <i class="fa fa-edit"></i> Edit </a>
                                                    </td>
                                                     <td>
                                                        <a href="{{ URL::asset('/delete/'. $aca->academy_id)}}" class="btn btn-outline btn-circle dark btn-sm black">
                                                            <i class="fa fa-trash-o"></i> Delete </a>
                                                    </td>
                                                </tr>
                                                
                                                @endforeach
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- END SAMPLE TABLE PORTLET-->
                        </div>
     
     @endif
     
     
                    
                </div>

@stop