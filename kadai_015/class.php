<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編_課題15</title>
 </head>

 <body>
    <p>
        <?php
         // クラス定義
         class Food{
            //プロパティ定義
            private $name;
            private $price;

            //コンストラクタ定義
            public function __construct(string $name, int $price){
                $this->name = $name;
                $this->price = $price;
                echo $this->price . '<br>';
            }
        }

        //インスタンス化
        $food = new Food('potato' , 250);

        // プロパティの値出力
        print_r($food);
        echo '<br>';

        // クラス定義
        class Animal{
            //プロパティ
            private $name;
            private $height;
            private $weight; 

            //コンストラクタ定義
            public function __construct(string $name, int $height, int $weight){
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
                echo $this->height . '<br>';
            }
        }

        //インスタンス化
        $animal = new Animal('dog' , 60 , 5000);

        // プロパティの値出力
        print_r($animal);
        echo '<br>';
        ?>
    </p>
</body>

</html>