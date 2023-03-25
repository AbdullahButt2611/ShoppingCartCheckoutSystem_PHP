<?php

@include 'config.php';

if(isset($_POST['add_product'])){
    $p_name = $_POST['p_name'];
    $p_price = $_POST['p_price'];
    $p_image = $_FILES['p_image']['name'];
    $p_image_tmp_name = $_FILES['p_image']['tmp_name'];
    $p_image_folder = 'uploaded_img/' . $p_image;


    $insert_query = mysqli_query($conn, "INSERT INTO products (name, price, image) VALUES(' $p_name', '$p_price', '$p_image')") or die("Query Failed");

    if($insert_query){
        
    }


}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    

</head>
<body>

    <?php include 'header.php'; ?>
    
    <div class="container">

        <form action="" method="post" class="add-product-form" enctype="multipart/form-data">
            <h3>Add a New Product</h3>
            <input type="text" name="p_name" placeholder="Enter the Product Name" class="box" required>
            <input type="number" name="p_price" min="0" placeholder="Enter the Product Price" class="box" required>
            <input type="file" name="p_image" accept="image/png, image/jpg, image/jpeg" class="box" required>
            <input type="submit" value="Add the Product" name="add_product" class="btn">
        </form>

    </div>








    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>
</html>