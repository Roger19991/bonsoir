    $(document).ready(function(){
    $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });

    $("#range").on("change", function() {
    let min = 0;
    var value = $(this).val().toString();
    $("#myTable tr .priceSearch").each(function(){
    let recupPrix = $(this).html().slice(0, -2).toString();

    if((recupPrix > min) && (recupPrix <= value)){
    $(this).parent().show();
}else{
    $(this).parent().hide();
}
})
    /*$("#myTable tr").filter(function() {
        $("#myTable tr").toggle($("#myTable tr .priceSearch").text().toLowerCase().indexOf(value) > -1)
    });*/
});

});
