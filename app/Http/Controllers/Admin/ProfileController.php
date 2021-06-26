<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Music;
use App\User;
use App\Skin;
use Storage;
use Auth;

class ProfileController extends Controller
{
    public function edit(Request $request) {
        $user = Auth::user();
        return view('admin.profileedit', ['user' => $user]);
    }
    
    public function update(Request $request) {
        
      $validate_rule = [
        'name' => 'required|max:10',
     ];
     
     $this->validate($request, $validate_rule);

        $user = Auth::user();
        $form = $request->all();

        $user->skin_id = $request->skin_id;
        $user->name = $request->name;

        if (isset($form['image'])) {
            $path = Storage::disk('s3')->putFile('/',$form['image'], 'public');
            $user->profile_image = Storage::disk('s3')->url($path);
          } elseif ($request->file('image')) {
            $path = Storage::disk('s3')->putFile('/',$form['image'], 'public');
            $form['profile_image'] = Storage::disk('s3')->url($path);
          } else {
            $form['profile_image'] = $user->profile_image;
        }

        unset($form['_token']);
        unset($form['image']);
        
        $user->fill($form)->save();

        return redirect('admin/mypage');
    }
}


