<?php 
include 'inc/security.php';

$user=$_SESSION['EMAIL'];
    $title=$_POST['txtTitle'];
    $date=$_POST['txtDate'];
    $source=$_POST['txtSource'];
    $author=$_POST['txtAuthor'];
    $article=$_POST['txtArticle'];
    $category=$_POST['txtCategory'];
    $id=$_GET['ID'];
    
    $sql = "UPDATE articles SET dbTitle = '$title',dbDate='$date',dbSource='$source',dbAuthor='$author',Article='$article',Category='$category',user='$user' WHERE ID=$id";
    mysqli_query($conn,$sql);
    header("location:viewArticles.php");