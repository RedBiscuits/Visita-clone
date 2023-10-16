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
                  <h4 class="card-title"></h4>
                  <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                  <div class="heading-elements">
                      <ul class="list-inline mb-0">


                          <li><a data-action="expand"><i class="ft-maximize"></i></a></li>

                      </ul>
                  </div>
              </div>
              <div class="card-content collapse show">
                  <div class="card-body">

                      <form action="{{ route('dashboard.doctors.store') }}" method="POST" class="steps-validation" id="add-doctor" enctype="multipart/form-data">
                        @csrf

                          <!-- Step 1 -->
                          <h6><i class="step-icon ft-home"></i>@lang('admin.info')</h6>
                          <fieldset>
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="department_id"> @lang('admin.department') :</label>
                                          <select  name="department_id" class="form-control round" id="department_id" >
                                            <option selected disabled> @lang('admin.choose') </option>
                                            @foreach ($departments as $item)
                                                <option @if (old('department_id') == $item->id) selected

                                                @endif value="{{ $item->id }}"> {{ $item->title }} </option>
                                            @endforeach
                                          </select>
                                      </div>
                                  </div>

                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="lastName2"> @lang('admin.hospital') :</label>
                                          <select    name="hospital_id" class="form-control round" id="hospital" >
                                            <option selected disabled> @lang('admin.choose') </option>

                                            @foreach ($hospitals as $hospital)
                                            <option @if (old('hospital_id') == $hospital->id) selected

                                                @endif value="{{ $hospital->id }}"> {{ $hospital->title }} </option>
                                           @endforeach

                                          </select>
                                      </div>
                                  </div>
                              </div>

                              <div class="row">

                              @foreach (config('translatable.locales') as $locale)

                              <div class="col-md-6">

                              <div class="mb-3">
                                <label class="col-form-label pt-0" for="name"> @lang('admin.' . $locale . '.doctor name')    </label>
                                <input required class="form-control round required" id="name" name="{{ $locale }}[name]" required value="{{ old($locale . '.name') }}" type="text">

                              </div>
                              </div>


                              @endforeach

                              @foreach (config('translatable.locales') as $locale)

                              <div class="col-md-6">

                              <div class="mb-3">
                                <label class="col-form-label pt-0" for="name"> @lang('admin.' . $locale . '.doctor about')    </label>
                                <textarea required class="form-control round" id="about" name="{{ $locale }}[about]" required value="{{ old($locale . '.about') }}"></textarea>

                              </div>
                              </div>

                              @endforeach

                              </div>
                              <div class="col-md-6">
                              <div class="form-group">
                                <fieldset class="form-group">
                                    <label for="complaintinput1">@lang('admin.image')</label>
                                    <div class="custom-file">

                                        <input type="file" class="custom-file-input round" id="inputGroupFile01" name="image" required>
                                        <label class="custom-file-label" for="inputGroupFile01">@lang('admin.choose')</label>
                                    </div>
                                </fieldset>
                              </div>
                              </div>
                          </fieldset>

                          <!-- Step 2 -->
                          <h6><i class="step-icon ft-file-text"></i> @lang('admin.login')</h6>
                          <fieldset>
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="proposalTitle2"> @lang('admin.phone')</label>
                                          <input name="phone" required value="{{ old('phone') }}" type="text" class="form-control round" id="proposalTitle2" >
                                      </div>
                                      <div class="form-group">
                                          <label for="password"> @lang('admin.password')</label>
                                          <input type="password" required name="password" class="form-control round" id="password" >
                                      </div>

                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="email"> @lang('admin.email')</label>
                                          <input type="email" required name="email" class="form-control round" id="email" >
                                      </div>
                                      <div class="form-group">
                                        <label for="password_confirmation"> @lang('admin.password_confirm')</label>
                                        <input type="password" required name="password_confirmation" class="form-control round" id="password_confirmation" >
                                    </div>
                                  </div>
                              </div>
                          </fieldset>

                          <!-- Step 3 -->
                          <h6><i class="step-icon ft-activity"></i> @lang('admin.work hours')</h6>
                          <fieldset>

                            <div class="table-responsive">
                                <table class="table table-bordered">
                                   <thead>
                                      <tr>
                                         <th>#</th>
                                         <th>{{__('admin.Day')}}</th>
                                         <th>{{__('admin.From')}}</th>
                                         <th>{{__('admin.To')}}</th>
                                      </tr>
                                   </thead>
                                   <tbody>
                                      <?php $arr = [__('admin.Monday'), __('admin.Tuesday'), __('admin.Wednesday'), __('admin.Thursday'), __('admin.Friday'), __('admin.Saturday'), __('admin.Sunday')]; ?>
                                      <?php $i = 0;
                                      $workinghour = [] ;
                                      ?>

                                      @foreach($arr as $index=> $a)
                                      <tr>
                                        <td> {{ $index + 1 }} </td>
                                         <td><input type="hidden" required name="day[]" id="day{{$i}}" readonly="" value="{{$i}}" class="form-control" />
                                            <span>{{$a}}</span>
                                         </td>
                                         <td><input type="time" required name="from[]" id="from{{$i}}" class="form-control round" value="{{time()}}"  /></td>
                                         <td><input type="time" required name="to[]" id="to{{$i}}" value="" class="form-control round" onchange="checktime(this.value,'{{$i}}')"  /></td>
                                      </tr>
                                      <?php $i++; ?>
                                      @endforeach

                                   </tbody>
                                </table>
                             </div>

                          </fieldset>

                          <!-- Step 4 -->
                          <h6><i class="step-icon ft-box"></i>@lang('admin.social')</h6>
                          <fieldset>
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="meetingName2">@lang('admin.facebook')</label>
                                          <input type="text" name="facebook" value="{{ old('facebook') }}" class="form-control round" id="meetingName2" >
                                      </div>

                                      <div class="form-group">
                                          <label for="meetingLocation2">@lang('admin.twitter')</label>
                                          <input type="text" name="twitter" value="{{ old('twitter') }}" class="form-control round" id="meetingLocation2" >
                                      </div>


                                  </div>

                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="decisions2">@lang('admin.linkedin')</label>
                                          <input type="text" name="linkedin" value="{{ old('linkedin') }}" class="form-control round" id="meetingLocation2" >
                                      </div>

                                      <div class="form-group">
                                        <label for="participants2">@lang('admin.youtube')</label>
                                        <input type="text" name="youtube" value="{{ old('youtube') }}" class="form-control round" id="meetingLocation2" >
                                    </div>
                                  </div>
                              </div>
                          </fieldset>
                          <!-- Step 4 -->
                          <h6><i class="step-icon ft-box"></i>@lang('admin.location')</h6>
                          <fieldset>
                              <div class="row">
                                  <div class="col-md-12">
                                      <div id="map" style="min-height: 500px;">  </div>


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
<script src ="{{asset('main/vendors/js/extensions/jquery.steps.min.js')}}" type="text/javascript"></script>
<script src="{{asset('main/vendors/js/forms/validation/jquery.validate.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('main/js/scripts/forms/wizard-steps.min.js')}}" type="text/javascript"></script>
@endpush
