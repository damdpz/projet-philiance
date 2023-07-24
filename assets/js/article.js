function LigneArticle (code, qte, prix)
{
    this.codeArticle = code;
    this.qteArticle = qte;
    this.prixProduit = prix;
    this.ajouterQte = function(qte)
    {
        this.qteProduit += qte;
    }
    this.getPrixLigne = function()
    {
        var resultat = this.prixProduit * this.qteProduit;
        return resultat;
    }
    this.getCode = function() 
    {
        return this.codeProduit;
    }
}