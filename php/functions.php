<?php

$client = new Elasticsearch\Client();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function getHallos()
{
    return $results_lines = DB::query("SELECT summary,loveCount, hateCount,id  FROM hallos where isDeleted='N' order by created desc limit 0,50");
}

function getHallosForPerson($keyword)
{
    
}

function getHallosForTopic($keyword)
{
    
}

function postHallos($text, $imageUrl)
{
    
$user_ip=$_SERVER['REMOTE_ADDR'];
$nickname='batman';
/*if(!is_set($_SESSION('nick_name'))
return "Please choose your Nickname before posting.";
else
$nicname=$_SESSION('nick_name');
*/

$user_agent='batman';

DB::debugMode(true);

DB::insertUpdate('uaMappings',array(
                'ip'=>ip2long($user_ip),
                'ua' =>$user_agent
                )         
                );
      $ua_id=DB::insertId();

$summary=$text;
$moreText='N';
if(count($summary)>255)
{
	$moreText='Y';
	$summary=$text.substring(0,255);
}

	DB::insert('hallos', array('nickname'=> $nickname,'uaId' => $ua_id, 'summary' => $summary,'moreText'=>$moreText ));
	$last_inserted_id=DB::insertId();   
	DB::insert('hallos_text', array('id' => $last_inserted_id, 'message' => $text ));

$params = array();
$params['body']  = array('text' => $text);
$params['index'] = 'truwrd';
$params['type']  = 'hallos';
$params['id']    = '$last_inserted_id';
$ret = $client->index($params);
        print_r($ret);
}

function register()
{
    
}

function login()
{
    
}

function checkLogin()
{
    
}

?>

