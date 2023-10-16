@extends('layouts.main')

@section('content')

<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-wrapper-before"></div>
      <div class="content-header row">
        <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
          <h3 class="content-header-title mb-0 d-inline-block">@lang('admin.subscriptions')</h3>
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
                                      <th>@lang('admin.doctor')</th>
                                      <th>@lang('admin.package')</th>
                                      <th>@lang('admin.start_date')</th>
                                      <th>@lang('admin.end_date')</th>
                                      <th>@lang('admin.status')</th>
                                      <th>@lang('admin.payment')</th>
                                      <th>@lang('admin.action')</th>
                                  </tr>
                              </thead>
                              <tbody>

                                @foreach ($subscriptions as $index => $hospital)

                                  <tr>
                                      <td>{{ $index + 1  }}</td>
                                      <td>
                                        <a href="{{ route('dashboard.doctors.show', $hospital->doctor->id) }}" class="media border-0">
                                            <div class="media-left pr-1">
                                                <span class="avatar avatar-md">
                                                    <img class="media-object rounded-circle" src="{{ $hospital->doctor->image }}" alt="#">
                                                    <i></i>
                                                </span>
                                            </div>
                                            <div class="media-body w-100">
                                                <span class="list-group-item-heading">
                                                    {{ $hospital->doctor->name }}
                                                </span>
                                            </div>
                                        </a>
                                </td>

                                      <td>
                                        <a href="{{ route('dashboard.packages.show', $hospital->package->id) }}">

                                          {{ $hospital->package->name }}
                                        </a>

                                       </td>
                                      <td>   {{ $hospital->start_date }} </td>
                                      <td>   {{ $hospital->expire_date }} </td>
                                        <td>
                                            @if ($hospital->status == 1)
                                            <span class="badge badge-success"> @lang('admin.active') </span>
                                            @else
                                            <span class="badge badge-danger"> @lang('admin.inactive') </span>
                                            @endif
                                        </td>
                                        <td>
                                           <a href="{{ route('dashboard.payments.show', $hospital->payment->id) }}"
                                            class="btn btn-outline-info btn-sm"> <i class="fas fa-eye"></i> #{{ $hospital->payment_id }}  </a>
                                      <td>
                                        <div class="btn-group mr-1 mb-1" >

                                            <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                                <i class="fas fa-ellipsis-h"></i>
                                            </button>
                                            <div class="dropdown-menu"  x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(101px, 41px, 0px);">
                                                <a class="dropdown-item" href="#" ><i class="ft-eye"></i> @lang('admin.view')</a>
                                                <a class="dropdown-item" href="{{ route('dashboard.hospitals.edit',  $hospital->id) }}" ><i class="ft-edit"></i> @lang('admin.edit')</a>
                                                <div class="dropdown-divider" ></div>
                                                <form method="POST" action="{{ route('dashboard.hospitals.destroy',  $hospital->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a class="dropdown-item  confirm"  type="button"><i class="ft-trash"></i> @lang('admin.delete')</a>
                                                </form>


                                            </div>
                                        </div>

                                      </td>
                                  </tr>

                                  @endforeach

                              </tbody>
                              <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>@lang('admin.doctor')</th>
                                    <th>@lang('admin.package')</th>
                                    <th>@lang('admin.start_date')</th>
                                    <th>@lang('admin.end_date')</th>
                                    <th>@lang('admin.status')</th>
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
