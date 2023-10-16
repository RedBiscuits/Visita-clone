@extends('layouts.main')

@section('content')

<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-wrapper-before"></div>
      <div class="content-header row">
        <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
          <h3 class="content-header-title mb-0 d-inline-block">@lang('admin.doctors')</h3>
        </div>


      </div>
      <div class="content-body">

<section id="configuration">
  <div class="row">
      <div class="col-12">
          <div class="card">

              <div class="card-content">
                  <div class="card-body card-dashboard">
                      <p class="card-text">   </p>
                      <div class="table-responsive">
                          <table class="table table-striped table-bordered zero-configuration">
                              <thead>
                                  <tr>
                                      <th>#</th>
                                      <th>@lang('admin.name')</th>
                                      <th>@lang('admin.image')</th>
                                      <th>@lang('admin.phone')</th>
                                      <th>@lang('admin.email')</th>
                                      <th>@lang('admin.department')</th>
                                      <th>@lang('admin.appoinments')</th>
                                      <th>@lang('admin.status')</th>
                                      <th>@lang('admin.action')</th>
                                  </tr>
                              </thead>
                              <tbody>
                                @foreach ($doctors as $index => $dep)


                                  <tr>
                                      <td>{{ $index + 1  }}</td>
                                      <td>{{ $dep->name }}</td>
                                      <td><img src="{{ $dep->image }}" class="img-fluid" width="100"> </td>
                                      <td>{{ $dep->phone }}</td>
                                      <td>{{ $dep->email }}</td>
                                      <td>{{ $dep->department->title }}</td>
                                      <td>{{ $dep->apoinments->count() }}</td>
                                      <td>

                                        <form method="POST" action="{{ route('dashboard.doctors.status')}}">
                                            @csrf

                                          <input type="hidden" name="id" value="{{ $dep->id }}">

                                        @if ($dep->status == 1)
                                         <a href="" class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1 block"><i class="fas fa-edit"></i>@lang('admin.active')</a>
                                        @else
                                        <a href="" class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1 activate"><i class="fas fa-edit"></i>@lang('admin.inactive')</a>
                                        @endif
                                        </form>
                                        </td>
                                        <td>
                                            <div class="btn-group mr-1 mb-1" >

                                                <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="sr-only">Toggle Dropdown</span>
                                                    <i class="fas fa-ellipsis-h"></i>
                                                </button>
                                                <div class="dropdown-menu"  x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(101px, 41px, 0px);">
                                                    <a class="dropdown-item" href="{{ route('dashboard.doctors.show',  $dep->id) }}" ><i class="ft-eye"></i> @lang('admin.view')</a>
                                                    <a class="dropdown-item" href="{{ route('dashboard.doctors.edit',  $dep->id) }}" ><i class="ft-edit"></i> @lang('admin.edit')</a>
                                                    <div class="dropdown-divider" ></div>
                                                    <form method="POST" action="{{ route('dashboard.doctors.destroy',  $dep->id) }}">
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
                                    <th>@lang('admin.name')</th>
                                    <th>@lang('admin.image')</th>
                                    <th>@lang('admin.phone')</th>
                                    <th>@lang('admin.email')</th>
                                    <th>@lang('admin.department')</th>
                                    <th>@lang('admin.appoinments')</th>
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
