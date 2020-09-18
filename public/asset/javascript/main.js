// Filtre Javascript Tableau
$(document).ready(function(){
    $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });

    // Filtre Intervalle de prix
    $("#range").on("change", function() {
        //Borne min
        let min = 0;
        //recuperation de la valeur du datatable
        var value = $(this).val().toString();
        //pour chaque element du tableau de la ligne contenant la class '.priceSearch'
        //alors ...
        $("#myTable tr .priceSearch").each(function(){
            //Recuperation en string pour enlever le €
            let recupPrix = $(this).html().slice(0, -2).toString();
            //Conversion en int pour eviter les BUGS du if
            recupPrix = recupPrix * 1;
            //Si le prix est superieur a la borne min ET inferieur a ma valeur du datatable
            if((recupPrix > min) && (recupPrix <= value)){
                //alors j'affiche les lignes contenant '.priceSearch'
                $(this).parent().show();
            }else{
                //sinon je cache
                $(this).parent().hide();
            }
        })
    });

});