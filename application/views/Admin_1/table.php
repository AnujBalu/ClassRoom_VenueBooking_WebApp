
      <!-- partial -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap Table with Add and Delete Row Feature</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css\vertical-layout-light\table_style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    color: #404E67;
    background: #F5F7FA;
    font-family: 'Open Sans', sans-serif;
}
.table-wrapper {
    width: 1000px;
    margin: 30px auto;
    background: #fff;
    padding: 20px;  
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {
    padding-bottom: 10px;
    margin: 0 0 10px;
}
.table-title h2 {
    margin: 6px 0 0;
    font-size: 22px;
}
.table-title .add-new {
    float: right;
    height: 30px;
    font-weight: bold;
    font-size: 12px;
    text-shadow: none;
    min-width: 200px;
    border-radius: 2px;
    line-height: 25px;
}
.table-title .add-new i {
    margin-right: 4px;
}
table.table {
    table-layout: fixed;
}
table.table tr th, table.table tr td {
    border-color: #e9e9e9;
}
table.table th i {
    font-size: 200px;
    margin: 0 5px;
    cursor: pointer;
}
table.table th:last-child {
    width: 55px;
}
table.table td a {
    cursor: pointer;
    display: inline-block;
    margin: 0 5px;
    min-width: 50px;
}    
table.table td a.add {
    color: #27C46B;
}
table.table td a.edit {
    color: #FFC107;
}
table.table td a.delete {
    color: #E34724;
}
table.table td i {
    font-size: 19px;
}
table.table td a.add i {
    font-size: 24px;
    margin-right: -1px;
    position: relative;
    top: 3px;
}    
table.table .form-control {
    height: 50px;
    line-height: 32px;
    box-shadow: none;
    border-radius: 2px;
}
table.table .form-control.error {
    border-color: #f50000;
}
table.table td .add {
    display: none;
}
</style>
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
  var actions = $("table td:last-child").html();
  // Append table with add row form on add new button click
    $(".add-new").click(function(){
    $(this).attr("disabled", "disabled");
    var index = $("table tbody tr:last-child").index();
        var row = '<tr>' +
            '<td><input type="text" class="form-control" name="venue" id="venue"></td>' +
            '<td><input type="text" class="form-control" name="Name" id="Name"></td>' +
            '<td><input type="text" class="form-control" name="Faculty Id" id="Faculty Id"></td>' +
            '<td><input type="text" class="form-control" name="Department" id="Department"></td>' +
            '<td><input type="text" class="form-control" name="year" id="year"></td>' +
            '<td><input type="text" class="form-control" name="From time" id="From time"></td>' +
            '<td><input type="text" class="form-control" name="To time" id="To time"></td>' +
            '<td><input type="text" class="form-control" name="From Date" id="From Date"></td>' +
            '<td><input type="text" class="form-control" name="To Date" id="To Date"></td>' +
            '<td><input type="text" class="form-control" name="Event" id="Event"></td>' +
      '<td>' + actions + '</td>' +
        '</tr>';
      $("table").append(row);   
    $("table tbody tr").eq(index + 1).find(".add, .edit").toggle();
        $('[data-toggle="tooltip"]').tooltip();
    });
  // Add row on add button click
  $(document).on("click", ".add", function(){
    var empty = false;
    var input = $(this).parents("tr").find('input[type="text"]');
        input.each(function(){
      if(!$(this).val()){
        $(this).addClass("error");
        empty = true;
      } else{
                $(this).removeClass("error");
            }
    });
    $(this).parents("tr").find(".error").first().focus();
    if(!empty){
      input.each(function(){
        $(this).parent("td").html($(this).val());
      });     
      $(this).parents("tr").find(".add, .edit").toggle();
      $(".add-new").removeAttr("disabled");
    }   
    });
  // Edit row on edit button click
  $(document).on("click", ".edit", function(){    
        $(this).parents("tr").find("td:not(:last-child)").each(function(){
      $(this).html('<input type="text" class="form-control" value="' + $(this).text() + '">');
    });   
    $(this).parents("tr").find(".add, .edit").toggle();
    $(".add-new").attr("disabled", "disabled");
    });
  // Delete row on delete button click
  $(document).on("click", ".delete", function(){
        $(this).parents("tr").remove();
    $(".add-new").removeAttr("disabled");
    });
});
</script>

</script>
</head>
<body>
       
    <!-- input tag -->
    
<div class="container-lg">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Employee <b>Details</b></h2></div>
                    <div class="col-sm-4">
                       <div class="table-striped"><center> <button type="button" class="btn btn-info add-new"><i class="center"></i> Add New</button></center></div>
                    </div>
                </div>
            </div>
            <table class="table table-bordered table-responsive">
                <thead>
                    <tr>
                        <th>Venue</th>
                        <th>Name</th>
                        <th>Faculty Id</th>
                        <th>Department</th>
                        <th>Year</th>
                        <th>From time</th>
                        <th>To time</th>
                        <th>From date</th>
                        <th>To date</th>
                        <th>Event</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>IB206</td>
                        <td>kumar</td>
                        <td>ct103</td>
                        <td>CT</td>
                        <td>2</td>
                        <td>8am</td>
                        <td>4pm</td>
                        <td>3/10/22</td>
                        <td>3/10/22</td>
                        <td>club</td>
                        <td>
                            <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>IB201</td>
                        <td>Anuj</td>
                        <td>ct103</td>
                        <td>CT</td>
                        <td>2</td>
                        <td>8am</td>
                        <td>4pm</td>
                        <td>3/10/22</td>
                        <td>3/10/22</td>
                        <td>club</td>
                        <td>
                            <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>IB201</td>
                        <td>Anuj</td>
                        <td>ct103</td>
                        <td>CT</td>
                        <td>2</td>
                        <td>8am</td>
                        <td>4pm</td>
                        <td>3/10/22</td>
                        <td>3/10/22</td>
                        <td>club</td>
                        <td>
                            <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>IB201</td>
                        <td>Anuj</td>
                        <td>ct103</td>
                        <td>CT</td>
                        <td>2</td>
                        <td>8am</td>
                        <td>4pm</td>
                        <td>3/10/22</td>
                        <td>3/10/22</td>
                        <td>club</td>
                        <td>
                            <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>IB201</td>
                        <td>Anuj</td>
                        <td>ct103</td>
                        <td>CT</td>
                        <td>2</td>
                        <td>8am</td>
                        <td>4pm</td>
                        <td>3/10/22</td>
                        <td>3/10/22</td>
                        <td>club</td>
                        <td>
                            <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>IB201</td>
                        <td>Anuj</td>
                        <td>ct103</td>
                        <td>CT</td>
                        <td>2</td>
                        <td>8am</td>
                        <td>4pm</td>
                        <td>3/10/22</td>
                        <td>3/10/22</td>
                        <td>club</td>
                        <td>
                            <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>IB201</td>
                        <td>Anuj</td>
                        <td>ct103</td>
                        <td>CT</td>
                        <td>2</td>
                        <td>8am</td>
                        <td>4pm</td>
                        <td>3/10/22</td>
                        <td>3/10/22</td>
                        <td>club</td>
                        <td>
                            <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>IB206</td>
                        <td>kumar</td>
                        <td>ct103</td>
                        <td>CT</td>
                        <td>2</td>
                        <td>8am</td>
                        <td>4pm</td>
                        <td>3/10/22</td>
                        <td>3/10/22</td>
                        <td>club</td>
                        <td>
                            <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>  
                    <tr>
                        <td>IB206</td>
                        <td>kumar</td>
                        <td>ct103</td>
                        <td>CT</td>
                        <td>2</td>
                        <td>8am</td>
                        <td>4pm</td>
                        <td>3/10/22</td>
                        <td>3/10/22</td>
                        <td>club</td>
                        <td>
                            <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>IB201</td>
                        <td>Anuj</td>
                        <td>ct103</td>
                        <td>CT</td>
                        <td>2</td>
                        <td>8am</td>
                        <td>4pm</td>
                        <td>3/10/22</td>
                        <td>3/10/22</td>
                        <td>club</td>
                        <td>
                            <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>IB201</td>
                        <td>Anuj</td>
                        <td>ct103</td>
                        <td>CT</td>
                        <td>2</td>
                        <td>8am</td>
                        <td>4pm</td>
                        <td>3/10/22</td>
                        <td>3/10/22</td>
                        <td>club</td>
                        <td>
                            <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>IB105</td>
                        <td>sankar</td>
                        <td>ct103</td>
                        <td>CT</td>
                        <td>2</td>
                        <td>8am</td>
                        <td>4pm</td>
                        <td>3/10/22</td>
                        <td>3/10/22</td>
                        <td>club</td>
                        <td>
                            <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>IB101</td>
                        <td>Sundar</td>
                        <td>ct103</td>
                        <td>CT</td>
                        <td>2</td>
                        <td>8am</td>
                        <td>4pm</td>
                        <td>3/10/22</td>
                        <td>3/10/22</td>
                        <td>club</td>
                        <td>
                            <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>IB201</td>
                        <td>Anuj</td>
                        <td>ct103</td>
                        <td>CT</td>
                        <td>2</td>
                        <td>8am</td>
                        <td>4pm</td>
                        <td>3/10/22</td>
                        <td>3/10/22</td>
                        <td>club</td>
                        <td>
                            <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>IB206</td>
                        <td>kumar</td>
                        <td>ct103</td>
                        <td>CT</td>
                        <td>2</td>
                        <td>8am</td>
                        <td>4pm</td>
                        <td>3/10/22</td>
                        <td>3/10/22</td>
                        <td>club</td>
                        <td>
                            <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>

                    <tr>
                        <td>IB208</td>
                        <td>krishna</td>
                        <td>ct103</td>
                        <td>CT</td>
                        <td>2</td>
                        <td>8am</td>
                        <td>4pm</td>
                        <td>3/10/22</td>
                        <td>3/10/22</td>
                        <td>club</td>
                        <td>
                            <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>AG209</td>
                        <td>har</td>
                        <td>ct103</td>
                        <td>CT</td>
                        <td>2</td>
                        <td>8am</td>
                        <td>4pm</td>
                        <td>3/10/22</td>
                        <td>3/10/22</td>
                        <td>club</td>
                        <td>
                            <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>AG201</td>
                        <td>Srikanth</td>
                        <td>ct103</td>
                        <td>CT</td>
                        <td>2</td>
                        <td>8am</td>
                        <td>4pm</td>
                        <td>3/10/22</td>
                        <td>3/10/22</td>
                        <td>Mentor meeting</td>
                        <td>
                            <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>IB205</td>
                        <td>Prasath</td>
                        <td>Cb103</td>
                        <td>CT</td>
                        <td>2</td>
                        <td>8am</td>
                        <td>4pm</td>
                        <td>3/10/22</td>
                        <td>3/10/22</td>
                        <td>Acadamics</td>
                        <td>
                            <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>Ct23</td>
                        <td>Mohan</td>
                        <td>ct103</td>
                        <td>CT</td>
                        <td>2</td>
                        <td>8am</td>
                        <td>4pm</td>
                        <td>3/10/22</td>
                        <td>3/10/22</td>
                        <td>club</td>
                        <td>
                            <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    
                    <script src="./style.css"></script>
                </tbody>
               
            </table>
            <a href="#" class="previous">&laquo; Previous</a>
            <a href="#" class="next">Next &raquo;</a>
            <a href="#" class="previous round">&#8249;</a>
            <a href="#" class="next round">&#8250;</a>
        </div>
    </div>
</div>   

</body>
</html>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
 