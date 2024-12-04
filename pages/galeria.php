<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/galeria.css">
</head>
<body>
    
<?php include '../_inc/menu.php'; ?>

<h1>Opções Disponiveis para Compra</h1>



<div class="sectiongrande"=>
            <div class="cads">
                <img src="../img/bike1.webp" alt="">
                <h2>Garantia</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor orci vel neque semper, et ultricies nisl tristique.</p>
                <a href="#">Escolher</a>
            </div>
            <div class="cads">
                <img src="../img/bike2.webp" alt="">
                <h2>Entrega Rapida</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor orci vel neque semper, et ultricies nisl tristique.</p>
                <a href="#">Escolher</a>
            </div>
            <div class="cads">
                <img src="../img/bike3.webp" alt="">
                <h2>Primeiro Lugar em Vendas</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor orci vel neque semper, et ultricies nisl tristique.</p>
                <a href="#">Escolher</a>
            </div>
            <div class="cads">
                <img src="../img/bike4.webp" alt="">
                <h2>Garantia</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor orci vel neque semper, et ultricies nisl tristique.</p>
                <a href="#">Escolher</a>
            </div>
            <div class="cads">
                <img src="../img/bike1.webp" alt="">
                <h2>Garantia</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor orci vel neque semper, et ultricies nisl tristique.</p>
                <a href="#">Escolher</a>
            </div>
            <div class="cads">
                <img src="../img/bike2.webp" alt="">
                <h2>Entrega Rapida</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor orci vel neque semper, et ultricies nisl tristique.</p>
                <a href="#">Escolher</a>
            </div>
            <div class="cads">
                <img src="../img/bike3.webp" alt="">
                <h2>Primeiro Lugar em Vendas</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor orci vel neque semper, et ultricies nisl tristique.</p>
                <a href="#">Escolher</a>
            </div>
            <div class="cads">
                <img src="../img/bike4.webp" alt="">
                <h2>Garantia</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor orci vel neque semper, et ultricies nisl tristique.</p>
                <a href="#">Escolher</a>
            </div>


<style>
    .sectiongrande {
        flex-wrap: wrap;
        display:flex;
        justify-content: center;
    }
    .cads{
    width: 20%;
    flex-wrap: wrap;
    margin: 1% 4%;
    border: 1px solid black;
    padding: 1%;
    border-radius: 2%;
    box-shadow: 0 2px 6px #404040;
}

 .cads h2{
    text-align: center;
    margin-bottom: 2%;
}
 .cads p{
    text-align: justify;
    margin-bottom: 2%;
}
.cads h2 {
    color: blue;
}
.cads a{
    width: 20%;
    margin-bottom: 2%;
    display: block;
    text-align: center;

    text-decoration: none;
    color: black;
    background-color: black;
    color: white;
    border: 1px solid black;
    border-radius: 5px;

}
.cads a:hover{
    background-color: black;
    color: white;
    transform: scale(1.1);
    transition: 0.3s;
}
.cads img{
    width: 100%;
    height: 300px;
    border-radius: 8%;
}
@media (max-width: 790px){
    .cads{
        width: 98%;
    }

}
</style>

</div>

<?php include '../_inc/footer.php'; ?>

</body>
</html>
