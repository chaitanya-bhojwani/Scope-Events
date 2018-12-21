<?php
	$p = $_GET['id'];
    include 'connect.php';
    $upload_id = array(101,111,222);
    $delete_id = array(101,111,222);
    session_start();

	switch($p) {
		case "1":
		echo '<h4 align="center"><span class="badge" style="background-color: #26306D; padding: 10px; color: #fff; font-weight: 400">HOME</span></h4><br>
        <div class="card w-75 mb-6" style="margin:5px; border-color: #26306D">
                <div class="card-header" style="text-transform: uppercase; letter-spacing: .1em; font-size: 15px; font-weight: 400; color: #26306D !important;">Spotlight</div>
                <div class="card-body" align="left">
                    <ul>
                        <li style="color: #26306D;"><h5 class="card-title text-dark">Guidlines</h5>
                            <a href="http://www.vit.ac.in/" target="_blank" style="text-decoration: underline"><p class="card-text">Click Here to view guidlines</p></a>
                        </li>
                    </ul>
                 </div>
        </div>';
		break;
					  
		case "2":
		echo '
        <div align="left">
        <form action="form_controllers.php" method="post" enctype="multipart/form-data" target="_blank">
<div class="container" style="height:auto;border:1px solid; border-radius:5px;">
<div style="color:white; background-color:darkblue; height:35px; text-align:center; font-weight: 400">
Guest Lecture/Workshop Request Form
</div>
 <div class="form-group">
    <label style="margin-top: 10px;">Guest Lecture/ Workshop Topic</label>
    <input type="text" class="form-control" id="topic" name="topic" placeholder="Topic" style="width: 100%; border-radius: 0.25rem;">
 </div>

 <div class="row">
    <div class="col">
	Event Type
      <select class="form-control" id="event_type" name="event_type" style="width: 100%; border-radius: 0.25rem;">
		<option value="a">A</option>
		<option value="b">B</option>
		<option value="c">C</option>
		<option value="d">D</option>
	</select>
    </div>
    <div class="col">
	Category
        <select class="form-control" id="category" name="category" style="width: 100%; border-radius: 0.25rem;">
		<option value="a">A</option>
		<option value="b">B</option>
		<option value="c">C</option>
		<option value="d">D</option>
	</select>
	</div>
 </div>

 <div class="row">
    <div class="col">
	Course Name
     <input type="text" class="form-control" id="course_name" name="course_name" placeholder="Enter Course Name" style="width: 100%; border-radius: 0.25rem;">
    </div>
    <div class="col">
	Target Audience
        <select class="form-control" id="category" name="target_audience" style="width: 100%; border-radius: 0.25rem;">
		<option value="a">A</option>
		<option value="b">B</option>
		<option value="c">C</option>
		<option value="d">D</option>
	</select>
	</div>
	<div class="col">
	Number Of Participants
        <input type="number" class="form-control" id="participants" name="no_participants" placeholder="Enter Count" style="width: 100%; border-radius: 0.25rem;">
	</div>
 </div>
 <div class="row">
    <div style="width:30%; margin-left:16px;">
	Number Of Organizers
     <input type="number" class="form-control" id="no_organizers" name="no_organizers" placeholder="No. of organizers" style="width: 100%; border-radius: 0.25rem;">
    </div>
</div>
<div class="row">
	<div class="col">
	Event Venue
	<input type="text" class="form-control" id="event_venue" name="event_venue" style="width: 100%; border-radius: 0.25rem;">
	</div>
</div>
<div align="center">
<div class="row">
    <div class="col">
	Event Date
     <input type="date" class="form-control" id="event_date" name="event_date" placeholder="dd-mm-yyyy" style="width: 100%; border-radius: 0.25rem;">
    </div>
    <div class="col">
	Timing
   <input type="text" class="form-control" id="event_timing" name="event_timing" placeholder="Example: 09:00AM to 11:00AM" style="width: 100%; border-radius: 0.25rem;">    
	</div>
	<div class="col">
	Duration
	<input type="text" class="form-control" id="duration" name="event_duration" placeholder="Enter No. of Days">
	</div>
 </div>
<div style="text-align:center; height:30px; width:40%; background:darkgreen; margin:20px; color:white; border-radius:10px;">Resource Person Details</div></div>

	Resource Person Name
<input type="text" class="form-control" id="person_name" name="person_name" placeholder="Mr./Ms./Mrs. XYZABC" style="width: 100%; border-radius: 0.25rem;">    
<div class="row">
    <div class="col">
	Resource Person Email
     <input type="text" class="form-control" id="person_email" name="person_email" placeholder="abcxyz@pqr.com" style="width: 100%; border-radius: 0.25rem;">
    </div>
    <div class="col">
	Designation
   <input type="text" class="form-control" id="person_designation" name="person_designation" style="width: 100%; border-radius: 0.25rem;">    
	</div>
 </div>
 Institution/Company Name
 <input type="text" class="form-control" id="inst_company" name="inst_company" style="width: 100%; border-radius: 0.25rem;">
 Profile
 <input type="file" class="form-control" id="profile" name="file" style="width: 100%; border-radius: 0.25rem;"><div align="center">
 <input type="hidden" class="form-control" id="form_type" name="form_type" value="g">
 <div align="center">
 <input type="submit" name="submit" class="form-control" style="background:darkgreen; width:30%; margin:20px; color:white; border-radius: 0.25rem;"></div>
 
    </div>
</form></div>';
		break;

		case "3": 
		echo '<div align="left">
<form action="form_controllers.php" method="post" enctype="multipart/form-data" target="_blank">
<div class="container" style="height:auto;border:1px solid; border-radius:5px;">
<div style="color:white;background-color:darkblue;height:35px;text-align:center; font-weight: 400">
Hackathon/Makeathon/Codeathon Request
</div>
 <div class="form-group">
    <label style="margin-top: 10px">Title of The Event <div style="color:green; display:inline; font-weight:700">(Ex. Hackathon for a Cause)</div></label>
    <input type="text" class="form-control" id="topic" name="topic" placeholder="Topic">
 </div>
 <div class="row">

    <div class="col">
	Event Date
		<input type="date" class="form-control" id="event_date" name="event_date" placeholder="Enter Course Name">
    </div>
    <div class="col">
	Timing
	<input type="text" class="form-control" id="event_timing" name="event_timing" placeholder="Example: 09:00AM to 11:00AM" style="width: 100%; border-radius: 0.25rem;">    
	</div>
	<div class="col">
	Duration
	<input type="text" class="form-control" id="duration" name="event_duration" placeholder="Enter No. of Days">
	</div>
 </div>
 
 <div class="row">
 <div class="col">
	Target Audience
        <select class="form-control" name="target_audience" id="category" style="width: 100%; border-radius: 0.25rem;">
		<option value="a">A</option>
		<option value="b">B</option>
		<option value="c">C</option>
		<option value="d">D</option>
	</select>
	</div>
	<div class="col">
	Number Of Organizers
	<input type="number" class="form-control" id="participants" name="no_organizers" placeholder="Enter Count" style="width: 100%; border-radius: 0.25rem;">
	</div>
	<div class="col">
	Event Venue
	<input type="text" class="form-control" id="event_venue" name="event_venue" style="width: 100%; border-radius: 0.25rem;">
	</div>
</div>

<div class="row">
    <div class="col">
	Resource Person Name
     <input type="text" class="form-control" id="person_name" name="person_name" placeholder="Name" style="width: 100%; border-radius: 0.25rem;">
    </div>
</div>
<div class="row">
    <div class="col">
	Resource Person Email
     <input type="text" class="form-control" id="person_email" name="person_email" placeholder="Email" style="width: 100%; border-radius: 0.25rem;">
    </div>
	    <div class="col">
	Resource Person Designation
     <input type="text" class="form-control" id="person_designation" name="person_designation" placeholder="Designation" style="width: 100%; border-radius: 0.25rem;">
    </div>
</div>
Institution/Company Name
<input type="text" class="form-control" id="inst_company" name="inst_company" style="width: 100%; border-radius: 0.25rem;">
Upload Schedule
<input type="file" class="form-control" id="schedule" name="file" enctype="multipart/form-data" style="width: 100%; border-radius: 0.25rem;"><div align="center">
<input type="hidden" class="form-control" id="form_type" name="form_type" value="h">
    <input type="submit" name="submit" class="form-control" style="background:darkgreen; width:30%; margin:20px; color:white; border-radius: 0.25rem;"></div></div>
    </form></div>';
		break;

		case "4":
		echo '<div align="left">
        <form action="form_controllers.php" method="post" enctype="multipart/form-data" target="_blank">
<div class="container" style="height:auto;border:1px solid; border-radius:5px;">
<div style="color:white;background-color:darkblue;height:35px;text-align:center;font-weight: 400">
Value Added Program Request
</div>
 <div class="form-group">
    <label style="margin-top: 10px">Program Title</label>
    <input type="text" class="form-control" name="topic" id="topic" placeholder="Topic">
 </div>
 
<div class="row">
    <div class="col">
	Event Date
		<input type="date" class="form-control" id="event_date" name="event_date" placeholder="Enter Course Name">
    </div>
    <div class="col">
	Duration
	<input type="text" class="form-control" id="duration" name="event_duration" placeholder="Enter No. of Days">
	</div>
 </div>
 
 <div class="row">
 <div class="col">
	Target Audience
        <select class="form-control" id="category" name="target_audience" style="width: 100%; border-radius: 0.25rem;">
		<option value="a">A</option>
		<option value="b">B</option>
		<option value="c">C</option>
		<option value="d">D</option>
	</select>
	</div>
	<div class="col">
	Number Of Organizers
	<input type="number" class="form-control" id="participants" name="no_organizers" placeholder="Enter Count" style="width: 100%; border-radius: 0.25rem;">
	</div>
</div>
Event Venue
<input type="text" class="form-control" id="event_venue" name="event_venue" style="width: 100%; border-radius: 0.25rem;">
Timing
<input type="text" class="form-control" id="event_timing" name="event_timing" placeholder="Example: 09:00AM to 11:00AM" style="width: 100%; border-radius: 0.25rem;">
<div class="row">
    <div class="col">
	Resource Person Name
     <input type="text" class="form-control" id="person_name" name="person_name" placeholder="Name" style="width: 100%; border-radius: 0.25rem;">
    </div>
</div>

<div class="row">
    <div class="col">
	Resource Person Email
     <input type="text" class="form-control" id="person_email" name="person_email" placeholder="Email" style="width: 100%; border-radius: 0.25rem;">
    </div>
	    <div class="col">
	Resource Person Designation
     <input type="text" class="form-control" id="person_designation" name="person_designation" placeholder="Designation" style="width: 100%; border-radius: 0.25rem;">
    </div>
</div>
Institution/Company Name
<input type="text" class="form-control" id="inst_company" name="inst_company" style="width: 100%; border-radius: 0.25rem;">
Upload Schedule
<input type="file" class="form-control" name="file" style="width: 100%; border-radius: 0.25rem;">
<input type="hidden" class="form-control" id="form_type" name="form_type" value="v">
<div align="center">
    <input type="submit" name="submit" class="form-control" style="background:darkgreen; width:30%; margin:20px; color:white; border-radius: 0.25rem;"></div></div>
</form></div>';
		break;
            
        case "5":
        $i = 1;
        $query ='SELECT * FROM events WHERE teacher_id="'.$_SESSION["loginid"].'" ORDER BY request_id DESC';
        $result = mysqli_query($con, $query);
        $a = '<h4 align="center"><span class="badge" style="background-color: #26306D; padding: 10px; color: #fff; font-weight: 400">DELETE REQUEST</span></h4><br>
        <div class="card mb-6" style="margin:5px; border-color: #26306D; width: 90%;">
        <div class="card-header" style="text-transform: uppercase; letter-spacing: .1em; font-size: 15px; font-weight: 400; color: #26306D !important;">Delete option is enabled before HOD Approval || Rejected</div>
                <div class="card-body" align="left">
            <div class="table-responsive">
                <table class="table table-hover table-striped" style="color: #000; border-color: #26306D;">
                    <thead style="color: #fff; background-color: #26306D; border-color: #26306D;">
                        <tr>
                            <td>S.NO.</td>
                            <td>DATE</td>
                            <td>EVENT TYPE</td>
                            <td>TOPIC</td>
                            <td>GUEST NAME</td>
                            <td>STATUS</td>
                            <td>DELETE</td>
                        </tr>
                    </thead>
                    <tbody>';
        if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
        if($row["type_req"]=='g'){
        $row["type_req"] = "Guest Lecture/Workshop";
        }
        if($row["type_req"]=='h'){
        $row["type_req"] = "Hackathon/Makeathon/Codeathon";
        }
        if($row["type_req"]=='v'){
        $row["type_req"] = "Value Added Program";
        }
            if($row["approval_status"]==0) {
                $b = '<tr>
                            <td>'.$i.'</td>
                            <td>'.$row["event_date"].'</td>
                            <td>'.$row["type_req"].'</td>
                            <td>'.$row["topic"].'</td>
                            <td>'.$row["guest_name"].'</td>
                            <td><h4><span class="badge badge-info" style="padding: 10px; color: #fff; font-weight: 400">PENDING</span></h4></td>
                            <td><a id="delete_anchor" onclick="delete_logic('.$row["request_id"].')" style="cursor: pointer"><i class="fa fa-trash fa-lg" aria-hidden="true" style="color: #26306D"></i></td>
                        </tr>';
                $i++;
                $a = $a.$b;
            }
            else if($row["approval_status"]==2) {
                $b='<tr>
                            <td>'.$i.'</td>
                            <td>'.$row["event_date"].'</td>
                            <td>'.$row["type_req"].'</td>
                            <td>'.$row["topic"].'</td>
                            <td>'.$row["guest_name"].'</td>
                            <td><h4><span class="badge badge-danger" style="padding: 10px; color: #fff; font-weight: 400">REJECTED</span></h4></td>
                            <td><a id="delete_anchor" onclick="delete_logic('.$row["request_id"].')" style="cursor: pointer"><i class="fa fa-trash fa-lg" aria-hidden="true" style="color: #26306D"></i></td>
                        </tr>';
                $i++;
                $a=$a.$b;
            }
        }
        }
        $b='</tbody>
                </table>
            </div>
                </div>
        </div>';
            $a=$a.$b;
            echo $a;
/*		echo '<h4 align="center"><span class="badge" style="background-color: #26306D; padding: 10px; color: #fff; font-weight: 400">DELETE REQUEST</span></h4><br>
        <div class="card mb-6" style="margin:5px; border-color: #26306D; width: 90%;">
        <div class="card-header" style="text-transform: uppercase; letter-spacing: .1em; font-size: 15px; font-weight: 400; color: #26306D !important;">Delete option is enabled before HOD Approval || Rejected</div>
                <div class="card-body" align="left">
            <div class="table-responsive">
                <table class="table table-hover table-striped" style="color: #000; border-color: #26306D;">
                    <thead style="color: #fff; background-color: #26306D; border-color: #26306D;">
                        <tr>
                            <td>S.NO.</td>
                            <td>DATE</td>
                            <td>EVENT TYPE</td>
                            <td>TOPIC</td>
                            <td>GUEST NAME</td>
                            <td>STATUS</td>
                            <td>DELETE</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>2018-10-26</td>
                            <td>Guest Lecture</td>
                            <td>ABC</td>
                            <td>Mr. XYZ</td>
                            <td><h4><span class="badge badge-info" style="padding: 10px; color: #fff; font-weight: 400">PENDING</span></h4></td>
                            <td><a id="delete_anchor" onclick="delete_logic('.$upload_id[1].')" style="cursor: pointer"><i class="fa fa-trash fa-lg" aria-hidden="true" style="color: #26306D"></i></td>
                        </tr>
                    </tbody>
                </table>
            </div>
                </div>
        </div>';*/
		break;
        
        case "6":
        $i = 1;
        $query ='SELECT * FROM events WHERE teacher_id="'.$_SESSION["loginid"].'" ORDER BY request_id DESC';
        $result = mysqli_query($con, $query);
        $a = '<h4 align="center"><span class="badge" style="background-color: #26306D; padding: 10px; color: #fff; font-weight: 400">UPLOAD DOCUMENTS</span></h4><br>
        <div class="card mb-6" style="margin:5px; border-color: #26306D; width: 90%;">
                <div class="card-header" style="text-transform: uppercase; letter-spacing: .1em; font-size: 15px; font-weight: 400; color: #26306D !important;"></div>
                <div class="card-body" align="left">
            <div class="table-responsive">
                <table class="table table-hover table-striped" style="color: #000; border-color: #26306D;">
                    <thead style="color: #fff; background-color: #26306D; border-color: #26306D;">
                        <tr>
                            <td>S.NO.</td>
                            <td>DATE</td>
                            <td>EVENT TYPE</td>
                            <td>TOPIC</td>
                            <td>STATUS</td>
                            <td>REMARKS</td>
                            <td>SELECT PDF</td>
                            <td>UPLOAD</td>
                            <td>DOWNLOAD</td>
                        </tr>
                    </thead>
                    <tbody>';
        if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
        if($row["type_req"]=='g'){
            $row["type_req"] = "Guest Lecture/Workshop";
        }
        if($row["type_req"]=='h'){
        $row["type_req"] = "Hackathon/Makeathon/Codeathon";
        }
        if($row["type_req"]=='v'){
        $row["type_req"] = "Value Added Program";
        }
            if($row["doc_status"]==0) {
                $b='<tr>
                            <td>'.$i.'</td>
                            <td>'.$row["event_date"].'</td>
                            <td>'.$row["type_req"].'</td>
                            <td>'.$row["topic"].'</td>
                            <td><h4><span class="badge badge-warning" style="padding: 10px; color: #fff; font-weight: 300">SUBMISSION PENDING</span></h4></td>
                            <td></td>
                            <td><input id="avatar" type="file" name="avatar" /></td>
                            <td><a id="upload_anchor" onclick="upload_logic('.$row["request_id"].')" style="cursor: pointer"><h4 align="center"><span class="badge badge-primary" style="padding: 10px; color: #fff; font-weight: 300">Upload</span></h4></a></td>
                            <td></td>
                        </tr>';
                $i++;
                $a=$a.$b;
            }
            else if($row["doc_status"]==1) {
                $b='<tr>
                            <td>'.$i.'</td>
                            <td>'.$row["event_date"].'</td>
                            <td>'.$row["type_req"].'</td>
                            <td>'.$row["topic"].'</td>
                            <td><h4><span class="badge badge-success" style="padding: 10px; color: #fff; font-weight: 400">COMPLETED</span></h4></td>
                            <td></td>
                            <td style="color: #388E3C; font-weight: 400;">REPORT SUBMITTED SUCCESSFULLY</td>
                            <td></td>
                            <td><a id="download_anchor" onclick="download_logic('.$row["request_id"].')" style="cursor: pointer"><i class="fa fa-download fa-lg" aria-hidden="true" style="color: #26306D"></i></a></td>
                        </tr>';
                $i++;
                $a=$a.$b;
            }
        }
        }
        $b='</tbody>
                </table>
            </div>
                </div>
        </div>';
        $a=$a.$b;
        echo $a;
/*		echo '<h4 align="center"><span class="badge" style="background-color: #26306D; padding: 10px; color: #fff; font-weight: 400">UPLOAD DOCUMENTS</span></h4><br>
        <div class="card mb-6" style="margin:5px; border-color: #26306D; width: 90%;">
                <div class="card-header" style="text-transform: uppercase; letter-spacing: .1em; font-size: 15px; font-weight: 400; color: #26306D !important;"></div>
                <div class="card-body" align="left">
            <div class="table-responsive">
                <table class="table table-hover table-striped" style="color: #000; border-color: #26306D;">
                    <thead style="color: #fff; background-color: #26306D; border-color: #26306D;">
                        <tr>
                            <td>S.NO.</td>
                            <td>DATE</td>
                            <td>EVENT TYPE</td>
                            <td>TOPIC</td>
                            <td>STATUS</td>
                            <td>REMARKS</td>
                            <td>SELECT PDF</td>
                            <td>UPLOAD</td>
                            <td>DOWNLOAD</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>2018-10-26</td>
                            <td>Guest Lecture</td>
                            <td>ABC</td>
                            <td><h4><span class="badge badge-success" style="padding: 10px; color: #fff; font-weight: 400">COMPLETED</span></h4></td>
                            <td></td>
                            <td style="color: #388E3C; font-weight: 400;">REPORT SUBMITTED SUCCESSFULLY</td>
                            <td></td>
                            <td><a id="download_anchor" onclick="download_logic('.$upload_id[1].')" style="cursor: pointer"><i class="fa fa-download fa-lg" aria-hidden="true" style="color: #26306D"></i></a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>2018-10-21</td>
                            <td>Hackathon</td>
                            <td>ABC</td>
                            <td><h4><span class="badge badge-warning" style="padding: 10px; color: #fff; font-weight: 300">SUBMISSION PENDING</span></h4></td>
                            <td></td>
                            <td><input type="file"/></td>
                            <td><a id="upload_anchor" onclick="upload_logic('.$upload_id[1].')" style="cursor: pointer"><h4 align="center"><span class="badge badge-primary" style="padding: 10px; color: #fff; font-weight: 300">Upload</span></h4></a></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
                </div>
        </div>';*/
		break;
        
        case "7":
        $i = 1;
        $query ='SELECT * FROM events WHERE teacher_id="'.$_SESSION["loginid"].'" ORDER BY request_id DESC';
        $result = mysqli_query($con, $query);
        $a = '<h4 align="center"><span class="badge" style="background-color: #26306D; padding: 10px; color: #fff; font-weight: 400">STATUS OF REQUEST</span></h4><br>
        <div class="card mb-6" style="margin:5px; border-color: #26306D; width: 90%;">
        <div class="card-header" style="text-transform: uppercase; letter-spacing: .1em; font-size: 15px; font-weight: 400; color: #26306D !important;"></div>
                <div class="card-body" align="left">
            <div class="table-responsive">
                <table class="table table-hover table-striped" style="color: #000; border-color: #26306D;">
                    <thead style="color: #fff; background-color: #26306D; border-color: #26306D;">
                        <tr>
                            <td>S.NO.</td>
                            <td>EVENT TYPE</td>
                            <td>GUEST NAME</td>
                            <td>TOPIC</td>
                            <td>STATUS</td>
                            <td>REMARKS</td>
                            <td>VIEW</td>
                            <td>INVITATION</td>
                        </tr>
                    </thead>
                    <tbody>';
        if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
        if($row["type_req"]=='g'){
            $row["type_req"] = "Guest Lecture/Workshop";
        }
        if($row["type_req"]=='h'){
        $row["type_req"] = "Hackathon/Makeathon/Codeathon";
        }
        if($row["type_req"]=='v'){
        $row["type_req"] = "Value Added Program";
        }
            if($row["approval_status"]==0) {
                $b='<tr>
                            <td>'.$i.'</td>
                            <td>'.$row["type_req"].'</td>
                            <td>'.$row["guest_name"].'</td>
                            <td>'.$row["topic"].'</td>
                            <td><h4><span class="badge badge-info" style="padding: 10px; color: #fff; font-weight: 400">PENDING</span></h4></td>
                            <td></td>
                            <td><a id="download_anchor" onclick="details_logic('.$row["request_id"].')" style="cursor: pointer"><h4><span class="badge badge-primary" style="padding: 10px; color: #fff; font-weight: 400">DETAILS</span></h4></a></td>
                            <td><i class="fa fa-download fa-lg" aria-hidden="true" style="color: #26306D"></i></td>
                        </tr>';
                $i++;
                $a=$a.$b;
            }
            else if($row["approval_status"]==1) {
                $b='<tr>
                            <td>'.$i.'</td>
                            <td>'.$row["type_req"].'</td>
                            <td>'.$row["guest_name"].'</td>
                            <td>'.$row["topic"].'</td>
                            <td><h4><span class="badge badge-success" style="padding: 10px; color: #fff; font-weight: 400">APPROVED</span></h4></td>
                            <td></td>
                            <td><a id="download_anchor" onclick="details_logic('.$row["request_id"].')" style="cursor: pointer"><h4><span class="badge badge-primary" style="padding: 10px; color: #fff; font-weight: 400">DETAILS</span></h4></a></td>
                            <td><i class="fa fa-download fa-lg" aria-hidden="true" style="color: #26306D"></i></td>
                        </tr>';
                $i++;
                $a=$a.$b;
            }
            else if($row["approval_status"]==2) {
                $b='<tr>
                            <td>'.$i.'</td>
                            <td>'.$row["type_req"].'</td>
                            <td>'.$row["guest_name"].'</td>
                            <td>'.$row["topic"].'</td>
                            <td><h4><span class="badge badge-danger" style="padding: 10px; color: #fff; font-weight: 400">REJECTED</span></h4></td>
                            <td></td>
                            <td><a id="download_anchor" onclick="details_logic('.$row["request_id"].')" style="cursor: pointer"><h4><span class="badge badge-primary" style="padding: 10px; color: #fff; font-weight: 400">DETAILS</span></h4></a></td>
                            <td><i class="fa fa-download fa-lg" aria-hidden="true" style="color: #26306D"></i></td>
                        </tr>';
                $i++;
                $a=$a.$b;
            }
        }
        }
        $b='</tbody>
                </table>
            </div>
                </div>
        </div>';
        $a=$a.$b;
        echo $a;
/*		echo '<h4 align="center"><span class="badge" style="background-color: #26306D; padding: 10px; color: #fff; font-weight: 400">STATUS OF REQUEST</span></h4><br>
        <div class="card mb-6" style="margin:5px; border-color: #26306D; width: 90%;">
        <div class="card-header" style="text-transform: uppercase; letter-spacing: .1em; font-size: 15px; font-weight: 400; color: #26306D !important;"></div>
                <div class="card-body" align="left">
            <div class="table-responsive">
                <table class="table table-hover table-striped" style="color: #000; border-color: #26306D;">
                    <thead style="color: #fff; background-color: #26306D; border-color: #26306D;">
                        <tr>
                            <td>S.NO.</td>
                            <td>EVENT TYPE</td>
                            <td>GUEST NAME</td>
                            <td>TOPIC</td>
                            <td>STATUS</td>
                            <td>REMARKS</td>
                            <td>VIEW</td>
                            <td>INVITATION</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Guest Lecture</td>
                            <td>Mr. XYZ</td>
                            <td>ABC</td>
                            <td><h4><span class="badge badge-success" style="padding: 10px; color: #fff; font-weight: 400">APPROVED</span></h4></td>
                            <td></td>
                            <td><h4><span class="badge badge-primary" style="padding: 10px; color: #fff; font-weight: 400">DETAILS</span></h4></td>
                            <td><i class="fa fa-download fa-lg" aria-hidden="true" style="color: #26306D"></i></td>
                        </tr>
                    </tbody>
                </table>
            </div>
                </div>
        </div>';*/
		break;
            
        case "8":
        $i = 1;
        $query ='SELECT * FROM events WHERE dept_assigned="'.$_SESSION["department"].'" ORDER BY request_id DESC';
        $result = mysqli_query($con, $query);
        $a = '<h4 align="center"><span class="badge" style="background-color: #26306D; padding: 10px; color: #fff; font-weight: 400">APPROVE REQUEST</span></h4><br>
        <div class="card mb-6" style="margin:5px; border-color: #26306D; width: 90%;">
        <div class="card-header" style="text-transform: uppercase; letter-spacing: .1em; font-size: 15px; font-weight: 400; color: #26306D !important;"></div>
                <div class="card-body" align="left">
            <div class="table-responsive">
                <table class="table table-hover table-striped" style="color: #000; border-color: #26306D;">
                    <thead style="color: #fff; background-color: #26306D; border-color: #26306D;">
                        <tr>
                            <td>S.NO.</td>
                            <td>DATE</td>
                            <td>EVENT TYPE</td>
                            <td>TOPIC</td>
                            <td>GUEST NAME</td>
                            <td>DETAILS</td>
                            <td>APPROVE</td>
                            <td>REJECT</td>
                        </tr>
                    </thead>
                    <tbody>';
        if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
        if($row["type_req"]=='g'){
            $row["type_req"] = "Guest Lecture/Workshop";
        }
        if($row["type_req"]=='h'){
        $row["type_req"] = "Hackathon/Makeathon/Codeathon";
        }
        if($row["type_req"]=='v'){
        $row["type_req"] = "Value Added Program";
        }
            if($row["approval_status"]==0) {
                $b='<tr>
                            <td>'.$i.'</td>
                            <td>'.$row["event_date"].'</td>
                            <td>'.$row["type_req"].'</td>
                            <td>'.$row["topic"].'</td>
                            <td>'.$row["guest_name"].'</td>
                            <td><a id="download_anchor" onclick="hod_details_logic('.$row["request_id"].')" style="cursor: pointer"><h4><span class="badge badge-primary" style="padding: 10px; color: #fff; font-weight: 400">DETAILS</span></h4></a></td>
                            <td><a id="upload_anchor" onclick="approve_logic('.$row["request_id"].')" style="cursor: pointer"><h4><span class="badge badge-success" style="padding: 10px; color: #fff; font-weight: 400">APPROVE</span></h4></a></td>
                            <td><a id="upload_anchor" onclick="reject_logic('.$row["request_id"].')" style="cursor: pointer"><h4><span class="badge badge-danger" style="padding: 10px; color: #fff; font-weight: 400">REJECT</span></h4></a></td>
                        </tr>';
                $i++;
                $a = $a.$b;
            }
        }
        }
        $b='</tbody>
                </table>
            </div>
                </div>
        </div>';
        $a=$a.$b;
        echo $a;
/*		echo '<h4 align="center"><span class="badge" style="background-color: #26306D; padding: 10px; color: #fff; font-weight: 400">APPROVE REQUEST</span></h4><br>
        <div class="card mb-6" style="margin:5px; border-color: #26306D; width: 90%;">
        <div class="card-header" style="text-transform: uppercase; letter-spacing: .1em; font-size: 15px; font-weight: 400; color: #26306D !important;">Delete option is enabled before HOD Approval || Rejected</div>
                <div class="card-body" align="left">
            <div class="table-responsive">
                <table class="table table-hover table-striped" style="color: #000; border-color: #26306D;">
                    <thead style="color: #fff; background-color: #26306D; border-color: #26306D;">
                        <tr>
                            <td>S.NO.</td>
                            <td>DATE</td>
                            <td>EVENT TYPE</td>
                            <td>TOPIC</td>
                            <td>GUEST NAME</td>
                            <td>DETAILS</td>
                            <td>APPROVE</td>
                            <td>REJECT</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>2018-10-26</td>
                            <td>Guest Lecture</td>
                            <td>ABC</td>
                            <td>Mr. XYZ</td>
                            <td><h4><span class="badge badge-primary" style="padding: 10px; color: #fff; font-weight: 400">DETAILS</span></h4></td>
                            <td><a id="upload_anchor" onclick="approve_logic('.$upload_id[1].')" style="cursor: pointer"><h4><span class="badge badge-success" style="padding: 10px; color: #fff; font-weight: 400">APPROVE</span></h4></a></td>
                            <td><a id="upload_anchor" onclick="reject_logic('.$upload_id[1].')" style="cursor: pointer"><h4><span class="badge badge-danger" style="padding: 10px; color: #fff; font-weight: 400">REJECT</span></h4></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
                </div>
        </div>';*/
		break;
        
        default:
        echo 'Other Cases<br style="clear:both;" />';
		break;
    }
?>