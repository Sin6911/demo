<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="style.css">
    </head>
    <Body>
        <div id = "main">
        <h1>Metric Units</h1>
        <form name = "BMI" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);
        ?>"
        onsubmit="return validateForm()">
        <label for = "Age">AGE</label>
        <input type="number" id="age" name = "age">
        <label for ="txt2">age:2-120</label><br><br>
        <label for="Genden" id = "gender">Genden:</label>
        <label for="Nam">Male:</label>
        <input type="checkbox" id="CBB" name="Nam">
        <label for="Nu">Female:</label>
        <input type="checkbox" id="CBG"name="Nu"><br><br>

        <label for ="txt3">Hight(cm)</label>
        <input type="number" id="high"name = "high"><br><br>
        <label for="txt4">Weight(kg)</label>
        <input type=" number" id="wei" name= "wei"><br><br>
        <input type="submit" name ="submit" value=" Calcutale">
        <button id="clear-button" type="reset">Clear</button>
        </div><br><br>
    <script>
        const clearButton = document.querySelector('#clear-button');
        clearButton.addEventListener('click', () => {
            document.querySelector('form').reset();
  });
</script>




        </form>
        <?php
	if(isset($_POST['submit']) ){
        $Age = $_POST['age'];
	    $H = $_POST['high'];
        $W = $_POST['wei'];
        $bmi = $W/$H;
        
        if(isset($_POST['Nam'])) {
            $gender = "Male";
          }
          else  {
            $gender = "Female";
          }
        if ($Age < 2 ) {
            echo "Your age must be greater than 2 and less than 120.";
        }else if($Age > 120){
	        echo "Your age must be greater than 2 and less than 120.";
	    }
	    else if($H == ''){
	        echo "nhap chieu cao";  
	    }
        else if( $W == ''){
	        echo "nhap can nang";
	    }else{
            echo '<div class = "test1">Tuổi:  '. $Age.'</div>';
            echo '<div class = "test1">Giới tính:  '. $gender.'</div>';
            echo '<div class = "test1">Cân nặng:  '. $W.'</div>';
            echo '<div class = "test1">Chiều cao:  '. $H.'</div>';
            echo '<div class = "test1">Chỉ số bmi:  '. $bmi.'</div>';
            echo '<div class = "test1">Kết luận:   ';
            if($bmi > 0.5){
                echo '<class = "test1">Mập như con heo';
            }else{echo '<class = "test1">ốm như chó';}
        }
	}
	?>
    </Body>

</html>