<?php

class tasks

{
public $name;
public $description;
public $author; 
public $state;  

public function __construct($name,$description,$author,$state);
{
    $this->name=$name;
    $this->description=$description;
    $this->author=$author;
    $this->state=$state; 
    
}

$tasks = [
    [
        "Name" => "Chequear pedido",
        "Description" => "Revisar los telefonos comprados",
        "Author" => "Gabriela Puerta", 
        "Status" => "True"

    ], 

    [
       "Name" => "Almacenar pedido",
       "Description" => "Guardar telefonos en el almacen", 
       "Author" =>"Sr Luis Miguel", 
       "Status" => "True"

    ], 

    [
        "Name"=>" Registrar en la Base de Datos el pedido",
        "Description" => "Guardar en la BDD cada uno de los productos adquiridos",
        "Author" => "Sra Elvira Alvarado", 
        "Status" => "False"
    ]
]
public function fullname()

{
    return "{$this->name} {$this->description} {$this->author} {$this->state} ";

}


}
}






?>