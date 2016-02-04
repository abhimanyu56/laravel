@extends('layouts.layout')
@section('title')
Welcome
@stop







@section('body')



<div class="page-content">

        <div class="modal-header">
    
    <h4 class="modal-title"><div class="caption">
                                        <i class=" icon-layers font-red"></i>
                                        <span class="caption-subject font-red bold uppercase"> Add Academy
                                            
                                        </span>
                                    </div></h4>
</div>
       

    
        

                  
                    
                    
                    <div class="row">
                        <div class="col-md-12">
                           
                            <div class="portlet light " id="form_wizard_1">
                                
                                <div class="portlet-body form">
                                    <form action="#" class="form-horizontal" id="submit_form" method="POST" enctype="multipart/form-data">
                                        <div class="form-wizard">
                                            <div class="form-body">
                                                <ul class="nav nav-pills nav-justified steps">
                                                    <li>
                                                        <a href="#tab1" data-toggle="tab" class="step">
                                                            <span class="number"> 1 </span>
                                                            <span class="desc">
                                                                <i class="fa fa-check"></i> Detail </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#tab2" data-toggle="tab" class="step">
                                                            <span class="number"> 2 </span>
                                                            <span class="desc">
                                                                <i class="fa fa-check"></i> Description </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#tab3" data-toggle="tab" class="step active">
                                                            <span class="number"> 3 </span>
                                                            <span class="desc">
                                                                <i class="fa fa-check"></i> Tags & Images </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#tab4" data-toggle="tab" class="step">
                                                            <span class="number"> 4 </span>
                                                            <span class="desc">
                                                                <i class="fa fa-check"></i> Confirm </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div id="bar" class="progress progress-striped" role="progressbar">
                                                    <div class="progress-bar progress-bar-success"> </div>
                                                </div>
                                                <div class="tab-content">
                                                    <div class="alert alert-danger display-none">
                                                        <button class="close" data-dismiss="alert"></button> You have some form errors. Please check below. </div>
                                                    <div class="alert alert-success display-none">
                                                        <button class="close" data-dismiss="alert"></button> Your form validation is successful! </div>
                                                    <div class="tab-pane active" id="tab1">
                                                        <h3 class="block">Provide your account details</h3>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Academy Name
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-4">
                                                                <input type="text" class="form-control" name="academy_name" />
                                                                <span class="help-block"> Provide academy name </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Contact Person
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-4">
                                                                <input type="text" class="form-control" name="contact_person" />
                                                                <span class="help-block"> Provide Contact Person name. </span>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Email
                                                                
                                                            </label>
                                                            <div class="col-md-4">
                                                                <input type="text" class="form-control" name="email" />
                                                                <span class="help-block"> Provide your email address </span>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Phone Number
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-4">
                                                                <input type="text" class="form-control" name="phone" maxlength = "12" />
                                                                <span class="help-block"> Provide your phone number </span>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Location
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-4">
                                                                <input type="text" class="form-control" name="location" id = "location" />
                                                                <div class = "display-none">
                                                                <input type="text" class="form-control" name="lat" id = "lat">
                       <input type="text" class="form-control" name="lon" id = "lon">
                                                                </div>
                                                                <span class="help-block">Provide your location with Google Maps</span>
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                        <div class="form-group">
                                                <label class="col-md-3 control-label">Time Slot
                                                             <span class="required"> * </span>
                                                            </label>
                                                           
                                                <div class="col-md-9">
                                                    <input id="timeslot" name = "timeslot" type="text" value="" />
                                                    
                                                </div>
                                            </div>
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Address
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-4">
                                                                <input type="text" class="form-control" name="address" />
                                                                <span class="help-block"> Provide your street address </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">City/Town
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-4">
                                                                <input type="text" class="form-control" name="city" />
                                                                <span class="help-block"> Provide your city or town </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Country <span class="required"> * </span></label>
                                                            <div class="col-md-4">
                                                                <select name="country" class="form-control">
                                                                    <option value=""></option>
                                                                    <option value="India">India</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                    </div>
                                                    
                                                    
                                                    <div class="tab-pane" id="tab2">
                                                        <h3 class="block">Please write a brief description about your academy.</h3>
                                                        
                                                      <div class="form-body">
                                            <div class="form-group last">
                                                <div class="col-md-12">
                                                    <textarea class="input-block-level" id="summernote" name="content" rows="18">
					</textarea>

                                                </div>
                                            </div>
                                        </div>  
                                                        
                                                        
                                                      
                                                    </div>
                                                    <div class="tab-pane" id="tab3">
                                                        <h3 class="block">Provide images and tags</h3>
                                                       
                                                        
                                                        
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Upload Image
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-8">
                                                                 <span class="btn green fileinput-button">
                                            <i class="fa fa-plus"></i>
                                            <span> Add files... </span>
                                            <input type="file" name="images[]" id = "images" accept=".jpg,.jpeg,.png" multiple = ""> </span>
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                        
                                                        
                                                        
                                                      
                                                        
                                                        
                                                       <div class="form-group">
                                                            <label class="control-label col-md-3">Tags
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-8">
                                                                <input type="text" data-role="tagsinput" name = "tags" style = "width:50em !important;">
                                                                <span class="help-block"> Add Multiple tags by using comma or enter  </span>
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                        
                                                        
                                                        
                                                       
                                                       
                                                        
                                                    </div>
                                                    <di v class="tab-pane" id="tab4">
                                                        <h3 class="block">Confirm your details</h3>
                                                        <h4 class="form-section">Academy Details</h4>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Academy Name:</label>
                                                            <div class="col-md-4">
                                                                <p class="form-control-static" data-display="academy_name"> </p>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Contact Person:</label>
                                                            <div class="col-md-4">
                                                                <p class="form-control-static" data-display="contact_person"> </p>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Email:</label>
                                                            <div class="col-md-4">
                                                                <p class="form-control-static" data-display="email"> </p>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Phone:</label>
                                                            <div class="col-md-4">
                                                                <p class="form-control-static" data-display="phone"> </p>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Address:</label>
                                                            <div class="col-md-4">
                                                                <p class="form-control-static" data-display="address"> </p>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">City/Town:</label>
                                                            <div class="col-md-4">
                                                                <p class="form-control-static" data-display="city"> </p>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Country:</label>
                                                            <div class="col-md-4">
                                                                <p class="form-control-static" data-display="country"> </p>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Tags:</label>
                                                            <div class="col-md-4">
                                                                <p class="form-control-static" data-display="tags"> </p>
                                                            </div>
                                                        </div>
                                                        
                                                         <div class="form-group">
                                                            <label class="control-label col-md-3">Description:</label>
                                                            <div class="col-md-4">
                                                                <p class="form-control-static" data-display="content"> </p>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Time Slot:</label>
                                                            <div class="col-md-4">
                                                                <p class="form-control-static" data-display="timeslot"> </p>
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                        
                                                        
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <div class="row">
                                                    <div class="col-md-offset-3 col-md-9">
                                                        <a href="javascript:;" class="btn default button-previous">
                                                            <i class="fa fa-angle-left"></i> Back </a>
                                                        <a href="javascript:;" class="btn btn-outline green button-next"> Continue
                                                            <i class="fa fa-angle-right"></i>
                                                        </a>
                                                        <a href="javascript:;" class="btn green button-submit"> Submit
                                                            <i class="fa fa-check"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
</div>
               
                <!-- END CONTENT BODY -->
          
            <!-- END CONTENT -->
          
        
        <!-- END CONTAINER -->
@stop
