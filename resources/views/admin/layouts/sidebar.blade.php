<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Finsweet</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <!-- <li class="nav-item active">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
            aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="login.html">Login</a>
                <a class="collapse-item" href="register.html">Register</a>
            </div>
        </div>
    </li> -->

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.home_content.index') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Home Content</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.about-us.index') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>About Us Content</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.members.index') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Members</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.events.index') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Events</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.donations.index') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Donations</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.news.index') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>News</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.projects.index') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Projects</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.volunteers.index') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Volunteers</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.contacts.index') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Contacts</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.whatwedos.index') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>What we do</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>