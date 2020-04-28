@extends('other.layout')

@section('title', 'Page Title')


@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection



@section('content')
    <p>This is my body content.</p>

    <p>{{ $name }}</p>


    @if ( $name === '1')
        <p>1</p>
    @elseif ($name === '2')
        <p>2</p>
    @else
        <p>Nope</p>
    @endif


    @switch($name)
    @case(1)
        <p>11</p>
        @break

    @case(2)
        <p>22</p>
        @break

    @default
        <p>3333333</p>
    @endswitch


@endsection
