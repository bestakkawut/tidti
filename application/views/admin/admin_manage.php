<!DOCTYPE html>
<html lang="en">
<!-- <head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="<?=asset_url()?>reset.css">
    <link rel="stylesheet" type="text/css" href="<?=asset_url()?>login.css">
</head> -->

<?=header_url()?>
<body>
<div class="admin wrap nopad">
    <div class="nav">
        <!-- <span class="secret"><i class="fa fa-user-secret" aria-hidden="true"></i></span> -->
        <span class="username thaisans">ผู้ดูแล</span>
        <button class="logout" title="ออกระบบ"><i class="fa fa-sign-out" aria-hidden="true"></i></button>
    </div>
    <div class="sidebar ">

        <div class="content">
            <ul class="menus thaisans">
                <a href="<?=base_url().'admin/manage'?>"><li class="manage active"><span><i class="fa fa-list-ul" aria-hidden="true"></i></span> จัดการ </li></a>
                <a href="<?=base_url().'admin/mac'?>"><li class="maclist"><span><i class="fa fa-list-ul" aria-hidden="true"></i></span> รายการ mac-address </li></a>
                <a href="<?=base_url().'admin/user'?>"><li class="user"><span><i class="fa fa-users" aria-hidden="true"></i></span> รายชื่อผู้ใช้ </li></a>
                <a href="<?=base_url().'admin/history'?>"><li class="history "><span><i class="fa fa-history" aria-hidden="true"></i></span> ความเคลื่อนไหว </li></a>
            </ul>
        </div>

    </div>
    <div class="content manage">
        <div class="top">
            <h3 class="thaisans bold">เพิ่มอุปกรณ์ผู้ใช้</h3>
        </div>
        <div class="mid">
            <h3 class="thaisans bold" style="font-size: 2em;margin-top:0;">เลือกประเภทผู้ใช้</h3>
            <ul role="tablist">
            <li role="presentation" class="tab"><a href="#student" aria-controls="tabstudent" role="tab" data-toggle="tab"><div>เพิ่มอุปกรณ์</div><i class="fa fa-user" aria-hidden="true"></i><label>นักศึกษา</label></a></li>
            <li role="presentation" class="tab"><a href="#professor" aria-controls="professor" role="tab" data-toggle="tab"><div>เพิ่มอุปกรณ์</div><i class="fa fa-users" aria-hidden="true"></i></i><label>อาจารย์/บุคลากร</label></a></li>
            <li role="presentation" class="tab"><a href="#staff" aria-controls="professor" role="tab" data-toggle="tab"><div>เพิ่มอุปกรณ์</div><i class="fa fa-user" aria-hidden="true"></i><label>เจ้าหน้าที่</label></a></li>
            <li role="presentation" class="tab"><a href="#special" aria-controls="professor" role="tab" data-toggle="tab"><div>เพิ่มอุปกรณ์</div><i class="fa fa-user-secret" aria-hidden="true"></i><label>ผู้ใช้พิเศษ</label></a></li>
            </ul>

            <!-- นักศึกษา -->
            <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade form" id="student">
                <form method="post" action="admin/submitdevice/student">
                <div class="form-group">
                    <h3 class="thaisans bold" style="margin-top: 0">นักศึกษา</h3>
                    <label>ข้อมูลส่วนตัว</label>
                    <div>
                        <select class="form-control pname" name="pname">
                            <option value="" disabled selected>คำนำหน้า</option>
                            <option value="นาย">นาย</option>
                            <option value="นางสาว">นางสาว</option>
                            <option value="นาง">นาง</option>
                        </select>
                        <input type="text" class="form-control fname" id="" placeholder="ชื่อ">
                        <input type="text" class="form-control lname" id="" placeholder="สกุล">
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="" placeholder="อีเมล์">
                </div>
                <div class="form-group">
                    <input type="personid" class="form-control" id="exampleInputEmail1" placeholder="รหัสนักศึกษา">
                </div>
                <div class="form-group">
                    <input type="personid" class="form-control" id="exampleInputEmail1" placeholder="กลุ่ม">
                </div>
                <div class="form-group">
                    <input type="personid" class="form-control" id="exampleInputEmail1" placeholder="คณะ">
                </div>
                <div class="form-group">
                    <input type="personid" class="form-control" id="exampleInputEmail1" placeholder="สาขา">
                </div>
                <div class="form-group">
                    <select name="location" class="form-control">
                        <option label="วิทยาเขต" value="-" disabled selected>วิทยาเขต</option>
                        <option value="sk">สงขลา</option>
                        <option value="sai">ไสใหญ่</option>
                        <option value="tho">ทุ่งใหญ่</option>
                        <option value="ka">ขนอม</option>
                        <option value="tr">ตรัง</option>
                        <option value="rat">วิทยาลัยรัตภูมิ</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">รหัสอุปกรณ์ Mac Address</label>
                    <input type="text" class="form-control" id="" placeholder="xx-xx-xx-xx-xx-xx">
                </div>
                <div class="form-group">
                    <select name="location" class="form-control">
                        <option label="อุปกรณ์" value="-" disabled selected>อุปกรณ์</option>
                        <option value="Phone">มือถือ</option>
                        <option value="Notebook">โน๊ตบุ๊ค</option>
                        <option value="Tablet">แท็บเล็ต</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>

            <!-- อาจารย์ บุคลากร -->
            <div role="tabpanel" class="tab-pane fade form" id="professor">
                <form method="post" action="admin/submitdevice/professor">
                <div class="form-group">
                    <h3 class="thaisans bold" style="margin-top: 0">อาจารย์บุคลากร</h3>
                    <label for="exampleInputEmail1">ข้อมูลส่วนตัว</label>
                    <div>
                        <select class="form-control pname" name="pname">
                            <option value="" disabled selected>คำนำหน้า</option>
                            <option value="นาย">นาย</option>
                            <option value="นางสาว">นางสาว</option>
                            <option value="นาง">นาง</option>
                        </select>
                        <input type="text" class="form-control fname" id="" placeholder="ชื่อ">
                        <input type="text" class="form-control lname" id="" placeholder="สกุล">
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="" placeholder="อีเมล์">
                </div>
                <div class="form-group">
                    <input type="personid" class="form-control" id="exampleInputEmail1" placeholder="รหัสประจำตัวประชาชน">
                </div>
                <div class="form-group">
                    <input type="personid" class="form-control" id="exampleInputEmail1" placeholder="กลุ่ม">
                </div>
                <div class="form-group">
                    <input type="personid" class="form-control" id="exampleInputEmail1" placeholder="คณะ">
                </div>
                <div class="form-group">
                    <input type="personid" class="form-control" id="exampleInputEmail1" placeholder="สาขา">
                </div>
                <div class="form-group">
                    <select name="location" class="form-control">
                        <option label="วิทยาเขต" value="-" disabled selected>วิทยาเขต</option>
                        <option value="sk">สงขลา</option>
                        <option value="sai">ไสใหญ่</option>
                        <option value="tho">ทุ่งใหญ่</option>
                        <option value="ka">ขนอม</option>
                        <option value="tr">ตรัง</option>
                        <option value="rat">วิทยาลัยรัตภูมิ</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">รหัสอุปกรณ์ Mac Address</label>
                    <input type="text" class="form-control" id="" placeholder="xx-xx-xx-xx-xx-xx">
                </div>
                <div class="form-group">
                    <select name="location" class="form-control">
                        <option label="อุปกรณ์" value="-" disabled selected>อุปกรณ์</option>
                        <option value="Phone">มือถือ</option>
                        <option value="Notebook">โน๊ตบุ๊ค</option>
                        <option value="Tablet">แท็บเล็ต</option>
                        <option value="Other">อื่นๆ</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>

             <!-- เจ้าหน้าที่ -->
            <div role="tabpanel" class="tab-pane fade form" id="staff">
                <form method="post" action="admin/submitdevice/staff">
                <div class="form-group">
                    <h3 class="thaisans bold" style="margin-top: 0">เจ้าหน้าที่</h3>
                    <label for="exampleInputEmail1">ข้อมูลส่วนตัว</label>
                    <div>
                        <select class="form-control pname" name="pname">
                            <option value="" disabled selected>คำนำหน้า</option>
                            <option value="นาย">นาย</option>
                            <option value="นางสาว">นางสาว</option>
                            <option value="นาง">นาง</option>
                        </select>
                        <input type="text" class="form-control fname" id="" placeholder="ชื่อ">
                        <input type="text" class="form-control lname" id="" placeholder="สกุล">
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="" placeholder="อีเมล์">
                </div>
                <div class="form-group">
                    <input type="personid" class="form-control" id="exampleInputEmail1" placeholder="รหัสประจำตัวประชาชน">
                </div>
                <div class="form-group">
                    <input type="personid" class="form-control" id="exampleInputEmail1" placeholder="กลุ่ม">
                </div>
                <div class="form-group">
                    <input type="personid" class="form-control" id="exampleInputEmail1" placeholder="คณะ">
                </div>
                <div class="form-group">
                    <input type="personid" class="form-control" id="exampleInputEmail1" placeholder="สาขา">
                </div>
                <div class="form-group">
                    <select name="location" class="form-control">
                        <option label="วิทยาเขต" value="-" disabled selected>วิทยาเขต</option>
                        <option value="sk">สงขลา</option>
                        <option value="sai">ไสใหญ่</option>
                        <option value="tho">ทุ่งใหญ่</option>
                        <option value="ka">ขนอม</option>
                        <option value="tr">ตรัง</option>
                        <option value="rat">วิทยาลัยรัตภูมิ</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">รหัสอุปกรณ์ Mac Address</label>
                    <input type="text" class="form-control" id="" placeholder="xx-xx-xx-xx-xx-xx">
                </div>
                <div class="form-group">
                    <select name="location" class="form-control">
                        <option label="อุปกรณ์" value="-" disabled selected>อุปกรณ์</option>
                        <option value="Phone">มือถือ</option>
                        <option value="Notebook">โน๊ตบุ๊ค</option>
                        <option value="Tablet">แท็บเล็ต</option>
                        <option value="Other">อื่นๆ</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>

            <!-- พิเศษ -->
            <div role="tabpanel" class="tab-pane fade form" id="special">
                <form method="post" action="admin/submitdevice/special">
                <div class="form-group">
                    <h3 class="thaisans bold" style="margin-top: 0">ผู้ใช้พิเศษ</h3>
                    <label for="exampleInputEmail1">ข้อมูลส่วนตัว</label>
                    <div>
                        <select class="form-control pname" name="pname">
                            <option value="" disabled selected>คำนำหน้า</option>
                            <option value="นาย">นาย</option>
                            <option value="นางสาว">นางสาว</option>
                            <option value="นาง">นาง</option>
                        </select>
                        <input type="text" class="form-control fname" id="" placeholder="ชื่อ">
                        <input type="text" class="form-control lname" id="" placeholder="สกุล">
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="" placeholder="อีเมล์">
                </div>
                <div class="form-group">
                    <input type="personid" class="form-control" id="exampleInputEmail1" placeholder="รหัสประจำตัวประชาชน">
                </div>
                <div class="form-group">
                    <input type="personid" class="form-control" id="exampleInputEmail1" placeholder="กลุ่ม">
                </div>
                <div class="form-group">
                    <input type="personid" class="form-control" id="exampleInputEmail1" placeholder="คณะ">
                </div>
                <div class="form-group">
                    <input type="personid" class="form-control" id="exampleInputEmail1" placeholder="สาขา">
                </div>
                <div class="form-group">
                    <select name="location" class="form-control">
                        <option label="วิทยาเขต" value="-" disabled selected>วิทยาเขต</option>
                        <option value="sk">สงขลา</option>
                        <option value="sai">ไสใหญ่</option>
                        <option value="tho">ทุ่งใหญ่</option>
                        <option value="ka">ขนอม</option>
                        <option value="tr">ตรัง</option>
                        <option value="rat">วิทยาลัยรัตภูมิ</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">รหัสอุปกรณ์ Mac Address</label>
                    <input type="text" class="form-control" id="" placeholder="xx-xx-xx-xx-xx-xx">
                </div>
                <div class="form-group">
                    <select name="location" class="form-control">
                        <option label="อุปกรณ์" value="-" disabled selected>อุปกรณ์</option>
                        <option value="Phone">มือถือ</option>
                        <option value="Notebook">โน๊ตบุ๊ค</option>
                        <option value="Tablet">แท็บเล็ต</option>
                        <option value="Other">อื่นๆ</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>


            </div>
        </div>
    </div>
    <div class="wrap"></div>
</div>
</body>
</html>
