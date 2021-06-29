<?php
include 'formcon.php';
if(isset($_POST['submit']))
{
    $proname=$_POST['productname'];
    $cat=$_POST['estatus'];
    $price=$_POST['cost'];
    $owner=$_POST['name'];
    $phone=$_POST['mobile'];
    $add=$_POST['address'];
    $files=$_FILES['pic'];

   
   


    $filename=$files['name'];
    $filepath=$files['tmp_name'];
    $fileerror=$files['error'];


    if($fileerror == 0)
        {
            $destination = 'upload1/'.$filename;
            move_uploaded_file($filepath, $destination);

            $iq="insert into sell(proname ,cate , price , pic , owner , mobile , address) values('$proname' ,'$cat' , '$price' , '$destination' , '$owner' , '$phone' , '$add')";
            $res=mysqli_query($con,$iq);
            if($res)
            {
?>
                <script>
                alert("Details Uploaded");
                location.replace("mainpage.php");
                </script>
<?php
            }
            else
            {
?>
                <script>
                alert("Insertion Failed");
                
                </script>
<?php
            }
        }
        

    
}
?>