<!DOCTYPE html>
<html>
<body>
<?php
interface gerald {
    public function makeSound();
}

class ciri implements gerald {
    public function makeSound() {
        echo "vive the witcher";
    }
}

$animal = new ciri();
$animal->makeSound();
?>
</body>
</html>

