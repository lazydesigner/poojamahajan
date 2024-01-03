<?php include '../routes.php' ?>
<?php include './connection.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <link rel="stylesheet" href="<?= get_url() ?>dashboard/assets/css/location.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.6.0/remixicon.min.css" integrity="sha512-pI8MMQ9fC050RkbUOr8cJ75T5bYJpT1PAiML/7QZM6Fr74Ef6csO2/Cl92q+Qpxidm7WonXr6f+DbyxNHPGH8g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Create Location Page</title>

    <style>
        table{
            width: 100%;
            height: auto;
            /* border-spacing: 0; */
        }
        table thead tr th{
            background-color: dodgerblue;
            color: white;
            padding: 1%;
            width: auto;
            text-align: center;
        }
        table tbody tr th{
            padding: 1%;
            color: white;
        }
        table tbody tr:nth-child(even){background-color: blue;}
        table button{
            width: 80px;
            height: 30px;
            margin: 0 2.5px;
            cursor: pointer;
        }
    </style>
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
                </ul>
            </div>
            <div class="action-pannel">
            <div class="action-btn">
                <a href="<?= get_url() ?>dashboard/add-location"><Button>Add Profile</Button></a>
                </div>
                <table>
                    <thead>
                        <tr>
                            <!-- <th>id</th> -->
                            <th>City</th>
                            <th>City Title</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $query = "SELECT * FROM city";
                        $result = mysqli_query($con, $query);

                        while ($city = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <!-- <th><? //$city['city_id'] ?></th> -->
                            <th><?=$city['city'] ?></th>
                            <th><?=$city['page_title'] ?></th>
                            <th><a href="<?= get_url() ?>dashboard/edit-location/<?=$city['city_id'] ?>"><button>Edit</button></a><a href="<?= get_url() ?>call-girls/<?=$city['city'] ?>"><button>View</button></a></th>
                        </tr>
                        
                        <?php } ?>
                    </tbody>
                </table>               

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
        
        document.getElementById('tutor-form').addEventListener('submit',(e)=>{
            e.preventDefault()
            const formdata = new FormData(document.getElementById('tutor-form'))
            console.log(Object.fromEntries(formdata))
        })
    </script>
</body>

</html>