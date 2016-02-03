@extends('layouts.layout')

@section('title')
Edit
@stop


@section('body')
 <div class="page-content">
                                    <form action="#" class="form-horizontal" id="edit_form" method="POST" enctype="multipart/form-data">               
     
                                                                <h3 class="block">Provide your account details</h3>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Academy Name
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-4">
                                                                <input type="text" class="form-control" name="academy_name" value = {{$academy->academy_name}} />
                                                                <span class="help-block"> Provide academy name </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Contact Person
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-4">
                                                                <input type="text" class="form-control" name="contact_person" value = {{$academy->contact_person}} />
                                                                <span class="help-block"> Provide Contact Person name. </span>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Email
                                                                
                                                            </label>
                                                            <div class="col-md-4">
                                                                <input type="text" class="form-control" name="email" value = {{$academy->email}} />
                                                                <span class="help-block"> Provide your email address </span>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Phone Number
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-4">
                                                                <input type="text" class="form-control" name="phone" value = {{$academy->phone}} />
                                                                <span class="help-block"> Provide your phone number </span>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Location
                                                            </label>
                                                            <div class="col-md-4">
                                                                <input type="text" class="form-control" name="location" id = "location" />
                                                                <div class = "display-none">
                                                                <input type="text" class="form-control" name="lat" id = "lat" value = {{$academy->latitude}}>
                       <input type="text" class="form-control" name="lon" id = "lon" value = {{$academy->longitude}}>
                                                                    <input type="text" class="form-control" name="academy_id" id = "academy_id" value = {{$academy->academy_id}}>
                                                                </div>
                                                                <span class="help-block">Provide your location with Google Maps</span>
                                                            </div>
                                                        </div>
                                        
                                        
                                         <div class="form-group">
                                                <label class="col-md-3 control-label">Time Slot <span class="required"> * </span></label>
                                                <div class="col-md-9">
                                                    <input id="timeslot" name = "timeslot" type="text" value = {{$academy->academy_id}} />
                                                    
                                                </div>
                                            </div>
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Address
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-4">
                                                                <input type="text" class="form-control" name="address" value = {{$academy->address}} />
                                                                <span class="help-block"> Provide your street address </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">City/Town
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-4">
                                                                <input type="text" class="form-control" name="city" value = {{$academy->city}} />
                                                                <span class="help-block"> Provide your city or town </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Country <span class="required"> * </span></label>
                                                            <div class="col-md-4">
                                                                <select name="country" class="form-control">
                                                                    <option value=""></option>
                                                                    <option value="India" selected>India</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                        
                                        <div class="form-actions">
                                                <div class="row">
                                                    <div class="col-md-offset-3 col-md-9">
                                                        <button type = "submit" class="btn green button-submit">Submit</button> 
                                                            
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                                        
     </form>
                                                    </div>

@stop