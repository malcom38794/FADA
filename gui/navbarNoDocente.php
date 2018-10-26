<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <a class="navbar-brand" href="#">
        <img src="../lib/img/canva-photo-editor.png" width="80" height="40" class="d-inline-block align-top" alt="">
        F.A.D.A.
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="toggle navigation">
        <span class="navbar-toggler-icon"></span>   
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            
            <li class="nav-item">
                <a class="nav-link" href="../app/PantallaSecretariaAcademica.php">
                    <span class="oi oi-file" />
                    Inicio
                </a>
            </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="../app/salir.php">
                        <span class="oi oi-account-logout" /> 
                        Salir
                    </a>
                </li>
            </ul>
        </div>
    </nav>


    <div class="alert alert-info alert-dismissible fade show" role="alert">
        Ud. est&aacute; conectad@ como <strong><?= $_SESSION['usuario']->nombre; ?></strong>.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>