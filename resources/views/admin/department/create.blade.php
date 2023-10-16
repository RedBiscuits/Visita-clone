@extends('layouts.main')

@section('content')


<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-wrapper-before"></div>
      <div class="content-header row">
        <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
          <h3 class="content-header-title mb-0 d-inline-block">@lang('admin.departments')</h3>
          <div class="breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper mr-1">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard.')}}">@lang('admin.home')</a>
                </li>
                <li class="breadcrumb-item"><a href="{{ route('dashboard.department.index')}}">@lang('admin.departments')</a>
                </li>
                <li class="breadcrumb-item active"><a href="#">@lang('admin.add department')</a>
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

                      <div class="card-text"></div>

                      <form class="form" method="POST" action="{{ route('dashboard.department.store') }}" enctype="multipart/form-data">
                        @csrf

                          <div class="form-body">

                            @foreach (config('translatable.locales') as $locale)

                            <div class="mb-3">
                              <label class="col-form-label pt-0" for="name"> @lang('admin.' . $locale . '.category title')    </label>
                              <input class="form-control round" id="name" name="{{ $locale }}[title]" required value="{{ old($locale . '.title') }}" type="text">

                            </div>

                            @endforeach

                              <div class="form-group">
                                <fieldset class="form-group">
                                    <label for="complaintinput1">@lang('admin.image')</label>
                                    <div class="custom-file">

                                        <input type="file" class="custom-file-input" id="inputGroupFile01" name="image" required>
                                        <label class="custom-file-label" for="inputGroupFile01">@lang('admin.choose')</label>
                                    </div>
                                </fieldset>
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
