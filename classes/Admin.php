<?php

class Admin extends User 
{
    public function delete(Sql $c,$email)
    {
        $requete = "DELETE FROM users WHERE useremail = '$email'";

        $c->insertion($requete);
    }
}
