@extends('layouts/contentLayoutMaster')

@section('title', 'Profile')

@section('vendor-style')
  <!-- vendor css files -->
  <link rel='stylesheet' href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
  <link rel='stylesheet' href="{{ asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/file-uploaders/dropzone.min.css')) }}">
@endsection
@section('page-style')
  {{-- Page Css files --}}
  <link rel="stylesheet" href="{{ asset(mix('css/base/pages/page-profile.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/pickers/form-pickadate.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/pickers/form-flat-pickr.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-validation.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-file-uploader.css')) }}">
@endsection

@section('content')
<div id="user-profile">
  <!-- profile header -->
  <div class="row">



  <!-- Basic pills starts -->
  <div class="col-md-12">
    <div class="card">
        <div class="card profile-header mb-2">
            <!-- profile cover photo -->
            <img
              class="card-img-top"
              src="{{asset('images/profile/user-uploads/timeline.jpg')}}"
              alt="User Profile Image"
            />
            <!--/ profile cover photo -->

            <div class="position-relative">
              <!-- profile picture -->
              <div class="profile-img-container d-flex align-items-center">
                <div class="profile-img">
                  <img
                    src="{{asset('images/portrait/small/avatar-s-2.jpg')}}"
                    class="rounded img-fluid"
                    alt="Card image"
                  />
                </div>
                <!-- profile title -->
                <div class="profile-title ml-3">
                  <h2 class="text-white">Kitty Allanson</h2>
                  <p class="text-white">UI/UX Designer</p>
                </div>
              </div>
            </div>

            <!-- tabs pill -->
            <div class="profile-header-nav">
              <!-- navbar -->
              <nav class="navbar navbar-expand-md navbar-light justify-content-end justify-content-md-between w-100">
                <button
                  class="btn btn-icon navbar-toggler"
                  type="button"
                  data-toggle="collapse"
                  data-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                >
                  <i data-feather="align-justify" class="font-medium-5"></i>
                </button>

                <!-- collapse  -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <div class="profile-tabs d-flex justify-content-between flex-wrap mt-1 mt-md-0">
                    <ul class="nav nav-pills mb-0">
                      <!-- <li class="nav-item">
                        <a class="nav-link font-weight-bold active" href="javascript:void(0)">
                          <span class="d-none d-md-block">Feed</span>
                          <i data-feather="rss" class="d-block d-md-none"></i>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link font-weight-bold" href="javascript:void(0)">
                          <span class="d-none d-md-block">About</span>
                          <i data-feather="info" class="d-block d-md-none"></i>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link font-weight-bold" href="javascript:void(0)">
                          <span class="d-none d-md-block">Photos</span>
                          <i data-feather="image" class="d-block d-md-none"></i>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link font-weight-bold" href="javascript:void(0)">
                          <span class="d-none d-md-block">Friends</span>
                          <i data-feather="users" class="d-block d-md-none"></i>
                        </a>
                      </li> -->
                      <li class="nav-item">
                          <a class="nav-link font-weight-bold active" id="general-tab" data-toggle="pill" href="#general" aria-expanded="true">
                              <span class="d-none d-md-block">General</span>
                            <i data-feather="home" class="d-block d-md-none"></i>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="leave-tab" data-toggle="pill" href="#leave" aria-expanded="false">Leave</a>
                        </li>
                        <!-- Dropdown -->
                        <!-- <li class="nav-item dropdown">
                          <a
                            class="nav-link dropdown-toggle"
                            data-toggle="dropdown"
                            href="javascript:void(0);"
                            role="button"
                            aria-haspopup="true"
                            aria-expanded="false"
                          >
                            Dropdown
                          </a>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" id="dropdown1-tab" href="#dropdown1" data-toggle="pill" aria-expanded="true"
                              >@fat</a
                            >
                            <a class="dropdown-item" id="dropdown2-tab" href="#dropdown2" data-toggle="pill" aria-expanded="true"
                              >@mdo</a
                            >
                          </div>
                        </li> -->
                        <li class="nav-item">
                          <a class="nav-link" id="assets-tab" data-toggle="pill" href="#assets" aria-expanded="false">Assets</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="doc-tab" data-toggle="pill" href="#doc" aria-expanded="false">Documents</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="payroll-tab" data-toggle="pill" href="#payroll" aria-expanded="false">Payroll</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="attend-tab" data-toggle="pill" href="#attend" aria-expanded="false">Attendance</a>
                        </li>
                    </ul>
                    <!-- edit button -->
                    <!-- <button class="btn btn-primary">
                      <i data-feather="edit" class="d-block d-md-none"></i>
                      <span class="font-weight-bold d-none d-md-block">Edit</span>
                    </button> -->
                  </div>
                </div>
                <!--/ collapse  -->
              </nav>
              <!--/ navbar -->
            </div>
          </div>
      <!-- <div class="card-header">
        <div class="row col-12">

          </div>
      </div> -->
      <div class="card-body">
        <!-- <ul class="nav nav-pills">

        </ul> -->
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane active" id="general" aria-labelledby="general-tab" aria-expanded="true">
            <!-- <p> General</p> -->

            <!-- Accordion with margin start -->
<section id="accordion-with-margin">
    <div class="row">
      <div class="col-sm-12">
        <div class="card collapse-icon">
          <div class="card-header">
            <h4 class="card-title">General Information</h4>
          </div>
          <div class="card-body">
            <!-- <p class="card-text">
              To create a collapse with margin use <code>.collapse-margin</code> class as a wrapper for your collapse
              header.
            </p> -->
            <div class="collapse-margin" id="accordionExample">
              <div class="card">
                <div
                  class="card-header bg-primary"
                  id="headingOne"
                  data-toggle="collapse"
                  role="button"
                  data-target="#collapseOne"
                  aria-expanded="false"
                  aria-controls="collapseOne"
                >
                  <span class="lead collapse-title"> Basic Information </span>
                </div>
                <!-- Change data-parent="#accordionExample" to current object like data-parent="#collapseOne"  for closing or opening only particular collapsible -->
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#collapseOne">
                  <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-12">
                                <div class="form-group row">
                                  <div class="col-sm-3 col-form-label">
                                    <label for="first-name">First Name</label>
                                  </div>
                                  <div class="col-sm-9">
                                    <input type="text" id="first-name" class="form-control" name="fname" placeholder="First Name" />
                                  </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group row">
                                  <div class="col-sm-3 col-form-label">
                                    <label for="employee-id">Employee ID</label>
                                  </div>
                                  <div class="col-sm-9">
                                    <input type="text" id="employee-id" class="form-control" name="empid" placeholder="Employee ID" />
                                  </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group row">
                                  <div class="col-sm-3 col-form-label">
                                    <label for="skype-id">Skype ID</label>
                                  </div>
                                  <div class="col-sm-9">
                                    <input type="text" id="skype-id" class="form-control" name="skypeid" placeholder="Skype ID" />
                                  </div>
                                  <!-- <div class="col-sm-3 col-form-label">
                                    <label for="contact-info">Mobile</label>
                                  </div>
                                  <div class="col-sm-9">
                                    <input type="number" id="contact-info" class="form-control" name="contact" placeholder="Mobile" />
                                  </div> -->
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group row">
                                  <div class="col-sm-3 col-form-label">
                                    <label for="medical-no">Medical Emergency</label>
                                  </div>
                                  <div class="col-sm-9">
                                    <input type="number" id="medical-no" class="form-control" name="medicalno" placeholder="Medical Emergency" />
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-12">
                                <div class="form-group row">
                                  <div class="col-sm-3 col-form-label">
                                    <label for="last-name">Last Name</label>
                                  </div>
                                  <div class="col-sm-9">
                                    <input type="text" id="last-name" class="form-control" name="lname" placeholder="Last Name" />
                                  </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group row">
                                  <div class="col-sm-3 col-form-label">
                                    <label for="email-id">Email</label>
                                  </div>
                                  <div class="col-sm-9">
                                    <input type="email" id="email-id" class="form-control" name="email-id" placeholder="Email" />
                                  </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group row">
                                  <div class="col-sm-3 col-form-label">
                                    <label for="skills">Skills</label>
                                  </div>
                                  <div class="col-sm-9">
                                    <input type="text" id="skills" class="form-control" name="skills" placeholder="Skills" />
                                  </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group row">
                                  <div class="col-sm-3 col-form-label">
                                    <label for="emergency-no">Emergency No</label>
                                  </div>
                                  <div class="col-sm-9">
                                    <input type="number" id="emergency-no" class="form-control" name="emergencyno" placeholder="Emergency No" />
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9 offset-md-3">
                          <button type="reset" class="btn btn-primary mr-1">Submit</button>
                          <button type="reset" class="btn btn-outline-secondary">Reset</button>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div
                  class="card-header bg-primary"
                  id="headingTwo"
                  data-toggle="collapse"
                  role="button"
                  data-target="#collapseTwo"
                  aria-expanded="false"
                  aria-controls="collapseTwo"
                >
                  <span class="lead collapse-title"> Work </span>
                </div>
                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#collapseTwo">
                  <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-12">
                                <div class="form-group row">
                                  <div class="col-sm-3 col-form-label">
                                    <label for="dept">Department</label>
                                  </div>
                                  <div class="col-sm-9">
                                    <input type="text" id="dept" class="form-control" name="dept" placeholder="Department" />
                                  </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group row">
                                  <div class="col-sm-3 col-form-label">
                                    <label for="manager-name">Reporting To</label>
                                  </div>
                                  <div class="col-sm-9">
                                    <input type="text" id="manager-name" class="form-control" name="manager-name" placeholder="Manager Name" />
                                  </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group row">
                                  <div class="col-sm-3 col-form-label">
                                    <label for="source-hire">Source of Hire</label>
                                  </div>
                                  <div class="col-sm-9">
                                    <input type="text" id="source-hire" class="form-control" name="source-hire" placeholder="Source of Hire" />
                                  </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group row">
                                  <div class="col-sm-3 col-form-label">
                                    <label for="work-phone">Work Phone</label>
                                  </div>
                                  <div class="col-sm-9">
                                    <input type="number" id="work-phone" class="form-control" name="workphone" placeholder="Work Phone" />
                                  </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group row">
                                  <div class="col-sm-3 col-form-label">
                                    <label for="biometric-id">Biometric ID</label>
                                  </div>
                                  <div class="col-sm-9">
                                    <input type="text" id="biometric-id" class="form-control" name="biometricid" placeholder="Biometric ID" />
                                  </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group row">
                                  <div class="col-sm-3 col-form-label">
                                    <label for="contract-start-date"">Contract Start Date</label>
                                  </div>
                                  <div class="col-sm-9">
                                    <input type="text" id="contract-start-date" class="form-control flatpickr" name="contractstartdate" placeholder="Contract Start date" />
                                  </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group row">
                                  <div class="col-sm-3 col-form-label">
                                    <label for="ipaddr">IP Address</label>
                                  </div>
                                  <div class="col-sm-9">
                                    <input type="text" id="ipaddr" class="form-control" name="ipaddress" placeholder="IP Address" />
                                  </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group row">
                                  <div class="col-sm-3 col-form-label">
                                    <label for="workshift">Work Shift</label>
                                  </div>
                                  <div class="col-sm-9">
                                    <input type="text" id="workshift" class="form-control" name="workshift" placeholder="Work Shift" />
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-12">
                                <div class="form-group row">
                                  <div class="col-sm-3 col-form-label">
                                    <label for="title">Title</label>
                                  </div>
                                  <div class="col-sm-9">
                                    <input type="text" id="title" class="form-control" name="title" placeholder="Title" />
                                  </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group row">
                                    <div class="col-sm-3 col-form-label">
                                        <label for="date-of-hire">Date of Hire</label>
                                      </div>
                                      <div class="col-sm-9">
                                        <input type="text" id="date-of-hire" class="form-control flatpickr" name="dateofhire" placeholder="Date of Hire" />
                                      </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group row">
                                  <div class="col-sm-3 col-form-label">
                                    <label for="employee-status">Employee Status</label>
                                  </div>
                                  <div class="col-sm-9">
                                    <input type="text" id="employee-status" class="form-control" name="employeestatus" placeholder="Employee Status" />
                                  </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group row">
                                  <div class="col-sm-3 col-form-label">
                                    <label for="employee-type">Employee Type</label>
                                  </div>
                                  <div class="col-sm-9">
                                    <input type="text" id="employee-type" class="form-control" name="employeetype" placeholder="Employee Type" />
                                  </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group row">
                                  <div class="col-sm-3 col-form-label">
                                    <label for="contract-period">Contract Period</label>
                                  </div>
                                  <div class="col-sm-9">
                                    <input type="text" id="contract-period" class="form-control" name="contractperiod" placeholder="Contract Period" />
                                  </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group row">
                                  <div class="col-sm-3 col-form-label">
                                    <label for="contract-end-date">Contract End Date</label>
                                  </div>
                                  <div class="col-sm-9">
                                    <input type="text" id="contract-end-date" class="form-control" name="contractenddate" placeholder="Contract End Date" />
                                  </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group row">
                                  <div class="col-sm-3 col-form-label">
                                    <label for="pay-method">Payment Method</label>
                                  </div>
                                  <div class="col-sm-9">
                                    <input type="text" id="pay-method" class="form-control" name="paymethod" placeholder="Payment Method" />
                                  </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group row">
                                  <div class="col-sm-3 col-form-label">
                                    <label for="hubstaff-id">Hubstaff ID</label>
                                  </div>
                                  <div class="col-sm-9">
                                    <input type="text" id="hubstaff-id" class="form-control" name="hubstaffid" placeholder="Hubstaff ID" />
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9 offset-md-3">
                          <button type="reset" class="btn btn-primary mr-1">Submit</button>
                          <button type="reset" class="btn btn-outline-secondary">Reset</button>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div
                  class="card-header"
                  id="headingThree"
                  data-toggle="collapse"
                  role="button"
                  data-target="#collapseThree"
                  aria-expanded="false"
                  aria-controls="collapseThree"
                >
                  <span class="lead collapse-title"> Personal Details </span>
                </div>
                <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#collapseThree">
                  <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-12">
                                <div class="form-group row">
                                  <div class="col-sm-3 col-form-label">
                                    <label for="addr1">Address 1</label>
                                  </div>
                                  <div class="col-sm-9">
                                    <input type="text" id="addr1" class="form-control" name="addr1" placeholder="Address 1" />
                                  </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group row">
                                  <div class="col-sm-3 col-form-label">
                                    <label for="city">City</label>
                                  </div>
                                  <div class="col-sm-9">
                                    <input type="text" id="city" class="form-control" name="city" placeholder="City" />
                                  </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group row">
                                  <div class="col-sm-3 col-form-label">
                                    <label for="state">State</label>
                                  </div>
                                  <div class="col-sm-9">
                                    <input type="text" id="state" class="form-control" name="state" placeholder="State" />
                                  </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group row">
                                  <div class="col-sm-3 col-form-label">
                                    <label for="mobile">Mobile</label>
                                  </div>
                                  <div class="col-sm-9">
                                    <input type="number" id="mobile" class="form-control" name="mobile" placeholder="Mobile No" />
                                  </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group row">
                                  <div class="col-sm-3 col-form-label">
                                    <label for="dob">Date of Birth</label>
                                  </div>
                                  <div class="col-sm-9">
                                    <input type="text" id="dob" class="form-control flatpickr" name="dob" placeholder="Date of Birth" />
                                  </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group row">
                                  <div class="col-sm-3 col-form-label">
                                    <label for="nationality">Nationality</label>
                                  </div>
                                  <div class="col-sm-9">
                                    <input type="text" id="nationality" class="form-control" name="nationality" placeholder="Nationality" />
                                  </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group row">
                                  <div class="col-sm-3 col-form-label">
                                    <label for="driving-license">Driving License</label>
                                  </div>
                                  <div class="col-sm-9">
                                    <input type="text" id="driving-license" class="form-control" name="drivinglicense" placeholder="Driving License" />
                                  </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group row">
                                  <div class="col-sm-3 col-form-label">
                                    <label for="father-name">Father Name</label>
                                  </div>
                                  <div class="col-sm-9">
                                    <input type="text" id="father-name" class="form-control" name="fathername" placeholder="Father Name" />
                                  </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group row">
                                  <div class="col-sm-3 col-form-label">
                                    <label for="pancard">Pan Card</label>
                                  </div>
                                  <div class="col-sm-9">
                                    <input type="text" id="pancard" class="form-control" name="pancard" placeholder="Pan Card" />
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-12">
                                <div class="form-group row">
                                  <div class="col-sm-3 col-form-label">
                                    <label for="addr2">Address 2</label>
                                  </div>
                                  <div class="col-sm-9">
                                    <input type="text" id="addr2" class="form-control" name="addr2" placeholder="Address 2" />
                                  </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group row">
                                    <div class="col-sm-3 col-form-label">
                                        <label for="country">Country</label>
                                      </div>
                                      <div class="col-sm-9">
                                        <input type="text" id="country" class="form-control" name="country" placeholder="Country" />
                                      </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group row">
                                  <div class="col-sm-3 col-form-label">
                                    <label for="postal-code">Postal Code</label>
                                  </div>
                                  <div class="col-sm-9">
                                    <input type="text" id="postal-code" class="form-control" name="postalcode" placeholder="Postal Code" />
                                  </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group row">
                                  <div class="col-sm-3 col-form-label">
                                    <label for="other-email">Other Email</label>
                                  </div>
                                  <div class="col-sm-9">
                                    <input type="text" id="other-email" class="form-control" name="otheremail" placeholder="Other Email" />
                                  </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group row">
                                  <div class="col-sm-3 col-form-label">
                                    <label for="gender">Gender</label>
                                  </div>
                                  <div class="col-sm-9">
                                    <input type="text" id="gender" class="form-control" name="gender" placeholder="Gender" />
                                  </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group row">
                                  <div class="col-sm-3 col-form-label">
                                    <label for="marital-status">Marital Status</label>
                                  </div>
                                  <div class="col-sm-9">
                                    <input type="text" id="marital-status" class="form-control" name="maritalstatus" placeholder="Marital Status" />
                                  </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group row">
                                  <div class="col-sm-3 col-form-label">
                                    <label for="hobby">Hobbies</label>
                                  </div>
                                  <div class="col-sm-9">
                                    <input type="text" id="hobby" class="form-control" name="hobby" placeholder="Hobbies" />
                                  </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group row">
                                  <div class="col-sm-3 col-form-label">
                                    <label for="adhaar">Adhaar Card</label>
                                  </div>
                                  <div class="col-sm-9">
                                    <input type="text" id="adhaar" class="form-control" name="adhaar" placeholder="Adhaar Card" />
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9 offset-md-3">
                          <button type="reset" class="btn btn-primary mr-1">Submit</button>
                          <button type="reset" class="btn btn-outline-secondary">Reset</button>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div
                  class="card-header"
                  id="headingFour"
                  data-toggle="collapse"
                  role="button"
                  data-target="#collapseFour"
                  aria-expanded="false"
                  aria-controls="collapseFour"
                >
                  <span class="lead collapse-title"> Work Experience </span>
                </div>
                <div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-parent="#collapseFour">
                  <div class="card-body">

                    <!-- Borderless table start -->
<div class="row" id="table-borderless">
    <div class="col-12">
      <div class="card">
        <!-- <div class="card-header">
          <h4 class="card-title">Borderless Table</h4>
        </div> -->
        <!-- <div class="card-body">
          <p class="card-text">
            Add <code>.table-borderless</code> for a table without borders. It can also be used on dark tables.
          </p>
        </div> -->
        <div class="table-responsive">
          <table class="table table-borderless">
            <thead>
              <tr>
                <th>Previous Company</th>
                <th>Job Title</th>
                <th>From</th>
                <th>To</th>
                <th>Job Description</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- Borderless table end -->
  <br/>
  <button type="reset" class="btn btn-primary mr-1"><i class="ficon" data-feather="plus"></i> Add Experience</button>
                  </div>
                </div>
              </div>

              <div class="card">
                <div
                  class="card-header"
                  id="headingFive"
                  data-toggle="collapse"
                  role="button"
                  data-target="#collapseFive"
                  aria-expanded="false"
                  aria-controls="collapseFive"
                >
                  <span class="lead collapse-title"> Education </span>
                </div>
                <div id="collapseFive" class="collapse show" aria-labelledby="headingFive" data-parent="#collapseFive">
                  <div class="card-body">
                    <!-- Borderless table start -->
<div class="row" id="table-borderless">
    <div class="col-12">
      <div class="card">
        <!-- <div class="card-header">
          <h4 class="card-title">Borderless Table</h4>
        </div> -->
        <!-- <div class="card-body">
          <p class="card-text">
            Add <code>.table-borderless</code> for a table without borders. It can also be used on dark tables.
          </p>
        </div> -->
        <div class="table-responsive">
          <table class="table table-borderless">
            <thead>
              <tr>
                <th>School Name</th>
                <th>Degree</th>
                <th>Field of Study</th>
                <th>Year of Completion</th>
                <th>Additional Notes</th>
                <th>Interests</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- Borderless table end -->
  <br/>
  <button type="reset" class="btn btn-primary mr-1"><i class="ficon" data-feather="plus"></i> Add Education</button>
                  </div>
                </div>
              </div>

              <div class="card">
                <div
                  class="card-header"
                  id="headingSix"
                  data-toggle="collapse"
                  role="button"
                  data-target="#collapseSix"
                  aria-expanded="false"
                  aria-controls="collapseSix"
                >
                  <span class="lead collapse-title"> Dependents </span>
                </div>
                <div id="collapseSix" class="collapse show" aria-labelledby="headingSix" data-parent="#collapseSix">
                  <div class="card-body">
                    <!-- Borderless table start -->
<div class="row" id="table-borderless">
    <div class="col-12">
      <div class="card">
        <!-- <div class="card-header">
          <h4 class="card-title">Borderless Table</h4>
        </div> -->
        <!-- <div class="card-body">
          <p class="card-text">
            Add <code>.table-borderless</code> for a table without borders. It can also be used on dark tables.
          </p>
        </div> -->
        <div class="table-responsive">
          <table class="table table-borderless">
            <thead>
              <tr>
                <th>Name</th>
                <th>Realtionship</th>
                <th>Date of Birth</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- Borderless table end -->
  <br/>
  <button type="reset" class="btn btn-primary mr-1"><i class="ficon" data-feather="plus"></i> Add Dependent</button>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Accordion with margin end -->

          </div>
          <div class="tab-pane" id="leave" role="tabpanel" aria-labelledby="leave-tab" aria-expanded="false">
            <!-- <p> Leave </p> -->

            <!-- Borderless table start -->
<div class="row" id="table-striped">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Balances</h4>
        </div>
        <!-- <div class="card-body">
          <p class="card-text">
            Add <code>.table-borderless</code> for a table without borders. It can also be used on dark tables.
          </p>
        </div> -->
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Leave</th>
                <th>Days</th>
                <th>Spent</th>
                <th>Scheduled</th>
                <th>Available</th>
                <th>Period</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- Borderless table end -->

        <!-- Borderless table start -->
<div class="row" id="table-striped">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Pending</h4>
        </div>
        <!-- <div class="card-body">
          <p class="card-text">
            Add <code>.table-borderless</code> for a table without borders. It can also be used on dark tables.
          </p>
        </div> -->
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Date</th>
                <th>Policy</th>
                <th>Description</th>
                <th>Days</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- Borderless table end -->

  <!-- Borderless table start -->
<div class="row" id="table-striped">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">History</h4>
        </div>
        <!-- <div class="card-body">
          <p class="card-text">
            Add <code>.table-borderless</code> for a table without borders. It can also be used on dark tables.
          </p>
        </div> -->
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Date</th>
                <th>Policy</th>
                <th>Description</th>
                <th>Days</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- Borderless table end -->


          </div>
          <!-- <div class="tab-pane" id="dropdown1" role="tabpanel" aria-labelledby="dropdown1-tab" aria-expanded="false">
            <p>
              Cake croissant lemon drops gummi bears carrot cake biscuit cupcake croissant. Macaroon lemon drops
              muffin jelly sugar plum chocolate cupcake danish icing. Soufflé tootsie roll lemon drops sweet roll cake
              icing cookie halvah cupcake.Chupa chups pie jelly pie tootsie roll dragée cookie caramels sugar plum.
              Jelly oat cake wafer pie cupcake chupa chups jelly-o gingerbread.
            </p>
          </div>
          <div class="tab-pane" id="dropdown2" role="tabpanel" aria-labelledby="dropdown2-tab" aria-expanded="false">
            <p>
              Chocolate croissant cupcake croissant jelly donut. Cheesecake toffee apple pie chocolate bar biscuit
              tart croissant. Lemon drops danish cookie. Oat cake macaroon icing tart lollipop cookie sweet bear claw.
              Toffee jelly-o pastry cake dessert chocolate bar jelly beans fruitcake. Dragée sweet fruitcake dragée
              biscuit halvah wafer gingerbread dessert. Gummies fruitcake brownie gummies tart pudding.
            </p>
          </div> -->
          <div class="tab-pane" id="assets" role="tabpanel" aria-labelledby="assets-tab" aria-expanded="false">
            <!-- <p> Assets </p> -->
              <!-- Borderless table start -->
<div class="row" id="table-striped">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Assets</h4>
        </div>
        <!-- <div class="card-body">
          <p class="card-text">
            Add <code>.table-borderless</code> for a table without borders. It can also be used on dark tables.
          </p>
        </div> -->
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Category</th>
                <th>Item Name</th>
                <th>Date</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- Borderless table end -->
            <!-- Borderless table start -->
<div class="row" id="table-striped">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Assets Requests</h4>
        </div>
        <!-- <div class="card-body">
          <p class="card-text">
            Add <code>.table-borderless</code> for a table without borders. It can also be used on dark tables.
          </p>
        </div> -->
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Category</th>
                <th>Item Name</th>
                <th>Date</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- Borderless table end -->

  <button type="reset" class="btn btn-primary mr-1">Request Asset</button>
          </div>
          <div class="tab-pane" id="doc" role="tabpanel" aria-labelledby="doc-tab" aria-expanded="false">
            <!-- <p> Documents </p> -->
            <!-- button file upload starts -->
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Employee Documents</h4>
        </div>
        <div class="card-body">
          <p class="card-text">
            Please upload your documents.
          </p>
          <button id="select-files" class="btn btn-outline-primary mb-1">
            <i data-feather="file"></i> Upload files
          </button>
          <form action="#" class="dropzone dropzone-area" id="dpz-btn-select-files">
            <div class="dz-message">Drop files here or click button to upload.</div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- button file upload ends -->

          </div>
          <div class="tab-pane" id="payroll" role="tabpanel" aria-labelledby="payroll-tab" aria-expanded="false">
            <p> Payroll </p>
          </div>
          <div class="tab-pane" id="attend" role="tabpanel" aria-labelledby="attend-tab" aria-expanded="false">
            <!-- <p> Attendance </p> -->

            <!--Bar Chart Start -->
    <div class="col-xl-6 col-12">
        <div class="card">
          <div
            class="card-header d-flex justify-content-between align-items-sm-center align-items-start flex-sm-row flex-column"
          >
            <div class="header-left">
              <h4 class="card-title">Attendance</h4>
            </div>
            <div class="header-right d-flex align-items-center mt-sm-0 mt-1">
              <i data-feather="calendar"></i>
              <input
                type="text"
                class="form-control flat-picker border-0 shadow-none bg-transparent pr-0"
                placeholder="YYYY-MM-DD"
              />
            </div>
          </div>
          <div class="card-body">
            <canvas class="bar-chart-ex chartjs" data-height="400"></canvas>
          </div>
        </div>
      </div>
      <!-- Bar Chart End -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Basic pills ends -->
</div>
<!--/ profile header -->


</div>
@endsection

@section('vendor-script')
  <!-- vendor files -->
  <script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/forms/validation/jquery.validate.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/pickers/flatpickr/flatpickr.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/file-uploaders/dropzone.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/charts/chart.min.js')) }}"></script>
@endsection

@section('page-script')
  {{-- Page js files --}}
  <script src="{{ asset(mix('js/scripts/pages/page-profile.js')) }}"></script>
  <script src="{{ asset(mix('js/scripts/pages/page-account-settings.js')) }}"></script>
  <script src="{{ asset(mix('js/scripts/forms/form-file-uploader.js')) }}"></script>
  <script src="{{ asset(mix('js/scripts/charts/chart-chartjs1.js')) }}"></script>
@endsection
