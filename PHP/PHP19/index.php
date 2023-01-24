<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
    <div class="form-group">
<input type="text" class="form-control" id="txtSearch">
</div>

    </div>
    <div class="col-md-4"></div>
</div>

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL ID</th>
      <th scope="col">BATCH ID</th>
    </tr>
  </thead>
  <tbody>
    
    
  </tbody>
</table>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>


<script>
$(function(){
    $('#txtSearch').keyup(function(){
        $data = $(this).val();
        $.ajax({
        type: "GET",
        url: "read.php",
        data: {data:$data},
        dataType: "JSON",
        success: function (response) {
            console.log(response.length);
            $('tbody').empty();
            for(var i=0;i<response.length;i++){
               
                $('tbody').append(`<tr><th >${response[i][0]}</th><td>${response[i][1]}</td><td>${response[i][2]}</td><td>${response[i][4]}</td></tr>`);

            }
        }
    });
});

    });
   
</script>