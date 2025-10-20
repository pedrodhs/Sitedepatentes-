<?php
class HomeController {
    public function index() {
        $titulo = "Bem-vindo ao meu site!";
        include 'app/views/templates/header.php';
        include 'app/views/home.php';
        include 'app/views/templates/footer.php';
    }
}
