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

    public function new_login() {
        //取得指定位址的內容，並儲存至text
        $bingtext = $this->get_url_content('http://cn.bing.com/');
        //获取g_img={url:'与'之间的内容
        preg_match( "/g_img={url:'(.*)'/Uis ",$bingtext, $match);
        //去掉多余的
        $bingtarStr = str_replace("", "", $match);
        //提取数组里第二个值
        $bingurlcontents = $bingtarStr[1];

        return view('auth.new_login')->with('bg_img', $bingurlcontents);
    }

    private function get_url_content($url) {
        $p_ua = 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.3';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_TIMEOUT, 15);
        curl_setopt($ch, CURLOPT_USERAGENT, $p_ua);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_COOKIE, 't=129d1c2331061d0e9642a3bbec5e2b86;_tb_token_=22F75OdzWFPyrq5;cookie2=1ef999aed6fe481ff94a0b20b6713308;sca=480d7041;');
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch,CURLOPT_HTTPHEADER, array ( "charset=utf-8", "Expect: 100-continue" ));
        curl_setopt($ch, CURLOPT_MAXREDIRS, 5);
        $data = curl_exec($ch);
        curl_close($ch);
        return $data;
    }

}
