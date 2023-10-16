<li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown">
  <i class="ficon ft-bell bell-shake" id="notification-navbar-link"></i>
  <span class="badge badge-pill badge-sm badge-info badge-up badge-glow">
    {{ Auth::user()->unreadNotifications->count() }}
    </span></a>
    <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
      <div class="arrow_box_right">

        <li class="dropdown-menu-header">
          <h6 class="dropdown-header m-0"><span class="grey darken-2">@lang('admin.notifications')</span></h6>
        </li>

        <li class="scrollable-container media-list w-100">

          @foreach (Auth::user()->notifications as $noti)

          @if ($noti->data['type'] == 'order')


          <a href="javascript:void(0)">
            <div class="media">
              <div class="media-left align-self-center"><i class="ft-plus-square icon-bg-circle bg-cyan"></i></div>
              <div class="media-body">
                <h6 class="media-heading">{{ $noti->data['title'] }}</h6>
                <p class="notification-text font-small-3 text-muted">{{ $noti->data['body'] }}.</p><small>
                  <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">{{ $noti->created_at->diffForHumans() }}</time></small>
              </div>
            </div>
          </a>

          @endif

          @endforeach

            {{--  <a href="javascript:void(0)">
            <div class="media">
              <div class="media-left align-self-center"><i class="ft-download-cloud icon-bg-circle bg-red bg-darken-1"></i></div>
              <div class="media-body">
                <h6 class="media-heading red darken-1">99% Server load</h6>
                <p class="notification-text font-small-3 text-muted">Aliquam tincidunt mauris eu risus.</p><small>
                  <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Five hour ago</time></small>
              </div>
            </div></a><a href="javascript:void(0)">
            <div class="media">
              <div class="media-left align-self-center"><i class="ft-alert-triangle icon-bg-circle bg-yellow bg-darken-3"></i></div>
              <div class="media-body">
                <h6 class="media-heading yellow darken-3">Warning notifixation</h6>
                <p class="notification-text font-small-3 text-muted">Vestibulum auctor dapibus neque.</p><small>
                  <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Today</time></small>
              </div>
            </div></a><a href="javascript:void(0)">
            <div class="media">
              <div class="media-left align-self-center"><i class="ft-check-circle icon-bg-circle bg-cyan"></i></div>
              <div class="media-body">
                <h6 class="media-heading">Complete the task</h6><small>
                  <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Last week</time></small>
              </div>
            </div></a><a href="javascript:void(0)">
            <div class="media">
              <div class="media-left align-self-center"><i class="ft-file icon-bg-circle bg-teal"></i></div>
              <div class="media-body">
                <h6 class="media-heading">Generate monthly report</h6><small>
                  <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Last month</time></small>
              </div>
            </div></a>  --}}
          </li>
        {{--  <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="javascript:void(0)">Read all notifications</a></li>  --}}
      </div>
    </ul>
  </li>
