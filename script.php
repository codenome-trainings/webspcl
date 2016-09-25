<?php
include("modal-credits.php");
include("modal-acessibilidade.php");
include("modal-formulario.php");
?>

<!--SCRIPTS NECESSÁRIOS PARA O BOOTSTRAP-->
<script src="js/bootstrap.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/font-size.js"></script>
<script src="js/muda-estilo.js"></script>

<script>
    $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').focus()
    })

    $('.collapse').collapse();
</script>