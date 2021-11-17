<?php 


class Cproduct {


private $pdo;

public  function __construct($config)
{
    try {
        $this->pdo=new PDO(
            $config['connection'].';dbname='.$config['name'],
            $config['username'],
            $config['password'],
            $config['options']
        );
      
    }
    catch(PDOException $e)
    {
        print $e->getMessage();
    }
}

public function GetItems(int $cnt) 
{
    if($cnt){
        $statement=$this->pdo->prepare("
        Select   * From Products as P
        ORDER BY DATE_CREATE DESC
        LIMIT ${cnt}
        
    
         ");
         $statement->execute();
         $result=$statement->fetchAll(PDO::FETCH_OBJ);
         return $result;
    }
    
}
public function hideItem($id) {
   $statement=$this->pdo->prepare("
       UPDATE products as p
       SET visability=0 
       where p.id={$id}
   ");
   $statement->execute();
}
public function changeQnt($id,$qnt)
{   
    
    $statement=$this->pdo->prepare("
       UPDATE products as p
       SET PRODUCT_QUANTITY={$qnt}
       where p.id={$id}
   ");
   $statement->execute();
   

}

}