@extends('layouts.pharmacy')

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
                <li class="breadcrumb-item"><a href="{{ route('pharmacy.')}}">@lang('admin.home')</a>
                </li>
                <li class="breadcrumb-item"><a href="{{ route('pharmacy.medicine.index')}}">@lang('admin.medicines')</a>
                </li>
                <li class="breadcrumb-item active"><a href="#">@lang('admin.add medicine')</a>
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

                      <form class="form" method="POST" action="{{ route('pharmacy.medicine.store') }}" enctype="multipart/form-data">
                        @csrf

                          <div class="form-body">

                            <div class="mb-2">
                                <label class="col-form-label pt-0" for="name"> @lang('admin.categories')    </label>

                                <select class="form-control round" max="100" id="name" name="category_id" required>
                                  <option disabled selected>@lang('admin.choose category')</option>

                                  @foreach ($categories as $category)

                                  <option value="{{ $category->id }}">{{ $category->title }}</option>

                                  @endforeach

                                  </select>
                            </div>



                              @foreach (config('translatable.locales') as $locale)

                              <div class="mb-2">
                                <label class="col-form-label pt-0" for="title"> @lang('admin.' . $locale . '.product title')    </label>
                                <input class="form-control round" id="title" name="{{ $locale }}[title]" required value="{{ old($locale . '.title') }}" type="text">

                              </div>


                            <div class="mb-3">
                                <label class="col-form-label pt-0" for="content"> @lang('admin.' . $locale . '.product content')    </label>
                                <textarea class="form-control round" id="content" name="{{ $locale }}[content]" required   type="text">{{ old($locale . '.content') }}</textarea>

                              </div>

                              @endforeach

                            <div class="mb-2">

                              <label class="col-form-label pt-0" for="price"> @lang('admin.price')  </label>

                              <input class="form-control round" id="price" required name="price" required value="{{ old('price') }}" type="text">

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
                              <a href="{{ route('pharmacy.medicine.index') }}" type="button" class="btn btn-danger mr-1">
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
