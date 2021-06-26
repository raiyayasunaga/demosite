@extends('layouts.admin')

@section('title', 'プロフィール編集')

@section('style')
        <link href="{{ asset('/css/admin.css') }}" rel="stylesheet" id="guitar" />
@endsection

@section('content')
  <div class="container">
   <h2 class="my-3">プロフィール編集</h2>
    <form method="post" action="{{ action('Admin\ProfileController@update'), route('user.image') }}" enctype="multipart/form-data">
      @if (count($errors) > 0)
          <div class="errormessagebox">
                <ul>
                    @foreach ($errors->all() as $error) 
                          <li>{{  $error }}</li>
                    @endforeach
                </ul>
            </div>
      @endif
      <div class="row">
          <div class="col-md-3">
            <div>現在のプロフィール画像</div>
            <img src="{{ asset('storage/profile/', $user->profile_image) }}" style="width: 100px;">
          </div>

          <div class="col-md-3">
            <div>変更後のプロフィール画像</div>
              <img src="{{ asset('storage/profile/', $user->profile_image) }}" id="Newimg"  style="width: 200px;">  
          </div>
      </div>
      <div class="row">
        <input id="profile_image" type="file"  name="image" onchange="previewImage(this);">
      </div>
      <!-- formタグはややこしくなるためあえて分けて考えている -->
        <div class="row my-3">
          <div class="col-md-10">
          <div>名前</div>
            <input type="text" value="{{ ($user->name) }}" name="name">
          </div>
        </div>

        <div class="row">
            @csrf
            <button type="submit" class="btn btn-primary">変更する</button>
        </div>
    </form>
    </div>

  
@endsection
<script>
function changeCss(cssid, cssfile) {
  document.getElementById(cssid).href = cssfile;
}

// 画像を表示させる
  function previewImage(obj)
  {
    let fileReader = new FileReader();
    fileReader.onload = (function() {
      document.getElementById('Newimg').src = fileReader.result;
    });
    fileReader.readAsDataURL(obj.files[0]);
  }
</script>