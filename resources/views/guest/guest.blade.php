<!DOCTYPE html>

<html lang="en" class="layout-menu-fixed layout-compact" data-assets-path="/assets/vendor/"
    data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>
        Pillo | Guest
    </title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/favicon.ico') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/iconify-icons.css') }}" />

    <!-- Core CSS -->
    <!-- build:css assets/vendor/css/theme.css  -->

    <link rel="stylesheet" href="{{ asset('assets/vendor/css/core.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/demo.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/guest.css') }}">

    <!-- Vendors CSS -->

    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

    <!-- endbuild -->

    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->

    <script src="{{ asset('assets/vendor/js/config.js') }}"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="index.html" class="app-brand-link">
                        <span class="app-brand-logo demo">
                            <img src="{{ asset('assets/img/logo_pillo.png') }}" alt="Logo Pillo" width="70" />
                        </span>
                    </a>

                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
                        <i class="bx bx-chevron-left d-block d-xl-none align-middle"></i>
                    </a>
                </div>

                <div class="menu-divider mt-0"></div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <!-- Dashboards -->
                    <li class="menu-item ">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-home-smile"></i>
                            <div class="text-truncate" data-i18n="Dashboards">
                                Dashboards
                            </div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item active">
                                <a href="index.html" class="menu-link">
                                    <div class="text-truncate" data-i18n="Analytics">
                                        Analytics
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/dashboards-crm.html"
                                    target="_blank" class="menu-link">
                                    <div class="text-truncate" data-i18n="CRM">CRM</div>

                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/app-ecommerce-dashboard.html"
                                    target="_blank" class="menu-link">
                                    <div class="text-truncate" data-i18n="eCommerce">
                                        eCommerce
                                    </div>

                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/app-logistics-dashboard.html"
                                    target="_blank" class="menu-link">
                                    <div class="text-truncate" data-i18n="Logistics">
                                        Logistics
                                    </div>

                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/app-academy-dashboard.html"
                                    target="_blank" class="menu-link">
                                    <div class="text-truncate" data-i18n="Academy">Academy</div>

                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Apps & Pages -->
                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Apps &amp; Pages</span>
                    </li>
                    <li class="menu-item active open">
                        <a href="/guest"
                            target="_blank" class="menu-link">
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><circle cx="12" cy="6" r="4" fill="currentColor"/><path fill="currentColor" d="M20 17.5c0 2.485 0 4.5-8 4.5s-8-2.015-8-4.5S7.582 13 12 13s8 2.015 8 4.5"/></svg>
                          &nbsp <div class="text-truncate" data-i18n="Email">Guest</div>
                        </a>
                    </li>
                      <li class="menu-item">
                        <a href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/app-email.html"
                            target="_blank" class="menu-link">
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><circle cx="9.001" cy="6" r="4" fill="currentColor"/><ellipse cx="9.001" cy="17.001" fill="currentColor" rx="7" ry="4"/><path fill="currentColor" d="M21 17c0 1.657-2.036 3-4.521 3c.732-.8 1.236-1.805 1.236-2.998c0-1.195-.505-2.2-1.239-3.001C18.962 14 21 15.344 21 17M18 6a3 3 0 0 1-4.029 2.82A5.7 5.7 0 0 0 14.714 6c0-1.025-.27-1.987-.742-2.819A3 3 0 0 1 18 6.001"/></svg>
                            &nbsp <div class="text-truncate" data-i18n="Email">Employee</div>
                        </a>
                    </li>
                      <li class="menu-item">
                        <a href="/reservation"
                            target="_blank" class="menu-link">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M7.75 2.5a.75.75 0 0 0-1.5 0v1.58c-1.44.115-2.384.397-3.078 1.092c-.695.694-.977 1.639-1.093 3.078h19.842c-.116-1.44-.398-2.384-1.093-3.078c-.694-.695-1.639-.977-3.078-1.093V2.5a.75.75 0 0 0-1.5 0v1.513C15.585 4 14.839 4 14 4h-4c-.839 0-1.585 0-2.25.013z"/><path fill="currentColor" fill-rule="evenodd" d="M22 12v2c0 3.771 0 5.657-1.172 6.828S17.771 22 14 22h-4c-3.771 0-5.657 0-6.828-1.172S2 17.771 2 14v-2c0-.839 0-1.585.013-2.25h19.974C22 10.415 22 11.161 22 12m-6 1.25a.75.75 0 0 1 .75.75v1.25H18a.75.75 0 0 1 0 1.5h-1.25V18a.75.75 0 0 1-1.5 0v-1.25H14a.75.75 0 0 1 0-1.5h1.25V14a.75.75 0 0 1 .75-.75" clip-rule="evenodd"/></svg>
                           &nbsp  <div class="text-truncate" data-i18n="Email">Reservation</div>
                        </a>
                    </li>
                      <li class="menu-item">
                        <a href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/app-email.html"
                            target="_blank" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-envelope"></i>
                            <div class="text-truncate" data-i18n="Email">Facilities</div>
                        </a>
                    </li>
                      <li class="menu-item">
                        <a href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/app-email.html"
                            target="_blank" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-envelope"></i>
                            <div class="text-truncate" data-i18n="Email">Facilities</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/app-email.html"
                            target="_blank" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-envelope"></i>
                            <div class="text-truncate" data-i18n="Email">Facilities</div>
                        </a>
                    </li>
                </ul>
            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav class="layout-navbar container-xxl navbar-detached navbar navbar-expand-xl align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-4 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-6" href="javascript:void(0)">
                            <i class="icon-base bx bx-menu icon-md"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center justify-content-end" id="navbar-collapse">
                        <!-- Search -->
                        <div class="navbar-nav align-items-center me-auto">
                            <div class="nav-item d-flex align-items-center">
                                <span class="w-px-22 h-px-22 ms-2 rounded-pill"><i class="icon-base bx bx-search icon-md"></i></span>
                                <input type="text"
                                    class="form-control border-0 shadow-none ps-1 ps-sm-2 d-md-block d-none"
                                    placeholder="Search..." aria-label="Search..." />
                            </div>
                        </div>
                        <!-- /Search -->

                        <ul class="navbar-nav flex-row align-items-center ms-md-auto">

                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow p-0" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="{{ asset('assets/img/avatars/1.png') }}" alt
                                            class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="{{ asset('assets/img/avatars/1.png') }}" alt
                                                            class="w-px-40 h-auto rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-0">John Doe</h6>
                                                    <small class="text-body-secondary">Admin</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider my-1"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="icon-base bx bx-user icon-md me-3"></i><span>My Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="icon-base bx bx-cog icon-md me-3"></i><span>Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <span class="d-flex align-items-center align-middle">
                                                <i
                                                    class="flex-shrink-0 icon-base bx bx-credit-card icon-md me-3"></i><span
                                                    class="flex-grow-1 align-middle">Billing Plan</span>
                                                <span class="flex-shrink-0 badge rounded-pill bg-danger">4</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider my-1"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0);">
                                            <i class="icon-base bx bx-power-off icon-md me-3"></i><span>Log Out</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>
                </nav>

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                     
                       @yield('content')
                    <div class="container-xxl flex-grow-1 container-p-y">
                      <div class="row">
                        <div class="col-xxl- mb-6 order-0">
                    <div class="card">
                        <div class="d-flex align-items-start row">
                        <div class="col-sm-7">
                            <div class="card-body">
                            <h5 class="card-title text-primary mb-3">Hi, GUEST !!</h5>
                            <p class="mb-6">You have done 72% more sales today.<br>Check your new badge in your profile.</p>

                            <a href="javascript:;" class="btn btn-sm btn-label-primary">View Badges</a>
                            </div>
                        </div>
                        <div class="col-sm-5 text-center text-sm-left">
                            <div class="card-body pb-0 px-0 px-md-6">
                            <img src="../../assets/img/illustrations/man-with-laptop.png" height="175" class="scaleX-n1-rtl" alt="View Badge User">
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                                    <div class="col-xxl- mb-6 order-0">
                    <div class="card shadow">
                    <div class="card-header  text-white">
                        <h4 class="mb-0">Form Tamu</h4>
                    </div>
                    <div class="card-body">
                        <form id="guestForm">
                        <div class="mb-3 mt-3">
                            <label for="guestId" class="form-label mg-top">ID</label>
                            <input type="text" class="form-control" id="guestId" required>
                        </div>
                        <div class="mb-3">
                            <label for="guestName" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="guestName" required>
                        </div>
                        <div class="mb-3">
                            <label for="guestPhone" class="form-label">Nomor Telepon</label>
                            <input type="tel" class="form-control" id="guestPhone" required>
                        </div>
                        <div class="mb-3">
                            <label for="identityNumber" class="form-label">Nomor Identitas</label>
                            <input type="text" class="form-control" id="identityNumber" required>
                        </div>
                        <div class="mb-3">
                            <label for="identityPhoto" class="form-label">Foto Identitas</label>
                            <input type="file" class="form-control" id="identityPhoto" accept="image/*">
                        </div>
                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-success">Submit</button>
                            <button type="button" class="btn btn-warning" onclick="enableEdit()">Edit</button>
                        </div>
                        </form>
                    </div>
                    </div>
                </div>
                </div>
              
                  <!-- / database -->
                      <div class="col-12 order-5">
      <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
          <div class="card-title mb-0">
            <h5 class="m-0 me-2">On route vehicles</h5>
          </div>
          <div class="dropdown">
            <button class="btn text-body-secondary p-0" type="button" id="routeVehicles" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="icon-base bx bx-dots-vertical-rounded icon-lg"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="routeVehicles">
              <a class="dropdown-item" href="javascript:void(0);">Select All</a>
              <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
              <a class="dropdown-item" href="javascript:void(0);">Share</a>
            </div>
          </div>
        </div>
        <div class="card-datatable">
          <div id="DataTables_Table_0_wrapper" class="dt-container dt-bootstrap5 dt-empty-footer">
            <div class="row mt-2 justify-content-between">
                <div class="d-md-flex justify-content-between align-items-center dt-layout-start col-md-auto me-auto my-0">
            </div>
                <div class="d-md-flex justify-content-between align-items-center dt-layout-end col-md-auto ms-auto my-0">
                </div>
            </div>
                <div class="justify-content-between dt-layout-table mt-n2 mb-3"><div class="d-md-flex justify-content-between align-items-center col-12 dt-layout-full col-md"><table class="dt-route-vehicles table table-sm dataTable dtr-column" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info" style="width: 100%;"><colgroup><col data-dt-column="1" style="width: 58px;"><col data-dt-column="2" style="width: 178.297px;"><col data-dt-column="3" style="width: 195.438px;"><col data-dt-column="4" style="width: 181.219px;"><col data-dt-column="5" style="width: 214.25px;"><col data-dt-column="6" style="width: 206.797px;"></colgroup>
            <thead>
              <tr><th data-dt-column="0" class="control dt-orderable-none dtr-hidden" rowspan="1" colspan="1" aria-label="" style="display: none;">
                <span class="dt-column-title">
                </span><span class="dt-column-order">
                </span></th>
                <th data-dt-column="1" rowspan="1" colspan="1" class="dt-select dt-orderable-none" aria-label="">
                    <span class="dt-column-title"></span><span class="dt-column-order"></span><input class="form-check-input" type="checkbox" aria-label="Select all rows">
                </th>
                <th data-dt-column="2" rowspan="1" colspan="1" class="dt-orderable-asc dt-orderable-desc dt-ordering-asc" aria-sort="ascending" aria-label="location: Activate to invert sorting" tabindex="0">
                    <span class="dt-column-title" role="button">ID</span><span class="dt-column-order"></span></th><th data-dt-column="3" rowspan="1" colspan="1" class="dt-orderable-asc dt-orderable-desc" aria-label="starting route: Activate to sort" tabindex="0">
                    <span class="dt-column-title" role="button">NAMA</span><span class="dt-column-order"></span></th><th data-dt-column="4" rowspan="1" colspan="1" class="dt-orderable-asc dt-orderable-desc" aria-label="ending route: Activate to sort" tabindex="0">
                    <span class="dt-column-title" role="button">Voucher</span><span class="dt-column-order"></span></th><th data-dt-column="5" rowspan="1" colspan="1" class="dt-orderable-asc dt-orderable-desc" aria-label="warnings: Activate to sort" tabindex="0">
                    <span class="dt-column-title" role="button">Status</span><span class="dt-column-order"></span></th><th class="w-20 dt-orderable-asc dt-orderable-desc dt-type-numeric" data-dt-column="6" rowspan="1" colspan="1" aria-label="progress: Activate to sort" tabindex="0">
                    <span class="dt-column-title" role="button">ACTION</span><span class="dt-column-order"></span></th></tr>
            </thead><tbody><tr><td class="control dtr-hidden" tabindex="0" style="display: none;"></td><td class="dt-select"><input aria-label="Select row" class="form-check-input" type="checkbox"></td><td class="sorting_1">
                  <div class="d-flex justify-content-start align-items-center user-name">
                      <div class="avatar-wrapper">
                          <div class="avatar me-4">
                              <span class="avatar-initial rounded-circle bg-label-secondary">
                                  <i class="icon-base bx bxs-truck icon-lg"></i>
                              </span>
                          </div>
                      </div>
                      <div class="d-flex flex-column">
                          <a class="text-heading text-nowrap fw-medium" href="app-logistics-fleet.html">VOL-159145</a>
                      </div>
                  </div>
              </td><td>
                  <div class="text-body">
                      Paris 19, France
                  </div>
              </td><td>
                  <div class="text-body">
                      Dresden, Germany
                  </div>
              </td><td>
                  <span class="badge rounded bg-label-success">
                      No Warnings
                  </span>
              </td><td class="dt-type-numeric">
                  <div class="d-flex align-items-center">
                      <div class="progress w-100" style="height: 8px;">
                          <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                          </div>
                      </div>
                      <div class="text-body ms-3">60%</div>
                  </div>
              </td></tr><tr><td class="control dtr-hidden" tabindex="0" style="display: none;"></td><td class="dt-select"><input aria-label="Select row" class="form-check-input" type="checkbox"></td><td class="sorting_1">
                  <div class="d-flex justify-content-start align-items-center user-name">
                      <div class="avatar-wrapper">
                          <div class="avatar me-4">
                              <span class="avatar-initial rounded-circle bg-label-secondary">
                                  <i class="icon-base bx bxs-truck icon-lg"></i>
                              </span>
                          </div>
                      </div>
                      <div class="d-flex flex-column">
                          <a class="text-heading text-nowrap fw-medium" href="app-logistics-fleet.html">VOL-182964</a>
                      </div>
                  </div>
              </td><td>
                  <div class="text-body">
                      Saintes, France
                  </div>
              </td><td>
                  <div class="text-body">
                      Roma, Italy
                  </div>
              </td><td>
                  <span class="badge rounded bg-label-primary">
                      Fuel Problems
                  </span>
              </td><td class="dt-type-numeric">
                  <div class="d-flex align-items-center">
                      <div class="progress w-100" style="height: 8px;">
                          <div class="progress-bar" role="progressbar" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100">
                          </div>
                      </div>
                      <div class="text-body ms-3">82%</div>
                  </div>
              </td></tr><tr><td class="control dtr-hidden" tabindex="0" style="display: none;"></td><td class="dt-select"><input aria-label="Select row" class="form-check-input" type="checkbox"></td><td class="sorting_1">
                  <div class="d-flex justify-content-start align-items-center user-name">
                      <div class="avatar-wrapper">
                          <div class="avatar me-4">
                              <span class="avatar-initial rounded-circle bg-label-secondary">
                                  <i class="icon-base bx bxs-truck icon-lg"></i>
                              </span>
                          </div>
                      </div>
                      <div class="d-flex flex-column">
                          <a class="text-heading text-nowrap fw-medium" href="app-logistics-fleet.html">VOL-276904</a>
                      </div>
                  </div>
              </td><td>
                  <div class="text-body">
                      Aulnay-sous-Bois, France
                  </div>
              </td><td>
                  <div class="text-body">
                      Torino, Italy
                  </div>
              </td><td>
                  <span class="badge rounded bg-label-warning">
                      Temperature Not Optimal
                  </span>
              </td><td class="dt-type-numeric">
                  <div class="d-flex align-items-center">
                      <div class="progress w-100" style="height: 8px;">
                          <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                          </div>
                      </div>
                      <div class="text-body ms-3">30%</div>
                  </div>
              </td></tr><tr><td class="control dtr-hidden" tabindex="0" style="display: none;"></td><td class="dt-select"><input aria-label="Select row" class="form-check-input" type="checkbox"></td><td class="sorting_1">
                  <div class="d-flex justify-content-start align-items-center user-name">
                      <div class="avatar-wrapper">
                          <div class="avatar me-4">
                              <span class="avatar-initial rounded-circle bg-label-secondary">
                                  <i class="icon-base bx bxs-truck icon-lg"></i>
                              </span>
                          </div>
                      </div>
                      <div class="d-flex flex-column">
                          <a class="text-heading text-nowrap fw-medium" href="app-logistics-fleet.html">VOL-300198</a>
                      </div>
                  </div>
              </td><td>
                  <div class="text-body">
                      West Palm Beach, USA
                  </div>
              </td><td>
                  <div class="text-body">
                      Dresden, Germany
                  </div>
              </td><td>
                  <span class="badge rounded bg-label-danger">
                      Ecu Not Responding
                  </span>
              </td><td class="dt-type-numeric">
                  <div class="d-flex align-items-center">
                      <div class="progress w-100" style="height: 8px;">
                          <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                          </div>
                      </div>
                      <div class="text-body ms-3">90%</div>
                  </div>
              </td></tr><tr><td class="control dtr-hidden" tabindex="0" style="display: none;"></td><td class="dt-select"><input aria-label="Select row" class="form-check-input" type="checkbox"></td><td class="sorting_1">
                  <div class="d-flex justify-content-start align-items-center user-name">
                      <div class="avatar-wrapper">
                          <div class="avatar me-4">
                              <span class="avatar-initial rounded-circle bg-label-secondary">
                                  <i class="icon-base bx bxs-truck icon-lg"></i>
                              </span>
                          </div>
                      </div>
                      <div class="d-flex flex-column">
                          <a class="text-heading text-nowrap fw-medium" href="app-logistics-fleet.html">VOL-302781</a>
                      </div>
                  </div>
              </td><td>
                  <div class="text-body">
                      Köln, Germany
                  </div>
              </td><td>
                  <div class="text-body">
                      Laspezia, Italy
                  </div>
              </td><td>
                  <span class="badge rounded bg-label-info">
                      Oil Leakage
                  </span>
              </td><td class="dt-type-numeric">
                  <div class="d-flex align-items-center">
                      <div class="progress w-100" style="height: 8px;">
                          <div class="progress-bar" role="progressbar" style="width: 24%" aria-valuenow="24" aria-valuemin="0" aria-valuemax="100">
                          </div>
                      </div>
                      <div class="text-body ms-3">24%</div>
                  </div>
              </td></tr></tbody>
          <tfoot></tfoot></table></div></div><div class="row mx-3 justify-content-between"><div class="d-md-flex justify-content-between align-items-center dt-layout-start col-md-auto me-auto my-0"><div class="dt-info" aria-live="polite" id="DataTables_Table_0_info" role="status">Showing 1 to 5 of 25 entries</div></div><div class="d-md-flex justify-content-between align-items-center dt-layout-end col-md-auto ms-auto my-0"><div class="dt-paging"><nav aria-label="pagination"><ul class="pagination"><li class="dt-paging-button page-item disabled"><button class="page-link previous" role="link" type="button" aria-controls="DataTables_Table_0" aria-disabled="true" aria-label="Previous" data-dt-idx="previous" tabindex="-1"><i class="icon-base bx bx-chevron-left scaleX-n1-rtl icon-18px"></i></button></li><li class="dt-paging-button page-item active"><button class="page-link" role="link" type="button" aria-controls="DataTables_Table_0" aria-current="page" data-dt-idx="0">1</button></li><li class="dt-paging-button page-item"><button class="page-link" role="link" type="button" aria-controls="DataTables_Table_0" data-dt-idx="1">2</button></li><li class="dt-paging-button page-item"><button class="page-link" role="link" type="button" aria-controls="DataTables_Table_0" data-dt-idx="2">3</button></li><li class="dt-paging-button page-item"><button class="page-link" role="link" type="button" aria-controls="DataTables_Table_0" data-dt-idx="3">4</button></li><li class="dt-paging-button page-item"><button class="page-link" role="link" type="button" aria-controls="DataTables_Table_0" data-dt-idx="4">5</button></li><li class="dt-paging-button page-item"><button class="page-link next" role="link" type="button" aria-controls="DataTables_Table_0" aria-label="Next" data-dt-idx="next"><i class="icon-base bx bx-chevron-right scaleX-n1-rtl icon-18px"></i></button></li></ul></nav></div></div></div></div>
        </div>
      </div>
    </div>
                    <!-- / Content -->

                    <!-- Footer -->
                    <footer class="content-footer footer bg-footer-theme">
                        <div class="container-xxl">
                            <div
                                class="footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column">
                                <div class="mb-2 mb-md-0">
                                    &#169;
                                    <script>
                                        document.write(new Date().getFullYear());
                                    </script>
                                    , made with ❤️ by
                                    <a href="" target="_blank" class="footer-link">Metschool</a>
                                </div>
                            </div>
                        </div>
                    </footer>
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->

    <script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>

    <script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>

    <script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <script src="{{ asset('assets/vendor/js/menu.js') }}"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>

    <!-- Main JS -->

    <script src="{{ asset('assets/vendor/js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('assets/vendor/js/dashboards-analytics.js') }}"></script>

    <!-- Place this tag before closing body tag for github widget button. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>
