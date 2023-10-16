@extends('layouts.main')

@section('content')

<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-wrapper-before"></div>
      <div class="content-header row">
        <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
          <h3 class="content-header-title mb-0 d-inline-block">@lang('admin.settings')</h3>

        </div>

      </div>
      <div class="content-body">


<section id="vertical-tabs">

  <div class="row match-height">



      <div class="col-md-3">
        <div class="card">

            <div class="card-content">
                <div class="card-body">
                    <div class="nav-vertical p-2">
                    <ul class="nav nav-tabs nav-left">
                        <li class="nav-item">
                        <a class="nav-link active" id="baseVerticalLeft2-tab1" data-toggle="tab" aria-controls="tabVerticalLeft21" href="#tabVerticalLeft21" aria-expanded="true">
                          <i class="ft-box"></i> @lang('admin.general')</a>
                        </li>
                        {{--  <li class="nav-item">
                        <a class="nav-link" id="baseVerticalLeft2-tab2" data-toggle="tab" aria-controls="tabVerticalLeft22" href="#tabVerticalLeft22" aria-expanded="false"><i class="ft-user"></i> Profile</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" id="baseVerticalLeft2-tab3" data-toggle="tab" aria-controls="tabVerticalLeft23" href="#tabVerticalLeft23" aria-expanded="false"><i class="ft-play"></i> About</a>
                        </li>  --}}
                    </ul>
                </div>
                </div>
            </div>
        </div>

      </div>
      <div class="col-md-8">
          <div class="card">

              <div class="card-content">

                  <div class="nav-vertical p-2">

                          <div class="tab-content px-1">
                              <div role="tabpanel" class="tab-pane active" id="tabVerticalLeft21" aria-expanded="true" aria-labelledby="baseVerticalLeft2-tab1">
                                <form class="form" method="POST" action="{{ route('dashboard.general-setting.update') }}" enctype="multipart/form-data">
                                  @csrf

                                    <div class="form-body">


                                      <div class="mb-2">

                                        <label class="col-form-label pt-0" for="name"> @lang('admin.name')  </label>

                                        <input class="form-control round" id="name" required name="name" required value="{{ $setting->name }}" type="text">

                                      </div>

                                      <div class="mb-2">

                                        <label class="col-form-label pt-0" for="email"> @lang('admin.email')  </label>

                                        <input class="form-control round" id="email" required name="email" required value="{{ $setting->email }}" type="email">

                                      </div>

                                      <div class="mb-2">

                                        <label class="col-form-label pt-0" for="phone"> @lang('admin.phone')  </label>

                                        <input class="form-control round" id="phone" required name="phone" required value="{{ $setting->phone }}" type="number">

                                      </div>


                                      <div class="mb-2">

                                        <label class="col-form-label pt-0" for="address"> @lang('admin.address')  </label>

                                        <input class="form-control round" value="{{ $setting->address }}" id="address" required name="address" required   type="text">

                                      </div>



                                        <div class="form-group">
                                          <fieldset class="form-group">
                                              <label for="complaintinput1">@lang('admin.logo')</label>
                                              <div class="custom-file">

                                                  <input type="file" class="custom-file-input round" id="inputGroupFile01" name="logo"  >
                                                  <label class="custom-file-label" for="inputGroupFile01">@lang('admin.choose')</label>
                                              </div>
                                          </fieldset>
                                        </div>

                                        <div class="form-group">
                                          <fieldset class="form-group">
                                              <label for="complaintinput1">@lang('admin.favicon')</label>
                                              <div class="custom-file">

                                                  <input type="file" class="custom-file-input round" id="inputGroupFile01" name="favicon"  >
                                                  <label class="custom-file-label" for="inputGroupFile01">@lang('admin.choose')</label>
                                              </div>
                                          </fieldset>
                                        </div>

                                    </div>

                                    <div class="form-actions">

                                        <button type="submit" class="btn btn-primary">
                                            <i class="la la-check-square-o"></i> @lang('admin.save')
                                        </button>
                                    </div>
                                </form>

                              </div>
                              <div class="tab-pane" id="tabVerticalLeft22" aria-labelledby="baseVerticalLeft2-tab2">
                                  <p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie pastry cotton candy oat cake fruitcake jelly chupa chups. Pudding caramels pastry powder cake soufflé wafer caramels. Jelly-o pie cupcake.</p>
                              </div>
                              <div class="tab-pane" id="tabVerticalLeft23" aria-labelledby="baseVerticalLeft2-tab3">
                                  <p>Biscuit ice cream halvah candy canes bear claw ice cream cake chocolate bar donut. Toffee cotton candy liquorice. Oat cake lemon drops gingerbread dessert caramels. Sweet dessert jujubes powder sweet sesame snaps.</p>
                              </div>
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
