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
            <h3>เลือกประเภทผู้ใช้</h3>
            <div class="tab"><div>เพิ่มอุปกรณ์</div><i class="fa fa-user" aria-hidden="true"></i><label>นักศึกษา</label></div>
            <div class="tab"><div>เพิ่มอุปกรณ์</div><i class="fa fa-users" aria-hidden="true"></i></i><label>อาจารย์/บุคลากร</label></div>
            <div class="tab"><div>เพิ่มอุปกรณ์</div><i class="fa fa-user" aria-hidden="true"></i><label>เจ้าหน้าที่</label></div>
            <div class="tab"><div>เพิ่มอุปกรณ์</div><i class="fa fa-user-secret" aria-hidden="true"></i><label>กรณีพิเศษ</label></div>

            <div class="form">
                <form action="">
                <div class="form-group">
                    <label for="exampleInputEmail1">ข้อมูลส่วนตัว</label>
                    <div>
                        <input type="text" class="form-control pname" id="" placeholder="คำนำหน้า">
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
                    <label for="exampleInputEmail1">รหัสอุปกรณ์ Mac Address</label>
                    <input type="text" class="form-control" id="" placeholder="xx-xx-xx-xx-xx-xx">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="" placeholder="ชนิดอุปกรณ์">
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <div class="wrap"></div>
</div>
</body>
</html>
