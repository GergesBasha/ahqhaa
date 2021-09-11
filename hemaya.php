/*
هذا الملف تابع لحقوق سورس بلاك ترفعه علي استضافتك وتعمل ويب هوك للبوت هيشتغل معاك
تم البرمجه بواسطه المبرمج جاك
اي استفسار كلمني 
@PHP57
اتمني انك تستمتع بالملف 
بالتوفيق للجميع
*/
<?php 
ob_start();
$API_KEY = '1743579427:AAE0tur8J81qyZL0DQSIMPSlY6JnOwJNZVw'; /* توكن البوت */
$sudo = 1646796547; /* ايديك */
$bot_id = 1798208272;  /* ايدي البوت ( الرقم اللي ف اول التوكن ) */
$sudo2 = 1765160742; /* ايدي المطور الاساسي الثاني لو مفيش حد ايديك عادي */
$e = "@He44bot"; /* معرف البوت منغير @ */
define('API_KEY',$API_KEY);
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
 var_dump(curl_error($ch));
    }else{
 return json_decode($res);
    }
}


$update = json_decode(file_get_contents('php://input'));
var_dump($update);
$message    = $update->message;
$message_id = $update->message->message_id;
$re_msgid   = $update->message->reply_to_message->message_id;
$from_id    = $message->from->id;
$text= $message->text;
$chat_id    = $message->chat->id;
$new = $message->new_chat_member;
$left= $update->message->left_chat_member;
$result2    = $json2->result;
$contact    = $update->message->contact;
$audio      = $update->message->audio;
$location   = $update->message->location;
$memb= $update->message->message_id;
$game= $update->message->game; 
$name= $update->message->from->first_name;
$re  = $update->message->reply_to_message;
$re_msgid   = $update->message->reply_to_message->message_id;
$re_id      = $update->message->reply_to_message->from->id;
$gp_name    = $update->message->chat->title;
$user= $update->message->from->username;
$for = $update->message->from->id;
$sticker    = $update->message->sticker;
$video      = $update->message->video;
$photo      = $update->message->photo;
$voice      = $update->message->voice;
$doc = $update->message->document;
$fwd = $update->message->forward_from;
$re  = $update->message->reply_to_message;
$re_id      = $update->message->reply_to_message->from->id;
$re_user    = $update->message->reply_to_message->from->username;
$re_msgid   = $update->message->reply_to_message->message_id;
$type= $update->message->chat->type;
$mid = $message->message_id;
$chat_id = $message->chat->id;
$id = $message->from->id;
$message_id = $message->message_id;
  $JACKKKKKK = $message->message_id;

$forward = $update->message->forward_from_id;
$number     = str_word_count($text);
$numper     = strlen($text);
$set = file_get_contents("data/$chat_id.txt");
$ex  = explode("\n", $set);
$photo1     = $ex[0];
$sticker1   = $ex[1];
$contact1   = $ex[2];
$doc1= $ex[3];
$fwd1= $ex[4];
$voice1     = $ex[5];
$link1      = $ex[6];
$audio1     = $ex[7];
$video1     = $ex[8];
$tag1= $ex[9];
$mark1      = $ex[10];
$bots1      = $ex[11];
$commands = array('/add','/lock photo','/lock voice','/lock audio','/lock video','/lock link','/lock user','/lock sticker','/lock contact','/lock doc','/promote','/ban','/kick','/pin','/setname',"قفل الصور","قفل البصمات","قفل الصوت","قفل الفيديو","قفل الروابط","قفل الجهات","قفل الملفات","حظر","طرد","رفع ادمن","ضع اسم","تثبيت","/link","الرابط");
$s = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$bot_id);
$ss = json_decode($s, true);
$bot = $ss['result']['status'];
if(in_array($text, $commands) and $bot != "administrator"){
  bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"🚫┇للأسف البوت ليس ادمن في المجموعة",
  'reply_to_message_id'=>$mid
    ]);
}

$from_id     = $message->from->id;
$get = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$from_id);
$info = json_decode($get, true);
$you = $info['result']['status'];
$gp_get = file_get_contents("data/groups.txt");
$groups = explode("\n", $gp_get);
 if($text=="/start" and $type == "private"){
bot('sendphoto',[
    'chat_id'=>$chat_id,
    'photo'=>"https://t.me/PHP57",
    'caption'=>"❍ اهلا بك عزيزي ❪ @$user ❫
❍ انا بوت اسمي ❪بلاك يتم تطويري بوسطه المبرمج جاك 
❍ اختصاصي حماية المجموعات المتفاعله
❍ لتفعيل البوت اتبع مايلي
❍ اضف البوت الى المجموعه
❍ ارفع البوت ادمن في المجموعه
❍ سيتم تفعيل البوت ورفع مشرفي الكروب
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
❍ مطور البوت ❪@PHP57)",
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
 [['text'=>"آلمـطـور 🌿",'url'=>"https://t.me/PHP57"]]
    ]

  ])
  ]);
}
if ($new and $new->id == $bot_id) {
  bot('sendphoto',[
    'chat_id'=>$chat_id,
    'photo'=>"https://t.me/PHP57",
    'caption'=>"🚨¦ مرحبا صديقي انا بوت حمايه ،
    ❍ يمڪنني حمايه مجموعتڬ ،
    ❍ ارفعني ڪمشرف في المجموعه ،
    ❍ ۅمن بعدها يتم تفعيل المجموعه ،
    ❍ ويتم رفع الادمنيه والمدير تلقائيا",
    
    ]);
}

if ($type == "supergroup" and in_array($chat_id, $groups)){
  
  if($you != "creator" && $you != "administrator" && $from_id != $sudo){
    if($photo && $photo1 == "l"){
 bot('deleteMessage',[
     'chat_id'=>$chat_id,
     'message_id'=>$message->message_id
 ]);
    }

    if($voice and $voice1 == "l"){
      bot('deleteMessage',[
   'chat_id'=>$chat_id,
   'message_id'=>$message->message_id
      ]);
    } 
    if($audio && $audio1 == "l"){
      bot('deleteMessage',[
   'chat_id'=>$chat_id,
   'message_id'=>$message->message_id
      ]);
    }
    if($video && $video1 == "l"){
      bot('deleteMessage',[
   'chat_id'=>$chat_id,
   'message_id'=>$message->message_id
      ]);
    }
    if($link1 == "l" and preg_match('/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/',$text) ){
bot('deleteMessage',[
  'chat_id'=>$chat_id,
  'message_id'=>$message->message_id
      ]);
    } 
    if($tag1 == "l" and  preg_match('/^(.*)@|@(.*)|(.*)@(.*)|(.*)#(.*)|#(.*)|(.*)#/',$text)){
bot('deleteMessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message->message_id
]);
    }
    if($doc and $doc1 == "l"){
      bot('deleteMessage',[
   'chat_id'=>$chat_id,
   'message_id'=>$message->message_id
      ]);
    }
    if($sticker and $sticker1 == "l"){
      bot('deleteMessage',[
   'chat_id'=>$chat_id,
   'message_id'=>$message->message_id
      ]);
    }
    if($update->message->forward_from && $fwd1 == "l"){
      bot('deleteMessage',[
   'chat_id'=>$chat_id,
   'message_id'=>$message->message_id
      ]);
    }
    if($message->entities and $mark1 == "l"){
      bot('deleteMessage',[
   'chat_id'=>$chat_id,
   'message_id'=>$message->message_id
      ]);
    }
    if($new and $bots1 == "l"){
      $new_user = $new->username;
      if (preg_match('/^(.*)([Bb][Oo][Tt]/', $new_user)) {
 bot('kickChatMember',[
   'chat_id'=>$chat_id,
   'user_id'=>$new->id
   ]);
      }
    }
  }

if($bot == "administrator"){
if($you == "creator" or $you == "administrator") {
$re_user    = $update->message->reply_to_message->from->username;
  if($re  &&  $text == "/del"){
    bot('deleteMessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$re_msgid
    ]);
  }
  if($re and $re_id != $bot and $re_id != $sudo and $text=="/ban" or $text == "حظر" or $text == "/kick" or $text=="طرد"){
    bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"
  ❍ العضــو » ❪ @$re_user ❫
      ❍ الايـدي » ( $re_id )
❍  تم حظره 
",
  'reply_to_message_id'=>$mid
      ]);
    bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$re_id
      ]);
  }
  if($re and $re_id != $bot and $re_id != $sudo and $text=="/unban" or $text == "الغاء الحظر"){
    bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"
❍ العضــو » @$re_user 
❍ الايـدي » ( $re_id )
❍  تم الغاء حظره 
",
  'reply_to_message_id'=>$mid
      ]);
    bot('unbanChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$re_id
      ]);
    }
  if($text == "/promote" or $text == "رفع ادمن " and $you != "memb"){
      bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"
❍ العضــو » @$re_user 
❍ الايـدي » ( $re_id )
❍ تـم تـرقيتـه ادمن للـكروب 
",
  'reply_to_message_id'=>$mid
      ]);
      bot('promoteChatMember',[
   'chat_id'=>$chat_id,
   'user_id'=>$re_id
 ]);
  }
  $ename = str_replace("/setname ", "$ename", $text);
  $aname = str_replace("ضع اسم ", "$aname", $text);
  if($text == "/setname $ename"){
    bot('setChatTitle',[
      'chat_id'=>$chat_id,
      'title'=>$ename 
      ]);
  }
   if($text == "ضع اسم $aname"){
     bot('setChatTitle',[
      'chat_id'=>$chat_id,
      'title'=>$aname 
      ]);
   }
   if($re and $text == "pin" or $text == "تثبيت"){
    bot('pinChatMessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$re_msgid
      ]);
   }
   if($text == "/lock photo" or $text == "قفل الصور"){
    file_put_contents("data/$chat_id.txt", "l\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
     bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"
❍ اهــلا عـزيـزي $name  
❍ تـم قفل  
✓ الصور 
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
 
   if($text == "/open photo" or $text == "فتح الصور"){
    file_put_contents("data/$chat_id.txt", "o\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"❍ اهــلا عـزيـزي $name  
❍ تـم فتح  
✓ الصور 
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
 
    if($text == "/lock sticker" or $text == "قفل الملصقات"){
    file_put_contents("data/$chat_id.txt", "$photo1\nl\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"❍ اهــلا عـزيـزي $name  
❍ تـم قفل  
✓ الملصقات 
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
if($text == "/open sticker" or $text == "فتح الملصقات"){
    file_put_contents("data/$chat_id.txt", "$photo1\no\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"❍ اهــلا عـزيـزي $name  
❍ تـم فتح  
✓ الملصقات 
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
if($text == "/lock contact" or $text == "قفل الجهات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\nl\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"❍ اهــلا عـزيـزي $name  
❍ تـم قفل  
✓ جهات الاتصال 
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
 if($text == "/open contact" or $text == "فتح الجهات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\no\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"❍ اهــلا عـزيـزي $name  
❍ تـم فتح  
✓ جهات الاتصال 
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/lock doc" or $text == "قفل الملفات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\nl\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"❍ اهــلا عـزيـزي $name  
❍ تـم قفل  
✓ الملفات 
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
  if($text == "/open doc" or $text == "فتح الملفات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\no\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"❍ اهــلا عـزيـزي $name  
❍ تـم فتح  
✓ الملفات 
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
if($text == "/lock fwd" or $text == "قفل التوجيه"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\nl\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"❍ اهــلا عـزيـزي $name  
❍ تـم قفل  
✓ التوجيه 
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/open fwd" or $text == "فتح التوجيه"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\no\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"❍ اهــلا عـزيـزي $name  
❍ تـم فتح  
✓ التوجيه 
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/lock voice" or $text == "قفل البصمات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\nl\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"❍ اهــلا عـزيـزي $name  
❍ تـم قفل  
✓ البصمات 
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
     if($text == "/open voice" or $text == "فتح البصمات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\no\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"❍ اهــلا عـزيـزي $name  
❍ تـم فتح  
✓ البصمات 
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
     if($text == "/lock link" or $text == "قفل الروابط"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\nl\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"❍ اهــلا عـزيـزي $name  
❍ تـم قفل  
✓ الروابط 
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/open link" or $text == "فتح الروابط"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\no\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"❍ اهــلا عـزيـزي $name  
❍ تـم فتح  
✓ الروابط 
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/lock audio" or $text == "قفل الصوت"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\nl\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"❍ اهــلا عـزيـزي $name  
❍ تـم قفل  
✓ الصوت 
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/open audio" or $text == "فتح الصوت"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\no\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"❍ اهــلا عـزيـزي $name 
❍ تـم فتح  
✓ الصوت 
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/lock video" or $text == "قفل الفيديو"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\nl\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"❍ اهــلا عـزيـزي $name  
❍ تـم قفل  
✓ الفيديو 
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/open video" or $text == "فتح الفيديو"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\no\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"❍ اهــلا عـزيـزي $name  
❍ تـم فتح  
✓ الفيديو 
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/lock user" or $text == "قفل المعرفات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\nl\n$mark1\n$bots1");
    bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"❍ اهــلا عـزيـزي $name  
❍ تـم قفل  
✓ المعرفات 
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/open user" or $text == "فتح المعرفات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\no\n$mark1\n$bots1");
    bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"❍ اهــلا عـزيـزي $name  
❍ تـم فتح  
✓ المعرفات 
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
    if($text == "/lock mark" or $text == "قفل الماركدون"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\nl\n$bots1");
    bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"❍ اهــلا عـزيـزي $name  
❍ تـم قفل  
✓ الماركدون 
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/open mark" or $text == "فتح الماركدون"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\no\n$bots1");
    bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"❍ اهــلا عـزيـزي $name  
❍ تـم فتح  
✓ الماركدون 
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
  if($text == "/lock bots" or $text == "قفل البوتات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\nl");
    bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"❍ اهــلا عـزيـزي $name  
❍ تـم قفل  
✓ البوتات 
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/open bots" or $text == "فتح البوتات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\no");
    bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"❍ اهــلا عـزيـزي $name  
❍ تـم فتح  
✓ البوتات 
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }


    $export = json_decode(file_get_contents("https://api.telegram.org/bot$API_KEY/exportChatInviteLink?chat_id=$chat_id"));
    $l = $export->result;

   if($you == "creator" or $you == "administrator" or $you == "member" or $from_id == $sudo){
    if ($text == "المطور" or $text ==  مطور  and  $you == "administrator") {
    $result2 = $json2->result;
    bot( sendmessage ,[
     chat_id =>$chat_id, 
     text =>"
     ❍مرحبا عزيزي قمت بارسال رساله للمطور في الخاص للحضور
     ❍وارفقت مع الرساله معلومات المجموعه ومعلوماتك
     ❍ انتضر قليلا ",
     reply_to_message_id =>$message->message_id,
    ]);
    bot( sendMessage ,[
     chat_id =>$sudo,
     text =>"
     ❍عزيــزي المطــور الاساسي
    ❍قــام احد الاشخاص بأستدعائــك
    ❍ اسم العضو ( $name )
    $gp_link)رابط المجموعه
    ❍اســم المجمــوعه【  $gp_name  】
    ❍ ايــدي المجمــوعه » $chat_id ❍
    ❍ يوزر الــذي قام بأستدعائــك  » @$user
    ",
    ]);
    }
    }


   if(preg_match('/^(مسح) (.*)/', $text, $delmsg) and $from_id == $sudo){
    for($h=$message_id; $h>=$message_id-$delmsg[2]; $h--){
    bot('deletemessage',[
    'chat_id' => $chat_id,
    'message_id' =>$h,]);}}
    $editMessage = $update->edited_message;
    $chatedit = $update->edited_message->chat->id;
    $chat_id2 = $update->callback_query->message->chat->id;
    $message_id = $update->callback_query->message->message_id;
    $data = $update->callback_query->data;
    if($editMessage){
         bot('sendMessage',[
         'chat_id'=>$chatedit,
         'text'=>'سحك وعدل 😹☝🏿',
         'message_id'=>$message->edited_message->message_id,
         'reply_to_message_id'=>$update->edited_message->message_id,
         ]);
     }
   if($text=="/help"){
    bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"❂
 ❍ اهلآ بك، في اوامر الپوت
ــــــــــــــــــــــ❍ـــــــــــــــــــــ
❍ م1 » لعَرض قائمهۃ الـحمـايهۃ 
❍ م2 » لعَرض اوامر الاعضاء
❍ م3» لعَرض قائمهۃ الحظَر والخہ...
❍ م4 » لعَرض قائمهۃ الادمنيهۃ
ــــــــــــــــــــــ❍ـــــــــــــــــــــ
❍ م5 » لعَرض اوامر المدراء
❍ م6 » لعَرض اوامر المنشئين
❍ م7 » لعَرض اوامر اﻟ̣مطور
❍ م8 » لعَرض اوامر اﻟ̣مطور الاساسي 
ــــــــــــــــــــــ❍ـــــــــــــــــــــ
❍ للمزيد من المعلومات راسلنا  ࿈

❍ م $name » لعَرض اوامر اوامر $name


 ‏‎‏❍ رآسـلني للآسـتفسـآر ☜ { @PHP57 } ",
      ]);
   }
  if($text=="الاوامر"){
    bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"❂
 ❍ اهلآ بك، في اوامر الپوت
ــــــــــــــــــــــ❍ـــــــــــــــــــــ
❍ م1 » لعَرض قائمهۃ الـحمـايهۃ 
❍ م2 » لعَرض اوامر الاعضاء
❍ م3» لعَرض قائمهۃ الحظَر والخہ...
❍ م4 » لعَرض قائمهۃ الادمنيهۃ
ــــــــــــــــــــــ❍ـــــــــــــــــــــ
❍ م5 » لعَرض اوامر المدراء
❍ م6 » لعَرض اوامر المنشئين
❍ م7 » لعَرض اوامر اﻟ̣مطور
❍ م8 » لعَرض اوامر اﻟ̣مطور الاساسي 
ــــــــــــــــــــــ❍ـــــــــــــــــــــ
❍ للمزيد من المعلومات راسلنا  ࿈

❍ م $name » لعَرض اوامر اوامر $name


 ‏‎‏❍ رآسـلني للآسـتفسـآر ☜ { @PHP57 } ",
      ]);
  }
 }
}
if($text=="اوامر القفل" or $text=="/setting$e" or $text=="الاعدادات"){

  bot('sendMessage',['chat_id'=>$chat_id, 'text'=>"ــــــــــــــــــــــ❍ـــــــــــــــــــــ
   ¦ اهلا بك في اوامر القفل
❍ ڨفلٰ ‹› ڤتح » الامر
 ــــــــــــــــــــــ❍ـــــــــــــــــــــ
  ❍ الروابط «» الكلايش
  ❍ المعرفات «» اللستات
  ❍ التاك «» الصوت 
  ❍ البوتات «» المتحركه
  ❍ التوجيه «» الدردشه
  ❍ التثبيت «» الملفات
  ❍ الاشعارات «» الفيديو
  ❍ الماركدون «» الاغاني
  ❍ التعديل «» الالعاب
  ❍ تعديل الميديا «» الصور
  ❍ الملصقات «» السيلفي
  ❍ الجهات «» الدخول «» الاضافه
  ــــــــــــــــــــــ❍ـــــــــــــــــــــ
  ❍ للمزيد من الاوامر ارسل ↓
  ❍ اوامر الكتم » لعرض اوامر الكتم
  ❍ اوامر التقيد » لعرض اوامر التقيد
  ❍ اوامر الطرد » لعرض اوامر الطرد
  ــــــــــــــــــــــ❍ـــــــــــــــــــــ
  ❍ للمزيد من المعلومات راسلنا  ࿈
",
]);
}
}
if($bot == "administrator"){
 if ($you == "administrator" or $you == "creator") {
if($text == "/add" or $text == "/add$e" or $text=="تفعيل"){
if(!in_array($chat_id, $groups)){
  file_put_contents("data/$chat_id.txt", "o\no\no\no\nl\no\nl\no\no\nl\no");
  file_put_contents("data/groups.txt", "$chat_id\n",FILE_APPEND);
$t =  $message->chat->title;
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"❍ تـم تـفـعـيـل الـمـجـمـوعـه ✓️ 
    ❍¦ وتم رفع جمـيع آلآدمـنيهہ‌‌‏ الجروب بآلبوت 
    ✓
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
    ]);
 }
if (in_array($chat_id, $groups)) {
$t =  $message->chat->title;
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"❍ المجموعه بالتأكيد  تم تفعيلها",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
    ]);
 }
}
}
}
 if($text == "عدد المجموعة"){
  $c = count($groups);
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔐¦¦ عدد عدد المجموعة المفعلة » $c  ➼"
    ]);
 }
if($text == "اذاعه" and $for == $sudo){
  file_put_contents("mode.txt", "bc");
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"❍ ❍ ارسال الان نص او الميديا : (صوره - فديو - متحركه - ملف)"
    ]);
}
$mode = file_get_contents("mode.txt");
if($text != "اذاعه" and $mode=="bc" and $for == $sudo){
  for ($i=0; $i < count($groups); $i++) { 
    bot('sendMessage',[
      'chat_id'=>$groups[$i],
      'text'=>" $text"
    ]);
  }
  unlink("mode.txt");
}
/////////////////////////////////////////////////////////////////////////////////////
$update     = json_decode(file_get_contents('php://input'));
$message = $update->message;
$text           = $message->text;
$chat_id     = $message->chat->id;
$user          = $update->message->from->username;
$from_id     = $message->from->id;
$from_user = $message->from->username;
$get             = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$from_id);
$info            = json_decode($get, true);
$JJ117        = $info['result']['status'];
if($message){
$msgs = json_decode(file_get_contents('msgs.json'),true);
$update = json_decode(file_get_contents('php://input'));
$msgs['msgs'][$chat_id][$from_id] = ($msgs['msgs'][$chat_id][$from_id]+1);
file_put_contents('msgs.json', json_encode($msgs));}
$iBadlz = array(
"متفاعل سيكا 🌝",
"متفاعل ✨",
"اسطورة التفاعل 🔥ء",
"مالك تفاعل ⚜️",
"التفاعل نفسه 💘ء");
 $JJ119 = array_rand($iBadlz,1);
 $p_pppp = array(
    "0.14%",
    "0.22%",
    "0.31%",
    "0.65%",
    "0.77%",
    "0.80%",
    "0.89%",
    "0.95%");
     $markst = array_rand($p_pppp,1);
    
$photo = "https://t.me/$user";
if($text=="ايدي" and $from_id == $sudo){
bot("sendPhoto",[
'chat_id'=>$chat_id,
"photo"=>$photo,
'caption'=>"*
⎮اسمك •  $name
⎮ايديك • ❲ $from_id ❳  
⎮معرفك • ❲ $from_user ❳ ،
⎮رتبتك • ❲ مطور اساسي ❳ ،
⎮تفاعلك • ❲ $iBadlz[$JJ119] ❳ ،
⎮تفاعلك اليومي ( $p_pppp[$markst] )
⎮رسائلك •  ❲ ".$msgs['msgs'][$chat_id][$from_id]." ❳ 
⎮نقودك • ❴0❵
-----------------------
*",
"parse_mode"=>"MARKDOWN",
'message_id'=>$message->message_id,
'reply_to_message_id' =>$message->message_id, 
]);
}elseif($text=="ايدي" and $from_id == $sudo){
 bot("sendmessage",[
 'chat_id'=>$chat_id,
 'text'=>"*
 ⎮اسمك •  $name
⎮ايديك • ❲ $from_id ❳  
⎮معرفك • ❲ $from_user ❳ ،
⎮رتبتك • ❲ مطور اساسي ❳ ،
⎮تفاعلك • ❲ $iBadlz[$JJ119] ❳ ،
⎮رسائلك •  ❲ ".$msgs['msgs'][$chat_id][$from_id]." ❳ 
⎮تفاعلك اليومي ( $p_pppp[$markst] )
⎮نقودك • ❴0❵
-----------------------
• لاتمتلك صوره لحسابك ،❍ء
*",
"parse_mode"=>"MARKDOWN",
 ]);
 }
if($text=="ايدي" and $JJ117 == "creator" and $from_id != $sudo){
bot("sendPhoto",[
'chat_id'=>$chat_id,
"photo"=>$photo,
'caption'=>"*
⎮اسمك •  $name
⎮ايديك • ❲ $from_id ❳  
⎮معرفك • ❲ $from_user ❳ ،
⎮رتبتك • ❲ منشئ الكروب ❳ ،
⎮تفاعلك • ❲ $iBadlz[$JJ119] ❳ ،
⎮تفاعلك اليومي ( $p_pppp[$markst] )
⎮رسائلك •  ❲ ".$msgs['msgs'][$chat_id][$from_id]." ❳ 
⎮نقودك • ❴0❵
-----------------------
*",
"parse_mode"=>"MARKDOWN",
'message_id'=>$message->message_id,
'reply_to_message_id' =>$message->message_id, 
]);
}elseif($text=="ايدي"and $JJ117 == "administrator" and $id !== $sudo2){
bot("sendPhoto",[
'chat_id'=>$chat_id,
"photo"=>$photo,
'caption'=>"*
⎮اسمك •  $name
⎮ايديك • ❲ $from_id ❳  
⎮معرفك • ❲ $from_user ❳ ،
⎮رتبتك • ❲ ادمن الكروب ❳ ،
⎮تفاعلك • ❲ $iBadlz[$JJ119] ❳ ،
⎮تفاعلك اليومي ( $p_pppp[$markst] )
⎮رسائلك •  ❲ ".$msgs['msgs'][$chat_id][$from_id]." ❳ 
⎮نقودك • ❴0❵
-----------------------
*",
"parse_mode"=>"MARKDOWN",
'message_id'=>$message->message_id,
'reply_to_message_id' =>$message->message_id, 
]);
}elseif($text=="ايدي"and $JJ117 == "member"){
bot("sendPhoto",[
'chat_id'=>$chat_id,
"photo"=>$photo,
'caption'=>"*
⎮اسمك •  $name
⎮ايديك • ❲ $from_id ❳  
⎮معرفك • ❲ $from_user ❳ ،
⎮رتبتك • ❲ عضو فقط ❳ ،
⎮تفاعلك • ❲ $iBadlz[$JJ119] ❳ ،
⎮تفاعلك اليومي ( $p_pppp[$markst] )
⎮رسائلك •  ❲ ".$msgs['msgs'][$chat_id][$from_id]." ❳ 
⎮نقودك • ❴0❵
-----------------------
*",
"parse_mode"=>"MARKDOWN",
'message_id'=>$message->message_id,
'reply_to_message_id' =>$message->message_id, 
]);
}

if($text=="ايدي"and $id == $sudo2){
    bot("sendPhoto",[
    'chat_id'=>$chat_id,
    "photo"=>$photo,
    'caption'=>"*
    ⎮اسمك •  $name
    ⎮ايديك • ❲ $from_id ❳  
    ⎮معرفك • ❲ $from_user ❳ ،
    ⎮رتبتك • ❲ مطور رتبه ثانيه❳ ،
    ⎮تفاعلك • ❲ $iBadlz[$JJ119] ❳ ،
    ⎮تفاعلك اليومي ( $p_pppp[$markst] )
    ⎮رسائلك •  ❲ ".$msgs['msgs'][$chat_id][$from_id]." ❳ 

    ⎮نقودك • ❴0❵
    -----------------------
    *",
    "parse_mode"=>"MARKDOWN",
    'message_id'=>$message->message_id,
    'reply_to_message_id' =>$message->message_id, 
    ]);
    }
if($text=="صورتي"){
$photo = "https://t.me/$user";
bot('SendPhoto',[
'chat_id'=>$chat_id,
'photo'=>$photo,
'caption'=>"
صورتك : @$from_user
",
'message_id'=>$message->message_id,
'reply_to_message_id' =>$message->message_id, 
]);
}
if($text == "msg" or $text == "رسائلي" and $id == $sudo){
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"
 ❍ مرحبا عزيزي » ❲ المطور الاساسي❍ ❳
 ❍ رسائلك » ❲ ".$msgs['msgs'][$chat_id][$from_id]." ❳
 ❍
 ",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 if($text == "msg" or $text == "رسائلي" and $you == "member"){
  bot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"
  ❍ مرحبا عزيزي » ❲ عضو مهتلف ❳
  ❍ رسائلك » ❲ ".$msgs['msgs'][$chat_id][$from_id]." ❳
  ❍
  ",
  'reply_to_message_id'=>$message->message_id, 
  ]);
  }
  if($text == "msg" or $text == "رسائلي" and $you == "administrator"){
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    ❍ مرحبا عزيزي » ❲ ادمن الجروب ❳
    ❍ رسائلك » ❲ ".$msgs['msgs'][$chat_id][$from_id]." ❳
    ❍
    ",
    'reply_to_message_id'=>$message->message_id, 
    ]);
    }
    if($text == "msg" or $text == "رسائلي" and $you == "creator" and $you !== "administrator"){
      bot('sendmessage',[
      'chat_id'=>$chat_id,
      'text'=>"
      ❍ مرحبا عزيزي » ❲ منشئ الجروب ❳
      ❍ رسائلك » ❲ ".$msgs['msgs'][$chat_id][$from_id]." ❳
      ❍
      ",
      'reply_to_message_id'=>$message->message_id, 
      ]);
      }
 ///////////teeeest//////////
 
//////////////////////////////منهاية قفل ال
//////////////////////////////منهاية قفل الفارسيه///////////////////////
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$p_pppp = $message->chat->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$message_id2 = $update->callback_query->message->message_id;
$data = $update->callback_query->data;



##### الستارت #####
if($text == 'تفعيل الالعاب'){ 
bot('sendMessage', [
'chat_id'=>$p_pppp,
'text'=>"❍ تم تفعيل الالعاب في المجموعه 
✓",
]);}


##### الاسئله #####
$هدوء = array('الكلمة ❍ [ ل س ا ق ت ب ا ] '
,'الكلمة ❍ [ ه ا ر س ي ]'
,'الكلمة ❍ [ ر و ح س ]'
,'الكلمة ❍ [ ن ف ه ق ]'
,'الكلمة ❍ [ و ن ي ا ف  ]'
,'الكلمة ❍ [  ن و ه ب ز  ]'
,'الكلمة ❍ [ ر ك و س ت ن ا ي ]'
,'الكلمة ❍ [ ا ع ل ق ا ر ]'
,'الكلمة ❍ [ و هـ ك ه ]'
,'الكلمة ❍ [ ف ي س ه ن ]'
,'الكلمة ❍ [ ج ا د ج  ه ]'
,'الكلمة ❍ [ س م ر د ه ]'
,'الكلمة ❍ [ ا ن ا و ل ]'
,'الكلمة ❍ [ ه غ ف ر ]'
,'الكلمة ❍ [ ج ه ث ل ا ]'
,'الكلمة ❍ [ خ م ب ط ]'
);
$ailnoor = array_rand($هدوء, 1);
if($text =="الاسرع" or $text =="اسرع واحد"){
bot('sendMessage',[
'chat_id'=>$p_pppp,
'text'=>$هدوء[$ailnoor],
'reply_to_message_id'=>$message->message_id
]);
}


##### الاجوبه #####
if($text == 'سحور' or $text == 'سياره'  or $text == 'استقبال'  or $text == 'قنفه'  or $text == 'ايفون'  or $text == 'بزونه' or  $text == 'مطبخ' or $text == 'كرستيانو' or $text == 'دجاجه' or $text == 'مدرسه' or $text == 'الوان' or $text == 'غرفه' or $text == 'ثلاجه' or $text == 'كهوه' or $text == 'سفينه' or $text == 'العراق'){
$JACKKKKKK = array('❍ مبروك فزت انت الاسرع
¦ لقد حصلت على { 1 }من نقاط يمكنك استبدالهن برسائل',
'❍ مبروك فزت انت الاسرع
¦ لقد حصلت على { 1 }من نقاط يمكنك استبدالهن برسائل',
' ❍ مبروك فزت انت الاسرع
¦ لقد حصلت على { 1 }من نقاط يمكنك استبدالهن برسائل',
'❍ مبروك فزت انت الاسرع
¦ لقد حصلت على { 1 }من نقاط يمكنك استبدالهن برسائل',);
$php = array_rand($JACKKKKKK, 1);
bot('sendMessage',[
'chat_id'=>$p_pppp,
'text'=>$JACKKKKKK[$php],
'reply_to_message_id'=>$message->message_id
]);
}



  
  /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  
 //////////////////////////////////////////////////////////////////////////////////////////////////////////
$rnd = rand(1,999999999999999999);
if($text=="صورتي"){
$re = bot("getUserProfilePhotos",["user_id"=>$id,"limit"=>1,"offset"=>0]);
$res = $re->result->photos[0][2]->file_id;
$pa = bot("getFile",["file_id"=>$res]);
$path = $pa->result->file_path;
file_put_contents("$rnd.jpg",file_get_contents("https://api.telegram.org/file/bot".$API_KEY."/".$path));
$uphoto = "https://hamza70788.000webhostapp.com//$rnd.jpg"; // رابط استضافتك
bot("sendPhoto",[
'chat_id'=>$chat_id,
"photo"=>$uphoto,
'caption'=>" ",
'reply_to_message_id'=>$message->message_id, 
]);
unlink("$rnd.jpg");
}
if($text == "/link" or $text == "الرابط"){
    $export = json_decode(file_get_contents("https://api.telegram.org/bot$API_KEY/exportChatInviteLink?chat_id=$chat_id"));
    $l = $export->result;
    bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"ٴ❍ » رابط مجموعة ↓
      ٴ❍ » $t
      ٴ❍ »  $l
      ❍ تم سحب الرابط بواسطة »( $name )
      ❍ معرفه »( @$user )",
      'disable_web_page_preview'=>true,
      'reply_to_message_id'=>$message->message_id,
      ]);
  
   }
$New_member = $message->new_chat_member;
$usser = $New_member->username;
$id = $New_member->id; 
$id_bot = 1798208272;
if(preg_match('/^(.*)([Bb][Oo][Tt])/',$usser) and $New_member and $id != $id_bot and  $you == "member"){
bot('kickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$id
]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"❍ آلعضـو : @$user
❍ الايدي : $id 
❍ مـمـنوع آضـآفهہ آلبوتآت 
❍ تم طـرد آلبوت والعضو الذي اضاف البوت
✘",
]);
}

if($rep && $text == "ايدي" or $text == "ايديه"){
bot('sendmessage', [
'chat_id' => $chat_id,
'text' => " 
ايديه : $re_id
معرفه : @$re_user ",
'reply_to_message_id'=>$message->message_id,

]);
}
if($text == "م2"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
❍ اهلا بك عزيزي ❍
❍ ڤي اوآمر الادمنيهۃ..
ــــــــــــــــــــــ❍ـــــــــــــــــــــ
❍ رفع مٰميز !
❍ تنزيل مٰميز !
❍ تثبيت !
ــــــــــــــــــــــ❍ـــــــــــــــــــــ
📯¦ اوامر التفعيل و التعطيٰل ★
ــــــــــــــــــــــ❍ـــــــــــــــــــــ
❍ تڤعيل – تعطيل – اطردني !
❍ تڤعيل – تعطيل – الترحيب !
❍ تڤعيل – تعطيل – جلب الصور !
❍ تڤعيل – تعطيل–  الترحيب !
ــــــــــــــــــــــ❍ـــــــــــــــــــــ
❍ اوآمر الوضَع ↑↓
ــــــــــــــــــــــ❍ـــــــــــــــــــــ
❍ ضع رابط » ثم ارسل الرابط
❍ ضع صورهۃ » ثم ارسل الصوره
❍ ضع قوانين » ثم ارسل النص
❍ ضع ترحيب » ثم ارسل النص
❍ ضع وصف » ثم ارسل النص
ــــــــــــــــــــــ❍ـــــــــــــــــــــ
❍ مسح + الامر ادناه ↑↓
ــــــــــــــــــــــ❍ـــــــــــــــــــــ
❍ مسح المحظٓورين ٭
❍ مسح المكتومين ٭
❍ مسح المَميزين ٭
❍ مسح المڨيدين ٭
❍ مسح قائمهۃ المنع ٭
❍ مسح الڨوانين ٭
❍ مسح التَرحيب ٭
❍ مسح الرابط ٭
ــــــــــــــــــــــ❍ـــــــــــــــــــــ
❍ لعرضَ القوائمَ ↑↓
ــــــــــــــــــــــ❍ـــــــــــــــــــــ
❍ قائمهۃ المنعَ «
❍ الڨوانين «
❍ الرابطہَ «
❍ المميزين «
❍ المڨيدين «
❍ المحظورين «
❍ المگتومين «
ــــــــــــــــــــــ❍ـــــــــــــــــــــ
❍ للمزيد من المعلومات راسلنا  ࿈

ــــــــــــــــــــــ❍ـــــــــــــــــــــ

❍ راسلني للاستفسار 💡↭ @PHP57 ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "م2"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"❍  اوامر الوضع للمجموعه ::

ــــــــــــــــــــــ❍ـــــــــــــــــــــ  
❍ ضع اسم :↜ لوضع اسم  
  
❍ الـرابـط :↜  لعرض الرابط  
ــــــــــــــــــــــ❍ـــــــــــــــــــــ

❍  اوامر رؤية الاعدادات ::

❍ $name : لعرض معلومات $name 
❍ معلوماتي :↜لعرض معلوماتك  
❍ الاعدادات : لعرض اعدادات المجموعه 
❍ المجموعه : لعرض معلومات المجموعه 

ــــــــــــــــــــــ❍ـــــــــــــــــــــ
❍ راسلني للاستفسار      @PHP57",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "م3"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" اوامر حماية المجموعه 
ــــــــــــــــــــــ❍ـــــــــــــــــــــ
❍قفل ~ فتح :  الصوت
❍| قفل ~ فتح :  الــفيديو
❍| قفل ~ فتح :  الـصــور 
❍| قفل ~ فتح :  الملصقات
❍| قفل ~ فتح : الروابط
❍| قفل ~ فتح : البوتات
❍| ️قفل ~ فتح : المعرفات
❍|| قفل ~ فتح :  التوجيه
❍| قفل ~ فتح : الجهات 
❍| قفل ~ فتح : الملفات
 ❍| قفل ~ فتح : الماركدون
 ❍| قفل ~ فتح : البصمات
ــــــــــــــــــــــ❍ـــــــــــــــــــــ
*❍ مرحبا بك عزيزي، ❍
ــــــــــــــــــــــ❍ـــــــــــــــــــــ
❍  
❍ رفع المدراؤ
❍ مسح المدراؤ
❍ مسح + العدد 
❍ مسح البوتات 
❍ الاعدادات 
❍ اعدادات الكتم
❍ اعدادات التقيد 
❍ اعدادات الطرد 
ــــــــــــــــــــــ❍ـــــــــــــــــــــ
❍ اوآمر الردود ↑↓
ــــــــــــــــــــــ❍ـــــــــــــــــــــ
❍ اضف رد 
❍ حذف رد 
❍ قائمه الردود 
❍ مسح الردود 
ٴ━━━━━━━━━━
❍ اوآمر الردود بالرد ↑↓
ــــــــــــــــــــــ❍ـــــــــــــــــــــ
❍ اضف رد بالرد 
❍ حذف رد بالرد
❍ قائمه ردود بالرد 
❍ مسح ردود بالرد  
ــــــــــــــــــــــ❍ـــــــــــــــــــــ
❍ اوآمر تفعيل و التعطيل ↑↓
ــــــــــــــــــــــ❍ـــــــــــــــــــــ
❍ تفعيل ‹› تعطيل » نزلني 
❍ تفعيل ‹› تعطيل » الايدي 
❍ تفعيل ‹› تعطيل » الزخرفه 
❍ تفعيل ‹› تعطيل » ردود البوت  
❍ تفعيل ‹› تعطيل » الردود  
❍ تفعيل ‹› تعطيل » الردود بالرد 
ــــــــــــــــــــــ❍ـــــــــــــــــــــ
❍ للمزيد من المعلومات راسلنا  ࿈
| راسلني للاستفسار 💡↭ @PHP57",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "م4"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"❍ اهلا بك عزيزي 
❍ ڤي اوآمر الكتم والحظَر الخہ...
ــــــــــــــــــــــ❍ـــــــــــــــــــــ
❍ كتم » { ايدي › معرف › رد }
❍ الغاء الكتم » { ايدي › معرف › رد }
❍ تقيد » { ايدي › معرف › رد }
❍ الغاء تقيد » { ايدي › معرف › رد }
❍ حظر » { ايدي › معرف › رد }
❍ الغاء الحظر » { ايدي › معرف › رد }
❍ طرد » { ايدي › معرف › رد }
❍ رفع القيود » { ايدي › معرف › رد }
ــــــــــــــــــــــ❍ـــــــــــــــــــــ

❍ راسلني للاستفسار 💡↭ @PHP57",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "م4"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"*❍ مرحبا بك عزيزي، 
❍ في اوامــر $name الآسٰاسي .
ٴ━━━━━━━━━━
❍ ارسل الاوامَر فيہَ الخاص
❍ حظر + ايدي الجروب
❍ الغاء الحظر + ايدي الجروب
ٴ━━━━━━━━━━
❍ رفع مطور – تنزيل مطور   
❍ المطَورين – مسح $nameين
❍ رفع مميز عام – تنزيل مميز عام
❍ المميزين عام – مسح المميزين عام
❍ حظر عام – الغاء العام 
❍ قائمهہَ العام – مسح قائمه العام
ٴ━━━━━━━━━━
❍ ردود $name - مسح ردود $name
❍ تفعيل ردود $name
❍ تعطيل ردود $name 
❍ اضف رد عام - مسح رد عام 
❍ ردود $name بالرد 
❍ مسح ردود $name بالرد
❍ تفعيل ردود $name بالرد
❍ تعطيل ردود $name بالرد
❍ اضف رد عام بالرد 
❍ حذف رد عام بالرد 
ٴ━━━━━━━━━━
❍ وضع اسم للبوت 
❍ اذاعه + ايدي لكروب 
❍ اذاعهہَ!
❍ اذاعهہَ خاص!
❍ اذاعهہَ عام!
❍ اذاعهہَ بالتوجيه!
❍ اذاعهہَ خاص بالتوجيهہَ!
❍ اذاعهہَ عام بالتوجيهہَ!

❍ تفعيل : لتفعيل البوت 
❍ اذاعه : لنشر كلمه لكل عدد الجروب
❍ استخدم /admin في خاص البوت فقط : لعرض كيبود الخاص بك 💯 
❍ تحديث: لتحديث ملفات البوت
ــــــــــــــــــــــ❍ـــــــــــــــــــــ

❍ راسلني للاستفسار 💡↭ @PHP57,",
'reply_to_message_id'=>$message->message_id, 
]);
}


if($text == '$name' or $text == "مطور"){
bot('sendContact',[
'chat_id'=>$chat_id,
'phone_number'=>"+9647810611817",
'first_name'=>"ستورم",
'last_name'=>"MS",
'reply_to_message_id'=>$message->message_id, 
]);
}
////////الرتب///////////
if($text=="رتبتي" and $you == "creator"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"
❍ رتبة البوت » ❲ منشئ المجموعه❍ ❳
❍ رتبتة الجروب » ❲ مطور اساسي ❳
❍
",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="رتبتي" and  $you == "administrator"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"
❍ رتبة البوت » ❲ ادمن ❍ ❳
❍ رتبتة الجروب » ❲ ادمن ❳
❍",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="رتبتي" and  $you == "member"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"
❍ رتبة البوت » ❲ عضو ❍ ❳
❍ رتبتة الجروب  » ❲ عضو ❳
❍",
'reply_to_message_id'=>$message->message_id, 
]);
}
//////////الرسائل الجانبيه/////////
if($text=="رسائلي" and $id == $sudo ){
  bot('sendmessage',[
  'chat_id'=>$chat_id, 
  'text'=>"
  ❍ مرحبا عزيزي » ❲ المطور الاساسي❍ ❳
  ❍ رسائلك » ❲ ".$msgs['msgs'][$chat_id][$from_id]." ❳
  ❍
  ",
  'reply_to_message_id'=>$message->message_id, 
  ]);
  }
/////////////////////////ممحيبس/////////////////
if($text=="محيبس"){
bot('sendmessage',[
  'chat_id'=>$chat_id, 
  'text'=>"
  ➀        ➁       ➂
↓      ↓     ↓     
👊 ‹› 👊 ‹› 👊
 ➃         ➃      ➅
↓      ↓     ↓
👊 ‹› 👊 ‹› 👊 
  💥
  ❍ اختر لأستخراج المحيبس الايد التي تحمل المحيبس 
❍ الفائز يحصل على { 3 } من النقاط
  ",
  'reply_to_message_id'=>$message->message_id, 
  ]);
  }
  if($text=="بات"){
 bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"
➀        ➁       ➂
↓      ↓     ↓
👊 ‹› 👊 ‹› 👊
➃         ➃      ➅
↓      ↓     ↓
👊 ‹› 👊 ‹› 👊 
💥
❍ اختر لأستخراج المحيبس الايد التي تحمل المحيبس 
❍ الفائز يحصل على { 3 } من النقاط
",
'reply_to_message_id'=>$message->message_id, 
]);
 }
if($text=="1"){
 bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"
❍ للاسف لقد خسرت 
❍ المحيبس بل ايد رقم { 2 }
❍ حاول مره اخرى للعثور على المحيبس
",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="2"){
  bot('sendmessage',[
 'chat_id'=>$chat_id, 
 'text'=>"
 ❍ للاسف لقد خسرت 
 ❍ المحيبس بل ايد رقم { 5 }
 ❍ حاول مره اخرى للعثور على المحيبس
 ",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 if($text=="5"){
  bot('sendmessage',[
 'chat_id'=>$chat_id, 
 'text'=>"
 ❍ للاسف لقد خسرت 
 ❍ المحيبس بل ايد رقم { 3 }
 ❍ حاول مره اخرى للعثور على المحيبس
 ",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 if($text=="3"){
  bot('sendmessage',[
 'chat_id'=>$chat_id, 
 'text'=>"
 ❍ للاسف لقد خسرت 
 ❍ المحيبس بل ايد رقم { 1 }
 ❍ حاول مره اخرى للعثور على المحيبس
 ",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 if($text=="4"){
  bot('sendmessage',[
 'chat_id'=>$chat_id, 
 'text'=>"
 ❍ مبروك فزت وطلعت المحيبس بل ايد رقم { 4 }
 ❍ لقد حصلت على { 3 }من نقاط يمكنك استبدالهن برسائل
 ",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 if($text=="6"){
  bot('sendmessage',[
 'chat_id'=>$chat_id, 
 'text'=>"
 ❍ مبروك فزت وطلعت المحيبس بل ايد رقم { 6 }
 ❍ لقد حصلت على { 3 }من نقاط يمكنك استبدالهن برسائل
 ",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 if($text=="طك 5"){
  bot('sendmessage',[
 'chat_id'=>$chat_id, 
 'text'=>"
 ❍ هاي؟
 ",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 if($text=="اي هاي"){
  bot('sendmessage',[
 'chat_id'=>$chat_id, 
 'text'=>"
 🖐🏻 فارغه ويرجع بسم الدوله
 ",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
//////////////end ///////////
if($text=="انجب" and $you == "creator"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"حاظر تاج راسي انجبيت 😇
",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="انجب" and $you == "administrator"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"فوك ما مصعدك ادمن و تكلي انجب 😏 ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="انجب" and $you == "member"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"انجب انته لا تندفر 😒",
'reply_to_message_id'=>$message->message_id, 
]);
}
$me = $message->reply_to_message; 
$mem = $me->message_id;
$MARKS = explode('كله',$text);
if($MARKS){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$MARKS[1],
'reply_to_message_id'=>$mem,
]);
}
$MARKS = explode('كول',$text);
if($MARKS){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$MARKS[1],
]);
}
$u = explode("\n",file_get_contents("memb.txt"));
$m = count($u)-1;
$modxe = file_get_contents("usr.txt");
if ($update && !in_array($chat_id, $u)) {
    file_put_contents("memb.txt", $chat_id."\n",FILE_APPEND);
  }
if($text == '/admin' and $for == $sudo){ 
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>'❍ آهہ‏‏لآ عزيزي آلمـطـور 
❍ آنتهہ‏‏ آلمـطـور آلآسـآسـي هہ‏‏نآ 
...

❍ تسـتطـيع‏‏ آلتحگم بگل آلآوآمـر آلمـمـوجودهہ‏‏ بآلگيبورد
❍ فقط آضـغط ع آلآمـر آلذي تريد تنفيذهہ‏‏', 
'reply_markup'=>json_encode([ 
'keyboard'=>[ 
[ 
['text'=>'⎮ ايديك •'] ,['text'=>'⎮ضع كليشه المطور'] ,['text'=>'⎮تحديث السورس'] 
], 
[
['text'=>'❍ الملفات'] ,['text'=>'⎮ اذاعه •'] ,['text'=>'❍ اذاعه خاص']
], 
[ 
['text'=>'❍ فحص المجموعات القليله •'] ,  ['text'=>'❍ عدد المجموعات •'] ,['text'=>'❍ تغير اسم البوت •'] 
], 
[ 
], 
[ 
['text'=>'❍ اذاعه عام'] ,['text'=>'❍ اذاعه عام توجيه'] ,['text'=>'❍ اذاعه خاص توجيه'] 
], 
[ 
], 
[ 
['text'=>'❍ الاحصائيات'] ,['text'=>'❍ المحظورين عام •'] ,['text'=>'❍ المكتومين عام •'] 
], 
[ 
['text'=>'❍  المساعدة •'] ,  ['text'=>'❍ روابط المجموعات •'] 
], 
[ 
['text'=>'❍  $name •'] ,['text'=>'❍ ايديك •'] ,['text'=>'❍ قناة $name •']

], 
[ 
],  
] 
]) 
]); 
}

$update     = json_decode(file_get_contents('php://input'));
$message = $update->message;
$message_id = $update->message->message_id;
$text           = $message->text;
$chat_id     = $message->chat->id;
$user          = $update->message->from->username;
$from_id     = $message->from->id;
$from_user = $message->from->username;
mkdir("Dev_JaCk");

$message_id = $message->message_id;
$gp_get = file_get_contents("Dev_JaCk/groups.txt");
$groups = explode("\n", $gp_get);
$JACKKKK = file_get_contents("Dev_JaCk/iBadlz.txt");
$pirvate = explode("\n",file_get_contents("Dev_JaCk/pirvate.txt"));
$forward = $update->message->forward_from;
if($message and !in_array($chat_id, $groups)){
file_put_contents("Dev_JaCk/groups.txt", "$chat_id\n",FILE_APPEND);
bot("sendmessage",[
'chat_id'=>$chat_id,
'text'=>" ",
]);
}elseif($message and in_array($chat_id, $groups)) {
bot("sendmessage",[
'chat_id'=>$chat_id,
'text'=>" ",
]);
}

if($text == "❍ اذاعه عام توجيه" || $text == "اذاعه عام بالتوجيه" || $text == "اذاعه للكل بالتوجيه" and $from_id == $sudo){
    file_put_contents("Dev_JaCk/iBadlz.txt","iBadlz");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    ❍ اهلا عزيزي الـمطور ، 
    ❍ قم بارسال التوجيه لعمل اذاعه",
    'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id
  ]);
  }
if($message and $JACKKKK == "iBadlz" and $from_id == $sudo ){
  for($i=0;$i<count($groups);$i++){
bot('ForwardMessage',[
 'chat_id'=>$groups[$i],
 'from_chat_id'=>$chat_id,
 'message_id'=>$message_id,
 ]);
} 
$JACKKK = count($pirvate)-1;
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"
❍ اهلا عزيزي الـمطور الاساسي
❍ تم توجيه رسالتك الى $JACKKK عضو ، وجميع مجموعات البوت ",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id
   ]);
 unlink("Dev_JaCk/iBadlz.txt");
} 







if($message and !in_array($from_id, $pirvate)){
file_put_contents("Dev_JaCk/pirvate.txt", "$from_id\n",FILE_APPEND);
bot("sendmessage",[
'chat_id'=>$chat_id,
'text'=>" ",
]);
}elseif($message and in_array($from_id, $pirvate)) {
bot("sendmessage",[
'chat_id'=>$chat_id,
'text'=>" ",
]);
}



if($text == "❍ اذاعه خاص" and $from_id == $sudo){
    file_put_contents("Dev_JaCk/iBadlz.txt","JJ119");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
❍ اهلا عزيزي الـمطور ، قم بأرسال رسالتك
❍ ملاحظةهہ : يمكنك استعمال الماركداون ،! *",
'parse_mode'=>"MarkDown",
    'reply_to_message_id'=>$message->message_id
  ]);
  }
if($message and $JACKKKK == "JJ119" and $from_id == $sudo ){
    for ($i=0; $i<count($pirvate); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$pirvate[$i],
          'text'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
 file_put_contents("Dev_JaCk/iBadlz.txt","MMoHaMMeD");
} 
$JACKKK = count($pirvate)-1;
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"
❍ اهلا عزيزي الـمطور ، 
❍ تم ارسال رسالتك الى $JACKKK عضو ",
    'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id
          ]);
}
if ($text == "❍ اذاعه عام" || $text == "اذاعه عام" || $text == "اذاعه" and $from_id == $sudo){
    file_put_contents("Dev_JaCk/iBadlz.txt","JACKKKKKK");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
❍ اهلا عزيزي الـمطور الاساسي قم بأرسال رسالتك
❍ ملاحظةهہ : يمكنك استعمال الماركداون ",
'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id
  ]);
  }
if($message and $JACKKKK == "JACKKKKKK" and $from_id == $sudo ){
    for ($i=0; $i<count($groups); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$groups[$i],
          'text'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,

]);
 unlink("Dev_JaCk/iBadlz.txt");
} 
$JACKKKKK = count($private)-1;
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"
❍ اهلا عزيزي الـمطور الاساسي
❍ تم ارسال رسالتك الى $JACKKKKK عضو وجميع مجموعات البوت ،ء*",
 'parse_mode'=>"MarkDown",
          'reply_to_message_id'=>$message->message_id
          ]);
}

if($text == "❍ اذاعه خاص توجيه" and $from_id == $sudo){
    file_put_contents("Dev_JaCk/iBadlz.txt","od_1j");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    ❍ مرحبا عزيزي المطور الاساسي
❍ قم بارسال رسالتك للقيام بلاذاعه",
    'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id
  ]);
  }
if($message and $JACKKKK == "od_1j" and $from_id == $sudo ){
for($i=0;$i<count($pirvate);$i++){
bot('forwardMessage',[
 'chat_id'=>$pirvate[$i],
 'from_chat_id'=>$chat_id,
 'message_id'=>$message->message_id,
 ]);
} 
$JACKKK = count($pirvate)-1;
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"
❍ اهلا عزيزي الـمطور الاساسي
❍ تم توجيه رسالتك الى $JACKKK  عضو",
'parse_mode'=>"MARKDOWN",
          'reply_to_message_id'=>$message->message_id
   ]);
 unlink("Dev_JaCk/iBadlz.txt");
}
/////////////نهاية الاذاعه///////////////
$sudo2 = file_get_contents("data/sudo.txt");
if($from_id == $sudo){
if($text=="⎮ضع كليشه المطور"){
     file_put_contents("data//setengs.txt", "set");
     bot('sendMessage',[
         'chat_id'=>$chat_id,
         'text'=>"❍ارسل الكليشه",
         'reply_to_message_id'=>$message->message_id
     ]);
 }
 if($text !== "ضع كليشه المطور" && $text == "$text" and file_exists("data/setengs.txt")){
 file_put_contents("data/sudo.txt","$text");
     bot('sendMessage',[
         'chat_id'=>$chat_id,
         'text'=>"❍تم التغير الى :- $text",
         'reply_to_message_id'=>$message->message_id
     ]);
     unlink("data/setengs.txt");
 }
}

if($text == "المطور" or $text == 'مطور'){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>"$sudo2",
'reply_to_message_id'=>$message->message_id
]);
}

if($text == "$namebots"){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$jasmea[$reply_as],
'reply_to_message_id'=>$message->message_id
]);
}

///////sudo المطور joker///////////

$left = explode("\n", $gp_left);
$gp_get = file_get_contents("data/groups.txt");
$groups = explode("\n", $gp_get);
if($text == "❍ الاحصائيات" and $from_id == $sudo){
$m = count($left)-1;
$c = count($groups)-1;
$r = $c - $m;
echo"$r";
$memocount = count($memopv) -1;
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>"
❍ عدد الكلي للمجموعات « *$c* »
❍ عدد المجموعات الغير مفعله « *$m* »
❍ عدد المجموعات المدفوعه « *0* »
❍ عدد المجموعات الصحيح « *$r* »
❍عدد اعضاء الخاص :- $memocount",
'reply_to_message_id'=>$message->message_id
]);
}

///////////الاحصائيات joker//////////
if($text == "عدد المجموعات"){
  $c = count($groups);
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
   ❍ عدد المجموعات المفعله ↫ ❪ $c ❫
    ❍ عدد المشتركين ↫ 
    ✓   ➼"
    ]);
 }
$id = $message->from->id;
if($text == "❍ ايديك •"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" $id ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "❍ اسمك •"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" $name ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "❍ مطور الملف •"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"📬¦   مـطـور الملف : @PHP57 ☑️ ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "السورس"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ـــــــــــــــــــــ❍ـــــــــــــــــــــ
❍ 𝑆𝑂𝑈𝑅𝐶𝐸 𝐵𝐿𝐴𝐶𝐾 ❍
ــــــــــــــــــــــ❍ـــــــــــــــــــــ
𝐂𝐇¹ ➢ : @BLACK_TEAM_4
𝐂𝐇² ➢ : @JACK_BOTS
ــــــــــــــــــــــ❍ـــــــــــــــــــــ
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "💢¦ معرفك •"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" @$user ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "📬¦  $name •" and $for == $sudo){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" ❍ مـطـور البوت : @$user  ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "❍ المشتركين •" and $from_id == $sudo){
$m = count($u)-1;
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> "❍ عدد مشتركين البوت :- { $m }" ,
'reply_to_message_id'=>$message->message_id,
]);
}

if($text == "❍ قناة $name •"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"❍    قناة مـطـور الملف : @BLACK_TEAM_4 
  ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "❍  المساعدة •"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"❍ للمساعدة او اي أراء او افكار تواصل مع مطور الملف @PHP57 √",
'reply_to_message_id'=>$message->message_id, 
]);
}
$export = json_decode(file_get_contents("https://api.telegram.org/bot$API_KEY/exportChatInviteLink?chat_id=$chat_id"));
$l = $export->result;
if($you == "creator" or $you == "administrator" or $from_id == $sudo){
if ($text == "تفعيل" or $text == '/add' and  $you == "administrator") {
$result2 = $json2->result;
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>" ",
'reply_to_message_id'=>$message->message_id,
]);
bot('sendMessage',[
'chat_id'=>$sudo,
'text'=>"
❍ قام احد المدراء بتفعيل البوت
❍  اسم العضو ( $name )
❍  $gp_link رابط المجموعه
❍اســم المجمــوعه【  $gp_name  】
❍ ايدي المجموعه » $chat_id
❍ عدد الاعضاء » 【  $result2  】 عضو 
❍ بواسطة » $name
❍ معرفه » @$user
❍┇ ايــدي المجمــوعه » $chat_id ❍

",
]);
}
}
if($text == "ايديي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" $id ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "معرفي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" @$user ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "اسمي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" $name ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "بوت"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"أسمي بلاك",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "😔"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ليش الحلو ضايج ❤️🍃",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "😳"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ها بس لا شفت خالتك الشكره 😳😹🕷",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "😭"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"لتبجي حياتي 😭😭",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "😡"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ابرد  🚒",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "😍"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"يَمـه̷̐ إآلُحــ❤ــب يَمـه̷̐ ❤️😍",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "😉"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"😻🙈",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "😋"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"طبب لسانك جوه عيب 😌",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "☹️"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"لضوج حبيبي 😢❤️🍃",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "هلو"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"هلووات 😊🌹",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "مح"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"محات حياتي🙈❤",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "تف"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"عيب ابني/بتي اتفل/ي اكبر منها شوية 😌😹",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "تخليني"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"اخليك بزاويه 380 درجه وانته تعرف الباقي 🐸",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "اكرهك"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ديله شلون اطيق خلقتك اني😾🖖🏿🕷",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "باي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"بايات حياتي 😍 $name",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "زاحف"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"زاحف عله خالتك الشكره 🌝",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "واو"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"قميل 🌝🌿",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "شكو ماكو"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"غيرك/ج بل كلب ماكو يبعد كلبي😍❤️️",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "شكو"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"كلشي وكلاشي🐸تگـول عبالك احنـة بالشورجـة🌝",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "معزوفه"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"طرطاا طرطاا طرطاا 😂👌",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "زاحفه"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"لو زاحفتلك جان ماكلت زاحفه 🌝🌸",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "حفلش"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"افلش راسك 🤓",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "ضوجه"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"شي اكيد الكبل ماكو 😂 لو بعدك/ج مازاحف/ة 🙊😋",
'reply_to_message_id'=>$message->message_id, 
]);
}
$message_id = $update->message->message_id;
if($text == "اقرالي دعاء"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"اللهم عذب المدرسين 😢 منهم الاحياء والاموات 😭🔥 اللهم عذب ام الانكليزي 😭💔 وكهربها بلتيار الرئيسي 😇 اللهم عذب ام الرياضيات وحولها الى غساله بطانيات 🙊 اللهم عذب ام الاسلاميه واجعلها بائعة الشاميه 😭🍃 اللهم عذب ام العربي وحولها الى بائعه البلبي اللهم عذب ام الجغرافيه واجعلها كلدجاجه الحافية اللهم عذب ام التاريخ وزحلقها بقشره من البطيخ وارسلها الى المريخ اللهم عذب ام الاحياء واجعلها كل مومياء اللهم عذب المعاون اقتله بلمدرسه بهاون 😂😂😂",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == 'ارموف'){
$rand = array('سويت هواي شغلات سخيفه بحياتي بس عمري مصحت على واحد وكلتله انجب 😑','نعم حبي 😎','اشتعلو اهل ستورم شتريد 😠','لك فداك ستورم حبيبي انت اموووح 💋','بووووووووو 👻 ها ها فزيت شفتك شفتك لا تحلف 😂','هياتني اجيت 🌚❤️','راجع المكتب حبيبي عبالك ستورم سهل تحجي ويا 😒','باقي ويتمدد 😎','لك دبدل ملابسي اطلع برااااا 😵😡 ناس متستحي','دا اشرب جاي تعال غير وكت 😌','هوه غير يسكت عاد ها شتريد 😷','انت مو اجيت البارحه تغلط عليه ✋🏿😒');
$ra = array_rand($rand ,1);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$rand[$ra],
'reply_to_message_id'=>$message_id
]);
}

if($re and $re_id != $bot and $re_id != $sudo and $text=="تقييد"){
    bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"❍ العضو » @$re_user
❍الايدي » ( $re_id )
❍ تم تقييده ✔️
",
  'reply_to_message_id'=>$mid
      ]);
    bot('restrictChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$re_id
      ]);
  }

mkdir(id/$chat_id);
if($text == "فتح الايدي"){
file_put_contents("id/$chat_id/id.txt", "$id");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"<b>تم فتح الايدي بنجاح </b>",
    'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"html",
]);
}
if($text == "قفل الايدي"){
unlink("id/$chat_id/id.txt");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"<b>تم قفل الايدي بنجاح </b>",
    'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"html",
]);
}
if (preg_match('/(حظر عام)(.*)/', $text) and $from_id == $sudo) {
  $text = str_replace('حظر عام', '', $text);
  $bans[] = trim($text,'@');
  file_put_contents('bans.json', $text);
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>'~> '.$text."\n - تم حظره عام ،",
    'reply_to_message_id'=>$message->message_id
  ]);
}
if ($message and in_array($message->from->username, $bans) or in_array($message->from->id, $bans)) {
  bot('kickchatmember',[
    'chat_id'=>$chat_id,
    'user_id'=>$message->from->id
  ]);
}


$id = $message->from->id;
$iBadlz = $update->message->reply_to_message->from->id;
$TlllllT = $update->message->reply_to_message->from->username;
if($text =="رفع ادمن" and $id == $sudo){
bot('promoteChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$iBadlz,
'can_delete_messages'=>true,
'can_invite_users'=>true,
'can_restrict_members'=>true,
'can_pin_messages'=>true,
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
❍العضو » @$TlllllT
❍ الايدي » ( $iBadlz )
❍ تم رفعه ادمن بالمجموعه ،!
",
'reply_to_message_id'=>$message->message_id,
]);
}elseif($text =="رفع ادمن" and $id != $sudo){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=> "
❍ انت لست مدير او منشئ 
❍ لايمكن اتمام الامر
",
'reply_to_message_id'=>$message->message_id,
]);
}
if($text =="الغاء تقيد" || $text =="الغاء التقيد" || $text =="الغاء التقييد" || $text =="الغاء تقييد" and $id == $sudo){
bot('promoteChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$iBadlz,
'can_send_messages'=>true,
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
❍العضو » @$TlllllT
❍ الايدي » ( $iBadlz )
❍ تم الغاء تقيده من المجموعه ،!
",
'reply_to_message_id'=>$message->message_id,
]);
}elseif($text =="الغاء تقيد" || $text =="الغاء التقيد" || $text =="الغاء التقييد" || $text =="الغاء تقييد" and $id != $sudo){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
❍ انت لست مدير او منشئ او ادمن
❍ لايمكن اتمام الامر
",
'reply_to_message_id'=>$message->message_id,
]);
}
if( $text=="تقيد" || $text == "تقييد" and $id == $sudo){
    bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"
❍⎮اسمك » @$TlllllT
❍ الايدي » ( $iBadlz )
❍ تم تقيده من المجموعه ،!
",
'reply_to_message_id'=>$message->message_id,
      ]);
    bot('restrictChatMember',[
        'chat_id'=>$chat_id,
        'user_id'=>$iBadlz
      ]);
  }elseif( $text=="تقيد" || $text == "تقييد" and $id != $sudo){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
❍ انت لست مدير او منشئ او ادمن
❍ لايمكن اتمام الامر
",
'reply_to_message_id'=>$message->message_id,
]);
}
  

      //////////////////////////////////////////////////////// الاعاااااااب/////////////////
      $EN = explode("EN", $text);
      if($EN[1]){
      $EN = str_replace('q', '•🇶', $EN);
      $EN = str_replace('w', '•🇼', $EN);
      $EN = str_replace('e', '•🇪', $EN);
      $EN = str_replace('r', '•🇷', $EN);
      $EN = str_replace('t', '•🇹', $EN);
      $EN = str_replace('y', '•🇾', $EN);
      $EN = str_replace('u', '•🇻', $EN);
      $EN = str_replace('i', '•🇮', $EN);
      $EN = str_replace('o', '•🇴', $EN);
      $EN = str_replace('p', '•🇵', $EN);
      $EN = str_replace('a', '•🇦', $EN);
      $EN = str_replace('s', '•🇸', $EN);
      $EN = str_replace('d', '•🇩', $EN);
      $EN = str_replace('f', '•🇫', $EN);
      $EN = str_replace('g', '•🇬', $EN);
      $EN = str_replace('h', '•🇭', $EN);
      $EN = str_replace('j', '•🇯', $EN);
      $EN = str_replace('k', '•🇰', $EN);
      $EN = str_replace('l', '•🇱', $EN);
      $EN = str_replace('z', '•🇿', $EN);
      $EN = str_replace('x', '•🇽', $EN);
      $EN = str_replace('c', '•🇨', $EN);
      $EN = str_replace('v', '•🇺', $EN);
      $EN = str_replace('b', '•🇧', $EN);
      $EN = str_replace('n', '•🇳', $EN);
      $EN = str_replace('m', '•🇲', $EN);
      bot('sendmessage',[
      'chat_id'=>$chat_id,
      'text'=>$EN[1],
       ]);
       }
       $EN0 = explode("EN", $text);
       if($EN0[1]){
      $EN0 = str_replace('q', 'Ⴓ' , $EN0);
        $EN0 = str_replace('w', 'ᗯ' , $EN0);
      $EN0 = str_replace('e', 'ᕮ' , $EN0);
        $EN0 = str_replace('r', 'ᖇ' , $EN0);
      $EN0 = str_replace('t', 'ͳ' , $EN0);
        $EN0 = str_replace('y', 'ϒ' , $EN0);
      $EN0 = str_replace('u', 'ᘮ' , $EN0);
        $EN0 = str_replace('i', 'ᓰ' , $EN0);
      $EN0 = str_replace('o', '〇' , $EN0);
        $EN0 = str_replace('p', 'ᖘ' , $EN0);
      $EN0 = str_replace('a', 'ᗩ' , $EN0);
        $EN0 = str_replace('s', 'ᔕ' , $EN0);
      $EN0 = str_replace('d', 'ᗪ' , $EN0);
        $EN0 = str_replace('f', 'Բ' , $EN0);
      $EN0 = str_replace('g', 'ᘐ' , $EN0);
        $EN0 = str_replace('h', 'ᕼ' , $EN0);
      $EN0 = str_replace('j', 'ᒎ' , $EN0);
        $EN0 = str_replace('k', 'Ḱ' , $EN0);
      $EN0 = str_replace('l', 'ᒪ' , $EN0);
        $EN0 = str_replace('z', 'Ꙁ' , $EN0);
      $EN0 = str_replace('x', 'Ꮖ' , $EN0);
        $EN0 = str_replace('c', 'ᑕ' , $EN0);
      $EN0 = str_replace('v', 'ᐯ' , $EN0);
        $EN0 = str_replace('b', 'ᙖ' , $EN0);
        $EN0 = str_replace('n', 'ᘉ' , $EN0);
      $EN0 = str_replace('m', 'ᙢ' , $EN0);
      bot('sendmessage',[
       'chat_id'=>$chat_id,
       'text'=>$y[1],
       ]);
       }
       $EN1 = explode("EN", $text);
       if($EN1[1]){
      $EN1 = str_replace('q', 'q' , $EN1);
        $EN1 = str_replace('w', 'ω' , $EN1);
      $EN1 = str_replace('e', 'ε' , $EN1);
        $EN1 = str_replace('r', 'я' , $EN1);
      $EN1 = str_replace('t', 'т' , $EN1);
        $EN1 = str_replace('y', 'ү' , $EN1);
      $EN1 = str_replace('u', 'υ' , $EN1);
        $EN1 = str_replace('i', 'ι' , $EN1);
      $EN1 = str_replace('o', 'σ' , $EN1);
        $EN1 = str_replace('p', 'ρ' , $EN1);
      $EN1 = str_replace('a', 'α' , $EN1);
        $EN1 = str_replace('s', 's' , $EN1);
      $EN1 = str_replace('d', '∂' , $EN1);
        $EN1 = str_replace('f', 'ғ' , $EN1);
      $EN1 = str_replace('g', 'g' , $EN1);
        $EN1 = str_replace('h', 'н' , $EN1);
      $EN1 = str_replace('j', 'נ' , $EN1);
        $EN1 = str_replace('k', 'к' , $EN1);
      $EN1 = str_replace('l', 'ℓ' , $EN1);
        $EN1 = str_replace('z', 'z' , $EN1);
      $EN1 = str_replace('x', 'x' , $EN1);
        $EN1 = str_replace('c', 'c' , $EN1);
      $EN1 = str_replace('v', 'v' , $EN1);
        $EN1 = str_replace('b', 'в' , $EN1);
        $EN1 = str_replace('n', 'η' , $EN1);
      $EN1 = str_replace('m', 'м' , $EN1);
      bot('sendmessage',[
       'chat_id'=>$chat_id,
       'text'=>$EN1[1],
       
       ]);
       }
       $EN2 = explode("EN", $text);
       if($EN2[1]){
      $EN2 = str_replace('q', 'ᵠ' , $EN2);
        $EN2 = str_replace('w', 'ʷ' , $EN2);
      $EN2 = str_replace('e', 'ᵉ' , $EN2);
        $EN2 = str_replace('r', 'ʳ' , $EN2);
      $EN2 = str_replace('t', 'ᵗ' , $EN2);
        $EN2 = str_replace('y', 'ʸ' , $EN2);
      $EN2 = str_replace('u', 'ᵘ' , $EN2);
        $EN2 = str_replace('i', 'ᶤ' , $EN2);
      $EN2 = str_replace('o', 'ᵒ' , $EN2);
        $EN2 = str_replace('p', 'ᵖ' , $EN2);
      $EN2 = str_replace('a', 'ᵃ' , $EN2);
        $EN2 = str_replace('s', 'ˢ' , $EN2);
      $EN2 = str_replace('d', 'ᵈ' , $EN2);
        $EN2 = str_replace('f', 'ᶠ' , $EN2);
      $EN2 = str_replace('g', 'ᵍ' , $EN2);
        $EN2 = str_replace('h', 'ʰ' , $EN2);
      $EN2 = str_replace('j', 'ʲ' , $EN2);
        $EN2 = str_replace('k', 'ᵏ' , $EN2);
      $EN2 = str_replace('l', 'ˡ' , $EN2);
        $EN2 = str_replace('z', 'ᶻ' , $EN2);
      $EN2 = str_replace('x', 'ˣ' , $EN2);
        $EN2 = str_replace('c', 'ᶜ' , $EN2);
      $EN2 = str_replace('v', 'ᵛ' , $EN2);
        $EN2 = str_replace('b', 'ᵇ' , $EN2);
        $EN2 = str_replace('n', 'ᶰ' , $EN2);
      $EN2 = str_replace('m', 'ᵐ' , $EN2);
      bot('sendmessage',[
       'chat_id'=>$chat_id,
       'text'=>$EN2[1],
       
       ]);
       }
   $EN3 = explode("EN", $text);
       if($EN3[1]){
      $EN3 = str_replace('q', 'Θ' , $EN3);
        $EN3 = str_replace('w', 'ẁ' , $EN3);
      $EN3 = str_replace('e', 'ë' , $EN3);
        $EN3 = str_replace('r', 'я' , $EN3);
      $EN3 = str_replace('t', 'ť' , $EN3);
        $EN3 = str_replace('y', 'y' , $EN3);
      $EN3 = str_replace('u', 'ע' , $EN3);
        $EN3 = str_replace('i', 'į' , $EN3);
      $EN3 = str_replace('o', 'ð' , $EN3);
        $EN3 = str_replace('p', 'ρ' , $EN3);
      $EN3 = str_replace('a', 'à' , $EN3);
        $EN3 = str_replace('s', 'ś' , $EN3);
      $EN3 = str_replace('d', 'ď' , $EN3);
        $EN3 = str_replace('f', '∫' , $EN3);
      $EN3 = str_replace('g', 'ĝ' , $EN3);
        $EN3 = str_replace('h', 'ŋ' , $EN3);
      $EN3 = str_replace('j', 'Ј' , $EN3);
        $EN3 = str_replace('k', 'қ' , $EN3);
      $EN3 = str_replace('l', 'Ŀ' , $EN3);
        $EN3 = str_replace('z', 'ź' , $EN3);
      $EN3 = str_replace('x', 'א' , $EN3);
        $EN3 = str_replace('c', 'ć' , $EN3);
      $EN3 = str_replace('v', 'V' , $EN3);
        $EN3 = str_replace('b', 'Ђ' , $EN3);
        $EN3 = str_replace('n', 'ŋ' , $EN3);
      $EN3 = str_replace('m', 'm' , $EN3);
      bot('sendmessage',[
       'chat_id'=>$chat_id,
       'text'=>$EN3[1],
       
       ]);
       }
   $EN3 = explode("EN", $text);
       if($EN3[1]){
      $EN3 = str_replace('q', 'Ҩ' , $EN3);
        $EN3 = str_replace('w', 'Щ' , $EN3);
      $EN3 = str_replace('e', 'Є' , $EN3);
        $EN3 = str_replace('r', 'R' , $EN3);
      $EN3 = str_replace('t', 'ƚ' , $EN3);
        $EN3 = str_replace('y', '￥' , $EN3);
      $EN3 = str_replace('u', 'Ц' , $EN3);
        $EN3 = str_replace('i', 'Ī' , $EN3);
      $EN3 = str_replace('o', 'Ø' , $EN3);
        $EN3 = str_replace('p', 'P' , $EN3);
      $EN3 = str_replace('a', 'Â' , $EN3);
        $EN3 = str_replace('s', '$' , $EN3);
      $EN3 = str_replace('d', 'Ð' , $EN3);
        $EN3 = str_replace('f', 'Ŧ' , $EN3);
      $EN3 = str_replace('g', 'Ǥ' , $EN3);
        $EN3 = str_replace('h', 'Ħ' , $EN3);
      $EN3 = str_replace('j', 'ʖ' , $EN3);
        $EN3 = str_replace('k', 'Қ' , $EN3);
      $EN3 = str_replace('l', 'Ŀ' , $EN3);
        $EN3 = str_replace('z', 'Ẕ' , $EN3);
      $EN3 = str_replace('x', 'X' , $EN3);
        $EN3 = str_replace('c', 'Ĉ' , $EN3);
      $EN3 = str_replace('v', 'V' , $EN3);
        $EN3 = str_replace('b', 'ß' , $EN3);
        $EN3 = str_replace('n', 'И' , $EN3);
      $EN3 = str_replace('m', 'ⴅ' , $EN3);
      bot('sendmessage',[
       'chat_id'=>$chat_id,
       'text'=>$EN3[1],
       
       ]);
       }
    $EN5 = explode("EN", $text);
       if($EN5[1]){
      $EN5 = str_replace('q', 'Ҩ' , $EN5);
        $EN5 = str_replace('w', 'Ɯ' , $EN5);
      $EN5 = str_replace('e', 'Ɛ' , $EN5);
        $EN5 = str_replace('r', '尺' , $EN5);
      $EN5 = str_replace('t', 'Ť' , $EN5);
        $EN5 = str_replace('y', 'Ϥ' , $EN5);
      $EN5 = str_replace('u', 'Ц' , $EN5);
        $EN5 = str_replace('i', 'ɪ' , $EN5);
      $EN5 = str_replace('o', 'Ø' , $EN5);
        $EN5 = str_replace('p', 'þ' , $EN5);
      $EN5 = str_replace('a', 'Λ' , $EN5);
        $EN5 = str_replace('s', 'ら' , $EN5);
      $EN5 = str_replace('d', 'Ð' , $EN5);
        $EN5 = str_replace('f', 'F' , $EN5);
      $EN5 = str_replace('g', 'Ɠ' , $EN5);
        $EN5 = str_replace('h', 'н' , $EN5);
      $EN5 = str_replace('j', 'ﾌ' , $EN5);
        $EN5 = str_replace('k', 'Қ' , $EN5);
      $EN5 = str_replace('l', 'Ł' , $EN5);
        $EN5 = str_replace('z', 'Ẕ' , $EN5);
      $EN5 = str_replace('x', 'χ' , $EN5);
        $EN5 = str_replace('c', 'ㄈ' , $EN5);
      $EN5 = str_replace('v', 'Ɣ' , $EN5);
        $EN5 = str_replace('b', 'Ϧ' , $EN5);
        $EN5 = str_replace('n', 'Л' , $EN5);
      $EN5 = str_replace('m', '௱' , $EN5);
      bot('sendmessage',[
       'chat_id'=>$chat_id,
       'text'=>$EN5[1],
       
       ]);
       }
      $EN6 = explode("EN", $text);
       if($EN6[1]){
      $EN6 = str_replace('q', 'Ⴓ' , $EN6);
        $EN6 = str_replace('w', 'Ш' , $EN6);
      $EN6 = str_replace('e', 'Σ' , $EN6);
        $EN6 = str_replace('r', 'Γ' , $EN6);
      $EN6 = str_replace('t', 'Ƭ' , $EN6);
        $EN6 = str_replace('y', 'Ψ' , $EN6);
      $EN6 = str_replace('u', 'Ʊ' , $EN6);
        $EN6 = str_replace('i', 'I' , $EN6);
      $EN6 = str_replace('o', 'Θ' , $EN6);
        $EN6 = str_replace('p', 'Ƥ' , $EN6);
      $EN6 = str_replace('a', 'Δ' , $EN6);
        $EN6 = str_replace('s', 'Ѕ' , $EN6);
      $EN6 = str_replace('d', 'D' , $EN6);
        $EN6 = str_replace('f', 'F' , $EN6);
      $EN6 = str_replace('g', 'G' , $EN6);
        $EN6 = str_replace('h', 'H' , $EN6);
      $EN6 = str_replace('j', 'J' , $EN6);
        $EN6 = str_replace('k', 'Ƙ' , $EN6);
      $EN6 = str_replace('l', 'L' , $EN6);
        $EN6 = str_replace('z', 'Z' , $EN6);
      $EN6 = str_replace('x', 'Ж' , $EN6);
        $EN6 = str_replace('c', 'C' , $EN6);
      $EN6 = str_replace('v', 'Ʋ' , $EN6);
        $EN6 = str_replace('b', 'Ɓ' , $EN6);
        $EN6 = str_replace('n', '∏' , $EN6);
      $EN6 = str_replace('m', 'Μ' , $EN6);
      bot('sendmessage',[
       'chat_id'=>$chat_id,
       'text'=>$EN6[1],
       
       ]);
       }
   $EN7 = explode("EN", $text);
       if($EN7[1]){
      $EN7 = str_replace('q', 'Q' , $EN7);
        $EN7 = str_replace('w', 'Щ' , $EN7);
      $EN7 = str_replace('e', '乇' , $EN7);
        $EN7 = str_replace('r', '尺' , $EN7);
      $EN7 = str_replace('t', 'ｲ' , $EN7);
        $EN7 = str_replace('y', 'ﾘ' , $EN7);
      $EN7 = str_replace('u', 'Ц' , $EN7);
        $EN7 = str_replace('i', 'ﾉ' , $EN7);
      $EN7 = str_replace('o', 'Ծ' , $EN7);
        $EN7 = str_replace('p', 'ｱ' , $EN7);
      $EN7 = str_replace('a', 'ﾑ' , $EN7);
        $EN7 = str_replace('s', '丂' , $EN7);
      $EN7 = str_replace('d', 'Ð' , $EN7);
        $EN7 = str_replace('f', 'ｷ' , $EN7);
      $EN7 = str_replace('g', 'Ǥ' , $EN7);
        $EN7 = str_replace('h', 'ん' , $EN7);
      $EN7 = str_replace('j', 'ﾌ' , $EN7);
        $EN7 = str_replace('k', 'ズ' , $EN7);
      $EN7 = str_replace('l', 'ﾚ' , $EN7);
        $EN7 = str_replace('z', '乙' , $EN7);
      $EN7 = str_replace('x', 'ﾒ' , $EN7);
        $EN7 = str_replace('c', 'ζ' , $EN7);
      $EN7 = str_replace('v', 'Џ' , $EN7);
        $EN7 = str_replace('b', '乃' , $EN7);
        $EN7 = str_replace('n', '刀' , $EN7);
      $EN7 = str_replace('m', 'ᄊ' , $EN7);
      bot('sendmessage',[
       'chat_id'=>$chat_id,
       'text'=>$EN7[1],
       
       ]);
       }
       $EN8 = explode("EN", $text);
       if($EN8[1]){
      $EN8 = str_replace('q', 'ợ' , $EN8);
        $EN8 = str_replace('w', 'ฬ' , $EN8);
      $EN8 = str_replace('e', 'є' , $EN8);
        $EN8 = str_replace('r', 'г' , $EN8);
      $EN8 = str_replace('t', 't' , $EN8);
        $EN8 = str_replace('y', 'ץ' , $EN8);
      $EN8 = str_replace('u', 'ย' , $EN8);
        $EN8 = str_replace('i', 'เ' , $EN8);
      $EN8 = str_replace('o', '๏' , $EN8);
        $EN8 = str_replace('p', 'թ' , $EN8);
      $EN8 = str_replace('a', 'ค' , $EN8);
        $EN8 = str_replace('s', 'ร' , $EN8);
      $EN8 = str_replace('d', '๔' , $EN8);
        $EN8 = str_replace('f', 'Ŧ' , $EN8);
      $EN8 = str_replace('g', 'ɠ' , $EN8);
        $EN8 = str_replace('h', 'ђ' , $EN8);
      $EN8 = str_replace('j', 'ן' , $EN8);
        $EN8 = str_replace('k', 'к' , $EN8);
      $EN8 = str_replace('l', 'l' , $EN8);
        $EN8 = str_replace('z', 'z' , $EN8);
      $EN8 = str_replace('x', 'א' , $EN8);
        $EN8 = str_replace('c', 'ς' , $EN8);
      $EN8 = str_replace('v', 'ⱴ' , $EN8);
        $EN8 = str_replace('b', '๒' , $EN8);
        $EN8 = str_replace('n', 'ภ' , $EN8);
      $EN8 = str_replace('m', '๓' , $EN8);
      bot('sendmessage',[
       'chat_id'=>$chat_id,
       'text'=>$EN8[1],
       
       ]);
       }
   $EN9 = explode("EN", $text);
       if($EN9[1]){
      $EN9 = str_replace('q', 'ҩ' , $EN9);
        $EN9 = str_replace('w', 'ω' , $EN9);
      $EN9 = str_replace('e', '૯' , $EN9);
        $EN9 = str_replace('r', 'Ր' , $EN9);
      $EN9 = str_replace('t', '੮' , $EN9);
        $EN9 = str_replace('y', 'ע' , $EN9);
      $EN9 = str_replace('u', 'υ' , $EN9);
        $EN9 = str_replace('i', 'ɿ' , $EN9);
      $EN9 = str_replace('o', '૦' , $EN9);
        $EN9 = str_replace('p', 'ƿ' , $EN9);
      $EN9 = str_replace('a', 'ค' , $EN9);
        $EN9 = str_replace('s', 'ς' , $EN9);
      $EN9 = str_replace('d', 'ძ' , $EN9);
        $EN9 = str_replace('f', 'Բ' , $EN9);
      $EN9 = str_replace('g', '૭' , $EN9);
        $EN9 = str_replace('h', 'Һ' , $EN9);
      $EN9 = str_replace('j', 'ʆ' , $EN9);
        $EN9 = str_replace('k', 'қ' , $EN9);
      $EN9 = str_replace('l', 'Ն' , $EN9);
        $EN9 = str_replace('z', 'ઽ' , $EN9);
      $EN9 = str_replace('x', '૪' , $EN9);
        $EN9 = str_replace('c', '८' , $EN9);
      $EN9 = str_replace('v', '౮' , $EN9);
        $EN9 = str_replace('b', 'ც' , $EN9);
        $EN9 = str_replace('n', 'Ո' , $EN9);
      $EN9 = str_replace('m', 'ɱ' , $EN9);
      bot('sendmessage',[
       'chat_id'=>$chat_id,
       'text'=>$EN9[1],
       
       ]);
       }
    $EN10 = explode("EN", $text);
       if($EN10[1]){
      $EN10 = str_replace('q', 'Ꝙ' ,$EN10);
        $EN10 = str_replace('w', 'Ѡ' ,$EN10);
      $EN10 = str_replace('e', 'Ɛ' ,$EN10);
        $EN10 = str_replace('r', 'Ɽ' ,$EN10);
      $EN10 = str_replace('t', 'Ͳ' ,$EN10);
        $EN10 = str_replace('y', 'Ỿ' ,$EN10);
      $EN10 = str_replace('u', 'Ʊ' ,$EN10);
        $EN10 = str_replace('i', 'ị' ,$EN10);
      $EN10 = str_replace('o', 'Ỗ' ,$EN10);
        $EN10 = str_replace('p', 'Ꝓ' ,$EN10);
      $EN10 = str_replace('a', 'Λ' ,$EN10);
        $EN10 = str_replace('s', 'Ṥ' ,$EN10);
      $EN10 = str_replace('d', 'δ' ,$EN10);
        $EN10 = str_replace('f', 'Բ' ,$EN10);
      $EN10 = str_replace('g', '₲' ,$EN10);
        $EN10 = str_replace('h', 'Ḩ' ,$EN10);
      $EN10 = str_replace('j', 'Ĵ' ,$EN10);
        $EN10 = str_replace('k', 'Ҡ' ,$EN10);
      $EN10 = str_replace('l', 'Ⱡ' ,$EN10);
        $EN10 = str_replace('z', 'Ꙃ' ,$EN10);
      $EN10 = str_replace('x', 'Ӿ' ,$EN10);
        $EN10 = str_replace('c', 'Ƈ' ,$EN10);
      $EN10 = str_replace('v', 'Ѵ' ,$EN10);
        $EN10 = str_replace('b', 'ß' ,$EN10);
        $EN10 = str_replace('n', 'ⴂ' ,$EN10);
      $EN10 = str_replace('m', 'ⴅ' ,$EN10);
       bot('sendmessage',[
       'chat_id'=>$chat_id,
       'text'=>$EN10[1],
       
       ]);
       }
    $EN11 = explode("EN", $text);
       if($EN11[1]){
      $EN11 = str_replace('q', 'ǫ' , $EN11);
        $EN11 = str_replace('w', 'ᴡ' , $EN11);
      $EN11 = str_replace('e', 'ᴇ' , $EN11);
        $EN11 = str_replace('r', 'ʀ' , $EN11);
      $EN11 = str_replace('t', 'ᴛ' , $EN11);
        $EN11 = str_replace('y', 'ʏ' , $EN11);
      $EN11 = str_replace('u', 'ᴜ' , $EN11);
        $EN11 = str_replace('i', 'ɪ' , $EN11);
      $EN11 = str_replace('o', 'ᴏ' , $EN11);
        $EN11 = str_replace('p', 'ᴘ' , $EN11);
      $EN11 = str_replace('a', 'ᴀ' , $EN11);
        $EN11 = str_replace('s', 'ѕ' , $EN11);
      $EN11 = str_replace('d', 'ᴅ' , $EN11);
        $EN11 = str_replace('f', 'ғ' , $EN11);
      $EN11 = str_replace('g', 'ɢ' , $EN11);
        $EN11 = str_replace('h', 'ʜ' , $EN11);
      $EN11 = str_replace('j', 'ᴊ' , $EN11);
        $EN11 = str_replace('k', 'ᴋ' , $EN11);
      $EN11 = str_replace('l', 'ʟ' , $EN11);
        $EN11 = str_replace('z', 'ᴢ' , $EN11);
      $EN11 = str_replace('x', 'х' , $EN11);
        $EN11 = str_replace('c', 'ᴄ' , $EN11);
      $EN11 = str_replace('v', 'ᴠ' , $EN11);
        $EN11 = str_replace('b', 'ʙ' , $EN11);
        $EN11 = str_replace('n', 'ɴ' , $EN11);
      $EN11 = str_replace('m', 'ᴍ' , $EN11);
      bot('sendmessage',[
       'chat_id'=>$chat_id,
       'text'=>$EN11[1],
       
       ]);
       }
    $EN12 = explode("EN", $text);
       if($EN12[1]){
      $EN12 = str_replace('q', 'Ｑ' , $EN12);
        $EN12 = str_replace('w', 'Ｗ' , $EN12);
      $EN12 = str_replace('e', 'Ｅ' , $EN12);
        $EN12 = str_replace('r', 'Ｒ' , $EN12);
      $EN12 = str_replace('t', 'Ｔ' , $EN12);
        $EN12 = str_replace('y', 'Ｙ' , $EN12);
      $EN12 = str_replace('u', 'Ｕ' , $EN12);
        $EN12 = str_replace('i', 'Ｉ' , $EN12);
      $EN12 = str_replace('o', 'Ｏ' , $EN12);
        $EN12 = str_replace('p', 'Ｐ' , $EN12);
      $EN12 = str_replace('a', 'Ａ' , $EN12);
        $EN12 = str_replace('s', 'Ｓ' , $EN12);
      $EN12 = str_replace('d', 'Ｄ' , $EN12);
        $EN12 = str_replace('f', 'Բ' , $EN12);
      $EN12 = str_replace('g', 'Ｇ' , $EN12);
        $EN12 = str_replace('h', 'Ｈ' , $EN12);
      $EN12 = str_replace('j', 'Ｊ' , $EN12);
        $EN12 = str_replace('k', 'Ｋ' , $EN12);
      $EN12 = str_replace('l', 'Ｌ' , $EN12);
        $EN12 = str_replace('z', 'Ｚ' , $EN12);
      $EN12 = str_replace('x', 'Ｘ' , $EN12);
        $EN12 = str_replace('c', 'С' , $EN12);
      $EN12 = str_replace('v', 'Ｖ' , $EN12);
        $EN12 = str_replace('b', 'Ｂ' , $EN12);
        $EN12 = str_replace('n', 'Ｎ' , $EN12);
      $EN12 = str_replace('m', 'Ⅿ' , $EN12);
      bot('sendmessage',[
       'chat_id'=>$chat_id,
       'text'=>$EN12[1],
       
       ]);
       }
    $EN13 = explode("EN", $text);
       if($EN13[1]){
      $EN13 = str_replace('q', 'Ǫ' , $EN13);
        $EN13 = str_replace('w', 'Ш' , $EN13);
      $EN13 = str_replace('e', 'Ξ' , $EN13);
        $EN13 = str_replace('r', 'Я' , $EN13);
      $EN13 = str_replace('t', '₮' , $EN13);
        $EN13 = str_replace('y', 'Џ' , $EN13);
      $EN13 = str_replace('u', 'Ǚ' , $EN13);
        $EN13 = str_replace('i', 'ł' , $EN13);
      $EN13 = str_replace('o', 'Ф' , $EN13);
        $EN13 = str_replace('p', 'ק' , $EN13);
      $EN13 = str_replace('a', 'Λ' , $EN13);
        $EN13 = str_replace('s', 'Ŝ' , $EN13);
      $EN13 = str_replace('d', 'Ð' , $EN13);
        $EN13 = str_replace('f', 'Ŧ' , $EN13);
      $EN13 = str_replace('g', '₲' , $EN13);
        $EN13 = str_replace('h', 'Ḧ' , $EN13);
      $EN13 = str_replace('j', 'J' , $EN13);
        $EN13 = str_replace('k', 'К' , $EN13);
      $EN13 = str_replace('l', 'Ł' , $EN13);
        $EN13 = str_replace('z', 'Ꙃ' , $EN13);
      $EN13 = str_replace('x', 'Ж' , $EN13);
        $EN13 = str_replace('c', 'Ͼ' , $EN13);
      $EN13 = str_replace('v', 'Ṽ' , $EN13);
        $EN13 = str_replace('b', 'Б' , $EN13);
        $EN13 = str_replace('n', 'Л' , $EN13);
      $EN13 = str_replace('m', 'Ɱ' , $EN13);
      bot('sendmessage',[
       'chat_id'=>$chat_id,
       'text'=>$EN13[1],
       
       ]);
       }
       ///////////////////// store ///////////////

   
       
          if($text=="🗂¦ الملفات" and $id == $sudo){
            bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"🗂¦ مرحبا بكم في متجر الملفات »  
ـ----------------------------
🔘| جميع الملفات متاحه الان .

1- zhrf.php » {✖️}
:- ملف الزغرفه
l»» تفاصيل اكثر»» @BLACK_TEAM_4 

------------------------------
2- iranblok.php » {✖️}
:- ملف قفل الفارسيه
l»»  تفاصيل اكثر»» @BLACK_TEAM_4 

------------------------------

* علامه الـ✓ تعني الملف مفعل
* وعلامه الـ✖️ تعني الملف غير مفعل
 ﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎",
'reply_to_message_id'=>$message->message_id, 
]);
}
 if($text == "تفعيل ملف zhrf.php" and $id == $sudo ){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"🗂¦ مرحبا عزيزي المطور الاساسي   
ـ------------------------
| تم تفعيل ملف الزغرفه .
| الزغرفه بلانكليزيه فقط EN + NAME
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
❍كمثال .... 
 
☑️┇EN marks
----------------------
🗂┇ zhrf.php » {✓}
----------------------
 
  ",
'reply_to_message_id'=>$message->message_id, 
]);
}
           

if($text == "تفعيل ملف zhrf.php" and $id == $sudo ){
  bot('sendMessage',[
  'chat_id'=>$chat_id, 
  'text'=>"
❍ مرحبا عزيزي المطور الاساسي 
❍جميع الملفات : 
 
  ---------------------- 
 ✔️┇الملفات المفعله 
   zhrf.php 

   
    ",
  'reply_to_message_id'=>$message->message_id, 
  ]);
  }
if($text == "اطردني" and $you == "member"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
❍ ارسل ؛ نعم ، ليتم طردك
❍ارسل ؛ لا ، لالغاء الامر",
'parse_mode'=>'MarkDown'
]);
}
elseif($text == "نعم" and $you == "member"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"❍ تم طردك من المجموعة سارسل لك الرابط في الخاص اذا غيرت رأيك ",
'reply_to_message_id'=>$JACKKKKKK
]);
bot('kickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$id
]);
}

if (preg_match('/(فحص الاعضاء)(.*)/', $text) and $message->from->id == $sudo) { 
  $get = json_decode(file_get_contents('data.json'),true); 
  $bye_keko = $get; 
  $text = str_replace('فحص الاعضاء', '', $text); 
  if (isset($get['groups'])) { 
    $bye_keko = $get['groups']; 
  } 
  foreach ($bye_keko as $key => $value) { 
    $hello_keko = json_decode(file_get_contents("http://api.telegram.org/bot".API_KEY."/getChatMemberscount?chat_id=$key"))->result; 
    if ($hello_keko < $text) { 
      bot('leaveChat',[ 
        'chat_id'=>$key, 
      ]); 
      bot('sendmessage',[ 
        'chat_id'=>$sudo, 
        'text'=>"id => $key \n members => $hello_keko \n bot leave Chat" 
      ]); 
    } 
  } 
}


function sendmessage($chat_id, $text){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>$text,
 'parse_mode'=>"MarkDown"
 ]);
 }
function save($filename, $data)
{
    $file = fopen($filename, 'w');
    fwrite($file, $data);
    fclose($file);
}



$update = json_decode(file_get_contents('php://input'));
$message = $update->message; 
$chat_id = $message->chat->id;
$text = $message->text;
$message_id = $message->message_id;
$from_id = $message->from->id;
$firstname = $message->from->first_name;
$lastname = $message->from->last_name;
$username = $message->from->username;
$textmessage = $message->text;
$step = file_get_contents("data/ko/step.txt");
$btn = file_get_contents("data/ko/btnlist.txt");
$dex = file_get_contents("data/ko/dex.txt");


if ($textmessage == 'اضف رد') {
    save("data/ko/step.txt","set txtbt");
  var_dump(bot('sendMessage',[
         'chat_id'=>$update->message->chat->id,
         'text'=>"رسل الكلمه التي تريد اضافتها",
         'reply_to_message_id'=>$message->message_id, 

      ]));
 }
 
 
 if ($step == 'set txtbt') {
  save("data/ko/step.txt","set txtans");
  var_dump(bot('sendMessage',[
         'chat_id'=>$update->message->chat->id,
         'text'=>"❍الان ارسل الرد الذي تريد اضافته",
      ]));
   save("data/ko/$textmessaage.txt","");
   save("data/ko/last_btn.txt",$textmessage);
 }
 if ($step == 'set txtans') {
  save("data/ko/step.txt","none");
  
  $last = file_get_contents("data/ko/last_btn.txt");
   $myfile2 = fopen("data/ko/btnlist.txt", "a") or die("Unable to open file!"); 
   fwrite($myfile2, "$last\n");
   fclose($myfile2);
   save("data/ko/$last.txt","$textmessage");
  
  var_dump(bot('sendMessage',[
         'chat_id'=>$update->message->chat->id,
         'text'=>"❍تم حفظ الرد",
         'reply_to_message_id'=>$message->message_id, 

      ]));
 }

 if (file_exists("data/ko/$textmessage.txt")) {
  Sendmessage($chat_id,file_get_contents("data/ko/$textmessage.txt"));
}


if($text == 'تفعيل ملف iranblok.php'){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>'❍ اهــلا عـزيـزي المطور الاساسي 
❍ تـم قفل  ✓ الفارسيه
🇮🇷¦ سيتم حظر كل عضو ايراني'
]);
}


if ($text == "❍⎮تحديث السورس" and $id == $sudo ){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>'⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️0%',
'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
 'text'=>'⬛️⬜️⬜️⬜️⬜️⬜️⬜️⬜️10%',
          'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬜️⬜️⬜️⬜️⬜️⬜️20%',
          'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬜️⬜️⬜️⬜️⬜️30%',
          'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️🔳⬜️⬜️⬜️⬜️40%',
          'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬜️⬜️⬜️⬜️50%',
          'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬛️⬜️⬜️⬜️60%',
          'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬛️▪️⬜️⬜️70%',
          'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬛️⬛️⬜️⬜️80%',
          'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬜️90%',
          'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️100%',
          'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'
❍  تم تحديث البوت بنجاح
❍ تم تحديث ملفات البوت
❍ تم التسريع والتخلص من الشحطات',
         'reply_to_message_id'=>$message->message_id, 

 ]);
 }
   if ($text == "قفل المتحركه") {
     lock($chat_id,'gif');
$id   = $message->from->id;
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"❍┇بواســطه ≫ ( $name )
ه──────────
❍┇تم قفــل المتحــركه
❍┇خاصية ~⪼【القفــل】",
  'reply_to_message_id'=>$mid,
'parse_mode'=>"MarkDown",
      ]);
   }
   if ($text == "فتح المتحركه") {
     open($chat_id,'gif');
$id   = $message->from->id;
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"❍┇بواســطه ≫ ( $name )
ه──────────
❍┇تم فتح المتحــركه
❍┇خاصية ~⪼【الفتــح】",
  'reply_to_message_id'=>$mid,
'parse_mode'=>"MarkDown",
      ]);
   }
 //==========================الرابط ===============
 if ($data == "setlink" ){
if ($you_ == "creator" or $you_ == "administrator"){
     file_put_contents("data/$cllchatid/gplink.txt", "setlink");
        	bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"_من فضلك ارسل الان الرابط_ ❍
*Please now send new go link* ❍", 
                         'parse_mode'=>'MARKDOWN',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	  [
	  ['text'=> "تالع 💡" ,'url'=>"http://telegram.me/iimaii"]
	  ],
	  [
		['text'=>"العودة 🔙 Back",'callback_data'=>"bagg"]
	  ]
   ]
   ])
   ]);
   }   
 else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا ❍ هذا الامر يخص الادمنية فقط ❍",
        'show_alert'=>true
     ]);
     } 
     }

if($textmsg == "قفل التوجيه" && !is_dir("mute")){
 mkdir("mute");
   bot('sendmessage',[
   'chat_id'=>$chat_id,
    'message_id'=>$message_id,
   'text'=>"<b> اهلا عزيزي </b>
ــــــــــــــــــــــ❍ـــــــــــــــــــــ
<code> تم قفل التوجيه ❍ </code>
<code> Fwd Locked ❍ </code>
ــــــــــــــــــــــ❍ـــــــــــــــــــــ
<b>By </b>: @$username",
'parse_mode'=>"html",
        ]);
         }
if($textmsg == "فتح التوجيه" && is_dir(mute)){
  rmdir("mute");
bot('sendmessage',[
   'chat_id'=>$chat_id,
    'message_id'=>$message_id,
   'text'=>"<b> اهلا عزيزي </b>
ــــــــــــــــــــــ❍ـــــــــــــــــــــ
<code> تم فتح التوجيه ❍ </code>
<code> Fwd Open  ❍ </code>
ــــــــــــــــــــــ❍ـــــــــــــــــــــ
<b>By </b>: @$username",
'parse_mode'=>"html",
        ]);
         }
if($message->forward_from && is_dir("mute")){
 bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}
if($textmsg == "قفل الصور" && !is_dir("mute")){
 mkdir("mute");
   bot('sendmessage',[
   'chat_id'=>$chat_id,
    'message_id'=>$message_id,
   'text'=>"<b> اهلا عزيزي </b>
ــــــــــــــــــــــ❍ـــــــــــــــــــــ
<code> تم قفل الصور  ❍ </code>
<code> Photo Locked ❍</code>
ــــــــــــــــــــــ❍ـــــــــــــــــــــ
<b>By </b>: @$username",
'parse_mode'=>"html",
        ]);
         }
if($textmsg == "فتح الصور" && is_dir(mute)){
  rmdir("mute");
bot('sendmessage',[
   'chat_id'=>$chat_id,
    'message_id'=>$message_id,
   'text'=>"<b> اهلا عزيزي </b>
ــــــــــــــــــــــ❍ـــــــــــــــــــــ
<code> تم فتح الصور ❍ </code>
<code> Photo Open  ❍ </code>
ــــــــــــــــــــــ❍ـــــــــــــــــــــ
<b>By </b>: @$username",
'parse_mode'=>"html",
        ]);
         }
if($message->photo && is_dir("mute")){
 bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}
if($textmsg == "قفل الصوت" && !is_dir("mute")){
 mkdir("mute");
   bot('sendmessage',[
   'chat_id'=>$chat_id,
    'message_id'=>$message_id,
   'text'=>"<b> اهلا عزيزي </b>
ــــــــــــــــــــــ❍ـــــــــــــــــــــ
<code> تم قفل الصوت  ❍ </code>
<code> Voice Locked ❍</code>
ــــــــــــــــــــــ❍ـــــــــــــــــــــ
<b>By </b>: @$username",
'parse_mode'=>"html",
        ]);
         }
if($textmsg == "فتح الصوت" && is_dir(mute)){
  rmdir("mute");
bot('sendmessage',[
   'chat_id'=>$chat_id,
    'message_id'=>$message_id,
   'text'=>"<b> اهلا عزيزي </b>
ــــــــــــــــــــــ❍ـــــــــــــــــــــ
<code> تم فتح الصوت ❍ </code>
<code> Voice Open  ❍ </code>
ــــــــــــــــــــــ❍ـــــــــــــــــــــ
<b>By </b>: @$username",
'parse_mode'=>"html",
        ]);
         }
if($message->voice && is_dir("mute")){
 bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}
if($textmsg == "قفل الفيديو" && !is_dir("mute")){
 mkdir("mute");
   bot('sendmessage',[
   'chat_id'=>$chat_id,
    'message_id'=>$message_id,
   'text'=>"<b> اهلا عزيزي </b>
ــــــــــــــــــــــ❍ـــــــــــــــــــــ
<code> تم قفل الفيديو  ❍ </code>
<code> Video Locked ❍</code>
ــــــــــــــــــــــ❍ـــــــــــــــــــــ
<b>By </b>: @$username",
'parse_mode'=>"html",
        ]);
         }
if($textmsg == "فتح الفيديو" && is_dir(mute)){
  rmdir("mute");
bot('sendmessage',[
   'chat_id'=>$chat_id,
    'message_id'=>$message_id,
   'text'=>"<b> اهلا عزيزي </b>
ــــــــــــــــــــــ❍ـــــــــــــــــــــ
<code> تم فتح الفيديو ❍</code>
<code> Video Open  ❍ </code>
ــــــــــــــــــــــ❍ـــــــــــــــــــــ
<b>By </b>: @$username",
'parse_mode'=>"html",
        ]);
         }
if($message->video && is_dir("mute")){
 bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}
if($textmsg == "قفل الملصقات" && !is_dir("mute")){
 mkdir("mute");
   bot('sendmessage',[
   'chat_id'=>$chat_id,
    'message_id'=>$message_id,
   'text'=>"<b> اهلا عزيزي </b>
ــــــــــــــــــــــ❍ـــــــــــــــــــــ
<code> تم قفل الملصقات  ❍ </code>
<code> Stickers Locked ❍</code>
ــــــــــــــــــــــ❍ـــــــــــــــــــــ
<b>By </b>: @$username",
'parse_mode'=>"html",
        ]);
         }
if($textmsg == "فتح الملصقات" && is_dir(mute)){
  rmdir("mute");
bot('sendmessage',[
   'chat_id'=>$chat_id,
    'message_id'=>$message_id,
   'text'=>"<b> اهلا عزيزي </b>
ــــــــــــــــــــــ❍ـــــــــــــــــــــ
<code> تم فتح الملصقات ❍</code>
<code> Stickers Open  ❍ </code>
ــــــــــــــــــــــ❍ـــــــــــــــــــــ
<b>By </b>: @$username",
'parse_mode'=>"html",
        ]);
         }
if($message->sticker && is_dir("mute")){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}
if($textmsg == "قفل الجهات" && !is_dir("mute")){
 mkdir("mute");
   bot('sendmessage',[
   'chat_id'=>$chat_id,
    'message_id'=>$message_id,
   'text'=>"<b> اهلا عزيزي </b>
ــــــــــــــــــــــ❍ـــــــــــــــــــــ
<code> تم قفل الجهات  ❍ </code>
<code> Contects Locked ❍</code>
ــــــــــــــــــــــ❍ـــــــــــــــــــــ
<b>By </b>: @$username",
'parse_mode'=>"html",
        ]);
         }
if($textmsg == "فتح الجهات" && is_dir(mute)){
  rmdir("mute");
bot('sendmessage',[
   'chat_id'=>$chat_id,
    'message_id'=>$message_id,
   'text'=>"<b> اهلا عزيزي </b>
ــــــــــــــــــــــ❍ـــــــــــــــــــــ
<code> تم فتح الجهات ❍</code>
<code> Contects Open  ❍ </code>
ــــــــــــــــــــــ❍ـــــــــــــــــــــ
<b>By </b>: @$username",
'parse_mode'=>"html",
       ]);
         }
if($message->contact && is_dir("mute")){
 bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}
if($textmsg == "قفل الروابط" && !is_dir("mute")){
 mkdir("mute");
   bot('sendmessage',[
   'chat_id'=>$chat_id,
    'message_id'=>$message_id,
   'text'=>"<b> اهلا عزيزي </b>
ــــــــــــــــــــــ❍ـــــــــــــــــــــ
<code> تم قفل الروابط  ❍ </code>
<code> Links Locked ❍</code>
ــــــــــــــــــــــ❍ـــــــــــــــــــــ
<b>By </b>: @$username",
'parse_mode'=>"html",
]);
}
if($textmsg == "فتح الروابط" && is_dir(mute)){
  rmdir("mute");
bot('sendmessage',[
   'chat_id'=>$chat_id,
    'message_id'=>$message_id,
   'text'=>"<b> اهلا عزيزي </b>
ــــــــــــــــــــــ❍ـــــــــــــــــــــ
<code> تم فتح الروابط ❍</code>
<code> Links Open  ❍ </code>
ــــــــــــــــــــــ❍ـــــــــــــــــــــ
<b>By </b>: @$username",
'parse_mode'=>"html",
        ]);
         }
if(preg_match('/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/',$text) ){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}
if($textmsg == "قفل التاك" && !is_dir("mute")){
 mkdir("mute");
   bot('sendmessage',[
   'chat_id'=>$chat_id,
    'message_id'=>$message_id,
   'text'=>"<b> اهلا عزيزي </b>
ــــــــــــــــــــــ❍ـــــــــــــــــــــ
<code> تم قفل التاك  ❍ </code>
<code> Tag Locked ❍</code>
ــــــــــــــــــــــ❍ـــــــــــــــــــــ
<b>By </b>: @$username",
'parse_mode'=>"html",
]);
}
if($textmsg == "فتح التاك" && is_dir(mute)){
  rmdir("mute");
bot('sendmessage',[
   'chat_id'=>$chat_id,
    'message_id'=>$message_id,
   'text'=>"<b> اهلا عزيزي </b>
ــــــــــــــــــــــ❍ـــــــــــــــــــــ
<code> تم فتح التاك ❍</code>
<code> Tag Open  ❍ </code>
ــــــــــــــــــــــ❍ـــــــــــــــــــــ
<b>By </b>: @$username",
'parse_mode'=>"html",
        ]);
         }
         
/*
هذا الملف تابع لحقوق سورس بلاك ترفعه علي استضافتك وتعمل ويب هوك للبوت هيشتغل معاك
تم البرمجه بواسطه المبرمج جاك
اي استفسار كلمني 
@PHP57
اتمني انك تستمتع بالملف 
بالتوفيق للجميع
*/