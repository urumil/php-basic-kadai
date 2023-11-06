<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="UTF-8">
    <title>クラスを作る課題</title>
 </head>

 <body>
   <p>
     <?php
     class Food {
      //プロパティを定義する
      private $name;
      private $price;

      //メソッドを定義する
      public function show_price() {
        $show_price = 250;
        echo $show_price . '<br>';
      }

      //コンストラクタを定義する
      public function __construct(string $name, int $price) {
        $this -> name = $name;
        $this -> price = $price;
      }
     }

     //インスタンス化する
     $food = new Food('potato',250);
     //インスタンスを出力する
     print_r($food);
     echo '<br>';

     class Animal {
      //プロパティを定義する
      private $name;
      private $height;
      private $wight;

      //メソッドを定義する
      public function show_height() {
        $show_height = 60;
        echo $show_height . '<br>';
      }

      //コンストラクタを定義する
      public function __construct(string $name, int $height, int $wight) {
        $this -> name = $name;
        $this -> height = $height;
        $this -> wight = $wight;
      }
     }

     //インスタンス化する
     $animal = new Animal('dog', 60, 5000);
     //インスタンスを出力する
     print_r($animal);
     echo '<br>';


     //メソッドにアクセスして実行する
     $food -> show_price();
     $animal -> show_height();
     ?>
    </p>
  </body>
</html>