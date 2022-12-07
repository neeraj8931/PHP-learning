<?php declare(strict_types=1);


// Before PHP 8
// class Author{
//     public string $name;
//     public string $age;
//     public function __construct($name,$age){
//         $this->name = $name;
//         $this->age = $age;
//     }
// }

// After PHP 8
class Author{
    public function __construct(
        private string $name,
        private int $age
    
    ){}

    public function getName():string{
        return $this->name;
    }
    public function getAge():int{
        return $this->age;
    }
}
?>