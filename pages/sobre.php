<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BikeJÁ</title>
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>
    
<?php
include '../_inc/menu.php'
?>
<article style="margin-top:20px;margin-bottom: 15px;">

<h1 style="margin-left:150px">Sobre Nós</h1>
<p style="font-size: 16px">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur provident illum accusamus temporibus reprehenderit tempore cupiditate ea dolore quibusdam corporis iure aperiam aliquid veritatis maiores, esse expedita autem? Amet voluptates facilis quo reprehenderit nobis, consectetur debitis vitae aspernatur? Corrupti perferendis debitis incidunt delectus laboriosam facere eaque, deleniti consectetur repudiandae libero?</p>
</article>



<div class="sectiongrande">

            <div class="cadts" style="display: flex;">
                <img src="../img/ulticards.jpg" alt="" style="width: 450px;">
                <div class="textocards" style="margin-left: 15px;">
                    <h2 style="color: blue;margin-left:2px">Como Surgimos</h2>
                    <p style="max-width: 600px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus sit eum fuga at similique incidunt hic amet saepe tempore impedit explicabo modi recusandae maiores perferendis animi eaque, provident tempora aliquid. Voluptatum modi illum saepe aperiam nam error, aut velit minus fugit ullam quisquam neque beatae quia cum vel dolorum officiis?</p>
                </div>
            </div>
            <div class="cadts" style="display: flex;">

                <div class="textocards" style="margin-left: 15px;">
                    <h2 style="color: blue;margin-left:2px">Onde nos Encontrar</h2>
                    <p style="max-width: 600px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus sit eum fuga at similique incidunt hic amet saepe tempore impedit explicabo modi recusandae maiores perferendis animi eaque, provident tempora aliquid. Voluptatum modi illum saepe aperiam nam error, aut velit minus fugit ullam quisquam neque beatae quia cum vel dolorum officiis?</p>
                </div>
                <img src="../img/mapa.PNG" alt="" style="width: 450px;">
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
include '../_inc/footer.php';
?>

</body>
</html>
