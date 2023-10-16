@extends('layouts.main')

@section('content')

<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-wrapper-before"></div>
      <div class="content-header row">
        <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
          <h3 class="content-header-title mb-0 d-inline-block">@lang('admin.appoinments')</h3>
        </div>

      <div class="content-header-right col-md-4 breadcrumb-new">
      <a href="{{ route('dashboard.doctors.create') }}"   class="mr-1 mb-1 btn btn-outline-info   float-end" style="float: inline-end;"> <i class="fas fa-plus"></i> @lang('admin.add new')</a>
      </div>

      </div>
      <div class="content-body">

<section id="configuration">
  <div class="row">
      <div class="col-12">
          <div class="card">

              <div class="card-content collapse show">
                  <div class="card-body card-dashboard">
                      <p class="card-text">   </p>
                      <div class="table-responsive">
                          <table class="table table-striped table-bordered zero-configuration">
                              <thead>
                                  <tr>
                                      <th>#</th>
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

                                @foreach ($appoinments as $index => $dep)

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
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="{{ route('dashboard.appoinments.edit', $dep->id) }}" class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1"> <i class="fas fa-edit"></i> @lang('admin.edit')</a>
                                            <form action="{{ route('dashboard.appoinments.destroy', $dep->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1"> <i class="fas fa-trash"></i> @lang('admin.delete')</button>
                                            </form>
                                        </div>
                                    </td>


                                  @endforeach

                              </tbody>
                              
                              <tfoot>
                                <tr>
                                    <th>#</th>
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
                              </tfoot>
                          </table>
                      </div>
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

@include('admin.inc.datatable')
