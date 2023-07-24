
<html>
<head>
  <title>Home</title>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="css/font-awesome.min.css" type="text/css" rel="stylsheet"/>
<link  rel="stylesheet" href="css/stylee.css">
<script src="js/jquery-2.1.0.min.js"></script>
<script src="scripting.js" type="text/javascript"> </script>
<script src="js/bootsraps.min.js" type="text/javascript"></script>
</head>



<body style="background: url(images/gate.jpg); background-size: 100% 100%;">
 
<div class="col-sm-0">
    <img src="images/jai.png" style="height: 228px;width: 1520px" >
</div>

<div class="container-fluid">
<div class="header">
<div class="row" style="background-color:skyblue;">
<div class="row" style="background-color:rgb(6, 6, 141);">
<div class="col-md-2"></div>
<div class="col-md-4"><a href="home.php" style="color:white;padding:25px;font-size:22px;">Home</a></div>
<div class="col-md-3"><a href="about.php" style="color:white;padding:25px;font-size:22px;">About</a></div>
<div class="col-md-3"><a href="contact.php" style="color:white;padding:25px;font-size:22px;">Contact Us</a></div>
</div>
</div>
</div>
</div>





<div class="main-body">
<div class="row" style="width:100%;margin:25;">
<div class="col-md-2"></div>
<div class="col-md-8"><br><br><br><div>
  <h1 style="background-color:black;color:white;font-family:italic;text-align:center;"><marquee behavior="alternate" > "A FASTER AND EASIER WAY TO APPLY LEAVES"</marquee></h1></div></div>

<br><br>
<br><br>
<br><br>
<div class="col-md-12">
<div class="col-md-12"><br><div>
<div class="container">
  <style>
    .container{
    width:200px;
    font-size: 22px;
    family:italic
    postion:relative;
    text-align:right;
    }
    </style>

<button class="click">LOGIN</button>

<style>
.click
{
  background-color: black;  
  color:white;
}
.click:hover{
background-color: black;
}
</style>

  <div class="list">
  <style>

      .click,.links{
      background-color: black;  
      color:white;
       padding:10px;
       font-family:italic;
       border:none;
       outline:none;
       width: 200px;
       transition:0.3s;
}
</style>

<style>
.list{
      position: relative;
      transform: scaleY(0);
      transform-origin: top;
      transition:0.3s;
    }

.newlist
{
  transform: scaleY(1);
  color:white;
}

.links{
  padding:10px;
  margin:1px;
  color:white;
  font-size: 18px;
  background-color: black;


}

.links:hover{
  background-color: white; 
  transform: scale(1.1);
}
</style>


<a href="ParentZone/AdminArea/"><button class="links" style="color:white;">Parent Login</a></button>
<a href="StaffZone/AdminArea/" ><button class="links" style="color:white;"> Vani Mandir</a>
<a href="HodZone/AdminArea/"> <button class="links" style="color:white;">HOD Login</a>
<a href="AdminZone/AdminArea/" ><button class="links" style="color:white;">Admin Login</a>

  </div>
  </div>
  </div>
  </div>
</div>
<script>

   let click=document.querySelector('.click');
   let list=document.querySelector('.list');
   click.addEventListener("click",()=>{
    list.classList.toggle('newlist');
   });

  </script>



<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>








<div class="row">
    <div class="col-sm-12 text-center" style="background-color:rgb(112, 203, 217)">
            © 2022 Copyright:
            <a class="fw-bold" href="https://www.banasthali.org/banasthali/wcms/en/home">Banasthali Vidyapith</a>
        </div>
    </div>
</div>



</html>

