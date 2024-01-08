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

$query = "SELECT * FROM profiles WHERE `id` = $id ";

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

    <title>Profile Creation</title>

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
                <form action="<?= get_url() ?>dashboard/pages/edit_profile.php" method="POST">
                    <div class="page-detail">
                        <p>Page Detail</p>
                        <div class="form-group-row">
                            <div class="form-group">
                                <input type="text" hidden class="form-control" placeholder="Page Title" value="<?=$_GET['id'] ?>" name="pro_id" id="page_title">
                            </div>
                            <!-- <select id="" name="service_type">
                                <option value="call-girls">Call Girls</option>
                                <option value="escorts">Escorts</option>
                            </select> -->
                        </div>
                        <div class="form-group-row">
                            <select id="" name="service_type">
                                <option value="call-girls">Call Girls</option>
                                <option value="escorts">Escorts</option>
                            </select>
                            <div class="form-group">
                                <!-- <input type="text" class="form-control" placeholder="Page Description" name="page_meta" id="page_meta"> -->
                            </div>
                            <select name="state" id="state">
                                <option value="0">Select State</option>
                                <option value="agra">Agra</option>
                                <option value="ahmedabad">Ahmedabad</option>
                                <option value="ajmer">Ajmer</option>
                                <option value="arunachal-pradesh">Arunachal-Pradesh</option>
                                <option value="bhopal">Bhopal</option>
                                <option value="delhi">Delhi</option>
                                <option value="dehradun">Dehradun</option>
                                <option value="faridabad">Faridabad</option>
                                <option value="goa">Goa</option>
                                <option value="ghaziabad">Ghaziabad</option>
                                <option value="gurugram">Gurugram</option>
                                <option value="guwahati">Guwahati</option>
                                <option value="indore">Indore</option>
                                <option value="jaipur">Jaipur</option>
                                <option value="kota">Kota</option>
                                <option value="lucknow">Lucknow</option>
                                <option value="manali">Manali</option>
                                <option value="mumbai">Mumbai</option>
                                <option value="noida">Noida</option>
                                <option value="patna">Patna</option>
                                <option value="rishikesh">Rishikesh</option>
                                <option value="udaipur">Udaipur</option>
                                <option value="varanasi">Varanasi</option>
                                <option value="visakhapatnam">Visakhapatnam</option>
                            </select>
                        </div>
                        <div class="form-group-row">
                            <div class="form-group">
                                <input type="text" value="<?=$row['page_h1'] ?>" class="form-control" placeholder="Page H1" name="page_h1" id="page_h1">
                            </div>
                            <select name="area" id="area">
                                <option value="0">Select Area</option>
                            </select>
                        </div>
                        <div class="form-group-row">
                            <div class="form-group">

                            </div>
                        </div>
                    </div>
                    <div class="profile-detail">
                        <p>Profile Detail</p>
                        <div class="form-group-row">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Profile Name" name="profile_name" id="profile_name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Profile Age" name="profile_age" id="profile_age">
                            </div>
                        </div>

                        <div class="form-group-row">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Profile Height" name="profile_height" id="profile_height">
                            </div>
                            <div class="form-group">
                                <input type="text" readonly class="form-control" placeholder="Profile Location" name="profile_location" id="profile_location">
                            </div>
                        </div>
                        <div class="form-group-row">
                            <div class="form-group">
                                <select class="form-control" placeholder="Profile Type" name="profile_type" id="profile_type">
                                    <option value="">Select Type</option>
                                    <option value="independent">Independent</option>
                                    <option value="Indian Call Girls">Indian Call Girls</option>
                                    <option value="Actress | Model | High-Profile | VIP">Actress | Model | High-Profile | VIP</option>
                                    <option value="College Girl | Young Girl">College Girl | Young Girl</option>
                                    <option value="House Wife | Desi Girl">House Wife | Desi Girl</option>
                                    <option value="Russian Escort | Foreigner Escort">Russian Escort | Foreigner Escort</option>
                                    <option value="Gujju Girl">Gujju Girl</option>
                                    <option value="Party Girl">Party Girl</option>
                                    <option value="Dating Escort">Dating Escort</option>
                                    <option value="Women Seeking Girl">Women Seeking Girl</option>
                                    <option value="Shemale Escort">Shemale Escort</option>
                                    <option value="Transgender | Lesbian">Transgender | Lesbian</option>
                                    <option value="Nepali Escort">Nepali Escort</option>
                                    <option value="Pubjabi Escort">Pubjabi Escort</option>
                                    <option value="Assamesse Escort">Assamesse Escort</option>
                                    <option value="Mallu Girl">Mallu Girl</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="number" style="width:80px" min="20" value="32" class="form-control" name="profile_body_breast" id="profile_body">
                                <input type="number" style="width:80px" class="form-control" min="20" value="28" name="profile_body_hip" id="profile_body">
                                <input type="number" style="width:80px" class="form-control" min="20" value="34" name="profile_body_hips" id="profile_body">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Profile Images</label>
                            <div class="form-group-row" id="uploadImageArea">
                                <div class="uploaded_image_list form-group-row" id="uploaded_image_list"></div>
                                <input type="file" id="uploadImage">
                            </div>
                        </div> 
                        <div class="place-image-url">
                            <div class="image-url">
                                <input type="text" class="form-control" id="image-url" placeholder="place image url">
                                <button style="width: 100px;height:35px;border:0" id="upload_the_image">Upload</button>
                            </div>
                            <div class="uploaded_image_list form-group-row" id="preview-image-url" style="padding: 1%;">

                            </div>
                        </div>
                        <div class="form-group-row">
                            <!-- <div> <label for="">Profile About</label> -->
                            <textarea style="width: 100%;" id="content" name="content" cols="30" rows="10" placeholder="About Profile"><?=$row['content'] ?></textarea>
                        </div>
                        <div class="form-group-row">
                            <button class="form-button-create">Edit Profile</button>
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>
    </div>

    <script>
        document.getElementById('state').addEventListener('change', (e) => {
            id = document.getElementById('state').value
            const city_id = new FormData();
            city_id.append('city_id', id)
            city_id.append('status', 'city_id')
            fetch('./fetch_data.php', {
                    method: 'POST',
                    body: city_id
                }).then(res => res.json())
                .then(d => {
                    document.getElementById('area').innerHTML = d['output']
                })
        })
    </script>
    <script src="<?= get_url() ?>dashboard/assets/ckeditor/ckeditor.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/12.4.0/classic/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('content', {
            height: 200,
            // filebrowserUploadUrl: '/services/img_upload.php',
            removeButtons: 'PasteFromWord'
        });
    </script>

    <script>
        image_count = 0
        document.getElementById('uploadImage').addEventListener('change', (e) => {
            let imgPath = e.target.files[0];
            const image_path = new FormData();
            image_path.append('imgPath', imgPath);
            fetch('./pages/upload_profile_images.php', {
                    method: 'POST',
                    body: image_path
                }).then(res => res.json())
                .then(data => {
                    if (data['status'] == 200) {
                        document.getElementById('uploaded_image_list').innerHTML += "<div style='position:relative'><img src='./assets/images/profile_images/" + data['file_name'] + "' style='object-fit:cover' width='100px' height='100px'><input value=" + data['file_name'] + " name='image" + image_count + "' hidden></div>";
                        if (image_count == 5) {
                            a = document.getElementById('uploadImage')
                            a.remove()
                        }
                        image_count++
                    }
                })
        })
        // <input type="file" id="uploadImage"> uploadImageArea > remove()
        document.getElementById('profile_type').addEventListener('change', () => {
            console.log(document.getElementById('profile_type').value)
        })

        let array_of_images = <?=$row['profile_images'] ?>;

        document.getElementById('upload_the_image').addEventListener('click', (e) => {
            e.preventDefault()
            array_of_images.push(document.getElementById('image-url').value);
            document.getElementById('preview-image-url').innerHTML ='';
            for(i=0; i<array_of_images.length;i++){
                document.getElementById('preview-image-url').innerHTML += "<div style='width:150px;height:auto;overflow:hidden;background:white;position:relative'><img src='"+array_of_images[i]+"' width='150px' height='200px' ><input  name='image" +(i+1)+ "' value='"+array_of_images[i]+"' style='padding:1% 2%;' readonly><div style='position:absolute;top:0;right:0;width:30px;height:30px;display:grid;place-items:center;z-index:1'>X</div></div>";
                document.getElementById('image-url').value = '';
            }
        })

        for(i=0; i<array_of_images.length;i++){
                document.getElementById('preview-image-url').innerHTML += "<div style='width:150px;height:auto;overflow:hidden;background:white;position:relative'><img src='"+array_of_images[i]+"' width='150px' height='200px' ><input  name='image" +(i+1)+ "' value='"+array_of_images[i]+"' style='padding:1% 2%;' readonly><div style='position:absolute;top:0;right:0;width:30px;height:30px;display:grid;place-items:center;z-index:1;background:tomato;color:white;cursor:pointer' id='remove-the-image'>X</div></div>";
            }

        var remove_the_image = document.querySelectorAll('#remove-the-image');
        for(i=0;i<remove_the_image.length;i++){
            remove_the_image[i].addEventListener("click", function(e){
                console.log(e.target.parentElement.chi)
            })
        }

    </script>
</body>

</html>
<!-- 
Rajpur Road
 
Dalanwala
 
Clement Town
 
Prem Nagar
 -->