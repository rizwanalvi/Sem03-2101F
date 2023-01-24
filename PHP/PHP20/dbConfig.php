<?php

function UpdateBooks($row){
    if(is_array($row)){
        $id =8;
        $title = "Rohan Biblography";
        $AUTHOR = "Hamdan";
        $mysqli = new mysqli("localhost:3325","root","","bookstoredb");
        $stm = $mysqli->prepare("UPDATE books SET TITLE = ?, AUTHOR =? WHERE ID = ?");
        $stm->bind_param("ssi",$title,$AUTHOR,$id);
        $stm->execute();

    }
   

}