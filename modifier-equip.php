<?php
// Inclure le fichier de configuration de la base de données si nécessaire
$serveur = "mysql-technicien.alwaysdata.net";
$utilisateur = "326466";
$mot_de_passe = "qwerty@1234567890";
$base_de_donnees = "technicien_bd";

$connexion = new mysqli($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);

// Vérification de la connexion à la base de données
// if ($connexion->connect_error) {
//     die("La connexion à la base de données a échoué : " . $connexion->connect_error);
// } // Assurez-vous d'ajuster le nom du fichier si besoin
// $nom = $_POST['nom'];
// $sexe = $_POST['sexe'];
// $adresse = $_POST['adresse'];
// $telephone = $_POST['telephone'];
                                
// Vérifiez si un ID d'utilisateur est passé en paramètre
// if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    // Supprimez l'utilisateur avec l'ID spécifié
    
//    $id_utilisateur = $_GET['id'];
//    $sql = "UPDATE technicien (nom,sexe,adresse,telephone,statut) SET ( '$nom',  '$sexe',  '$adresse','$telephone' ) WHERE id = $id_utilisateur";
 //update technicien set nom=$nom,............, where id=
//    if ($connexion->query($sql) === TRUE) {
//  header('Location: tables.php');

// } else {
//     echo "Erreur lors de l'inscription : " . $connexion->error;
// }
// }

// Fermer la connexion à la base de données
// $connexion->close();

// Récupérer les nouvelles données du formulaire
$nom = $_POST['nom'];
$quantite = $_POST['quantite'];
$prix = $_POST['prix'];
$date = $_POST['date'];
$fournisseur = $_POST['fournisseur'];


// Mettre à jour l'utilisateur avec l'ID spécifié
$id_utilisateur = $_GET['id'];
$sql = "UPDATE equipement SET nom = '$nom', prix = '$prix', quantite = '$quantite', date = '$date', fournisseur = '$fournisseur' WHERE id = $id_utilisateur";
 if ($connexion->query($sql) === TRUE) {
 header('Location: form-components.php');

} else {
    echo "Erreur lors de l'inscription : " . $connexion->error;
}
?>

