<?php
interface animal {
    public function has();
}

class giraffe implements animal {
    public function has() {
        echo "hello giraffe";
    }
}

class Cat implements animal {
    public function has() {
        echo "hello Cat";
    }
}
?>