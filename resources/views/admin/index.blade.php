@extends('layouts.main')

@section('content')

@push('css')


<link rel="stylesheet" type="text/css" href="{{ asset('main/vendors/css/forms/toggle/switchery.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('main/css/plugins/forms/switch.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('main/css/core/colors/palette-switch.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('main/vendors/css/charts/chartist.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('main/vendors/css/charts/chartist-plugin-tooltip.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('main/vendors/css/file-uploaders/dropzone.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('main/vendors/css/forms/icheck/icheck.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('main/vendors/css/forms/icheck/custom.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('main/vendors/css/timeline/vertical-timeline.css')}}">


@endpush

<!-- BEGIN: Content-->
<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-wrapper-before"></div>
    <div class="content-header row">
    </div>
    <div class="content-body"><!-- Chart -->
<div class="row match-height">
<div class="col-12">
    <div class="">
        <div id="gradient-line-chart1" class="height-250 GradientlineShadow1"></div>
    </div>
</div>
</div>
<!-- Chart -->
<!-- eCommerce statistic -->

<div class="row">
    <div class="col-xl-3 col-lg-6 col-md-12">
        <div class="card pull-up ecom-card-1">
            <div class="card-content">
                <div class="card-body">
                    <div class="media d-flex">
                        <div class="align-self-top">
                            <i class="icon-user icon-opacity info font-large-4"></i>
                        </div>
                        <div class="media-body text-right align-self-bottom mt-3">
                            <span class="d-block mb-1 font-medium-2">@lang('admin.doctors') </span>
                            <h1 class="info mb-0">{{ $doctors }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-12">
        <div class="card pull-up ecom-card-1">
            <div class="card-content">
                <div class="card-body">
                    <div class="media d-flex">
                        <div class="align-self-top">
                            <i class="icon-users icon-opacity warning font-large-4"></i>
                        </div>
                        <div class="media-body text-right align-self-bottom mt-3">
                            <span class="d-block mb-1 font-medium-1">@lang('admin.patients')</span>
                            <h1 class="warning mb-0">{{ $patients }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-12">
        <div class="card pull-up ecom-card-1">
            <div class="card-content">
                <div class="card-body">
                    <div class="media d-flex">
                        <div class="align-self-top">
                            <i class="icon-basket-loaded icon-opacity success font-large-4"></i>
                        </div>
                        <div class="media-body text-right align-self-bottom mt-3">
                            <span class="d-block mb-1 font-medium-1">@lang('admin.appoinments')</span>
                            <h1 class="success mb-0">{{ $apoinments }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-12">
        <div class="card pull-up ecom-card-1">
            <div class="card-content">
                <div class="card-body">
                    <div class="media d-flex">
                        <div class="align-self-top">
                            <i class="icon-wallet icon-opacity danger font-large-4"></i>
                        </div>
                        <div class="media-body text-right align-self-bottom mt-3">
                            <span class="d-block mb-1 font-medium-1">Total Revenue</span>
                            <h1 class="danger mb-0">$18,123</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
<div class="col-xl-4 col-lg-6 col-md-12">
    <div class="card pull-up ecom-card-1 bg-white">
        <div class="card-content ecom-card2 height-180">
            <h5 class="text-muted danger position-absolute p-1">Progress Stats</h5>
            <div>
                <i class="ft-pie-chart danger font-large-1 float-right p-1"></i>
            </div>
            <div class="progress-stats-container ct-golden-section height-75 position-relative pt-3  ">
                <div id="progress-stats-bar-chart"></div>
                <div id="progress-stats-line-chart" class="progress-stats-shadow"></div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
    <div class="card pull-up ecom-card-1 bg-white">
        <div class="card-content ecom-card2 height-180">
            <h5 class="text-muted info position-absolute p-1">Activity Stats</h5>
            <div>
                <i class="ft-activity info font-large-1 float-right p-1"></i>
            </div>
            <div class="progress-stats-container ct-golden-section height-75 position-relative pt-3">
                <div id="progress-stats-bar-chart1"></div>
                <div id="progress-stats-line-chart1" class="progress-stats-shadow"></div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-4 col-lg-12">
    <div class="card pull-up ecom-card-1 bg-white">
        <div class="card-content ecom-card2 height-180">
            <h5 class="text-muted warning position-absolute p-1">Sales Stats</h5>
            <div>
                <i class="ft-shopping-cart warning font-large-1 float-right p-1"></i>
            </div>
            <div class="progress-stats-container ct-golden-section height-75 position-relative pt-3">
                <div id="progress-stats-bar-chart2"></div>
                <div id="progress-stats-line-chart2" class="progress-stats-shadow"></div>
            </div>
        </div>
    </div>
</div>
</div>

<div class="row match-height">
<div class="col-xl-12 col-lg-12">
    <h5 class="card-title text-bold-700 my-2"> @lang('admin.latest appoinments')</h5>
    <div class="card">
        <div class="card-content">
            <div id="product-summary" class="media-list position-relative">
                <div class="table-responsive">
                    <table class="table table-padded table-xl mb-0" id="product-summary-table">
                        <thead>
                            <tr>
                                <th>@lang('admin.patient')</th>
                                <th>@lang('admin.doctor')</th>
                                <th>@lang('admin.date') | @lang('admin.time')</th>
                                <th>@lang('admin.type')</th>
                                <th>@lang('admin.status')</th>
                                <th>@lang('admin.payment_method')</th>
                                <th>@lang('admin.payment_status')</th>
                                <th>@lang('admin.price')</th>
                                <th>@lang('admin.action')</th>
                            </tr>
                        </thead>
                        <tbody>


                            @foreach ($recentapoinment as $index => $dep)

                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>
                                    <a href="{{ route('dashboard.patient.show', $dep->patient->id) }}" class="d-flex">

                                        <div class="media-left pr-1">
                                        <span class="avatar avatar-md">
                                            <img class="media-object rounded-circle" src="{{ $dep->patient->image }}" alt=" ">
                                            <i></i>
                                        </span>
                                    </div>
                                    <div class="media-body w-100">
                                        <span class="list-group-item-heading"> {{ $dep->patient->name }}  </span>
                                    </div>
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('dashboard.doctors.show', $dep->doctor->id) }}" class="d-flex">

                                        <div class="media-left pr-1">
                                        <span class="avatar avatar-md">
                                            <img class="media-object rounded-circle" src="{{ $dep->doctor->image }}" alt=" ">
                                            <i></i>
                                        </span>
                                    </div>
                                    <div class="media-body w-100">
                                        <span class="list-group-item-heading"> {{ $dep->doctor->name }}  </span>
                                    </div>
                                    </a>
                                </td>


                                <td>{{ $dep->date }} | {{ $dep->time }}</td>
                                <td>{!! appoinmentType($dep->type) !!}</td>
                                <td>{!! appoinmentStatus($dep->status) !!}</td>
                                <td> {{ $dep->payment_method }} </td>
                                <td> {{ $dep->payment_status }} </td>
                                <td> {{ $dep->price }} </td>



                              @endforeach





                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

{{--  <div class="row">

<div class="col-xl-6 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Quarterly Sales</h4>
            <a class="heading-elements-toggle">
                <i class="la la-ellipsis-v font-medium-3"></i>
            </a>
            <div class="heading-elements">
                <ul class="list-inline mb-0">
                    <li>
                        <a data-action="reload">
                            <i class="ft-rotate-cw"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="card-content collapse show">
            <div class="card-body">
                <div id="quarterly-sales" class="height-300 BarChartShadow"></div>
            </div>
        </div>
    </div>
</div>
</div>  --}}

<div class="row">

<div class="col-xl-4 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">@lang('admin.recent doctors')</h4>
            <a class="heading-elements-toggle">
                <i class="fa fa-ellipsis-v font-medium-3"></i>
            </a>
        </div>

        <div class="card-content">
            <div id="recent-buyers" class="media-list">

                @foreach($recentdoctor as $doctor)

                <a href="{{ route('dashboard.doctors.show', $doctor->id) }}" class="media border-0">
                    <div class="media-left pr-1">
                        <span class="avatar avatar-md">
                            <img class="media-object rounded-circle"  style="height: 40px;" src="{{ $doctor->image }}" alt=" ">

                        </span>
                    </div>
                    <div class="media-body w-100">
                        <span class="list-group-item-heading"> {{ $doctor->name }}  </span>

                        <p class="list-group-item-text mb-0">
                            <span class="blue-grey lighten-2 font-small-3"> {{ $doctor->phone }} </span>
                        </p>
                    </div>
                </a>

                @endforeach
            </div>
        </div>
    </div>
</div>

<div class="col-xl-4 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">@lang('admin.recent patients')</h4>
            <a class="heading-elements-toggle">
                <i class="fa fa-ellipsis-v font-medium-3"></i>
            </a>
        </div>

        <div class="card-content">
            <div id="recent-buyers" class="media-list">

                @foreach($recentpatient as $doctor)

                <a href="{{ route('dashboard.patient.show', $doctor->id) }}" class="media border-0">
                    <div class="media-left pr-1">
                        <span class="avatar avatar-md">
                            <img class="media-object rounded-circle" src="{{ $doctor->image }}" style="height: 40px;" alt=" ">
                            <i></i>
                        </span>
                    </div>
                    <div class="media-body w-100">
                        <span class="list-group-item-heading"> {{ $doctor->name }}  </span>
                        <p class="list-group-item-text mb-0">
                            <span class="blue-grey lighten-2 font-small-3"> {{ $doctor->phone }} </span>
                        </p>
                    </div>
                </a>

                @endforeach
            </div>
        </div>
    </div>
</div>


</div>
<!--/ Statistics -->
    </div>
  </div>
</div>
<!-- END: Content-->

@push('js')
<!-- BEGIN: Page Vendor JS-->
<script src="{{ asset('main/vendors/js/charts/chartist.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('main/vendors/js/charts/chartist-plugin-tooltip.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('main/vendors/js/timeline/horizontal-timeline.js')}}" type="text/javascript"></script>
<script src="{{ asset('main/vendors/js/extensions/dropzone.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('main/vendors/js/forms/icheck/icheck.min.js')}}" type="text/javascript"></script>
<!-- END: Page Vendor JS-->
<!-- BEGIN: Page JS-->
<script src="{{ asset('main/js/scripts/pages/dashboard-ecommerce.min.js')}}" type="text/javascript"></script>
<!-- END: Page JS-->
@endpush


@endsection
