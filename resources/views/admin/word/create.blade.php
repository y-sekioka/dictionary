@extends('layouts.admin')
@section('title'.'単語登録')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>単語登録</h2>
                <form action="{{ action('Admin\WordController@create') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                      <div class="form-group row">  
                        <input type="text" class="form-control" name="word" value="">
                      </div>
                      
                      <div class="form-group row">
                        <textarea class="form-control" rows=6 name="explain">{{ テスト初期値 }}</textarea>
                      </div>
                        {{ csrf_field() }}
                        <input type="submit" class="btn btn-primary" value="追加">
                </form>
            </div>
        </div>
    </div>
@endsection