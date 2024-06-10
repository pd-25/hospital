<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item {{ Route::is('admin.dashboard') ? 'active' : '' }}">
            <a class="nav-link " href="{{ route('admin.dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>



        <li class="nav-item {{ Route::is('jobs.index') ? 'active' : '' }}">
            <a class="nav-link " href="{{ route('jobs.index') }}">
                <i class="ri-group-fill"></i>
                <span>Jobs</span>
            </a>
        </li>

        <li class="nav-item {{ Route::is('admin.getApplication') ? 'active' : '' }}">
            <a class="nav-link " href="{{ route('admin.getApplication') }}">
                <i class="ri-group-fill"></i>
                <span>Job Applications</span>
            </a>
        </li>



      <li class="nav-item {{ Route::is('doctors.index') ? 'active' : '' }}">
            <a class="nav-link " href="{{route('doctors.index')}}">
                <i class="ri-group-fill"></i>
                <span>Doctors</span>
            </a>
        </li>

        <li class="nav-item {{ Route::is('galleries.index') ? 'active' : '' }}">
            <a class="nav-link " href="{{route('galleries.index')}}">
                <i class="ri-group-fill"></i>
                <span>Galleries</span>
            </a>
        </li>

        <li class="nav-item {{ Route::is('news-events.index') ? 'active' : '' }}">
            <a class="nav-link " href="{{route('news-events.index')}}">
                <i class="ri-group-fill"></i>
                <span>News</span>
            </a>
        </li>
        

        
    </ul>

</aside>



{{--  <li class="nav-item {{ Route::is('members.index') ? 'active' : ''}}">
            <a class="nav-link " href="{{route('members.index')}}">
                <i class="ri-group-fill"></i>
                <span>Members</span>
            </a>
        </li> --}}
