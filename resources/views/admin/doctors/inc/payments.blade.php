<div class="tab-pane" id="payments" role="tabpanel" aria-labelledby="payments-tab" aria-expanded="false">
    <div class="card-header">
        <div class="card-title-wrap bar-primary">
          <div class="card-title">@lang('admin.payments')</div>
        </div>
      </div>
      <div class="card-body">
        <div class="card-block">
          <div class="timeline">
            <div class="table-responsive">
                <table class="table table-striped table-bordered zero-configuration">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>@lang('admin.package')</th>
                            <th>@lang('admin.amount')</th>
                            <th>@lang('admin.currency')</th>
                            <th>@lang('admin.status')</th>
                            <th>@lang('admin.payment')</th>
                            <th>@lang('admin.action')</th>
                        </tr>
                    </thead>
                    <tbody>

                      @foreach ($doctor->payments as $index => $hospital)

                        <tr>
                            <td>{{ $index + 1  }}</td>
                            <td>
                              <a href="{{ route('dashboard.packages.show', $hospital->package->id) }}">

                                {{ $hospital->package->name }}
                              </a>

                             </td>
                            <td>   {{ $hospital->amount }} </td>
                            <td>   {{ $hospital->currency }} </td>
                              <td>
                                  @if ($hospital->is_success == 1)
                                  <span class="badge badge-success"> @lang('admin.success') </span>
                                  @else
                                  <span class="badge badge-danger"> @lang('admin.failed') </span>
                                  @endif
                              </td>
                              <td>
                                 <a href="{{ route('dashboard.subscriptions.show', $hospital->subscription->id) }}"
                                  class="btn btn-outline-info btn-sm"> <i class="fas fa-eye"></i> #{{ $hospital->subscription->id }}  </a>
                              </td>
                            <td>
                              <div class="btn-group mr-1 mb-1" >

                                  <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <span class="sr-only">Toggle Dropdown</span>
                                      <i class="fas fa-ellipsis-h"></i>
                                  </button>
                                  <div class="dropdown-menu"  x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(101px, 41px, 0px);">
                                      <a class="dropdown-item" href="#" ><i class="ft-eye"></i> @lang('admin.view')</a>
                                      <a class="dropdown-item" href="{{ route('dashboard.hospitals.edit',  $hospital->id) }}" ><i class="ft-edit"></i> @lang('admin.edit')</a>
                                      <div class="dropdown-divider" ></div>
                                      <form method="POST" action="{{ route('dashboard.hospitals.destroy',  $hospital->id) }}">
                                          @csrf
                                          @method('DELETE')
                                          <a class="dropdown-item  confirm"  type="button"><i class="ft-trash"></i> @lang('admin.delete')</a>
                                      </form>


                                  </div>
                              </div>

                            </td>
                        </tr>

                        @endforeach

                    </tbody>
                    <tfoot>
                      <tr>
                          <th>#</th>
                          <th>@lang('admin.package')</th>
                          <th>@lang('admin.amount')</th>
                          <th>@lang('admin.currency')</th>
                          <th>@lang('admin.status')</th>
                          <th>@lang('admin.payment')</th>
                          <th>@lang('admin.action')</th>
                      </tr>
                    </tfoot>
                </table>
           </div>
          </div>
        </div>

    </div>

</div>
