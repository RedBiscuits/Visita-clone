@extends('layouts.main')

@section('content')

<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-wrapper-before"></div>
      <div class="content-header row">
        <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
          <h3 class="content-header-title mb-0 d-inline-block">@lang('admin.profile')</h3>
          <div class="breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper mr-1">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('dashboard.')}}">@lang('admin.home')</a>
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

              <div class="card-content collapse show">
                  <div class="card-body">

                    <form class="form" method="POST" action="{{ route('dashboard.profile.update') }}" enctype="multipart/form-data">
                        @csrf

                          <div class="form-body">
                              <h4 class="form-section">
                                  <i class="ft-flag"></i> @lang('admin.general info')</h4>
                              <div class="form-group">
                                  <label for="name">@lang('admin.name')</label>
                                  <input type="text" id="name" class="form-control" value="{{ $user->name }}"  name="name" required>
                              </div>


                              <div class="form-group">
                                  <label for="phone">@lang('admin.email')</label>
                                  <input type="text" id="phone" class="form-control" value="{{ $user->email }}"   name="email" required>
                              </div>


                              <div class="form-group">
                                  <label for="image">@lang('admin.image')</label>
                                  <input type="file" id="image" class="form-control"     name="image">
                              </div>

                          </div>

                          <div class="form-actions">

                              <button type="submit" class="btn btn-primary">
                                  <i class="la la-check-square-o"></i> Save
                              </button>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>

    <div class="col-md-6">
          <div class="card">

              <div class="card-content">
                  <div class="card-body">

                      <form class="form" method="POST" action="{{ route('dashboard.updatepassword') }}">
                        @csrf


                          <div class="form-body">
                              <h4 class="form-section">
                                  <i class="ft-flag"></i> @lang('admin.change password')</h4>
                              <div class="form-group">
                                  <label for="name">@lang('admin.password')</label>
                                  <input type="text" id="name" class="form-control"  autocomplete="new-password"  name="password" required>
                              </div>

                              <div class="form-group">
                                  <label for="password_confirmation">@lang('admin.password_confirmation')</label>
                                  <input type="text" id="password_confirmation" class="form-control"    name="password_confirmation" required>
                              </div>

                          </div>

                          <div class="form-actions">

                              <button type="submit" class="btn btn-primary">
                                  <i class="la la-check-square-o"></i> Save
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
