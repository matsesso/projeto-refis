<?php
    $cro = $_GET["cro"];
?>

<?php
    include 'includes/header.php'
?>

<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "database";
    $connection = mysqli_connect($host, $user, $password) or die(mysqli_error());
    mysqli_select_db($connection, $database) or die(mysqli_error());
?>

<?php
    $sql = "SELECT * FROM tabela WHERE cro = '$cro'";
    $query = mysqli_query($connection, $sql);
    $row = mysqli_num_rows($query);
    if($row > 0) {
        while($linha = mysqli_fetch_array($query)) {
            $cro = $linha['cro'];
        }
    }
?>

        <div class="jumbotron jumbotron-fluid d-flex align-items-center">
        <div class="container">
         <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                    <br/><br/>
                    <h2 id="info" class="card-text" style="text-align: center;">Caso não seja redirecionando para a campanha de pagamento do CRO-<?php echo $cro; ?> acesse 
                    <a href="https://cro-<?php echo $cro; ?>.implanta.net.br/ServicosOnline/Publico/CampanhasPagamento/LoginCampanha/"target="_blank">este link.</a></h2>
                             <br/>
                             <br/>
                            <div class="box text-center">
                                <a style="color:#8E0F12;text-decoration:none;" href="index.php">
                                <i class="fa fa-home fa-2x"></i></br>
                                <small class="text-secondary">Clique para retornar</small>
                                <h5>Pagina inicial</h5>
                                </a>
    		                </div>
                            <script>
                                setTimeout(function () {
                                window.location.href= 'https://cro-<?php echo $cro; ?>.implanta.net.br/ServicosOnline/Publico/CampanhasPagamento/LoginCampanha/';
                            }, 100);
                            </script>
            </div>

    </div>

<?php
    include 'includes/footer.php'
?>