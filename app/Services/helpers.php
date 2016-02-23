<?php

if (!function_exists('get_url_content')) {
    function get_url_content($url, $mobile = FALSE, $timeout_ms = FALSE) {
        $m_ua_array = array();
        $p_ua_array = array();
        if ($mobile) {
            $m_ua_array[] = 'Mozilla/5.0 (Linux; U; Android 2.2; zh-cn; Desire_A8181 Build/FRF91) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1';
            $m_ua_array[] = 'Mozilla/5.0 (Linux; U; Android 2.2; zh-cn; Nexus One Build/FRF91)';
            $m_ua_array[] = 'Mozilla/5.0 (Linux; U; Android 2.2; zh-cn; Droid Build/FRG22D) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1';
            $m_ua_array[] = 'Mozilla/5.0 (Linux; U; Android 2.2; zh-cn; GT-P1000 Build/FROYO) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1';
            $m_ua_array[] = 'Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_3_3 like Mac OS X; zh-cn) AppleWebKit/533.17.9 (KHTML, like Gecko) Version/5.0.2 Mobile/8J2 Safari/6533.18.5';
            $m_ua_array[] = 'Mozilla/5.0 (Linux; U; Android 2.3.3; zh-cn; GT-I9000 Build/GINGERBREAD) UC AppleWebKit/530+ (KHTML, like Gecko) Mobile Safari/530';
        } else {
            $p_ua_array[] = 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; InfoPath.1)';
            $p_ua_array[] = 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 2.0.50727;)';
            $p_ua_array[] = 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; 360SE)';
            $p_ua_array[] = 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; 360SE)';
            $p_ua_array[] = 'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; MASP)';
            $p_ua_array[] = 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0; .NET CLR 2.0.50727; 360SE)';
        }

        $ua = ($mobile) ? $m_ua_array[array_rand($m_ua_array)] : $p_ua_array[array_rand($p_ua_array)];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        if ($timeout_ms > 0) {
            $timeout_ms = intval($timeout_ms);
            curl_setopt($ch, CURLOPT_NOSIGNAL, 1);
            curl_setopt($ch, CURLOPT_TIMEOUT_MS, $timeout_ms);
        } else {
            curl_setopt($ch, CURLOPT_TIMEOUT, 15);
        }
        curl_setopt($ch, CURLOPT_USERAGENT, $ua);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        curl_setopt($ch, CURLOPT_HEADER, 1);
        $data = curl_exec($ch);
        curl_close($ch);
        $arr = explode("\r\n\r\n", $data, 2);
        if (count($arr) == 2) {
            list(, $body) = $arr;
            return $body;
        }
        return NULL;
    }
}

if (!function_exists('get_current_action')) {
    function get_current_action() {
        $action = \Route::current()->getActionName();
        list($_class, $method) = explode('@', $action);

        $_class_arr = explode('\\', $_class);
        $class = preg_replace('/Controller/', '', end($_class_arr));
        return ['class' => strtolower($class), 'method' => $method];
    }
}