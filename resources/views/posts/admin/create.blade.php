@extends('templates.layout')

@section('title', '| Create New Post')

@section('header_scripts')

@include('partials._jquery_parsley')

@endsection

@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h1>Create New Post</h1>
            <hr>
            <form method="POST" data-parsley-validate action="{{ route('post.store') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label name="title">Title:</label>
                    <input id="title" name="title" data-parsley-required class="form-control" data-parsley-trigger="change" data-parsley-maxlength="255">
                </div>
                <div class="form-group">
                    <label name="slug">Slug:</label>
                    <input id="slug" name="slug" data-parsley-required class="form-control" data-parsley-trigger="change" data-parsley-minlength="5" data-parsley-maxlength="255">
                </div>
                <div class="form-group">
                    <label name="body">Post Body:</label>
                    <textarea id="body" name="body" rows="10" data-parsley-required class="form-control"></textarea>
                </div>
                <input type="submit" value="Create Post" class="btn btn-success btn-lg btn-block">
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>
    </div>﻿
@endsection