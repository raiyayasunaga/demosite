<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Music;
use App\User;
use App\Skin;
use Image;

use Auth;


// ユーザー情報


class GuitarController extends Controller
{
    public function add() {
        return view('admin.create');
    }

    public function close(Request $request) {
        $music = Music::find($request->id);
        $music->public = false;

        $music->save();

        return redirect('admin/mypage');
    }

    public function open(Request $request) {
        $music = Music::find($request->id);
        $music->public = true;

        $music->save();
        return redirect('admin/home');
    }

    public function create(Request $request) {

      $this->validate($request, Music::$rules);

      $music = new Music;
      $form = $request->all();

      // データベースに保存する
      $music->fill($form);
      //ユーザーそれぞれのデータの値を保存できる作業 
      $music->user_id = Auth::id();
      $music->save();

      return redirect('admin/mypage');
    }

    public function cord() {
        return view('admin.cord');
    }

    public function home(Request $request) {

        $cond_title = $request->cond_title;
        $category = $request->category;
        $user = Auth::user();

        if ($cond_title != '') {
            $posts = Music::where('title', 'like', '%'.$cond_title.'%')
                ->orderBy('id', 'asc')
                ->get();
        } else {
            // それ以外はすべてのニュースを取得する
            $posts = Music::all();
        }

        if ($category != '') {

            $posts = Music::where('category', 'like', '%'.$category.'%')
                ->orderBy('id', 'asc')
                ->get();
        } else if ($category == '') {
            
        }else {
            // それ以外はすべてのニュースを取得する
            $posts = Music::all();
        }
        
        return view('admin.home', ['posts' => $posts, 'cond_title' => $cond_title, 'category' => $category, 'user' => $user]);
    }

    public function mypage(Request $request) {
        $user = Auth::user();
        $mypage_title = $request->mypage_title; 

        if ($mypage_title != '') {
            // 検索されたら検索結果を取得する
            // リレーションの関係を使ってnewとhistoryを使ってやってみる
            $music = Music::where('user_id', Auth::id()) 
            ->where('title', 'like', '%'.$mypage_title.'%')
            ->orderBy('created_at', 'desc') 
            ->get(); 
            // $music = $user->music->where('title', 'like', '%'.$mypage_title.'%');
        } else {
            $music = Music::where('user_id', Auth::id()) 
            ->orderBy('created_at', 'desc') 
            ->get(); 
        }

        return view('admin.mypage', ['posts' => $music, 'mypage_title' => $mypage_title, 'user' => $user]);
    }

    public function playing(Request $request) {
        $music = Music::find($request->id);

        return view('admin.playing', ['music' => $music]);
    }

    public function delete(Request $request)
    {
      $music = Music::find($request->id);
      // 削除する
      $music->delete();
      return redirect('admin/mypage/');
    }

    public function edit(Request $request)
    {
        $music = Music::find($request->id);
      if (empty($music)) {
        abort(404);    
      }
      return view('admin.mypageedit', ['music_form' => $music]);
    }
    
    public function update(Request $request)
    {
        $this->validate($request, Music::$rules);
        // News Modelからデータを取得する
        $music = Music::find($request->id);
        // 送信されてきたフォームデータを格納する
        $music_form = $request->all();

        // 該当するデータを上書きして保存する)
        $music->fill($music_form)->save();

        return redirect('admin/mypage/');
    }

}
