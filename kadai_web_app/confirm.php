<?php
 $employee_name = $_POST['employee_name'];
 $emoloyee_age = $_POST['emoloyee_age'];
 $category = $_POST['category'];
?>

<!DOCTYPE html>
<html lang = "ja">

  <head>
    <meta charset = "UTF-8">
    <title>社員情報入力フォーム</title>
 </head>

 <body>
   <h2>入力内容をご確認ください。</h2>
   <p>問題なければ「確定」、修正する場合は「キャンセル」をクリックしてください。</p>

   <table border = "1">
     <tr>
       <th>項目</th>
       <th>入力内容</th>
      </tr>
      <tr>
       <td>社員名</td>
       <td><?php echo $employee_name; ?></td>
      </tr>
      <tr>
       <td>年齢</td>
       <td><?php echo $emoloyee_age; ?></td>
      </tr>
      <tr>
       <td>所属部署</td>
       <td><?php echo $category; ?></td>
      </tr>
    </table>

    <p>
      <button id = "confirm-btn" onclick = "location.href = 'complete.php';">確定</button>
      <button id = "cancel-btn" onclick = "history.back();">キャンセル</button>
    </p>
  </body>
</html>