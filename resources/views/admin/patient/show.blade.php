@extends('layouts.main')

@section('content')

@push('css')
<style>
    .sidebar li{
        list-style: none
    }
   .sidebar li i{
        display: inline-block;
        margin-right: 20px;
        background: #fff;
        width: 40px;
        height: 40px;
        border-radius: 12%;
        line-height: 40px;
        vertical-align: middle;
        text-align: center;
        -webkit-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.12);
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.12);
        color: #f40404;
        margin-bottom: 10px;
    }
</style>

@endpush
<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-wrapper-before"></div>
      <div class="content-header row">
      </div>


      <div class="content-body"><div id="user-profile">
<div class="row">
  <div class="col-sm-12 col-xl-8">
    <div class="media d-flex m-1 ">
      <div class="align-left p-1">
        <a href="#" class="profile-image">
          <img src="{{ $patient->image }}"
          class="rounded-circle img-border height-100" alt="#">
        </a>
      </div>
      <div class="media-body text-left  mt-1">
        <h3 class="font-large-1 white">{{ $patient->name }}</h3>
        <p class="white">
          <i class="ft-map-pin white"> </i> {{ $patient->address }} </p>
        <p class="white text-bold-300 d-none d-sm-block">{{ $patient->about }}</p>
        <ul class="list-inline">
          <li class="pr-1 line-height-1">
            <a href="#" class="font-medium-4 white ">
              <span class="ft-facebook"></span>
            </a>
          </li>
          <li class="pr-1 line-height-1">
            <a href="#" class="font-medium-4 white ">
              <span class="ft-twitter white"></span>
            </a>
          </li>
          <li class="line-height-1">
            <a href="#" class="font-medium-4 white ">
              <span class="ft-instagram"></span>
            </a>
          </li>
        </ul>


      </div>
    </div>
  </div>

</div>
<div class="row">

    @include('admin.patient.inc.sidebar')


  <div class="col-xl-9 col-lg-7 col-md-12">
    <!--Project Timeline div starts-->
    <div id="timeline">



      <div class="card">
        <div class="card-content">
            <div class="card-body">
                <ul class="nav nav-tabs">

                    <li class="nav-item">
                    <a class="nav-link active" id="homeIcon-tab" data-toggle="tab" href="#homeIcon" aria-controls="homeIcon" aria-expanded="true">
                        <i class="ft-zap"></i> @lang('admin.appoinments')</a>
                    </li>

                    <li class="nav-item">
                    <a class="nav-link " id="payments-tab" data-toggle="tab" href="#payments" aria-controls="payments" aria-expanded="false">
                        <i class="ft-server"></i>@lang('admin.payments')</a>
                    </li>

                    <li class="nav-item">
                    <a class="nav-link " id="rating-tab" data-toggle="tab" href="#rating" aria-controls="rating" aria-expanded="false">
                        <i class="ft-star"></i>@lang('admin.rating')</a>
                    </li>


                </ul>
                <div class="tab-content px-1 pt-1">

                    {{--  @include('admin.patients.inc.appoinments')
                    @include('admin.patients.inc.work')
                    @include('admin.patients.inc.coupons')
                    @include('admin.patients.inc.subscriptions')
                    @include('admin.patients.inc.payments')
                    @include('admin.patients.inc.wallet')
                    @include('admin.patients.inc.rating')  --}}


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

@endsection
