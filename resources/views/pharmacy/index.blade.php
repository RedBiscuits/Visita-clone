@extends('layouts.pharmacy')


@section('content')

<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-wrapper-before"></div>
      <div class="content-header row">
      </div>
      <div class="content-body">

    <div class="row">


          <div class="col-lg-4 col-md-12">
              <div class="card pull-up bg-gradient-directional-primary">
                  <div class="card-header bg-hexagons-success">
                      <h4 class="card-title white">@lang('admin.orders')</h4>
                      <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                      <div class="heading-elements">
                          <ul class="list-inline mb-0">
                              <li>

                              </li>
                          </ul>
                      </div>
                  </div>
                  <div class="card-content collapse show bg-hexagons-success">
                      <div class="card-body">
                          <div class="media d-flex">
                              <div class="align-self-center width-100">
                                  <div id="Analytics-donut-chart" class="height-100 donutShadow"></div>
                              </div>
                              <div class="media-body text-right mt-1">
                                  <h3 class="font-large-2 white">{{$orders}}</h3>
                               </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <div class="col-lg-4 col-md-12">
              <div class="card pull-up bg-gradient-directional-success">
                  <div class="card-header bg-hexagons-success">
                      <h4 class="card-title white">@lang('admin.medicines')</h4>
                      <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                      <div class="heading-elements">
                          <ul class="list-inline mb-0">
                              <li>

                              </li>
                          </ul>
                      </div>
                  </div>
                  <div class="card-content collapse show bg-hexagons-success">
                      <div class="card-body">
                          <div class="media d-flex">
                              <div class="align-self-center width-100">
                                  <div id="Analytics-donut-chart" class="height-100 donutShadow"></div>
                              </div>
                              <div class="media-body text-right mt-1">
                                  <h3 class="font-large-2 white">{{$products}}</h3>
                               </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>


          <div class="col-lg-4 col-md-12">
              <div class="card pull-up bg-gradient-directional-danger">
                  <div class="card-header bg-hexagons-danger">
                      <h4 class="card-title white">@lang('admin.prescriptions')</h4>
                      <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                      <div class="heading-elements">
                          <ul class="list-inline mb-0">
                              <li>

                              </li>
                          </ul>
                      </div>
                  </div>
                  <div class="card-content collapse show bg-hexagons-danger">
                      <div class="card-body">
                          <div class="media d-flex">
                              <div class="align-self-center width-100">
                                  <div id="Analytics-donut-chart" class="height-100 donutShadow"></div>
                              </div>
                              <div class="media-body text-right mt-1">
                                  <h3 class="font-large-2 white">{{$prescriptions}}</h3>
                               </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>




  </div>
</div>



      </div>
    </div>
  </div>


@endsection

