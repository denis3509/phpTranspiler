<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php

//ip2long()
$ip   = gethostbyname('www.example.com');
$long = ip2long($ip);
if ($long == -1) {
    echo 'Неверный IP-адрес, попробуйте еще раз';
} else {
    echo $ip   . "\n";            // 192.0.34.166
    echo $long . "\n";            // -1073732954
    printf("%u\n", ip2long($ip)); // 3221234342
}
?>
<br>
<?php
class Person {
    public  string $name;
    function __construct(string $name) {
        $this->name = $name;
    }
    public function sayName() {
        echo 'My name is' . $this->name;
    }
}

class Employee extends Person {
    public string $position;
    function __construct(string $name, string $position) {
        parent::__construct($name);
        $this->position = $position;
    }
}

$employee = new Employee('Ivan', 'mechanic');
?>
<?php
// get_class(), get_parent_class() и get_class_methods()
echo 'get class: ' . get_class($employee) . " \n";
echo 'get_parent_class: ' . get_parent_class($employee) . "\n";
echo 'get_class_methods: ' ;
echo var_dump(get_class_methods($employee)) . "\n";
?>

</body>
</html>



