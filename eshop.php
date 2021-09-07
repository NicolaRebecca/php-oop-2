<!-- 1. creiamo l'eshop -->
<!-- 2. creiamo diversi prodotti -->
<!-- 3. aggiungiamoli all'eshop -->
<!-- 4. creaiamo l'utente normale -->
<!-- 5. creiamo un utente premium -->
<!-- 6. inseriamo le carte di credito per ciascun utente -->
<!-- 6. l'utente normale acquista un prodotto -->
<!-- 7. l'utente premium acquista un altro prodotto (e riceve lo sconto) -->

<?php


class EShop {
    // mettiamo una lista di prodotti
    public $name;  
    public $website;
    public $prodotti = [];

    public function __construct(string $nomeShop, string $sitoWeb)
    {
        $this->name = $nomeShop;
        $this->website = $sitoWeb;   
    }

    public function addProduct(Product $nomeProdotto) {
        $this->prodotti[] = $nomeProdotto;
    }
    
    public function getProducts() {
        return $this->prodotti;
    }

}

//---------------------------------------------


class Product {

    public $label;
    public $category;
    public $price;

}

Class TechProduct extends Product {

    public $label;
    public $category;
    public $price;
    public $model;


}

Class BeautyProduct extends Product {

    public $label;
    public $category;
    public $price;
    
}

// ---------------------------------------------


class User {

    private $id;
    public $sconto = 0;
    public $name;
    public $surname;
    private $address;
    private $creditCards = [];
    private $payments =[];
    private $orders = [];

}


class PremiumUser {

    // qui dentro potrebbe avere la definizione di una percentuale di 
    // sconto per ogni prodotto.
    public $sconto = 50;


}

// ----------------------------------------------


$eshop = new Eshop ('digitex', 'shop.digitex.com');

