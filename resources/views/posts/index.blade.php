@extends('layouts.app')

@section('content')
<div class="container-fluid">
    @foreach ($posts as $post)
        <div class="row pb-5">
            <div class="col-6 offset-1">
                <a href="/profile/{{ $post->user->id }}">
                    <img src="/storage/{{ $post->image }}" class="w-100">
                </a>
            </div>
            <div class="col-4">
                <div class="d-flex align-items-center">
                    <div class="pr-3">
                        <img src="{{$post->user->profile->profileImage()}}" class="w-100 rounded-circle" style="max-width: 75px;">
                    </div>
                    <div class="justyfy-center">
                        <div class="font-weight-bold">
                            <a href="/profile/{{ $post->user->id }}">
                                <span class="text-dark">{{ $post->user->username }}</span>
                            </a>

                            <follow-button user-id="{{ $post->user->id }}" follows="{{ true }}"></follow-button>
                        </div>
                    </div>
                </div>

                <hr>

                <p>
                    <span class="font-weight-bold">
                        <a href="/profile/{{ $post->user->id }}">
                            <span class="text-dark">{{ $post->user->username }}</span>
                        </a>
                    </span>
                    {{ $post->caption }}
                </p>
            </div>
        </div>
    @endforeach
    <div class="row">
        <div class="col-6 d-flex justify-content-center offset-1">
            {{ $posts->links() }}
        </div>
        <div class="col-4"></div>
    </div>
</div>
@endsection
