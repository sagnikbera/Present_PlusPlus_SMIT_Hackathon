<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>SMIT Hackathon(Admin)</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/typicons/typicons.css">
  <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
  <!-- <script src="./new.js"></script> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script
      src="https://code.jquery.com/jquery-1.12.4.min.js"
      integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
      crossorigin="anonymous"
    ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />


</head>
<body>
  <div class="container-scroller">
    <div class="row p-0 m-0 proBanner" id="proBanner">
      <div class="col-md-12 p-0 m-0">
        <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
          <div class="ps-lg-1">
            <!-- <div class="d-flex align-items-center justify-content-between">
              <p class="mb-0 font-weight-medium me-3 buy-now-text"> SMIT HACKATHON,project made by KGEC Unknown.</p>
              <a  target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
            </div>
          </div> -->
          <!-- <div class="d-flex align-items-center justify-content-between">
            <a href="https://www.bootstrapdash.com/product/star-admin-pro/"><i class="mdi mdi-home me-3 text-white"></i></a>
            <button id="bannerClose" class="btn border-0 p-0">
              <i class="mdi mdi-close text-white me-0"></i>
            </button> -->
          </div>
        </div>
      </div>
    </div>
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>
        <div>
          <a class="navbar-brand brand-logo" href="index.php">
            <img src="images/logo.png" alt="logo" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="index.php">
            <img src="images/logo-mini.png" alt="logo" />
          </a>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-top"> 
        <ul class="navbar-nav">
          <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
            <h1 class="welcome-text">Respected <span class="text-black fw-bold">Partha Banerjee</span></h1>
            <h3 class="welcome-sub-text">Here It Is Your Attendance Tracking System </h3>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item dropdown d-none d-lg-block">
            <a class="nav-link dropdown-bordered dropdown-toggle dropdown-toggle-split" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false"> Project Features </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
              <a class="dropdown-item py-3" >
                <p class="mb-0 font-weight-medium float-left">Project Features</p>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">Facial Recognition</p>
                  <!-- <p class="fw-light small-text mb-0">This is a Bundle featuring 16 unique dashboards</p> -->
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">Smart Attendance Tracking System</p>
                  <!-- <p class="fw-light small-text mb-0">Everything you’ll ever need for your Angular projects</p> -->
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">Statistical Dashboard View</p>
                  <!-- <p class="fw-light small-text mb-0">Bundle of 6 Premium Vue Admin Dashboard</p> -->
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">OTP Verification System,Mail Notification System,Chatbot System,Data Security System</p>
                  <!-- <p class="fw-light small-text mb-0">Bundle of 8 Premium React Admin Dashboard</p> -->
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item d-none d-lg-block">
            <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
              <span class="input-group-addon input-group-prepend border-right">
                <span class="icon-calendar input-group-text calendar-icon"></span>
              </span>
              <input type="text" class="form-control">
            </div>
          </li>
          <!-- <li class="nav-item">
            <form class="search-form" action="#">
              <i class="icon-search"></i>
              <input type="search" class="form-control" placeholder="Search Here" title="Search here">
            </form>
          </li> -->
          <!-- <li class="nav-item dropdown">
            <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
              <i class="icon-mail icon-lg"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">
              <a class="dropdown-item py-3 border-bottom">
                <p class="mb-0 font-weight-medium float-left">You have 4 new notifications </p>
                <span class="badge badge-pill badge-primary float-right">View all</span>
              </a>
              <a class="dropdown-item preview-item py-3">
                <div class="preview-thumbnail">
                  <i class="mdi mdi-alert m-auto text-primary"></i>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject fw-normal text-dark mb-1">Application Error</h6>
                  <p class="fw-light small-text mb-0"> Just now </p>
                </div>
              </a>
              <a class="dropdown-item preview-item py-3">
                <div class="preview-thumbnail">
                  <i class="mdi mdi-settings m-auto text-primary"></i>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject fw-normal text-dark mb-1">Settings</h6>
                  <p class="fw-light small-text mb-0"> Private message </p>
                </div>
              </a>
              <a class="dropdown-item preview-item py-3">
                <div class="preview-thumbnail">
                  <i class="mdi mdi-airballoon m-auto text-primary"></i>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject fw-normal text-dark mb-1">New user registration</h6>
                  <p class="fw-light small-text mb-0"> 2 days ago </p>
                </div>
              </a>
            </div>
          </li> -->
          <!-- <li class="nav-item dropdown"> 
            <a class="nav-link count-indicator" id="countDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="icon-bell"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="countDropdown">
              <a class="dropdown-item py-3">
                <p class="mb-0 font-weight-medium float-left"> </p>
                <span class="badge badge-pill badge-primary float-right">View all</span>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="images/faces/face10.jpg" alt="image" class="img-sm profile-pic">
                </div>
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
                  <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="images/faces/face12.jpg" alt="image" class="img-sm profile-pic">
                </div>
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
                  <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="images/faces/face1.jpg" alt="image" class="img-sm profile-pic">
                </div>
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">Travis Jenkins </p>
                  <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
                </div>
              </a>
            </div>
          </li> -->
          <li class="nav-item dropdown d-none d-lg-block user-dropdown">
            <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <img class="img-xs rounded-circle" src="images/faces/face8.jpg" alt="Profile image"> </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                <img class="img-md rounded-circle" src="images/faces/face8.jpg" alt="Profile image">
                <p class="mb-1 mt-3 font-weight-semibold">Partha Banerjee.</p>
                <p class="fw-light text-muted mb-0">partha@gmail.com</p>
              </div>
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i><span class="badge badge-pill badge-success">Logged in</span></a>
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-message-text-outline text-primary me-2"></i> Information Technology</a>
              <!-- <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-calendar-check-outline text-primary me-2"></i> Activity</a> -->
              <!-- <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-help-circle-outline text-primary me-2"></i> FAQ</a> -->
              <a class="dropdown-item" href="../student/index.php"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Log Out</a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border me-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border me-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close ti-close"></i>
        <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-bs-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">Recent Sessions</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-bs-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                </div>
              </form>
            </div>
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Team review meeting at 3.00 PM
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Prepare for presentation
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Resolve all the low priority tickets due today
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Schedule meeting for next week
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Project review
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
              </ul>
            </div>
            <h4 class="px-3 text-muted mt-5 fw-light mb-0">Events</h4>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary me-2"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
              <p class="text-gray mb-0">The total number of sessions</p>
            </div>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary me-2"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
              <p class="text-gray mb-0 ">Call Sarah Graves</p>
            </div>
          </div>
          <!-- To do section tab ends -->
          <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
            <div class="d-flex align-items-center justify-content-between border-bottom">
              <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
              <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 fw-normal">See All</small>
            </div>
            <ul class="chat-list">
              <li class="list active">
                <div class="profile"><img src="images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Thomas Douglas</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">19 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <div class="wrapper d-flex">
                    <p>Catherine</p>
                  </div>
                  <p>Away</p>
                </div>
                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                <small class="text-muted my-auto">23 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Daniel Russell</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">14 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <p>James Richardson</p>
                  <p>Away</p>
                </div>
                <small class="text-muted my-auto">2 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Madeline Kennedy</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">5 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Sarah Graves</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">47 min</small>
              </li>
            </ul>
          </div>
          <!-- chat tab ends -->
        </div>
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
            </a>
            
          </li>
          <li class="nav-item nav-category">pages</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-account-circle-outline"></i>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">AI Features</li>
          <li class="nav-item">
            <a  href="forcast.php"class="nav-link" >
              <i class="menu-icon mdi mdi-file-document"></i>
              <span class="menu-title">Smart Forecasting...</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="./index.php" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="profile-tab" href="./studentslist.php"  aria-selected="false">Students list</a>
                    </li>
                     <li class="nav-item">
                      <a class="nav-link border-0" id="more-tab"  href="./lectures.php" " aria-selected="false">Lectures</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" active id="contact-tab" 
                                                href="./leave.php"  aria-selected="false">Leave Requests</a>
                                        
                      <!-- <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#demographics" role="tab" aria-selected="false">Leave Requests</a> -->
                    </li>
                    <!-- <li class="nav-item">
                      <a class="nav-link border-0" id="more-tab" data-bs-toggle="tab" href="#more" role="tab" aria-selected="false">Policies</a>
                    </li>
                     -->
                  </ul>
                  <div>
                    <div class="btn-wrapper">
                      <!-- <a href="#" class="btn btn-otline-dark align-items-center"><i class="icon-share"></i> Share</a> -->
                      <!-- <a href="#" class="btn btn-otline-dark"><i class="icon-printer"></i> Print</a> -->
                      <a href="#" class="btn btn-primary text-white me-0" onclick="genScreenshot()"><i class="icon-download"></i> Export Report</a>
                    </div>
                  </div>
                </div>
                <div class="tab-content tab-content-basic">
                  <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview"> 
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="statistics-details d-flex align-items-center justify-content-between">
                          <div>
                            <p class="statistics-title">Present Rate</p>
                            <h3 class="rate-percentage">62.53%</h3>
                            <!-- <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>-0.5%</span></p> -->
                          </div>
                          <div>
                            <p class="statistics-title">Student Strength</p>
                            <h3 class="rate-percentage">150</h3>
                            <!-- <p class="text-success d-flex"><i class="mdi mdi-menu-up"></i><span>+0.1%</span></p> -->
                          </div>
                          <div>
                            <p class="statistics-title">Total Sessions</p>
                            <h3 class="rate-percentage">56</h3>
                            <!-- <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>68.8</span></p> -->
                          </div>
                          <div class="d-none d-md-block">
                            <p class="statistics-title">Avg. Time on per class</p>
                            <h3 class="rate-percentage">1hr:35m</h3>
                            <!-- <p class="text-success d-flex"><i class="mdi mdi-menu-down"></i><span>+0.8%</span></p> -->
                          </div>
                          <div class="d-none d-md-block">
                            <p class="statistics-title">New Session</p>
                            <h3 class="rate-percentage">1</h3>
                            <!-- <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>68.8</span></p> -->
                          </div>
                          <!-- <div class="d-none d-md-block">
                            <p class="statistics-title">Avg. Time on Site</p>
                            <h3 class="rate-percentage">2m:35s</h3>
                            <p class="text-success d-flex"><i class="mdi mdi-menu-down"></i><span>+0.8%</span></p>
                          </div> -->
                        </div>
                      </div>
                    </div> 
                    <div class="row">
                      <div class="col-lg-8 d-flex flex-column">
                        <div class="row flex-grow">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-start">
                                  <div>
                                    <h4 class="card-title card-title-dash">Students attendance</h4>
                                   <p class="card-subtitle card-subtitle-dash">Students attendance List Statistics. </p>
                                  </div>
                                  <div>
                                    <div class="dropdown">
                                      <button class="btn btn-secondary dropdown-toggle toggle-dark btn-lg mb-0 me-0" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Month/Day </button>
                                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                        <h6 class="dropdown-header">Check Stats</h6>
                                        <div class="dropdown-divider"></div>

                                        <a class="dropdown-item" onclick="setstat('marketingOverviewweek')">This Week</a>
                                        <div class="dropdown-divider"></div>
                                        <script>
                                          function setstat(i){
                                            document.getElementById("marketingOverviewweek").style.display="none";
                                            document.getElementById("marketingOverviewmonth").style.display="none";

                                            document.getElementById(i).style.display="block";
                                          }                                        </script>

                                        <a class="dropdown-item" onclick="setstat('marketingOverviewmonth')">This Month</a>
                                        <div class="dropdown-divider"></div>
                                        <!-- <a class="dropdown-item" href="#">All Students</a> -->
                                        <!-- <a class="dropdown-item" href="#">Separated link</a> -->
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="d-sm-flex align-items-center mt-1 justify-content-between">
                                  <div class="d-sm-flex align-items-center mt-4 justify-content-between"><h2 class="me-2 fw-bold"></h2></div>
                                  <div class="me-3"><div id="marketing-overview-legend"></div></div>
                                </div>
                                <div class="chartjs-bar-wrapper mt-3">
                                  <canvas style="display:none" id="marketingOverviewweek"></canvas>
                                  <canvas id="marketingOverviewmonth"></canvas>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row flex-grow">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-start">
                                  <div>
                                    <h4 class="card-title card-title-dash">All Students</h4>
                                   <p class="card-subtitle card-subtitle-dash">See Details of College Students.</p>
                                  </div>
                                  <div>
                                    <a class="btn btn-primary btn-lg text-white mb-0 me-0" type="button" href="./studentslist.php" ><i class="mdi mdi-account-plus"></i>View All Students</a>
                                  </div>
                                </div>
                                <div class="table-responsive  mt-1">
                                  <table class="table select-table">
                                    <thead>
                                      <tr>
                                        <th>
                                          
                                        </th>
                                        <th>Student Name</th>
                                        <th>Course</th>
                                        <th>Attendance Progress</th>
                                        <th>Status</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>
                                          
                                        </td>
                                        <td>
                                          <div class="d-flex ">
                                            <img src="images/faces/face1.jpg" alt="">
                                            <div>
                                              <h6>Arka Mandal</h6>
                                              <p>SMIT</p>
                                            </div>
                                          </div>
                                        </td>
                                        <td>
                                          <h6>Computer Science and Engineering.</h6>
                                          <p>2nd Year</p>
                                        </td>
                                        <td>
                                          <div>
                                            <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                              <p class="text-success">92%</p>
                                              <p>149/162</p>
                                            </div>
                                            <div class="progress progress-md">
                                              <div class="progress-bar bg-success" role="progressbar" style="width: 85%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                          </div>
                                        </td>
                                        <td><div class="badge badge-opacity-success">Perfect</div></td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <!-- <div class="form-check form-check-flat mt-0">
                                            <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                          </div> -->
                                        </td>
                                        <td>
                                          <div class="d-flex">
                                            <img src="images/faces/face2.jpg" alt="">
                                            <div>
                                              <h6> Aniruddha Malo.</h6>
                                              <p>SMIT</p>
                                            </div>
                                          </div>
                                        </td>
                                        <td>
                                          <h6>Electronics And Communication Engineering.</h6>
                                          <p>2nd Year</p>
                                        </td>
                                        <td>
                                          <div>
                                            <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                              <p class="text-success">56%</p>
                                              <p>102/162</p>
                                            </div>
                                            <div class="progress progress-md">
                                              <div class="progress-bar bg-warning" role="progressbar" style="width: 45%" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                          </div>
                                        </td>
                                        <td><div class="badge badge-opacity-warning">Avarage</div></td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <!-- <div class="form-check form-check-flat mt-0">
                                            <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                          </div> -->
                                        </td>
                                        <td>
                                          <div class="d-flex">
                                            <img src="images/faces/face3.jpg" alt="">
                                            <div>
                                              <h6>Sagnik Bera</h6>
                                              <p>SMIT</p>
                                            </div>
                                          </div>
                                        </td>
                                        <td>
                                          <h6>Information Technology.</h6>
                                          <p>2nd Year</p>
                                        </td>
                                        <td>
                                          <div>
                                            <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                              <p class="text-success">63%</p>
                                              <p>36/162</p>
                                            </div>
                                            <div class="progress progress-md">
                                              <div class="progress-bar bg-warning" role="progressbar" style="width: 56%" aria-valuenow="63" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                          </div>
                                        </td>
                                        <td><div class="badge badge-opacity-warning">Avarage</div></td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <!-- <div class="form-check form-check-flat mt-0">
                                            <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                          </div> -->
                                        </td>
                                        <td>
                                          <div class="d-flex">
                                            <img src="images/faces/face4.jpg" alt="">
                                            <div>
                                              <h6>Sayandip Paul</h6>
                                              <p>SMIT</p>
                                            </div>
                                          </div>
                                        </td>
                                        <td>
                                          <h6>Electrical Engineering.</h6>
                                          <p>2nd Year.</p>
                                        </td>
                                        <td>
                                          <div>
                                            <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                              <p class="text-success">22%</p>
                                              <p>25/162</p>
                                            </div>
                                            <div class="progress progress-md">
                                              <div class="progress-bar bg-danger" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                          </div>
                                        </td>
                                        <td><div class="badge badge-opacity-danger">Low </div></td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <!-- <div class="form-check form-check-flat mt-0">
                                            <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                          </div> -->
                                        </td>
                                        <td>
                                          <div class="d-flex">
                                            <img src="images/faces/face5.jpg" alt="">
                                            <div>
                                              <h6>Ankita Banerjee.</h6>
                                              <p>SMIT</p>
                                            </div>
                                          </div>
                                        </td>
                                        <td>
                                          <h6>MBA</h6>
                                          <p>1st Year</p>
                                        </td>
                                        <td>
                                          <div>
                                            <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                              <p class="text-success">87%</p>
                                              <p>141/162</p>
                                            </div>
                                            <div class="progress progress-md">
                                              <div class="progress-bar bg-success" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                          </div>
                                        </td>
                                        <td><div class="badge badge-opacity-success">Perfect</div></td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row flex-grow">
                          <div class="col-md-6 col-lg-6 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body card-rounded">
                                <h4 class="card-title  card-title-dash">Upcoming Lecture</h4>
                                <div class="list align-items-center border-bottom py-2">
                                  <div class="wrapper w-100">
                                    <p class="mb-2 font-weight-medium">
                                      Full Adder Circuit Theory Class
                                    </p>
                            
                                    <div class="d-flex justify-content-between align-items-center">
                                      <div class="d-flex align-items-center">
                                        <i class="mdi mdi-calendar text-muted me-1"></i>
                                        <p class="mb-0 text-small text-muted">Aug 25,2023</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="list align-items-center border-bottom py-2">
                                  <div class="wrapper w-100">
                                    <p class="mb-2 font-weight-medium">
                                     Multiplexer Theory Class
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                      <div class="d-flex align-items-center">
                                        <i class="mdi mdi-calendar text-muted me-1"></i>
                                        <p class="mb-0 text-small text-muted">Aug 26, 2023</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="list align-items-center border-bottom py-2">
                                  <div class="wrapper w-100">
                                    <p class="mb-2 font-weight-medium">
                                      Analog and Digital Electronics Lab class
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                      <div class="d-flex align-items-center">
                                        <i class="mdi mdi-calendar text-muted me-1"></i>
                                        <p class="mb-0 text-small text-muted">Aug 27, 2023</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="list align-items-center border-bottom py-2">
                                  <div class="wrapper w-100">
                                    <p class="mb-2 font-weight-medium">
                                      Demultiplexer Theory class
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                      <div class="d-flex align-items-center">
                                        <i class="mdi mdi-calendar text-muted me-1"></i>
                                        <p class="mb-0 text-small text-muted">Aug 25, 2023</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                
                                <div class="list align-items-center pt-3">
                                  <div class="wrapper w-100">
                                    <p class="mb-0">
                                      <a href="#" class="fw-bold text-primary" onclick="createlec()">Create New Lecture <i class="mdi mdi-arrow-right ms-2"></i></a>
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-6 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                  <h4 class="card-title card-title-dash"> Customised  Policies</h4>
                                  <p class="mb-0"> 5 new</p>
                                </div>
                                <ul class="bullet-line-list">
                                  <li>
                                    <div class="d-flex justify-content-between">
                                      <div><span class="text-light-green">Mandatory Attendance--</span>85% </div>
                                      <p>Just now</p>
                                    </div>
                                  </li>
                                  <li>
                                    <div class="d-flex justify-content-between">
                                      <div><span class="text-light-green">Internal Exam 3,4--</span> Mandatory.</div>
                                      <p>1h</p>
                                    </div>
                                  </li>
                                  <li>
                                    <div class="d-flex justify-content-between">
                                      <div><span class="text-light-green">Three Part of Attendance is mandatory for class.</span></div>
                                      <p>2h</p>
                                    </div>
                                  </li>
                                  <li>
                                    <div class="d-flex justify-content-between">
                                      <div><span class="text-light-green">Due To Weather In Time Updated from 7:30 to--</span> 7:00pm.</div>
                                      <p>1d</p>
                                    </div>
                                  </li>
                                </ul>
                                <div class="list align-items-center pt-3">
                                  <div class="wrapper w-100">
                                    <p class="mb-0">
                                      <!-- <a href="https://login.smu.onlinemanipal.com/" class="fw-bold text-primary">Show More <i class="mdi mdi-arrow-right ms-2"></i></a> -->
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 d-flex flex-column">
                        <div class="row flex-grow">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="row">
                                  <div class="col-lg-12">
                                    <div class="d-flex justify-content-between align-items-center">
                                      <h4 class="card-title card-title-dash">Notices</h4>
                                      <div class="add-items d-flex mb-0">
                                        <!-- <input type="text" class="form-control todo-list-input" placeholder="What do you need to do today?"> -->
                                        <button class="add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white me-0 pl-12p" onclick="addnotice()"><i class="mdi mdi-plus"></i></button>
                                      </div>
                                    </div>
                                    <div class="list-wrapper">
                                      <ul class="todo-list todo-list-rounded">
                                        <?php
                                                                            include("./phpfiles/config.php");
                                                                            $conn = new mysqli($servername, $username, $password, $dbname);
                                                                            // Check connection
                                                                            if ($conn->connect_error) {
                                                                                die("Connection failed: " . $conn->connect_error);
                                                                            }
                                                                            // $p=$grpname;
                                                                            $sql = "SELECT * FROM notice ";
                                                                            $result = $conn->query($sql);
                                                                            $p="";
                                                                            if ($result->num_rows > 0) {
                                                                                // output data of each row

                                                                                
                                                                                while($row = $result->fetch_assoc()) {
                                                                                    // $userid=$row["userid"];
                                                                                    
                                                                            
                                                                                    $p=$p.'
                                                                                    <li class="d-block">
                                                                                    <div class="form-check w-100">
                                                                                      <label class="form-check-label">
                                                                                        
                                                                                        '.$row["topic"].'
                                                                                      </label>
                                                                                      <div class="d-flex mt-2">
                                                                                        
                                                                                      </div>
                                                                                    </div>
                                                                                  </li>
                                                                                 
                                                                                ';
                                                                                }
                                                                            
                                                                            } else {
                                                                                echo "NO Leave Requests";
                                                                                // $p=-1;
                                                                            }
                                                                            echo $p;
                                                                            
                                                                        
                                                                            $conn->close();
                                                                        
                                                                            
                                                                            ?>

                                      </ul>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row flex-grow">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="row">
                                  <div class="col-lg-12">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                      <h4 class="card-title card-title-dash">Class Regularities</h4>
                                    </div>
                                    <canvas class="my-auto" id="doughnutChart" height="200"></canvas>
                                    <div id="doughnut-chart-legend" class="mt-5 text-center"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row flex-grow">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="row">
                                  <div class="col-lg-12">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                      <div>
                                        <h4 class="card-title card-title-dash">Leave Report</h4>
                                      </div>
                                      <div>
                                        <!-- <div class="dropdown">
                                          <button class="btn btn-secondary dropdown-toggle toggle-dark btn-lg mb-0 me-0" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Month Wise </button>
                                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                            <h6 class="dropdown-header">week Wise</h6>
                                            <a class="dropdown-item" href="#">Year Wise</a>
                                          </div>
                                        </div> -->
                                      </div>
                                    </div>
                                    <div class="mt-3">
                                      <!-- <canvas id="leaveRseport"></canvas> -->
                                      <!-- <canvas id="barChart"></canvas>
                                       -->
                  <canvas id="barChart"></canvas>

                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row flex-grow">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="row">
                                  <div class="col-lg-12">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                      <div>
                                        <h4 class="card-title card-title-dash">Top Performer of Last Internal</h4>
                                      </div>
                                    </div>
                                    <div class="mt-3">
                                      <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                        <div class="d-flex">
                                          <img class="img-sm rounded-10" src="images/faces/face1.jpg" alt="profile">
                                          <div class="wrapper ms-3">
                                            <p class="ms-1 mb-1 fw-bold">Bikram Soren</p>
                                            <small class="text-muted mb-0"> Reg-162543</small>
                                          </div>
                                        </div>
                                        <div class="text-muted text-small">
                                          1h ago
                                        </div>
                                      </div>
                                      <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                        <div class="d-flex">
                                          <img class="img-sm rounded-10" src="images/faces/face2.jpg" alt="profile">
                                          <div class="wrapper ms-3">
                                            <p class="ms-1 mb-1 fw-bold">Koyel Gorai</p>
                                            <small class="text-muted mb-0">Reg-162543</small>
                                          </div>
                                        </div>
                                        <div class="text-muted text-small">
                                          1h ago
                                        </div>
                                      </div>
                                      <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                        <div class="d-flex">
                                          <img class="img-sm rounded-10" src="images/faces/face3.jpg" alt="profile">
                                          <div class="wrapper ms-3">
                                            <p class="ms-1 mb-1 fw-bold"> Swattik Indu</p>
                                            <small class="text-muted mb-0">Reg-162543</small>
                                          </div>
                                        </div>
                                        <div class="text-muted text-small">
                                          1h ago
                                        </div>
                                      </div>
                                      <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                        <div class="d-flex">
                                          <img class="img-sm rounded-10" src="images/faces/face4.jpg" alt="profile">
                                          <div class="wrapper ms-3">
                                            <p class="ms-1 mb-1 fw-bold">Haradhon Soren</p>
                                            <small class="text-muted mb-0">Reg-162543</small>
                                          </div>
                                        </div>
                                        <div class="text-muted text-small">
                                          1h ago
                                        </div>
                                      </div>
                                      <div class="wrapper d-flex align-items-center justify-content-between pt-2">
                                        <div class="d-flex">
                                          <img class="img-sm rounded-10" src="images/faces/face5.jpg" alt="profile">
                                          <div class="wrapper ms-3">
                                            <p class="ms-1 mb-1 fw-bold"> Ishika Senapati</p>
                                            <small class="text-muted mb-0">Reg-162543</small>
                                          </div>
                                        </div>
                                        <div class="text-muted text-small">
                                          1h ago
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <!-- <button onclick="addstudent()">pore delete korte hobe</button> -->
            <!-- <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2021. All rights reserved.</span> -->
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->

  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="vendors/progressbar.js/progressbar.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <script src="js/chart.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/jquery.cookie.js" type="text/javascript"></script>
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>

function genScreenshot() {
        // html2canvas(document.body, {
        //   onrendered: function (canvas) {
        //     if (
        //       navigator.userAgent.indexOf("MSIE ") > 0 ||
        //       navigator.userAgent.match(/Trident.*rv\:11\./)
        //     ) {
        //       var blob = canvas.msToBlob();
        //       window.navigator.msSaveBlob(blob, "screenshot.png");
        //     } else {
        //       // Convert canvas to an image with reduced quality
        //       var imgDataUrl = canvas.toDataURL("image/jpeg", 0.5); // Adjust quality (0.0 - 1.0)

        //       // Generate PDF with reduced image quality
        //       var doc = new jsPDF({
        //         unit: "px",
        //         format: "a4",
        //       });
        //       doc.addImage(imgDataUrl, "JPEG", 0, 0);

        //       // Save the PDF with reduced image quality
        //       var pdfData = doc.output("datauristring");
        //       var link = document.createElement("a");
        //       link.href = pdfData;
        //       link.download = "report.pdf";
        //       link.click();
        //     }
        //   },
        // });

        $.ajax({
              type: "POST",
              url: "./phpfiles/mailsend/sendmailwithpdf.php",
            //   beforeSend: function() {
    // },
   
              data: {},

              success: function (result, status, xhr){
        
          // console.log("done");
                // $("#show").html(result);
                alert("Your Report Successfully sent to Principal...");
                // window.location.reload();
                
            // showm();

              }
            //   complete: function(){
    // },
          });

      }
    



function addstudent(){



 var dtotal= [
  
    {
      "name": "John Doe",
      "email": "john.doe@example.com"
    },
    {
      "name": "Jane Smith",
      "email": "jane.smith@example.com"
    },
    {
      "name": "Michael Johnson",
      "email": "michael.johnson@example.com"
    },
    {
      "name": "Emily Davis",
      "email": "emily.davis@example.com"
    },
    {
      "name": "David Wilson",
      "email": "david.wilson@example.com"
    },
    {
      "name": "Sarah Anderson",
      "email": "sarah.anderson@example.com"
    },
    {
      "name": "Robert Martinez",
      "email": "robert.martinez@example.com"
    },
    {
      "name": "Lisa Taylor",
      "email": "lisa.taylor@example.com"
    },
    {
      "name": "William Brown",
      "email": "william.brown@example.com"
    },
    {
      "name": "Karen Lee",
      "email": "karen.lee@example.com"
    },
    {
      "name": "Matthew Harris",
      "email": "matthew.harris@example.com"
    },
    {
      "name": "Jessica Clark",
      "email": "jessica.clark@example.com"
    },
    {
      "name": "Daniel Thomas",
      "email": "daniel.thomas@example.com"
    },
    {
      "name": "Maria White",
      "email": "maria.white@example.com"
    },
    {
      "name": "Kevin Walker",
      "email": "kevin.walker@example.com"
    },
    {
      "name": "Catherine Turner",
      "email": "catherine.turner@example.com"
    },
    {
      "name": "Christopher Hall",
      "email": "christopher.hall@example.com"
    },
    {
      "name": "Jennifer Baker",
      "email": "jennifer.baker@example.com"
    },
    {
      "name": "Richard Green",
      "email": "richard.green@example.com"
    },
    {
      "name": "Amanda Lewis",
      "email": "amanda.lewis@example.com"
    },
    {
      "name": "Thomas Young",
      "email": "thomas.young@example.com"
    },
    {
      "name": "Rebecca King",
      "email": "rebecca.king@example.com"
    },
    {
      "name": "Joseph Scott",
      "email": "joseph.scott@example.com"
    },
    {
      "name": "Nancy Allen",
      "email": "nancy.allen@example.com"
    },
    {
      "name": "George Adams",
      "email": "george.adams@example.com"
    },
    {
      "name": "Susan Nelson",
      "email": "susan.nelson@example.com"
    },
    {
      "name": "Edward Carter",
      "email": "edward.carter@example.com"
    },
    {
      "name": "Mary Ward",
      "email": "mary.ward@example.com"
    },
    {
      "name": "Patrick Turner",
      "email": "patrick.turner@example.com"
    },
    {
      "name": "Linda Mitchell",
      "email": "linda.mitchell@example.com"
    },
    {
      "name": "Brian Perez",
      "email": "brian.perez@example.com"
    },
    {
      "name": "Karen Wilson",
      "email": "karen.wilson@example.com"
    },
    {
      "name": "Jason Thomas",
      "email": "jason.thomas@example.com"
    },
    {
      "name": "Deborah Harris",
      "email": "deborah.harris@example.com"
    },
    {
      "name": "Kenneth Taylor",
      "email": "kenneth.taylor@example.com"
    },
    {
      "name": "Lisa Lewis",
      "email": "lisa.lewis@example.com"
    },
    {
      "name": "Ronald Davis",
      "email": "ronald.davis@example.com"
    },
    {
      "name": "Donna Johnson",
      "email": "donna.johnson@example.com"
    },
    {
      "name": "Matthew Brown",
      "email": "matthew.brown@example.com"
    },
    {
      "name": "Kimberly Anderson",
      "email": "kimberly.anderson@example.com"
    },
    {
      "name": "Larry Martinez",
      "email": "larry.martinez@example.com"
    },
    {
      "name": "Laura Taylor",
      "email": "laura.taylor@example.com"
    },
    {
      "name": "Gary Smith",
      "email": "gary.smith@example.com"
    },
    {
      "name": "Karen Rodriguez",
      "email": "karen.rodriguez@example.com"
    },
    {
      "name": "Ronald Clark",
      "email": "ronald.clark@example.com"
    },
    {
      "name": "Patricia Wilson",
      "email": "patricia.wilson@example.com"
    },
    {
      "name": "Michael Johnson",
      "email": "michael.johnson@example.com"
    },
    {
      "name": "Linda Hall",
      "email": "linda.hall@example.com"
    },
    {
      "name": "James Davis",
      "email": "james.davis@example.com"
    },
    {
      "name": "Carol Anderson",
      "email": "carol.anderson@example.com"
    },
    {
      "name": "Paula Smith",
      "email": "paula.smith@example.com"
    },
    {
      "name": "Mark White",
      "email": "mark.white@example.com"
    },
    {
      "name": "Elizabeth Thomas",
      "email": "elizabeth.thomas@example.com"
    },
    {
      "name": "Charles Martin",
      "email": "charles.martin@example.com"
    },
    {
      "name": "Donna Lee",
      "email": "donna.lee@example.com"
    },
    {
      "name": "Robert Taylor",
      "email": "robert.taylor@example.com"
    }
  
  ];


var name,email,pass,course,year,secans,cataory;

for(var i=0;i<38;i++){
  name=dtotal[i].name;
  email=dtotal[i].email;
  pass="admin";
  course="It";
  year="2nd";
  secans="izaz";
  catagory=0;
  imagepath="uploads/dummy/1.png"




  // name="name";
  // email="emmail";
  // pass="pass";
  // course="course";
  // year="year";
  // secans="criecket";
  // catagory="cat";


    // alert("hi");
    $.ajax({
              type: "POST",
              url: "./phpfiles/addstudent.php",
            //   beforeSend: function() {
    // },
   
              data: {name:name,email:email,pass:pass,course:course,catagory:catagory,secans:secans,year:year,imagepath:imagepath},

              success: function (result, status, xhr){
        // $('#loader').addClass('hidden')
// alert("done");
console.log("done");
                // $("#show").html(result);
                // alert(result);
                
            // showm();

              }
            //   complete: function(){
    // },
          });
        }
    }

function addleave(){
  var ldata=[
 
 {
  "userid": 7,
  "Cause": "Due to marriage of elder sister",
  "date": "29.08.2023",
  "status": 0
 },
 {
  "userid": 14,
  "Cause": "Personal Development Workshop",
  "date": "24.08.2023",
  "status": 0
 },
 {
  "userid": 14,
  "Cause": "Hackathon at IIT\/KGP tech fest",
  "date": "31.08.2023",
  "status": 0
 },
 {
  "userid": 18,
  "Cause": "Sick Leave",
  "date": "24.08.2023",
  "status": 0
 },
 {
  "userid": 18,
  "Cause": "Due to Medical Checkup",
  "date": "26.08.2023",
  "status": 0
 },
 {
  "userid": 18,
  "Cause": "Due to Exam Preparation",
  "date": "31.08.2023",
  "status": 0
 },
 {
  "userid": 19,
  "Cause": "Due to Religious Festival ",
  "date": "25.08.2023",
  "status": 0
 },
 {
  "userid": 19,
  "Cause": "Due to colunteer work ad blood donation camp",
  "date": "27.08.2023",
  "status": 0
 },
 {
  "userid": 8,
  "Cause": "Due to educational seminar",
  "date": "27.08.2023",
  "status": 0
 },
 {
  "userid": 9,
  "Cause": "Due to Parent's Anniversary",
  "date": "25.08.2023",
  "status": 0
 },
 {
  "userid": 9,
  "Cause": "Due to Sikkim Tour",
  "date": "29.08.2023",
  "status": 0
 },
 {
  "userid": 9,
  "Cause": "Due to health issue ",
  "date": "28.08.2023",
  "status": 0
 },
 {
  "userid": 10,
  "Cause": "Due to health issue ",
  "date": "29.08.2023",
  "status": 0
 },
 {
  "userid": 10,
  "Cause": "Attending Tech Fest at SMIT",
  "date": "23.08.2023",
  "status": 0
 },
 {
  "userid": 10,
  "Cause": "Due to Medical Checkup",
  "date": "31.08.2023",
  "status": 0
 },
 {
  "userid": 23,
  "Cause": "Due to Exam Preparation",
  "date": "28.08.2023",
  "status": 0
 },
 {
  "userid": 25,
  "Cause": "Due to Religious Festival ",
  "date": "21.08.2023",
  "status": 0
 },
 {
  "userid": 25,
  "Cause": "Due to Exam Preparation",
  "date": "23.08.2023",
  "status": 0
 },
 {
  "userid": 27,
  "Cause": "Due to Darjilling Tour",
  "date": "28.08.2023",
  "status": 0
 },
 {
  "userid": 27,
  "Cause": "Due to Train Delay",
  "date": "26.08.2023",
  "status": 0
 },
 {
  "userid": 27,
  "Cause": "Due to Medical Checkup",
  "date": "31.08.2023",
  "status": 0
 },
 {
  "userid": 27,
  "Cause": "Due to Health issue",
  "date": "30.08.2023",
  "status": 0
 },
 {
  "userid": 30,
  "Cause": "Due to Religious Festival ",
  "date": "27.08.2023",
  "status": 0
 },
 {
  "userid": 30,
  "Cause": "Due to Exam Preparation",
  "date": "26.08.2023",
  "status": 0
 },
 {
  "userid": 30,
  "Cause": "Due to Family function",
  "date": "25.08.2023",
  "status": 0
 },
 {
  "userid": 32,
  "Cause": "Attending Blood Donation camp",
  "date": "29.08.2023",
  "status": 0
 },
 {
  "userid": 32,
  "Cause": "Sick leave",
  "date": "30.08.2023",
  "status": 0
 },
 {
  "userid": 24,
  "Cause": "Due to personal development workshop",
  "date": "25.08.2023",
  "status": 0
 },
 {
  "userid": 24,
  "Cause": "Due to educational seminar ",
  "date": "26.08.2023",
  "status": 0
 },
 {
  "userid": 25,
  "Cause": "Due to Elder Brohter's Marriage",
  "date": "31.01.1900",
  "status": 0
 },
 null,
 null,
 {
  "userid": 37,
  "Cause": "Due to volunteer work",
  "date": "28.08.2023",
  "status": 0
 },
 {
  "userid": 38,
  "Cause": "Due to personal development workshop",
  "date": "20.08.2023",
  "status": 0
 },
 {
  "userid": 38,
  "Cause": "Due to attend seminer at IIT sikkim",
  "date": "22.08.2023",
  "status": 0
 },
 {
  "userid": 40,
  "Cause": "sick leave",
  "date": "28.08.2023",
  "status": 0
 },
 {
  "userid": 40,
  "Cause": "Due to health issue",
  "date": "26.08.2023",
  "status": 0
 },
 {
  "userid": 40,
  "Cause": "Due to medical checkup",
  "date": "31.08.2023",
  "status": 0
 },
 {
  "userid": 40,
  "Cause": "Due to exam preparation ",
  "date": "29.08.2023",
  "status": 0
 },
 {
  "userid": 47,
  "Cause": "Due to Parent's Ammiversary",
  "date": "24.08.2023",
  "status": 0
 },
 {
  "userid": 47,
  "Cause": "Due to exam preparation ",
  "date": "26.08.2023",
  "status": 0
 },
 {
  "userid": 47,
  "Cause": "Due to Registration for Metriculation",
  "date": "27.08.2023",
  "status": 0
 },
 {
  "userid": 49,
  "Cause": "sick leave",
  "date": "28.08.2023",
  "status": 0
 },
 {
  "userid": 49,
  "Cause": "Due to sister's birthday",
  "date": "30.08.2023",
  "status": 0
 },
 {
  "userid": 39,
  "Cause": "Due to Elder brother's marriage",
  "date": "25.08.2023",
  "status": 0
 },
 {
  "userid": 41,
  "Cause": "Due to Religious Festival",
  "date": "26.08.2023",
  "status": 0
 },
 null,
 null,
 {
  "userid": 51,
  "Cause": "Due to attending wedding of relative",
  "date": "30.08.2023",
  "status": 0
 },
 {
  "userid": 60,
  "Cause": "Due to coluntary social service",
  "date": "21.08.2023",
  "status": 0
 },
 {
  "userid": 62,
  "Cause": "Due to home shift",
  "date": "25.08.2023",
  "status": 0
 },
 {
  "userid": 62,
  "Cause": "Due to home repair",
  "date": "26.08.2023",
  "status": 0
 },
 {
  "userid": 62,
  "Cause": "Due to exam preparation",
  "date": "28.08.2023",
  "status": 0
 },
 {
  "userid": 62,
  "Cause": "Sick leave",
  "date": "31.08.2023",
  "status": 0
 },
 {
  "userid": 60,
  "Cause": "Due to charity fundraising event",
  "date": "25.08.2023",
  "status": 0
 },
 {
  "userid": 64,
  "Cause": "Due to family reunion",
  "date": "26.08.2023",
  "status": 0
 },
 {
  "userid": 64,
  "Cause": "Due to exam preparation",
  "date": "27.08.2023",
  "status": 0
 },
 {
  "userid": 64,
  "Cause": "Due to health issue",
  "date": "25.08.2023",
  "status": 0
 },
 {
  "userid": 56,
  "Cause": "Due to Visiting Outstation relative",
  "date": "29.08.2023",
  "status": 0
 },
 {
  "userid": 56,
  "Cause": "Due to Train Problems ",
  "date": "30.08.2023",
  "status": 0
 },
 {
  "userid": 57,
  "Cause": "Due to Elder Sister's Wedding",
  "date": "25.08.2023",
  "status": 0
 },
 null,
 null,
 null,
 {
  "userid": 66,
  "Cause": "Due to voluntary social service ",
  "date": "20.08.2023",
  "status": 0
 },
 {
  "userid": 70,
  "Cause": "Due to Health Issue",
  "date": "21.08.2023",
  "status": 0
 },
 {
  "userid": 70,
  "Cause": "Sick Leave",
  "date": "22.08.2023",
  "status": 0
 },
 {
  "userid": 70,
  "Cause": "Due to medical cheack uo",
  "date": "24.08.2023",
  "status": 0
 },
 {
  "userid": 72,
  "Cause": "Due to Visiting Outstation Relatives ",
  "date": "26.08.2023",
  "status": 0
 },
 {
  "userid": 72,
  "Cause": "Due to Exam Preparation",
  "date": "28.08.2023",
  "status": 0
 },
 {
  "userid": 72,
  "Cause": "Due to Examination Registration issue resoleve",
  "date": "30.08.2023",
  "status": 0
 },
 {
  "userid": 72,
  "Cause": "Due to Health Issue",
  "date": "23.08.2023",
  "status": 0
 },
 {
  "userid": 80,
  "Cause": "Due to family fucntin",
  "date": "23.08.2023",
  "status": 0
 },
 {
  "userid": 67,
  "Cause": "Due to personal development workshop",
  "date": "26.08.2023",
  "status": 0
 },
 {
  "userid": 75,
  "Cause": "Due to attending Birthday of my brother",
  "date": "27.08.2023",
  "status": 0
 },
 {
  "userid": 80,
  "Cause": "Due to attending Tech Fest at SMIT",
  "date": "24.08.2023",
  "status": 0
 },
 {
  "userid": 77,
  "Cause": "Due to Home shifting",
  "date": "25.08.2023",
  "status": 0
 },
 {
  "userid": 77,
  "Cause": "Due to renovation at home",
  "date": "26.08.2023",
  "status": 0
 }
];
var userid,cause,date,status;

for(var i=0;i<ldata.length;i++){
            userid=ldata[i].userid;
            cause=ldata[i].Cause;
            date=ldata[i].date;
            status=ldata[i].status;
              $.ajax({
              type: "POST",
              url: "./phpfiles/addleave.php",
            //   beforeSend: function() {
    // },
   
              data: {userid:userid,cause:cause,date:date,status:status},

              success: function (result, status, xhr){
        // $('#loader').addClass('hidden')
// alert("done");
          console.log("done");
                // $("#show").html(result);
                // alert(result);
                
            // showm();

              }
            //   complete: function(){
    // },
          });
        }


}
function addnotice(){
  var content=prompt("Enter Notice Content Here","Notice says SMIT Is Best");
  $.ajax({
              type: "POST",
              url: "./phpfiles/addnotice.php",
            //   beforeSend: function() {
    // },
   
              data: {topic:content},

              success: function (result, status, xhr){
        
          // console.log("done");
                // $("#show").html(result);
                alert("Notice Added");
                window.location.reload();
                
            // showm();

              }
            //   complete: function(){
    // },
          });
}
function createlec(){
  var subject=prompt("Enter Subject Of The Lecture","Subject");

  var topic=prompt("Enter Topic Of The Lecture","Topic");
  var time=prompt("Enter Time Of The Lecture","Time");
  var duration=prompt("Enter Duration Of The Lecture","Duration");
  $.ajax({
              type: "POST",
              url: "./phpfiles/addlecture.php",
            //   beforeSend: function() {
    // },
             
              data: {topic:topic,time:time,duration:duration,subject:subject},

              success: function (result, status, xhr){
        
          // console.log("done");
                // $("#show").html(result);
                console.log(result);
                // alert("Lecture Added");
                // window.location.reload();
                
            // showm();

              }
            //   complete: function(){
    // },
          });

  
}


</script>

