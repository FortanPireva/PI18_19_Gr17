<?php


 require_once('../../resources/config.php');

 require_once("../../resources/classes/Flight.class.php");
 include(databaza);

 $bootstrap="../../css/bootstrap.min.css";
 $css_includes=Array("../../css/update.css","../../css/tableMenaxhim.css");
 include(templates_dashboard_header);
 ?>
<div style="position:absolute;left:150%;width:100%;top:0%;">

                <input type='hidden' id='udhetimiId' name='udhetimiId'>
                <table class='tabela' cellspacing='0' style="align-items:center;">
                    <thead>
                        <th align='left'>Emri</th>
                        <th align='left'>Mbiemri</th>
                        <th align='left'>Email</th>
                        <th align="left">A eshte Admin</th>
                    </thead>
                    <?php 
				$db=new database();
                $rez = $db->getData("Select * From user  order by uid");

                foreach ($rez as $rreshti) {
                    echo "<form method=\"POST\"><tr><td>".$rreshti['emri']."</td><td>".$rreshti['mbiemri']."</td><td>".$rreshti['email']."</td><td>".$rreshti['isManager']."</td><td><input type=\"hidden\" name=\"uid\" value=\"".$rreshti['uid']."\"></td> <td style='text-align: center'>"                       
                    . "<input type='submit' formaction=\"editUser.php\" value='Edit' class='button button-small id-submit' id='id_".$rreshti['uid']."'></td>
                    <td><input type='submit' value='Delete' formaction=\"deleteUser.php\" class='button button-small id-submit' id='id_".$rreshti['uid']."'></td></tr></form>";
                }
                ?>
                </table>
</div>