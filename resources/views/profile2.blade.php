<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <title>Admin - MastaMy</title>
    <!-- Custom CSS -->
    
    <link href="{{asset('admin/dist/css/style.min.css')}}" rel="stylesheet"> 
    <!-- <link href="../../dist/css/style.min.css" rel="stylesheet"> -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>3
<![endif]-->
<style>
.map-responsive{
    overflow:hidden;
    padding-bottom:56.25%;
    position:relative;
    height:0;
}
.map-responsive iframe{
    left:0;
    top:0;
    height:100%;
    width:100%;
    position:absolute;
}
</style>

</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                        <i class="ti-menu ti-close"></i>
                    </a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                           
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="{{asset('admin/assets/images/logo-text2.png')}}" alt="homepage" class="dark-logo" />
                            <!-- Light Logo text -->
                            <img src="{{asset('admin/assets/images/logo-light-text2.png')}}" class="light-logo" alt="homepage" />
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="ti-more"></i>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block">
                            <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar">
                                <i class="sl-icon-menu font-20"></i>
                            </a>
                        </li>
                                               
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->


                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box">
                            <a class="nav-link waves-effect waves-dark" href="javascript:void(0)">
                                <i class="ti-search font-16"></i>
                            </a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter">
                                <a class="srh-btn">
                                    <i class="ti-close"></i>
                                </a>
                            </form>
                        </li>
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->
                        

                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <img src="{{$data_profile->getProfile_Picture()}}" alt="user" class="rounded-circle" width="31">
                                <!-- {{$data_profile->getProfile_Picture()}} -->
                                
                               
                            </a>
                            
                           
                            <!-- <a href=""><font color="white" size="3" >Login</font></a>
                            &nbsp;
                            <a href=""><font color="white" size="3" >Register</font></a> -->
                            
                            
                            
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <span class="with-arrow">
                                    <span class="bg-primary"></span>
                                </span>
                                <div class="d-flex no-block align-items-center p-15 bg-primary text-white m-b-10">
                                    <div class="">
                                        <img src="{{$data_profile->getProfile_Picture()}}" alt="user" class="img-circle" width="60">
                                    </div>
                                    <div class="m-l-10">
                                        <h4 class="m-b-0">{{$data_profile->name}}</h4>
                                         <!-- <h4 class="m-b-0">{{$data_profile->name}}</h4> -->
                                        <p class=" m-b-0">{{$data_profile->email}}</p>
                                    </div>
                                </div>
                                
                                <a action="{{ route('logout')}}" class="dropdown-item" >
                                    <i class="ti-user m-r-5 m-l-5"></i> Change Password</a>
                                     
                                    
                                        <a class="dropdown-item" href="/logout" >
                                            <i class="fa fa-power-off m-r-5 m-l-5"></i> Logout
                                            
                                            </a>
                    
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                    </form>

                                   

                                    
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        
		
		
		
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Profile Page</h4>
                        <div class="d-flex align-items-left">

                        </div>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex no-block justify-content-end align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <center class="m-t-30"> <img src="{{$data_profile->getProfile_Picture()}}" class="rounded-circle" width="150" />
                                    <h4 class="card-title m-t-10">{{$data_profile->name}}</h4>
                                    <h6 class="card-subtitle">{{$data_profile->designation}}</h6>
                                    <!-- <div class="row text-center justify-content-md-center"> -->
                                        <!-- <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-people"></i> <font class="font-medium">254</font></a></div> -->
                                        <!-- <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-picture"></i> <font class="font-medium">54</font></a></div> -->
                                    <!-- </div> -->
                                </center>
                            </div>
                            <div>
                                <hr> </div>
                            <div class="card-body">
								<small class="text-muted">Company Name </small>
                                <h6>{{$data_profile->company[0]->name}}</h6>								
								<small class="text-muted p-t-30 db">Industry Type</small>
                                <h6>{{$data_profile->company[0]->industry}}</h6>
								<small class="text-muted p-t-30 db">Registration Number (ROC)</small>
                                <h6>{{$data_profile->company[0]->registration_number}}</h6>
								<small class="text-muted p-t-30 db">Address</small>
                                <h6>{{$data_profile->company[0]->address}}</h6>
								<br/>
                                <div class="map-responsive">                                    
									<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.1759159509434!2d101.6441253147571!3d3.0475045977807147!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc4b3bbd2f813b%3A0x9ed7bba8d3ba290c!2sLot+12A%2C+1st+Floor%2C+2%2C+Jalan+BK+5a%2F2c%2C+Bandar+Kinrara+5%2C+47180+Puchong%2C+Selangor!5e0!3m2!1sen!2smy!4v1561717766143!5m2!1sen!2smy" width="1000" height="4500" frameborder="0" style="border:0" allowfullscreen></iframe> -->
                                    {!!$data_profile->company[0]->google_map!!}
                                     
                                </div>
								<br/>
								
                                <!-- <button class="btn btn-circle btn-secondary"><i class="fab fa-twitter"></i></button> -->
								
                                <!-- <button class="btn btn-circle btn-secondary"><i class="fab fa-youtube"></i></button> -->

                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Tabs -->
                            <ul class="nav nav-pills custom-pills" id="pills-tab" role="tablist">
                                <!-- <li class="nav-item"> -->
                                    <!-- <a class="nav-link active" id="pills-timeline-tab" data-toggle="pill" href="#current-month" role="tab" aria-controls="pills-timeline" aria-selected="true">Timeline</a> -->
                                <!-- </li> -->
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-profile-tab" data-toggle="pill" href="#Profile" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-setting-tab" data-toggle="pill" href="#UpdateInfo" role="tab" aria-controls="pills-setting" aria-selected="false">Update Info</a>
                                </li>
								<li class="nav-item">
                                    <a class="nav-link" id="pills-setting-tab" data-toggle="pill" href="#UpdateCompany" role="tab" aria-controls="pills-setting" aria-selected="false">Update Company</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-setting-tab" data-toggle="pill" href="#UpdateResume" role="tab" aria-controls="pills-setting" aria-selected="false">Update Resume</a>
                                </li>
                            </ul>
                            <!-- Tabs -->
                            <div class="tab-content" id="pills-tabContent">                                
                                <div class="tab-pane fade show active" id="Profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4 col-xs-6 b-r"> <strong>Full Name</strong>
                                                <br>
                                                <p class="text-muted">{{$data_profile->name}}</p>
                                            </div>
                                            <div class="col-md-4 col-xs-6 b-r"> <strong>Mobile</strong>
                                                <br>
                                                <p class="text-muted">{{$data_profile->phone}}</p>
                                            </div>
                                            <div class="col-md-4 col-xs-6 b-r"> <strong>Email</strong>
                                                <br>
                                                <p class="text-muted">{{$data_profile->email}}</p>
                                            </div>
                                        </div>
										<h4 class="font-medium m-t-30">About Me</h4>
                                        <hr>
                                        <p class="m-t-30">{{$data_profile->about_me}}</p>
                    
                                        <hr>
										
										<a href="{{$data_profile->facebook_link}}" class="btn btn-circle btn-secondary"><i class="fab fa-facebook-f"></i>{{$data_profile->facebook_link}}</a>
										<a href="{{$data_profile->twitter_link}}" class="btn btn-circle btn-secondary"><i class="fab fa-twitter"></i>{{$data_profile->instagram_link}}</a>
										<a href="{{$data_profile->linkedin_link}}" class="btn btn-circle btn-secondary"><i class="fab fa-youtube"></i>{{$data_profile->linkedin_link}}</a>
										
										
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="UpdateInfo" role="tabpanel" aria-labelledby="pills-setting-tab">
                                    <div class="card-body">
                                        <form class="form-horizontal form-material" method ="post" action="/Profile/{{$data_profile->id}}/edit" enctype="multipart/form-data">
                                            {{csrf_field()}}
                                            <div class="form-group">
                                                <label class="col-md-12">Full Name</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="" class="form-control form-control-line" name="name" value="{{$data_profile->name}}">
                                                    @error('name')
                                                        <p class="text-danger">{{$message}}</p>
                                                    @enderror
                                                </div>
                                            </div>
											<div class="form-group">
                                                <label class="col-md-12">Designation</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="" class="form-control form-control-line" name="designation" value="{{$data_profile->designation}}">
                                                    @error('designation')
                                                        <p class="text-danger">{{$message}}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Email</label>
                                                <div class="col-md-12">
                                                    <input type="email" placeholder="" class="form-control form-control-line" name="email" value="{{$data_profile->email}}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Mobile Number</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="" class="form-control form-control-line" name="phone" value ="{{$data_profile->phone}}">
                                                </div>
                                            </div>										
                                            <div class="form-group">
                                                <label class="col-md-12">About Me</label> 
                                                <div class="col-md-12">
                                                    <textarea rows="5" class="form-control form-control-line" placeholder="" name = "about_me" >{{$data_profile->about_me}}</textarea>
                                                </div>
                                            </div>
                                            


                                            <!-- <div class="form-group">
                                                <label class="col-md-12">Profile Picture</label>
                                                <div class="col-md-12">
                                                    <input type="file" placeholder="" class="form-control form-control-line" name="profile_picture" value ="{{$data_profile->phone}}">
                                                </div>
                                            </div>	
                                             -->

                                            <div class="form-group">
                                                <div class="col-md-12">
                                                <label class="control-label col-form-label">Profile Picture</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Choose File</span>
                                                    </div>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="inputGroupFile01" name="profile_picture" value ="{{$data_profile->phone}}">
                                                        <label class="custom-file-label" for="inputGroupFile01" ></label>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Facebook Link</label> 
                                                <div class="col-md-12">
                                                <input type="text" placeholder="" class="form-control form-control-line" name="facebook_link" value ="{{$data_profile->facebook_link}}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Instagram Link</label> 
                                                <div class="col-md-12">
                                                <input type="text" placeholder="" class="form-control form-control-line" name="instagram_link" value ="{{$data_profile->instagram_link}}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Linkedin Link</label> 
                                                <div class="col-md-12">
                                                <input type="text" placeholder="" class="form-control form-control-line" name="linkedin_link" value ="{{$data_profile->linkedin_link}}">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                 
                                                    <input type="submit" class="btn btn-success" value="save changes">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
								
								<div class="tab-pane fade" id="UpdateCompany" role="tabpanel" aria-labelledby="pills-setting-tab">
                                    <div class="card-body">
                                        <form class="form-horizontal form-material" action="Company/{{$data_profile->company[0]->id}}/edit" method="post">
                                           {{csrf_field()}}
                                            <div class="form-group">
                                                <label class="col-md-12">Company Name</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="Please insert company name" class="form-control form-control-line" name="name" value="{{$data_profile->company[0]->name}}">
                                                </div>
                                            </div>
											<div class="form-group">
                                                <label class="col-md-12">Industry Type</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="{{$data_profile->company[0]->industry}}" class="form-control form-control-line" name="industry" value="{{$data_profile->company[0]->industry}}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Registration Number (ROC)</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="{{$data_profile->company[0]->registration_number}}" class="form-control form-control-line" id="example-email" name="registration_number" value="{{$data_profile->company[0]->registration_number}}">
                                                </div>                                            
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Address</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="{{$data_profile->company[0]->registration_number}}" class="form-control form-control-line" id="example-email" name="address" value ="{{$data_profile->company[0]->address}}">
                                                </div>                                            
                                            </div>

                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Google Map embedded Link <small> <a href="https://support.google.com/maps/answer/144361?co=GENIE.Platform%3DDesktop&hl=en "target="_blank">View guide</a></small></label>
                                                <div class="col-md-12">
                                                    
                                                    <input type="text" placeholder="" class="form-control form-control-line" id="example-email" name="google_map" value= "{{$data_profile->company[0]->google_map}}">
                                                    
                                                </div>                                            
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                <input type="submit" class="btn btn-success" value="save changes">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
								
                                <div class="tab-pane fade" id="UpdateResume" role="tabpanel" aria-labelledby="pills-setting-tab">
                                    <div class="card-body">
                                        <form class="form-horizontal form-material" action="Resume/{{$data_resume->id}}/edit" method="post">
                                           {{csrf_field()}}
                                            <div class="form-group">
                                                <h4 class="page-title">EDUCATION</h4>
                                                <br>
                                                <label class="col-md-12">Course</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="Please insert company name" class="form-control form-control-line" name="course" value="{{$data_resume->course}}">
                                                </div>
                                            </div>
											<div class="form-group">
                                                <label class="col-md-12">Year</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="{{$data_resume->year}}" class="form-control form-control-line" name="year" value="{{$data_resume->year}}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">University</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="{{$data_resume->uni}}" class="form-control form-control-line" id="example-email" name="uni" value ="{{$data_resume->uni}}">
                                                </div>                                            
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Detail Education</label>
                                                <div class="col-md-12">
                                                    <textarea rows="5" class="form-control form-control-line" placeholder="{{$data_resume->detail_education}}" name = "detail_education" >{{$data_resume->detail_education}}</textarea>
                                                </div>                                            
                                            </div>
                                            <hr color=#009347>
                                           
                                            <div class="form-group">
                                            <h4 class="page-title">EXPERIENCE</h4>
                                            <br>
                                                <label for="example-email" class="col-md-12">Job Position</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="{{$data_resume->job_title}}" class="form-control form-control-line" id="example-email" name="job_title" value ="{{$data_resume->job_title}}">
                                                </div>                                            
                                            </div>

                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Name of the Company</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="{{$data_resume->job_company}}" class="form-control form-control-line" id="example-email" name="job_company" value ="{{$data_resume->job_company}}">
                                                </div>                                            
                                            </div>

                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Date Start</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="{{$data_resume->date_start}}" class="form-control form-control-line" id="example-email" name="date_start" value ="{{$data_resume->date_start}}">
                                                </div>                                            
                                            </div>

                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Date End</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="{{$data_resume->date_end}}" class="form-control form-control-line" id="example-email" name="date_end" value ="{{$data_resume->date_end}}">
                                                </div>                                            
                                            </div>

                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Job Description</label>
                                                <div class="col-md-12">
                                                    <textarea rows="5" class="form-control form-control-line" placeholder="{{$data_resume->job_description}}" name = "detail_description" >{{$data_resume->job_description}}</textarea>
                                                </div>                                            
                                            </div>
                                            <hr color=#009347>
                                            

                                            <div class="form-group">
                                            <h4 class="page-title">SKILLS</h4>
                                            <br>
                                                <label for="example-email" class="col-md-12">Skill Category</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="{{$data_resume->type_skill}}" class="form-control form-control-line" id="example-email" name="type_skill" value ="{{$data_resume->type_skill}}">
                                                    <button type="button" name="add" id="add" class="btn btn-success">Add More</button>
                                                </div>                                            
                                            </div>

                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Name Category</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="{{$data_resume->name_skill}}" class="form-control form-control-line" id="example-email" name="name_skill" value ="{{$data_resume->name_skill}}">
                                                </div>                                            
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1" class="col-md-12">Proficiency</label>
                                                <select class="form-control form-control-line" id="exampleFormControlSelect1"name="percentage" value="{{$data_resume->percentage}}">
                                                    <option value="Advance">Advance</option>
                                                    <option value="Intermediate">Intermediate</option>
                                                    <option value="Beginner">Beginner</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                <input type="submit" class="btn btn-success" value="save changes">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script type="text/javascript">
    $(document).ready(function(){      
      var postURL = "<?php echo url('addmore'); ?>";
      var i=1;  


      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });  


      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  


      $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });


      $('#submit').click(function(){            
           $.ajax({  
                url:postURL,  
                method:"POST",  
                data:$('#add_name').serialize(),
                type:'json',
                success:function(data)  
                {
                    if(data.error){
                        printErrorMsg(data.error);
                    }else{
                        i=1;
                        $('.dynamic-added').remove();
                        $('#add_name')[0].reset();
                        $(".print-success-msg").find("ul").html('');
                        $(".print-success-msg").css('display','block');
                        $(".print-error-msg").css('display','none');
                        $(".print-success-msg").find("ul").append('<li>Record Inserted Successfully.</li>');
                    }
                }  
           });  
      });  


      function printErrorMsg (msg) {
         $(".print-error-msg").find("ul").html('');
         $(".print-error-msg").css('display','block');
         $(".print-success-msg").css('display','none');
         $.each( msg, function( key, value ) {
            $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
         });
      }
    });  
</script>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <footer class="footer text-center">
                All Rights Reserved by MastaPay. Designed and Developed by
                <a href="https://masta.tech">MastaTech</a>.
            </footer>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- customizer Panel -->
    <!-- ============================================================== -->

    <div class="chat-windows"></div>
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{asset('admin/assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('admin/assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('admin/assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- apps -->
    <script src="{{asset('admin/dist/js/app.min.js')}}"></script>
    <script src="{{asset('admin/dist/js/app.init.horizontal.js')}}"></script>
    <!-- <script src="../../dist/js/app.init.dark.js"></script> -->
    <!-- <script src="../../dist/js/app.init.horizontal-fullwidth.js"></script> -->
    <script src="{{asset('admin/dist/js/app.init.horizontal.js')}}"></script>
    <!-- <script src="{{asset('admin/dist/js/app-style-switcher.js')}}"></script> -->
    <!-- <script src="../../dist/js/app-style-switcher.js"></script>
    <script src="{{asset('admin/dist/js/app-style-switcher.horizontal.js')}}"></script> -->
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{asset('admin/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{asset('admin/assets/extra-libs/sparkline/sparkline.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('admin/dist/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('admin/dist/js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('admin/dist/js/custom.min.js')}}"></script>
</body>

</html>