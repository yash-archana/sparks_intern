<?php session_start() ?>
<html>
<head>
    <style>
        .parmango{
            display: flex; 
        }
        #wq{
            height: 100%; 
            
        }
    </style>
</head>
<?php
    
    if(isset($_POST['ggo2'])){
        $server="localhost";
        $username="root";
        $password="";
        $db="sparks";
        $con=new mysqli($server,$username,$password,$db);
        if($con){
            $sql="SELECT * FROM `naam`";
            $result=$con->query($sql);
            $na=$_POST['m1'];
            $cnt=0;
            if($result->num_rows>0){
                while($row=$result->fetch_assoc()){
                    $table[$cnt]=array($row['balance'],$row['first']);
                    
                    if($row['first']==$na){
                        $ka=$row['balance']+(int)$_POST['m2'];
                        $kaa=$row['id'];
                        $sql1= "UPDATE `naam` SET `balance` = '$ka' WHERE `naam`.`id` = $kaa";
                        if($con->query($sql1)){
                        }else{

                        }
                    }
                    $cnt+=1;
                }
            }else{
                echo"NO DATA FOUND";
            }

            if(isset($_SESSION['f1'])){
                $ku=$table[0][0]-(int)$_POST['m2'];
                $sq="UPDATE `naam` SET `balance` = '$ku' WHERE `naam`.`id` = 1";
                if($con->query($sq)){
                    $SSS=(int)$_POST['m2'];
                    $DD=$_POST['m1'];
                    $D1=$table[0][1];
                    $SQ3="INSERT INTO `transaction` (`id`, `sender`, `receiver`, `amount`) VALUES (NULL, '$DD', '$D1', '$SSS');";
                    if($con->query($SQ3)){
                        header("location: index.php");
                    }
                }
            }else if(isset($_SESSION['f2'])){
                $ku=$table[1][0]-(int)$_POST['m2'];
                $sq="UPDATE `naam` SET `balance` = '$ku' WHERE `naam`.`id` = 2";
                if($con->query($sq)){
                    $SSS=(int)$_POST['m2'];
                    $DD=$_POST['m1'];
                    $D1=$table[1][1];
                    $SQ3="INSERT INTO `transaction` (`id`, `sender`, `receiver`, `amount`) VALUES (NULL, '$DD', '$D1', '$SSS');";
                    if($con->query($SQ3)){
                        header("location: index.php");
                    }
                }
            }else if(isset($_SESSION['f3'])){
                $ku=$table[2][0]-(int)$_POST['m2'];
                $sq="UPDATE `naam` SET `balance` = '$ku' WHERE `naam`.`id` = 3";
                if($con->query($sq)){
                    $SSS=(int)$_POST['m2'];
                    $DD=$_POST['m1'];
                    $D1=$table[2][1];
                    $SQ3="INSERT INTO `transaction` (`id`, `sender`, `receiver`, `amount`) VALUES (NULL, '$DD', '$D1', '$SSS');";
                    if($con->query($SQ3)){
                        header("location: index.php");
                    }
                }
            }else if(isset($_SESSION['f4'])){
                $ku=$table[3][0]-(int)$_POST['m2'];
                $sq="UPDATE `naam` SET `balance` = '$ku' WHERE `naam`.`id` = 4";
                if($con->query($sq)){
                    $SSS=(int)$_POST['m2'];
                    $DD=$_POST['m1'];
                    $D1=$table[3][1];
                    $SQ3="INSERT INTO `transaction` (`id`, `sender`, `receiver`, `amount`) VALUES (NULL, '$DD', '$D1', '$SSS');";
                    if($con->query($SQ3)){
                        header("location: index.php");
                    }
                }
            }else if(isset($_SESSION['f5'])){
                $ku=$table[4][0]-(int)$_POST['m2'];
                $sq="UPDATE `naam` SET `balance` = '$ku' WHERE `naam`.`id` = 5";
                if($con->query($sq)){
                    $SSS=(int)$_POST['m2'];
                    $DD=$_POST['m1'];
                    $D1=$table[4][1];
                    $SQ3="INSERT INTO `transaction` (`id`, `sender`, `receiver`, `amount`) VALUES (NULL, '$DD', '$D1', '$SSS');";
                    if($con->query($SQ3)){
                        header("location: index.php");
                    }
                }
            }else if(isset($_SESSION['f6'])){
                $ku=$table[5][0]-(int)$_POST['m2'];
                $sq="UPDATE `naam` SET `balance` = '$ku' WHERE `naam`.`id` = 6";
                if($con->query($sq)){
                    $SSS=(int)$_POST['m2'];
                    $DD=$_POST['m1'];
                    $D1=$table[5][1];
                    $SQ3="INSERT INTO `transaction` (`id`, `sender`, `receiver`, `amount`) VALUES (NULL, '$DD', '$D1', '$SSS');";
                    if($con->query($SQ3)){
                        header("location: index.php");
                    }
                }
            }else if(isset($_SESSION['f7'])){
                $ku=$table[6][0]-(int)$_POST['m2'];
                $sq="UPDATE `naam` SET `balance` = '$ku' WHERE `naam`.`id` = 7";
                if($con->query($sq)){
                    $SSS=(int)$_POST['m2'];
                    $DD=$_POST['m1'];
                    $D1=$table[6][1];
                    $SQ3="INSERT INTO `transaction` (`id`, `sender`, `receiver`, `amount`) VALUES (NULL, '$DD', '$D1', '$SSS');";
                    if($con->query($SQ3)){
                        header("location: index.php");
                    }
                }
            }else if(isset($_SESSION['f8'])){
                $ku=$table[7][0]-(int)$_POST['m2'];
                $sq="UPDATE `naam` SET `balance` = '$ku' WHERE `naam`.`id` = 8";
                if($con->query($sq)){
                    $SSS=(int)$_POST['m2'];
                    $DD=$_POST['m1'];
                    $D1=$table[7][1];
                    $SQ3="INSERT INTO `transaction` (`id`, `sender`, `receiver`, `amount`) VALUES (NULL, '$DD', '$D1', '$SSS');";
                    if($con->query($SQ3)){
                        header("location: index.php");
                    }
                }
            }else if(isset($_SESSION['f9'])){
                $ku=$table[8][0]-(int)$_POST['m2'];
                $sq="UPDATE `naam` SET `balance` = '$ku' WHERE `naam`.`id` = 9";
                if($con->query($sq)){
                    $SSS=(int)$_POST['m2'];
                    $DD=$_POST['m1'];
                    $D1=$table[8][1];
                    $SQ3="INSERT INTO `transaction` (`id`, `sender`, `receiver`, `amount`) VALUES (NULL, '$DD', '$D1', '$SSS');";
                    if($con->query($SQ3)){
                        header("location: index.php");
                    }
                }
            }else if(isset($_SESSION['f10'])){
                $ku=$table[9][0]-(int)$_POST['m2'];
                $sq="UPDATE `naam` SET `balance` = '$ku' WHERE `naam`.`id` = 10";
                if($con->query($sq)){
                    $SSS=(int)$_POST['m2'];
                    $DD=$_POST['m1'];
                    $D1=$table[9][1];
                    $SQ3="INSERT INTO `transaction` (`id`, `sender`, `receiver`, `amount`) VALUES (NULL, '$DD', '$D1', '$SSS');";
                    if($con->query($SQ3)){
                        header("location: index.php");
                    }
                }
            }
        }else{
            echo $con->server;
        }


    }else if(isset($_POST['gg1'])){
        ?>
        <form method="POST" action="do.php">
            <table border="5px">
                <tr>
                    <th>Receiver Name: <input type="text" name="m1"></th>
                </tr>
                <tr>
                    <th>Sender Name :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  <?php echo $_SESSION['f1'] ?></th><br>
                </tr>
                <tr>
                    <th>Amount    : <input type="text" name="m2"></th>
                    
                </tr>
                <tr>
                    <?php 
                        
                        if(isset($_SESSION['f2'])){
                            unset($_SESSION['f2']);
                        }
                        if(isset($_SESSION['f3'])){
                            unset($_SESSION['f3']);
                        }
                        if(isset($_SESSION['f4'])){
                            unset($_SESSION['f4']);
                        }
                        if(isset($_SESSION['f5'])){
                            unset($_SESSION['f5']);
                        }
                        if(isset($_SESSION['f6'])){
                            unset($_SESSION['f6']);
                        }
                        if(isset($_SESSION['f7'])){
                            unset($_SESSION['f7']);
                        }
                        if(isset($_SESSION['f8'])){
                            unset($_SESSION['f8']);
                        }
                        if(isset($_SESSION['f9'])){
                            unset($_SESSION['f9']);
                        }
                        if(isset($_SESSION['f10'])){
                            unset($_SESSION['f10']);
                        }
                    ?>
                    <th> <input type="submit" name="ggo2"></th>
                </tr>
            </table>
        </form>
        <?php
    }else if(isset($_POST['gg2'])){
        ?>
        <form method="POST" action="do.php">
            <table border="5px">
                <tr>
                    <th>Receiver Name: <input type="text" name="m1"></th>
                </tr>
                <tr>
                    <th>Sender Name :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  <?php echo $_SESSION['f2'] ?></th><br>
                </tr>
                <tr>
                    <th>Amount    : <input type="text" name="m2"></th>
                    
                </tr>
                <tr>
                <?php 
                        if(isset($_SESSION['f1'])){
                            unset($_SESSION['f1']);
                        }
                        
                        if(isset($_SESSION['f3'])){
                            unset($_SESSION['f3']);
                        }
                        if(isset($_SESSION['f4'])){
                            unset($_SESSION['f4']);
                        }
                        if(isset($_SESSION['f5'])){
                            unset($_SESSION['f5']);
                        }
                        if(isset($_SESSION['f6'])){
                            unset($_SESSION['f6']);
                        }
                        if(isset($_SESSION['f7'])){
                            unset($_SESSION['f7']);
                        }
                        if(isset($_SESSION['f8'])){
                            unset($_SESSION['f8']);
                        }
                        if(isset($_SESSION['f9'])){
                            unset($_SESSION['f9']);
                        }
                        if(isset($_SESSION['f10'])){
                            unset($_SESSION['f10']);
                        }
                    ?>
                    <th> <input type="submit" name="ggo2"></th>
                </tr>
            </table>
        </form>
        <?php
    }else if(isset($_POST['gg3'])){
        ?>
        <form method="POST" action="do.php">
            <table border="5px">
                <tr>
                    <th>Receiver Name: <input type="text" name="m1"></th>
                </tr>
                <tr>
                    <th>Sender Name :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  <?php echo $_SESSION['f3'] ?></th><br>
                </tr>
                <tr>
                    <th>Amount    : <input type="text" name="m2"></th>
                    
                </tr>
                <tr>
                <?php 
                        if(isset($_SESSION['f1'])){
                            unset($_SESSION['f1']);
                        }
                        if(isset($_SESSION['f2'])){
                            unset($_SESSION['f2']);
                        }
                        
                        if(isset($_SESSION['f4'])){
                            unset($_SESSION['f4']);
                        }
                        if(isset($_SESSION['f5'])){
                            unset($_SESSION['f5']);
                        }
                        if(isset($_SESSION['f6'])){
                            unset($_SESSION['f6']);
                        }
                        if(isset($_SESSION['f7'])){
                            unset($_SESSION['f7']);
                        }
                        if(isset($_SESSION['f8'])){
                            unset($_SESSION['f8']);
                        }
                        if(isset($_SESSION['f9'])){
                            unset($_SESSION['f9']);
                        }
                        if(isset($_SESSION['f10'])){
                            unset($_SESSION['f10']);
                        }
                    ?>
                    <th> <input type="submit" name="ggo2"></th>
                </tr>
            </table>
        </form>
        <?php
    }else if(isset($_POST['gg4'])){
        ?>
        <form method="POST" action="do.php">
            <table border="5px">
                <tr>
                    <th>Receiver Name: <input type="text" name="m1"></th>
                </tr>
                <tr>
                    <th>Sender Name :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  <?php echo $_SESSION['f4'] ?></th><br>
                </tr>
                <tr>
                    <th>Amount    : <input type="text" name="m2"></th>
                    
                </tr>
                <tr>
                <?php 
                        if(isset($_SESSION['f1'])){
                            unset($_SESSION['f1']);
                        }
                        if(isset($_SESSION['f2'])){
                            unset($_SESSION['f2']);
                        }
                        if(isset($_SESSION['f3'])){
                            unset($_SESSION['f3']);
                        }
                        
                        if(isset($_SESSION['f5'])){
                            unset($_SESSION['f5']);
                        }
                        if(isset($_SESSION['f6'])){
                            unset($_SESSION['f6']);
                        }
                        if(isset($_SESSION['f7'])){
                            unset($_SESSION['f7']);
                        }
                        if(isset($_SESSION['f8'])){
                            unset($_SESSION['f8']);
                        }
                        if(isset($_SESSION['f9'])){
                            unset($_SESSION['f9']);
                        }
                        if(isset($_SESSION['f10'])){
                            unset($_SESSION['f10']);
                        }
                    ?>
                    <th> <input type="submit" name="ggo2"></th>
                </tr>
            </table>
        </form>
        <?php
    }else if(isset($_POST['gg5'])){
        ?>
        <form method="POST" action="do.php">
            <table border="5px">
                <tr>
                    <th>Receiver Name: <input type="text" name="m1"></th>
                </tr>
                <tr>
                    <th>Sender Name :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  <?php echo $_SESSION['f5'] ?></th><br>
                </tr>
                <tr>
                    <th>Amount    : <input type="text" name="m2"></th>
                    
                </tr>
                <tr>
                <?php 
                        if(isset($_SESSION['f1'])){
                            unset($_SESSION['f1']);
                        }
                        if(isset($_SESSION['f2'])){
                            unset($_SESSION['f2']);
                        }
                        if(isset($_SESSION['f3'])){
                            unset($_SESSION['f3']);
                        }
                        if(isset($_SESSION['f4'])){
                            unset($_SESSION['f4']);
                        }
                        
                        if(isset($_SESSION['f6'])){
                            unset($_SESSION['f6']);
                        }
                        if(isset($_SESSION['f7'])){
                            unset($_SESSION['f7']);
                        }
                        if(isset($_SESSION['f8'])){
                            unset($_SESSION['f8']);
                        }
                        if(isset($_SESSION['f9'])){
                            unset($_SESSION['f9']);
                        }
                        if(isset($_SESSION['f10'])){
                            unset($_SESSION['f10']);
                        }
                    ?>
                    <th> <input type="submit" name="ggo2"></th>
                </tr>
            </table>
        </form>
        <?php
    }else if(isset($_POST['gg6'])){
        ?>
        <form method="POST" action="do.php">
            <table border="5px">
                <tr>
                    <th>Receiver Name: <input type="text" name="m1"></th>
                </tr>
                <tr>
                    <th>Sender Name :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  <?php echo $_SESSION['f6'] ?></th><br>
                    
                </tr>
                <tr>
                    <th>Amount    : <input type="text" name="m2"></th>
                    
                </tr>
                <tr>
                <?php 
                        if(isset($_SESSION['f1'])){
                            unset($_SESSION['f1']);
                        }
                        if(isset($_SESSION['f2'])){
                            unset($_SESSION['f2']);
                        }
                        if(isset($_SESSION['f3'])){
                            unset($_SESSION['f3']);
                        }
                        if(isset($_SESSION['f4'])){
                            unset($_SESSION['f4']);
                        }
                        if(isset($_SESSION['f5'])){
                            unset($_SESSION['f5']);
                        }
                        
                        if(isset($_SESSION['f7'])){
                            unset($_SESSION['f7']);
                        }
                        if(isset($_SESSION['f8'])){
                            unset($_SESSION['f8']);
                        }
                        if(isset($_SESSION['f9'])){
                            unset($_SESSION['f9']);
                        }
                        if(isset($_SESSION['f10'])){
                            unset($_SESSION['f10']);
                        }
                    ?>
                    <th> <input type="submit" name="ggo2"></th>
                </tr>
            </table>
        </form>
        <?php
    }else if(isset($_POST['gg7'])){
        ?>
        <form method="POST" action="do.php">
            <table border="5px">
                <tr>
                    <th>Receiver Name: <input type="text" name="m1"></th>
                </tr>
                <tr>
                    <th>Sender Name :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  <?php echo $_SESSION['f7'] ?></th><br>
                </tr>
                <tr>
                    <th>Amount    : <input type="text" name="m2"></th>
                    
                </tr>
                <tr>
                <?php 
                        if(isset($_SESSION['f1'])){
                            unset($_SESSION['f1']);
                        }
                        if(isset($_SESSION['f2'])){
                            unset($_SESSION['f2']);
                        }
                        if(isset($_SESSION['f3'])){
                            unset($_SESSION['f3']);
                        }
                        if(isset($_SESSION['f4'])){
                            unset($_SESSION['f4']);
                        }
                        if(isset($_SESSION['f5'])){
                            unset($_SESSION['f5']);
                        }
                        if(isset($_SESSION['f6'])){
                            unset($_SESSION['f6']);
                        }
                        
                        if(isset($_SESSION['f8'])){
                            unset($_SESSION['f8']);
                        }
                        if(isset($_SESSION['f9'])){
                            unset($_SESSION['f9']);
                        }
                        if(isset($_SESSION['f10'])){
                            unset($_SESSION['f10']);
                        }
                    ?>
                    <th> <input type="submit" name="ggo2"></th>
                </tr>
            </table>
        </form>
        <?php
    }else if(isset($_POST['gg8'])){
        ?>
        <form method="POST" action="do.php">
            <table border="5px">
                <tr>
                    <th>Receiver Name: <input type="text" name="m1"></th>
                </tr>
                <tr>
                    <th>Sender Name :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  <?php echo $_SESSION['f8'] ?></th><br>
                </tr>
                <tr>
                    <th>Amount    : <input type="text" name="m2"></th>
                    
                </tr>
                <tr>
                <?php 
                        if(isset($_SESSION['f1'])){
                            unset($_SESSION['f1']);
                        }
                        if(isset($_SESSION['f2'])){
                            unset($_SESSION['f2']);
                        }
                        if(isset($_SESSION['f3'])){
                            unset($_SESSION['f3']);
                        }
                        if(isset($_SESSION['f4'])){
                            unset($_SESSION['f4']);
                        }
                        if(isset($_SESSION['f5'])){
                            unset($_SESSION['f5']);
                        }
                        if(isset($_SESSION['f6'])){
                            unset($_SESSION['f6']);
                        }
                        if(isset($_SESSION['f7'])){
                            unset($_SESSION['f7']);
                        }
                        
                        if(isset($_SESSION['f9'])){
                            unset($_SESSION['f9']);
                        }
                        if(isset($_SESSION['f10'])){
                            unset($_SESSION['f10']);
                        }
                    ?>
                    <th> <input type="submit" name="ggo2"></th>
                </tr>
            </table>
        </form>
        <?php
    }else if(isset($_POST['gg9'])){
        ?>
        <form method="POST" action="do.php">
            <table border="5px">
                <tr>
                    <th>Receiver Name: <input type="text" name="m1"></th>
                </tr>
                <tr>
                    <th>Sender Name :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  <?php echo $_SESSION['f9'] ?></th><br>
                </tr>
                <tr>
                    <th>Amount    : <input type="text" name="m2"></th>
                    
                </tr>
                <tr>
                <?php 
                        if(isset($_SESSION['f1'])){
                            unset($_SESSION['f1']);
                        }
                        if(isset($_SESSION['f2'])){
                            unset($_SESSION['f2']);
                        }
                        if(isset($_SESSION['f3'])){
                            unset($_SESSION['f3']);
                        }
                        if(isset($_SESSION['f4'])){
                            unset($_SESSION['f4']);
                        }
                        if(isset($_SESSION['f5'])){
                            unset($_SESSION['f5']);
                        }
                        if(isset($_SESSION['f6'])){
                            unset($_SESSION['f6']);
                        }
                        if(isset($_SESSION['f7'])){
                            unset($_SESSION['f7']);
                        }
                        if(isset($_SESSION['f8'])){
                            unset($_SESSION['f8']);
                        }
                        
                        if(isset($_SESSION['f10'])){
                            unset($_SESSION['f10']);
                        }
                    ?>
                    <th> <input type="submit" name="ggo2"></th>
                </tr>
            </table>
        </form>
        <?php
    }else if(isset($_POST['gg10'])){
        ?>
        <form method="POST" action="do.php">
            <table border="5px">
                <tr>
                    <th>Receiver Name: <input type="text" name="m1"></th>
                </tr>
                <tr>
                    <th>Sender Name :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  <?php echo $_SESSION['f10'] ?></th><br>
                </tr>
                <tr>
                    <th>Amount    : <input type="text" name="m2"></th>
                    
                </tr>
                <tr>
                <?php 
                        if(isset($_SESSION['f1'])){
                            unset($_SESSION['f1']);
                        }
                        if(isset($_SESSION['f2'])){
                            unset($_SESSION['f2']);
                        }
                        if(isset($_SESSION['f3'])){
                            unset($_SESSION['f3']);
                        }
                        if(isset($_SESSION['f4'])){
                            unset($_SESSION['f4']);
                        }
                        if(isset($_SESSION['f5'])){
                            unset($_SESSION['f5']);
                        }
                        if(isset($_SESSION['f6'])){
                            unset($_SESSION['f6']);
                        }
                        if(isset($_SESSION['f7'])){
                            unset($_SESSION['f7']);
                        }
                        if(isset($_SESSION['f8'])){
                            unset($_SESSION['f8']);
                        }
                        if(isset($_SESSION['f9'])){
                            unset($_SESSION['f9']);
                        }
                        
                    ?>
                    <th> <input type="submit" name="ggo2"></th>
                </tr>
            </table>
        </form>
        <?php
    }else if(isset($_POST['go1'])){
        
        $server="localhost";
        $username="root";
        $password="";
        $db="sparks";
        $con=new mysqli($server,$username,$password,$db);
        if($con){
            $sql="SELECT * FROM `naam`";
            $result=$con->query($sql);
            if($result->num_rows>0){?>
                <table border="10px" id="wq2" >
                    <tr>
                        <th width= "90px"> Sr.No </th>
                        <th width= "90px"> NAME </th>
                        <th width= "300px"> EMAIL-ID </th>
                        <th width= "90px"> BALANCE </th>
                    </tr>
                </table>
                <?php
                $cnt=0;
                
                while($row=$result->fetch_assoc()){ 
                    $table[$cnt]=array($row['id'],$row['first'],$row['email_id'],$row['balance']);
                    
                    $cnt+=1;
                }
                ?>
                <div class="parmango">
                <div class="mango">
                <?php for($i=0;$i<$cnt;$i++){ ?>
                    <table border="10px"  id="wq1">
                    
                    <tr>
                        
                        <th width= "90px"><?php echo $table[$i][0] ?>  </th>
                        <th width= "90px"> <?php echo $table[$i][1] ?> </th>
                        <th width= "300px"> <?php echo $table[$i][2] ?>  </th>
                        <th width= "90px">  <?php echo $table[$i][3] ?> </th>
                    </tr>
                </table>
                <?php }?>
                </div>
                <div class="mango1">
                <table border="10px"  id="wq">
                    <tr height="25px">
                        
                        <form method="POST" action="do.php">
                        <?php $_SESSION['f1']=$table[0][1]; ?>
                            <th width= "90px"><input type="submit" value="view" name="gg1" onSubmit="AA()"> </th>
                        </form>
                        
                    </tr>
                    <tr height="25px">
                        <form method="POST" action="do.php">
                        <?php $_SESSION['f2']=$table[1][1]; ?>
                            <th width= "90px"><input type="submit" value="view" name="gg2" onSubmit="AA()"> </th>
                        </form>
                    </tr>
                    <tr height="25px">
                        <form method="POST" action="do.php">
                        <?php $_SESSION['f3']=$table[2][1]; ?>
                            <th width= "90px"><input type="submit" value="view" name="gg3" onSubmit="AA()"> </th>
                        </form>
                    </tr>
                    <tr height="25px">
                        <form method="POST" action="do.php">
                        <?php $_SESSION['f4']=$table[3][1]; ?>
                            <th width= "90px"><input type="submit" value="view" name="gg4" onSubmit="AA()"> </th>
                        </form>
                    </tr>
                    <tr height="25px">
                        <form method="POST" action="do.php">
                        <?php $_SESSION['f5']=$table[4][1]; ?>
                            <th width= "90px"><input type="submit" value="view" name="gg5" onSubmit="AA()"> </th>
                        </form>
                    </tr>
                    <tr height="25px">
                        <form method="POST" action="do.php">
                        <?php $_SESSION['f6']=$table[5][1]; ?>
                            <th width= "90px"><input type="submit" value="view" name="gg6" onSubmit="AA()"> </th>
                        </form>
                    </tr>
                    <tr height="25px">
                        <form method="POST" action="do.php">
                        <?php $_SESSION['f7']=$table[6][1]; ?>
                            <th width= "90px"><input type="submit" value="view" name="gg7" onSubmit="AA()"> </th>
                        </form>
                    </tr>
                    <tr height="25px">
                        <form method="POST" action="do.php">
                        <?php $_SESSION['f8']=$table[7][1]; ?>
                            <th width= "90px"><input type="submit" value="view" name="gg8" onSubmit="AA()"> </th>
                        </form>
                    </tr>
                    <tr height="25px">
                        <form method="POST" action="do.php">
                        <?php $_SESSION['f9']=$table[8][1]; ?>
                            <th width= "90px"><input type="submit" value="view" name="gg9" onSubmit="AA()"> </th>
                        </form>
                    </tr>
                    <tr height="25px">
                        <form method="POST" action="do.php">
                            <?php $_SESSION['f10']=$table[9][1]; ?>
                            <th width= "90px"><input type="submit" value="view" name="gg10" onSubmit="AA()"> </th>
                        </form>
                    </tr>
                </table>
                </div>
                </div>
            <?php 
                    
            }else{
                echo"NO DATA FOUND";
            }
        }else{
            echo $con->server;
        }
    }else{
        $server="localhost";
        $username="root";
        $password="";
        $db="sparks";

        $con=new mysqli($server,$username,$password,$db);
        if($con){
            $sql="SELECT * FROM `transaction`";
            $result=$con->query($sql);
            if($result->num_rows>0){
                ?>
                <table border="10px" align="center">
                    <tr>
                        <th width="90px">Sr.No</th>
                        <th width="90px">Sender</th>
                        <th width="90px">Receiver</th>
                        <th width="90px">Amount</th>
                    </tr>
            </table>
                <?php
                    $count_var=0;
                while($row=$result->fetch_assoc()){
                    $count_var+=1;
                        $data[$count_var-1]=array($row['id'],$row['sender'],$row['receiver'],$row['amount']);
                }
                $data = array_reverse($data,true);
            
                    for($row=$count_var-1 ;$row >= 0 ; $row--){
                    ?>
                    
                   <table border="10px" align="center">
                        <tr>
                            <th width="90px"><?php echo $count_var-$row ?></th>
                            <th width="90px"><?php echo $data[$row][1] ?></th>
                            <th width="90px"><?php echo $data[$row][2] ?></th>
                            <th width="90px"><?php echo $data[$row][3] ?></th>
                        </tr>
                </table>
                <?php

                    }  
            }
        }else{
            echo $con->error();
        }

    }
?>

</html>