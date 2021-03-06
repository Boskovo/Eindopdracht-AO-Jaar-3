<ul class="nav flex-column pt-3 pt-md-0">
    <li class="nav-item">
        <a href="{{ route('home') }}" class="nav-link d-flex align-items-center">
            <span class="sidebar-icon me-3">
                <img src="{{ asset('images/brand/fine-long-light.svg') }}" height="30" width="250" alt="Volt Logo">
            </span>
        </a>
    </li>

    <li class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
        <a href="{{ route('home') }}" class="nav-link">
            <span class="sidebar-icon">
                <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20"
                     xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                    <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                </svg>
            </span>
            <span class="sidebar-text">{{ __('Dashboard') }}</span>
        </a>
    </li>

    <li class="nav-item {{ request()->routeIs('vacancies.index') ? 'active' : '' }}">
        <a href="{{ route('vacancies.index') }}" class="nav-link">
            <span class="sidebar-icon me-3">
              <i class="fab fa-buffer"></i>
            </span>
            <span class="sidebar-text">{{ __('Vacatures') }}</span>
        </a>
    </li>

    <li class="nav-item {{ request()->routeIs('student.index') ? 'active' : '' }}">
        <a href="{{ route('student.index') }}" class="nav-link">
            <span class="sidebar-icon me-3">
               <i class="fas fa-user-graduate"></i>
            </span>
            <span class="sidebar-text">{{ __('Studenten') }}</span>
        </a>
    </li>

    <li class="nav-item {{ request()->routeIs('student.grades.index') ? 'active' : '' }}">
        <a href="{{ route('student.grades.index') }}" class="nav-link">
            <span class="sidebar-icon me-3">
               <i class="fas fa-school"></i>
            </span>
            <span class="sidebar-text">{{ __('Klassen') }}</span>
        </a>
    </li>

    <li class="nav-item {{ request()->routeIs('bedrijven.index') ? 'active' : '' }}">
        <a href="{{ route('bedrijven.index') }}" class="nav-link">
            <span class="sidebar-icon me-3">
               <i class="fas fa-building"></i>
            </span>
            <span class="sidebar-text">{{ __('Bedrijven') }}</span>
        </a>
    </li>

    <li class="nav-item {{ request()->routeIs('settings') ? 'active' : '' }}">
        <a href="{{ route('settings') }}" class="nav-link">
            <span class="sidebar-icon me-3">
                <i class="fas fa-sliders-h"></i>
            </span>
            <span class="sidebar-text">{{ __('Instellingen') }}</span>
        </a>
    </li>

    <hr>
    <li class="p-1 align-bottom nav-item {{ request()->routeIs('profile') ? 'active' : '' }}">
        <div class="row">
            <div class="col-md-10 align-end" data-bs-toggle="tooltip" data-bs-placement="top" title="Profiel">
                <a href="{{ route('profile') }}">
                    <div class="media d-flex align-items-center me-3">
                        <img class="avatar rounded-circle"
                             src="https://ui-avatars.com/api/?background=random&name={{ Auth::user()->firstname }}{{ Auth::user()->lastname  }}"
                             alt="{{ Auth::user()->firstname }}{{ Auth::user()->lastname }}">
                        <div class="media-body ms-2 text-dark align-items-center d-none d-lg-block">
                            <span
                                class="mb-0 font-small fw-bold text-white">{{ Auth::user()->firstname}} {{ Auth::user()->lastname  }}</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2 text-danger text-end pt-1">
                <a href="" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                    <i class="fas fa-power-off text-end text-danger" data-bs-toggle="tooltip" data-bs-placement="top"
                       title="Uitloggen"></i>
                </a>
            </div>
        </div>
    </li>
</ul>
