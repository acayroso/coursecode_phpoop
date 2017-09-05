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
    </body>
</html>