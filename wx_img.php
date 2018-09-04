<?php
    /**
     * 微信头像获取过慢解决方案
     */
    public function to_qrcode(){
        $result=$this->get_img_base64("微信头像URL");
        echo('<img src="'.$result.'"/>');die();
    }


    function get_img_base64($url)
    {
        $ch = curl_init();
        curl_setopt( $ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch,CURLOPT_HEADER,0);
        $output = curl_exec($ch);
        $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        if ($code == 200) {//把URL格式的图片转成base64_encode格式的！
            $imgBase64Code = "data:image/jpeg;base64," . base64_encode($output);
        }
        $img_content=$imgBase64Code;//图片内容
        return $img_content;
    }
