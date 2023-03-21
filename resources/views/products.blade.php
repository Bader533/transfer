@extends('parent')

@section('css')
<link href="{{asset('assets/css/all.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="d-flex flex-column flex-center w-100 min-h-350px min-h-lg-500px px-9">
    <div class="tab-content">
        <!--begin::Tap pane-->
        <div class="tab-pane fade show active" id="kt_pos_food_content_1">
            <!--begin::Wrapper-->
            <div class="d-flex flex-wrap d-grid gap-5" id="product_content">
                <!--begin::Card-->
                <div class="card card-flush flex-row-fluid">
                    <!--begin::Body-->
                    <div class="card-body text-center">
                        <!--begin::Food img-->
                        <img src="assets/media/stock/food/img-2.jpg"
                            class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                        <!--end::Food img-->
                        <!--begin::Info-->
                        <div class="mb-2">
                            <!--begin::Title-->
                            <div class="text-center">
                                <span
                                    class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">T-Bone
                                    Stake</span>
                                <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to
                                    cook</span>
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Info-->
                        <!--begin::Total-->
                        <span class="text-success text-end fw-bold fs-1">$16.50$</span>
                        <!--end::Total-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-flush flex-row-fluid">
                    <!--begin::Body-->
                    <div class="card-body text-center">
                        <!--begin::Food img-->
                        <img src="assets/media/stock/food/img-7.jpg"
                            class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                        <!--end::Food img-->
                        <!--begin::Info-->
                        <div class="mb-2">
                            <!--begin::Title-->
                            <div class="text-center">
                                <span
                                    class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Chef’s
                                    Salmon</span>
                                <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to
                                    cook</span>
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Info-->
                        <!--begin::Total-->
                        <span class="text-success text-end fw-bold fs-1">$12.40$</span>
                        <!--end::Total-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-flush flex-row-fluid">
                    <!--begin::Body-->
                    <div class="card-body text-center">
                        <!--begin::Food img-->
                        <img src="assets/media/stock/food/img-8.jpg"
                            class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                        <!--end::Food img-->
                        <!--begin::Info-->
                        <div class="mb-2">
                            <!--begin::Title-->
                            <div class="text-center">
                                <span
                                    class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Ramen</span>
                                <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to
                                    cook</span>
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Info-->
                        <!--begin::Total-->
                        <span class="text-success text-end fw-bold fs-1">$14.90$</span>
                        <!--end::Total-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-flush flex-row-fluid">
                    <!--begin::Body-->
                    <div class="card-body text-center">
                        <!--begin::Food img-->
                        <img src="assets/media/stock/food/img-4.jpg"
                            class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                        <!--end::Food img-->
                        <!--begin::Info-->
                        <div class="mb-2">
                            <!--begin::Title-->
                            <div class="text-center">
                                <span
                                    class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Chicken
                                    Breast</span>
                                <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to
                                    cook</span>
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Info-->
                        <!--begin::Total-->
                        <span class="text-success text-end fw-bold fs-1">$9.00$</span>
                        <!--end::Total-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-flush flex-row-fluid">
                    <!--begin::Body-->
                    <div class="card-body text-center">
                        <!--begin::Food img-->
                        <img src="assets/media/stock/food/img-10.jpg"
                            class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                        <!--end::Food img-->
                        <!--begin::Info-->
                        <div class="mb-2">
                            <!--begin::Title-->
                            <div class="text-center">
                                <span
                                    class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Tenderlion
                                    Steak</span>
                                <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to
                                    cook</span>
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Info-->
                        <!--begin::Total-->
                        <span class="text-success text-end fw-bold fs-1">$19.00$</span>
                        <!--end::Total-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-flush flex-row-fluid">
                    <!--begin::Body-->
                    <div class="card-body text-center">
                        <!--begin::Food img-->
                        <img src="assets/media/stock/food/img-9.jpg"
                            class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                        <!--end::Food img-->
                        <!--begin::Info-->
                        <div class="mb-2">
                            <!--begin::Title-->
                            <div class="text-center">
                                <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Soup
                                    of
                                    the Day</span>
                                <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to
                                    cook</span>
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Info-->
                        <!--begin::Total-->
                        <span class="text-success text-end fw-bold fs-1">$7.50$</span>
                        <!--end::Total-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-flush flex-row-fluid">
                    <!--begin::Body-->
                    <div class="card-body text-center">
                        <!--begin::Food img-->
                        <img src="assets/media/stock/food/img-3.jpg"
                            class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                        <!--end::Food img-->
                        <!--begin::Info-->
                        <div class="mb-2">
                            <!--begin::Title-->
                            <div class="text-center">
                                <span
                                    class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Pancakes</span>
                                <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to
                                    cook</span>
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Info-->
                        <!--begin::Total-->
                        <span class="text-success text-end fw-bold fs-1">$6.50$</span>
                        <!--end::Total-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-flush flex-row-fluid">
                    <!--begin::Body-->
                    <div class="card-body text-center">
                        <!--begin::Food img-->
                        <img src="assets/media/stock/food/img-5.jpg"
                            class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                        <!--end::Food img-->
                        <!--begin::Info-->
                        <div class="mb-2">
                            <!--begin::Title-->
                            <div class="text-center">
                                <span
                                    class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Breakfast</span>
                                <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to
                                    cook</span>
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Info-->
                        <!--begin::Total-->
                        <span class="text-success text-end fw-bold fs-1">$8.20$</span>
                        <!--end::Total-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Card-->

            </div>
            <!--end::Wrapper-->
        </div><br>
        <!--end::Tap pane-->

    </div>
</div>
@endsection
