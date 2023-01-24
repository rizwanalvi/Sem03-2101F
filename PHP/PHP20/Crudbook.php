<?php
include 'Database.php';

class Crudbook extends Database {

    public function Read(){
        $rows[] = [];
        $stm  =  $this->connection->prepare("SELECT * FROM BOOKS");
        $stm->execute();
        $result = $stm->get_result();
                $html = "<div class='table-responsive'>
                <table class='table table-striped table-sm'>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>";
        for($i =0;$i<$result->num_rows;$i++){
            $row = $result->fetch_assoc();
                $html .= "  <tr>
                <td>".$row['ID']."</td>
                <td>".$row['TITLE']."</td>
                <td>".$row['AUTHOR']."</td>
                <td>".$row['PRICE']."</td>
                <td>
                <div class='btn-group'>
                    <a href='./edit.php?id=".$row['ID']."' class='btn btn-warning'>Edit</a>
                    <a href='#' class='btn btn-danger'>Delete</a>
                </div></td>
            </tr>";
               
        }
        $html .= " </table></div>";
        return $html;
    }

    public function ReadById($id ){
        $rows[] = [];
        $stm  =  $this->connection->prepare("SELECT * FROM BOOKS WHERE ID = ?");
        
        $stm->bind_param('i',$id);
        $stm->execute();
        $result = $stm->get_result();
        return $result;
    }
    public function Insert($obj){
        $title = $obj->getTitle();
        $author = $obj->getAuthor();
        $price = $obj->getPrice();
         $stm = $this->connection->prepare("INSERT INTO books(TITLE,AUTHOR,PRICE) VALUES (?,?,?)");
         $stm->bind_param("ssd",$title,$author,$price);
        // $stm->execute();
    }

    public function Update($obj){
        $title = $obj->getTitle();
        $author = $obj->getAuthor();
        $price = $obj->getPrice();
        $id = $obj->getId();
         $stm = $this->connection->prepare("UPDATE books SET TITLE=?,AUTHOR =?,PRICE=? WHERE ID = ?");
         $stm->bind_param("ssdi",$title,$author,$price,$id);
        $stm->execute();
    }

}
?>


  
</table>