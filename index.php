<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BikeJÁ</title>
    <link rel="stylesheet" href="./css/style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            color: #333;
        }

        h1 {
            text-align: center;
            margin: 20px 0;
        }


    </style>
</head>
<body>
    
<nav>
    <ul>
        <li><a href="index.php" style = "font-size: 18px;font-weight: bold;margin-right: 15px;">BikeJÁ</a></li>
        <li><a href="index.php">Home</a></li>
        <li><a href="./pages/galeria.php">Galeria</a></li>
        <li><a href="./pages/sobre.php">Sobre</a></li>
    </ul>
</nav>
<style>
    nav {
        background-color: black;
        overflow: hidden; /*  // essa função e pra quandp a navbar estourar e recortado e o resto e oculto  */
        left: 0;
        width: 100%;
        height: 50px;
        width: 100% ;
        top: 0;
   }
    nav ul {
        background-color: black;
        list-style-type: none;
        margin: 0;
        padding: 0;
        top: 0;


    }
    nav ul li {
    float: left;
    /* // alinha o elemento a esquerda */
    }
    nav ul li a {
        padding: 10px;
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }
    nav ul li a:hover {
        color: blue;
    }




</style>

<h1>Compre sua bicicleta agora!!</h1>

<img src="./img/abrir-uma-bicicletaria-1.jpg" alt="Imagem de uma bicicletaria" >


<article>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non, incidunt. Ad optio natus odio et hic explicabo, omnis, eveniet recusandae illo quam distinctio pariatur nam voluptate perspiciatis consequatur. Hic quia eos totam magnam mollitia debitis nisi voluptatum, eaque consequuntur dolore laudantium itaque odit aspernatur maiores minima veniam corrupti. Corporis impedit minus illo expedita minima aliquam nisi hic iste vitae blanditiis, accusamus tempore illum. Porro recusandae vitae accusantium cumque voluptate laudantium quas dolorem ex mollitia voluptates laboriosam quibusdam sapiente modi distinctio facere libero vero ipsam beatae, maiores minus voluptas cum perspiciatis. Deserunt, dolores! Rem voluptates quam nobis eveniet repellendus. Soluta, aliquid.</p>
</article>



<div class="sectiongrande"=>
            <div class="cads">
                <img src="./img/garantia.png" alt="">
                <h2>Garantia</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor orci vel neque semper, et ultricies nisl tristique.</p>
                <a href="#">Escolher</a>
            </div>
            <div class="cads">
                <img src="./img/entrega.png" alt="">
                <h2>Entrega Rapida</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor orci vel neque semper, et ultricies nisl tristique.</p>
                <a href="#">Escolher</a>
            </div>
            <div class="cads">
                <img src="./img/trofeu.png" alt="">
                <h2>Primeiro Lugar em Vendas</h2>
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
}
 .cads h2{
    text-align: center;
    margin-bottom: 2%;
}
 .cads p{
    text-align: justify;
    margin-bottom: 2%;
}
cads h2{
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

 
</section>





<div class="sectiongrande">

            <div class="cadts" style="display: flex;">
                <img src="./img/pro1.jpg" alt="" style="width: 450px;">
                <div class="textocards" style="margin-left: 15px;">
                    <h2 style="color: blue;margin-left:2px">Explore seus limites</h2>
                    <p style="max-width: 600px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus sit eum fuga at similique incidunt hic amet saepe tempore impedit explicabo modi recusandae maiores perferendis animi eaque, provident tempora aliquid. Voluptatum modi illum saepe aperiam nam error, aut velit minus fugit ullam quisquam neque beatae quia cum vel dolorum officiis?</p>
                </div>
            </div>
            <div class="cadts" style="display: flex;">

                <div class="textocards" style="margin-left: 15px;">
                    <h2 style="color: blue;margin-left:2px">Destaque: Mountain Bike PRO</h2>
                    <p style="max-width: 600px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus sit eum fuga at similique incidunt hic amet saepe tempore impedit explicabo modi recusandae maiores perferendis animi eaque, provident tempora aliquid. Voluptatum modi illum saepe aperiam nam error, aut velit minus fugit ullam quisquam neque beatae quia cum vel dolorum officiis?</p>
                </div>
                <img src="./img/pro2.jpg" alt="" style="width: 450px;">
            </div>


<style>
    .sectiongrande {
        flex-wrap: wrap;
        display:flex;
        justify-content: center;
    }
    .cadts{
    width: 65%;
    flex-wrap: wrap;
    display: flex;
    margin: 1% 4%;
    border: 1px solid black;
    padding: 1%;
    border-radius: 2%;
}
 .cadts h2{
    text-align: center;
    margin-bottom: 2%;
}
 .cadts p{
    text-align: justify;
    margin-bottom: 2%;
}
.cadts h2 {
    color: blue;
}
.cadts a{
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
.cadts a:hover{
    background-color: black;
    color: white;
    transform: scale(1.1);
    transition: 0.3s;
}
.cadts img{
    width: 100%;
    height: 300px;
    border-radius: 8%;
}
@media (max-width: 790px){
    .cadts{
        width: 98%;
    }

}
</style>
</div>








<?php
include './_inc/footer.php';
?>

</body>
</html>
