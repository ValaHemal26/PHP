<html lang="en">
<head>
    <link rel="stylesheet" href="bootstrap.min.css"></link>
    <style>
    .main_width{
        width: 600px;
        border-radius: 12px;
        margin-top: 100px;
    }
    
    </style>
</head>
<body > 
    <div class="container bg-dark text-white main_width">
    <form action="" method="POST"> 
         <div class="row">
            <div class="col-12"><h1 class="text-warning border-bottom">STUDENT MARKSHEET</h1></div>
        </div>
        <div class="row  p-2">
            <div class="col-3">NAME:</div>
            <div class="col-9"><input type="text" name="name" class="form-control"></div>
        </div>
        <div class="row  p-2">
            <div class="col-3">OS:</div>
            <div class="col-9"><input type="number" name="os" class="form-control"></div>
        </div>
        <div class="row  p-2">
            <div class="col-3">PHP:</div>
            <div class="col-9"><input type="number" name="php" class="form-control"></div>
        </div><div class="row  p-2">
            <div class="col-3">OOAD:</div>
            <div class="col-9"><input type="number" name="ooad" class="form-control"></div>
        </div><div class="row  p-2">
            <div class="col-3">VB.NET:</div>
            <div class="col-9"><input type="number" name="vb" class="form-control"></div>
        </div><div class="row  p-2">
            <div class="col-3">PRACTICAL:</div>
            <div class="col-9"><input type="number" name="practical" class="form-control"></div>
        </div>
        <center><div class="row">
            <div class="col-12"><input type="submit" class="btn bg-warning " name="submit" ></div>
        </div></center>
        <div class="row">
        <div class="col">
        <?php
            $conn=mysqli_connect("localhost","root","","kbp");
            if($conn)
            {
                    echo "Connected Successfully<br>";
            }
            else
            {
                    echo "Not Connected Successfully<br>";    
            }
            if(isset($_POST['submit']))
            {
                $name=$_POST['name'];
                $os=$_POST['os'];
                $php=$_POST['php'];
                $ooad=$_POST['ooad'];
                $vb=$_POST['vb'];
                $practical=$_POST['practical'];
                $total=($os+$php+$ooad+$vb+$practical);
                $query="insert into student(name,os,php,ooad,vb,practical,total)values('$name',$os,$php,$ooad,$vb,$practical,$total)";
                $r=mysqli_query($conn,$query);
                if($r)
                {
                    echo "Inserted";
                }
                else
                {
                    echo"Not Inserted";
                }
            }
        ?>
        </div>
        </div>
    </form>
    </div>
</body>
