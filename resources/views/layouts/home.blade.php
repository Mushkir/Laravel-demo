@extends('layouts.default')
@section('title', 'Home Page - Laravel Demo')
@section('main-content')
    <div class="row text-center">
        {{-- <h3 class=" text-center my-5">This is the Home page.</h3> --}}
        <p>{!! $heading !!}</p>
        <br>

        <p>
            {{-- Conditional Statements in View --}}
            {{-- @if ($no_of_users == 0)
                No users
            @elseif ($no_of_users == 1)
                We have one user
            @else
                We have multiple users
            @endif --}}

            {{-- @unless ($is_user_online)
                User is offline
            @endunless --}}

            {{-- @if ($is_user_online == 0)
                User is offline
            @else
                @if ($no_of_users == 0)
                    No users
                @elseif ($no_of_users == 1)
                    We have one user
                @else
                    We have multiple users
                @endif
            @endif --}}

            {{-- Or --}}
            {{-- @unless ($is_user_online)
                User is offline
            @endunless --}}
        </p>
    </div>
@endsection
