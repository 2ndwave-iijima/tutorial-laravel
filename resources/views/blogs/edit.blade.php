@extends('layouts.app')

@section('content')
<div class="container">
    <form action='/blogs/{{$blog->id}}' method='post'>
        @method('PUT')
        @csrf
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4 border bg-info text-center">
                    タイトル
                </div>
                <div class="col-md-8 border">
                    <input type='text' name='blog[title]' class="form-control" max='20' required='true' value="{{ $blog->title }}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 border bg-info text-center">
                    内容
                </div>
                <div class="col-md-8 border">
                    <textarea name='blog[content]' class="form-control" max='200'>{{ $blog->content }}</textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 border bg-info text-center">
                    監督
                </div>
                <div class="col-md-8 border">
                    <input type='number' name='blog[created_user_id]' class="form-control" min='1' required='true' value="{{ $blog->created_user_id }}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 border bg-info text-center">
                    作成日
                </div>
                <div class="col-md-8 border">
                     <input type='date' name='blog[created_at]' class="form-control" value="{{ $blog->created_at->format('Y-m-d') }}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 border bg-info text-center">
                    更新日
                </div>
                <div class="col-md-8 border">
                     <input type='date' name='blog[updated_at]' class="form-control" value="{{ $blog->updated_at->format('Y-m-d') }}">
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex mt-2">
        <div class="me-2">
        <a href="/blogs">
            <button type='button' class='btn btn-info'>一覧に戻る</button>
        </a>
        </div>
    <div>
       <button type='submit' class='btn btn-success'>保存する</button>
    </div>
    </div>
</form>
</div>
@endsection