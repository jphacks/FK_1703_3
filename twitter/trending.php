<?php
    require_once('TwitterAPIExchange.php');
    
    /** Set access tokens here - see: https://dev.twitter.com/apps/ **/
    $settings = array(
                      'oauth_access_token' => "283157371-7NTNrUBtXcovZatjW7jDHInGWy5NWWStHwZcX6xa",
                      'oauth_access_token_secret' => "whCrAfustVMK7bPyHlEh9HjCmCr2Mi4sYPDwISrNPsF8Z",
                      'consumer_key' => "xISFPMAw25zbrjaq5m51Uf2fq",
                      'consumer_secret' => "iscMxVYcIUXqnJfeK4iKkHmWNGoG6IB9fKorSfZfF3wbfsTRSA"
                      );
    
    $url = "https://api.twitter.com/1.1/trends/place.json";
    $requestMethod = "GET";
    $getfield = '?id=23424856';
    $twitter = new TwitterAPIExchange($settings);
    $string = json_decode($twitter->setGetfield($getfield)
                          ->buildOauth($url, $requestMethod)
                          ->performRequest(),$assoc = TRUE);
    if ($string["errors"][0]["message"] != "")
    {
        echo "<h3>問題がありました</h3><p>エラーメッセージ：</p><p><em>".$string[errors][0]["message"]."</em></p>";
        exit();
    }
    #echo "<pre>";
    #print_r($string);
    #echo "</pre>";
    foreach ($string[0]["trends"] as $trend)
    {
        echo $trend["name"];
        echo "<br>";
    }
?>
