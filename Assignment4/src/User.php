<?php
// src/AppBundle/Entity/Product.php
namespace Src;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="userslist")
 */

 /**
 * @IgnoreAnnotation("fn")
 */
class User
{
    /**
     * @ORM\Column(type="string", length=100)
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $userName;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $userEmail;

    public function setName($name){
        $this->userName = $name;
     }
     public function getName(){
        return $this->userName;
     }
     public function setEmail($name){
        $this->userName = $name;
     }
     public function getEmail(){
        return $this->userName;
     }

}


?>