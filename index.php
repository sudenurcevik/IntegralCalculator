<html>
<body>
<?php
integral($_POST["A"],$_POST["B"],$_POST["C"],$_POST["D"],$_POST["a"],$_POST["b"]);
?>
<h1>Definite Integral Calculation</h1>
<h4>by Group 27</h4>
<form action="" method="POST">
  <p>f(x) = <input type="number"  name="A"  size="4"> + 
  <input type="number" name="B" size="4"> x +
  <input type="number" name="C" size="4"> x<sup>2</sup> + 
  <input type="number" name="D" size="4"> x<sup>3</sup> + exp(x) + cos(x) </p>
  
  <p>a = <input type="number" name="a"  size="4">, b = 
  <input type="number"  name="b" size="4"> for <span><sub>a</sub>&#8747;<sup>b</sup></span> f(x)dx</p>
  
  <input type="submit" value="Submit">
</form>
</body>
</html>
<?php
    function integral($A,$B,$C,$D,$a,$b){
        $ceiling = ($A*$b)+($B*($b**2)/(2))+($C*($b**3)/(3))+($D*($b**4)/(4))+exp($b)+sin($b) ;
        $floor = $A*$a+($B*($a**2)/(2))+($C*($a**3)/(3))+($D*($a**4)/(4))+exp($a)+sin($a) ;
        $result = $ceiling - $floor ;
        echo "<p>";
        print_r("Result is : " );
        print_r($result);
        echo "</p>";
    }
?>