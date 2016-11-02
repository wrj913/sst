<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller {

    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers;

    /**
     * Create a new authentication controller instance.
     *
     * @param  \Illuminate\Contracts\Auth\Guard $auth
     * @param  \Illuminate\Contracts\Auth\Registrar $registrar
     * @return void
     */
    public function __construct(Guard $auth, Registrar $registrar) {
        $this->auth = $auth;
        $this->registrar = $registrar;

        $this->middleware('guest', ['except' => 'getLogout']);
    }

    public function getLogin() {
        /*


        //取得指定位址的內容，並儲存至text
        $bingtext = get_url_content('http://cn.bing.com/');
        //获取g_img={url:'与'之间的内容
        if (!preg_match( "/g_img={url:'(.*)'/Uis ",$bingtext, $match)) {
            preg_match( "/g_img={url: \"(.*)\"/Uis ",$bingtext, $match);
        }

        //去掉多余的
        $bingtarStr = str_replace("", "", $match);
        */
        //提取数组里第二个值
        $bingurlcontents = isset($bingtarStr[1]) ? $bingtarStr[1] : '';

        return view('auth.login')->with('bg_img', $bingurlcontents);
    }

}
