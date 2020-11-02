<?php

$presentTime = new DateTime();
/**echo $presentTime->format('M d Y A h i');
echo $presentTime->format('M');*/

$destinationTime = new DateTime();
$destinationTime->setDate(2015, 10, 21);
$destinationTime->setTime(16, 29);
/**echo $destinationTime->format('M d Y A h i');*/

echo '<table>';
    echo '<tr>';
        echo '<td>MONTH</td>';
        echo '<td>DAY</td>';
        echo '<td>YEAR</td>';
        echo '<td> </td>';
        echo '<td>HOUR</td>';
        echo '<td>MIN</td>';
    echo '</tr>';
    echo'<tr>';
        echo '<td>'.$presentTime->format('M').'</td>';
        echo '<td>'.$presentTime->format('d').'</td>';
        echo '<td>'.$presentTime->format('Y').'</td>';
        echo '<td>'.$presentTime->format('A').'</td>';
        echo '<td>'.$presentTime->format('h').'</td>';
        echo '<td>'.$presentTime->format('i').'</td>';
    echo'</tr>';
echo '</table>';

echo '<br><br>';

echo '<table>';
        echo '<tr>';
            echo '<td>MONTH</td>';
            echo '<td>DAY</td>';
            echo '<td>YEAR</td>';
            echo '<td> </td>';
            echo '<td>HOUR</td>';
            echo '<td>MIN</td>';
        echo '</tr>';
        echo'<tr>';
                echo '<td>'.$destinationTime->format('M').'</td>';
                echo '<td>'.$destinationTime->format('d').'</td>';
                echo '<td>'.$destinationTime->format('Y').'</td>';
                echo '<td>'.$destinationTime->format('A').'</td>';
                echo '<td>'.$destinationTime->format('h').'</td>';
                echo '<td>'.$destinationTime->format('i').'</td>';
            echo'</tr>';
echo '</table>';

echo '<br><br>';

$interval = $presentTime->diff($destinationTime);

echo "Difference between Now and Destination Date: " .$interval->y. " years, " .$interval->m. " months, " .$interval->d. " days, " .$interval->h. " hours and " .$interval->i. " minutes.";
