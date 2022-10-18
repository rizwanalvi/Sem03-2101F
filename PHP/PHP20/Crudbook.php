<?php
include 'Database.php';

class Crudbook extends Database {

    public function Read(){
        $rows[] = [];
        $stm  =  $this->connection->prepare("SELECT * FROM BOOKS");
        $stm->execute();
        $result = $stm->get_result();
                $html = "
                <table class='table'>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Price</th>
                    </tr>";
        for($i =0;$i<$result->num_rows;$i++){
            $row = $result->fetch_assoc();
                $html .= "  <tr>
                <td>".$row['ID']."</td>
                <td>".$row['TITLE']."</td>
                <td>".$row['AUTHOR']."</td>
                <td>".$row['PRICE']."</td>
            </tr>";
               
        }
        $html .= " </table>";
        return $html;
    }
    public function Insert($obj){
        $title = $obj->getTitle();
        $author = $obj->getAuthor();
        $price = $obj->getPrice();
         $stm = $this->connection->prepare("INSERT INTO books(TITLE,AUTHOR,PRICE) VALUES (?,?,?)");
         $stm->bind_param("ssd",$title,$author,$price);
        // $stm->execute();
    }

}
?>


  
</table>