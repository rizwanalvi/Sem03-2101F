<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<?php
if(isset($_POST['btnSend'])){
$txtTo = $_POST['txtTo'];
$txtsubject = $_POST['txtsubject'];
$txtMessage = $_POST['txtMessage'];   

$to = $txtTo;
$subject=$txtsubject;
$message= $txtMessage;
$header ="From:apexdevrizwan@gmail.com\r\n";
$mailing = mail($to,$subject,$message,$header);
if($mailing == true){
    echo "Message send successfully....";
}
else{
    echo "Message could not be sent....";
}

}
?>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
    <form action="" method="post">
    <div class="form-group">
        <label for="">To</label>
        <input type="text" id="" class="form-control" name="txtTo">
    </div>
    <div class="form-group">
        <label for="">Subject</label>
        <input type="text" id="" class="form-control" name="txtsubject">
    </div>
    <div class="form-group">
        <label for="">Message</label>
      <textarea name="txtMessage" id="" cols="30" rows="10" class="form-control"></textarea>
    </div>
    <div class="form-group">
    <input type="submit" value="Send" class="btn btn-success" name="btnSend">    
</div>
</form>

    </div>
    <div class="col-md-4"></div>
</div>
