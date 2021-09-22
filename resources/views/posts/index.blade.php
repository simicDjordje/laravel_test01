@extends("layouts.app")


@section("content")
<style type="text/css">
    .w-5{
        width: 50px !important;
        height: 50px !important;
    }
</style>
    <div class="container-fluid">
        <div class="container">
            <div class="row mt-5 bg-light rounded">
                <div class="col-12" style="border-bottom: 1px solid #000;">
                    <h1 class="mt-4">Post</h1>
                </div>

                <div class="col-12 mt-4">
                    <form action="{{route('posts')}}" method="POST">
                        @csrf
                        <label class="mb-3" for="content"><b>{{auth()->user()->name}}, tell us what's on your mind today?</b></label>
                        <br>
                        <textarea class="form-control" name="content" id="content" style="@error('content') border: 1px solid red; @enderror" placeholder="What's on your mind today?">


                        </textarea>
                        @error("content")
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                        <hr>
                        <button type="submit" class="btn btn-primary mb-3">Post</button>
                    </form>
                </div>
                @if(session("status"))
                    <h5 class="mt-2 text-success mb-2">{{session("status")}}</h5>
                @endif
            </div>

            @if($posts->count())
                @foreach($posts as $post)
                    <div class="row mt-5 bg-light rounded">
                        <div class="col-9 mt-2">
                            <a href="#" class="mt-3"><b>{{$post->user->name}}</b></a>
                        </div>
                        <div class="col-3 mt-2">
                            <p class="text-secondary float-end">{{$post->created_at->diffForHumans()}}</p>
                        </div>

                        <div class="col-12 mb-3">
                            {{$post->content}}
                        </div>
                        <hr>
                        <div class="col-1 mb-3">
                            <form action="#" method="post">
                                @csrf
                                <button type="submit" class="text-primary float-end">Like</button>
                            </form>
                        </div>
                        <div class="col-1 mb-3">
                            <form action="#" method="post">
                                @csrf
                                <button type="submit" class="text-primary">Unlike</button>
                            </form>
                        </div>
                        <div class="col-12 mb-4">
                            <span class="ml-4">{{$post->likes->count()}} @if($post->likes->count() == 1) like @else likes @endif</span>
                        </div>
                    </div>
                @endforeach
                <hr>
                <div class="row rounded bg-light">
                    {{$posts->links()}}
                </div>


            @else
                <div class="row mt-5 bg-light rounded text-center">
                    <h5 class="mt-3 mb-3">There are no posts</h5>
                </div>
            @endif
        </div>
    </div>
@endsection
