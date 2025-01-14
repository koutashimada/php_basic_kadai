<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
    <?php
        class Food{
            public $name;
            public $price;

            public function __construct(string $name, int $price){
                $this->name = $name;
                $this->price = $price;
            }



            public function show_price(){
                echo $this->price.'<br>';
            }

            
            
        }

        class Animal{
            public $name;
            public $height;
            public $weight;

            public function __construct(string $name,int $height, int $weight){
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
            public function show_height(){
                echo $this->height.'<br>';
            }
        }


        $coffee = new Food('コーヒー',200);
        $dog = new Animal('犬',30,3);


        print_r($coffee);
        echo '<br>';
        $coffee->show_price();
        print_r($dog);
        echo '<br>';
        $dog->show_height();





        

    ?>



        
    </p>
</body>

</html>