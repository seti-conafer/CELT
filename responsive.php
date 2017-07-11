<!DOCTYPE html>
<html>

<head>
	<meta charset='UTF-8'>
	
	<title>Responsive Table</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!--<link rel="stylesheet" href="css/style.css">
	-->
	<!--[if !IE]><!-->
	<style>
	
	/* 
	Max width before this PARTICULAR table gets nasty
	This query will take effect for any screen smaller than 760px
	and also iPads specifically.
	*/
	@media 
	only screen and (max-width: 760px),
	(min-device-width: 768px) and (max-device-width: 1024px)  {
	
		/* Force table to not be like tables anymore */
		table, thead, tbody, th, td, tr { 
			display: block; 
		}
		
		/* Hide table headers (but not display: none;, for accessibility) */
		thead tr { 
			
			
		}
		
		tr { border: 1px solid #ccc; }
		
		td { 
			/* Behave  like a "row" */
			border: none;
			border-bottom: 1px solid #eee; 
			position: relative;
			padding-left: 50%; 
		}
		
		td:before { 
			/* Now like a table header */
			position: absolute;
			/* Top/left values mimic padding */
			top: 6px;
			left: 6px;
			width: 45%; 
			padding-right: 10px; 
			white-space: nowrap;
		}
		
		/*
		Label the data
		*/
		td:nth-of-type(1):before { content: "Time"; }
		td:nth-of-type(2):before { content: "Event"; }
		
	}
	
	/* Smartphones (portrait and landscape) ----------- */
	@media only screen
	and (min-device-width : 320px)
	and (max-device-width : 480px) {
		body { 
			padding: 0; 
			margin: 0; 
			width: 320px; }
		}
	
	/* iPads (portrait and landscape) ----------- */
	@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {
		body { 
			width: 495px; 
		}
	}
	
	</style>
	<!--<![endif]-->

</head>

<body>

	<div id="page-wrap">

	   
	<table>
		<thead>
		<thead>
								<tr>
									<th rowspan="4">August 9<sup>th</sup> (Day 1)</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th>Time</th>
									<th colspan="3">Event</th>
								</tr>
								<tr>
									<td>8:00 - 14:00</td>
									<td colspan="3">Registration, Check in and Pre-Conference Tour</td>
								</tr>
								<tr>
									<td>15:00 - 17:00</td>
									<td colspan="3">Know your mentor session</td>
								</tr>
								<tr>
									<td>17:00 - 18:00</td>
									<td colspan="3">Coffee Break</td>
								</tr>
								<tr>
									<td>18:00 - 20:00</td>
									<td colspan="3">Opening Ceremony and Keynote-1</td>
								</tr>
								<tr>
									<td>21:00 - 22:00</td>
									<td colspan="3">Reception</td>
								</tr>
							</tbody>
						</table>

						<table class="table table-responsive">
							<thead>
								<tr>
									<th rowspan="4">August 10<sup>th</sup> (DAY 2 - INCEPTION)</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th>Time</th>
									<th colspan="3">Event</th>
								</tr>
								<tr>
									<td>8:00 - 10:00</td>
									<td colspan="3">Breakfast</td>
								</tr>
								<tr>
									<td>10:00 - 12:00</td>
									<td colspan="3">Session-1</td>
								</tr>
								<tr>
									<td>12:00 - 13:00</td>
									<td colspan="3">Session-2</td>
								</tr>
								<tr>
									<td>13:00 - 14:00</td>
									<td colspan="3">Lunch</td>
								</tr>
								<tr>
									<td>14:00 - 15:00</td>
									<td colspan="3">Session-3</td>
								</tr>
								<tr>
									<td>15:00 - 16:00</td>
									<td colspan="3">Session-4 & Session-5</td>
								</tr>
								<tr>
									<td>16:00 - 17:00</td>
									<td colspan="3">Session-6</td>
								</tr>
								<tr>
									<td>17:00 - 18:00</td>
									<td colspan="3">Coffee Break</td>
								</tr>
								<tr>
									<td>18:00 - 19:00</td>
									<td colspan="3">Session-7</td>
								</tr>
								<tr>
									<td>19:00 - 22:00</td>
									<td colspan="3">Corporate Tour and Dinner</td>
								</tr>
							</tbody>
						</table>
						<table class="table table-responsive">
							<thead>
								<tr>
									<th rowspan="4">August 11<sup>th</sup> (DAY 3 - SCALING)</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th>Time</th>
									<th colspan="3">Event</th>
								</tr>
								<tr>
									<td>8:00 - 10:00</td>
									<td colspan="3">Breakfast</td>
								</tr>
								<tr>
									<td>10:00 - 11:00</td>
									<td colspan="3">Session-8</td>
								</tr>
								<tr>
									<td>11:00 - 12:00</td>
									<td colspan="3">Session-9</td>
								</tr>
								<tr>
									<td>12:00 - 13:00</td>
									<td colspan="3">Session-10</td>
								</tr>
								<tr>
									<td>13:00 - 14:00</td>
									<td colspan="3">Lunch</td>
								</tr>
								<tr>
									<td>14:00 - 15:00</td>
									<td colspan="3">Session-12</td>
								</tr>
								<tr>
									<td>15:00 - 16:00</td>
									<td colspan="3">Session-13</td>
								</tr>
								<tr>
									<td>16:00 - 16:15</td>
									<td colspan="3">Coffee Break</td>
								</tr>
								<tr>
									<td>16:15 - 18:00</td>
									<td colspan="3">Session-14</td>
								</tr>
								<tr>
									<td>18:00 - 22:00</td>
									<td colspan="3">International Night and Dinner</td>
								</tr>
							</tbody>
						</table>
						<table class="table table-bordere">
							<thead>
								<tr>
									<th rowspan="4">August 12<sup>th</sup> (Day 4 - IMPLEMENTATION)</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th>Time</th>
									<th colspan="3">Event</th>
								</tr>
								<tr>
									<td>8:00 - 10:00</td>
									<td colspan="3">Breakfast</td>
								</tr>
								<tr>
									<td>10:00 - 11:00</td>
									<td colspan="3">Session-15</td>
								</tr>
								<tr>
									<td>11:00 - 12:30</td>
									<td colspan="3">Session-16</td>
								</tr>
								<tr>
									<td>12:30 - 14:00</td>
									<td colspan="3">Lunch</td>
								</tr>
								<tr>
									<td>14:00 - 14:45</td>
									<td colspan="3">Session-17 & Session-18</td>
								</tr>
								<tr>
									<td>14:45 - 15:45</td>
									<td colspan="3">Session-19</td>
								</tr>
								<tr>
									<td>15:45 - 16:00</td>
									<td colspan="3">Coffee Break</td>
								</tr>
								<tr>
									<td>16:00 - 17:00</td>
									<td colspan="3">Session-20</td>
								</tr>
								<tr>
									<td>17:00 - 18:00</td>
									<td colspan="3">Session-21</td>
								</tr>
								<tr>
									<td>18:00 - 22:00</td>
									<td colspan="3">Indian Night and Dinner</td>
								</tr>
							</tbody>
						</table>
						<table class="table table-responsive">
							<thead>
								<tr>
									<th rowspan="4">August 13<sup>th</sup> (Day 5 - SUSTAINING)</th>
								</tr>
							</thead>
							<tbody>
							<tr>
								<th>Time</th>
								<th colspan="3">Event</th>
							</tr>
							<tr>
								<td>8:00 - 10:00</td>
								<td colspan="3">Breakfast</td>
							</tr>
							<tr>
								<td>10:00 - 11:30</td>
								<td colspan="3">Session-22</td>
							</tr>
							<tr>
								<td>11:00 - 13:00</td>
								<td colspan="3">Session-23</td>
							</tr>
							<tr>
								<td>13:00 - 14:00</td>
								<td colspan="3">Lunch</td>
							</tr>
							<tr>
								<td>14:00 - 14:45</td>
								<td colspan="3">Session-24</td>
							</tr>
							<tr>
								<td>14:45 - 15:45</td>
								<td colspan="3">Session-25</td>
							</tr>
							<tr>
								<td>15:45 - 16:00</td>
								<td colspan="3">Coffee Break</td>
							</tr>
							<tr>
								<td>16:00 - 20:00</td>
								<td colspan="3">Closing Ceremony and Seminar</td>
							</tr>
							<tr>
								<td>20:00 - 21:00</td>
								<td colspan="3">Dinner</td>
							</tr>
							<tr>
								<td>21:00 - 23:00</td>
								<td colspan="3">Closing Party</td>
							</tr>
						</tbody>
	</table>
	
	</div>
		
</body>

</html>