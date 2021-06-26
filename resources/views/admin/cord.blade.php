@extends('layouts.admin')

@section('title', 'コード一覧')
@section('style')
<style>
  body {
  background: linear-gradient(-45deg, lightgreen, lightblue);
  background-size: 100% 100%;
  animation: gradient 30s ease infinite;
}

@keyframes gradient {
  0% {
    background-position: 0% 0%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 0%;
  }
}
</style>
@endsection('style')
@section('content')
    <div class="container">
      
    </div>
    <div class="container">

      <div class="row py-5">
        <h2>コード表A〜G</h2>
      </div>

      <div class="row cordmenu">
        <p class="cord-1"><a href = "#C_cord">Cコード</a></p>
        <p class="cord-2"><a href = "#C#/Db_cord">C#/Dbコード</a></p>
        <p class="cord-3"><a href = "#D_cord">Dコード</a></p>
        <p class="cord-4"><a href = "#D#/Eb_cord">D#/Ebコード</a></p>
        <p class="cord-5"><a href = "#E_cord">Eコード</a></p>
        <p class="cord-6"><a href = "#F_cord">Fコード</a></p>
        <p class="cord-7"><a href = "#F#/Gb_cord">F#/Gbコード</a></p>
      </div>
      <div class="row cordmenu">
        <p class="cord-8"><a href = "#G_cord">Gコード</a></p>
        <p class="cord-9"><a href = "#G#/Ab_cord">G#/Abコード</a></p>
        <p class="cord-10"><a href = "#A_cord">Aコード</a></p>
        <p class="cord-11"><a href = "#A#/Bb_cord">A#/Bbコード</a></p>
        <p class="cord-12"><a href = "#B_cord">Bコード</a></p>

      </div>
      <hr>

        <div id = "C_cord" class="row mt-5">
          <h2>Cコード</h2>
        </div>
        <div class="row cordmenu">
        <p class="cord-1"><a href = "#C_cord">Cコード</a></p>
        <p class="cord-2"><a href = "#C#/Db_cord">C#/Dbコード</a></p>
        <p class="cord-3"><a href = "#D_cord">Dコード</a></p>
        <p class="cord-4"><a href = "#D#/Eb_cord">D#/Ebコード</a></p>
        <p class="cord-5"><a href = "#E_cord">Eコード</a></p>
        <p class="cord-6"><a href = "#F_cord">Fコード</a></p>
        <p class="cord-7"><a href = "#F#/Gb_cord">F#/Gbコード</a></p>
      </div>
      <div class="row cordmenu">
        <p class="cord-8"><a href = "#G_cord">Gコード</a></p>
        <p class="cord-9"><a href = "#G#/Ab_cord">G#/Abコード</a></p>
        <p class="cord-10"><a href = "#A_cord">Aコード</a></p>
        <p class="cord-11"><a href = "#A#/Bb_cord">A#/Bbコード</a></p>
        <p class="cord-12"><a href = "#B_cord">Bコード</a></p>

      </div>
        <div class="row">
          <div class="col-md-2 p-3 mx-3" >
            <p class="cord-font">Cコード</p>
            <img src="/img/C.png" alt="C">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">Cmコード</p>
            <img src="/img/Cm.png" alt="Cm">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">C7コード</p>
            <img src="/img/C7.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">Cdimコード</p>
            <img src="/img/Cdim.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">Cm7コード</p>
            <img src="/img/C_m7.png" alt="サンプル画像">
          </div>
          
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">CM7コード</p>
            <img src="/img/CM_7.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">Cm7b5コード</p>
            <img src="/img/Cm7b5.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">CmM7コード</p>
            <img src="/img/CmM7.png" alt="サンプル画像">
          </div>
          
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">C6コード</p>
            <img src="/img/C6.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">Cadd9コード</p>
            <img src="/img/Cadd9.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">Caugコード</p>
            <img src="/img/Caug.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">Csus4コード</p>
            <img src="/img/Csus4.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">C7sus4コード</p>
            <img src="/img/C7sus4.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">Cm6コード</p>
            <img src="/img/Cm6.png" alt="サンプル画像">
          </div>
        </div>

        <hr>
        <div id ="C#/Db_cord" class="row mt-4">
          <h2>C#/Dbコード</h2>
        </div>
        <div class="row cordmenu">
        <p class="cord-1"><a href = "#C_cord">Cコード</a></p>
        <p class="cord-2"><a href = "#C#/Db_cord">C#/Dbコード</a></p>
        <p class="cord-3"><a href = "#D_cord">Dコード</a></p>
        <p class="cord-4"><a href = "#D#/Eb_cord">D#/Ebコード</a></p>
        <p class="cord-5"><a href = "#E_cord">Eコード</a></p>
        <p class="cord-6"><a href = "#F_cord">Fコード</a></p>
        <p class="cord-7"><a href = "#F#/Gb_cord">F#/Gbコード</a></p>
      </div>
      <div class="row cordmenu">
        <p class="cord-8"><a href = "#G_cord">Gコード</a></p>
        <p class="cord-9"><a href = "#G#/Ab_cord">G#/Abコード</a></p>
        <p class="cord-10"><a href = "#A_cord">Aコード</a></p>
        <p class="cord-11"><a href = "#A#/Bb_cord">A#/Bbコード</a></p>
        <p class="cord-12"><a href = "#B_cord">Bコード</a></p>

      </div>
        <div class="row">
          <div class="col-md-2 p-3 mx-3" >
            <p class="cord-font">C#コード</p>
            <img src="/img/Db.png" alt="C">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">C#mコード</p>
            <img src="/img/Dbm.png" alt="Cm">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">C#6コード</p>
            <img src="/img/Db6.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">C#7コード</p>
            <img src="/img/Db7.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">C#m7コード</p>
            <img src="/img/Db_m7.png" alt="サンプル画像">
          </div>
        
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">C#augコード</p>
            <img src="/img/Dbaug.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">C#dimコード</p>
            <img src="/img/Dbdim.png" alt="サンプル画像">
          </div>
          
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">C#mコード</p>
            <img src="/img/Dbm.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">C#m6コード</p>
            <img src="/img/Dbm6.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">C#M7コード</p>
            <img src="/img/DbM_7.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">C#m7b5コード</p>
            <img src="/img/Dbm7b5.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">C#mM7コード</p>
            <img src="/img/DbmM7.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">C#sus4コード</p>
            <img src="/img/Dbsus4.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">C#add9コード</p>
            <img src="/img/Dbadd9.png" alt="サンプル画像">
          </div>
        </div>

        <hr>
        <div id="D_cord" class="row mt-5">
          <h2>Dコード</h2>
        </div>
        <div class="row cordmenu">
        <p class="cord-1"><a href = "#C_cord">Cコード</a></p>
        <p class="cord-2"><a href = "#C#/Db_cord">C#/Dbコード</a></p>
        <p class="cord-3"><a href = "#D_cord">Dコード</a></p>
        <p class="cord-4"><a href = "#D#/Eb_cord">D#/Ebコード</a></p>
        <p class="cord-5"><a href = "#E_cord">Eコード</a></p>
        <p class="cord-6"><a href = "#F_cord">Fコード</a></p>
        <p class="cord-7"><a href = "#F#/Gb_cord">F#/Gbコード</a></p>
      </div>
      <div class="row cordmenu">
        <p class="cord-8"><a href = "#G_cord">Gコード</a></p>
        <p class="cord-9"><a href = "#G#/Ab_cord">G#/Abコード</a></p>
        <p class="cord-10"><a href = "#A_cord">Aコード</a></p>
        <p class="cord-11"><a href = "#A#/Bb_cord">A#/Bbコード</a></p>
        <p class="cord-12"><a href = "#B_cord">Bコード</a></p>

      </div>
        <div class="row">
          <div class="col-md-2 p-3 mx-3" >
            <p class="cord-font">Dコード</p>
            <img src="/img/D.png" alt="C">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">D6コード</p>
            <img src="/img/D6.png" alt="Cm">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">D7コード</p>
            <img src="/img/D7.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">D7sus4コード</p>
            <img src="/img/D7sus4.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">Dadd97コード</p>
            <img src="/img/Dadd9.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">Daugコード</p>
            <img src="/img/Daug.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">Ddimコード</p>
            <img src="/img/Ddim.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">Dmコード</p>
            <img src="/img/Dm.png" alt="サンプル画像">
          </div>

          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">Dm6コード</p>
            <img src="/img/Dm6.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">DM7コード</p>
            <img src="/img/DM_7.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">Dm7コード</p>
            <img src="/img/D_m7.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">Dm7b5コード</p>
            <img src="/img/Dm7b5.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">DmM7コード</p>
            <img src="/img/DmM7.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">Dsus4コード</p>
            <img src="/img/Dsus4.png" alt="サンプル画像">
          </div>
        </div>

        <hr>
        <div id="D#/Eb_cord" class="row mt-5">
          <h2>D＃E♭コード</h2>
        </div>
        <div class="row cordmenu">
        <p class="cord-1"><a href = "#C_cord">Cコード</a></p>
        <p class="cord-2"><a href = "#C#/Db_cord">C#/Dbコード</a></p>
        <p class="cord-3"><a href = "#D_cord">Dコード</a></p>
        <p class="cord-4"><a href = "#D#/Eb_cord">D#/Ebコード</a></p>
        <p class="cord-5"><a href = "#E_cord">Eコード</a></p>
        <p class="cord-6"><a href = "#F_cord">Fコード</a></p>
        <p class="cord-7"><a href = "#F#/Gb_cord">F#/Gbコード</a></p>
      </div>
      <div class="row cordmenu">
        <p class="cord-8"><a href = "#G_cord">Gコード</a></p>
        <p class="cord-9"><a href = "#G#/Ab_cord">G#/Abコード</a></p>
        <p class="cord-10"><a href = "#A_cord">Aコード</a></p>
        <p class="cord-11"><a href = "#A#/Bb_cord">A#/Bbコード</a></p>
        <p class="cord-12"><a href = "#B_cord">Bコード</a></p>

      </div>
        <div class="row">
          <div class="col-md-2 p-3 mx-3" >
            <p class="cord-font">D#コード</p>
            <img src="/img/Eb.png" alt="C">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">D#mコード</p>
            <img src="/img/Ebm.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">D#6コード</p>
            <img src="/img/Eb6.png" alt="Cm">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">D#7コード</p>
            <img src="/img/Eb7.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">D#7sus4コード</p>
            <img src="/img/Eb7sus4.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">D#m7コード</p>
            <img src="/img/Eb_m7.png" alt="サンプル画像">
          </div>
          
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">D#add9コード</p>
            <img src="/img/Ebadd9.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">D#augコード</p>
            <img src="/img/Ebaug.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">D#M7コード</p>
            <img src="/img/EbM_7.png" alt="サンプル画像">
          </div>
          
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">D#dimコード</p>
            <img src="/img/Ebdim.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">D#m6コード</p>
            <img src="/img/Ebm6.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">D#m7b5コード</p>
            <img src="/img/Ebm7b5.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">D#mM7コード</p>
            <img src="/img/EbmM7.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">D#sus4コード</p>
            <img src="/img/Ebsus4.png" alt="サンプル画像">
          </div>
        </div>

        <hr>
        <div id="E_cord" class="row mt-5">
          <h2>Eコード</h2>
        </div>
        <div class="row cordmenu">
        <p class="cord-1"><a href = "#C_cord">Cコード</a></p>
        <p class="cord-2"><a href = "#C#/Db_cord">C#/Dbコード</a></p>
        <p class="cord-3"><a href = "#D_cord">Dコード</a></p>
        <p class="cord-4"><a href = "#D#/Eb_cord">D#/Ebコード</a></p>
        <p class="cord-5"><a href = "#E_cord">Eコード</a></p>
        <p class="cord-6"><a href = "#F_cord">Fコード</a></p>
        <p class="cord-7"><a href = "#F#/Gb_cord">F#/Gbコード</a></p>
      </div>
      <div class="row cordmenu">
        <p class="cord-8"><a href = "#G_cord">Gコード</a></p>
        <p class="cord-9"><a href = "#G#/Ab_cord">G#/Abコード</a></p>
        <p class="cord-10"><a href = "#A_cord">Aコード</a></p>
        <p class="cord-11"><a href = "#A#/Bb_cord">A#/Bbコード</a></p>
        <p class="cord-12"><a href = "#B_cord">Bコード</a></p>

      </div>
        <div class="row">
        <div class="col-md-2 p-3 mx-3" >
            <p class="cord-font">Eコード</p>
            <img src="/img/E.png" alt="C">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">Em7コード</p>
            <img src="/img/E_m7.png" alt="Cm">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">E6コード</p>
            <img src="/img/E6.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">Em6コード</p>
            <img src="/img/Em6.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">E7コード</p>
            <img src="/img/E7.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">E7sus4コード</p>
            <img src="/img/E7sus4.png" alt="サンプル画像">
          </div>
          
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">Eadd9コード</p>
            <img src="/img/Eadd9.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">Eaugコード</p>
            <img src="/img/Eaug.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">Edimコード</p>
            <img src="/img/Edim.png" alt="サンプル画像">
          </div>
          
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">EM7コード</p>
            <img src="/img/EM_7.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">Emコード</p>
            <img src="/img/Em.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">Em7b5コード</p>
            <img src="/img/Em7b5.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">EmM7コード</p>
            <img src="/img/EmM7.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">Esus4コード</p>
            <img src="/img/Esus4.png" alt="サンプル画像">
          </div>
        </div>

        <hr>
        <div id="F_cord" class="row mt-5">
          <h2>Fコード</h2>
        </div>
        <div class="row cordmenu">
        <p class="cord-1"><a href = "#C_cord">Cコード</a></p>
        <p class="cord-2"><a href = "#C#/Db_cord">C#/Dbコード</a></p>
        <p class="cord-3"><a href = "#D_cord">Dコード</a></p>
        <p class="cord-4"><a href = "#D#/Eb_cord">D#/Ebコード</a></p>
        <p class="cord-5"><a href = "#E_cord">Eコード</a></p>
        <p class="cord-6"><a href = "#F_cord">Fコード</a></p>
        <p class="cord-7"><a href = "#F#/Gb_cord">F#/Gbコード</a></p>
      </div>
      <div class="row cordmenu">
        <p class="cord-8"><a href = "#G_cord">Gコード</a></p>
        <p class="cord-9"><a href = "#G#/Ab_cord">G#/Abコード</a></p>
        <p class="cord-10"><a href = "#A_cord">Aコード</a></p>
        <p class="cord-11"><a href = "#A#/Bb_cord">A#/Bbコード</a></p>
        <p class="cord-12"><a href = "#B_cord">Bコード</a></p>

      </div>
        <div class="row">
        <div class="col-md-2 p-3 mx-3" >
            <p class="cord-font">Fコード</p>
            <img src="/img/F.png" alt="C">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">Fmコード</p>
            <img src="/img/Fm.png" alt="Cm">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">F6コード</p>
            <img src="/img/F6.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">F7コード</p>
            <img src="/img/F7.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">F7sus4コード</p>
            <img src="/img/F7sus4.png" alt="サンプル画像">
          </div>
          
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">Fadd9コード</p>
            <img src="/img/Fadd9.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">Faugコード</p>
            <img src="/img/Faug.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">Fdimコード</p>
            <img src="/img/Fdim.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">Fm7コード</p>
            <img src="/img/F_m7.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">FM7コード</p>
            <img src="/img/FM_7.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">Fm6コード</p>
            <img src="/img/Fm6.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">Fm7b5コード</p>
            <img src="/img/Fm7b5.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">FmM7コード</p>
            <img src="/img/FmM7.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">Fsus4コード</p>
            <img src="/img/Caug.png" alt="サンプル画像">
          </div>
        </div>

        <hr>
        <div id="F#/Gb_cord" class="row mt-5">
          <h2>F#/Gbコード</h2>
        </div>
        <div class="row cordmenu">
        <p class="cord-1"><a href = "#C_cord">Cコード</a></p>
        <p class="cord-2"><a href = "#C#/Db_cord">C#/Dbコード</a></p>
        <p class="cord-3"><a href = "#D_cord">Dコード</a></p>
        <p class="cord-4"><a href = "#D#/Eb_cord">D#/Ebコード</a></p>
        <p class="cord-5"><a href = "#E_cord">Eコード</a></p>
        <p class="cord-6"><a href = "#F_cord">Fコード</a></p>
        <p class="cord-7"><a href = "#F#/Gb_cord">F#/Gbコード</a></p>
      </div>
      <div class="row cordmenu">
        <p class="cord-8"><a href = "#G_cord">Gコード</a></p>
        <p class="cord-9"><a href = "#G#/Ab_cord">G#/Abコード</a></p>
        <p class="cord-10"><a href = "#A_cord">Aコード</a></p>
        <p class="cord-11"><a href = "#A#/Bb_cord">A#/Bbコード</a></p>
        <p class="cord-12"><a href = "#B_cord">Bコード</a></p>

      </div>
        <div class="row">
        <div class="col-md-2 p-3 mx-3" >
            <p class="cord-font">F#コード</p>
            <img src="/img/Gb.png" alt="C">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">F#6コード</p>
            <img src="/img/Gb6.png" alt="Cm">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">F#7コード</p>
            <img src="/img/Gb7.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">F#m7コード</p>
            <img src="/img/Gb_m7.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">F#sus4コード</p>
            <img src="/img/Gb7sus4.png" alt="サンプル画像">
          </div>
          
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">F#add9コード</p>
            <img src="/img/Gbadd9.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">F#augコード</p>
            <img src="/img/Gbaug.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">F#dimコード</p>
            <img src="/img/Gbdim.png" alt="サンプル画像">
          </div>
          
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">F#M7コード</p>
            <img src="/img/GbM_7.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">F#mコード</p>
            <img src="/img/Gbm.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">F#m6コード</p>
            <img src="/img/Gbm6.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">F#m7b5コード</p>
            <img src="/img/Gbm7b5.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">F#mM7コード</p>
            <img src="/img/GbmM7.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">F#sus4コード</p>
            <img src="/img/Gbsus4.png" alt="サンプル画像">
          </div>
        </div>

        <hr>
        <div id="G_cord" class="row mt-5">
          <h2>Gコード</h2>
        </div>
        <div class="row cordmenu">
        <p class="cord-1"><a href = "#C_cord">Cコード</a></p>
        <p class="cord-2"><a href = "#C#/Db_cord">C#/Dbコード</a></p>
        <p class="cord-3"><a href = "#D_cord">Dコード</a></p>
        <p class="cord-4"><a href = "#D#/Eb_cord">D#/Ebコード</a></p>
        <p class="cord-5"><a href = "#E_cord">Eコード</a></p>
        <p class="cord-6"><a href = "#F_cord">Fコード</a></p>
        <p class="cord-7"><a href = "#F#/Gb_cord">F#/Gbコード</a></p>
      </div>
      <div class="row cordmenu">
        <p class="cord-8"><a href = "#G_cord">Gコード</a></p>
        <p class="cord-9"><a href = "#G#/Ab_cord">G#/Abコード</a></p>
        <p class="cord-10"><a href = "#A_cord">Aコード</a></p>
        <p class="cord-11"><a href = "#A#/Bb_cord">A#/Bbコード</a></p>
        <p class="cord-12"><a href = "#B_cord">Bコード</a></p>

      </div>
        <div class="row">
        <div class="col-md-2 p-3 mx-3" >
            <p class="cord-font">Gコード</p>
            <img src="/img/G.png" alt="C">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">G6コード</p>
            <img src="/img/G6.png" alt="Cm">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">G7コード</p>
            <img src="/img/G7.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">G7sus4コード</p>
            <img src="/img/G7sus4.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">Gadd9コード</p>
            <img src="/img/Gadd9.png" alt="サンプル画像">
          </div>
          
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">Gaugコード</p>
            <img src="/img/Gaug.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">Gmコード</p>
            <img src="/img/Gm.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">Gm6コード</p>
            <img src="/img/Gm6.png" alt="サンプル画像">
          </div>
          
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">Gm7b5コード</p>
            <img src="/img/Gm7b5.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">GbmM7コード</p>
            <img src="/img/GbmM7.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">Gsus4コード</p>
            <img src="/img/Gsus4.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">GM7コード</p>
            <img src="/img/GM_7.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">Gm7コード</p>
            <img src="/img/G_m7.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">Gbmコード</p>
            <img src="/img/Gbm.png" alt="サンプル画像">
          </div>
        </div>

        <hr>
        <div id="G#/Ab_cord" class="row mt-5">
          <h2>G＃/Abコード</h2>
        </div>
        <div class="row cordmenu">
        <p class="cord-1"><a href = "#C_cord">Cコード</a></p>
        <p class="cord-2"><a href = "#C#/Db_cord">C#/Dbコード</a></p>
        <p class="cord-3"><a href = "#D_cord">Dコード</a></p>
        <p class="cord-4"><a href = "#D#/Eb_cord">D#/Ebコード</a></p>
        <p class="cord-5"><a href = "#E_cord">Eコード</a></p>
        <p class="cord-6"><a href = "#F_cord">Fコード</a></p>
        <p class="cord-7"><a href = "#F#/Gb_cord">F#/Gbコード</a></p>
      </div>
      <div class="row cordmenu">
        <p class="cord-8"><a href = "#G_cord">Gコード</a></p>
        <p class="cord-9"><a href = "#G#/Ab_cord">G#/Abコード</a></p>
        <p class="cord-10"><a href = "#A_cord">Aコード</a></p>
        <p class="cord-11"><a href = "#A#/Bb_cord">A#/Bbコード</a></p>
        <p class="cord-12"><a href = "#B_cord">Bコード</a></p>
      </div>

        <div class="row">
        <div class="col-md-2 p-3 mx-3" >
            <p class="cord-font">G#コード</p>
            <img src="/img/Ab.png" alt="C">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">G#m7コード</p>
            <img src="/img/Ab_m7.png" alt="Cm">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">G#6コード</p>
            <img src="/img/Ab6.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">G#7コード</p>
            <img src="/img/Ab7.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">G#7sus4コード</p>
            <img src="/img/Ab7sus4.png" alt="サンプル画像">
          </div>
          
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">G#add9コード</p>
            <img src="/img/Abadd9.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">G#augコード</p>
            <img src="/img/Abaug.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">G#dimコード</p>
            <img src="/img/Abdim.png" alt="サンプル画像">
          </div>
          
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">G#M7コード</p>
            <img src="/img/AbM_7.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">G#mコード</p>
            <img src="/img/Abm.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">G#m6コード</p>
            <img src="/img/Abm6.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">G#m7b5コード</p>
            <img src="/img/Abm7b5.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">G#mM7コード</p>
            <img src="/img/AbmM7.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">G#sus4コード</p>
            <img src="/img/Absus4.png" alt="サンプル画像">
          </div>
        </div>

        <hr>
        <div id="A_cord" class="row mt-5">
          <h2>Aコード</h2>
        </div>
        <div class="row cordmenu">
        <p class="cord-1"><a href = "#C_cord">Cコード</a></p>
        <p class="cord-2"><a href = "#C#/Db_cord">C#/Dbコード</a></p>
        <p class="cord-3"><a href = "#D_cord">Dコード</a></p>
        <p class="cord-4"><a href = "#D#/Eb_cord">D#/Ebコード</a></p>
        <p class="cord-5"><a href = "#E_cord">Eコード</a></p>
        <p class="cord-6"><a href = "#F_cord">Fコード</a></p>
        <p class="cord-7"><a href = "#F#/Gb_cord">F#/Gbコード</a></p>
      </div>
      <div class="row cordmenu">
        <p class="cord-8"><a href = "#G_cord">Gコード</a></p>
        <p class="cord-9"><a href = "#G#/Ab_cord">G#/Abコード</a></p>
        <p class="cord-10"><a href = "#A_cord">Aコード</a></p>
        <p class="cord-11"><a href = "#A#/Bb_cord">A#/Bbコード</a></p>
        <p class="cord-12"><a href = "#B_cord">Bコード</a></p>

      </div>
        <div class="row">
        <div class="col-md-2 p-3 mx-3" >
            <p class="cord-font">Aコード</p>
            <img src="/img/A.png" alt="C">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">A6コード</p>
            <img src="/img/A6.png" alt="Cm">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">A7コード</p>
            <img src="/img/A7.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">A7sus4コード</p>
            <img src="/img/A7sus4.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">Aadd9コード</p>
            <img src="/img/Aadd9.png" alt="サンプル画像">
          </div>
          
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">Aaugコード</p>
            <img src="/img/Aaug.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">Adimコード</p>
            <img src="/img/Adim.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">Amコード</p>
            <img src="/img/Am.png" alt="サンプル画像">
          </div>
          
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">Am6コード</p>
            <img src="/img/Am6.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">Am7コード</p>
            <img src="/img/A_m7.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">AM7コード</p>
            <img src="/img/AM_7.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">Am7b5コード</p>
            <img src="/img/Am7b5.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">AmM7コード</p>
            <img src="/img/AmM7.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">Asus4コード</p>
            <img src="/img/Asus4.png" alt="サンプル画像">
          </div>
        </div>

        <hr>
        <div id="A#/Bb_cord" class="row mt-5">
          <h2>A＃/Bbコード</h2>
        </div>
        <div class="row cordmenu">
        <p class="cord-1"><a href = "#C_cord">Cコード</a></p>
        <p class="cord-2"><a href = "#C#/Db_cord">C#/Dbコード</a></p>
        <p class="cord-3"><a href = "#D_cord">Dコード</a></p>
        <p class="cord-4"><a href = "#D#/Eb_cord">D#/Ebコード</a></p>
        <p class="cord-5"><a href = "#E_cord">Eコード</a></p>
        <p class="cord-6"><a href = "#F_cord">Fコード</a></p>
        <p class="cord-7"><a href = "#F#/Gb_cord">F#/Gbコード</a></p>
      </div>
      <div class="row cordmenu">
        <p class="cord-8"><a href = "#G_cord">Gコード</a></p>
        <p class="cord-9"><a href = "#G#/Ab_cord">G#/Abコード</a></p>
        <p class="cord-10"><a href = "#A_cord">Aコード</a></p>
        <p class="cord-11"><a href = "#A#/Bb_cord">A#/Bbコード</a></p>
        <p class="cord-12"><a href = "#B_cord">Bコード</a></p>

      </div>
        <div class="row">
        <div class="col-md-2 p-3 mx-3" >
            <p class="cord-font">A#コード</p>
            <img src="/img/Bb.png" alt="C">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">A#6コード</p>
            <img src="/img/Bb6.png" alt="Cm">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">A#7コード</p>
            <img src="/img/Bb7.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">A#7sus4コード</p>
            <img src="/img/Bb7sus4.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">A#augコード</p>
            <img src="/img/Bbaug.png" alt="サンプル画像">
          </div>
          
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">A#dimコード</p>
            <img src="/img/Bbdim.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">A#mコード</p>
            <img src="/img/Bbm.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">A#m6コード</p>
            <img src="/img/Bbm6.png" alt="サンプル画像">
          </div>
          
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">A#m7b5コード</p>
            <img src="/img/Bbm7b5.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">A#mM7コード</p>
            <img src="/img/BbmM7.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">A#sus4コード</p>
            <img src="/img/Bbsus4.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">A#m7コード</p>
            <img src="/img/Bb_m7.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">A#M7コード</p>
            <img src="/img/BbM_7.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">A#add9コード</p>
            <img src="/img/Bbadd9.png" alt="サンプル画像">
          </div>
        </div>

        <hr>
        <div id="B_cord" class="row mt-5">
          <h2>Bコード</h2>
        </div>
        <div class="row cordmenu">
        <p class="cord-1"><a href = "#C_cord">Cコード</a></p>
        <p class="cord-2"><a href = "#C#/Db_cord">C#/Dbコード</a></p>
        <p class="cord-3"><a href = "#D_cord">Dコード</a></p>
        <p class="cord-4"><a href = "#D#/Eb_cord">D#/Ebコード</a></p>
        <p class="cord-5"><a href = "#E_cord">Eコード</a></p>
        <p class="cord-6"><a href = "#F_cord">Fコード</a></p>
        <p class="cord-7"><a href = "#F#/Gb_cord">F#/Gbコード</a></p>
      </div>
      <div class="row cordmenu">
        <p class="cord-8"><a href = "#G_cord">Gコード</a></p>
        <p class="cord-9"><a href = "#G#/Ab_cord">G#/Abコード</a></p>
        <p class="cord-10"><a href = "#A_cord">Aコード</a></p>
        <p class="cord-11"><a href = "#A#/Bb_cord">A#/Bbコード</a></p>
        <p class="cord-12"><a href = "#B_cord">Bコード</a></p>

      </div>
        <div class="row">
        <div class="col-md-2 p-3 mx-3" >
            <p class="cord-font">Bコード</p>
            <img src="/img/B.png" alt="C">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">B6コード</p>
            <img src="/img/B6.png" alt="Cm">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">B7コード</p>
            <img src="/img/B7.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">B7sus4コード</p>
            <img src="/img/B7sus4.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">Badd9コード</p>
            <img src="/img/Badd9.png" alt="サンプル画像">
          </div>
          
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">Baugコード</p>
            <img src="/img/Baug.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
          <p class="cord-font">Bdimコード</p>
            <img src="/img/Bdim.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">Bmコード</p>
            <img src="/img/Bm.png" alt="サンプル画像">
          </div>
          
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">Bm6コード</p>
            <img src="/img/Bm6.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">Bm7コード</p>
            <img src="/img/B_m7.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">BM7コード</p>
            <img src="/img/BM_7.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">Bm7b5コード</p>
            <img src="/img/Bm7b5.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">BmM7コード</p>
            <img src="/img/BmM7.png" alt="サンプル画像">
          </div>
          <div class="col-md-2 p-3 mx-3">
            <p class="cord-font">Bsus4コード</p>
            <img src="/img/Bsus4.png" alt="サンプル画像">
          </div>
        </div>

    </div>
@endsection


