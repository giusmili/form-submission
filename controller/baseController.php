<?php
class Admin{
      # On vérifie si le formulaire est soumis
    static function admin(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            # Si la checkbox est cochée, et les autres champs sont remplies : true sinon, false
            $login = isset($_POST["login"]) ? $_POST["login"] : 0;
            $password = isset($_POST["password"]) ? password_hash($_POST["login"], PASSWORD_DEFAULT) : false;
            $admin = isset($_POST['admin']) ? 1 : 0;

     
            print "<li>✅ Admin : " .$admin. "</li>
            <li>✅ Login: ".$login. "</li><li>✅ Password : ".$password."</li>";
        }
    }


}
Admin::admin();
