<?php
    $title = "Home";
    require_once "./utils/utils.php";
    require_once "./entity/ImagenGaleria.php";
    $galeria[] = new ImagenGaleria("1.jpg","Descripcion imagen 1",1 , 3 ,6);
    $galeria[] = new ImagenGaleria("2.jpg","Descripcion imagen 2",2 , 2 ,6);
    $galeria[] = new ImagenGaleria("3.jpg","Descripcion imagen 3",3 , 3 ,6);
    $galeria[] = new ImagenGaleria("4.jpg","Descripcion imagen 4",4 , 8 ,6);
    $galeria[] = new ImagenGaleria("5.jpg","Descripcion imagen 5",5 , 5 ,6);
    $galeria[] = new ImagenGaleria("6.jpg","Descripcion imagen 6",6 , 8 ,6);
    $galeria[] = new ImagenGaleria("7.jpg","Descripcion imagen 6",7 , 6 ,6);
    $galeria[] = new ImagenGaleria("8.jpg","Descripcion imagen 8",8 , 1 ,6);
    $galeria[] = new ImagenGaleria("9.jpg","Descripcion imagen 9",19 , 9 ,6);
    $galeria[] = new ImagenGaleria("10.jpg","Descripcion imagen 10",10 , 13 ,6);
    $galeria[] = new ImagenGaleria("11.jpg","Descripcion imagen 11",11 , 10 ,6);
    $galeria[] = new ImagenGaleria("12.jpg","Descripcion imagen 1",12 , 5 ,6);

    include("./views/index.view.php");