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
        <a href="{{ route('dashboard.')}}"><i class="ft-home"></i><span class="menu-title" data-i18n="">@lang('admin.dashboard')</span></a>
      </li>
      <li class=" nav-item">
        <a href="{{ route('dashboard.doctors.index') }}"><i class="ft-layers"></i>
            <span class="menu-title" data-i18n="">@lang('admin.doctors')</span>
        </a>
      </li>

      <li class=" nav-item">
        <a href="{{ route('dashboard.patient.index') }}"><i class="ft-users"></i>
            <span class="menu-title" data-i18n="">@lang('admin.patients')</span>
        </a>
      </li>

      <li class=" nav-item">
        <a href="{{ route('dashboard.department.index') }}">
        <i class="ft-layout"></i><span class="menu-title" data-i18n="">@lang('admin.departments')</span></a>
      </li>

      <li class=" nav-item">
        <a href="{{ route('dashboard.hospitals.index') }}">
        <i class="ft-layout"></i><span class="menu-title" data-i18n="">@lang('admin.hospitals')</span></a>
      </li>

      <li class=" nav-item">
        <a href="{{ route('dashboard.appoinments.index') }}"><i class="ft-zap"></i>
        <span class="menu-title" data-i18n="">@lang('admin.appointments')</span></a>
      </li>

      <li class="nav-item"><a href="{{ route('dashboard.subscriptions.index') }}"><i class="ft-aperture"></i>
        <span class="menu-title" data-i18n="">@lang('admin.subscriptions')</span></a>
      </li>


      <li class=" nav-item">
        <a href="{{ route('dashboard.packages.index') }}">
            <i class="ft-box"></i><span class="menu-title" data-i18n="">@lang('admin.packages')</span></a>
      </li>


      <li class=" nav-item">
        <a href="{{ route('dashboard.payments.index') }}"><i class="ft-box"></i>
          <span class="menu-title" data-i18n="">@lang('admin.payments')</span>
        </a>
      </li>

      <li class=" nav-item">
        <a href="{{ route('dashboard.offers.index') }}"><i class="ft-box"></i>
          <span class="menu-title" data-i18n="">@lang('admin.offers')</span>
        </a>
      </li>



      <li class=" nav-item">
        <a href="#"><i class="ft-bar-chart-2"></i><span class="menu-title" data-i18n="">@lang('admin.pharmacies')</span></a>
        <ul class="menu-content">

          <li>
            <a class="menu-item" href="{{ route('dashboard.pharmacy.index') }}">@lang('admin.pharmacies')</a>
          </li>

          <li>
            <a class="menu-item" href="{{ route('dashboard.productcategory.index') }}">@lang('admin.product categories')</a>

          </li>

          <li>
            <a class="menu-item" href="{{ route('dashboard.products.index') }}">@lang('admin.products')</a>
          </li>

          <li>
            <a class="menu-item" href="{{ route('dashboard.prescription.index') }}">@lang('admin.prescriptions')</a>
          </li>


        </ul>
      </li>


      <li class="nav-item">
        <a href="{{ route('dashboard.orders.index') }}">
          <i class="ft-grid"></i>
        <span class="menu-title" data-i18n="">@lang('admin.orders')</span>
       </a>
      </li>



      <li class=" nav-item">
        <a href="#"><i class="ft-bar-chart-2"></i><span class="menu-title" data-i18n="">@lang('admin.labs')</span></a>
        <ul class="menu-content">

          <li>
            <a class="menu-item" href="{{ route('dashboard.labs.index') }}">@lang('admin.labs')</a>
          </li>

          <li>
            <a href="#"><span class="menu-title" data-i18n="">@lang('admin.rays')</span></a>
            <ul class="menu-content">

              <li>
                <a class="menu-item" href="{{ route('dashboard.rayscategory.index') }}">@lang('admin.rayscategory')</a>
              </li>

              <li>
                <a class="menu-item" href="{{ route('dashboard.rays.index') }}">@lang('admin.rays')</a>
              </li>


            </ul>


          </li>

          <li>
            <a href="#"><span class="menu-title" data-i18n="">@lang('admin.analysis')</span></a>
            <ul class="menu-content">

              <li>
                <a class="menu-item" href="{{ route('dashboard.analysis.index') }}">@lang('admin.analysis')</a>
              </li>

              <li>
                <a class="menu-item" href="{{ route('dashboard.analysiscategory.index') }}">@lang('admin.analysiscategory')</a>
              </li>

            </ul>


          </li>

        </ul>
      </li>




      <li class="nav-item"><a href="{{ route('dashboard.insurance.index') }}"><i class="ft-grid"></i>
        <span class="menu-title" data-i18n="">@lang('admin.insurance')</span></a>
      </li>

      <li class=" nav-item"><a href="#"><i class="ft-bar-chart-2"></i><span class="menu-title" data-i18n="">@lang('admin.settings')</span></a>
        <ul class="menu-content">
          <li><a class="menu-item" href="{{ route('dashboard.general-setting') }}">@lang('admin.general setting')</a>
          </li>


          <li class=" nav-item"><a href="#"><i class="ft-smartphone"></i><span class="menu-title" data-i18n="">@lang('admin.app')</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="{{ route('dashboard.privacy') }}">@lang('admin.privacy')</a></li>
              <li><a class="menu-item" href="search.html">@lang('admin.faq')</a></li>
            </ul>
          </li>

          <li class=" nav-item"><a href="#"><i class="ft-sidebar"></i><span class="menu-title" data-i18n="">@lang('admin.website')</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="gallery-grid.html">Slider</a></li>
            </ul>
          </li>


        </ul>
      </li>



      <li class=" nav-item"><a href="#">
        <i class="ft-pie-chart"></i><span class="menu-title" data-i18n="">@lang('admin.reports')</span></a>
        <ul class="menu-content">

        </ul>
      </li>

      <li class=" nav-item"><a href="#"><i class="ft-grid"></i><span class="menu-title" data-i18n="">@lang('admin.notifications')</span></a>
      </li>


      <li class=" nav-item"><a href="#"><i class="ft-bar-chart-2"></i><span class="menu-title" data-i18n="">@lang('admin.contact')</span></a>
        <ul class="menu-content">

           <li>
            <a class="menu-item" href="{{ route('dashboard.contact.doctor') }}">@lang('admin.doctors')</a>
          </li>

           <li>
            <a class="menu-item" href="{{ route('dashboard.contact.patient') }}">@lang('admin.patients')</a>
          </li>



        </ul>
      </li>



      <li class=" nav-item"><a href="#"><i class="ft-server"></i>
        <span class="menu-title" data-i18n="">@lang('admin.reviews')</span></a>
      </li>
      {{--  <li class=" nav-item"><a href="https://themeselection.com/support"><i class="ft-life-buoy"></i><span class="menu-title" data-i18n="">Raise Support</span></a>
      </li>
      <li class=" nav-item"><a href=" "><i class="ft-book"></i><span class="menu-title" data-i18n="">Documentation</span></a>
      </li>  --}}
    </ul>
  </div>
</div>
<!-- END: Main Menu-->
