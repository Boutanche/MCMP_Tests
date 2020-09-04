<?php
if (!empty($_POST['name_img']) && !empty($_FILES['news_img'])){
    if (0 == $_FILES['news_img']['error']){
        //déplacer le fichier
        $upload_news_img = './img/upload/news/';
        $img_info = new SplFileInfo($_FILES['news_img']['name']);
        $extension = $img_info->getExtension();
        $new_img = $_POST['name_img'].'.'.$extension;
        move_uploaded_file($_FILES['news_img']['tmp_name'], $upload_news_img.$new_img);
    }
    //Sinon affiche moi une erreur et le var_dump
    var_dump($_FILES['news_img']);
}