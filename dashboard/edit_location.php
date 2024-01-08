<?php include '../routes.php' ?>
<?php include './connection.php' ?>
<?php
session_start();
if(!isset($_SESSION['email'])){
    header('Location: '.get_url().'auth-log');
}

?>
<?php 
$id = $_GET['id'];

$query = "SELECT * FROM city WHERE `city_id` = $id ";

$res = mysqli_query($con, $query);

if(mysqli_num_rows($res)>0){
    $row = mysqli_fetch_assoc($res);
}else{
    header('Location :'.get_url().'404');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <link rel="stylesheet" href="<?= get_url() ?>dashboard/assets/css/location.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.6.0/remixicon.min.css" integrity="sha512-pI8MMQ9fC050RkbUOr8cJ75T5bYJpT1PAiML/7QZM6Fr74Ef6csO2/Cl92q+Qpxidm7WonXr6f+DbyxNHPGH8g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Edit Location Page</title>
</head>

<body>

    <div class="container">
        <div class="container-row">
            <div class="menu-pannel">
                <div class="menu-name">
                    <h2>Poojamahajan</h2>
                </div>
                <ul>
                    <li><i class="ri-arrow-right-s-fill"></i><a href="<?= get_url() ?>dashboard/profiles">Profile</a></li>
                    <li><i class="ri-arrow-right-s-fill"></i><a href="<?= get_url() ?>dashboard">City Page</a></li>
                    <li><i class="ri-arrow-right-s-fill"></i><a href="<?= get_url() ?>logout">Logout</a></li>
                </ul>
            </div>
            <div class="action-pannel">

                <form action="<?= get_url() ?>dashboard/pages/edit_city_detail.php" method="POST">
                    <div class="page-detail">
                        <h2>Page Details</h2>
                        <div class="form-group">
                            <input type="text" name="page_id" hidden value="<?=$id ?>" class="form-control" placeholder="Page Title">
                            <input type="text" name="page_title" value="<?=$row['page_title'] ?>" class="form-control" placeholder="Page Title">
                        </div>
                        <div class="form-group">
                            <input type="text" name="page_meta" value="<?=$row['page_meta'] ?>" class="form-control" placeholder="Page Meta Description">
                        </div>
                        <div class="form-group">
                            <input type="text" name="page_h1" value="<?=$row['page_h1'] ?>" class="form-control" placeholder="Page h1">
                        </div>
                        <div class="form-group">
                            <input type="text" name="city" value="<?=$row['city'] ?>" class="form-control" placeholder="Enter City. Eg:Delhi, Lucknow">
                        </div>
                    </div>
                    <div class="page-detail">
                        <h2>Top Content</h2>
                        <textarea name="top_content" id="top-content" cols="30" rows="10"><?=$row['top_content'] ?></textarea>
                    </div>
                    <div class="page-detail">
                        <h2>bottom Content</h2>
                        <textarea name="bottom_content" id="bottom-content" cols="30" rows="10"><?=$row['bottom_content'] ?></textarea>
                    </div>
                    <div class="form-group-row">
                        <button class="form-button-create">Edit City</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script src="<?= get_url() ?>dashboard/assets/ckeditor/ckeditor.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/12.4.0/classic/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('bottom-content', {
            height: 400,
            // filebrowserUploadUrl: '/services/img_upload.php',
            removeButtons: 'PasteFromWord'
        });
    </script>
    <script>
        CKEDITOR.replace('top-content', {
            height: 200,
            // filebrowserUploadUrl: '/services/img_upload.php',
            removeButtons: 'PasteFromWord'
        });

        const form = document.querySelector('#tutor-form')
        form.addEventListener('submit',(e)=>{
            e.preventDefault()
            const formdata = new FormData(e.target)
            const formdata2 = new FormData()
            const a = Object.fromEntries(formdata)
            console.log(a)
            console.log(formdata)
            console.log(formdata2)
            fetch('',{
                method:'post',
                body:JSON.parse()

            })
        })
    </script>
</body>

</html>