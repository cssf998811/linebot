<?php
/**
 * Copyright 2017 GoneTone
 *
 * Line Bot
 * 範例 Example Bot (Text)
 *
 * 此範例 GitHub 專案：https://github.com/GoneTone/line-example-bot-php
 * 官方文檔：https://developers.line.biz/en/reference/messaging-api#text-message
 */
/**
陣列輸出 Json
==============================
{
    "type": "text",
    "text": "Hello, world!"
}
==============================
*/
if (strtolower($message['text']) == "text" || $message['text'] == "文字"){
    $client->replyMessage(array(
        'replyToken' => $event['replyToken'],
        'messages' => array(
            array(
                'type' => 'text', // 訊息類型 (文字)
                'text' => '你是不是想被抬' // 回復訊息
            )
        )
    ));
}
//help
if (strtolower($message['text']) == "help" || $message['text'] == "幫助"){
    $client->replyMessage(array(
        'replyToken' => $event['replyToken'],
        'messages' => array(
            array(
                'type' => 'text', // 訊息類型 (文字)
                'text' => '你可以輸入文字、圖片、音樂、影片、位置、貼圖' // 回復訊息
            )
        )
    ));
}
//抽籤程式
function startsWith($string, $startString) { 
    $len = strlen($startString);
    return (substr($string, 0, $len) === $startString); 
}

if (startsWith($message['text'], "數位系誰")){

    $people = array('戴泓名', '小豬', '阿明', '金城武', '阿杰');
    $num = rand(0, count($people) - 1 );

    $msg = "今天的幸運兒是" . $people[$num];

    $client->replyMessage(array(
        'replyToken' => $event['replyToken'],
        'messages' => array(
            array(
                'type' => 'text', // 訊息類型 (文字)
                'text' => $msg // 回復訊息
            )
        )
    ));
}
?>