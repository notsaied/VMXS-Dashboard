    @extends('vmxs.master')
    @section('page_name')
    users
    @stop
    @section('content')
<div class="card">
                                        <!--begin::Header-->
                                        <div class="card-header border-0 py-5">
                                            <h3 class="card-title align-items-start flex-column">
                                                <span class="card-label fw-bolder text-dark">All Users</span>
                                                <span class="text-muted mt-3 fw-bold fs-7">More than 400+ members</span>
                                            </h3>
                                            <div class="card-toolbar">
                                                <a href="#" class="btn btn-primary fw-bolder fs-7">Send Messages</a>
                                            </div>
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div class="card-body py-0">
                                            <!--begin::Table-->
                                            <div class="table-responsive">
                                                <table class="table align-middle border-gray-100" id="kt_advance_table_widget_4">
                                                    <thead>
                                                        <tr class="text-start text-muted fw-bolder text-gray-400 text-uppercase fs-7 border-gray-100 border-bottom-1">
                                                            <td class="ps-0 w-30px py-5">
                                                                <div class="form-check form-check-custom form-check-sm form-check-solid me-2">
                                                                    <input class="form-check-input" type="checkbox" value="1">
                                                                </div>
                                                            </td>
                                                            <td class="ps-0 min-w-250px py-5">Name</td>
                                                            <td class="min-w-100px py-5">Email</td>
                                                            <td class="min-w-100px py-5">Phone</td>
                                                            <td class="min-w-100px py-5">Picture</td>
                                                            <td class="min-w-100px pe-0 text-end py-5">Action</td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="ps-0 py-6">
                                                                <div class="form-check form-check-custom form-check-sm form-check-solid me-2">
                                                                    <input class="form-check-input" type="checkbox" value="1">
                                                                </div>
                                                            </td>
                                                            <td class="ps-0">
                                                                <a href="#" class="text-gray-800 fw-bolder text-hover-primary fs-6">56037-XDER</a>
                                                            </td>
                                                            <td>
                                                                <span class="text-gray-800 fw-bolder d-block fs-6">Brasil</span>
                                                                <span class="text-muted fw-bold">Code: BR</span>
                                                            </td>
                                                            <td>
                                                                <span class="text-success fw-bolder d-block fs-6">05/28/2020</span>
                                                                <span class="text-muted fw-bold">Paid</span>
                                                            </td>
                                                            <td>
                                                                <span class="label label-lg label-light-primary label-inline">Approved</span>
                                                            </td>
                                                            <td class="pe-0 text-end">
                                                                <a href="#" class="btn btn-icon btn-bg-light btn-color-muted btn-active-color-primary btn-sm mx-3">
                                                                    <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                                    <span class="svg-icon svg-icon-4">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                            <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black"></path>
                                                                            <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black"></path>
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </a>
                                                                <a href="#" class="btn btn-icon btn-bg-light btn-color-muted btn-active-color-primary btn-sm">
                                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                                    <span class="svg-icon svg-icon-4">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                            <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black"></path>
                                                                            <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black"></path>
                                                                            <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black"></path>
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="ps-0 py-6">
                                                                <div class="form-check form-check-custom form-check-sm form-check-solid me-2">
                                                                    <input class="form-check-input" type="checkbox" value="1">
                                                                </div>
                                                            </td>
                                                            <td class="ps-0">
                                                                <a href="#" class="text-gray-800 fw-bolder text-hover-primary fs-6">05822-FXSP</a>
                                                            </td>
                                                            <td>
                                                                <span class="text-gray-800 fw-bolder d-block fs-6">Belarus</span>
                                                                <span class="text-muted fw-bold">Code: BY</span>
                                                            </td>
                                                            <td>
                                                                <span class="text-success fw-bolder d-block fs-6">02/04/2020</span>
                                                                <span class="text-muted fw-bold">Rejected</span>
                                                            </td>
                                                            <td>
                                                                <span class="label label-lg label-light-warning label-inline">In Progress</span>
                                                            </td>
                                                            <td class="pe-0 text-end">
                                                                <a href="#" class="btn btn-icon btn-bg-light btn-color-muted btn-active-color-primary btn-sm mx-3">
                                                                    <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                                    <span class="svg-icon svg-icon-4">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                            <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black"></path>
                                                                            <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black"></path>
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </a>
                                                                <a href="#" class="btn btn-icon btn-bg-light btn-color-muted btn-active-color-primary btn-sm">
                                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                                    <span class="svg-icon svg-icon-4">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                            <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black"></path>
                                                                            <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black"></path>
                                                                            <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black"></path>
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="ps-0 py-6">
                                                                <div class="form-check form-check-custom form-check-sm form-check-solid me-2">
                                                                    <input class="form-check-input" type="checkbox" value="1">
                                                                </div>
                                                            </td>
                                                            <td class="ps-0">
                                                                <a href="#" class="text-gray-800 fw-bolder text-hover-primary ont-size-lg">00347-BCLQ</a>
                                                            </td>
                                                            <td>
                                                                <span class="text-gray-800 fw-bolder d-block fs-6">Phillipines</span>
                                                                <span class="text-muted fw-bold">Code: PH</span>
                                                            </td>
                                                            <td>
                                                                <span class="text-success fw-bolder d-block fs-6">23/12/2020</span>
                                                                <span class="text-muted fw-bold">Paid</span>
                                                            </td>
                                                            <td>
                                                                <span class="label label-lg label-light-success label-inline">Success</span>
                                                            </td>
                                                            <td class="pe-0 text-end">
                                                                <a href="#" class="btn btn-icon btn-bg-light btn-color-muted btn-active-color-primary btn-sm mx-3">
                                                                    <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                                    <span class="svg-icon svg-icon-4">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                            <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black"></path>
                                                                            <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black"></path>
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </a>
                                                                <a href="#" class="btn btn-icon btn-bg-light btn-color-muted btn-active-color-primary btn-sm">
                                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                                    <span class="svg-icon svg-icon-4">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                            <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black"></path>
                                                                            <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black"></path>
                                                                            <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black"></path>
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="ps-0 py-6">
                                                                <div class="form-check form-check-custom form-check-sm form-check-solid me-2">
                                                                    <input class="form-check-input" type="checkbox" value="1">
                                                                </div>
                                                            </td>
                                                            <td class="ps-0">
                                                                <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">4472-QREX</a>
                                                            </td>
                                                            <td>
                                                                <span class="text-gray-800 fw-bolder d-block fs-6">Argentina</span>
                                                                <span class="text-muted fw-bold">Code: AR</span>
                                                            </td>
                                                            <td>
                                                                <span class="text-success fw-bolder d-block fs-6">17/09/2021</span>
                                                                <span class="text-muted fw-bold">Pending</span>
                                                            </td>
                                                            <td>
                                                                <span class="label label-lg label-light-danger label-inline">Rejected</span>
                                                            </td>
                                                            <td class="pe-0 text-end">
                                                                <a href="#" class="btn btn-icon btn-bg-light btn-color-muted btn-active-color-primary btn-sm mx-3">
                                                                    <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                                    <span class="svg-icon svg-icon-4">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                            <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black"></path>
                                                                            <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black"></path>
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </a>
                                                                <a href="#" class="btn btn-icon btn-bg-light btn-color-muted btn-active-color-primary btn-sm">
                                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                                    <span class="svg-icon svg-icon-4">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                            <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black"></path>
                                                                            <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black"></path>
                                                                            <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black"></path>
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
    @stop