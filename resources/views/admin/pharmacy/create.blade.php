@extends('layouts.main')

@section('content')


<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-wrapper-before"></div>
      <div class="content-header row">
        <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
          <h3 class="content-header-title mb-0 d-inline-block">@lang('admin.pharmacies')</h3>
          <div class="breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper mr-1">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard.')}}">@lang('admin.home')</a>
                </li>
                <li class="breadcrumb-item"><a href="{{ route('dashboard.pharmacy.index')}}">@lang('admin.pharmacies')</a>
                </li>
                <li class="breadcrumb-item active"><a href="#">@lang('admin.add pharmacy')</a>
                </li>
              </ol>
            </div>
          </div>
        </div>

      </div>
      <div class="content-body">
<section id="basic-form-layouts">





  <div class="row match-height">

       <div class="col-md-6">
          <div class="card">
              <div class="card-header">


              </div>
              <div class="card-content collapse show">
                  <div class="card-body">

                      <div class="card-text"></div>

                      <form class="form" method="POST" action="{{ route('dashboard.pharmacy.store') }}" enctype="multipart/form-data">
                        @csrf

                          <div class="form-body">


                            <div class="mb-3">

                              <label class="col-form-label pt-0" for="name"> @lang('admin.name')  </label>

                              <input class="form-control round" id="name" required name="name" required value="{{ old('name') }}" type="text">

                            </div>

                            <div class="mb-3">

                              <label class="col-form-label pt-0" for="email"> @lang('admin.email')  </label>

                              <input class="form-control round" id="email" required name="email" required value="{{ old('email') }}" type="email">

                            </div>

                            <div class="mb-3">

                              <label class="col-form-label pt-0" for="phone"> @lang('admin.phone')  </label>

                              <input class="form-control round" id="phone" required name="phone" required value="{{ old('phone') }}" type="number">

                            </div>

                            <div class="mb-3">

                              <label class="col-form-label pt-0" for="password"> @lang('admin.password')  </label>

                              <input class="form-control round" id="password" required name="password" required type="password">

                            </div>
                            <div class="mb-3">

                              <label class="col-form-label pt-0" for="password_confirmation"> @lang('admin.password_confirmation')  </label>

                              <input class="form-control round" id="password_confirmation" required name="password_confirmation" required   type="password">

                            </div>


                            <div class="mb-3">

                              <label class="col-form-label pt-0" for="address"> @lang('admin.address')  </label>

                              <input class="form-control round" id="address" required name="address" required   type="text">

                            </div>



                              <div class="form-group">
                                <fieldset class="form-group">
                                    <label for="complaintinput1">@lang('admin.image')</label>
                                    <div class="custom-file">

                                        <input type="file" class="custom-file-input round" id="inputGroupFile01" name="image" required>
                                        <label class="custom-file-label" for="inputGroupFile01">@lang('admin.choose')</label>
                                    </div>
                                </fieldset>
                              </div>
                          </div>

                          <div class="form-actions">
                              <a href="{{ route('dashboard.pharmacy.index') }}" type="button" class="btn btn-danger mr-1">
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
