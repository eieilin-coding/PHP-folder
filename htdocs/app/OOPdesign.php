<?php

interface Animal {
    public function hello();
}

class Dog implements Animal {
    public function hello(){
        echo "Hello Dog <br>";
    }
}

class Cat implements Animal {
    public function hello() {
        echo "Hello Cat <br>";
    }
}

function app(Animal $obj){
    $obj->hello();
}

app(new Dog);
app(new Cat);