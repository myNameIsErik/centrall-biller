<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
    <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
            @if (!Request::is('/'))
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Menu</a></li>
                <li class="breadcrumb-item text-sm text-white active" aria-current="page">@yield('breadcrumb')</li>
            </ol>
            @endif
            <h6 class="font-weight-bolder text-white mb-0">@yield('menu')</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                <div class="input-group">
                    <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" placeholder="Type here...">
                </div>
            </div>
            <ul class="navbar-nav  justify-content-end">
                <li class="nav-item dropdown pe-2 d-flex align-items-center">
                    <a href="#" class="nav-link text-white p-0" id="dropdownLogoutButton" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-user cursor-pointer px-2"></i>
                        <span class="d-sm-inline d-none">{{ Auth::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end border-0 shadow-sm" aria-labelledby="dropdownLogoutButton" style="min-width: 150px;">
                        <li class="m-0 p-0">
                            <form method="POST" action="{{ url('/logout') }}" class="m-0 p-0">
                                @csrf
                                <button type="submit" class="dropdown-item text-danger px-3 py-2">
                                    <i class="fa fa-sign-out-alt me-2"></i> Logout
                                </button>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>