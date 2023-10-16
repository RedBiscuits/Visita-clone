<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true" data-img="{{ asset('images/backgrounds/02.jpg')}}">
  <div class="navbar-header">
    <ul class="nav navbar-nav flex-row position-relative">
      <li class="nav-item mr-auto">
        <a class="navbar-brand" href="{{ route('dashboard.')}}">
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
        <a href="{{ route('pharmacy.')}}"><i class="ft-home"></i><span class="menu-title" data-i18n="">@lang('admin.dashboard')</span></a>
      </li>



      <li class=" nav-item">
        <a href="{{ route('pharmacy.medicine.index') }}">
            <i class="ft-box"></i><span class="menu-title" data-i18n="">@lang('admin.medicines')</span></a>
      </li>


      <li class=" nav-item">
        <a href="{{ route('pharmacy.medicine.create') }}"><i class="ft-box"></i>
          <span class="menu-title" data-i18n="">@lang('admin.add medicine')</span>
        </a>
      </li>

      <li class=" nav-item">
        <a href="{{ route('pharmacy.orders.index') }}"><i class="ft-box"></i>
          <span class="menu-title" data-i18n="">@lang('admin.orders')</span>
        </a>
      </li>


      <li class=" nav-item">
        <a href="{{ route('pharmacy.prescription.index') }}"><i class="ft-box"></i>
          <span class="menu-title" data-i18n="">@lang('admin.prescriptions')</span>
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
