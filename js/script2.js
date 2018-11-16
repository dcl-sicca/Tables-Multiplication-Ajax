// Je sélectionne le select et quand la valeur change on fait une action
$('select[name="monselect"]').change(function(){
    // Je créer l'id du div qui va être affiché
    var id = "ma_div_" + $(this).val();
    // Je cache toutes les divs grâce à une classe qui va sélectionner le tout
    $('div.mes_divs').hide();
    // Et j'affiche seulement le Div que je souhaite
    $('#'+id).show();
});