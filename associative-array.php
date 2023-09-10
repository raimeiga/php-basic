<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 
 <body>
     <p>
    <?php
    $personal_date=['name'=>'侍太郎','age'=>36,'gender'=>'男性'];                                
    print_r($personal_date);

    $personal_date['age']=37;

    $personal_date['address']='東京都';
    echo '<br>';
    print_r($personal_date);
    
    echo '<br>';
    echo $personal_date['gender'];
    ?>
    </p>
 </body>
 
 </html>