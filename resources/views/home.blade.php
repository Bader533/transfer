@extends('parent')

@section('css')
<link href="{{asset('assets/css/all.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="d-flex flex-column flex-center w-100 min-h-350px min-h-lg-500px px-9">
    <div class="row w-100 gy-10 mb-md-20">
        <!--begin::Col-->
        <div class="col-md-4 px-5">
            <!--begin::Story-->
            <div class="text-center mb-10 mb-md-0">
                <!--begin::Illustration-->
                <img src="{{asset('assets/image/car.png')}}" width="285px" alt="" />
                <!--end::Illustration-->
                <!--begin::Description-->
                <div class="fw-semibold fs-6 fs-lg-4 text-muted">
                    Trasnfar &nbsp;&&nbsp;Tour
                </div>
                <!--end::Description-->
            </div>
            <!--end::Story-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-4 px-5">
            <!--begin::Story-->
            <div class="text-center mb-10 mb-md-0">
                <!--begin::Illustration-->
                <img src="{{asset('assets/image/3.png')}}" width="180px" alt="" />
                <!--end::Illustration-->
                <!--begin::Description-->
                <div class="fw-semibold fs-6 fs-lg-4 text-muted">
                    Hotels
                </div>
                <!--end::Description-->
            </div>
            <!--end::Story-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-4 px-5">
            <!--begin::Story-->
            <div class="text-center mb-10 mb-md-0">
                <!--begin::Illustration-->
                <img src="{{asset('assets/image/4.png')}}" width="180px" alt="" />
                <!--end::Illustration-->
                <!--begin::Description-->
                <div class="fw-semibold fs-6 fs-lg-4 text-muted">
                    Product
                </div>
                <!--end::Description-->
            </div>
            <!--end::Story-->
        </div>
        <!--end::Col-->

    </div>
</div>
@endsection
