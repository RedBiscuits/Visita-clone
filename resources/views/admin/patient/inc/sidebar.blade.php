<div class="col-xl-3 col-lg-5 col-md-12 sidebar">

    <div class="card">
      <div class="card-header pb-0">
        <div class="card-title-wrap bar-primary">
          <div class="card-title">@lang('admin.info')</div>
          <hr>
        </div>
      </div>
      <div class="card-content">
        <div class="card-body p-0 pt-0 pb-1">
          <ul>
            <li>
                <i class="fa fa-phone"></i>
              {{ $patient->phone }}
            </li>
            <li>
                <i class="fa fa-envelope"></i>
              {{ $patient->email }}
            </li>
            <li>
                <i class="fas fa-layer-group"></i>
                {{ ($patient->department) ? $patient->department->title : 'N/A' }}
            </li>
            <li>
                <i class="fa fa-building"></i>
                {{ ($patient->hospital) ? $patient->hospital->title : 'N/A' }}
            </li>
          </ul>

        </div>
      </div>

    </div>




  </div>
