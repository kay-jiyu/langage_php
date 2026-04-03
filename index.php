<?php

$recettes = [
[
    'Titre' => 'Cassoulet',
    'email' => 'alpha@gmail.com',
    'auteur' => 'alpha', 
    'est_certifie' => true, 
],
[
    'Titre' => 'Couscous',
    'email' => 'beta@gmail.com',
    'auteur' => 'beta',
    'est_certifie' => false,
],
[
    'Titre' => 'Riz',
    'email' => 'omega@gmail.com',
    'auteur' => 'omega',
    'est_certifie' => true,
],
[
    'Titre' => 'Nouilles',
    'email' => 'gamma@gmail.com',
    'auteur' => 'gamma',
    'est_certifie' => false,
],
];
function displayAuthor(string $authorEmail, array $users): string

{

    foreach ($users as $user) {

        if ($authorEmail === $user['email']) {

            return $user['auteur'] . ' a cuisiné du (' . $user['Titre'] . ')';

        }

    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recettes</title>
</head>
<body>
    <ul>
        <p>AFFICHAGE DES RECETTES</p>

        <?php /* for ($lines = 0; $lines < 3; $lines++): 
    
    // On vérifie si la clé existe ET si elle est à true pour cette ligne précise
    if (isset($recettes[$lines]['est_certifie']) && $recettes[$lines]['est_certifie'] === true): 
    ?>
        <li>
            <?php echo "Le {$recettes[$lines]['Titre']} est fait par ({$recettes[$lines]['auteur']})"; ?>
        </li>
    <?php endif; 
endfor; 
*/ ?>

<?php echo displayAuthor('beta@gmail.com', $recettes); ?>
</ul>
    
</body>
</html>
