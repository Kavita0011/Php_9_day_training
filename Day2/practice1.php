<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day2</title>
</head>
<body>
    <h1>Oops concept </h1>
    <?php 
    class Table{
        public $a,$b,$c,$result;
        function table(){
            for($i=0;$i<=$this->b;$i++){
                $this->c=$this->a*$i;
           $this->result .="<br/> $this->a * $i =".$this->c;
            }
            
             return $this->result;
        }
    }
    $calc=new Table();
    $calc->a=97;$calc->b=10;
    echo $calc->table();
// working with constructor
    class Calculator{
        public $a,$b,$c,$result;
        function __construct($n,$value){
            $this->b=$value;
            $this->a=$n;
        }
        function table(){
            for($i=0;$i<=10;$i++){
                $this->c=$this->a*$i;
           $this->result .="<br/> $this->a * $i =".$this->c;
            }
            
             return $this->result;
        }
    }
    $calc=new Calculator(19,10);
    echo $calc->table();

    ?>
</body>
</html>