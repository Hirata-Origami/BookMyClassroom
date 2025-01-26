<?php 

        $aid=$_SESSION['id'];
        $ret="select * from userregistration where id=?";
         $stmt= $mysqli->prepare($ret) ;
         $stmt->bind_param('i',$aid);
         $stmt->execute();
         $res=$stmt->get_result();
                                        
         while($row=$res->fetch_object())
         {
    
    echo "<h3 class='page-title text-truncate text-light font-weight-medium mb-1'>Welcome ,  $row->firstName! </h3>"; }
 
?>