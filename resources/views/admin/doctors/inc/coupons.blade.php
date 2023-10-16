<div class="tab-pane" id="coupons" role="tabpanel" aria-labelledby="coupons-tab" aria-expanded="false">
    <div class="card-header">
        <div class="card-title-wrap bar-primary">
          <div class="card-title">@lang('admin.coupons')</div>
        </div>
      </div>
      <div class="card-body">
        <div class="card-block">
          <div class="timeline">
            <div class="table-responsive">
              <table class="table table-bordered table-striped">
                 <thead class="table-dark">
                    <tr>
                       <th>#</th>
                       <th>{{__('admin.name')}}</th>
                       <th>{{__('admin.code')}}</th>
                       <th>{{__('admin.discount')}}</th>
                       <th>{{__('admin.created_at')}}</th>
                    </tr>
                 </thead>
                 <tbody>

                    @foreach ($doctor->coupons as $index => $item)

                    <tr>
                      <td> {{ $index + 1 }}      </td>
                      <td> {{ $item->name }}     </td>
                      <td> {{ $item->code }}     </td>
                      <td> {{ $item->discount }} </td>
                      <td> {{ $item->created_at->format('Y-m-d') }}</td>
                    </tr>

                    @endforeach

                 </tbody>
              </table>
           </div>
          </div>
        </div>

    </div>

</div>
