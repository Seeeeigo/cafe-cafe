<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cafe;
use App\Http\Requests\CafeRequest;

class CafeController extends Controller
{
    /**
     * メイン画面を表示する
     * 
     * @return view
     */
    public function showMain() {
        return view('cafe.main');
    }
    /**
     * お問い合わせ画面を表示する
     * 
     * @return view
     */
    public function showContact() {
        $cafes = Cafe::all();
        return view('cafe.contact', 
        ['cafes' => $cafes ]);
    }
    /**
     * お問い合わせフォームのバリデーション
     * 
     * @return view
     */
    public function exeComfirm(CafeRequest $request) {
        //フォームから受け取ったすべてのinputの値を取得
        $inputs = $request->all();
        //入力内容確認ページのviewに変数を渡して表示
        return view('cafe.confirm', [
            'inputs' => $inputs
        ]);
    }
    // /**
    //  * お問い合わせを送信して完了ページへ
    //  * 
    //  * @return view
    //  */
    // public function showComplete() {
    //     return view('cafe.complete');
    // }
    /**
     * お問い合わせを送信して完了ページへ
     * 
     * @return view
     */
    public function exeComplete(Request $request) {
        //フォームから受け取ったすべてのinputの値を取得
        $inputs = $request->all();
        Cafe::create($inputs);
        return view('cafe.complete');
    }
    /**
     * お問い合わせ編集画面を表示する
     * 
     * @return view
     */
    public function showEdit($id) {
        $cafe = Cafe::find($id);

        if(is_null($cafe)) {
            \Session::flash('error_msg', 'データがありません');
            return redirect(route('contact'));
        }
        return view('cafe.edit', [
            'cafe' => $cafe
        ]);
    }
    /**
     * お問い合わせフォームの更新
     * 
     * @return view
     */
    public function exeUpdate(CafeRequest $request) {
        //フォームから受け取ったすべてのinputの値を取得
        $inputs = $request->all();
        // 内容を登録
        $cafe = Cafe::find($inputs['id']);
        $cafe->fill([
            'name' => $inputs['name'],
            'kana' => $inputs['kana'],
            'tel' => $inputs['tel'],
            'email' => $inputs['email'],
            'body' => $inputs['body']
        ]);
        $cafe->save();

        return view('cafe.update');
    }
    public function exeDelete($id) {
        Cafe::destroy($id);
        return view('cafe.delete');
    }
}
