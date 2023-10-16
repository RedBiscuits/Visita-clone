@extends('layouts.main')

@section('content')

<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-wrapper-before"></div>
      <div class="content-header row">
        <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
          <h3 class="content-header-title mb-0 d-inline-block">@lang('admin.labs')</h3>
        </div>

      <div class="content-header-right col-md-4 breadcrumb-new">
      <a  href="{{ route('dashboard.labs.create') }}" class="mr-1 mb-1 btn btn-outline-info  float-end" style="float: inline-end;"> <i class="fas fa-plus"></i> @lang('admin.add new')</a>
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
                                      <th>@lang('admin.name')</th>
                                      <th>@lang('admin.image')</th>
                                      <th>@lang('admin.phone')</th>
                                      <th>@lang('admin.email')</th>
                                      <th>@lang('admin.address')</th>
                                      <th>@lang('admin.action')</th>
                                  </tr>
                              </thead>
                              <tbody>

                                @foreach ($labs as $index => $hospital)

                                  <tr>
                                      <td>{{ $index + 1  }}</td>
                                      <td>{{ $hospital->name }}</td>
                                      <td><img src="{{ $hospital->image }}" class="img-fluid" width="100"> </td>
                                      <td>{{ $hospital->phone }}</td>
                                      <td>{{ $hospital->email }}</td>
                                      <td>{{ $hospital->address }}</td>

                                      <td>
                                        <div class="btn-group mr-1 mb-1" >

                                            <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                                <i class="fas fa-ellipsis-h"></i>
                                            </button>
                                            <div class="dropdown-menu"  x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(101px, 41px, 0px);">
                                                 <a class="dropdown-item" href="{{ route('dashboard.labs.edit',  $hospital->id) }}" ><i class="ft-edit"></i> @lang('admin.edit')</a>
                                                <div class="dropdown-divider" ></div>
                                                <form method="POST" action="{{ route('dashboard.labs.destroy',  $hospital->id) }}">
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
                                    <th>@lang('admin.address')</th>
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
