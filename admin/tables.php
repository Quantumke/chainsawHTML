<?php
include 'dbdrivers.php';

$result = mysql_query("select * FROM  projects ");
$count = mysql_num_rows($result);

echo $count;
?>

  <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="toggleColumn-datatable">
                            <thead>
                                <tr>
								                                    <th></th>

                                    <th>Name</th>
                                    <th>Years of Expirience</th>
                                    <th>Current Employer</th>
                                    <th>Expected Salary</th>
                                    <th>Status </th>
                                    <th>Relevant Documents</th>
                                </tr>
                            </thead>



                            <tbody>
							 <?php

				if ($count>0)
				{
					$i=0;
					$j='';
					for($i=0;$i<$count; $i++)
					{
						$j=$i+1;
						echo("<tr>");

							echo("<td>".mysql_result($result,$i,"id")."</td>");
							echo("<td>".mysql_result($result,$i,"project_name")."</td>");
							echo("<td>".mysql_result($result,$i,"github_link")."</td>");
							echo("<td>".mysql_result($result,$i,"github_fork")."</td>");
							echo("<td>".mysql_result($result,$i,"link")."</td>");
						echo("</tr>");
					}
				}
				else
				{
							echo("<td >&nbsp;</td>");
							echo("<td>&nbsp;</td>");
							echo("<td>&nbsp;</td>");
				}

				?>

                            </tbody>
                        </table>
