@extends('layouts.main')

@section('content')


<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-wrapper-before"></div>
      <div class="content-header row">
        <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
          <h3 class="content-header-title mb-0 d-inline-block">@lang('admin.packages')</h3>
          <div class="breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper mr-1">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard.')}}">@lang('admin.home')</a>
                </li>
                <li class="breadcrumb-item"><a href="{{ route('dashboard.packages.index')}}">@lang('admin.packages')</a>
                </li>
                <li class="breadcrumb-item active"><a href="#">@lang('admin.edit package')</a>
                </li>
              </ol>
            </div>
          </div>
        </div>
        <div class="content-header-right col-md-4 col-12 d-block d-md-none"><a class="btn btn-warning btn-min-width float-md-right box-shadow-4 mr-1 mb-1" href="chat-application.html"><i class="ft-mail"></i> Email</a></div>
      </div>
      <div class="content-body">
<section id="basic-form-layouts">


  <div class="row match-height">

       <div class="col-md-6">
          <div class="card">
              <div class="card-header">
                  <h4 class="card-title" id="basic-layout-round-controls"></h4>

              </div>

              <div class="card-content collapse show">
                  <div class="card-body">

                      <div class="card-text"></div>

                      <form class="form" method="POST" action="{{ route('dashboard.packages.store') }}" enctype="multipart/form-data">
                        @csrf

                          <div class="form-body">

                            @foreach (config('translatable.locales') as $locale)

                            <div class="mb-3">
                              <label class="col-form-label pt-0" for="name"> @lang('admin.' . $locale . '.package name')    </label>
                              <input class="form-control round" id="name" name="{{ $locale }}[name]" required value="{{ old($locale . '.name') }}" type="text">

                            </div>

                            @endforeach

                            <div class="mb-3">
                                <label class="col-form-label pt-0" for="name"> @lang('admin.price')    </label>
                                <input class="form-control round" id="name" name="price" required value="{{ old('price') }}" type="number">
                            </div>

                            <div class="mb-3">
                                <label class="col-form-label pt-0" for="name"> @lang('admin.duration')    </label>

                                <select class="form-control round" id="name" name="duration" required>

                                @foreach (packageDuration() as $duration)
                                <option value="{{ $duration }}"> {{ $duration }} </option>
                                @endforeach

                                </select>
                            </div>

                          </div>

                          <div class="form-actions">
                              <a href="{{ route('dashboard.doctors.index') }}" type="button" class="btn btn-danger mr-1">
                                  <i class="ft-x"></i> @lang('admin.cancel')
                              </a>
                              <button type="submit" class="btn btn-primary">
                                  <i class="la la-check-square-o"></i> @lang('admin.save')
                              </button>
                          </div>
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
