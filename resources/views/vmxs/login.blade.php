<html lang="en">
        <!--begin::Head-->
<head>
        @include('vmxs.layouts.header')
</head>
        <body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed aside-enabled aside-fixed aside-primary-enabled aside-secondary-enabled" data-kt-aside-minimize="on">
                    <!--begin::Main-->
        <div class="d-flex flex-column flex-root">
            <!--begin::Login-->
            <div class="d-flex flex-column flex-lg-row flex-column-fluid" id="kt_login">
                <!--begin::Aside-->
                <div class="d-flex flex-column flex-lg-row-auto bg-primary w-lg-600px pt-15 pt-lg-0">
                    <!--begin::Aside Top-->
                    <div class="d-flex flex-row-fluid flex-center flex-column-auto flex-column text-center mb-5">
                        <!--begin::Aside Logo-->
                        <a href="/start/index.html" class="mb-6">
                            <img alt="Logo" src="https://preview.keenthemes.com/start/assets/media/logos/logo-default.svg" class="h-50px h-lg-75px" />
                        </a>
                        <!--end::Aside Logo-->
                        <!--begin::Aside Subtitle-->
                        <h3 class="fw-bolder fs-2x text-white lh-lg">Discover Start
                        <br />with great build tools</h3>
                        <!--end::Aside Subtitle-->
                    </div>
                    <!--end::Aside Top-->
                    <!--begin::Illustration-->
                    <div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100px min-h-lg-350px" style="background-image: url(https://preview.keenthemes.com/start/assets/media/illustrations/sigma-1/2.png"></div>
                    <!--end::Illustration-->
                </div>
                <!--begin::Aside-->
                <!--begin::Content-->
                <div class="login-content flex-lg-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden py-10 py-lg-20 px-10 p-lg-7 mx-auto mw-450px w-100">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column-fluid flex-center py-10">
                        <!--begin::Signin Form-->
                        <form class="form w-100" novalidate="novalidate" id="kt_login_signin_form" data-after-login-url="/start/index.html">
                            <!--begin::Title-->
                            <div class="pb-5 pb-lg-15">
                                <h3 class="fw-bolder text-dark display-6">Welcome to Start</h3>
                                <div class="text-muted fw-bold fs-3">New Here?
                                <a href="#" class="text-primary fw-bolder" id="kt_login_signin_form_singup_button">Create Account</a></div>
                            </div>
                            <!--begin::Title-->
                            <!--begin::Form group-->
                            <div class="fv-row mb-10">
                                <label class="form-label fs-6 fw-bolder text-dark">Email</label>
                                <input class="form-control form-control-lg form-control-solid" type="text" name="username" autocomplete="off" />
                            </div>
                            <!--end::Form group-->
                            <!--begin::Form group-->
                            <div class="fv-row mb-10">
                                <div class="d-flex justify-content-between mt-n5">
                                    <label class="form-label fs-6 fw-bolder text-dark pt-5">Password</label>
                                    <a href="#" class="text-primary fs-6 fw-bolder text-hover-primary pt-5" id="kt_login_signin_form_password_reset_button">Forgot Password ?</a>
                                </div>
                                <input class="form-control form-control-lg form-control-solid" type="password" name="password" autocomplete="off" />
                            </div>
                            <!--end::Form group-->
                            <!--begin::Action-->
                            <div class="pb-lg-0 pb-5">
                                <button type="submit" id="kt_login_signin_form_submit_button" class="btn btn-primary fw-bolder fs-6 px-8 py-4 my-3 me-3">Sign In</button>
                                <button type="button" class="btn btn-light-primary fw-bolder px-8 py-4 my-3 fs-6">
                                <img src="https://preview.keenthemes.com/start/assets/media/svg/brand-logos/google-icon.svg" class="w-20px h-20px me-3" alt="" />via  Google</button>

                                                                <button type="button" class="btn btn-light-primary fw-bolder px-8 py-4 my-3 fs-6">
                                <img src="https://preview.keenthemes.com/start/assets/media/svg/brand-logos/facebook-icon.svg" class="w-20px h-20px me-3" alt="" />via facebook</button>
                            </div>
                            <!--end::Action-->
                        </form>
                        <!--end::Signin Form-->
                        <!--begin::Signup Form-->
                        <form class="form d-none w-100" novalidate="novalidate" id="kt_login_signup_form">
                            <!--begin::Title-->
                            <div class="pb-5 pb-lg-15">
                                <h3 class="fw-bolder text-dark display-6">Sign Up</h3>
                                <p class="text-muted fw-bold fs-3">Enter your details to create your account</p>
                            </div>
                            <!--end::Title-->
                            <!--begin::Form group-->
                            <div class="fv-row mb-5">
                                <label class="form-label fs-6 fw-bolder text-dark pt-5">Name</label>
                                <input class="form-control form-control-lg form-control-solid" type="text" placeholder="" name="fullname" autocomplete="off" />
                            </div>
                            <!--end::Form group-->
                            <!--begin::Form group-->
                            <div class="fv-row mb-5">
                                <label class="form-label fs-6 fw-bolder text-dark pt-5">Email</label>
                                <input class="form-control form-control-lg form-control-solid" type="email" placeholder="" name="email" autocomplete="off" />
                            </div>
                            <!--end::Form group-->
                            <!--begin::Form group-->
                            <div class="fv-row mb-5">
                                <label class="form-label fs-6 fw-bolder text-dark pt-5">Password</label>
                                <input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="password" autocomplete="off" />
                            </div>
                            <!--end::Form group-->
                            <!--begin::Form group-->
                            <div class="fv-row mb-10">
                                <label class="form-label fs-6 fw-bolder text-dark pt-5">Confirm Password</label>
                                <input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="cpassword" autocomplete="off" />
                            </div>
                            <!--end::Form group-->
                            <!--begin::Form group-->
                            <div class="fv-row mb-10">
                                <div class="form-check form-check-inline form-check-custom form-check-solid mb-5">
                                    <input class="form-check-input" type="checkbox" name="agree" id="kt_login_toc_agree" value="1" />
                                    <label class="form-check-label fw-bold text-gray-600" for="kt_login_toc_agree">I Agree the
                                    <a href="#" class="ms-1">terms and conditions</a>.</label>
                                </div>
                            </div>
                            <!--end::Form group-->
                            <!--begin::Form group-->
                            <div class="d-flex flex-wrap pb-lg-0 pb-5">
                                <button type="button" id="kt_login_signup_form_submit_button" class="btn btn-primary fw-bolder fs-6 px-8 py-4 my-3 me-4">Submit</button>
                                <button type="button" id="kt_login_signup_form_cancel_button" class="btn btn-light-primary fw-bolder fs-6 px-8 py-4 my-3">Cancel</button>
                            </div>
                            <!--end::Form group-->
                        </form>
                        <!--end::Signup Form-->
                        <!--begin::Password Reset Form-->
                        <form class="form d-none w-100" novalidate="novalidate" id="kt_login_password_reset_form">
                            <!--begin::Title-->
                            <div class="pb-5 pb-lg-10">
                                <h3 class="fw-bolder text-dark display-6">Forgotten Password ?</h3>
                                <p class="text-muted fw-bold fs-3">Enter your email to reset your password</p>
                            </div>
                            <!--end::Title-->
                            <!--begin::Form group-->
                            <div class="fv-row mb-10">
                                <label class="form-label fs-6 fw-bolder text-dark pt-5">Email</label>
                                <input class="form-control form-control-lg form-control-solid" type="email" placeholder="" name="email" autocomplete="off" />
                            </div>
                            <!--end::Form group-->
                            <!--begin::Form group-->
                            <div class="d-flex flex-wrap pb-lg-0">
                                <button type="button" id="kt_login_password_reset_form_submit_button" class="btn btn-primary fw-bolder fs-6 px-8 py-4 my-3 me-4">Submit</button>
                                <button type="button" id="kt_login_password_reset_form_cancel_button" class="btn btn-light-primary fw-bolder fs-6 px-8 py-4 my-3">Cancel</button>
                            </div>
                            <!--end::Form group-->
                        </form>
                        <!--end::Password Reset Form-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Footer-->
                    <div class="d-flex justify-content-lg-start justify-content-center align-items-center py-2 py-lg-7 py-lg-0 fs-5 fw-bolder">
                        <a href="https://keenthemes.com" target="_blank" class="text-gray-600 text-hover-primary">About</a>
                        <a href="https://keenthemes.com/support" target="_blank" class="text-gray-600 text-hover-primary ms-10">Support</a>
                        <a href="https://themes.getbootstrap.com/product/start-multipurpose-admin-dashboard-theme/" target="_blank" class="text-gray-600 text-hover-primary ms-10">Purchase</a>
                    </div>
                    <!--end::Footer-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Login-->
        </div>
        <script>var hostUrl = "/start/assets/";</script>
        <!--begin::Javascript-->
        <!--begin::Global Javascript Bundle(used by all pages)-->
        <script src="https://preview.keenthemes.com/start/assets/plugins/global/plugins.bundle.js"></script>
        <script src="https://preview.keenthemes.com/start/assets/js/scripts.bundle.js"></script>
        <!--end::Global Javascript Bundle-->
        <!--begin::Page Custom Javascript(used by this page)-->
        <script src="https://preview.keenthemes.com/start/assets/js/custom/general/login.js"></script>
        <!--end::Page Custom Javascript-->
        </body>
</html>
