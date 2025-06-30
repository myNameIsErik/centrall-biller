<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="/">
            <img src="../assets/img/logo-ct-dark.png" width="26px" height="26px" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold">Centrall Biller</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div>
        <ul class="navbar-nav">
            <!-- Dashboard -->
            <li class="nav-item mb-3">
                <a class="nav-link active d-flex align-items-center px-3" href="/">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-tv-2 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1 flex-grow-1">Dashboard</span>
                </a>
            </li>

            <!-- Mapping Deposit -->
            <li class="nav-item mb-3">
                <div class="d-flex flex-column">
                    <button class="accordion-button collapsed d-flex align-items-center px-4 py-2 bg-transparent border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDeposit" aria-expanded="false" aria-controls="collapseDeposit">
                        <div class="d-flex align-items-center flex-grow-1">
                            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="ni ni-money-coins text-dark text-sm opacity-10"></i>
                            </div>
                            <span class="nav-link-text ms-1">Mapping Deposit</span>
                        </div>
                        <i class="fas fa-chevron-down text-sm ms-auto"></i>
                    </button>
                    <div id="collapseDeposit" class="accordion-collapse collapse ps-4" data-bs-parent="#sidenav-main">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center px-3" href="/depositMitra">
                                    <div class="icon icon-shape icon-sm me-2 d-flex align-items-center justify-content-center">
                                        <i class="ni ni-circle-08 text-dark text-sm opacity-10"></i>
                                    </div>
                                    <span class="nav-link-text ms-1">Deposit Mitra</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center px-3" href="/deposit">
                                    <div class="icon icon-shape icon-sm me-2 d-flex align-items-center justify-content-center">
                                        <i class="ni ni-single-copy-04 text-dark text-sm opacity-10"></i>
                                    </div>
                                    <span class="nav-link-text ms-1">Deposit</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>

            <!-- Mapping Product -->
            <li class="nav-item mb-3">
                <a class="nav-link d-flex align-items-center px-3" href="/mappingProduct">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-map-big text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1 flex-grow-1">Mapping Product</span>
                </a>
            </li>

            <!-- Settlement -->
            <li class="nav-item mb-3">
                <div class="d-flex flex-column">
                    <button class="accordion-button collapsed d-flex align-items-center px-4 py-2 bg-transparent border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSettlement" aria-expanded="false" aria-controls="collapseSettlement">
                        <div class="d-flex align-items-center flex-grow-1">
                            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="ni ni-world-2 text-dark text-sm opacity-10"></i>
                            </div>
                            <span class="nav-link-text ms-1">Settlement</span>
                        </div>
                        <i class="fas fa-chevron-down text-sm ms-auto"></i>
                    </button>
                    <div id="collapseSettlement" class="accordion-collapse collapse ps-4" data-bs-parent="#sidenav-main">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center px-3" href="../pages/profile.html">
                                    <div class="icon icon-shape icon-sm me-2 d-flex align-items-center justify-content-center">
                                        <i class="ni ni-building text-dark text-sm opacity-10"></i>
                                    </div>
                                    <span class="nav-link-text ms-1">PDAM</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center px-3" href="/mitraPDAM">
                                    <div class="icon icon-shape icon-sm me-2 d-flex align-items-center justify-content-center">
                                        <i class="ni ni-circle-08 text-dark text-sm opacity-10"></i>
                                    </div>
                                    <span class="nav-link-text ms-1">Mitra</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>

            <!-- Laporan -->
            <li class="nav-item mb-3">
                <div class="d-flex flex-column">
                    <button class="accordion-button collapsed d-flex align-items-center px-4 py-2 bg-transparent border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLaporan" aria-expanded="false" aria-controls="collapseLaporan">
                        <div class="d-flex align-items-center flex-grow-1">
                            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="ni ni-books text-dark text-sm opacity-10"></i>
                            </div>
                            <span class="nav-link-text ms-1">Laporan</span>
                        </div>
                        <i class="fas fa-chevron-down text-sm ms-auto"></i>
                    </button>
                    <div id="collapseLaporan" class="accordion-collapse collapse ps-4" data-bs-parent="#sidenav-main">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center px-3" href="/transaksi">
                                    <div class="icon icon-shape icon-sm me-2 d-flex align-items-center justify-content-center">
                                        <i class="ni ni-chart-bar-32 text-dark text-sm opacity-10"></i>
                                    </div>
                                    <span class="nav-link-text ms-1">Transaksi</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>

            <!-- User Management -->
            <li class="nav-item mb-3">
                <div class="d-flex flex-column">
                    <button class="accordion-button collapsed d-flex align-items-center px-4 py-2 bg-transparent border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseUserManagement" aria-expanded="false" aria-controls="collapseUserManagement">
                        <div class="d-flex align-items-center flex-grow-1">
                            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                            </div>
                            <span class="nav-link-text ms-1">User Management</span>
                        </div>
                        <i class="fas fa-chevron-down text-sm ms-auto"></i>
                    </button>
                    <div id="collapseUserManagement" class="accordion-collapse collapse ps-4" data-bs-parent="#sidenav-main">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center px-3" href="/user">
                                    <div class="icon icon-shape icon-sm me-2 d-flex align-items-center justify-content-center">
                                        <i class="ni ni-circle-08 text-dark text-sm opacity-10"></i>
                                    </div>
                                    <span class="nav-link-text ms-1">User</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center px-3" href="/partner">
                                    <div class="icon icon-shape icon-sm me-2 d-flex align-items-center justify-content-center">
                                        <i class="ni ni-circle-08 text-dark text-sm opacity-10"></i>
                                    </div>
                                    <span class="nav-link-text ms-1">Partner</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center px-3" href="../pages/profile.html">
                                    <div class="icon icon-shape icon-sm me-2 d-flex align-items-center justify-content-center">
                                        <i class="ni ni-circle-08 text-dark text-sm opacity-10"></i>
                                    </div>
                                    <span class="nav-link-text ms-1">Role</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>

            <!-- Settings -->
            <li class="nav-item mb-3">
                <div class="d-flex flex-column">
                    <button class="accordion-button collapsed d-flex align-items-center px-4 py-2 bg-transparent border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSettings" aria-expanded="false" aria-controls="collapseSettings">
                        <div class="d-flex align-items-center flex-grow-1">
                            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="ni ni-settings-gear-65 text-dark text-sm opacity-10"></i>
                            </div>
                            <span class="nav-link-text ms-1">Settings</span>
                        </div>
                        <i class="fas fa-chevron-down text-sm ms-auto"></i>
                    </button>
                    <div id="collapseSettings" class="accordion-collapse collapse ps-4" data-bs-parent="#sidenav-main">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center px-3" href="../pages/profile.html">
                                    <div class="icon icon-shape icon-sm me-2 d-flex align-items-center justify-content-center">
                                        <i class="ni ni-briefcase-24 text-dark text-sm opacity-10"></i>
                                    </div>
                                    <span class="nav-link-text ms-1">Reference Bank</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center px-3" href="/product">
                                    <div class="icon icon-shape icon-sm me-2 d-flex align-items-center justify-content-center">
                                        <i class="ni ni-basket text-dark text-sm opacity-10"></i>
                                    </div>
                                    <span class="nav-link-text ms-1">Product</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center px-3" href="../pages/profile.html">
                                    <div class="icon icon-shape icon-sm me-2 d-flex align-items-center justify-content-center">
                                        <i class="ni ni-archive-2 text-dark text-sm opacity-10"></i>
                                    </div>
                                    <span class="nav-link-text ms-1">Product Type</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center px-3" href="/ip">
                                    <div class="icon icon-shape icon-sm me-2 d-flex align-items-center justify-content-center">
                                        <i class="ni ni-bullet-list-67 text-dark text-sm opacity-10"></i>
                                    </div>
                                    <span class="nav-link-text ms-1">Whitelist IP</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center px-3" href="../pages/profile.html">
                                    <div class="icon icon-shape icon-sm me-2 d-flex align-items-center justify-content-center">
                                        <i class="ni ni-credit-card text-dark text-sm opacity-10"></i>
                                    </div>
                                    <span class="nav-link-text ms-1">Channel Pembayaran</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>

            <!-- Logs -->
            <li class="nav-item mb-3">
                <div class="d-flex flex-column">
                    <button class="accordion-button collapsed d-flex align-items-center px-4 py-2 bg-transparent border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLogs" aria-expanded="false" aria-controls="collapseLogs">
                        <div class="d-flex align-items-center flex-grow-1">
                            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="ni ni-chat-round text-dark text-sm opacity-10"></i>
                            </div>
                            <span class="nav-link-text ms-1">Logs</span>
                        </div>
                        <i class="fas fa-chevron-down text-sm ms-auto"></i>
                    </button>
                    <div id="collapseLogs" class="accordion-collapse collapse ps-4" data-bs-parent="#sidenav-main">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center px-3" href="/apiPayment">
                                    <div class="icon icon-shape icon-sm me-2 d-flex align-items-center justify-content-center">
                                        <i class="ni ni-align-left-2 text-dark text-sm opacity-10"></i>
                                    </div>
                                    <span class="nav-link-text ms-1">Log Inquery</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center px-3" href="#">
                                    <div class="icon icon-shape icon-sm me-2 d-flex align-items-center justify-content-center">
                                        <i class="ni ni-paper-diploma text-dark text-sm opacity-10"></i>
                                    </div>
                                    <span class="nav-link-text ms-1">API Payment</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>

        </ul>
    </div>
    <div class="sidenav-footer mx-3 ">
        <a href="https://www.creative-tim.com/learning-lab/bootstrap/license/argon-dashboard" target="_blank" class="btn btn-dark btn-sm w-100 mb-3">Document API</a>
        <a class="btn btn-primary btn-sm mb-0 w-100" href="https://www.creative-tim.com/product/argon-dashboard-pro?ref=sidebarfree" type="button">Document Teknis</a>
    </div>
</aside>