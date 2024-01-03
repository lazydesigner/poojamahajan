
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
    
    <title>Profile Creation</title>
    <style>
        * {
            box-sizing: border-box;
        }

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
        table tbody tr td{color:white;text-align: center;}
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
                    <li><i class="ri-arrow-right-s-fill"></i><a href="<?= get_url() ?>dashboard">City Pages</a></li>
                </ul>
            </div>
            <div class="action-pannel">
                <div class="action-btn">
                <a href="<?= get_url() ?>dashboard/add-profiles"><Button>Add Profile</Button></a>
                <input type="text" id="search-table" placeholder="Search Profie">
                </div>
                <table >
                    <thead>
                        <tr>
                            <th>Profile Name</th>
                            <th>Page H1</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="table_data">
                        <?php 
                        $sql = "SELECT * FROM profiles";
                        $res = mysqli_query($con, $sql);
                        while ($row = mysqli_fetch_assoc($res)) { ?>
                        <tr><td><?=$row['profile_name'] ?></td><td><?=$row['page_h1'] ?></td><td style="display: flex;gap:1%"><a href="<?= get_url() ?><?=$row['page_url'] ?>"><button>View</button></a><a href="<?= get_url() ?>dashboard/edit-profile/<?=$row['id'] ?>"><button>Edit</button></a></td></tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>






</body>

</html>