<?php

// .class no nome do arquivo para diferenciar as classes

class Usuario {
    public function __construct(
        public string $nome = "", 
        public string $email = "", 
        public string $senha = "")
    {}
}

?>