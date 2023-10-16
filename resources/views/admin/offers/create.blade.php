@extends('layouts.main')

@section('content')


<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-wrapper-before"></div>
      <div class="content-header row">
        <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
          <h3 class="content-header-title mb-0 d-inline-block">@lang('admin.offers')</h3>
          <div class="breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper mr-1">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard.')}}">@lang('admin.home')</a>
                </li>
                <li class="breadcrumb-item"><a href="{{ route('dashboard.offers.index')}}">@lang('admin.offers')</a>
                </li>
                <li class="breadcrumb-item active"><a href="#">@lang('admin.add offer')</a>
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

                      <form class="form" method="POST" action="{{ route('dashboard.offers.store') }}" enctype="multipart/form-data">
                        @csrf

                          <div class="form-body">



                        <div class="mb-3">
                              <label class="col-form-label pt-0" for="name"> @lang('admin.doctor')    </label>
                              <select class="form-control round" max="100" id="name" name="doctor_id" required>
                                <option disabled selected>@lang('admin.choose doctor')</option>

                                @foreach ($doctors as $doctor)

                                <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>

                                @endforeach

                                </select>
                          </div>



                            @foreach (config('translatable.locales') as $locale)

                            <div class="mb-3">
                              <label class="col-form-label pt-0" for="title"> @lang('admin.' . $locale . '.offer title')    </label>
                              <input class="form-control round" id="title" name="{{ $locale }}[title]" required value="{{ old($locale . '.title') }}" type="text">

                            </div>


                            <div class="mb-3">
                              <label class="col-form-label pt-0" for="content"> @lang('admin.' . $locale . '.offer content')    </label>
                              <textarea class="form-control round" id="content" name="{{ $locale }}[content]" required   type="text">{{ old($locale . '.content') }}</textarea>

                            </div>

                            @endforeach

                            <div class="mb-3">
                                <label class="col-form-label pt-0" for="name"> @lang('admin.discount')    </label>
                                <input class="form-control round" max="100" id="name" name="discount" required value="{{ old('discount') }}" type="number">
                            </div>

                            <div class="mb-3">
                                <label class="col-form-label pt-0" for="name"> @lang('admin.image')    </label>
                                <input class="form-control round"   id="name" name="image" required   type="file">
                            </div>


                          </div>

                          <div class="form-actions">
                              <a href="{{ route('dashboard.offers.index') }}" type="button" class="btn btn-danger mr-1">
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
