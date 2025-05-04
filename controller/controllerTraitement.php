<?php
    # 2. Traitement du formulaire
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération des données
    $login    = $_POST['login'];
    $password = $_POST['password'];
    $admin    = isset($_POST['admin']) ? 1 : 0;

    # Hachage du mot de passe
    $hash = password_hash($password, PASSWORD_DEFAULT);

    # Préparation et exécution de la requête
    $sql = 'INSERT INTO form_submissions (login, password, admin) VALUES (?, ?, ?)';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$login, $hash, $admin]);

    # ID de la nouvelle entrée il vaut mieux vérifier
    $lastId = $pdo->lastInsertId();

    # Redirection après succès
    header("Location: index.php?success=1&id=$lastId");
    exit;
}
# 3. Récupération de toutes les soumissions
$sqlAll = 'SELECT id, login, admin, created_at FROM form_submissions ORDER BY created_at DESC';
$stmtAll = $pdo->query($sqlAll);
$submissions = $stmtAll->fetchAll();


