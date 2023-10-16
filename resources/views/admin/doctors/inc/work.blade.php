<div class="tab-pane" id="worktimes" role="tabpanel" aria-labelledby="worktimes-tab" aria-expanded="false">

    <div class="card-header">
      <div class="card-title-wrap bar-primary">
        <div class="card-title">@lang('admin.work times')</div>
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
                     <th>{{__('admin.Day')}}</th>
                     <th>{{__('admin.From')}}</th>
                     <th>{{__('admin.To')}}</th>
                  </tr>
               </thead>
               <tbody>

                  @foreach ($doctor->worktimes as $index => $item)

                  <tr>
                    <td> {{ $index + 1 }} </td>
                    <td> {{ $item->day }}  </td>
                     <td>{{ $item->from }}</td>
                     <td>{{ $item->to }}</td>
                  </tr>


                  @endforeach

               </tbody>
            </table>
         </div>
        </div>
      </div>

  </div>

</div>
