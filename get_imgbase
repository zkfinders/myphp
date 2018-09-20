<?php

function get_imgbase(){
    $img=$_FILES['img'];
    $base64_img = $this->base64EncodeImage($img['tmp_name']);//接收文件转换为base64 位代码
    //todo 
}


/**
 *将图片转化为base64
 **/
function base64EncodeImage($image_file)
{
    $base64_image = '';
    $image_info = getimagesize($image_file);
    $image_data = fread(fopen($image_file, 'r'), filesize($image_file));
    $base64_image = chunk_split(base64_encode($image_data));
    return $base64_image;
}
