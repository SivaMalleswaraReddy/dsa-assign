<?php
/* 9. Write a PHP script using nested for loop that creates a chess board
as shown below. Use table width="270px" and take 30px as cell
height and width. */
for($row=1;$row<=8;$row++)
{
    echo "<tr>";
    for($col=1;$col<=8;$col++)
    {
        $total=$row+$col;
        if($total%2==0)
        {
            echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
        }
        else
        {
            echo "<td height=30px width=30px bgcolor=#000000></td>";
        }
    }
    echo "</tr>";

}
