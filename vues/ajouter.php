<?php
    if(!isset($succes)){
?>

<div class="ajouter">
    <div class="form-style-8" style="padding-top: 50px;">


            <h2>Ajout d'une bouteille de la SAQ au cellier</h2>

    <div class="nouvelleBouteille" vertical layout>
        Recherche : <input type="text" name="nom_bouteille">
        <ul class="listeAutoComplete">

        </ul>
        <input type="hidden" name="id_cellier" value=<?= $datacell[0]['id'] ?> />
            <div class="form-style-8" style="padding-top: 0;">
                <span id="nom_bouteille" class="error-message"></span>    
                <p>Nom : <span data-id="" class="nom_bouteille"></span></p>
                <span id="millesime" class="error-message"></span>
                <p><input type="number" name="millesime" placeholder="Entrez une année" ></p>
                <span id="quantite" class="error-message"></span>
                <p><input type="number" name="quantite" placeholder="Quantite"></p>
                <!-- <p>Notes sur 10: <input name="notes"></p> -->
                <span id="date_achat" class="error-message"></span>
                <p>Date achat : <input type="date" name="date_achat"></p>
                <span id="garde_jusqua" class="error-message"></span>
                <p>Garde : <input type="date" name="garde_jusqua"></p>
 
            </div>

            <div data-id="<?php echo $_GET['id'] ?>">
                <button name="ajouterBouteilleCellier" class="top button-28">Ajouter la bouteille</button>
            </div>

        </div>
    </div>
</div>
</div>
<?php
}else{
    echo '<h1>' . $succes . '</h1>';
    echo '<h2>Vous avez belle et bien ajoutez une nouvelle bouteille SAQ dans votre cellier</h2>';
    echo '<div data-id=' . $datacell[0]['id'] .'><button class="cellierid button-28">Accéder a votre cellier</button></div>';
}
?>