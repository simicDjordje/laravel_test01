@extends("layouts.app")


@section("content")
    <div class="container-fluid">
        <div class="container">
            @if(session("success"))
                <div class="row mt-5 bg-success rounded">
                    <div class="col-12 text-center">
                        <h5 class="mt-3 text-light mb-3">{{session("success")}}</h5>
                    </div>
                </div>
            @endif
            <div class="row mt-5 bg-light rounded">
                Home
            </div>
        </div>
    </div>
@endsection
