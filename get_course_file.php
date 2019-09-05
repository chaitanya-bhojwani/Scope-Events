<?php
include 'connect.php';
$a = $_POST['param1'];
$b = $_POST['param2'];
$query ='SELECT * FROM courses WHERE Course="'.$a.'" and Slot="'.$b.'"';
$x = '<h4 align="center"><span class="badge" style="background-color: #26306D; padding: 10px; color: #fff; font-weight: 400">COURSE PAGE</span></h4><br>
        <div class="card w-75 mb-6" style="margin:5px; border-color: #26306D">
                <div class="card-header" style="text-transform: uppercase; letter-spacing: .1em; font-size: 15px; font-weight: 400; color: #26306D !important;">Check Status of Course Files</div>
                <div class="card-body" align="left">
                    <form action="#" method="POST" id="myform" onsubmit="event.preventDefault(); courseSearch()">
        <table class="table table-borderless" align="Center">
  <tbody>
      <tr>
      <td colspan="2"><label for="College123">Select Course: </label><select class="form-control" name="Course" id="Course" placeholder="Select Course: ">
          <option>-</option>
        <option>CSE 1007 - Java Programming</option></select></td>
      </tr>
      <tr>
      <td colspan="2"><label for="Slots">Select Slot: </label><select class="form-control" name="Slots" id="Slots" placeholder="Select Slot: ">
          <option>-</option>
        <option>G1</option>
        <option>G2</option></select></td>
      </tr>
    <br>
    <tr>
        <td colspan="2" align="Center"><input type="submit" class="btn btn-primary"><br></td>
    </tr>
  </tbody>
</table>
        </form>
            </div><br>';

$result = mysqli_query($con, $query);
if (mysqli_num_rows($result) > 0) {
        // output data of each row
                while($row = $result->fetch_assoc()) {
        $s = $row["Syllabus"]=="abc"?"Pending":"Completed";
        $ds = $s=="Pending"?"":'<a id="download_anchor" onclick="download_course_files('.$row["rec_no"].',1)" style="cursor: pointer"><i class="fa fa-download fa-lg" aria-hidden="true" style="color: #26306D"></i></a>';
        $l = $row["Lesson_Planner"]=="abc"?"Pending":"Completed";
        $dl = $l=="Pending"?"":'<a id="download_anchor" onclick="download_course_files('.$row["rec_no"].',2)" style="cursor: pointer"><i class="fa fa-download fa-lg" aria-hidden="true" style="color: #26306D"></i></a>';
        $c1qp = $row["CAT1_QP"]=="abc"?"Pending":"Completed";
        $dc1qp = $c1qp=="Pending"?"":'<a id="download_anchor" onclick="download_course_files('.$row["rec_no"].',3)" style="cursor: pointer"><i class="fa fa-download fa-lg" aria-hidden="true" style="color: #26306D"></i></a>';
        $c1k = $row["CAT1_Key"]=="abc"?"Pending":"Completed";
        $dc1k = $c1k=="Pending"?"":'<a id="download_anchor" onclick="download_course_files('.$row["rec_no"].',4)" style="cursor: pointer"><i class="fa fa-download fa-lg" aria-hidden="true" style="color: #26306D"></i></a>';
        $c2qp = $row["CAT2_QP"]=="abc"?"Pending":"Completed";
        $dc2qp = $c2qp=="Pending"?"":'<a id="download_anchor" onclick="download_course_files('.$row["rec_no"].',5)" style="cursor: pointer"><i class="fa fa-download fa-lg" aria-hidden="true" style="color: #26306D"></i></a>';
        $c2k = $row["CAT2_Key"]=="abc"?"Pending":"Completed";
        $dc2k = $c2k=="Pending"?"":'<a id="download_anchor" onclick="download_course_files('.$row["rec_no"].',6)" style="cursor: pointer"><i class="fa fa-download fa-lg" aria-hidden="true" style="color: #26306D"></i></a>';
        $da = $row["DA1"]=="abc"?"Pending":"Completed";
        $dda = $da=="Pending"?"":'<a id="download_anchor" onclick="download_course_files('.$row["rec_no"].',7)" style="cursor: pointer"><i class="fa fa-download fa-lg" aria-hidden="true" style="color: #26306D"></i></a>';
        $q1 = $row["Quiz1"]=="abc"?"Pending":"Completed";
        $dq1 = $q1=="Pending"?"":'<a id="download_anchor" onclick="download_course_files('.$row["rec_no"].',8)" style="cursor: pointer"><i class="fa fa-download fa-lg" aria-hidden="true" style="color: #26306D"></i></a>';
        $q2 = $row["Quiz2"]=="abc"?"Pending":"Completed";
        $dq2 = $q2=="Pending"?"":'<a id="download_anchor" onclick="download_course_files('.$row["rec_no"].',9)" style="cursor: pointer"><i class="fa fa-download fa-lg" aria-hidden="true" style="color: #26306D"></i></a>';
        $an = $row["Analysis"]=="abc"?"Pending":"Completed";
        $dan = $an=="Pending"?"":'<a id="download_anchor" onclick="download_course_files('.$row["rec_no"].',10)" style="cursor: pointer"><i class="fa fa-download fa-lg" aria-hidden="true" style="color: #26306D"></i></a>';
        $y = '<div class="table-responsive">
                <table class="table table-hover table-striped" style="color: #000; border-color: #26306D;">
                    <thead style="color: #fff; background-color: #26306D; border-color: #26306D;">
                        <tr align="Center">
                            <td colspan="2">'.$row["Course"].'</td>
                            <td colspan="1">Slot: '.$row["Slot"].'</td>
                        </tr>
                        <tr>
                            <td>TYPE</td>
                            <td>STATUS</td>
                            <td>DOWNLOAD</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Syllabus</td>
                            <td>'.$s.'</td>
                            <td>'.$ds.'</td>
                        </tr>
                        <tr>
                            <td>Lesson-Planner</td>
                            <td>'.$l.'</td>
                            <td>'.$dl.'</td>
                        </tr>
                        <tr>
                            <td>CAT1-QP</td>
                            <td>'.$c1qp.'</td>
                            <td>'.$dc1qp.'</td>
                        </tr>
                        <tr>
                            <td>CAT1-Key</td>
                            <td>'.$c1k.'</td>
                            <td>'.$dc1k.'</td>
                        </tr>
                        <tr>
                            <td>CAT2-QP</td>
                            <td>'.$c2qp.'</td>
                            <td>'.$dc2qp.'</td>
                        </tr>
                        <tr>
                            <td>CAT2-Key</td>
                            <td>'.$c2k.'</td>
                            <td>'.$dc2k.'</td>
                        </tr>
                        <tr>
                            <td>DA1</td>
                            <td>'.$da.'</td>
                            <td>'.$dda.'</td>
                        </tr>
                        <tr>
                            <td>Quiz1</td>
                            <td>'.$q1.'</td>
                            <td>'.$dq1.'</td>
                        </tr>
                        <tr>
                            <td>Quiz2</td>
                            <td>'.$q2.'</td>
                            <td>'.$dq2.'</td>
                        </tr>
                        <tr>
                            <td>Analysis</td>
                            <td>'.$an.'</td>
                            <td>'.$dan.'</td>
                        </tr>
                    </tbody>
                </table>
            </div><br>';
        $x=$x.$y;
        }
}
echo $x.'</div>';
?>