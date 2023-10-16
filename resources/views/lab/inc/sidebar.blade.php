<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true" data-img="{{ asset('images/backgrounds/02.jpg')}}">
  <div class="navbar-header">
    <ul class="nav navbar-nav flex-row position-relative">
      <li class="nav-item mr-auto">
        <a class="navbar-brand" href="{{ route('lab.')}}">
            <img class="brand-logo" alt="" src="{{ $setting->logo }}"/>
          <h3 class="brand-text">{{ $setting->name }}</h3></a></li>
      <li class="nav-item d-none d-md-block nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
        <i class="toggle-icon ft-disc font-medium-3" data-ticon="ft-disc"></i></a></li>
      <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
    </ul>
  </div>
  <div class="navigation-background"></div>
  <div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
      <li class=" nav-item">
        <a href="{{ route('lab.')}}"><i class="ft-home"></i><span class="menu-title" data-i18n="">@lang('admin.dashboard')</span></a>
      </li>




      <li class=" nav-item"><a href="#"><i class="ft-box"></i>
        <span class="menu-title" data-i18n="">@lang('admin.rays')</span></a>
        <ul class="menu-content">

           <li>
            <a class="menu-item" href="{{ route('lab.rays.index') }}">@lang('admin.view all')</a>
          </li>

           <li>
            <a class="menu-item" href="{{ route('lab.rays.create') }}">@lang('admin.add rays')</a>
          </li>

        </ul>
      </li>

      <li class=" nav-item"><a href="#"><i class="ft-box"></i>
        <span class="menu-title" data-i18n="">@lang('admin.analysis')</span></a>
        <ul class="menu-content">

           <li>
            <a class="menu-item" href="{{ route('lab.analysis.index') }}">@lang('admin.view all')</a>
          </li>

           <li>
            <a class="menu-item" href="{{ route('lab.analysis.create') }}">@lang('admin.add analysis')</a>
          </li>

        </ul>
      </li>


      <li class=" nav-item">
        <a href="{{ route('lab.orders.index') }}"><i class="ft-box"></i>
          <span class="menu-title" data-i18n="">@lang('admin.orders')</span>
        </a>
      </li>

      <li class=" nav-item">
        <a href="{{ route('lab.orders.index') }}"><i class="ft-box"></i>
          <span class="menu-title" data-i18n="">@lang('admin.wallet')</span>
        </a>
      </li>

      <li class=" nav-item">
        <a href="#"><i class="ft-box"></i>
          <span class="menu-title" data-i18n="">@lang('admin.payments')</span>
        </a>
      </li>






    </ul>
  </div>
</div>
<!-- END: Main Menu-->
