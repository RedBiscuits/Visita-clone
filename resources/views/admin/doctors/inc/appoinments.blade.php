<div role="tabpanel" class="tab-pane active" id="homeIcon" aria-labelledby="homeIcon-tab" aria-expanded="true">

    <div class="card-header">
        <div class="card-title-wrap bar-primary">
          <div class="card-title">@lang('admin.appoinments')</div>
        </div>
      </div>

    <div class="table-responsive">
        <table class="table table-striped table-bordered zero-configuration">
            <thead>
                <tr>
                    <th>#</th>
                    <th>@lang('admin.patient')</th>
                    <th>@lang('admin.date') | @lang('admin.time')</th>
                    <th>@lang('admin.type')</th>
                    <th>@lang('admin.status')</th>
                    <th>@lang('admin.payment_method')</th>
                    <th>@lang('admin.payment_status')</th>
                    <th>@lang('admin.price')</th>

                </tr>
            </thead>
            <tbody>

              @foreach ($doctor->apoinments as $index => $dep)
              <tr>
                  <td>{{ $index + 1 }}</td>
                  <td>
                      <a href="{{ route('dashboard.patient.show', $dep->patient->id) }}" class="d-flex">

                          <div class="media-left pr-1">
                          <span class="avatar avatar-md">
                              <img class="media-object rounded-circle" src="{{ $dep->patient->image }}" alt=" ">
                              <i></i>
                          </span>
                      </div>
                      <div class="media-body w-100">
                          <span class="list-group-item-heading"> {{ $dep->patient->name }}  </span>
                      </div>
                      </a>
                  </td>

                  <td>{{ $dep->date }} | {{ $dep->time }}</td>
                  <td>{!! appoinmentType($dep->type) !!}</td>
                  <td>{!! appoinmentStatus($dep->status) !!}</td>
                  <td> {{ $dep->payment_method }} </td>
                  <td> {{ $dep->payment_status }} </td>
                  <td> {{ $dep->price }} </td>


                @endforeach

            </tbody>
            <tfoot>
              <tr>
                  <th>#</th>
                  <th>@lang('admin.patient')</th>
                  <th>@lang('admin.date') | @lang('admin.time')</th>
                  <th>@lang('admin.type')</th>
                  <th>@lang('admin.status')</th>
                  <th>@lang('admin.payment_method')</th>
                  <th>@lang('admin.payment_status')</th>
                  <th>@lang('admin.price')</th>

              </tr>
            </tfoot>
        </table>
    </div>

</div>
