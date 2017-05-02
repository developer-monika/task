<?PHP
// echo 1;die;
function getUserIP()
{
    // $client  = @$_SERVER['HTTP_CLIENT_IP'];
    // echo $client;die;
    // $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];
     $ip = $remote;
      return $ip;
}
$user_ip = getUserIP();
echo $user_ip; // Output IP address [Ex: 177.87.193.134]
?>