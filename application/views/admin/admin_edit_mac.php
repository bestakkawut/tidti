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
                <a href="<?=base_url().'admin/mac'?>"><li class="maclist active"><span><i class="fa fa-list-ul" aria-hidden="true"></i></span> รายการ mac-address </li></a>
                <a href="<?=base_url().'admin/user'?>"><li class="user"><span><i class="fa fa-users" aria-hidden="true"></i></span> รายชื่อผู้ใช้ </li></a>
                <a href="<?=base_url().'admin/history'?>"><li class="history "><span><i class="fa fa-history" aria-hidden="true"></i></span> ความเคลื่อนไหว </li></a>
            </ul>
        </div>

    </div>
    <div class="content mac_list">
        <div class="_1">
            <div class="search">
                <input type="text" class="input thaisans" name="search" placeholder="ค้นหา" id="search">
                <button class="button"><i class="fa fa-search"></i></button>
            </div>
            <div class="cancle">
                <button class="button thaisans">ยกเลิก</button>
            </div>

            <table class="table table-hover">
                <thead>
                    <th class="center">#</th>
                    <th class="center">หมายเลข mac</th>
                    <th>ชื่อผู้ใช้</th>
                    <th>ชื่อ-นามสกุล</th>
                    <th>วันที่ลงทะเบียน</th>
                    <th class="center">
                        ...
                    </th>
                </thead>
                <?php

                     foreach($data as $val){

                 ?>
                <tr>
                    <td><i class="fa fa-<?=switchIcon($val->dev_type);?>" title="phone" aria-hidden="true"></i></td>
                    <td ><?=$val->macaddress?></td>
                    <td><?=$val->username?></td>
                    <td><?=$val->pname." ".$val->firstname." ".$val->lastname?></td>
                    <td><?=$val->addtime?></td>
                    <td>
                        <h3>ข้อมูลเดิม</h3>
                    </td>
                </tr>

                <?php
                    }
                ?>
            </table>
            <div style="width: 400px;">
                <div style="font-size: 2em" class="thaisans">
                    <i class="fa fa-gears" title="phone" aria-hidden="true" style="color:#ff5f2e;display: inline"></i>
                    <h3 class="bold" style="display:inline;font-size:1.5em">แก้ไข</h3>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">ชื่อ - นามสกุล</label>
                    <input type="email" style="width: 30%" class="form-control" id="exampleInputEmail1" placeholder="คำนำหน้า">
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
            </div>
        </div>
        <div class="_2">

        </div>
    </div>
    <div class="wrap"></div>
</div>
</body>
</html>
