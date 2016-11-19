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
        
        }
        $student = new Person();
        $teacher = new Person();
        echo $teacher ->isAlive;
        ?>
        
      </p>
    </body>
</html>