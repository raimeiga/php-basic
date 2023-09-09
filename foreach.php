<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
    
     <p>
         <?php
         $user_names = ['侍太郎', '侍一郎', '侍二郎', '侍三郎', '侍四郎'];
 
         //  配列$user_namesの要素を1つずつ順番に出力する
         foreach ($user_names as $user_name) {
             echo $user_name . '<br>';
         }

          //  配列$user_namesのインデックスと値を1つずつ順番に出力する
          foreach ($user_names as $index => $value) {
            echo "{$index}:{$value}<br>";
        }
         ?>
     </p>
     <p>
     <?php /*11.7 continue文を自分で書いてみた
　　　　　　教材に書かれているお題↓
            ・連想配列$scoreのキーに科目名、値に点数を入れる（5科目分）
            ・科目名と点数を順番に出力する
            ・点数が70点未満のときは、上記の処理をスキップする
            （結果的に70点以上の科目名と点数のみが出力される）*/

       $subjects = ['japanese' => 50, 'math' => 72, 'society' => 90, 'science'=> 32, 'English'=>12];
          foreach($subjects as $key => $value){
           if($value <70) {
              continue;
           }
           echo " {$key}は{$value}です。<br>";
       }
       ?>
</p>
<p>
         <?php  //11.7 continue文の教材に書かれていたコード
         $score = [
             '国語' => 80,
             '数学' => 55,
             '理科' => 70,
             '社会' => 85,
             '英語' => 60
         ];
 
         echo '合格した科目は以下のとおりです。<br>';
 
         foreach ($score as $key => $value) {
             // 変数$valueの値（点数）が70より小さければ、キー（科目名）と値（点数）を出力せずにcontinue文で次のループに進む
             if ($value < 70) {
                 continue;
             }
 
             echo "{$key}：{$value}点<br>";
         }
         ?>
     </p> 
    <p>
         <?php
         $personal_data = ['name' => '侍太郎', 'age' => 36, 'gender' => '男性'];
 
         // 連想配列$personal_dataのキーと値を1つずつ順番に出力する
         foreach ($personal_data as $key => $value) {
             echo "{$key}は{$value}です。<br>";
         }
 
         // 連想配列$personal_dataの値を1つずつ順番に出力する
         foreach ($personal_data as $value) {
             echo $value . '<br>';
         }
         ?>
     </p>

     <p>出身地を選択してください。</p>
    <form>    
    <select>
    <?php
     $birthplaces = ['北海道地方','東北地方','関東地方','中部地方','近畿地方','中国・四国地方','九州地方' ];
     foreach ($birthplaces as $birthplace) {
              echo "<option>{$birthplace}</option>";
     }
     ?>
    </select>
    </form>

    <P>
        <?php   /*11.6 break文 自分なりに書いてみた（正解と少し異なっていたが、
        　　　　要求どおり動作したのでOK.正解のコードは、&targetという変数を
        　　　　用いることで、対象が侍二郎以外になっても、対応できるようにし
        　　　　てるんだと思う。*/
        $user_names = ['侍太郎','侍一郎','侍二郎','侍三郎','侍四郎'];
        
        foreach ($user_names as $user_name) {
            echo $user_name . '<br>';

            if($user_name === '侍二郎'){
                echo'侍二郎なので、繰り返し処理終了';
                break;
            }
        }
        ?>
        </p>
        
        <p>
         <?php /*11.6 break文の正解コード　&targetという変数を用いることで、
                対象が侍二郎以外になっても、対応できるようにしてるんだと思う*/

         $user_names = ['侍太郎', '侍一郎', '侍二郎', '侍三郎', '侍四郎'];
 
         // 検索したいユーザー名を代入する変数
         $target = '侍二郎';
 
         foreach ($user_names as $user_name) {
             echo $user_name . '<br>';
 
             // 変数$user_nameと変数$targetの値が一致すれば、break文で繰り返し処理を強制終了する
             if ($user_name === $target) {
                 echo "{$target}さんが見つかったので、繰り返し処理を強制終了します。";
                 break;
             }
         }
         ?>
     </p> 

 </body>
 
 </html>
