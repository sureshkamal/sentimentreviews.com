<div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="{{ asset('paper') }}/img/logo-small.png">
            </div>
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
            {{ __('Sentiment Reviews') }}
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="{{ $elementActive == 'dashboard' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'dashboard') }}">
                    <i class="nc-icon nc-bank"></i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
           
            <li class="{{ $elementActive == 'profile' ? 'active' : '' }}">
                <a href="{{ route('profile.edit') }}">
                    <i class="nc-icon nc-circle-10"></i>
                    <p>{{ __(' My Profile ') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'user' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'user') }}">
                    <i class="nc-icon nc-user-run"></i>
                    <p>{{ __(' User Management ') }}</p>
                </a>
            </li>
                    
        </ul>
    </div>
</div>
