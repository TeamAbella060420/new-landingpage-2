<?php

function is_weixin(){ 
if ( strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger') !== false ) {
//return true;
echo 'it is';
} 
//return false;
echo 'it is not';
}

function is_ios(){
    $iPod    = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
    $iPhone  = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
    $iPad    = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");
    $Android = stripos($_SERVER['HTTP_USER_AGENT'],"Android");
    $webOS   = stripos($_SERVER['HTTP_USER_AGENT'],"webOS");

//do something with this information
if( $iPod || $iPhone || $iPad){
    //browser reported as an iPhone/iPod touch -- do something here
    return true;
}else if($Android){
    //browser reported as an Android device -- do something here
    return false;
}else if($webOS){
    //browser reported as a webOS device -- do something here
    return false;
}

}

is_weixin();

if(is_ios()){
    echo 'an ios gadget. he rich';
}
