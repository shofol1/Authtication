<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Sleek Dashboard - Free Bootstrap 4 Admin Dashboard Template and UI Kit. It is very powerful bootstrap admin dashboard, which allows you to build products like admin panels, content management systems and CRMs etc.">
  
    <title>Dashboard</title>
    
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet" />

    <link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />
    <!-- PLUGINS CSS STYLE -->
    <link href="{{ asset('backend/assets/plugins/simplebar/simplebar.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/plugins/nprogress/nprogress.css') }}" rel="stylesheet" />
  
    <!-- No Extra plugin used -->
  <link href='{{asset('backend/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css')}}' rel='stylesheet'>
    <link href='{{ asset('backend/assets/plugins/daterangepicker/daterangepicker.css') }}' rel='stylesheet'>
    
    
    <link href='{{ asset('backend/assets/plugins/toastr/toastr.min.css') }}' rel='stylesheet'>
    <link href='{{ asset('backend/assets/css/style.css') }}' rel='stylesheet'>
    
    
    
    
    
    

    <!-- SLEEK CSS -->
    <link id="sleek-css" rel="stylesheet" href="{{ asset('backend/assets/css/sleek.css') }}" />
  
    <!-- FAVICON -->
    <link href="{{ asset('backend/assets/img/favicon.png') }}" rel="shortcut icon" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    <!--
      HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
    -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="{{ asset('backend/assets/plugins/nprogress/nprogress.js') }}"></script>
  </head>

  <body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">
    <script>
      NProgress.configure({ showSpinner: false });
      NProgress.start();
    </script>

    {{-- <div id="toaster"></div> --}}

    <!-- ====================================
    ——— WRAPPER
    ===================================== -->
    <div class="wrapper">

      <!-- Github Link -->
      <a href="https://github.com/tafcoder/sleek-dashboard"  target="_blank" class="github-link">
        <svg width="70" height="70" viewBox="0 0 250 250" aria-hidden="true">
          <defs>
            <linearGradient id="grad1" x1="0%" y1="75%" x2="100%" y2="0%">
              <stop offset="0%" style="stop-color:#896def;stop-opacity:1" />
              <stop offset="100%" style="stop-color:#482271;stop-opacity:1" />
            </linearGradient>
          </defs>
          <path d="M 0,0 L115,115 L115,115 L142,142 L250,250 L250,0 Z" fill="url(#grad1)"></path>
        </svg>
        <i class="mdi mdi-github-circle"></i>
      </a>




        <!-- ====================================
          ——— LEFT SIDEBAR WITH OUT FOOTER
        ===================================== -->
       
@include('admin.partial.sidebar')

          <!-- ====================================
        ——— PAGE WRAPPER
        ===================================== -->
        <div class="page-wrapper">
          
          <!-- Header -->
          <header class="main-header " id="header">
            <nav class="navbar navbar-static-top navbar-expand-lg">
              <!-- Sidebar toggle button -->
              <button id="sidebar-toggler" class="sidebar-toggle">
                <span class="sr-only">Toggle navigation</span>
              </button>
              <!-- search form -->
              <div class="search-form d-none d-lg-inline-block">
                <div class="input-group">
                  <button type="button" name="search" id="search-btn" class="btn btn-flat">
                    <i class="mdi mdi-magnify"></i>
                  </button>
                  <input type="text" name="query" id="search-input" class="form-control" placeholder="'button', 'chart' etc."
                    autofocus autocomplete="off" />
                </div>
                <div id="search-results-container">
                  <ul id="search-results"></ul>
                </div>
              </div>

              <div class="navbar-right ">
                <ul class="nav navbar-nav">
                  <li class="dropdown notifications-menu custom-dropdown">
                    <button class="dropdown-toggle notify-toggler custom-dropdown-toggler">
                      <i class="mdi mdi-bell-outline"></i>
                    </button>

                    <div class="card card-default dropdown-notify dropdown-menu-right mb-0">
                      <div class="card-header card-header-border-bottom px-3">
                        <h2>Notifications</h2>
                      </div>

                      <div class="card-body px-0 py-3">
                        <ul class="nav nav-tabs nav-style-border p-0 justify-content-between" id="myTab" role="tablist">
                          <li class="nav-item mx-3 my-0 py-0">
                            <a class="nav-link active pb-3" id="home2-tab" data-toggle="tab" href="#home2" role="tab" aria-controls="home2" aria-selected="true">All (11)</a>
                          </li>

                          <li class="nav-item mx-3 my-0 py-0">
                            <a class="nav-link pb-3" id="profile2-tab" data-toggle="tab" href="#profile2" role="tab" aria-controls="profile2" aria-selected="false">Msgs (6)</a>
                          </li>

                          <li class="nav-item mx-3 my-0 py-0">
                            <a class="nav-link pb-3" id="contact2-tab" data-toggle="tab" href="#contact2" role="tab" aria-controls="contact2" aria-selected="false">Others (5)</a>
                          </li>
                        </ul>

                        <div class="tab-content" id="myTabContent3">
                          <div class="tab-pane fade show active" id="home2" role="tabpanel" aria-labelledby="home2-tab">
                            <ul class="list-unstyled" data-simplebar style="height: 360px">
                              <li>
                                <a href="javscript:void(0)" class="media media-message media-notification">
                                  <div class="position-relative mr-3">
                                    <img class="rounded-circle" src="{{ asset('backend/assets/img/user/u2.jpg') }}" alt="Image">
                                    <span class="status away"></span>
                                  </div>
                                  <div class="media-body d-flex justify-content-between">
                                    <div class="message-contents">
                                      <h4 class="title">Aaren</h4>
                                      <p class="last-msg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque odio, eligendi delectus vitae.</p>

                                      <span class="font-size-12 font-weight-medium text-secondary">
                                        <i class="mdi mdi-clock-outline"></i> 30 min ago...
                                      </span>
                                    </div>
                                  </div>
                                </a>
                              </li>

                              <li>
                                <a href="javscript:void(0)" class="media media-message media-notification media-active">
                                  <div class="position-relative mr-3">
                                    <img class="rounded-circle" src="{{ asset('backend/assets/img/user/u1.jpg') }}" alt="Image">
                                    <span class="status active"></span>
                                  </div>
                                  <div class="media-body d-flex justify-content-between">
                                    <div class="message-contents">
                                      <h4 class="title">Abril</h4>
                                      <p class="last-msg">Donec mattis augue a nisl consequat, nec imperdiet ex rutrum. Fusce et vehicula enim. Sed in enim eu odio vehic.</p>

                                      <span class="font-size-12 font-weight-medium text-white">
                                        <i class="mdi mdi-clock-outline"></i> Just now...
                                      </span>
                                    </div>
                                  </div>
                                </a>
                              </li>

                              <li>
                                <a href="javscript:void(0)" class="media media-message media-notification">
                                  <div class="position-relative mr-3">
                                    <img class="rounded-circle" src="{{ asset('backend/assets/img/user/u5.jpg') }}" alt="Image">
                                    <span class="status away"></span>
                                  </div>
                                  <div class="media-body d-flex justify-content-between">
                                    <div class="message-contents">
                                      <h4 class="title">Emma</h4>
                                      <p class="last-msg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque odio, eligendi delectus vitae.</p>

                                      <span class="font-size-12 font-weight-medium text-secondary">
                                        <i class="mdi mdi-clock-outline"></i> 1 hrs ago...
                                      </span>
                                    </div>
                                  </div>
                                </a>
                              </li>

                              <li>
                                <a href="javscript:void(0)" class="media media-message media-notification event-active">

                                  <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-info text-white">
                                    <i class="mdi mdi-calendar-check font-size-20"></i>
                                  </div>

                                  <div class="media-body d-flex justify-content-between">
                                    <div class="message-contents">
                                      <h4 class="title">New event added</h4>
                                      <p class="last-msg font-size-14">03/Jan/2020 (1pm - 2pm)</p>

                                      <span class="font-size-12 font-weight-medium text-secondary">
                                        <i class="mdi mdi-clock-outline"></i> 10 min ago...
                                      </span>
                                    </div>
                                  </div>
                                </a>
                              </li>

                              <li>
                                <a href="javscript:void(0)" class="media media-message media-notification">

                                  <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-warning text-white">
                                    <i class="mdi mdi-chart-areaspline font-size-20"></i>
                                  </div>

                                  <div class="media-body d-flex justify-content-between">
                                    <div class="message-contents">
                                      <h4 class="title">Sales report</h4>
                                      <p class="last-msg font-size-14">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque odio, eligendi delectus vitae.</p>

                                      <span class="font-size-12 font-weight-medium text-secondary">
                                        <i class="mdi mdi-clock-outline"></i> 1 hrs ago...
                                      </span>
                                    </div>
                                  </div>
                                </a>
                              </li>

                              <li>
                                <a href="javscript:void(0)" class="media media-message media-notification">

                                  <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-primary text-white">
                                    <i class="mdi mdi-account-multiple-check font-size-20"></i>
                                  </div>

                                  <div class="media-body d-flex justify-content-between">
                                    <div class="message-contents">
                                      <h4 class="title">Add request</h4>
                                      <p class="last-msg font-size-14">Add Dany Jones as your contact consequat nec imperdiet ex rutrum. Fusce et vehicula enim. Sed in enim.</p>

                                      <button type="button" class="my-1 btn btn-sm btn-success">Accept</button>
                                      <button type="button" class="my-1 btn btn-sm btn-secondary">Delete</button>

                                      <span class="font-size-12 font-weight-medium text-secondary d-block">
                                        <i class="mdi mdi-clock-outline"></i> 5 min ago...
                                      </span>
                                    </div>
                                  </div>
                                </a>
                              </li>

                              <li>
                                <a href="javscript:void(0)" class="media media-message media-notification">

                                  <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-danger text-white">
                                    <i class="mdi mdi-server-network-off font-size-20"></i>
                                  </div>

                                  <div class="media-body d-flex justify-content-between">
                                    <div class="message-contents">
                                      <h4 class="title">Server overloaded</h4>
                                      <p class="last-msg font-size-14">Donec mattis augue a nisl consequat, nec imperdiet ex rutrum. Fusce et vehicula enim. Sed in enim eu odio vehic.</p>

                                      <span class="font-size-12 font-weight-medium text-secondary">
                                        <i class="mdi mdi-clock-outline"></i> 30 min ago...
                                      </span>
                                    </div>
                                  </div>
                                </a>
                              </li>

                              <li>
                                <a href="javscript:void(0)" class="media media-message media-notification">

                                  <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-purple text-white">
                                    <i class="mdi mdi-playlist-check font-size-20"></i>
                                  </div>

                                  <div class="media-body d-flex justify-content-between">
                                    <div class="message-contents">
                                      <h4 class="title">Task complete</h4>
                                      <p class="last-msg font-size-14">Nam ut nisi erat. Ut quis tortor varius, hendrerit arcu quis, congue nisl. In scelerisque, sem ut ve.</p>

                                      <span class="font-size-12 font-weight-medium text-secondary">
                                        <i class="mdi mdi-clock-outline"></i> 2 hrs ago...
                                      </span>
                                    </div>
                                  </div>
                                </a>
                              </li>

                            </ul>
                          </div>

                          <div class="tab-pane fade" id="profile2" role="tabpanel" aria-labelledby="profile2-tab">
                            <ul class="list-unstyled" data-simplebar style="height: 360px">
                              <li>
                                <a href="javscript:void(0)" class="media media-message media-notification">
                                  <div class="position-relative mr-3">
                                    <img class="rounded-circle" src="assets/img/user/u6.jpg" alt="Image">
                                    <span class="status away"></span>
                                  </div>
                                  <div class="media-body d-flex justify-content-between">
                                    <div class="message-contents">
                                      <h4 class="title">William</h4>
                                      <p class="last-msg">Donec mattis augue a nisl consequat, nec imperdiet ex rutrum. Fusce et vehicula enim. Sed in enim eu odio vehic.</p>

                                      <span class="font-size-12 font-weight-medium text-secondary">
                                        <i class="mdi mdi-clock-outline"></i> 1 hrs ago...
                                      </span>
                                    </div>
                                  </div>
                                </a>
                              </li>

                              <li>
                                <a href="javscript:void(0)" class="media media-message media-notification">
                                  <div class="position-relative mr-3">
                                    <img class="rounded-circle" src="assets/img/user/u7.jpg" alt="Image">
                                    <span class="status away"></span>
                                  </div>
                                  <div class="media-body d-flex justify-content-between">
                                    <div class="message-contents">
                                      <h4 class="title">Camble</h4>
                                      <p class="last-msg">Nam ut nisi erat. Ut quis tortor varius, hendrerit arcu quis, congue nisl. In scelerisque, sem ut ve.</p>

                                      <span class="font-size-12 font-weight-medium text-secondary">
                                        <i class="mdi mdi-clock-outline"></i> 1 hrs ago...
                                      </span>
                                    </div>
                                  </div>
                                </a>
                              </li>

                              <li>
                                <a href="javscript:void(0)" class="media media-message media-notification media-active">
                                  <div class="position-relative mr-3">
                                    <img class="rounded-circle" src="assets/img/user/u1.jpg" alt="Image">
                                    <span class="status active"></span>
                                  </div>
                                  <div class="media-body d-flex justify-content-between">
                                    <div class="message-contents">
                                      <h4 class="title">Abril</h4>
                                      <p class="last-msg">Donec mattis augue a nisl consequat, nec imperdiet ex rutrum. Fusce et vehicula enim. Sed in enim eu odio vehic.</p>

                                      <span class="font-size-12 font-weight-medium text-white">
                                        <i class="mdi mdi-clock-outline"></i> Just now...
                                      </span>
                                    </div>
                                  </div>
                                </a>
                              </li>

                              <li>
                                <a href="javscript:void(0)" class="media media-message media-notification">
                                  <div class="position-relative mr-3">
                                    <img class="rounded-circle" src="assets/img/user/u2.jpg" alt="Image">
                                    <span class="status away"></span>
                                  </div>
                                  <div class="media-body d-flex justify-content-between">
                                    <div class="message-contents">
                                      <h4 class="title">Aaren</h4>
                                      <p class="last-msg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque odio, eligendi delectus vitae.</p>

                                      <span class="font-size-12 font-weight-medium text-secondary">
                                        <i class="mdi mdi-clock-outline"></i> 1 hrs ago...
                                      </span>
                                    </div>
                                  </div>
                                </a>
                              </li>

                              <li>
                                <a href="javscript:void(0)" class="media media-message media-notification">
                                  <div class="position-relative mr-3">
                                    <img class="rounded-circle" src="assets/img/user/u5.jpg" alt="Image">
                                    <span class="status away"></span>
                                  </div>
                                  <div class="media-body d-flex justify-content-between">
                                    <div class="message-contents">
                                      <h4 class="title">Emma</h4>
                                      <p class="last-msg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque odio, eligendi delectus vitae.</p>

                                      <span class="font-size-12 font-weight-medium text-secondary">
                                        <i class="mdi mdi-clock-outline"></i> 1 hrs ago...
                                      </span>
                                    </div>
                                  </div>
                                </a>
                              </li>

                            </ul>
                          </div>

                          <div class="tab-pane fade" id="contact2" role="tabpanel" aria-labelledby="contact2-tab">
                            <ul class="list-unstyled" data-simplebar style="height: 360px">
                              <li>
                                <a href="javscript:void(0)" class="media media-message media-notification event-active">

                                  <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-info text-white">
                                    <i class="mdi mdi-calendar-check font-size-20"></i>
                                  </div>

                                  <div class="media-body d-flex justify-content-between">
                                    <div class="message-contents">
                                      <h4 class="title">New event added</h4>
                                      <p class="last-msg font-size-14">03/Jan/2020 (1pm - 2pm)</p>

                                      <span class="font-size-12 font-weight-medium text-secondary">
                                        <i class="mdi mdi-clock-outline"></i> 10 min ago...
                                      </span>
                                    </div>
                                  </div>
                                </a>
                              </li>

                              <li>
                                <a href="javscript:void(0)" class="media media-message media-notification">

                                  <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-warning text-white">
                                    <i class="mdi mdi-chart-areaspline font-size-20"></i>
                                  </div>

                                  <div class="media-body d-flex justify-content-between">
                                    <div class="message-contents">
                                      <h4 class="title">Sales report</h4>
                                      <p class="last-msg font-size-14">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque odio, eligendi delectus vitae.</p>

                                      <span class="font-size-12 font-weight-medium text-secondary">
                                        <i class="mdi mdi-clock-outline"></i> 1 hrs ago...
                                      </span>
                                    </div>
                                  </div>
                                </a>
                              </li>

                              <li>
                                <a href="javscript:void(0)" class="media media-message media-notification">

                                  <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-primary text-white">
                                    <i class="mdi mdi-account-multiple-check font-size-20"></i>
                                  </div>

                                  <div class="media-body d-flex justify-content-between">
                                    <div class="message-contents">
                                      <h4 class="title">Add request</h4>
                                      <p class="last-msg font-size-14">Add Dany Jones as your contact consequat nec imperdiet ex rutrum. Fusce et vehicula enim. Sed in enim.</p>

                                      <button type="button" class="my-1 btn btn-sm btn-success">Accept</button>
                                      <button type="button" class="my-1 btn btn-sm btn-secondary">Delete</button>

                                      <span class="font-size-12 font-weight-medium text-secondary d-block">
                                        <i class="mdi mdi-clock-outline"></i> 5 min ago...
                                      </span>
                                    </div>
                                  </div>
                                </a>
                              </li>

                              <li>
                                <a href="javscript:void(0)" class="media media-message media-notification">

                                  <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-danger text-white">
                                    <i class="mdi mdi-server-network-off font-size-20"></i>
                                  </div>

                                  <div class="media-body d-flex justify-content-between">
                                    <div class="message-contents">
                                      <h4 class="title">Server overloaded</h4>
                                      <p class="last-msg font-size-14">Donec mattis augue a nisl consequat, nec imperdiet ex rutrum. Fusce et vehicula enim. Sed in enim eu odio vehic.</p>

                                      <span class="font-size-12 font-weight-medium text-secondary">
                                        <i class="mdi mdi-clock-outline"></i> 30 min ago...
                                      </span>
                                    </div>
                                  </div>
                                </a>
                              </li>

                              <li>
                                <a href="javscript:void(0)" class="media media-message media-notification">

                                  <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-purple text-white">
                                    <i class="mdi mdi-playlist-check font-size-20"></i>
                                  </div>

                                  <div class="media-body d-flex justify-content-between">
                                    <div class="message-contents">
                                      <h4 class="title">Task complete</h4>
                                      <p class="last-msg font-size-14">Nam ut nisi erat. Ut quis tortor varius, hendrerit arcu quis, congue nisl. In scelerisque, sem ut ve.</p>

                                      <span class="font-size-12 font-weight-medium text-secondary">
                                        <i class="mdi mdi-clock-outline"></i> 2 hrs ago...
                                      </span>
                                    </div>
                                  </div>
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>

                    <ul class="dropdown-menu dropdown-menu-right d-none">
                      <li class="dropdown-header">You have 5 notifications</li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-account-plus"></i> New user registered
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-account-remove"></i> User deleted
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 07 AM</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-chart-areaspline"></i> Sales report is ready
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 12 PM</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-account-supervisor"></i> New client
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-server-network-off"></i> Server overloaded
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 05 AM</span>
                        </a>
                      </li>
                      <li class="dropdown-footer">
                        <a class="text-center" href="#"> View All </a>
                      </li>
                    </ul>
                  </li>
                  <li class="right-sidebar-in right-sidebar-2-menu">
                    <i class="mdi mdi-settings mdi-spin"></i>
                  </li>
                  <!-- User Account -->
                  <li class="dropdown user-menu">
                    <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                      <img src="{{ asset(Auth::user()->profile_photo_url) }}" class="user-image" alt="User Image" />
                      <span class="d-none d-lg-inline-block">{{ Auth::user()->name }}</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <!-- User image -->
                      <li class="dropdown-header">
                        <img src="{{ asset(Auth::user()->profile_photo_url) }}" class="img-circle" alt="User Image" />
                        <div class="d-inline-block">
                          {{  Auth::user()->name }}<small class="pt-1"> {{  Auth::user()->email }}</small>
                        </div>
                      </li>

                      <li>
                        <a href="{{ route('user.profile') }}">
                          <i class="mdi mdi-account"></i> My Profile
                        </a>
                      </li>
                      <li>
                        <a href="{{ route('change.password') }}">
                          <i class="mdi mdi-email"></i> Change Password
                        </a>
                      </li>
                      <li>
                        <a href="#"> <i class="mdi mdi-diamond-stone"></i> Projects </a>
                      </li>
                      <li class="right-sidebar-in">
                        <a href="javascript:0"> <i class="mdi mdi-settings"></i> Setting </a>
                      </li>

                      <li class="dropdown-footer">
                        <a href="{{ route('user.logout') }}"> <i class="mdi mdi-logout"></i> Log Out </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </nav>
          </header>
@yield('admin_content');
        
      </div> <!-- End Content -->
    </div> <!-- End Content Wrapper -->
    
    
    <!-- Footer -->
    <footer class="footer mt-auto text-center">
      <div class="copyright bg-white">
        <p>
          Copyright &copy; <span id="copy-year"></span> develop by <a class="text-primary" href="https://themefisher.com" target="_blank">shofol</a>.
        </p>
      </div>
      <script>
        var d = new Date();
        var year = d.getFullYear();
        document.getElementById("copy-year").innerHTML = year;
      </script>
    </footer>

    </div> <!-- End Page Wrapper -->
  </div> <!-- End Wrapper -->


    <!-- <script type="module">
      import 'https://cdn.jsdelivr.net/npm/@pwabuilder/pwaupdate';

      const el = document.createElement('pwa-update');
      document.body.appendChild(el);
    </script> -->

    <!-- Javascript -->
    <script src="{{ asset('backend/assets/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/simplebar/simplebar.min.js') }}"></script>
 
    <script src='{{ asset('backend/assets/plugins/charts/Chart.min.js') }}'></script>
    <script src='{{ asset('backend/assets/js/chart.js') }}'></script>

    
    

    <script src='{{ asset('backend/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js') }}'></script>
    <script src='{{ asset('backend/assets/plugins/jvectormap/jquery-jvectormap-world-mill.js') }}'></script>
    <script src='{{asset ('backend/assets/js/vector-map.js') }}'></script>

    <script src='{{asset ('backend/assets/plugins/daterangepicker/moment.min.js') }}'></script>
    <script src='{{ asset('backend/assets/plugins/daterangepicker/daterangepicker.js') }}'></script>
    <script src='{{ asset('backend/assets/js/date-range.js') }}'></script>

   
    

    
    
    
    

    <script src='{{ asset('backend/assets/plugins/toastr/toastr.min.js') }}'></script>

    

    
    
    

    
    

    

    <script src="{{ asset('backend/assets/js/sleek.js') }}"></script>
  <link href="{{ asset('backend/assets/options/optionswitch.css') }}" rel="stylesheet">
<script src="{{ asset('backend/assets/options/optionswitcher.js') }}"></script>
<script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js'></script>
<script>
  @if(Session::has('message'))
  var type="{{ Session::get('alert-type','info') }}"
  switch(type){
    case 'info':
      toastr.info("{{ Session::get('message') }}");
      break;
    case 'success':
      toastr.success("{{ Session::get('message') }}");
      break;
    case 'warning':
      toastr.warning("{{ Session::get('message') }}");
      break;
    case 'error':
      toastr.error("{{ Session::get('message') }}");
      break;
  }
  @endif
</script>
</body>
</html>

