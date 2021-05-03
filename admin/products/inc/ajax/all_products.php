<?php

use App\Controllers\ProductController;
include '../../../../vendor/autoload.php';


$products = new ProductController;
$data = $products -> allProduct();
$i = 1 ;
while ($singleData = $data->fetch_object()) :
?>
<tr style="vertical-align: middle;">
    <th scope="row"><?php echo $i; $i++ ?>.</th>
    <td><?php echo $singleData -> name; ?></td>
    <td><?php echo $singleData -> category; ?></td>
    <td><?php echo $singleData -> tagline; ?></td>
    <td><?php  
        $sale_p = $singleData -> sale_price;
        $reg_p = $singleData -> regular_price;

        if( $sale_p < $reg_p && $sale_p > 0 ){
            echo "<del style='color: grey'>".$singleData -> regular_price."</del> - ". $singleData -> sale_price;

            $get_percentage =  ( $reg_p - $sale_p ) / $reg_p * 100;
            $percentage =  round($get_percentage);
        }else{
            echo $singleData -> regular_price;
            $percentage = 0;
        }




    ?></td>
    <!-- <td><?php // echo $singleData -> descriptions; ?></td> -->
    <td><?php echo $singleData -> brand; ?></td>
    <td>
        <img style="height: 100px; width: 100px; border-radius: 50%; border: 2px solid #ddd" src="products/img/product/<?php echo $singleData -> photo; ?>" alt="">
        <?php if($percentage > 0){ ?>
        <span style="
                position: absolute;
                background: yellow;
                color: black;
                border-radius: 50%;
                padding: 2px;
                margin-left: -30px;
        ">
            <?php 
                echo '-'.$percentage.'%';
           ?>
        </span>
        <?php }?>
    </td>
    <td>
        <?php if( $singleData -> status) {
            echo '<a status_update_id="'. $singleData -> id .'" status="'. $singleData -> status .'" id="productStatus" class="btn btn-success btn-sm" href="">active</a>';
        }else{
            echo '<a status_update_id="'. $singleData -> id .'" status="'. $singleData -> status .'" id="productStatus" class="btn btn-danger btn-sm" href="">inactive</a>';
        } ?>
        
        
    </td>
    <td>
        <a class="btn btn-primary btn-sm" href="">&#9998;</a>
        <a class="btn btn-warning btn-sm" href="">&#x1F441;</a>
        <a id="deleteProduct" delete-id="<?php echo $singleData -> id; ?>" class="btn btn-danger btn-sm" href="">&#128465;</a>
    </td>
</tr>
<?php endwhile; ?>