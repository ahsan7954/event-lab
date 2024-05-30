<?php
    require_once('../include/conn.php');

    // ================= Planner Insert =================
    if(isset($_POST['u_fname'])){
        $u_fname =  mysqli_real_escape_string($conn,$_POST['u_fname']);
        $u_lname =  mysqli_real_escape_string($conn,$_POST['u_lname']);
        $u_email =  mysqli_real_escape_string($conn,$_POST['u_email']);
        $u_dob =  mysqli_real_escape_string($conn,$_POST['u_dob']);
        $u_gender =  mysqli_real_escape_string($conn,$_POST['u_gender']);
        $u_phone =  mysqli_real_escape_string($conn,$_POST['u_phone']);
        $u_city =  mysqli_real_escape_string($conn,$_POST['u_city']);
        $u_exp =  mysqli_real_escape_string($conn,$_POST['u_exp']);
        $u_order_design =  mysqli_real_escape_string($conn,$_POST['u_order_design']);
        $u_description =  mysqli_real_escape_string($conn,$_POST['u_description']);
        $u_company =  mysqli_real_escape_string($conn,$_POST['u_company']);
        $u_prefer_color =  mysqli_real_escape_string($conn,$_POST['u_prefer_color']);
        $u_tools =  mysqli_real_escape_string($conn,$_POST['u_tools']);
        $u_written_content =  mysqli_real_escape_string($conn,$_POST['u_written_content']);
        $u_designs_no =  mysqli_real_escape_string($conn,$_POST['u_designs_no']);
        $u_pswd =  mysqli_real_escape_string($conn,$_POST['u_pswd']);
        $u_cpswd =  mysqli_real_escape_string($conn,$_POST['u_cpswd']);
        $u_address =  mysqli_real_escape_string($conn,$_POST['u_address']);
        $u_role =  "Designer";
        $u_status =  mysqli_real_escape_string($conn,$_POST['u_status']);

    
         if($u_fname==""||$u_lname==""||$u_email==""||$u_dob==""||$u_gender==""||$u_phone==""||$u_city==""||$u_exp==""||$u_order_design==""||$u_description==""||$u_company==""||$u_prefer_color==""||$u_tools==""||$u_written_content==""||$u_designs_no==""||$u_pswd==""||$u_address==""){
            echo 0;
        }else{
            $rec="SELECT * FROM `a_users` WHERE `u_email`='$u_email' AND `u_role`='$u_role'";
            $res=mysqli_query($conn,$rec);
            if(mysqli_num_rows($res)>0){
                echo 1;
                //alrrady exist
            }else{
                if($u_pswd!=$u_cpswd){
                    echo 2;
                }else{
                    $sql="INSERT INTO `a_users` (
                        `u_fname`, 
                        `u_lname`, 
                        `u_email`,
                        `u_dob`, 
                        `u_gender`,
                        `u_phone`,
                        `u_city`,
                        `u_exp`,
                        `u_order_design`,
                        `u_description`,
                        `u_company`,
                        `u_prefer_color`,
                        `u_tools`,
                        `u_written_content`,
                        `u_designs_no`,
                        `u_pswd`,
                        `u_address`,
                        `u_role`,
                        `u_status`
                         ) VALUES (
                        '$u_fname',
                        '$u_lname',
                        '$u_email',
                        '$u_dob',
                        '$u_gender',
                        '$u_phone',
                        '$u_city',
                        '$u_exp',
                        '$u_order_design',
                        '$u_description',
                        '$u_company',
                        '$u_prefer_color',
                        '$u_tools',
                        '$u_written_content',
                        '$u_designs_no',
                        '$u_pswd',
                        '$u_address',
                        '$u_role',
                        '$u_status'
                        )";
                    $run=mysqli_query($conn,$sql);
                    // $res=$obj->insert("a_users",array(
                    //     "u_fname"=>$u_fname, 
                    //     "u_lname"=>$u_lname, 
                    //     "u_email"=>$u_email, 
                    //     "u_dob"=>$u_dob, 
                    //     "u_gender"=>$u_gender, 
                    //     "u_phone"=>$u_phone, 
                    //     "u_city"=>$u_city, 
                    //     "u_exp"=>$u_exp, 
                    //     "u_order_design"=>$u_order_design, 
                    //     "u_description"=>$u_description, 
                    //     "u_company"=>$u_company, 
                    //     "u_prefer_color"=>$u_prefer_color, 
                    //     "u_tools"=>$u_tools, 
                    //     "u_written_content"=>$u_written_content, 
                    //     "u_designs_no"=>$u_designs_no, 
                    //     "u_pswd"=>$u_pswd, 
                    //     "u_address"=>$u_address, 
                    //     "u_role"=>$u_role,
                    //     "u_status"=>"Pending"
                    // ));
                    if($run){
                        echo 3;
                        //inserted
                    }else{
                         echo 4;
                      //not inserted
                    }
                }
            }
        }
    }

    if(isset($_POST['id'])){
        $id=$_POST['id'];
        $fet = $obj->singleRecord("a_users",where:"`u_id`='$id'");
        // print_r($fet);

        $output="";
        $output.= '<div class="row">
        <div class="col-6">
        <input type="hidden" name="uid" value="'.$id.'" required>
            <div class="form-group">
                <h5>First Name <span class="text-danger">*</span></h5>
                <div class="controls">
                    <input type="text" name="uu_fname" class="form-control"
                        placeholder="Enter First Name" value="'.$fet['u_fname'].'" required>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <h5>Last Name <span class="text-danger">*</span></h5>
                <div class="controls">
                    <input type="text" name="u_lname" class="form-control"
                        placeholder="Enter Last Name" value="'.$fet['u_lname'].'" required>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <h5>Enter Email Address <span class="text-danger">*</span></h5>
        <div class="controls">
            <input type="text" name="u_email" class="form-control"
                placeholder="Enter Email Address" value="'.$fet['u_email'].'">
        </div>
    </div>
    <div class="form-group">
        <h5>DOB<span class="text-danger">*</span></h5>
        <div class="controls">
            <input type="date" name="u_dob" class="form-control"
                placeholder="Enter Category Name" value="'.$fet['u_dob'].'" required>
        </div>
    </div>';
    if($fet['u_gender']=="Male"){
        @$male="checked";
    }else if($fet['u_gender']=="Female"){
        @$female="checked";
    }else{
        @$others="checked";
    }
    $output.='<div class="form-group">
        <h5>Gender<span class="text-danger">*</span></h5>
        <div class="controls ">
            <div class="form-check form-check-inline">
                <input name="u_gender" type="radio" id="radio_3" value="Male" required '.@$male.'>
                <label for="radio_3">Male</label>
            </div>
            <div class="form-check form-check-inline">
                <input name="u_gender" type="radio" id="radio_4" value="Female" '.@$female.'>
                <label for="radio_4">Female</label>
            </div>
            <div class="form-check form-check-inline">
                <input name="u_gender" type="radio" id="radio_5" value="Others" '.@$others.'>
                <label for="radio_5">Others</label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="form-label">
            <h5 class="mb-0">Phone<span class="text-danger">*</span></h5>
        </label>
        <small class="sidetitle">E.g. +92-123-3456789</small>
        <input type="text" name="u_phone" class="form-control" id="phone2" value="'.$fet['u_phone'].'">
    </div>
    <div class="form-group">
        <h5>City <span class="text-danger">*</span></h5>
        <div class="controls">
            <input type="text" name="u_city" class="form-control" placeholder="Enter City Name"
                required value="'.$fet['u_city'].'">
        </div>
    </div>';
    if($fet['u_exp']=="0-1 Years"){
        @$op1 = "selected";
    }
    else if($fet['u_exp']=='1-2 Years'){
        @$op2 = "selected";
    }
    else if($fet['u_exp']=='3-5 Years'){
        @$op3 = "selected";
    }else{
        @$op4="selected";
    }
    $output.='<div class="form-group">
        <!-- <h5>Experience <span class="text-danger">*</span></h5> -->
        <h5>Experience <span class="text-danger">*</span></h5>
        <select class="form-control" name="u_exp">
            <option value="">Select Years of Experience</option>
            <option value="0-1 Years" '.@$op1.'>0 - 1 years</option>
            <option value="1-2 Years" '.@$op2.' >1 - 2 Years </option>
            <option value="3-5 Years" '.@$op3.'>3 - 5 Years </option>
            <option value="More than 5 Years" '.@$op4.' >More than 5 Years</option>
        </select>
    </div>';
    if($fet['u_order_design']=="Business Design"){
        @$o1 = "selected";
    }
    else if($fet['u_order_design']=='Products Design'){
        @$o2 = "selected";
    }
    else if($fet['u_order_design']=='Branding Design'){
        @$o3 = "selected";
    }
    else if($fet['u_order_design']=='Animation Design'){
        @$o4 = "selected";
    }
    else if($fet['u_order_design']=='Environmental Design'){
        @$o5 = "selected";
    }
    else if($fet['u_order_design']=='Print Design'){
        @$o6 = "selected";
    }
    else{
        @$o7="selected";
    }
    $output.='<div class="form-group">
    <!-- <h5>Experience <span class="text-danger">*</span></h5> -->
    <h5>Ordered Design Off <span class="text-danger">*</span></h5>
    <select class="form-control bg-white" name="u_order_design">
        <option value="Business Design" '.@$o1.'>Business Design</option>
        <option value="Products Design" '.@$o2.'>Products Design </option>
        <option value="Branding Design" '.@$o3.'>Branding Design</option>
        <option value="Animation Design" '.@$o4.'>Animation Design</option>
        <option value="Environmental Design" '.@$o5.'>Environmental Design</option>
        <option value="Print Design" '.@$o6.'>Print Design</option>
        <option value="Publishing Design" '.@$o7.'>Publishing Design</option>
    </select>
</div>
<div class="form-group">
    <h5>Description <small>(optional)</small></h5>
    <div class="controls">
        <textarea name="u_description" id="cdesc" rows="4" class="form-control"
            placeholder="Enter Description Here..." required>'.$fet['u_description'].'</textarea>
    </div>
</div>
<div class="form-group">
    <h5>Company <span class="text-danger">*</span></h5>
    <div class="controls">
        <input type="text" name="u_company" class="form-control"
            placeholder="Enter Company Name" value="'.$fet['u_company'].'" required>
    </div>
</div>
<div class="form-group">
    <h5>Prefer Color <span class="text-danger">*</span></h5>
    <div class="controls">
        <input type="color" name="u_prefer_color" value="'.$fet['u_prefer_color'].'" class="form-control" required>
    </div>
</div>
<div class="form-group">
<label class="form-label">
<h5 class="mb-0">Tools<span class="text-danger">*</span></h5>
</label>
<small class="sidetitle">Seperate each with comma(",")</small>
    <input type="text" name="u_tools"
        value="'.$fet['u_tools'].'" class="form-control" data-role="tagsinput"
        placeholder="Add Tools">
</div>
<div class="form-group">
    <h5>Written Content To Be Added <span class="text-danger">*</span></h5>
    <div class="controls">
        <input type="text" name="u_written_content" class="form-control"
            placeholder="Enter Written Content" value="'.$fet['u_written_content'].'" required>
    </div>
</div>
<div class="form-group">
    <label class="form-label">Number Of Designs</label>
    <input id="u_designs_no" type="number" min="0" value="0" name="u_designs_no" value="'.$fet['u_designs_no'].'" class="form-control">
</div>
    <div class="form-group">
        <h5>Password <span class="text-danger">*</span></h5>
        <div class="controls">
            <div class="input-group">
                <input type="text" name="u_pswd" id="u_pswd" class="form-control"
                    placeholder="Enter Password" value="'.$fet['u_pswd'].'">
                <span class="input-group-addon"><i class="fa fa-eye" id="password1"></i></span>
            </div>
        </div>
    </div>
    <div class="form-group">
        <h5>Confirm Password <span class="text-danger">*</span></h5>
        <div class="controls">
            <div class="input-group">
                <input type="text" name="u_cpswd" id="u_cpswd" class="form-control"
                    placeholder="Enter Password Again"
                    data-validation-required-message="This field is required" value="'.$fet['u_pswd'].'">
                <span class="input-group-addon"><i class="fa fa-eye" id="password2"></i></span>
            </div>
        </div>
    </div>

    <div class="form-group">
        <h5>Address <span class="text-danger">*</span></h5>
        <div class="controls">
            <textarea name="u_address" id="cdesc" rows="5" class="form-control"
                placeholder="Enter Address Here.." required>'.$fet['u_address'].'</textarea>
        </div>
    </div>
    <div class="text-xs-right">
        <button type="button" id="update" class="btn btn-info">Update</button>
    </div>';

    echo $output;
    }

    if(isset($_POST['uid'])){
        $uid =  mysqli_real_escape_string($obj->mysqli,$_POST['uid']);
        $u_fname =  mysqli_real_escape_string($obj->mysqli,$_POST['uu_fname']);
        $u_lname =  mysqli_real_escape_string($obj->mysqli,$_POST['u_lname']);
        $u_email =  mysqli_real_escape_string($obj->mysqli,$_POST['u_email']);
        $u_dob =  mysqli_real_escape_string($obj->mysqli,$_POST['u_dob']);
        $u_gender =  mysqli_real_escape_string($obj->mysqli,$_POST['u_gender']);
        $u_phone =  mysqli_real_escape_string($obj->mysqli,$_POST['u_phone']);
        $u_city =  mysqli_real_escape_string($obj->mysqli,$_POST['u_city']);
        $u_exp =  mysqli_real_escape_string($obj->mysqli,$_POST['u_exp']);
        $u_order_design =  mysqli_real_escape_string($obj->mysqli,$_POST['u_order_design']);
        $u_description =  mysqli_real_escape_string($obj->mysqli,$_POST['u_description']);
        $u_company =  mysqli_real_escape_string($obj->mysqli,$_POST['u_company']);
        $u_prefer_color =  mysqli_real_escape_string($obj->mysqli,$_POST['u_prefer_color']);
        $u_tools =  mysqli_real_escape_string($obj->mysqli,$_POST['u_tools']);
        $u_written_content =  mysqli_real_escape_string($obj->mysqli,$_POST['u_written_content']);
        $u_designs_no =  mysqli_real_escape_string($obj->mysqli,$_POST['u_designs_no']);
        $u_pswd =  mysqli_real_escape_string($obj->mysqli,$_POST['u_pswd']);
        $u_cpswd =  mysqli_real_escape_string($obj->mysqli,$_POST['u_cpswd']);
        $u_address =  mysqli_real_escape_string($obj->mysqli,$_POST['u_address']);
        $u_role =  "Designer";
    
        if($u_fname==""||$u_lname==""||$u_email==""||$u_dob==""||$u_gender==""||$u_phone==""||$u_city==""||$u_exp==""||$u_order_design==""||$u_description==""||$u_company==""||$u_prefer_color==""||$u_tools==""||$u_written_content==""||$u_designs_no==""||$u_pswd==""||$u_address==""){
            echo 5;
        }else{
            $rec = $obj->singleRecord("a_users",where:"(NOT `u_id`='$uid') AND `u_email`='$u_email' AND `u_role`='Designer'");
            if($rec){
                echo 6;
            }else{
                if($u_pswd!=$u_cpswd){
                    echo 7;
                }else{
                    $res= $obj->update("a_users",array(
                            "u_fname"=>$u_fname, 
                            "u_lname"=>$u_lname, 
                            "u_email"=>$u_email, 
                            "u_dob"=>$u_dob, 
                            "u_gender"=>$u_gender, 
                            "u_phone"=>$u_phone, 
                            "u_city"=>$u_city, 
                            "u_exp"=>$u_exp, 
                            "u_order_design"=>$u_order_design, 
                            "u_description"=>$u_description, 
                            "u_company"=>$u_company, 
                            "u_prefer_color"=>$u_prefer_color, 
                            "u_tools"=>$u_tools, 
                            "u_written_content"=>$u_written_content, 
                            "u_designs_no"=>$u_designs_no, 
                            "u_pswd"=>$u_pswd, 
                            "u_address"=>$u_address, 
                            "u_role"=>$u_role,
                            "u_status"=>"Pending"
                        ),where:"`u_id`='$uid'");
                        if($res=="updated"){
                            echo 8;
                        }else{
                            echo 9;
                        }
            }
            }
        }
    }

    
     // ================= Planner Status Change =================
     if(isset($_POST['sid'])){
        $sid = mysqli_real_escape_string($obj->mysqli,$_POST['sid']);
        $srec = $obj->singleRecord('a_users',where:"`u_id`='$sid'");
        if($srec['u_status']=="Pending"){
            $res = $obj->update('a_users',array(
                "u_status"=>"Confirmed"
            ),where:"`u_id`='$sid'");
            if($res=="updated"){
                echo 10;
            }else{
                echo 11;
            }
        }else if($srec['u_status']=="Confirmed"){
            $res = $obj->update('a_users',array(
                "u_status"=>"Pending"
            ),where:"`u_id`='$sid'");
            if($res=="updated"){
                echo 12;
            }else{
                echo 11;
            }
        }


    }


    // ================= Designer Delete =================
    if(isset($_POST['delid'])){
        $del = mysqli_real_escape_string($obj->mysqli,$_POST['delid']);
        $res = $obj->delete("a_users",where:"`u_id`='$del'");
        if($res=="deleted"){
            echo 12;
        }else{
            echo 13;
        }

    }

?>