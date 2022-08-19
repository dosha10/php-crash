<?php
if (isset($_POST['submit'])) {
    $allowed_ext = array('png', 'jpg', 'jpeg', 'gif', 'jiff'); //allowed file extensions

    if (!empty($_FILES['upload']['name'])) {  //files superglobal
        $file_name = $_FILES['upload']['name'];
        $file_size = $_FILES['upload']['size'];
        $file_tmp = $_FILES['upload']['tmp_name'];
        $target_dir = "uploads/{$file_name}";

        //Get file ext
        $file_ext = explode('.', $file_name);
        $file_ext = strtolower(end($file_ext));

        //Validate file extension
        if (in_array($file_ext, $allowed_ext)) {
            if ($file_size <= 1000000) {
                move_uploaded_file($file_tmp, $target_dir);
                $message = '<p style="color:green">File uploaded!</p>';
            } else {
                $message = '<p style="color:red">File is too large!</p>';
            }
        } else {
            $message = '<p style="color:red">Invalid file type!</p>';
        }
    } else {
        $message = '<p style="color:red">Please choose a file to upload!</p>';
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="I E=edge">
    <title>File Upload</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <?php echo $message ?? null; //coalescing operator 
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
        Select image to upload:<br>
        <input type="file" name="upload"><br>
        <input type="submit" value="Submit" name="submit">
    </form>

</body>

</html>