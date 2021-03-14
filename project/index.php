<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Breu Metal</title>
    <meta name="description" content="Banda de Thrash e Metal de Francisco Morato-SP">
    <meta name="keywords" content="Breu Metal, Breu, Rock, Morato, Rock Francisco Morato">
    <meta name="robots" content="index, follow">
    <meta name="author" content="vagner Ramos">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lacquer&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="#img/breu-icon.png"> 
</head>
<body>

    <header class="cabecalho">
        <a href="index.php"><h1 class="logo">Breu Metal</h1></a>
         <button class="btn-menu"><i class="fa fa-bars fa-lg"></i></button>
        <nav class="menu">
            <a class="btn-close"><i class="fa fa-times"></i></a>
            <ul>
                <li><a class="" href="#">Home</a></li>
                <li><a class="" href="#">Que Breu?</a></li>
                <li><a class="" href="#">Vídeos</a></li>
                <li><a class="" href="#">Contato</a></li>
            </ul>
        </nav>
    </header>
    <div class="banner">
        <div class="caixa">
            <!-- <h2> BREU Metal!</h2>
            <h3>Banda originária da "província" de Francisco Morato,   
                um município esquecido de São Paulo, exceto quando das trágedias
                que vendem boas matérias e dão audiência às mídias oportunistas.</h3> -->
        </div>
    </div>

    <div>
        <p>Banda originária da "província" de Francisco Morato,   
        <br/>um município esquecido de São Paulo, exceto quando das trágedias
        <br/>que vendem boas matérias e dão audiência às mídias oportunistas.</p> 
    </div>

    <div class="contato">
    <!-- terminar formulário -->
        <form action=""> 
            <div>
                <label for="">Nome:</label>
                <input type="text">
            </div>
            <div>
                <label for="">Email:</label>
                <input type="email">
            </div>
            <div>
                <label for="">Mensagem:</label>
                <textarea name="" id="" cols="15" rows="5"></textarea>
            </div>
        </form>
    </div>

    <footer>
        <p>2021 &copy; BREU Metal. Todos os direitos reservados.</p>
    </footer>

<script src="https://code.jquery.com/jquery-3.0.0.js"></script>
<script>
    $(".btn-menu").click(function(){
        $(".menu").show();
    });
    $(".btn-close").click(function(){
        $(".menu").hide();
    });
</script>
</body>
</html>