@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Share your config with link!
    </h2>
@endsection


@section('body')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a class="share_url" href="{{route("sharedConfig", [ $config, $config->share_url])}}">{{route("sharedConfig", [ $config, $config->share_url])}}</a>
                </div>
            </div>
        </div>


@endsection
