<table>
    <tr>
        <?php for($size = 1; $size <= 9 ; $size++){ ?>
        <td>
        <?php
            for( $a=9; $a>0; $a--){
                for($i=1; $i<=$a; $i++){
                    echo "_";
                }for($a1=10; $a1>$a; $a1--){
                    echo"x";
                }for($a2=9; $a2>$a; $a2--){
                    echo"x";
                }echo"<br>";
            }for($b=0; $b<=9; $b++){
                for($j=1; $j<=$b; $j++){
                    echo"_";
                }for($b1=10; $b1>$b; $b1--){
                    echo"x";
                }for($b2=9; $b2>$b; $b2--){
                    echo"x";
                }echo"<br>";
            }
        ?>  
        </td>
        <?php } ?>
    </tr>
    <tr>
        <?php for($size = 1; $size <= 9 ; $size++){ ?>
        <td>
        <?php
            for( $a=9; $a>0; $a--){
                for($i=1; $i<=$a; $i++){
                    echo "_";
                }for($a1=10; $a1>$a; $a1--){
                    echo"x";
                }for($a2=9; $a2>$a; $a2--){
                    echo"x";
                }echo"<br>";
            }for($b=0; $b<=9; $b++){
                for($j=1; $j<=$b; $j++){
                    echo"_";
                }for($b1=10; $b1>$b; $b1--){
                    echo"x";
                }for($b2=9; $b2>$b; $b2--){
                    echo"x";
                }echo"<br>";
            }
        ?>  
        </td>
        <?php } ?>
    </tr>
</table>