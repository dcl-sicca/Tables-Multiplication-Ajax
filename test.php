<?php
require_once 'connexion.php';
$req = $connexion->query('SELECT family FROM items GROUP BY family');
$req->execute();
$families = $req->fetchAll();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Test de select AJAX</title>
  <meta charset="utf8">
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
  <script type="text/javascript">
    $(function(){
      var form = $('#form'),
          family_select = $('#family'),
          url = form.attr('action'),
          items_container = $('#items');

      $('body').on('change', '#family', function(ev){
        $.post(
          url,
          form.serializeArray(),
          function(data){
            items_container.html(data);
          }
        );
      });
    });
  </script>
</head>
<body>


<form id="form" method="post" action="data.php">  
  <div id="families">
    <label for="family">Famille : </label>
    <select name="family" id="family">
      <option value="">--</option>
      <?php foreach( $families as $family) : ?>
      <option value="<?php echo $family['family']; ?>"><?php echo $family['family']; ?></option>
      <?php endforeach; ?>
    </select>
  </div>
  <div id="items"></div>
</form>
</body>
</html>

data.php
<?php
require_once 'connexion.php';

if( !isset($_POST['family']) || empty($_POST['family'])){
  echo '';
  return;
}

$family = htmlspecialchars($_POST['family']);

$sql = 'SELECT item FROM items WHERE family LIKE :family ORDER BY item';

$req = $connexion->prepare($sql);
$req->execute(array(':family' => $family));
$data = $req->fetchAll(PDO::FETCH_ASSOC);

$output = '<label for="item">Elément : </label>';
$output .= '<select name="item">';
$output .= '<option value="">--</option>';
foreach ($data as $item) {
  $output .= '<option value="' . $item['item'] . '">' . $item['item'] . '</option>';
}
$output .= '</select>';

echo $output;
return;
?>

--
-- Structure de la table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `family` varchar(255) CHARACTER SET latin1 NOT NULL,
  `item` varchar(255) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `items`
--

INSERT INTO `items` (`id`, `family`, `item`) VALUES
(1, 'Légume', 'Courgette'),
(2, 'Fruit', 'Fraise'),
(3, 'Fruit', 'Orange'),
(4, 'Fruit', 'Banane'),
(5, 'Légume', 'Navet'),
(6, 'Légume', 'Betterave')