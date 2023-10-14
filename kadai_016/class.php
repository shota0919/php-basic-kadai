<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
     <p>
         <?php
    class Food {                  
       private $name;
       private $price;

       public function set_food(string $name, int $price,) {
        $this->name = $name;
        $this->price = $price;
    }
    public function show_price() {
        echo $this->price;
    }      
    }
    $food = new Food();
    $food->set_food('potato', 250);   
    print_r($food);
    echo "<br/>";
    class Animal {
                      
       private $name;
       private $height;
       private $weight;

        public function set_animal(string $name, int $height, int $weight) {
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
        }

        public function show_height() {
            echo $this->height . '<br>';
        }
    }

    $animal = new Animal();
    $animal->set_animal('dog', 60, 5000);

   print_r($animal);
   echo "<br/>";

   $food->show_price();
   echo "<br/>";


   $animal->show_height() ;
   
    ?>
   </p>
 </body>
 </html>
