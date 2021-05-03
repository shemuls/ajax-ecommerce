<?php

namespace App\Controllers;

use App\Support\Database;

/**
 * Class ProductController
 * @package App\Controllers
 */
class ProductController extends Database
{   
    /**
     * Product insert into database
     */
    public function CreateNewProduct($data)
    {
        $productName =$data['productName'];
        $productCat =$data['productCat'];
        $productTaglne =$data['productTaglne'];
        $regularPrice =$data['regularPrice'];
        $salePrice =$data['salePrice'];
        $productDesc =$data['productDesc'];
        $productBrand =$data['productBrand'];
        $productTag =$data['productTag'];
        
            $photoData = $this -> fileUp($_FILES['productimgs'], '../../img/product/');
            $photoName = $photoData['file_name'];
        

        if( empty($productName) || empty($productTaglne) || empty($productDesc) ){

            echo false;
            
        } else {

            $this -> create('products', [
                'name'          => $productName,
                'category'      => $productCat,
                'tagline'       => $productTaglne,
                'regular_price' => $regularPrice,
                'sale_price'    => $salePrice,
                'descriptions'  => $productDesc,
                'brand'         => $productBrand,
                'tag'           => $productTag,
                'photo'         => $photoName,
            ]);
                
            echo true;
        }

        
        
    }

    /**
     * All product show
     */
    public function allProduct()
    {
        return $this -> all('products');
    }

    /**
     * deleteProduct a product by id
     */
    public function deleteProduct($id)
    {
        $this -> delete('products', $id);
    }

    /**
     * Update product status
     */
    public function updateProductStatus($id, $status)
    {
        if($status == 1){
            $status = 0;
        }else{
            $status = 1;
        }
        $this -> update('products',$id, [
                'status'          => $status,
        ]);
    }


}
