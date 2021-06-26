@extends('layouts.admin')

@section('title', '演奏してみよう！！')

@section('content')
    <div class="container">
      <!-- user_idとidが一致したやつだけ -->
          <div class="row my-4">
        <!-- ifを使ってカラムによって表示を変える方法を実装 -->
            <h2>曲のタイトル：{{ str_limit($music->title, 100) }}</h2>
            <div class="ml-3">
              <img src="{{ $music->user->profile_image }}" style="border: none; width:50px; height:auto; border-radius: 50px;" id="img">
            </div>
          </div>
          <div class="row mb-5">
            <h3 class="col-4">カポ：{{ ($music->capo) }}</h3>
            <h3 class="col-4">カテゴリー：{{ ($music->category) }}</h3>
         </div>

        <div id="app">
          <roll-component></roll-component>
        </div>
        <div>
        <h3>曲の歌詞</h3>

        <div id="lyrics"> 
            <div class="row">
                @if ($music->video_link)
                    <button class="col-md-12 btn btn-primary" @click="check()">動画参考リンク</button>
                @endif
            </div>
        </div>
        <h2 class="my-5">終わり</h2>

    </div>
@endsection

@section('js')
<script>
// ここでlyricsでもらった値を表現
 function check() {
    if(window.confirm('動画リンクに移動します。')){
        return window.location.href = '{{ ($music->video_link) }}'; 
    }
    else {
        return flase;
    }
 }

document.addEventListener("DOMContentLoaded", function() {
  let string = '{!! str_replace("\n", "<br />", str_replace("\r", "", $music->lyrics)) !!}';
  let result = string.replace(/\[.*?]/g, cords);
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
 $('#lyrics') . append(result);
});

  
</script>
@endsection

