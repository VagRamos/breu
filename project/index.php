<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Breu Metal</title>
    <meta name="description" content="Banda de Thrash e Metal de Francisco Morato-SP">
    <meta name="keywords" content="Breu Metal, Breu, Rock, Morato, Rock Francisco Morato">
    <meta name="robots" content="index.php, follow">
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
    <section class="banner">
       
    </section>

    <section class="sobre">
        <h2>História da banda</h2>
        <p>Banda originária da "província" de Francisco Morato,   
        um município esquecido de São Paulo, exceto quando das trágedias
        que vendem boas matérias e dão audiência às mídias oportunistas.</p> 
    </section>

    <section class="contato">
        <!-- terminar formulário -->
        <h2>Entre em contato:</h2>
        <form action=""> 
            <div>
                <label>Nome:</label>
                <input id="nome" type="text" name="nome" placeholder="Seu nome">
            </div>
            <div>
                <label>Email:</label>
                <input id="email" type="email" name="email" placeholder="Seu email">
            </div>
            <div>
                <label>Assunto:</label>
                <input id="assunto" type="text" name="assunto" placeholder="Assunto">
            </div>
            <div>
                <label>Mensagem:</label>
                <textarea name="" id="mensagem" cols="15" rows="5" placeholder="Fala aí..."></textarea>
                <button><i class="fa fa-paper-plane fa-md"></i> Enviar</button>                
            </div>
        </form>
    </section>

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