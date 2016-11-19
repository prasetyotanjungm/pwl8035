<!DOCTYPE html>
<html>
	<head>
	  <title>Rekontruksi Person Class</title>
      <link type='text/css' rel='stylesheet' href='style.css'/>
	</head>
	<body>
      <p>
        <?php
        class Person{
        public $isAlive = true;
        public $firstname = "Muhammad";
        public $lastname = "Tanjung";
        public $age = 20;
        
        
        public function __construct($firstname, $lastname, $age) {
              $this->firstname = $firstname;
              $this->lastname = $lastname;
              $this->age = $age;
            }
            
           
        public function greet() {
              return "Hello, my name is " . $this->firstname . " " . $this->lastname . ". Nice to meet you! :-)";
            }
        }
          
        
        $me = new Person('boring', '12345', 12345);
     
        echo $me->greet(); 
        ?>
      </p>
    </body>
</html>