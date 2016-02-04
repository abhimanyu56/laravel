@extends('layouts.layout')

@section('title')
Profile-Abhimanyu
@stop


@section('body')
 <div class="page-content">
                        
                                    <div class="profile">
                        <div class="tabbable-line tabbable-full-width">
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#tab_1_1" data-toggle="tab"> Overview </a>
                                </li>
                                
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_1_1">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <ul class="list-unstyled profile-nav">
                                                <li>
                                                    <img src="{{ URL::asset('/theme/abhimanyu.jpg')}}" class="img-responsive pic-bordered" alt="" />
                                                    
                                                </li>
                                               
                                            </ul>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-8 profile-info">
                                                    <h1 class="font-green sbold uppercase">Abhimanyu Singh</h1>
                                                    <p>
                                                        <a href="http://eduaby.com/"> www.eduaby.com </a>
                                                    </p>
                                                    <ul class="list-inline">
                                                        <li>
                                                            <i class="fa fa-map-marker"></i> India </li>
                                                        <li>
                                                            <i class="fa fa-calendar"></i> 5 Sept 1990 </li>
                                                        <li>
                                                            <i class="fa fa-briefcase"></i> Engineer </li>
                                                        <li>
                                                            <i class="fa fa-star"></i> Hard Working </li>
                                                        <li>
                                                            <i class="fa fa-heart"></i> Photography </li>
                                                    </ul>
                                                    <p> B.Tech. (Computer Science) Graduate from MDU, Rohtak. I always wanted to work with Startups so after completing Graduation I joined a startup (YoctoTech Labs) as Software engineer where I worked for two years learning emerging technologies. There I worked on projects like ecommerce website, health care webapp and providing Internet solutions in hotels. Moving forward after two years I joined an eLearning company (Liqvid) as Software Engineer where I worked on eLearning projects like Analytic Dashboard, Course Compiler, Assessment Engine, Communication Engine and other eLearning tools. At Liqvid I developed webapp, which mainly were mainly focused on eLearning. I also interacted with clients for fulfill their technological needs. Moving forward in career after leaving Liqvid I gave my small slot of my career time at Rupeepower.com(A Snapdeal Company) where I worked on finance related projects. Having passion for working in a startup, I joined Playyoutsport.com after leaving Rupeepower.com. I am Chief Architect, Technology at PlayYourSport where my role is to successfully execute company’s business mission through development and deployment. I am also responsible for creation of the scalable back end & front end (both app and web based)
                                                        </p>
                                                    
                                                    <a href="{{ URL::asset('/theme/resume.pdf')}}" class="btn btn-sm blue" download >
                                                                        <i class="fa fa-file-o"></i> Download Resume </a>
                                                </div>
                                                <!--end col-md-8-->
                                                
                                            </div>
                                            <!--end row-->
                                            
                                        </div>
                                    </div>
                                </div>
                                <!--tab_1_2-->
                                <!--end tab-pane-->
                            </div>
                        </div>
                    </div>
        
                   

                </div>

@stop