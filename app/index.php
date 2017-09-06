<!-- 
    PHP Object Oriented Programming - Training
    Started: Sept 5, 2017
-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>PHP Object Oriented Programming - Training</title>
    </head>
    <body>
        <h1>PHP Object Oriented Programming - Training</h1>
        
        <h3>Introduction</h3>
            <section>
                <p>Creating Objects from a Class, used builtin stdClass()</p>
                    <?php
                        // Objects cre
                        $object = new stdClass();
                        $object->name = 'Adrian';
                        $object->skills = ['PHP','MySQL','HTML','CSS'];
                        
                        echo "Name: " . $object->name;
                        var_dump($object->skills);
                        
                        foreach($object->skills as $skill){
                            echo $skill . '<br/>';
                        }
                    ?>
            </section>
        
        <h3>Defining a class</h3>
            <section>
                <p>Creating a class and defining objects.</p>
                    <?php
                        require_once 'class/person.php';
                        
//                        $person = new Person();
//                        $person->name = 'Adrian';
//                        $person->location = 'Antipolo';
//                        $person->country = 'Philippines';
//                        
//                        echo "Name: {$person->name}" . "<br/>";
//                        echo "Location: {$person->location}" . "<br/>";
//                        echo "Country: {$person->country}" . "<br/>";
//                        
//                        $person->hello();
                    ?>
            </section>
        
         <h3>Constructors, Magic methods</h3>
            <section>
                <p>Using __constructor method.</p>
                    <?php
                        $person2 = new Person('Adrian', 'Antipolo', 'Philippines');
                        echo "Name: {$person2->name}" . "<br/>";
                        echo "Location: {$person2->location}" . "<br/>";
                        echo "Country: {$person2->country}" . "<br/>";
                        
                        $person2->hello();
                        
                    ?>
            </section>
         
         <h3>Inheritance</h3>
            <section>
                <p>Using inheritance to inherit properties and methods of Person class</p>
                    <?php
                        require_once 'class/Employee.php';
                        $emp = new Employee('Adrian', 'Antipolo', 'Philippines');
                        $emp->setCompany('Company T');
                        echo "Name: {$emp->name}" . "<br/>";
                        echo "Location: {$emp->location}" . "<br/>";
                        echo "Country: {$emp->country}" . "<br/>";
                        echo "Company: " . $emp->getCompany() . "<br/>";
                    ?>
            </section>
         
         <h3>Visibility</h3>
            <section>
                <p>private - can only be used by class where variable/method is defined.</p>
                <p>protected - only class and its sub class can use variable/method by super class</p>
                <p>public - all class that inherits a super class can call its variable/method</p>
                <p><strong>NOTE:</strong>How this is used in programming patterns?</p>
            </section>
         
         <h3>Dependency Injection</h3>
            <section>
                <p>Creating a class that inherits another class, through a constructor</p>
                <p><strong>NOTE:</strong>Need to understand examples and use.</p>
            </section>
         
         <h3>Implementation and interfaces</h3>
            <section>
                
            </section>
         
         <h3>Connecting to MySQL</h3>
            <section>
                <p>Code PHP to connect MySQL</p>
                <?php
                   
                    
                    // Check if the provided username and password from user is found in the database.
                    
                    
                ?>
            </section>
    </body>
</html>