<?php
include './connection.php';
include '../routes.php';



if($_POST['status'] == 'city_id'){
    
    $query = "SELECT * FROM area WHERE city_id = '{$_POST['city_id']}' ";
    $c = $_POST['city_id'];
    if(isset($_POST['cate'])){
        $cate = $_POST['cate'];
    }
    
    $res = mysqli_query($con, $query);
    $output = "";
    $areas = '';
    $output .= "<option value=''>All Location</option>";
    $i = 0;
    if(mysqli_num_rows($res) > 0){
        while($row = mysqli_fetch_assoc($res)){

            if(isset($_POST['area'])){
                if($_POST['area'] == $row['area_value']){
                    $output .= "<option selected value='".$row['area_value']."'>".$row['area_name']."</option>";
                    if(isset($_POST['cate'])){
                        $areas .= '<a href="'.get_url().$cate.'/'.$c.'/'.$row['area_value'].'"><button>'.$row['area_name'].'</button></a>';
                    }
                    $i++;
                }
            }

            if($i == 1){$i = 0 ;}else{
                $output .= "<option value='".$row['area_value']."'>".$row['area_name']."</option>";
                if(isset($_POST['cate'])){
                $areas .= '<a href="'.get_url().$cate.'/'.$c.'/'.$row['area_value'].'"><button>'.$row['area_name'].'</button></a>';
                }
            }

        };
    }

    echo json_encode(['output'=>$output,'area'=>$areas]);

}elseif($_POST['status'] == 'search-city'){
    $keyword = $_POST['search-city'];

    $query = "SELECT * FROM `city` WHERE `city` LIKE '%$keyword%'";
    $result = mysqli_query($con, $query);
    $output = '';
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            $output .= '<li><a href="'.get_url().$_POST['category'].'/'.$row['city'].'">'.$row['city'].'</a></li>';
            $city = $row['city'];
         }
         echo json_encode(['city'=>$output,'cty'=>$city]);
    }else{
        echo json_encode(['city'=> 'No City Found']);
    }
    

}


?>    