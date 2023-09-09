<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
     <p>
         <?php
         // 変数に値を代入する
         $user_name = '侍太郎';
 
         // 変数の中身を出力する
         echo $user_name;

         echo '<br>';

         $user_name='侍花子';

         echo $user_name;
         ?>
     </p>
     <P>
        <?php
        $number=3;
        echo $number - 1.2;
        echo '<br>';
        $my_name='侍一郎';

        echo '私の名前は'.$my_name.'です';
        echo'<br>';
        
        echo 私の名前は{$my_name}です";
        ?>
     </P>  

 </body>
 
 </html>