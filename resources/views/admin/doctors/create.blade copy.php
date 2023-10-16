@extends('layouts.main')

@section('content')

@push('css')

<link rel="stylesheet" type="text/css" href="{{ asset('main/vendors/css/vendors.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('main/vendors/css/forms/toggle/switchery.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('main/css/plugins/forms/switch.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('main/css/core/colors/palette-switch.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('main/vendors/css/pickers/daterange/daterangepicker.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('main/css/plugins/forms/wizard.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('main/css/plugins/pickers/daterange/daterange.min.css')}}">

@endpush

<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-wrapper-before"></div>
      <div class="content-header row">
        <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
          <h3 class="content-header-title mb-0 d-inline-block"> @lang('admin.doctors')</h3>
          <div class="breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper mr-1">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard.')}}">@lang('admin.home')</a></li>
                <li class="breadcrumb-item"><a href="{{ route('dashboard.doctors.index')}}">@lang('admin.doctors')</a></li>
                <li class="breadcrumb-item active">@lang('admin.add doctor')
                </li>
              </ol>
            </div>
          </div>
        </div>
        <div class="content-header-right col-md-4 col-12 d-block d-md-none"><a class="btn btn-warning btn-min-width float-md-right box-shadow-4 mr-1 mb-1" href="chat-application.html"><i class="ft-mail"></i> Email</a></div>
      </div>
      <div class="content-body">
<section id="icon-tabs">
  <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-header">
                  <h4 class="card-title">Form wizard with icon tabs</h4>
                  <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                  <div class="heading-elements">
                      <ul class="list-inline mb-0">
                          <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                          <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                          <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                          <li><a data-action="close"><i class="ft-x"></i></a></li>
                      </ul>
                  </div>
              </div>
              <div class="card-content collapse show">
                  <div class="card-body">
                      <form action="#" class="icons-tab-steps">

                          <!-- Step 1 -->
                          <h6><i class="step-icon ft-home"></i> Step 1</h6>
                          <fieldset>
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="department_id"> @lang('admin.department') :</label>
                                          <select  name="department_id" class="form-control" id="department_id" >
                                            <option selected disabled> @lang('admin.choose') </option>
                                          </select>
                                      </div>
                                  </div>

                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="lastName2"> @lang('admin.hospital') :</label>
                                          <select  name="hospital" class="form-control" id="hospital" >
                                            <option selected disabled> @lang('admin.choose') </option>
                                          </select>
                                      </div>
                                  </div>
                              </div>

                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="emailAddress3">Email</label>
                                          <input type="email" class="form-control" id="emailAddress3" >
                                      </div>
                                  </div>

                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="location2">Project Location :</label>
                                          <select class="custom-select form-control" id="location2" name="location">
                                              <option value="">Select City</option>
                                              <option value="Amsterdam">Amsterdam</option>
                                              <option value="Berlin">Berlin</option>
                                              <option value="Frankfurt">Frankfurt</option>
                                          </select>
                                      </div>
                                  </div>
                              </div>

                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="phoneNumber2">Contact Number :</label>
                                          <input type="tel" class="form-control" id="phoneNumber2" >
                                      </div>
                                  </div>

                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="date2">Date Started :</label>
                                          <input type="date" class="form-control" id="date2" >
                                      </div>
                                  </div>
                              </div>
                          </fieldset>

                          <!-- Step 2 -->
                          <h6><i class="step-icon ft-file-text"></i>Step 2</h6>
                          <fieldset>
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="proposalTitle2">Proposal Title :</label>
                                          <input type="text" class="form-control" id="proposalTitle2" >
                                      </div>
                                      <div class="form-group">
                                          <label for="emailAddress4">Email</label>
                                          <input type="email" class="form-control" id="emailAddress4" >
                                      </div>
                                      <div class="form-group">
                                          <label for="videoUrl2">Video URL :</label>
                                          <input type="url" class="form-control" id="videoUrl2" >
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="jobTitle3">Job Title :</label>
                                          <input type="text" class="form-control" id="jobTitle3" >
                                      </div>
                                      <div class="form-group">
                                          <label for="shortDescription2">Short Description :</label>
                                          <textarea name="shortDescription" id="shortDescription2" rows="4" class="form-control"></textarea>
                                      </div>
                                  </div>
                              </div>
                          </fieldset>

                          <!-- Step 3 -->
                          <h6><i class="step-icon ft-activity"></i>Step 3</h6>
                          <fieldset>
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="eventName2">Event Name :</label>
                                          <input type="text" class="form-control" id="eventName2" >
                                      </div>
                                      <div class="form-group">
                                          <label for="eventType2">Event Type :</label>
                                          <select class="custom-select form-control" id="eventType2" data-placeholder="Type to search cities" name="eventType2">
                                              <option value="Banquet">Banquet</option>
                                              <option value="Fund Raiser">Fund Raiser</option>
                                              <option value="Dinner Party">Dinner Party</option>
                                              <option value="Wedding">Wedding</option>
                                          </select>
                                      </div>
                                      <div class="form-group">
                                          <label for="eventLocation2">Event Location :</label>
                                          <select class="custom-select form-control" id="eventLocation2" name="location">
                                              <option value="">Select City</option>
                                              <option value="Amsterdam">Amsterdam</option>
                                              <option value="Berlin">Berlin</option>
                                              <option value="Frankfurt">Frankfurt</option>
                                          </select>
                                      </div>
                                  </div>

                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label>Event Date - Time :</label>
                                          <div class='input-group'>
                                              <input type='text' class="form-control datetime" />
                                              <span class="input-group-addon">
                                                  <span class="ft-calendar"></span>
                                              </span>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label for="eventStatus2">Event Status :</label>
                                          <select class="custom-select form-control" id="eventStatus2" name="eventStatus">
                                              <option value="Planning">Planning</option>
                                              <option value="In Progress">In Progress</option>
                                              <option value="Finished">Finished</option>
                                          </select>
                                      </div>
                                      <div class="form-group">
                                          <label>Requirements :</label>
                                          <div class="c-inputs-stacked">
                                              <div class="d-inline-block custom-control custom-checkbox">
                                                  <input type="checkbox" name="status2" class="custom-control-input" id="staffing2">
                                                  <label class="custom-control-label" for="staffing2">Staffing</label>
                                              </div>
                                              <div class="d-inline-block custom-control custom-checkbox">
                                                  <input type="checkbox" name="status2" class="custom-control-input" id="catering2">
                                                  <label class="custom-control-label" for="catering2">Catering</label>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </fieldset>

                          <!-- Step 4 -->
                          <h6><i class="step-icon ft-box"></i>Step 4</h6>
                          <fieldset>
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="meetingName2">Name of Meeting :</label>
                                          <input type="text" class="form-control" id="meetingName2" >
                                      </div>

                                      <div class="form-group">
                                          <label for="meetingLocation2">Location :</label>
                                          <input type="text" class="form-control" id="meetingLocation2" >
                                      </div>

                                      <div class="form-group">
                                          <label for="participants2">Names of Participants</label>
                                          <textarea name="participants" id="participants2" rows="4" class="form-control"></textarea>
                                      </div>
                                  </div>

                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="decisions2">Decisions Reached</label>
                                          <textarea name="decisions" id="decisions2" rows="4" class="form-control"></textarea>
                                      </div>
                                      <div class="form-group">
                                          <label>Agenda Items :</label>
                                          <div class="c-inputs-stacked">
                                              <div class="custom-control custom-checkbox">
                                                  <input type="checkbox" name="agenda2" class="custom-control-input" id="item21">
                                                  <label class="custom-control-label" for="item21">1st item</label>
                                              </div>
                                              <div class="custom-control custom-checkbox">
                                                  <input type="checkbox" name="agenda2" class="custom-control-input" id="item22">
                                                  <label class="custom-control-label" for="item22">2nd item</label>
                                              </div>
                                              <div class="custom-control custom-checkbox">
                                                  <input type="checkbox" name="agenda2" class="custom-control-input" id="item23">
                                                  <label class="custom-control-label" for="item23">3rd item</label>
                                              </div>
                                              <div class="custom-control custom-checkbox">
                                                  <input type="checkbox" name="agenda2" class="custom-control-input" id="item24">
                                                  <label class="custom-control-label" for="item24">4th item</label>
                                              </div>
                                              <div class="custom-control custom-checkbox">
                                                  <input type="checkbox" name="agenda2" class="custom-control-input" id="item25">
                                                  <label class="custom-control-label" for="item25">5th item</label>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </fieldset>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>


      </div>
    </div>
</div>

@endsection
@push('js')
<script src="{{ asset('main/vendors/js/extensions/jquery.steps.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('main/js/scripts/forms/wizard-steps.min.js')}}" type="text/javascript"></script>
@endpush
