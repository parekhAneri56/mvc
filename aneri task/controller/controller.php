<?php 
require_once("model/model.php");
class controller extends model 
{
    public function __construct()
    {
        parent:: __construct();
          // insert or store data in Create product
          if(isset($_POST["addproduct"]))
          {
              date_default_timezone_set("Asia/calcutta");
              $nm=$_POST["name"];
              $prc=$_POST["Price"];
              $cat=$_POST["Category"];
              $datetime=date("d/m/Y H:i:s a");
              $data=array("Product_Name"=>$nm,"Product_Price"=>$prc,"Product_category "=>$cat,"added_date_time"=>$datetime);
              $chk=$this->insertalldata('create_product',$data);
              if($chk)
              {
                  echo "<script>
                  alert('Thanks for add product with us')
                  window.location='/';
                  </script>";
              }
              else 
              {
                  echo "<script>
                  alert('Something went wrong please Add product  later')
                  window.location='/';
                  </script>";
  
              }
          }

 //fetch a state in register form dropdown
 $product=$this->selectalldata('create_product'); 
       

       //load view or templated 
       if(isset($_SERVER["PATH_INFO"]))
       {
           switch ($_SERVER["PATH_INFO"])
            {
               case '/':
                   require_once("index.php");
                   require_once("header.php");
                   require_once("navbar.php");
                 
                   break;
               
               default:
                   # code...
                   break;
           }
        }
    }
}
$obj=new controller;
?>