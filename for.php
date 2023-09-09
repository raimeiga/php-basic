<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
     <p>
    <?php
    for($i = 1; $i <= 10; $i += 1){
        echo $i.'<br>';
    }
        
         // 1～10までの整数を順番に出力する
    ?>
</p>
    <?php
    for($i = 1; $i <=10; $i +=1){
        $num = mt_rand(0,20);
        
        /*今回は変数を中括弧{}で囲み、文字列の中で変数の中身を表示（変数展開）。
        このように変数展開を行う場合は、文字列全体をダブルクォーテーション"で囲む*/
        echo "{$i}回目の結果は{$num}です.<br>";
        //変数展開しない場合は、文字列型データを「''」で囲みつつ、「.」連結させる
        echo $i.'回目の結果は'.$num.'です'.'<br>';
                
        if($num === 20){
            echo '20が出たので繰り返し処理を強制終了します。';
            break;
        }
    }
    ?>
    </p>
    <p>
         <?php
         for ($i = 1; $i <= 10; $i++) {
             // カウンタ変数$iの値が奇数（2で割った余りが1）であれば、値を出力せずにcontinue文で次のループに進む
             if ($i % 2 === 1) {
                 continue;
             }
 
             echo $i . '<br>';
         }
         ?>
     </p>
    
 </body>
 
 </html>