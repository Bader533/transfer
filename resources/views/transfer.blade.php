@extends('parent')

@section('css')
<link href="{{asset('assets/css/all.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="d-flex flex-column flex-center w-100 min-h-350px min-h-lg-500px px-9">

    <div id="page_form" class="p-20 bg-light mr-3 bg-gray-200 rounded">
        <form id="form_data">
            <div class="form-group">
                <input type="date" class="form-control form-control-lg">
            </div><br>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control form-control-lg" placeholder="passengers">
                </div>
                <div class="col">
                    <input type="text" class="form-control form-control-lg" placeholder="bags">
                </div>
            </div><br>
            <div class="form-group">
                <input type="text" placeholder="name" class="form-control form-control-lg">
            </div><br>
            <div class="form-group">
                <input type="text" placeholder="whatsapp" class="form-control form-control-lg">
            </div><br>
            <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection
