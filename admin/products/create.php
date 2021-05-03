<h5>Add new Product</h5>
<div class="row">
    <div class="col d-flex align-items-center justify-content-center">
        <div class="mybox w-50 product_add_new_form">
            <form id="product_add_new_form" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="form-group col-md-6">
                    <label for="productName">Product Name</label>
                    <input type="text" class="form-control" id="productName" name="productName" placeholder="Product name">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="productCat">Category</label>
                    <select id="productCat" class="form-control" name="productCat">
                        <option selected>Choose...</option>
                        <option value="T-shirt">T-shirt</option>
                        <option value="Panjabi">Panjabi</option>
                        <option value="Pant">Pant</option>
                        <option value="Electronics">Electronics</option>
                        <option value="Cosmetics">Cosmetics</option>
                        <option value="Others">Others</option>
                    </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="productTaglne">Tagline</label>
                    <input type="text" class="form-control" id="productTaglne" placeholder="Product tagline" name="productTaglne">
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="regularPrice">Regular Price</label>
                        <input type="text" class="form-control" id="regularPrice" name="regularPrice" placeholder="Regular Price">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="salePrice">Sale Price</label>
                        <input type="text" class="form-control" id="salePrice" name="salePrice" placeholder="Sale Price">
                    </div>
                </div>
                <div class="form-group">
                    <label for="productDesc">Description</label>
                    <textarea class="form-control" name="productDesc" id="productDesc" placeholder="Product description"></textarea>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                    <label for="productBrand">Brand</label>
                    <select id="productBrand" class="form-control" name="productBrand">
                        <option selected>Choose...</option>
                        <option value="Nike" >Nike</option>
                        <option value="Hermes" >Hermes</option>
                        <option value="Gucci" >Gucci</option>
                        <option value="Rang" >Rang</option>
                        <option value="Eye" >Eye</option>
                        <option value="Vivo" >Vivo</option>
                        <option value="Redmi" >Redmi</option>
                        <option value="Bajaj" >Bajaj</option>
                    </select>
                    </div>
                    <div class="form-group col-md-6">
                    <label for="productTag">Tag</label>
                    <select id="productTag" class="form-control" name="productTag">
                        <option selected>Choose...</option>
                        <option value="Covid 19" >Covid 19</option>
                        <option value="Ramadan" >Ramadan</option>
                        <option value="Eid" >Eid</option>
                        <option value="Boishak" >Boishak</option>
                        <option value="Winter" >Winter</option>
                    </select>
                    </div>
                </div>
                <div class="form-group">

                    <img style="display: block; width: 200px" id="img_preload_product" src="" alt="">
                    <div style="
                        margin-top: 20px;
                        width: 100%;
                        height: 10px;
                        position: relative;
                        background-color: #ddd;
                        display: none;
                    " id="myProgress">
                        <div style="
                            background-color: green;
                            width: 10px;
                            height: 10px;
                            position: absolute;
                        " id="myBar"></div>
                    </div>

                    <label for="productimgs">
                        <img id="imgUploader_icon" style="height: 60px; cursor: pointer;" src="../admin/assets/img/image-uploader-icon.png" alt="">
                        <a style="margin: 10px 0px 10px 0px;display:none;" id="removeLoadedPhoto"  class="btn btn-danger btn-sm" href="#">Remove Photo</a>
                    </label>
                    <input style="display: none;" name="productimgs" id="productimgs"  class="form-control" type="file">
                    
                    
                </div>
                <button type="submit" class="btn btn-primary btn-lg w-100 mt-2">Sign in</button>
            </form>
        </div>
    </div>
</div>