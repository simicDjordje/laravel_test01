@extends("layouts.app")


@section("content")
    <div class="container-fluid">
        <div class="container">
            <div class="row mt-5 bg-light rounded">
                <div class="col-12" style="border-bottom: 1px solid #000;">
                    <h1 class="mt-4">Registration</h1>
                </div>

                <div class="col-12 mt-4">
                    <form action="{{route('register')}}" method="POST">
                        @csrf
                        <input type="text" name="name" class="" placeholder="Name" value="{{old('name')}}" @error("name") style="border:1px solid red;" @enderror>
                        @error("name")
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                        <hr>
                        <input type="text" name="username" class="" placeholder="Username" value="{{old('username')}}"  @error("username") style="border:1px solid red;" @enderror>
                        @error("username")
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                        <hr>
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
                        <input type="password" name="password_confirmation" class="" placeholder="Confirm Password" @error("password_confirmation") style="border:1px solid red;" @enderror>
                        @error("password_confirmation")
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                        <hr>
                        <button type="submit" class="mb-4 btn btn-dark">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
