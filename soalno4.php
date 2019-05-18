<?php
function actionTest($n)
{
       $total = $n*4 - 4;
       for($j=0; $j<$n;$j++)
       {
               if($j==0)
                       for($i=1;$i<=$n;$i++)
                              echo "=&nbsp;&nbsp;";
               else if($j==$n+1)
                       for($j=$total;$j>$i-1;$j--)
                              echo "*&nbsp;&nbsp;";
               else
                       for($k=0;$k<$n;$k++)
                       {
                              if($k==0)
                                      echo "*&nbsp;&nbsp;";
                              else if($k==$n-1)
                                      echo "=&nbsp;&nbsp;";
                              else
                                      echo "*&nbsp;&nbsp;";
                              echo "";
                       }
               echo "<br>";
       }
}
actionTest(5);
?>