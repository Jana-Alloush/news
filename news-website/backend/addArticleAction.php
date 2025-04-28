<?PHP
session_start();
include("inc/connection.php");
$user=$_SESSION['dbemail'];
$role = $_SESSION['dbtype'];
$title = $_POST['txtTitle'];
$date = $_POST['txtDate'];
$source = $_POST['txtSource'];
$author = $_POST['txtAuthor'];
$article = $_POST['txtArticle'];
$category = $_POST['txtCategory'];
$imageName=$_FILES['imageUpload']['name'];
$file_tmp=$_FILES['imageUpload']['tmp_name'];
if (is_uploaded_file($file_tmp)) {
    $image_path = "image/" . $source . $imageName;
    move_uploaded_file($file_tmp, $image_path);

    $sql = "INSERT INTO articles (dbtitle, dbdate, dbsource, dbauthor, dbarticle, dbcategory, dbimage) VALUES ('$title', '$date', '$source', '$author', '$article', '$category', '$image_path')";

    if (mysqli_query($conn, $sql)) {
        if ($role == 'admin') {
            header("location: adminCp.php");
        } else {
            header("location: opcp.php");
        }
    } else {
        die("Error: " . mysqli_error($conn));
    }
} else {
    echo "File upload failed.";
}
?>