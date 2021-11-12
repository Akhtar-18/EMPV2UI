@extends('layouts/contentLayoutMaster')
@section('title', 'Dashboard Employee')
@section('vendor-style')
{{-- vendor css files --}}
<link rel="stylesheet" href="{{ asset(mix('vendors/css/charts/apexcharts.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/toastr.min.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('vendors/css/calendars/fullcalendar.min.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">
@endsection
@section('page-style')
{{-- Page css files --}}
<link rel="stylesheet" href="{{ asset(mix('css/base/pages/dashboard-ecommerce.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('css/base/plugins/charts/chart-apex.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('css/base/plugins/extensions/ext-component-toastr.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/pickers/form-flat-pickr.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('css/base/pages/app-calendar.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-validation.css')) }}">
@endsection
@section('content')
<!-- Dashboard Ecommerce Starts -->
<section id="dashboard-ecommerce">
   <div class="row">
      <!-- Members -->
      <div class="col-md-8 col-12">
         <div class="col-md-12">
            <div class="card card-congratulation-medal">
                <div class="card-body">
                    <div class="employee-task d-flex justify-content-between align-items-center">
                        <div class="media">
                          <div class="avatar mr-75">
                            <img
                              src="{{asset('images/portrait/small/avatar-s-9.jpg')}}"
                              class="rounded"
                              width="70"
                              height="70"
                              alt="Avatar"
                            />
                          </div>
                          <div class="media-body my-auto">
                            <h3>👋 Welcome, Akhtar Parveen!</h3>
                  <h5 class="text-center">Have a great day!</h5>

                          </div>
                        </div>
                      </div>


                </div>
              </div>
         </div>
         <div class="col-md-12">

            <div class="card">
                <div class="card-body">
                   <div class="card-header justify-content-between align-items-center">
                      <h4 class="card-title text-uppercase"><i data-feather='users'></i> Team Coders</h4>
                   </div>
                   <!-- <div class="divider">
                      <div class="divider-text">Team Coders</div>
                      </div> -->
                   <div class="d-flex justify-content-between">
                      <div class="profile-user-info text-center">
                         <img
                            class="avatar" src="{{asset('images/portrait/small/avatar-s-9.jpg')}}"
                            alt="avatar"
                            height="70"
                            width="70"
                            />
                         <h6 class="mb-0">Peter Reed</h6>
                         <small class="text-muted">Web Developer</small>
                      </div>
                      <div class="profile-user-info text-center">
                         <img
                            class="avatar" src="{{asset('images/portrait/small/avatar-s-6.jpg')}}"
                            alt="avatar"
                            height="70"
                            width="70"
                            />
                         <h6 class="mb-0">Peter Reed</h6>
                         <small class="text-muted">Web Developer</small>
                      </div>
                      <div class="profile-user-info text-center">
                         <img
                            class="avatar" src="{{asset('images/portrait/small/avatar-s-7.jpg')}}"
                            alt="avatar"
                            height="70"
                            width="70"
                            />
                         <h6 class="mb-0">Peter Reed</h6>
                         <small class="text-muted">Web Developer</small>
                      </div>
                      <div class="profile-user-info text-center">
                         <img
                            class="avatar" src="{{asset('images/portrait/small/avatar-s-8.jpg')}}"
                            alt="avatar"
                            height="70"
                            width="70"
                            />
                         <h6 class="mb-0">Peter Reed</h6>
                         <small class="text-muted">Web Developer</small>
                      </div>
                      <div class="profile-user-info text-center">
                         <img
                            class="avatar" src="{{asset('images/portrait/small/avatar-s-1.jpg')}}"
                            alt="avatar"
                            height="70"
                            width="70"
                            />
                         <h6 class="mb-0">Peter Reed</h6>
                         <small class="text-muted">Web Developer</small>
                      </div>
                   </div>
                </div>
             </div>

         </div>
         <!--/ Members -->
         <div class="col-md-12">
            <div class="card">
            <!-- Calendar -->
      <div class="col position-relative">
        <div class="card shadow-none border-0 mb-0 rounded-0">
          <div class="card-body pb-0">
            <div id="calendar"></div>
          </div>
        </div>
      </div>
      <!-- /Calendar -->
      <div class="body-content-overlay"></div>
    </div>

         </div>
      </div>
      <div class="col-md-4 col-12">

        <div class="col-md-12">
            <div class="card card-employee-task">

                   <div class="card-header">
                      <h4 class="card-title text-uppercase">My Leave Quota</h4>
                      <div class="heading-elements">
                         <ul class="list-inline mb-0">
                            <li>
                               <a data-action="collapse"><i data-feather="chevron-down"></i></a>
                            </li>
                            <li>
                               <a data-action="reload"><i data-feather="rotate-cw"></i></a>
                            </li>
                            <!-- <li>
                               <a data-action="close"><i data-feather="x"></i></a>
                            </li> -->
                         </ul>
                      </div>
                   </div>
                   <div class="card-content collapse show">
                      <div class="card-body">
                        <h5>Leave Type: Medical/Emergency</h5>
                         <div class="row">
                            <div class="table-responsive">
                               <table class="table table-bordered">
                                  <thead>
                                     <tr>
                                        <!-- <th><span data-toggle="tooltip" data-placement="top" data-original-title="Leave Type">LT</span></th> -->
                                        <th><span data-toggle="tooltip" data-placement="top" data-original-title="Total">Tot</span></th>
                                        <th><span data-toggle="tooltip" data-placement="top" data-original-title="Spent">Sp</span></th>
                                        <th><span data-toggle="tooltip" data-placement="top" data-original-title="Available">Av</span></th>
                                     </tr>
                                  </thead>
                                  <tbody>
                                     <tr>
                                        <!-- <td></td> -->
                                        <td>4</td>
                                        <td>0</td>
                                        <td>4</td>
                                     </tr>
                                  </tbody>
                               </table>
                            </div>
                         </div>
                         <div class="col-md-12">
                             <br/>
                            <button type="button" class="btn btn-primary waves-effect waves-float waves-light">Apply Leave</button>
                         </div>

                      </div>
                   </div>
             </div>

         </div>


         <div class="col-md-12">

            <div class="card card-employee-task">
                <div class="card-header">
                  <h4 class="card-title">Birthday Buddies</h4>
                  <i data-feather="more-vertical" class="font-medium-3 cursor-pointer"></i>
                </div>
                <div class="card-body">
                  <div class="employee-task d-flex justify-content-between align-items-center">
                    <div class="media">
                      <div class="avatar mr-75">
                        <img
                          src="{{asset('images/portrait/small/avatar-s-9.jpg')}}"
                          class="rounded"
                          width="42"
                          height="42"
                          alt="Avatar"
                        />
                      </div>
                      <div class="media-body my-auto">
                        <h6 class="mb-0">Ryan Harrington</h6>
                        <small>iOS Developer</small>
                      </div>
                    </div>
                    <div class="d-flex align-items-center">
                      <small class="text-muted mr-75">11 Jul</small>
                      <div class="employee-task-chart-primary-1"></div>
                    </div>
                  </div>
                  <div class="employee-task d-flex justify-content-between align-items-center">
                    <div class="media">
                      <div class="avatar mr-75">
                        <img
                          src="{{asset('images/portrait/small/avatar-s-20.jpg')}}"
                          class="rounded"
                          width="42"
                          height="42"
                          alt="Avatar"
                        />
                      </div>
                      <div class="media-body my-auto">
                        <h6 class="mb-0">Louisa Norton</h6>
                        <small>UI Designer</small>
                      </div>
                    </div>
                    <div class="d-flex align-items-center">
                      <small class="text-muted mr-75">11 Jul</small>
                      <div class="employee-task-chart-danger"></div>
                    </div>
                  </div>
                  <div class="employee-task d-flex justify-content-between align-items-center">
                    <div class="media">
                      <div class="avatar mr-75">
                        <img
                          src="{{asset('images/portrait/small/avatar-s-1.jpg')}}"
                          class="rounded"
                          width="42"
                          height="42"
                          alt="Avatar"
                        />
                      </div>
                      <div class="media-body my-auto">
                        <h6 class="mb-0">Jayden Duncan</h6>
                        <small>Java Developer</small>
                      </div>
                    </div>
                    <div class="d-flex align-items-center">
                      <small class="text-muted mr-75">21 Jul</small>
                      <div class="employee-task-chart-success"></div>
                    </div>
                  </div>

                </div>
              </div>

         </div>


         <div class="col-md-12">

            <div class="card card-employee-task">
                <div class="card-header">
                  <h4 class="card-title"><i data-feather='send'></i> Who is OUT?</h4>
                  <i data-feather="more-vertical" class="font-medium-3 cursor-pointer"></i>
                </div>
                <div class="card-body">
                  <div class="employee-task d-flex justify-content-between align-items-center">
                    <div class="media">
                      <div class="avatar mr-75">
                        <img
                          src="{{asset('images/portrait/small/avatar-s-9.jpg')}}"
                          class="rounded"
                          width="42"
                          height="42"
                          alt="Avatar"
                        />
                      </div>
                      <div class="media-body my-auto">
                        <h6 class="mb-0">Ryan Harrington</h6>
                        <small>iOS Developer</small>
                      </div>
                    </div>
                    <div class="d-flex align-items-center">
                      <small class="text-muted mr-75">27 Jul</small>
                      <div class="employee-task-chart-primary-1"></div>
                    </div>
                  </div>


                </div>
              </div>

         </div>

         <div class="col-md-12">

            <div class="card">
                <div class="card-header flex-column align-items-start">
                  <h4 class="card-title mb-75"><i data-feather='pie-chart'></i> Attendance Status</h4>
                  <!-- <span class="card-subtitle text-muted">Spending on various categories </span> -->
                </div>
                <div class="card-body">
                  <div id="donut-chart"></div>
                </div>
              </div>

         </div>


         <div class="col-md-12">

            <div class="card card-employee-task">
                <div class="card-header">
                  <h4 class="card-title"><i data-feather='globe'></i> Company Documents</h4>
                </div>
                <div class="card-body">
                  <div class="employee-task d-flex justify-content-between align-items-center">
                    <h4 class="text-uppercase text-bold text-primary">Companies Policies</h4>
                  </div>

                </div>
              </div>

         </div>


      </div>
   </div>
</section>
<!-- Dashboard Ecommerce ends -->
@endsection
@section('vendor-script')
{{-- vendor files --}}
<script src="{{ asset(mix('vendors/js/charts/apexcharts.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/extensions/toastr.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/calendar/fullcalendar.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/extensions/moment.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/forms/validation/jquery.validate.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/pickers/flatpickr/flatpickr.min.js')) }}"></script>
@endsection
@section('page-script')
{{-- Page js files --}}
<script src="{{ asset(mix('js/scripts/pages/dashboard-employee.js')) }}"></script>
<script src="{{ asset(mix('js/scripts/pages/app-calendar-events.js')) }}"></script>
<script src="{{ asset(mix('js/scripts/pages/app-calendar.js')) }}"></script>
<script src="{{ asset(mix('js/scripts/charts/chart-apex.js')) }}"></script>
@endsection
