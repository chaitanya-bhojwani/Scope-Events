<?php
	$p = $_GET['id'];
    include 'connect.php';
    session_start();

	switch($p) {
		case "1":
        $query ='SELECT * FROM events WHERE dept_assigned="'.$_SESSION["department"].'" and approval_status="0"';
        $result = mysqli_query($con, $query);
        if(mysqli_num_rows($result)>0) {
        echo '<h4 align="center"><span class="badge" style="background-color: #26306D; padding: 10px; color: #fff; font-weight: 400">HOME</span></h4><br>
        <div class="card w-75 mb-6" style="margin:5px; border-color: #26306D">
                <div class="card-header" style="text-transform: uppercase; letter-spacing: .1em; font-size: 15px; font-weight: 400; color: #26306D !important;">Spotlight</div>
                <div class="card-body" align="left">
                    <ul>
                        <li style="color: #26306D;"><h5 class="card-title text-dark">Guidlines</h5>
                            <a href="http://www.vit.ac.in/" target="_blank" style="text-decoration: underline"><p class="card-text">Click Here to view guidlines</p></a>
                        </li><br>
                        <li style="color: #26306D;"><h5 class="card-title text-dark">Awaiting Requests</h5>
                    <a href="" target="_blank" style="text-decoration: underline"><p class="card-text">Awaiting requests in your portal ('.mysqli_num_rows($result).')</p></a>
                </li>
                    </ul>
                 </div>
        </div>';
        }
        else {
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
        </div>'; }
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