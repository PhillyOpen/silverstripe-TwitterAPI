silverstripe-TwitterAPI
=======================

SilverStripe Module for Twitter API

Setup your OAuth and Application Keys in the _config.php file.
## Usage
      $t = new Twitter();  
      $statuses = $t->getStatuses();
      var_dump($statuses[0]);
  //getStatuses() returns an array of objects containing the Tweet information (See sample dump below)
***

object(stdClass)#17 (20) {  
  ["created_at"]=>  
  string(30) "Fri Oct 19 17:44:34 +0000 2012"  
  ["id"]=>  
  int(259349334691287040)  
  ["id_str"]=>  
  string(18) "259349334691287040"  
  ["text"]=>  
  string(54) "Missing Person From Cheltenham Pa.http://t.co/1WZxjQYE"  
  ["source"]=>  
  string(3) "web"  
  ["truncated"]=>  
  bool(false)  
  ["in_reply_to_status_id"]=>  
  NULL  
  ["in_reply_to_status_id_str"]=>  
  NULL  
  ["in_reply_to_user_id"]=>  
  NULL  
  ["in_reply_to_user_id_str"]=>  
  NULL  
  ["in_reply_to_screen_name"]=>  
  NULL  
  ["user"]=>  
  object(stdClass)#18 (37) {  
    ["id"]=>  
    int(73491087)  
    ["id_str"]=>  
    string(8) "73491087"  
    ["name"]=>  
    string(20) "Philadelphia Police "  
    ["screen_name"]=>  
    string(12) "PhillyPolice"  
    ["location"]=>  
    string(16) "Philadelphia, PA"  
    ["url"]=>  
    string(27) "http://www.phillypolice.com"  
    ["description"]=>  
    string(69) "The official Twitter account for... "  
    ["protected"]=>  
    bool(false)  
    ["followers_count"]=>  
    int(11100)  
    ["friends_count"]=> 
    int(236)  
    ["listed_count"]=>  
    int(262)  
    ["created_at"]=>  
    string(30) "Fri Sep 11 21:36:39 +0000 2009"  
    ["favourites_count"]=>  
    int(3)  
    ["utc_offset"]=>  
    int(-18000)  
    ["time_zone"]=>  
    string(26) "Eastern Time (US & Canada)"  
    ["geo_enabled"]=>  
    bool(true)
    ["verified"]=>  
    bool(true)  
    ["statuses_count"]=>  
    int(1752)  
    ["lang"]=>  
    string(2) "en"  
    ["contributors_enabled"]=>  
    bool(false)  
    ["is_translator"]=>  
    bool(false)  
  }
  ["geo"]=>
  NULL
  ["coordinates"]=>
  NULL
  ["place"]=>
  NULL
  ["contributors"]=>
  NULL
  ["retweet_count"]=>
  int(1)
  ["favorited"]=>
  bool(false)
  ["retweeted"]=>
  bool(false)
  ["possibly_sensitive"]=>
  bool(false)
}