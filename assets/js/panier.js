function Panier()
{
    this.liste = [];
    this.ajouterProduit = function(code, qte, prix)
    { 
        var index = this.getProduit(code);
        if (index == -1) this.liste.push(new LigneProduit(code, qte, prix));
        else this.liste[index].ajouterQte(qte);
    }
    this.getPrixPanier = function()
    {
        var total = 0;
        for(var i = 0 ; i < this.liste.length ; i++)
            total += this.liste[i].getPrixLigne();
        return total;
    }
    this.getProduit = function(code)
    {
        for(var i = 0 ; i <this.liste.length ; i++)
            if (code == this.liste[i].getCode()) return i;
        return -1;
    }
    this.supprimerProduit = function(code)
    {
        var index = this.getProduit(code);
        if (index > -1) this.liste.splice(index, 1);
    }
}