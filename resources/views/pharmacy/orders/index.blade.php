@extends('layouts.pharmacy')

@section('content')

<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-wrapper-before"></div>
      <div class="content-header row">
        <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
          <h3 class="content-header-title mb-0 d-inline-block">@lang('admin.pharmacy orders')</h3>
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
                                      <th>@lang('admin.items count')</th>
                                      <th>@lang('admin.total')</th>
                                      <th>@lang('admin.status')</th>
                                      <th>@lang('admin.created at')</th>
                                      <th>@lang('admin.payment_method')</th>
                                      <th>@lang('admin.action')</th>
                                  </tr>
                              </thead>
                              <tbody>

                                @foreach ($orders as $index => $dep)

                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>  {{ $dep->patient->name }}  </td>
                                     <td> {{ $dep->items->count() }} </td>
                                    <td> {{ $dep->total_price }} </td>
                                    <td>{!! appoinmentStatus($dep->status) !!}</td>
                                    <td>{{ $dep->created_at->format('Y-m-d') }}</td>
                                    <td> {{ $dep->payment_method }} </td>
                                    <td>
                                        <div class="btn-group mr-1 mb-1" >

                                            <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                                <i class="fas fa-ellipsis-h"></i>
                                            </button>
                                            <div class="dropdown-menu"  x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(101px, 41px, 0px);">
                                                <a class="dropdown-item" href="{{ route('pharmacy.orders.show',  $dep->id) }}" ><i class="ft-eye"></i> @lang('admin.view')</a>
                                            </div>
                                        </div>

                                      </td>


                                  @endforeach

                              </tbody>

                              <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>@lang('admin.patient')</th>
                                    <th>@lang('admin.items count')</th>
                                    <th>@lang('admin.total')</th>
                                    <th>@lang('admin.status')</th>
                                    <th>@lang('admin.created at')</th>
                                    <th>@lang('admin.payment_method')</th>
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
