# ClassRoom PHP 🚀

## 1. HTML – compléter le formulaire 

```php
    
<form method="post" action="traitement.php">
    # ajouter des champs login et mot de passe
    <label>
        <input type="checkbox" name="admin" value="1"> Vous admin
    </label>
    <button type="submit">Envoyer</button>
</form>
```
## 2. PHP – Traitement du formulaire

```php
<?php
# On vérifie si le formulaire est soumis
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        # Si la checkbox est cochée, et les autres champs sont remplies : true sinon, false
        $admin = isset($_POST['admin']) ? 1 : 0;

        print "<p>Valeur à enregistrer en base : " . $admin."</p>";
    }

# directory
📁 projet/
├── 📁 asset/
├── 📁 css/
├── 📁 controller/
└── 📄 index.php


```



![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white) ![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)