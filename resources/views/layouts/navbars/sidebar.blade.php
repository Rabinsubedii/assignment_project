<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="/home" class="simple-text logo-normal">
      {{ __('Cafe Culture') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>

      <li class="nav-item{{ $activePage == 'frontend.category.index' ? ' active' : '' }}">
      <a class="nav-link" href="{{ route('frontend.category.index') }}">
      <i class="material-icons">category</i>
      <span class="sidebar-normal">{{ __('Category') }} </span>
      </a>
      </li>

      

        <li class="nav-item{{ $activePage == 'frontend.product.index' ? ' active' : '' }}">
      <a class="nav-link" href="{{ url('products') }}">
      <i class="material-icons">menu_book</i>
      <span class="sidebar-normal">{{ __('Menu') }} </span>
      </a>
      </li>

      <li class="nav-item{{ $activePage == 'frontend.contact.index' ? ' active' : '' }}">
      <a class="nav-link" href="{{ url('contact') }}">
      <i class="material-icons">phone</i>
      <span class="sidebar-normal">{{ __('Contact') }} </span>
      </a>
      </li>

      {{-- <li class="nav-item{{ $activePage == 'frontend.setting.index' ? ' active' : '' }}">
      <a class="nav-link" href="{{ url('setting') }}">
      <i class="material-icons">settings</i>
      <span class="sidebar-normal">{{ __('Setting') }} </span>
      </a>
      </li> --}}

       <li class="nav-item{{ $activePage == 'frontend.setting.index' ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample">
            <i class="material-icons">settings</i>
          <p>{{ __('Settings') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="laravelExample">
          <ul class="nav">
            <li class="nav-item">

              <a class="nav-link"href="{{ url('add-setting') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('Add Logo') }} </span>
              </a>

              <a class="nav-link"href="{{ url('setting') }}">
                  <i class="material-icons">settings</i>
                <span class="sidebar-normal">{{ __('All setting') }} </span>
              </a>

            </li>

          </ul>
        </div>
      </li>

      <li class="nav-item{{ $activePage == 'frontend.testimonial.index' ? ' active' : '' }}">
      <a class="nav-link" href="{{ url('testimonial') }}">
      <i class="material-icons">autorenew</i>
      <span class="sidebar-normal">{{ __('Testimonial') }} </span>
      </a>
      </li>

      <li class="nav-item{{ $activePage == 'frontend.slider.index' ? ' active' : '' }}">
      <a class="nav-link" href="{{ url('slider') }}">
      <i class="material-icons">arrow_circle_right</i>
      <span class="sidebar-normal">{{ __('Slider') }} </span>
      </a>
      </li>

      <li class="nav-item{{ $activePage == 'frontend.todayspecial.index' ? ' active' : '' }}">
      <a class="nav-link" href="{{ url('todayspecial') }}">
      <i class="material-icons">lunch_dining</i>
      <span class="sidebar-normal">{{ __('Today Special') }} </span>
      </a>
      </li>

       <li class="nav-item{{ $activePage == 'frontend.order.index' ? ' active' : '' }}">
      <a class="nav-link" href="{{ url('orderpage') }}">
      <i class="material-icons">storefront</i>
      <span class="sidebar-normal">{{ __('Order') }} </span>
      </a>
      </li>

    </ul>
  </div>
</div>
