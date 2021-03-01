<?php


if(isset($_SESSION['username'])&&isset($_SESSION['id'])){
    $sql="SELECT From login ORDER By id ASC";
    $result=mysqli_query($conn,$sql);
}