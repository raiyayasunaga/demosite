@extends('layouts.admin')

@section('title', '曲の作成')

@section('style')
<style>
   
</style>
@endsection

@section('content')
<div class="container">
    <form action="{{ action('Admin\GuitarController@create') }}" method="post" enctype="multipart/form-data">
        @if (count($errors) > 0)
            <ul>
                @foreach($errors->all() as $e)
                    <li>{{ $e }}</li>
                @endforeach
            </ul>
        @endif
        <div class="form-group row mt-5">
            <label class="col-md-2" for="title">曲のタイトル</label>
            <div class="col-10">
                <input type="text" class="form-control" name="title" value="{{ old('title') }}">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-2" for="category" >カテゴリー</label>
            <div class="col-10">
                <select class="form-control mb-3" name="category" value="{{ old('category') }}">
                        <option value="なし" selected  @if(old('category')=='なし') selected  @endif>なし</option>
                        <option value="洋楽" @if(old('category')=='洋楽') selected  @endif>洋楽</option>
                        <option value="Jpop" @if(old('category')=='Jpop') selected  @endif>Jpop</option>
                        <option value="ロック"  @if(old('category')=='ロック') selected  @endif>ロック</option>
                        <option value="アニソン"  @if(old('category')=='アニソン') selected  @endif>アニソン</option>
                        <option value="ジブリ"  @if(old('category')=='ジブリ') selected  @endif>ジブリ</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-2" for="capo">設定するカポ数</label>
                <div class="col-10">
                    <select class="form-control mb-3" name = "capo" value="{{ old('capo') }}">
                        <option value="半音"  @if(old('capo')=='半音') selected  @endif>半音</option>
                        <option value="+-0" selected @if(old('capo')=='±0') selected  @endif>±0</option>
                        <option value="+1" @if(old('capo')=='+1') selected  @endif>+1</option>
                        <option value="+2" @if(old('capo')=='+2') selected  @endif>+2</option>
                        <option value="+3" @if(old('capo')=='+3') selected  @endif>+3</option>
                        <option value="+4" @if(old('capo')=='+4') selected  @endif>+4</option>
                        <option value="+5" @if(old('capo')=='+5') selected  @endif>+5</option>
                        <option value="+6" @if(old('capo')=='+6') selected  @endif>+6</option>
                        <option value="+7" @if(old('capo')=='+7') selected  @endif>+7</option>
                    </select>
                </div>
        </div>
        <!-- 動画リンク -->
        <div class="form-group row">
            <label class="col-md-2" for="title">動画リンク</label>
            <div class="col-10">
                <input type="text" class="form-control" name="video_link" value="{{ old('video_link') }}">
            </div>
        </div>
            <div class="row">
                <select id="selectCords" onchange="keyChange();" class="form-control">
                    <option value="1">C = Am</option>
                    <option value="2">C# = A#m</option>
                    <option value="3">D = Bm</option>
                    <option value="4">E♭ = Cm</option>
                    <option value="5">E = C#m</option>
                    <option value="6">F = Dm</option>
                    <option value="7">F# = D#m</option>
                    <option value="8">G = Em</option>
                    <option value="9">A♭ = Fm</option>
                    <option value="10">A = F#m</option>
                    <option value="11">B♭ = Gm</option>
                    <option value="12">B = G#m</option>
                </select>

                <div class="col-12 my-5">
                    <div id="otherCords">
                        <div id="key_C">
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[C]');">C</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[Dm]');">Dm</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[Em]');">Em</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[F]');">F</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[G]');">G</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[Am]');">Am</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[Bm]');">Bm</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[Cmaj7]');">Cmaj7</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[Dm7]');">Dm7</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[Em7]');">Em7</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[Fmaj7]');">Fmaj7</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[G7]');">G7</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[Am7]');">Am7</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[Bm7-5]');">Bm7-5</button>
                        </div>
                        <div id="key_C#" style="display: none;">
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[C#]');">C#</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[D#m]');">D#m</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[Fm]');">Fm</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[F#]');">F#</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[G#]');">G#</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[A#m]');">A#m</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[Cm]');">Cm</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[C#maj7]');">C#maj7</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[D#m7]');">D#m7</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[Fm7]');">Fm7</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[F#maj7]');">F#maj7</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[G#7]');">G#7</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[A#m7]');">A#m7</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[Cm7-5]');">Cm7-5</button>
                        </div>
                        <div id="key_D" style="display: none;">
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[D]');">D</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[Em]');">Em</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[F#m]');">F#m</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[G]');">G</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[A]');">A</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[Bm]');">Bm</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[C#m]');">C#m</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[Dmaj7]');">Dmaj7</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[Em7]');">Em7</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[F#m7]');">F#m7</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[Gmaj7]');">Gmaj7</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[A7]');">A7</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[Bm7]');">Bm7</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[C#m7-5]');">C#m7-5</button>
                        </div>
                        
                        <div id="key_Eb" style="display: none;">
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[E♭]');">E♭</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[Fm]');">Fm</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[Gm]');">Gm</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[A♭]');">A♭</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[B♭]');">B♭</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[Cm]');">Cm</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[Dm]');">Dm</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[E♭maj7]');">E♭maj7</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[Fm7]');">Fm7</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[Gm7]');">Gm7</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[A♭maj7]');">A♭maj7</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[B♭7]');">B♭7</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[Cm7]');">Cm7</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[Dm7-5]');">Dm7-5</button>
                        </div>
                        
                        <div id="key_E" style="display: none;">
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[E]');">E</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[F#m]');">F#m</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[G#m]');">G#m</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[A]');">A</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[B]');">B</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[C#m]');">C#m</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[D#m]');">D#m</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[Emaj7]');">Emaj7</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[F#m7]');">F#m7</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[G#m7]');">G#m7</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[Amaj7]');">Amaj7</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[B7]');">B7</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[C#m7]');">C#m7</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[D#m7-5]');">D#m7-5</button>
                        </div>
                        
                        <div id="key_F" style="display: none;">
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[F]');">F</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[Gm]');">Gm</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[Am]');">Am</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[B♭]');">B♭</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[C]');">C</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[Dm]');">Dm</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[Em]');">Em</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[Fmaj7]');">Fmaj7</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[Gm7]');">Gm7</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[Am7]');">Am7</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[B♭maj7]');">B♭maj7</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[C7]');">C7</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[Dm7]');">Dm7</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[Em7-5]');">Em7-5</button>
                        </div>
                        
                        <div id="key_F#" style="display: none;">
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[F#]');">F#</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[G#m]');">G#m</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[A#m]');">A#m</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[B]');">B</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[C#]');">C#</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[D#m]');">D#m</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[Fm]');">Fm</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[F#maj7]');">F#maj7</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[G#m7]');">G#m7</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[A#m7]');">A#m7</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[Bmaj7]');">Bmaj7</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[C#7]');">C#7</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[D#m7]');">D#m7</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[Fm7-5]');">Fm7-5</button>
                        </div>
                        
                        <div id="key_G" style="display: none;">
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[G]');">G</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[Am]');">Am</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[Bm]');">Bm</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[C]');">C</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[D]');">D</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[Em]');">Em</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[F#m]');">F#m</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[Gmaj7]');">Gmaj7</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[Am7]');">Am7</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[Bm7]');">Bm7</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[Cmaj7]');">Cmaj7</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[D7]');">D7</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[Em7]');">Em7</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[F#m7-5]');">F#m7-5</button>
                        </div>
                        
                        <div id="key_Ab" style="display: none;">
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[A♭]');">A♭</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[B♭m]');">B♭m</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[Cm]');">Cm</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[D♭]');">D♭</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[E♭]');">E♭</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[Fm]');">Fm</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[Gm]');">Gm</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[A♭maj7]');">A♭maj7</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[B♭m7]');">B♭m7</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[Cm7]');">Cm7</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[D♭maj7]');">D♭maj7</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[E♭7]');">E♭7</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[Fm7]');">Fm7</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[Gm7-5]');">Gm7-5</button>
                        </div>
                        
                        <div id="key_A" style="display: none;">
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[A]');">A</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[Bm]');">Bm</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[C#m]');">C#m</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[D]');">D</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[E]');">E</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[F#m]');">F#m</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[G#m]');">G#m</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[Amaj7]');">Amaj7</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[Bm7]');">Bm7</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[C#m7]');">C#m7</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[Dmaj7]');">Dmaj7</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[E7]');">E7</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[F#m7]');">F#m7</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[G#m7-5]');">G#m7-5</button>
                        </div>
                        
                        <div id="key_Bb" style="display: none;">
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[B♭]');">B♭</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[Cm]');">Cm</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[Dm]');">Dm</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[E♭]');">E♭</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[F]');">F</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[Gm]');">Gm</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[Am]');">Am</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[B♭maj7]');">B♭maj7</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[Cm7]');">Cm7</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[Dm7]');">Dm7</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[E♭maj7]');">E♭maj7</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[F7]');">F7</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[Gm7]');">Gm7</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[Am7-5]');">Am7-5</button>
                        </div>
                        
                        <div id="key_B" style="display: none;">
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[B]');">B</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[C#m]');">C#m</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[D#m]');">D#m</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[E]');">E</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[F#]');">F#</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[G#m]');">G#m</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[A#m]');">A#m</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[Bmaj7]');">Bmaj7</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[C#m7]');">C#m7</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[D#m7]');">D#m7</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[Emaj7]');">Emaj7</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[F#7]');">F#7</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[G#m7]');">G#m7</button>
                            <button type="button"class="btn btn-outline-primary m-1" onclick="chord_insert('[A#m7-5]');">A#m7-5</button>
                        </div>
                    </div>
                </div>

                <div class="creata-text">
                <textarea placeholder="歌詞、コードを入力" name="lyrics" class="form-control" onkeyup="origindata()" id="origin-data" rows="5" value="{{ old('lyrics') }}" style="height: 134px; width: 555px;"></textarea>
                </div>
                
                <div class="ml-3 desc-text">
                    <h4>コードの書き方</h4>
                    <p>テキストの端まで行ったら、必ず改行してください</p>
                    <p>※これはメインで視聴するのはスマホ画面ですのでレイアウトを合わせるためです。</p>
                </div>
                    <p class="col-12 my-5" id="preview">
                    </p>
                </div> 
                @csrf
                <input type="submit" class="btn btn-primary mb-5" value="追加する">
            </div>
    </form>    
</div>
@endsection

@section('js')
<script>
    //セレクトでボタンの種類を変える
    
    function keyChange() {
        if(document.getElementById('selectCords')){
            id = document.getElementById('selectCords').value;
            if(id == '1') {
                document.getElementById('key_C').style.display = "";
                document.getElementById('key_C#').style.display = "none";
                document.getElementById('key_D').style.display = "none";
                document.getElementById('key_Eb').style.display = "none";
                document.getElementById('key_E').style.display = "none";
                document.getElementById('key_F').style.display = "none";
                document.getElementById('key_F#').style.display = "none";
                document.getElementById('key_G').style.display = "none";
                document.getElementById('key_Ab').style.display = "none";
                document.getElementById('key_A').style.display = "none";
                document.getElementById('key_Bb').style.display = "none";
                document.getElementById('key_B').style.display = "none";
            }else if(id == '2') {
                document.getElementById('key_C').style.display = "none";
                document.getElementById('key_C#').style.display = "";
                document.getElementById('key_D').style.display = "none";
                document.getElementById('key_Eb').style.display = "none";
                document.getElementById('key_E').style.display = "none";
                document.getElementById('key_F').style.display = "none";
                document.getElementById('key_F#').style.display = "none";
                document.getElementById('key_G').style.display = "none";
                document.getElementById('key_Ab').style.display = "none";
                document.getElementById('key_A').style.display = "none";
                document.getElementById('key_Bb').style.display = "none";
                document.getElementById('key_B').style.display = "none";
            }else if(id == '3') {
                document.getElementById('key_C').style.display = "none";
                document.getElementById('key_C#').style.display = "none";
                document.getElementById('key_D').style.display = "";
                document.getElementById('key_Eb').style.display = "none";
                document.getElementById('key_E').style.display = "none";
                document.getElementById('key_F').style.display = "none";
                document.getElementById('key_F#').style.display = "none";
                document.getElementById('key_G').style.display = "none";
                document.getElementById('key_Ab').style.display = "none";
                document.getElementById('key_A').style.display = "none";
                document.getElementById('key_Bb').style.display = "none";
                document.getElementById('key_B').style.display = "none";
            }else if(id == '4') {
                document.getElementById('key_C').style.display = "none";
                document.getElementById('key_C#').style.display = "none";
                document.getElementById('key_D').style.display = "none";
                document.getElementById('key_Eb').style.display = "";
                document.getElementById('key_E').style.display = "none";
                document.getElementById('key_F').style.display = "none";
                document.getElementById('key_F#').style.display = "none";
                document.getElementById('key_G').style.display = "none";
                document.getElementById('key_Ab').style.display = "none";
                document.getElementById('key_A').style.display = "none";
                document.getElementById('key_Bb').style.display = "none";
                document.getElementById('key_B').style.display = "none";
            }else if(id == '5') {
                document.getElementById('key_C').style.display = "none";
                document.getElementById('key_C#').style.display = "none";
                document.getElementById('key_D').style.display = "none";
                document.getElementById('key_Eb').style.display = "none";
                document.getElementById('key_E').style.display = "";
                document.getElementById('key_F').style.display = "none";
                document.getElementById('key_F#').style.display = "none";
                document.getElementById('key_G').style.display = "none";
                document.getElementById('key_Ab').style.display = "none";
                document.getElementById('key_A').style.display = "none";
                document.getElementById('key_Bb').style.display = "none";
                document.getElementById('key_B').style.display = "none";
            }else if(id == '6') {
                document.getElementById('key_C').style.display = "none";
                document.getElementById('key_C#').style.display = "none";
                document.getElementById('key_D').style.display = "none";
                document.getElementById('key_Eb').style.display = "none";
                document.getElementById('key_E').style.display = "none";
                document.getElementById('key_F').style.display = "";
                document.getElementById('key_F#').style.display = "none";
                document.getElementById('key_G').style.display = "none";
                document.getElementById('key_Ab').style.display = "none";
                document.getElementById('key_A').style.display = "none";
                document.getElementById('key_Bb').style.display = "none";
                document.getElementById('key_B').style.display = "none";
            }else if(id == '7') {
                document.getElementById('key_C').style.display = "none";
                document.getElementById('key_C#').style.display = "none";
                document.getElementById('key_D').style.display = "none";
                document.getElementById('key_Eb').style.display = "none";
                document.getElementById('key_E').style.display = "none";
                document.getElementById('key_F').style.display = "none";
                document.getElementById('key_F#').style.display = "";
                document.getElementById('key_G').style.display = "none";
                document.getElementById('key_Ab').style.display = "none";
                document.getElementById('key_A').style.display = "none";
                document.getElementById('key_Bb').style.display = "none";
                document.getElementById('key_B').style.display = "none";
            }else if(id == '8') {
                document.getElementById('key_C').style.display = "none";
                document.getElementById('key_C#').style.display = "none";
                document.getElementById('key_D').style.display = "none";
                document.getElementById('key_Eb').style.display = "none";
                document.getElementById('key_E').style.display = "none";
                document.getElementById('key_F').style.display = "none";
                document.getElementById('key_F#').style.display = "none";
                document.getElementById('key_G').style.display = "";
                document.getElementById('key_Ab').style.display = "none";
                document.getElementById('key_A').style.display = "none";
                document.getElementById('key_Bb').style.display = "none";
                document.getElementById('key_B').style.display = "none";
            }else if(id == '9') {
                document.getElementById('key_C').style.display = "none";
                document.getElementById('key_C#').style.display = "none";
                document.getElementById('key_D').style.display = "none";
                document.getElementById('key_Eb').style.display = "none";
                document.getElementById('key_E').style.display = "none";
                document.getElementById('key_F').style.display = "none";
                document.getElementById('key_F#').style.display = "none";
                document.getElementById('key_G').style.display = "none";
                document.getElementById('key_Ab').style.display = "";
                document.getElementById('key_A').style.display = "none";
                document.getElementById('key_Bb').style.display = "none";
                document.getElementById('key_B').style.display = "none";
            }else if(id == '10') {
                document.getElementById('key_C').style.display = "none";
                document.getElementById('key_C#').style.display = "none";
                document.getElementById('key_D').style.display = "none";
                document.getElementById('key_Eb').style.display = "none";
                document.getElementById('key_E').style.display = "none";
                document.getElementById('key_F').style.display = "none";
                document.getElementById('key_F#').style.display = "none";
                document.getElementById('key_G').style.display = "none";
                document.getElementById('key_Ab').style.display = "none";
                document.getElementById('key_A').style.display = "";
                document.getElementById('key_Bb').style.display = "none";
                document.getElementById('key_B').style.display = "none";
            }else if(id == '11') {
                document.getElementById('key_C').style.display = "none";
                document.getElementById('key_C#').style.display = "none";
                document.getElementById('key_D').style.display = "none";
                document.getElementById('key_Eb').style.display = "none";
                document.getElementById('key_E').style.display = "none";
                document.getElementById('key_F').style.display = "none";
                document.getElementById('key_F#').style.display = "none";
                document.getElementById('key_G').style.display = "none";
                document.getElementById('key_Ab').style.display = "none";
                document.getElementById('key_A').style.display = "none";
                document.getElementById('key_Bb').style.display = "";
                document.getElementById('key_B').style.display = "none";
            }else if(id == '12') {
                document.getElementById('key_C').style.display = "none";
                document.getElementById('key_C#').style.display = "none";
                document.getElementById('key_D').style.display = "none";
                document.getElementById('key_Eb').style.display = "none";
                document.getElementById('key_E').style.display = "none";
                document.getElementById('key_F').style.display = "none";
                document.getElementById('key_F#').style.display = "none";
                document.getElementById('key_G').style.display = "none";
                document.getElementById('key_Ab').style.display = "none";
                document.getElementById('key_A').style.display = "none";
                document.getElementById('key_Bb').style.display = "none";
                document.getElementById('key_B').style.display = "";
            }
        }
    }

    // ボタンを値によって表示を変える、カーソルの位置も自由にできる！！
    function chord_insert($this) {
        let textarea = document.querySelector('textarea');

        let sentence = textarea.value;
        let len      = sentence.length;
        let pos      = textarea.selectionStart;

        let before   = sentence.substr(0, pos);
        let word     = $this;
        let after    = sentence.substr(pos, len);

        sentence = before + word + after;

        textarea.value = sentence;
            $('#origin-data') . append($this);
    }



    function origindata() {
  let input = document.getElementById( "origin-data" ).value;
  let result = input.replace(/\[.*?]|\n/g, cords);
  function cords(match){
    switch(match) {
        case "\n":
            return '<br>';
            break;

        case '[C]':
            return '<img src="/img/C.png">';
            break;
        case '[Cm]':
            return '<img src="/img/Cm.png">';
            break;
        case '[Cm7]':
            return '<img src="/img/C_m7.png">';
            break;
        case '[C6]':
            return '<img src="/img/C6.png">';
            break;
        case '[C7]':
            return '<img src="/img/C7.png">';
            break;
        case '[C7sus4]':
            return '<img src="/img/C7sus4.png">';
            break;
        case '[Cadd9]':
            return '<img src="/img/Cadd9.png">';
            break;
        case '[Cdim]':
            return '<img src="/img/Cdim.png">';
            break;
        case '[Cmaj7]':
            return '<img src="/img/CM_7.png">';
            break;
        case '[Cm6]':
            return '<img src="/img/Cm6.png">';
            break;
        case '[Cm7-5]':
            return '<img src="/img/Cm7b5.png">';
            break;
        case '[CmM7]':
            return '<img src="/img/CmM7.png">';
            break;
        case '[Csus4]':
            return '<img src="/img/Csus4.png">';
            break;
        case '[C#]':
            return '<img src="/img/Db.png">';
            break;
        case '[C#6]':
            return '<img src="/img/Db6.png">';
            break;
        case '[C#7]':
            return '<img src="/img/Db7.png">';
            break;
        case '[C#7sus4]':
            return '<img src="/img/Db7sus4.png">';
            break;
        case '[C#add9]':
            return '<img src="/img/Dbadd9.png">';
            break;
        case '[C#aug]':
            return '<img src="/img/Dbaug.png">';
            break;
        case '[C#dim]':
            return '<img src="/img/Dbdim.png">';
            break;
        case '[C#maj7]':
            return '<img src="/img/DbM_7.png">';
            break;
        case '[C#m]':
            return '<img src="/img/Dbm.png">';
            break;
        case '[C#m6]':
            return '<img src="/img/Dbm6.png">';
            break;
        case '[C#m7]':
            return '<img src="/img/Db_m7.png">';
            break;
        case '[C#m7-5]':
            return '<img src="/img/Dbm7b5.png">';
            break;
        case '[C#mM7]':
            return '<img src="/img/DbmM7.png">';
            break;
        case '[C#sus4]':
            return '<img src="/img/Dbsus4.png">';
            break;
        
        case '[Dm7]':
            return '<img src="/img/D_m7.png">';
            break;
        case '[D]':
            return '<img src="/img/D.png">';
            break;
        case '[D6]':
            return '<img src="/img/D6.png">';
            break;
        case '[D7]':
            return '<img src="/img/D7.png">';
            break;
        case '[D7sus4]':
            return '<img src="/img/D7sus4.png">';
            break;
        case '[Dadd9]':
            return '<img src="/img/Dadd9.png">';
            break;
        case '[Daug]':
            return '<img src="/img/Daug.png">';
            break;
        case '[Ddim]':
            return '<img src="/img/Ddim.png">';
            break;
        case '[Dmaj7]':
            return '<img src="/img/DM_7.png">';
            break;
        case '[Dm]':
            return '<img src="/img/Dm.png">';
            break;
        case '[Dm6]':
            return '<img src="/img/Dm6.png">';
            break;
        case '[Dm7-5]':
            return '<img src="/img/Dm7b5.png">';
            break;
        case '[Dsus4]':
            return '<img src="/img/Dsus4.png">';
            break;

        case '[D#m7]':
            return '<img src="/img/Eb_m7.png">';
            break;
        case '[D#]':
            return '<img src="/img/Eb.png">';
            break;    
        case '[D#6]':
            return '<img src="/img/Eb6.png">';
            break;
        case '[D#7]':
            return '<img src="/img/Eb7.png">';
            break;
        case '[D#7sus4]':
            return '<img src="/img/Eb7sus4.png">';
            break;
        case '[D#add9]':
            return '<img src="/img/Ebadd9.png">';
            break;
        case '[D#aug]':
            return '<img src="/img/Ebaug.png">';
            break;
        case '[D#dim]':
            return '<img src="/img/Ebdim.png">';
            break;
        case '[D#maj7]':
            return '<img src="/img/EbM_7.png">';
            break;
        case '[D#m]':
            return '<img src="/img/Ebm.png">';
            break;
        case '[D#m6]':
            return '<img src="/img/Ebm6.png">';
            break;
        case '[D#m7-5]':
            return '<img src="/img/Ebm7b5.png">';
            break;
        case '[D#mM7]':
            return '<img src="/img/EbmM7.png">';
            break;
        case '[D#sus4]':
            return '<img src="/img/Ebsus4.png">';
            break;

        case '[E]':
            return '<img src="/img/E.png">';
            break;
        case '[E6]':
            return '<img src="/img/E6.png">';
            break;
        case '[E7]':
            return '<img src="/img/E7.png">';
            break;
        case '[E7sus4]':
            return '<img src="/img/E7sus4.png">';
            break;
        case '[Eadd9]':
            return '<img src="/img/Eadd9.png">';
            break;
        case '[Eaug]':
            return '<img src="/img/Eaug.png">';
            break;
        case '[Edim]':
            return '<img src="/img/Edim.png">';
            break;
        case '[Emaj7]':
            return '<img src="/img/EM_7.png">';
            break;
        case '[Em]':
            return '<img src="/img/Em.png">';
            break;
        case '[Em6]':
            return '<img src="/img/Em6.png">';
            break;
        case '[Em7]':
            return '<img src="/img/Em7.png">';
            break;
        case '[Em7-5]':
            return '<img src="/img/Emb5.png">';
            break;
        case '[EmM7]':
            return '<img src="/img/EmM7.png">';
            break;
        case '[Esus4]':
            return '<img src="/img/Esus4.png">';
            break;

        case '[F]':
            return '<img src="/img/F.png">';
            break;
        case '[Fm7]':
            return '<img src="/img/F_m7.png">';
            break;
        case '[F6]':
            return '<img src="/img/F6.png">';
            break;
        case '[F7]':
            return '<img src="/img/F7.png">';
            break;
        case '[F7sus4]':
            return '<img src="/img/Fsus4.png">';
            break;
        case '[Fadd9]':
            return '<img src="/img/Fadd9.png">';
            break;
        case '[Faug]':
            return '<img src="/img/Faug.png">';
            break;
        case '[Fdim]':
            return '<img src="/img/Fdim.png">';
            break;
        case '[Fmaj7]':
            return '<img src="/img/FM_7.png">';
            break;
        case '[Fm]':
            return '<img src="/img/Fm.png">';
            break;
        case '[Fm6]':
            return '<img src="/img/Fm6.png">';
            break;
        case '[Fm7-5]':
            return '<img src="/img/Fm7b5.png">';
            break;
        case '[FmM7]':
            return '<img src="/img/FmM7.png">';
            break;
        case '[Fsus4]':
            return '<img src="/img/Fsus4.png">';
            break;

        case '[F#]':
            return '<img src="/img/Gb.png">';
            break;
        case '[F#m7]':
            return '<img src="/img/Gb_m7.png">';
            break;
        case '[F#6]':
            return '<img src="/img/Gb6.png">';
            break;
        case '[F#7]':
            return '<img src="/img/Gb7.png">';
            break;
        case '[F#7sus4]':
            return '<img src="/img/Gbsus4.png">';
            break;
        case '[F#add9]':
            return '<img src="/img/Gbadd9.png">';
            break;
        case '[F#aug]':
            return '<img src="/img/GBaug.png">';
            break;
        case '[F#dim]':
            return '<img src="/img/Gbdim.png">';
            break;
        case '[F#maj7]':
            return '<img src="/img/GbM_7.png">';
            break;
        case '[F#m]':
            return '<img src="/img/Gbm.png">';
            break;
        case '[F#m6]':
            return '<img src="/img/Gbm6.png">';
            break;
        case '[F#m7-5]':
            return '<img src="/img/Gbm7b5.png">';
            break;
        case '[F#mM7]':
            return '<img src="/img/GbmM7.png">';
            break;
        case '[F#sus4]':
            return '<img src="/img/Gbsus4.png">';
            break;
    
        case '[G]':
            return '<img src="/img/G.png">';
            break;
        case '[Gm]':
            return '<img src="/img/Gm.png">';
            break;
        case '[Gm7]':
            return '<img src="/img/G_m7.png">';
            break;
        case '[G6]':
            return '<img src="/img/G6.png">';
            break;
        case '[G7]':
            return '<img src="/img/G7.png">';
            break;
        case '[G7sus4]':
            return '<img src="/img/G7sus4.png">';
            break;
        case '[Gadd9]':
            return '<img src="/img/Gadd9.png">';
            break;
        case '[Gaug]':
            return '<img src="/img/Gaug.png">';
            break;
        case '[Gmaj7]':
            return '<img src="/img/GM_7.png">';
            break;
        case '[Gm6]':
            return '<img src="/img/Gm6.png">';
            break;
        case '[Gm7-5]':
            return '<img src="/img/Gm7b5.png">';
            break;
        case '[GmM7]':
            return '<img src="/img/GmM7.png">';
            break;
        case '[Gsus4]':
            return '<img src="/img/Gsus4.png">';
            break;

        case '[G#]':
            return '<img src="/img/Ab.png">';
            break;
        case '[G#6]':
            return '<img src="/img/Ab6.png">';
            break;
        case '[G#7]':
            return '<img src="/img/Ab7.png">';
            break;
        case '[G#7sus4]':
            return '<img src="/img/Ab7sus4.png">';
            break;
        case '[G#add9]':
            return '<img src="/img/Abadd9.png">';
            break;
        case '[G#aug]':
            return '<img src="/img/Abaug.png">';
            break;
        case '[G#dim]':
            return '<img src="/img/Abdim.png">';
            break;
        case '[G#maj7]':
            return '<img src="/img/AbM_7.png">';
            break;
        case '[G#m]':
            return '<img src="/img/Abm.png">';
            break;
        case '[G#m7]':
            return '<img src="/img/Ab_m7.png">';
            break;
        case '[G#m6]':
            return '<img src="/img/Abm6.png">';
            break;
        case '[G#m7-5]':
            return '<img src="/img/Abm7b5.png">';
            break;
        case '[G#mM7]':
            return '<img src="/img/AbmM7.png">';
            break;
        case '[G#sus4]':
            return '<img src="/img/Absus4.png">';
            break;

        case '[A]':
            return '<img src="/img/A.png">';
            break;
        case '[Am7]':
            return '<img src="/img/A_m7.png">';
            break;
        case '[A6]':
            return '<img src="/img/A6.png">';
            break;
        case '[A7]':
            return '<img src="/img/A7.png">';
            break;
        case '[A7sus4]':
            return '<img src="/img/A7sus4.png">';
            break;
        case '[Aadd9]':
            return '<img src="/img/Aadd9.png">';
            break;
        case '[Aaug]':
            return '<img src="/img/Aaug.png">';
            break;
        case '[Adim]':
            return '<img src="/img/Adim.png">';
            break;
        case '[Amaj7]':
            return '<img src="/img/AM_7.png">';
            break;
        case '[Am]':
            return '<img src="/img/Am.png">';
            break;
        case '[Am6]':
            return '<img src="/img/Am6.png">';
            break;
        case '[Am7-5]':
            return '<img src="/img/Am7b5.png">';
            break;
        case '[Ammaj7]':
            return '<img src="/img/AmM7.png">';
            break;
        case '[Asus4]':
            return '<img src="/img/Asus4.png">';
            break;

        case '[A#]':
            return '<img src="/img/Am.png">';
            break;
        case '[A#m7]':
            return '<img src="/img/Bb_m7.png">';
            break;
        case '[A#6]':
            return '<img src="/img/Bb6.png">';
            break;
        case '[A#7]':
            return '<img src="/img/Bb7.png">';
            break;
        case '[A#7sus4]':
            return '<img src="/img/Bb7sus4.png">';
            break;
        case '[A#add9]':
            return '<img src="/img/Bbadd9.png">';
            break;
        case '[A#aug]':
            return '<img src="/img/Bbaug.png">';
            break;
        case '[A#dim]':
            return '<img src="/img/Bbdim.png">';
            break;
        case '[A#M7]':
            return '<img src="/img/BbM_7.png">';
            break;
        case '[A#m]':
            return '<img src="/img/Bbm.png">';
            break;
        case '[A#m6]':
            return '<img src="/img/Bbm6.png">';
            break;
        case '[A#m7-5]':
            return '<img src="/img/Bbm7b5.png">';
            break;
        case '[A#mM7]':
            return '<img src="/img/BbmM7.png">';
            break;
        case '[A#sus4]':
            return '<img src="/img/Bbsus4.png">';
            break;

        case '[B]':
            return '<img src="/img/B.png">';
            break;
        case '[Bm7]':
            return '<img src="/img/B_m7.png">';
            break;
        case '[B6]':
            return '<img src="/img/B6.png">';
            break;
        case '[B7]':
            return '<img src="/img/B7.png">';
            break;
        case '[B7sus4]':
            return '<img src="/img/B7sus4.png">';
            break;
        case '[Badd9]':
            return '<img src="/img/Badd9.png">';
            break;
        case '[Baug]':
            return '<img src="/img/Baug.png">';
            break;
        case '[Bmaj7]':
            return '<img src="/img/BM_7.png">';
            break;
        case '[Bm]':
            return '<img src="/img/Bm.png">';
            break;
        case '[Bm6]':
            return '<img src="/img/Bm6.png">';
            break;
        case '[Bm7-5]':
            return '<img src="/img/Bm7b5.png">';
            break;
        case '[BmM7]':
            return '<img src="/img/BmM7.png">';
            break;
        case '[Bsus4]':
            return '<img src="/img/Bsus4.png">';
            break;


        case '[E♭]':
            return '<img src="/img/Eb.png">';
            break;
        case '[A♭]':
            return '<img src="/img/Ab.png">';
            break;
        case '[B♭]':
            return '<img src="/img/Bb.png">';
            break;
        case '[E♭maj7]':
            return '<img src="/img/EbM_7.png">';
            break;
        case '[A♭maj7]':
            return '<img src="/img/AbM_7.png">';
            break;
        case '[B♭maj7]':
            return '<img src="/img/BbM_7.png">';
            break;
        case '[D♭]':
            return '<img src="/img/Db.png">';
            break;
        case '[D♭maj7]':
            return '<img src="/img/Db.png">';
            break;
        case '[B♭m7]':
            return '<img src="/img/Bb_m7.png">';
            break;
        case '[B♭m]':
            return '<img src="/img/Bbm.png">';
            break;
        case '[B♭7]':
            return '<img src="/img/Bb7.png">';
            break;
        case '[E♭7]':
            return '<img src="/img/Eb7.png">';
            break;

        default:
            return match;
    }
  }
  document.getElementById( "preview" ).innerHTML = result;

} 
</script>
@endsection