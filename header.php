<!--?php
        $saisie=$saisieerr="";
        if($_SERVER['REQUEST_METHOD']=="POST")
        {
            if(empty($_GET['saisie'])) $saisieerr="Champ requis!!!!";
            else{
                $saisie=$_GET['saisie'];
            }
        }
    ?-->

        <div class="header">TO-DO-LIST</div>
            
