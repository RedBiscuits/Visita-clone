@extends('layouts.lab')

@section('content')


<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-wrapper-before"></div>
      <div class="content-header row">
        <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
          <h3 class="content-header-title mb-0 d-inline-block">@lang('admin.analysis')</h3>
          <div class="breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper mr-1">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('lab.')}}">@lang('admin.home')</a>
                </li>
                <li class="breadcrumb-item"><a href="{{ route('lab.analysis.index')}}">@lang('admin.analysis')</a>
                </li>
                <li class="breadcrumb-item active"><a href="#">@lang('admin.edit analysis')</a>
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

                      <form class="form" method="POST" action="{{ route('lab.analysis.update', $analysis->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                          <div class="form-body">



                        <div class="mb-3">
                              <label class="col-form-label pt-0" for="name"> @lang('admin.category')    </label>
                              <select class="form-control round" max="100" id="name" name="category_id" required>
                                <option disabled selected>@lang('admin.choose category')</option>

                                @foreach ($categories as $category)

                                <option @if ($analysis->category_id == $category->id)   selected   @endif value="{{ $category->id }}">{{ $category->title }}</option>

                                @endforeach

                                </select>
                          </div>



                            @foreach (config('translatable.locales') as $locale)

                            <div class="mb-3">
                              <label class="col-form-label pt-0" for="title"> @lang('admin.' . $locale . '.analysis title')    </label>
                              <input class="form-control round" id="title" name="{{ $locale }}[title]" required value="{{$analysis->translate($locale)->title }}" type="text">

                            </div>

                            @endforeach

                            <div class="mb-3">
                                <label class="col-form-label pt-0" for="price"> @lang('admin.price')    </label>
                                <input class="form-control round"   id="price" name="price" required value="{{ $analysis->price }}" type="number">
                            </div>


                          </div>

                          <div class="form-actions">
                              <a href="{{ route('lab.analysis.index') }}" type="button" class="btn btn-danger mr-1">
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
