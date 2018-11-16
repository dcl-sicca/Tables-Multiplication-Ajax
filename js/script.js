/* (function($){
    $('.table').on('change', '.choixTable', function(e){
        e.preventDefault();
        var $a = $(this);
        var url = $a.attr('href');
        var test = 0;
        $.ajax(url)
            .done(function(data, text, jqxhr){
                $a.parents('tr').fadeOut();
            })
            .fail(function(jqxhr){
                alert(jqxhr.responseText);
            })
            .always(function(){
                $a.text('supprimer');
            });
    });

})(jQuery); */


// Je sélectionne le select et quand la valeur change on fait une action
$('select[name="choixTable"]').change(function(){
    // Je créer l'id du div qui va être affiché
    var id = "afficheTable" + $(this).val();
    // Je cache toutes les divs grâce à une classe qui va sélectionner le tout
    $('div.mes_divs').hide();
    // Et j'affiche seulement le Div que je souhaite
    $('#'+id).show();
});