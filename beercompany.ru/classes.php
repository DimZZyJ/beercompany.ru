<?php
    class shop {
        public  $id;
        public  $adress;
        public  $status;
		function show(){
			$_status = "Статус:Не работает";
			$_statusCheck="src=images/x.png";
			if ($this->status==1) {
				$_status= "Статус:Работает" ;
				
				$_statusCheck="src=images/v.png";
			   }

			echo '<div id="places" style="background-color: #792701;border: 2px solid gray;">
					<table >
						<tr><td><img src="https://burobiz-a.akamaihd.net/uploads/images/8939/large___________3.jpg" height="100" width="100"></td> <td>'.$this->adress.'</td> <td> 88005553536</td><td>'.$_status.'</td><td><img '.$_statusCheck.' alt="X" height="10" width="10"></td></tr>
					</table>
				 	</div>';
		}
         function shop ($id,$adress,$status){
             $this->id=$id;
             $this->adress=$adress;
             $this->status=$status;
         }
         
    }
    require_once 'connection.php'; // подключаем скрипт
    $link = mysqli_connect($host,$user,$password,$database) 
						or die("Ошибка " . mysqli_error($link));
				
				// выполняем операции с базой данных
				$query ="SELECT * FROM shop";
				$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
				$n = mysqli_num_rows($result); 
   				$_shop = array(); 
				$_shops=[];
   				for($i = 0; $i < $n; $i++) $_shop[] = mysqli_fetch_assoc($result); 
				   foreach($_shop as $a)
				   {    
					   $_shops[]=new shop($a['id'],$a['adress'],$a['status']);
					  // $_status = "Статус:Не работает";
					  
					 // $_statusCheck="src=images/x.png";
					   
					  // if ($a['status']==1) {
						//$_status= "Статус:Работает" ;
						
						//$_statusCheck="src=images/v.png";
					  // }
					  //вывод для метода     
					//echo '<div id="places" style="background-color: #792701;border: 2px solid gray;">
					//<table >
					//	<tr><td><img src="https://burobiz-a.akamaihd.net/uploads/images/8939/large___________3.jpg" height="100" width="100"></td> <td>'.$a['adress'].'</td> <td> 88005553536</td><td>'.$_status.'</td><td><img '.$_statusCheck.' alt="X" height="10" width="10"></td></tr>
					//</table>
				 	//	</div>';
				   } 
				   //вывод значений из массива объектов
				   
				   
?>