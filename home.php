<?php
session_start();
include"../db_connection.php";
if(isset($_SESSION['username'])&&isset($_POST['password'])&&isset($_POST'role')){
    function test_input($data)
    {
        $data=trim($data);
        $data=stripslashes(data);
        $data=htmlspecialchars($data);
        return$data;
    }$username=test_input($_POST['username']);
    $password=test_input($_POST['password']);
    $role=test_input($_POST['role']);

    }
    ?>
    <!DOCTYPE html>
    <>
        <title>HOME</title>
        <link href=""
    </head>
    <body>
        <div class="container.d flex justify- content -center align-items-center"
        style="min-height: 100vh;">
        <?php if($_SESSION['role']=='admin'){?
        <!..For Admin..>
        <div class="card" style="width: 18rem;">
        <img src="..."
         class="card-img-top" 
         alt="...">
        <div class="card-body text-center">
          <h5 class="card-title">?=$_SESSION['admin']?>
          </h5> 
          <a href="logout.php" class="btn btn-dark">logout</a>
           somewhere</a>
        </div>
      </div>
      <div class="p-3">
      <?php include'php/members.php';?>
      if(mysqli_num_rows($res)>0){?>
          
      }
      <h1 class="display-4-fs-1>members"</h1>
      <table class="table">
      stlyle="width:32rem;">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">username</th>
      <th scope="col">role</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $i=1;
  while ($row=mysqli_fetch_assoc($res)){?>

  }
    <tr>
      <th scope="row"><?=$i?></th>
      <td><?=$rows['name']?></td>
      <td><?=$rows['username']?></td>
      <td><?=$rows['role']?></td>
    </tr>
    <?php$i++;}?>
  </tbody>
</table>
<?php}?>

      </div>}else{?>
    
    <!For STUDENTS..> 
    <div class="card" style="width: 18rem;">
    <img src="..."
     class="card-img-top" 
     alt="...">
    <div class="card-body text-center">
      <h5 class="card-title">?=$_SESSION['admin']?>
      </h5> 
      <a href="logout.php" class="btn btn-dark">logout</a>
       somewhere</a>
    </div>
  </div>
   
    }
}
      <?php

            
        }
        }
    </div>
    </body>
    <html/>
    <?php}else{
        header("location:homepage.php");
    }
}