<html lang="en">
    <!--begin::Head-->
<head>
    @include('vmxs.layouts.header')
</head>
  <!--end::Head-->
    <!--begin::Body-->
    <body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed aside-enabled aside-fixed aside-primary-enabled aside-secondary-enabled" data-kt-aside-minimize="on">
        <!--begin::Main-->
        <!--begin::Root-->
        <div class="d-flex flex-column flex-root">
            <!--begin::Page-->
            <div class="page d-flex flex-row flex-column-fluid">
                <!--begin::Aside-->
                <div id="kt_aside" class="aside bg-info drawer drawer-start" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_toggler" style="width: 250px !important;">
                    <!-- SideBar -->
                    @include('vmxs.layouts.sidebar')
                </div>
                <!--end::Aside-->
                <!--begin::Wrapper-->
                <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                    <!--begin::Header-->
                    <div id="kt_header" class="header" data-kt-sticky="true" data-kt-sticky-name="header" data-kt-sticky-offset="{default: '200px', lg: '300px'}" style="animation-duration: 0.3s;">
                     <!-- navbar -->
                     @include('vmxs.layouts.navbar')
                    </div>
                    <!--end::Header-->
                    <!--begin::Main-->
                    <div class="d-flex flex-column flex-column-fluid">
                        <!--begin::Content-->
                        <div class="content fs-6 d-flex flex-column-fluid" id="kt_content">
                            <!--begin::Container-->
                            <div class="container-xxl">
                            <!--begin::Row-->
                            <div class="themesContent"> <!-- beingContent-->
                              @yield('content')
                            </div> <!-- End Content Theme -->
                            <!--end::Row-->
                            <!--begin::Modals-->
                            <br>
                                <!--end::Modals-->
                                <!--end::Container-->
                                <!--end::Content-->
                                <!--end::Main-->
                                <!--begin::Footer-->
                                <div class="footer py-4 d-flex flex-lg-column" style="background-color: #fff;
    border-radius: 20px;
    width: 100%;
    margin: auto;
    margin-bottom: 6px;" id="kt_footer">
                                  @include('vmxs.layouts.footer')
                                </div>
                                <!--end::Footer-->
                                <!--end::Wrapper-->
                                <!--end::Page-->
                                <!--end::Root-->
                                <!--begin::Header Search-->
                                <div class="modal bg-white fade" id="kt_header_search_modal" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog modal-fullscreen">
                                        <div class="modal-content shadow-none">
                                            <div class="container w-lg-800px">
                                                <div class="modal-header d-flex justify-content-end border-0">
                                                    <!--begin::Close-->
                                                    <div class="btn btn-icon btn-sm btn-light-primary ms-2" data-bs-dismiss="modal">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                        <span class="svg-icon svg-icon-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black"></rect>
                                                                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black"></rect>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <!--end::Close-->
                                                </div>
                                                <div class="modal-body">
                                                    <!--begin::Search-->
                                                    <form class="pb-10">
                                                        <input autofocus="" type="text" class="form-control bg-transparent border-0 fs-4x text-center fw-normal" name="query" placeholder="Search...">
                                                    </form>
                                                    <!--end::Search-->
                                                    <!--begin::Tutorials-->
                                                    <div class="pb-10">
                                                        <h3 class="text-dark fw-bolder fs-1 mb-6">Search Result:-</h3>
                                                        <!--begin::List Widget 5-->
                                                        <div class="card mb-5 shadow-none">
                                                            <!--begin::Body-->
                                                            <div class="card-body pt-2 px-0">
                                                                <!--begin::Item-->
                                                                <div class="d-flex mb-6">
                                                                    <!--begin::Icon-->
                                                                    <div class="me-1">
                                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
                                                                        <span class="svg-icon svg-icon-sm svg-icon-primary">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                <path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="black"></path>
                                                                            </svg>
                                                                        </span>
                                                                        <!--end::Svg Icon-->
                                                                    </div>
                                                                    <!--end::Icon-->
                                                                    <!--begin::Content-->
                                                                    <div class="d-flex flex-column">
                                                                        <a href="#" class="fs-6 fw-bolder text-hover-primary text-gray-800 mb-2">The Main Name Of Result</a>
                                                                        <div class="fw-bold text-muted">More Description about result.</div>
                                                                    </div>
                                                                    <!--end::Content-->
                                                                </div>
                                                                <!--end::Item-->
                                                            </div>
                                                            <!--end::Body-->
                                                        </div>
                                                        <!--end::List Widget 5-->
                                                    </div>
                                                    <!--end::Tutorials-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Header Search-->
                                <!-- model half screen -->
                                <div class="modal fade" tabindex="-1" id="vmxs_model_half">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="vmxs_model_half_title">Modal title</h5>

                                                <!--begin::Close-->
                                                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                                                    <span class="svg-icon svg-icon-2x"></span>
                                                </div>
                                                <!--end::Close-->
                                            </div>

                                            <div class="modal-body" id="vmxs_model_half_content">
                                                <p>Content Here</p>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary" id="vmxs_model_half_save_button">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                            </div>

                                <!-- end model half screen -->

                                <!--end::Mega Menu-->
                                <!--begin::Scrolltop-->
                                <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                    <span class="svg-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black"></rect>
                                            <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black"></path>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                                <!--end::Scrolltop-->
                                <!--end::Main-->
                                @include('vmxs.layouts.js_files')
                                <script>
                                function half_model(title,content){
                                     $('#vmxs_model_half_title').text(title);
                                     $('#vmxs_model_half_content').html(content);
                                }
                                </script>
                                @yield('js_custom')
                                <!--end::Page Custom Javascript-->
                                <!--end::Javascript-->
                                <!--end::Body-->
                            <br>
                            </div>

                        </div>
                    </div>  <!-- Last Element of container -->


                </div>
            </div>
        </div>
</body>
</html>