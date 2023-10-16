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
              {{ $doctor->phone }}
            </li>
            <li>
                <i class="fa fa-envelope"></i>
              {{ $doctor->email }}
            </li>
            <li>
                <i class="fas fa-layer-group"></i>
                {{ ($doctor->department) ? $doctor->department->title : 'N/A' }}
            </li>
            <li>
                <i class="fa fa-building"></i>
                {{ ($doctor->hospital) ? $doctor->hospital->title : 'N/A' }}
            </li>



          </ul>
          <form method="POST" action="{{ route('dashboard.doctors.status')}}" class="mt-2">
            @csrf

          <input type="hidden" name="id" value="{{ $doctor->id }}">

        @if ($doctor->status == 1)
         <a href="" class="btn btn-outline-primary btn-min-width box-shadow-3 mr-2    mb-1 block"><i class="fas fa-edit"></i>@lang('admin.active')</a>
        @else
        <a href="" class="btn btn-outline-danger btn-min-width box-shadow-3  mb-1 activate"><i class="fas fa-edit"></i>@lang('admin.inactive')</a>
        @endif
        </form>
        </div>
      </div>

    </div>



    <div class="card">
      <div class="card-header pb-0">
        <div class="card-title-wrap bar-primary">
          <div class="card-title">@lang('admin.personal_id')</div>
          <hr>
        </div>
      </div>
      <div class="card-content">
        <div class="card-body p-0 pt-0 pb-1">
          <ul>
            <li>
                <span class="mt-3 mb-3"> @lang('admin.personal_id')</span> <br>
             <a href="" target="_blank"> <img src="{{ $doctor->national_id }}" class="img-fluid media-object" style="max-width: 300px;"/> </a>
            </li>
            <li class="mt-3 mb-3">
                <span class="mt-3 mb-3"> @lang('admin.national_number')</span> <br>
              {{ $doctor->national_number }}
            </li>

          </ul>
        </div>
      </div>

    </div>

    <div class="card">
      <div class="card-header pb-0">
        <div class="card-title-wrap bar-primary">
          <div class="card-title">@lang('admin.rating')</div>
          <hr>
        </div>
      </div>
      <div class="card-content">
        <div class="card-body p-0 pt-0 pb-1">
          <ul>

            <li>
              <strong>4.9 stars </strong><br>
              <i class="la la-star yellow darken-2"></i>
              <i class="la la-star yellow darken-2"></i>
              <i class="la la-star yellow darken-2"></i>
              <i class="la la-star yellow darken-2"></i>
              <i class="la la-star yellow darken-2"></i>
            </li>
              <li>
                <strong>1022</strong> Hours Worked</li>
              <li>
                <strong>26</strong> Jobs</li>

          </ul>
        </div>
      </div>

    </div>
    <div class="card">
      <div class="card-header pb-0">
        <div class="card-title-wrap bar-primary">
          <div class="card-title">@lang('admin.address')</div>
          <hr>
        </div>
      </div>
      <div class="card-content">
        <div class="card-body p-0 pt-0 pb-1">
          <ul>


          </ul>
        </div>
      </div>

    </div>


  </div>
