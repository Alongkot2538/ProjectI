




<div style="margin:0;" class="d-flex" id="wrapper" style="padding:0px 0px 0px 0px; margin-top:0px; margin-left:0px;" >

<!-- Sidebar -->
<div class="bg-light border-right" id="sidebar-wrapper"  style = "align: left" >
  <div class="sidebar-heading">My Profile </div>
  <div class="list-group list-group-flush">
    <a href="home" class="nav-link list-group-item list-group-item-action bg-light">Dashboard</a>
    <a href="#" class="list-group-item list-group-item-action bg-light">Shortcuts</a>
    <a href="create2" class="nav-link list-group-item list-group-item-action bg-light">Overview</a>
    <a href="#" class="list-group-item list-group-item-action bg-light">Events</a>
    <a href="#" class="list-group-item list-group-item-action bg-light">Profile</a>
    <a href="#" class="list-group-item list-group-item-action bg-light">Status</a>
  </div>
</div>
<!-- /#sidebar-wrapper -->

<!-- Page Content -->
<div id="page-content-wrapper">

  <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
    <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container-fluid">
    
  <style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
    <h1>create</h1>

<div>
  <a href="{{route('imprimir')}}">Imprimir PDF</a>
</div>

<form action= ""method ="post">
<p>ข้าพเจ้า : <select name="cars">
    <option value="นาย">นาย</option>    
    <option value="นางสาว">นางสาว</option>
    <option value="นาง">นาง</option>
  </select><input type="text"name="user">
  รหัสนักศึษา : <input type="password"name="password">  <br><br>
  คณะ : <input type="คณะ"name="คณะ"> สาขา : <input type="คณะ"name="คณะ"><br><br>
  โทรศัพท์ : <input type="คณะ"name="คณะ"><br><br>
  เนื่องจาก : <br>
  <input type="radio" name="gender" value="male" checked> บัตรสูญหาย<br>
  <input type="radio" name="gender" value="female"> บัตรชำรุด<br>
  <input type="radio" name="gender" value="female"> เปลี่ยนรหัสนักศึกษา<br>
  <input type="radio" name="gender" value="female"> บัตรนักศึกษาชั่วคราวหมดอายุ<br>
  <input type="radio" name="gender" value="other"> อื่น ๆ <br>
  <table style="width:100%">
  <tr>
    <th>ความคิดเห็นเจ้าหน้าที่ทะเบียนกลาง</th>
    <th>นักศึกษารับเอกสาร</th> 
   
  </tr>
  <tr>
    <td><textarea rows="3" cols="50">
</textarea></td>
    <td>ได้รับเอกสารเรียบร้อยแล้ว<br>
    <input type="radio" name="gender" value="female"> รับเอกสารเอง<br>
    <input type="radio" name="gender" value="female"> รับเอกสารเอง<br>
    </td>
  </tr>
 </table>


</p>
<button type="submit">Send</button>


</form>
<!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Menu Toggle Script -->
<script>
$("#menu-toggle").click(function(e) {
  e.preventDefault();
  $("#wrapper").toggleClass("toggled");
});
</script>

</body>


<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>My Project</title>

<!-- Bootstrap core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="css/simple-sidebar.css" rel="stylesheet">

</head>










