@extends('layouts.master')

@section('title' , $title ?? 'Home_inline')
{{--Styles--}}
@section('style')
    {{ $style ?? '' }}
@endsection

@section('body')
    {{ $slot ?? '' }}
@endsection

{{--Scripts--}}
@section('script')
    {{ $script ?? '' }}
@endsection
