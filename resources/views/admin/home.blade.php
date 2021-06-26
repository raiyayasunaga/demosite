@extends('layouts.admin')

@section('title', 'ホームページ')

@section('style')
<!-- 多分この中にlinkをforeachで追記する -->
<style>
</style>
@endsection

@section('content')
<ul class="m-0" id="background-home-image">
    <li></li>
    <li></li>
    <li></li>
    <li></li>
</ul>
<div id="bgskin-home">
    <div class="container">
        <div class="row py-3">
            <h2>公開一覧</h2>
        </div>
        <div class="row">
            <div class="col-md-8">
                <form action="{{ action('Admin\GuitarController@home') }}" method="get">
                    <div class="form-group row">
                        <div class="col-8">
                            <input type="text" class="form-control" name="cond_title" value="{{ $cond_title }}">
                        </div>
                        <div class="col-4">
                        @csrf
                            <input type="submit" class="btn btn-primary" value="検索">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <div class="col-8">
                            <select class="form-control mb-3" name="category" value="{{ $category }}">
                                <option value="洋楽">洋楽</option>
                                <option value="Jpop">Jpop</option>
                                <option value="ロック">ロック</option>
                                <option value="アニソン">アニソン</option>
                                <option value="ジブリ">ジブリ</option>
                                <option value="なし">なし</option>
                                <option value="" selected>カテゴリー</option>
                            </select>
                         </div>
                        <div class="col-4">
                            @csrf
                            <input type="submit" class="btn btn-primary" value="検索">
                        </div>
                        
                    </div>
                </form>
            </div>
        </div>
        

        <div class="row">
            <div class="list-news col-md-12 mx-auto">
                <div class="row">
                    <table class="table">
                        <thead>
                            <tr>
                                <th width="50%">曲のタイトル</th>
                                <th width="20%">カテゴリー</th>
                                <th width="20%">カポ数</th>
                                <th width="10%">作者</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $music)
                                @if($music->public)
                                    <tr>
                                        <td><a href ="{{ route('admin.playing', ['id' => $music->id]), }}"> {{ $music->title }}</a></td>
                                        <td>{{ ($music->category) }}</td>
                                        <td class="mobile">{{ ($music->capo)}}</td>
                                        <td><img src="{{ $music->user->profile_image }}" style="width: 40px;" id="img"></td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>
@endsection

@section('js')
@endsection