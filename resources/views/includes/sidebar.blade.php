<div class="profile d-block w-100 text-center my-4">
    <img src="https://i.pravatar.cc/100" alt="Profile photo" class="img-fluid rounded-circle b-primary shadow">
    <p class="lead pt-2">Administrator</p>
</div>

<ul class="nav flex-column bg-white">
    <li class="nav-item bg-primary py-2 px-4">
        <a href="/admin/" class="nav-link text-white">Dashboard</a>
    </li>
    <li class="nav-item py-2 px-4">
        <a href="/admin/staff" class="nav-link text-dark">Manage staff</a>
    </li>
    <li class="nav-item py-2 px-4">
        <a href="/admin/student" class="nav-link text-dark">Manage students</a>
    </li>
    <li class="nav-item py-2 px-4">
        <a href="/admin/course" class="nav-link text-dark">Course management</a>
    </li>
    <li class="nav-item py-2 px-4">
        <a href="/admin/level" class="nav-link text-dark">Class management</a>
    </li>
    <li class="nav-item py-2 px-4">
        {{-- TODO: FINISH PARENT PAGE   --}}
        <a href="/admin/parent_management" class="nav-link text-dark">Manage Parents</a>
    </li>
    <li class="nav-item py-2 px-4">
        <a href="/admin/school_reports" class="nav-link text-dark">School reports</a>
    </li>
    <li class="nav-item py-2 px-4">
        <a href="/admin/discipline" class="nav-link text-dark">Disciplinary sanctions</a>
    </li>
    <li class="nav-item dropdown py-2 px-4">
        <a class="nav-link dropdown-toggle text-dark" href="#" id="finance-dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Finances</a>
        <div class="dropdown-menu w-75" aria-labelledby="finance-dropdown">
            <a class="dropdown-item" href="/admin/finances">Pay fees</a>
            <a class="dropdown-item" href="#">Report</a>
        </div>
    </li>
    <li class="nav-item py-2 px-4">
        <a href="/admin/account_settings" class="nav-link text-dark">Account settings</a>
    </li>

    <form action="" class="form-inline ml-4 mt-3">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Search</span>
            </div>
            <input type="search" class="form-control" placeholder="search">
        </div>
    </form>
</ul>
