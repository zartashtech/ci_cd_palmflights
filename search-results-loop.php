<?php
	
	
	
	if ($_SESSION['origin']=='London, All Airports [LON], United Kingdom')
	{
	 // Trip Selection If London All Airports
		include('tripSelection-2.php');
											 
	}
	else if($_SESSION['origin'] !== 'London, All Airports [LON], United Kingdom') {
    // Trip Selection If its not London All Airports
    include('tripSelection.php');
}
	
	
									
	if ($_SESSION['trip_type']=='oneway')
	{
		include('search-results-oneway-loop.php');
											 
	}
	else if($_SESSION['trip_type']=='return')
	{
		include('search-results-return-loop.php');
	}
?>