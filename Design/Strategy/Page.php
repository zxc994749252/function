<?php
require_once "Loader.php";

class Page
{
    protected $strategy;
    function index(){
        echo "AD";
        $this->strategy->showAd();
        echo "<br>";
        echo "Category";
        $this->strategy->showCategory();
        echo "<br>";
    }
    function setStrategy(UserStrategy $strategy){
        $this->strategy=$strategy;
    }
}

$page = new Page();
if(isset($_GET['male'])){
    $strategy = new FemaleUsesr();
}else {
    $strategy = new MaleUsesr();
}
$page->setStrategy($strategy);
$page->index();