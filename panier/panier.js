class Panier {
    constructor() {
        this.basket = [];    
        let basket = localStorage.getItem("basket");
        if (basket == null) {
            
        } else {
            this.basket = JSON.parse(basket);
        }
    }

    save() {
        localStorage.setItem("basket", JSON.stringify(this.basket));
    }
    add(produit) {

        let foundproduit = this.basket.find(p => p.id == produit.id);
        if (foundproduit != undefined) {
            foundproduit.quantite++;

        } else {

            produit.quantite = 1;
            this.basket.push(produit);
             this.save();
        }
        
    }
    remove(produit) {
        let btn = document.querySelector("#btn");
        addEventListener("click", function () {
            this.basket = this.basket.filter(p => p.id != produit.id);
            this.save();
          
        });
       
    }
    changeQuantite(produit, quantite) {

        let foundproduit = this.basket.find(p => p.id == produit.id);
        if (foundproduit != undefined) {
            foundproduit.quantite += quantite;
            if (foundproduit.quantite <= 0) {
                this.remove(foundproduit);
            } else {
                this.save(basket);
            }
        }

    }

    getNumberProduit() {

        let nb = 0;
        for (let produit of this.basket) {
            nb += produit.quantite;
        }
        return nb;
    }
    getTotalPrice() {

        let total = 0;
        for (let produit of this.basket) {
            total += produit.quantite * produit.price;
        }
        return total;
    }

}













