@extends('layouts.admin')

@section('title', 'マイページ')

@section('style')
<style>
body {
  background: linear-gradient(-45deg, lightgreen, lightblue, lightpink);
  background-size: 400% 400%;
  animation: gradient 30s ease infinite;
}

@keyframes gradient {
  0% {
    background-position: 40% 0%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 40% 0%;
  }
}
</style>
@endsection

@section('content')
<ul class="m-0" id="background-mypage-image">
    <li></li>
    <li></li>
    <li></li>
    <li></li>
</ul>
    <div class="container">
        <div class="row">
            <h2><a class="button-link" href = "{{ action('Admin\ProfileController@edit') }}"><img src="{{ $user->profile_image }}" style="width: 50px; hieght: auto;">プロフィール編集</a></h2>
        </div>
        <div class="row my-3">
            <div class="col-md-4">
            <a href="{{ action('Admin\GuitarController@create') }}" role="button" class="btn btn-primary">オリジナル曲を作る！！</a>
            </div>

                <div class="col-md-8">
                    <form action="{{ action('Admin\GuitarController@mypage') }}" method="get">
                        <div class="form-group row">
                                <div class="col-8">
                                    <input type="text" class="form-control" name="mypage_title" value="{{ $mypage_title }}">
                                </div>
                                <div class="col-4">
                                    @csrf
                                    <input type="hidden" name="user_id" id="{{ $user->id }}">
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
                                    <th width="30%">曲のタイトル</th>
                                    <th width="20%">カテゴリー</th>
                                    <th width="10%">カポ</th>
                                    <th width="10%">編集</th>
                                    <th width="20%">公開する</th>
                                    <th width="10%">公開状態</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($posts as $music)
                                    <tr>
                                        <!-- 取得して投稿の値によって表示を変える -->
                                            <td class="titleStyle"><a href ="{{ route('admin.playing', ['id' => $music->id]) }}"> {{ str_limit($music->title, 100) }}</a></td>
                                        <!-- 連想配列・データベースで値を引っ張ってくる -->
                                            <td>{{ ($music->category) }}</td>
                                            <td>{{ ($music->capo) }}</td>
                                        <td>
                                            <div>
                                                <a class="btn btn-primary p-1" href="{{ action('Admin\GuitarController@edit', ['id' => $music->id]) }}">編集</a>
                                            </div>
                                            <div>
                                            <form method="get" action="{{ action('Admin\GuitarController@delete') }}" onSubmit="return check()">
                                                <button type="submit" class="btn btn-primary p-1" >消去</button>
                                                    <input type="hidden" name="id" value="{{$music->id}}">
                                            </form>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <a class="btn btn-primary p-1" href="{{ action('Admin\GuitarController@close', ['id' => $music->id]) }}">非公開</a>
                                            </div>
                                            <div>
                                            <form method="get" action="{{ action('Admin\GuitarController@open') }}" onSubmit="return check()">
                                                <button type="submit" class="btn btn-primary p-1">公開</button>
                                                <input type="hidden" name="id" value="{{$music->id}}">
                                            </form>
                                            </div>
                                        </td>
                                        <td>
                                            @if($music->public == 1)
                                            <div style="color: red;">公開済み</div>
                                            @else
                                            <div style="color: blue;">未公開</div>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('js')
<script>
  
                
function check(){

if(window.confirm('本当に実行してもよろしいですか？')){ // 確認ダイアログを表示

    return true; // 「OK」時は送信を実行

}
else{ // 「キャンセル」時の処理

 // 警告ダイアログを表示
    return false; // 送信を中止

}

}
</script>
@endsection