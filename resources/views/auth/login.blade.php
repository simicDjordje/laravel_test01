@extends("layouts.app")


@section("content")
    <div class="container-fluid">
        <div class="container">
            @if(session("status"))
                <div class="row mt-5 bg-danger rounded">
                    <div class="col-12 text-center">
                        <h5 class="mt-3 text-light mb-3">{{session("status")}}</h5>
                    </div>
                </div>
            @endif
            <div class="row mt-5 bg-light rounded">
                <div class="col-12" style="border-bottom: 1px solid #000;">
                    <h1 class="mt-4">Login</h1>
                </div>

                <div class="col-12 mt-4">
                    <form action="{{route('login')}}" method="POST">
                        @csrf
                        <input type="email" name="email" class="" placeholder="Email" value="{{old('email')}}"  @error("email") style="border:1px solid red;" @enderror>
                        @error("email")
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                        <hr>
                        <input type="password" name="password" class="" placeholder="Password" @error("password") style="border:1px solid red;" @enderror>
                        @error("password")
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                        <hr>
                        <input type="checkbox" name="remember" id="remember">
                        <label for="remember">Remember me</label>
                        <hr>
                        <button type="submit" class="mb-4 btn btn-dark">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
