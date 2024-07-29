@extends('layouts.default')
@section('title', 'Home Page - Laravel Demo')
@section('main-content')
    <div class="row text-center">
        {{-- <h3 class=" text-center my-5">This is the Home page.</h3> --}}
        <p>{!! $heading !!}</p>
        <br>

        {{-- Conditional Statements --}}
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

        {{-- ! Loop statements in view blade --}}
        {{-- @for ($i = 0; $i <= 10; $i++)
            <p>The number is <b>{{ $i }}</b></p>
        @endfor --}}

        {{-- @foreach ($authors as $author)
            <p>Authors name is : <b>{{ $author }}</b></p>
        @endforeach --}}

        {{-- While Loop
        fetch_assoc() == array_pop()

        --}}
        {{-- @if (count($authors) > 0)
            @while ($author = array_pop($authors))
                <p>Authors name is : <b>{{ $author }}</b></p>
            @endwhile
        @else
            <p>No authors...</p>
        @endif --}}

        {{-- Or --}}

        {{-- ForElse --}}
        @forelse ($authors as $author)
            <p>Authors name is : <b>{{ $author }}</b></p>
        @empty
            <p>No authors...</p>
        @endforelse
    </div>
@endsection
