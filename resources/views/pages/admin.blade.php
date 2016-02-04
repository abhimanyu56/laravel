@extends('layouts.layout')

@section('title')
Welcome
@stop


@section('body')
 <div class="page-content">
                    
     
     
                   <div class="portlet-title">
                                    
                                    
                                </div>
     
     
     <div class="pull-right">
                                        <div class="btn-group btn-group-devided">
                                            <a href="{{ URL::asset('/add')}}" class="btn btn-lg green"> Add Academy
                                                                        <i class="fa fa-plus"></i>
                                                                    </a>
                                        </div>
                                    </div>
     
     
     
     
     
     @if (count($academy) < 1)
                              
                              <div class = "pull-left">
     <h2>There are no records.</h2>
                                </div>
                              
                              
                              @else
     
     
     
     
     
     <div class="col-md-6 pull-left">
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
                                                        <a onclick="loadAcademy({{$aca->academy_id}})"> {{$aca->academy_name}} </a>
                                                    </td>
                                                     <td>
                                                        <a onclick="loadAcademy({{$aca->academy_id}})" class="btn btn-outline btn-circle red btn-sm blue">
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
     
     
                    
<div id="js-grid-juicy-projects" class="cbp display-none">
            <div class="cbp-item graphic">
             <a href="{{ URL::asset('academy')}}" class="cbp-singlePage cbp-l-caption-buttonLeft btn red uppercase btn red uppercase" id = "loadAcademyPage" rel="nofollow">more info</a>
             </div>
     </div>

                </div>

@stop


<script>
    
    function loadAcademy(id){
    
    $("#loadAcademyPage").attr("href", "academy/" + id);    
         $( "#loadAcademyPage" ).click();
    
    }
    
</script>