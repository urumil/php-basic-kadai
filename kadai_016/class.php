<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="UTF-8">
    <title>クラスを作る課題</title>
 </head>

 <body>
   <p>
     <?php
     //「Food」のクラスを定義する
     class Food {
      //プロパティを定義する
      private $name;
      private $price;

      //メソッドを定義する
      public function show_price(int $price) {
        $this -> price = $price;
        echo $this -> price . '<br>';
      }

      //コンストラクタを定義する
      public function __construct(string $name, int $price) {
        $this -> name = $name;
        $this -> price = $price;
      }
     }

     //インスタンス化する
     $food = new Food('apple',150);

     //メソッドにアクセスして実行する
     $food -> show_price(150);

     //インスタンスを出力する
     print_r($food);
     ?>
   </p>

   <p>
     <?php
     //「Animal」のクラスを定義する
     class Animal {
      //プロパティを定義する
      private $name;
      private $height;
      private $wight;

      //メソッドを定義する
      public function show_height(int $height) {
        $this -> height = $height;
        echo $this -> height . '<br>';
      }

      //コンストラクタを定義する
      public function __construct(string $name, int $height, int $wight) {
        $this -> name = $name;
        $this -> height = $height;
        $this -> wight = $wight;
      }
     }

     //インスタンス化する
     $animal = new Animal('cat', 2, 50);

     //メソッドにアクセスして実行する
     $animal -> show_height(2);

     //インスタンスを出力する
     print_r($animal);
     ?>
    </p>
  </body>
</html>