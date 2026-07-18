<?php
	
include('connection-db.php');
	
	if ($_SESSION['trip_type']=='oneway') //select data in one way
	{
		if ($_SESSION['airline_name']=="ALL") //(one way)if preffered airline selected
			{
				if (isset($_SESSION['flight_route'])) //(one way)preffered and direct airline selected
				{
					$sql = "SELECT * FROM flight_detail where flight_route='$_SESSION[flight_route]' and trip_type='$_SESSION[trip_type]' and
					origin='$_SESSION[origin]' and destination='$_SESSION[destination]' and class_name='$_SESSION[class_name]' ORDER BY total_realtime_fare ASC";
				}
					
				else //(one way)preffered and indirect airline selected
				{
					$sql = "SELECT * FROM flight_detail where origin='$_SESSION[origin]' and destination='$_SESSION[destination]' 
					and trip_type='$_SESSION[trip_type]' and class_name='$_SESSION[class_name]' ORDER BY total_realtime_fare ASC";
				}				
			}
			
		else //(one way)not selectes preffered airlines
			{
				if (isset($_SESSION['flight_route'])) //(one way)without preffered and direct flight selected
				{	
					$sql = "SELECT * FROM flight_detail where airline_name='$_SESSION[airline_name]' and flight_route='$_SESSION[flight_route]' and
					origin='$_SESSION[origin]' and trip_type='$_SESSION[trip_type]' and destination='$_SESSION[destination]' and class_name='$_SESSION[class_name]' ORDER BY total_realtime_fare ASC";
				}
				
				else //(one way)without preffered and indirect flight selected
				{
					$sql = "SELECT * FROM flight_detail where airline_name='$_SESSION[airline_name]'  and
				origin='$_SESSION[origin]' and trip_type='$_SESSION[trip_type]' and destination='$_SESSION[destination]' and class_name='$_SESSION[class_name]' ORDER BY total_realtime_fare ASC";
				}
			}
	}
				//end of one way flights data selection
	
	else //(two way)
	{
		if ($_SESSION['airline_name']=="ALL")//(two way)if preffered airline selected
			{ 
				if (isset($_SESSION['flight_route']))//(two way)preffered and direct airline selected
				{
					
					$sql = "SELECT * FROM flight_detail where flight_route='$_SESSION[flight_route]' and trip_type='$_SESSION[trip_type]' and
					origin='$_SESSION[origin]' and destination='$_SESSION[destination]' and class_name='$_SESSION[class_name]' ORDER BY total_realtime_fare ASC";
				}
					
				else //(two way)preffered and indirect airline selected
				{
					
					$sql = "SELECT * FROM flight_detail where origin='$_SESSION[origin]' and trip_type='$_SESSION[trip_type]' and destination='$_SESSION[destination]' 
					and class_name='$_SESSION[class_name]' ORDER BY total_realtime_fare ASC";
				}				
			}
			
		else//(two way)not selectes preffered airlines
			{
				
				if (isset($_SESSION['flight_route']))//(two way)not selectes preffered airlines with direct route
				{	
						
					$sql = "SELECT * FROM flight_detail where airline_name='$_SESSION[airline_name]'  and trip_type='$_SESSION[trip_type]' and  trip_type='$_SESSION[trip_type]' and flight_route='$_SESSION[flight_route]' and
					origin='$_SESSION[origin]' and destination='$_SESSION[destination]' and class_name='$_SESSION[class_name]' ORDER BY total_realtime_fare ASC";
				}
				
				else//(two way)not selectes preffered airlines with indirect route
				{
					
					$sql = "SELECT * FROM flight_detail where airline_name='$_SESSION[airline_name]'  and trip_type='$_SESSION[trip_type]' and
				origin='$_SESSION[origin]' and destination='$_SESSION[destination]' and class_name='$_SESSION[class_name]'      ORDER BY total_realtime_fare ASC";    
				}
			}
	}
	
	//end of two way flights data selection
	
	//$q=mysqli_query($con,$sql);
	$insert=mysqli_query($con,$sql);
	while($row3=mysqli_fetch_array($insert))
	{
			$_SESSION['total']=($_SESSION['adults'] * $row3['adult_fare'])+($_SESSION['child'] * $row3['child_fare'])+($_SESSION['infants'] * $row3['infant_fare']);
			 $total=$_SESSION['total'];
			
			//$ins="INSERT INTO flight_detail(total_realtime_fare)VALUES('$total') WHERE flight_id='$row[flight_id]'";
			$ins="UPDATE flight_detail SET total_realtime_fare='$total' WHERE flight_id='$row3[flight_id]'";
			if(!mysqli_query($con,$ins))
			{
				echo "ghalt hai " . mysqli_error($con);
			}
	}

