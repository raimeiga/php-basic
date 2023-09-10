<!DOCTYPE html>
 <html lang="ja">
 
 
 
 <body>
     <h2>個人情報入力フォーム</h2>
     <form action="confirmation.php" method="post">
         <table>
             <tr>
                 <td>お名前</td>
                 <td>
                     <input type="text" name="user_name">
                 </td>
             </tr>
             <tr>
                 <td>性別</td>
                 <td>
                     <input type="radio" name="user_gender" value="男性" checked>男性
                     <input type="radio" name="user_gender" value="女性">女性
                 </td>
             </tr>
             <tr>
                 <td>メールアドレス</td>
                 <td>
                     <input type="text" name="user_email">
                 </td>
             </tr> 
             
         </table>
         <input type="submit" value="送信">
     </form>
 </body>
 
 
 </html>
 