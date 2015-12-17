<html>
<head>
</head>
<body>


<?php

			include 'connect_db.php';
        	mysql_select_db("tagsearch");
			
		if(isset($_POST['tagsearch'])){
			 $xsearch = $_POST['search_value'];			 echo $xsearch;
			 
		    $search = mysql_real_escape_string(trim($_POST['search_value']));
			
			echo $search;
			
		    $search_user = mysql_query("SELECT * FROM 'search' WHERE 'Tag' LIKE '%$search%'");
			
			
		    while($row = mysql_fetch_assoc($search_user)){
				if($row==NULL){
					echo "No Match Found!";
					}
				else{
		        $name = $row['Post'];
		    	echo $name."</br>";
				}
			}
		}
			?>
            </body>
			</html>