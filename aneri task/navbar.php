
<nav class="navbar navbar-expand-md p-3 mt-0">
<div class="navbar-link">
<div class="input-group">
<div class="form-outline">
  <input type="search" id="form1" class="form-control" placeholder="search"/>
</div>
<button type="button" class="btn btn-info">
  <i class="bi bi-search"></i>
</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button type="button" data-bs-toggle="modal" data-bs-target="#user" class="btn btn-info btn-sm"><i class="bi bi-plus mt-2" ></i>Create product&nbsp;</button>
            <div class="modal fade" id="user" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content p-3">
                    <h1 class="text-center text-#575353 mt-2">Create product<button type="button" class="btn btn-sm float-end mt-2"  data-bs-dismiss="modal">&times;</button></h1>
                <hr style="border-color: black; width: 100%; height: 5px;">

                <form method="post">
                    
                    <div class="form-group ">
             
             
                        <input type="text" name="name" placeholder="Name *" required class="form-control">
                    </div>
                 
                    <div class="form-group  mt-2">
                        <input type="text" name="Price" placeholder="Price *" required class="form-control">
                    </div> 
                    
                    <div class="form-group mt-2">
                        <input type="text" name="Category" placeholder="category *" required class="form-control">
                    </div>
                    
                    <div class="form-group mt-2 text-center">
                    <input type="submit" name="addproduct" class="btn btn-lg btn-success" value="Submit">
        
      </div>
                    </form>
                    </div>
                </div>
        
             </div>

</nav>
<div class="container-fluid">
        <table class="table table-borderless table-hover bg-white mt-3">
            <tr class="bg-dark">
            <th class="text-white">Number</th>
                <th class="text-white">Name</th>
                <th class="text-white">Price</th>
                <th class="text-white">Category</th>
                <th class="text-white">Action</th>    
            </tr>
            <?php  foreach($product as $product1)
              {
              ?>
            <tr>
            <td><?php echo $product1["Product_id"];?></td>
                <td><?php echo $product1["Product_Name"]; ?></td>
                <td><?php echo $product1["Product_Price"]; ?></td>
                <td><?php echo $product1["Product_category"]; ?></td>
                <td> <input type="submit" name="delete" value="delete"
                    class="btn btn-lg btn-danger" id="btn"></td>
                    <?php 
              }
              ?>
            </tr>
    </table>


           </div>

    <br><br><br><br><br>

    
</body>
</html>
