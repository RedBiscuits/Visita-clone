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
              <div class="card-header">
                  <h4 class="card-title" id="basic-layout-round-controls"></h4>
                  <a class="heading-elements-toggle">
                      <i class="la la-ellipsis-v font-medium-3"></i>
                  </a>
                  <div class="heading-elements">
                      <ul class="list-inline mb-0">
                          <li>
                              <a data-action="collapse">
                                  <i class="ft-minus"></i>
                              </a>
                          </li>
                          <li>
                              <a data-action="reload">
                                  <i class="ft-rotate-cw"></i>
                              </a>
                          </li>
                          <li>
                              <a data-action="expand">
                                  <i class="ft-maximize"></i>
                              </a>
                          </li>
                          <li>
                              <a data-action="close">
                                  <i class="ft-x"></i>
                              </a>
                          </li>
                      </ul>
                  </div>
              </div>

              <div class="card-content collapse show">
                  <div class="card-body">




                                    <ul class="nav nav-tabs">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="base-tab1" data-toggle="tab" aria-controls="tab1" href="#tab1" aria-expanded="true">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="base-tab2" data-toggle="tab" aria-controls="tab2" href="#tab2" aria-expanded="false">Profile</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="base-tab3" data-toggle="tab" aria-controls="tab3" href="#tab3" aria-expanded="false">Account</a>
                                        </li>

                                    </ul>
                                    <div class="tab-content px-1 pt-1">
                                        <div role="tabpanel" class="tab-pane active" id="tab1" aria-expanded="true" aria-labelledby="base-tab1">

                                            <form class="form" method="POST" action="{{ route('dashboard.department.store') }}" enctype="multipart/form-data">
                                                @csrf

                                                  <div class="form-body">


                                                    <div class="mb-3">
                                                            <div class="form-group">
                                                                <label for="department_id"> @lang('admin.department') :</label>
                                                                <select  name="department_id" class="form-control round" id="department_id" >
                                                                  <option selected disabled> @lang('admin.choose') </option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="mb-3">
                                                            <div class="form-group">
                                                                <label for="lastName2"> @lang('admin.hospital') :</label>
                                                                <select  name="hospital" class="form-control round" id="hospital" >
                                                                  <option selected disabled> @lang('admin.choose') </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    @foreach (config('translatable.locales') as $locale)

                                                    <div class="mb-3">
                                                      <label class="col-form-label pt-0" for="name"> @lang('admin.' . $locale . '.doctor name')    </label>
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


                                        <div class="tab-pane" id="tab2" aria-labelledby="base-tab2">
                                            <p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie pastry cotton candy oat cake fruitcake jelly chupa chups. Pudding caramels pastry powder cake soufflé wafer caramels. Jelly-o pie cupcake.</p>
                                        </div>
                                        <div class="tab-pane" id="tab3" aria-labelledby="base-tab3">
                                            <p>Biscuit ice cream halvah candy canes bear claw ice cream cake chocolate bar donut. Toffee cotton candy liquorice. Oat cake lemon drops gingerbread dessert caramels. Sweet dessert jujubes powder sweet sesame snaps.</p>
                                        </div>
                                    </div>

                      <div class="card-text"></div>


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
