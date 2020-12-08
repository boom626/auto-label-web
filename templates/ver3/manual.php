<?php
    $action = $_GET['action'];
    if($action == 'y'){
        header('Location:success.php');
    }else if($action == 'n'){
        header('Location:manual.php');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="static/css/style.css"> -->


    <title>Check Manual</title>

    <style>
    section.main-content {
        margin: 20px 0px 0px 20px;
    }

    section.main-content .tick-box {
        margin: 15px;
    }

    section.main-content .title {
        padding: 10px;
        font-weight: bold;
    }

    section.main-content .tick-box span {
        font-size: 1.2rem;
        font-weight: bold;
    }

    .cb {
        margin: 10px;
        width: 20px;
        height: 20px;
    }

    ul {
        padding: 0;
        list-style: none;
        text-align: center;
    }

    li {
        display: inline-block;
    }
    </style>
</head>

<body>
    <header>
        <nav class='navbar navbar-dark bg-dark'>
            <a class="navbar-brand" href="index.php">Sandy Autolabel</a>
        </nav>
    </header>
    <section class="main-content">

        <div class="container">

            <div class="tutorial">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-12 col-md-8">

                        <h3 class="title text-center">ประโยคที่กรอก => {{show_bword}} </h3>
                        <table class="table">
                            <!-- checkbox form -->
                            <form action="save" method="get">
                                <input type="hidden" name="action" value="2">

                                <thead class="thead-dark">
                                    <tr>
                                        <th>ผลลัพธ์</th>
                                        <th>ประเภท</th>
                                        <th>ความหมาย</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td> 
                                            <input type="checkbox" class="cb" name="bclass1" id="1" value="1"
                                                onclick="return myFun()">
                                            <label class="cbl" for="">1</label>
                                        </td>
                                        <td>ปกติ (Normal) </td>
                                        <td>ไม่เป็น Bully </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <input type="checkbox" class="cb" name="bclass2" id="2" value="2"
                                            onclick="return myFun()">
                                        <label class="cbl" for="">2</label>
                                        </td>
                                        <td>การแบ่งแยก/การกีดกัน (Exclusion)</td>
                                        <td>การไล่ออกจากกลุ่ม เพิกเฉย หรือการกระทำใดๆ ให้ผู้นั้นโดดเดี่ยว </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <input type="checkbox" class="cb" name="bclass3" id="3" value="3"
                                            onclick="return myFun()"><label class="cbl" for="">
                                            3</label>
                                        </td>
                                        <td>การขมขู่ (Harassment) </td>
                                        <td>การข่มขู่ทำร้ายร่างกาย ทำลายสิ่งของที่รัก หรือการกระทำใดๆ
                                            ให้เกิดความหวาดกลัว
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <input type="checkbox" class="cb" name="bclass4" id="4" value="4"
                                            onclick="return myFun()"><label class="cbl" for="">
                                            4</label>
                                        </td>
                                        <td>การแฉ/การเปิดโปง (Revealing) </td>
                                        <td>การนำข้อมูล ภาพเสียง ที่เป็นความลับหรือเรื่องส่วนตัวผู้นั้น มาเปิดเผย
                                            ให้เกิดความอับอาย </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <input type="checkbox" class="cb" name="bclass5" id="5" value="5"
                                            onclick="return myFun()"><label class="cbl" for="">
                                            5</label>
                                        </td>
                                        <td>การดูถูก /เหยียดหยาม (Dissing) </td>
                                        <td>การล้อเลียนรูปร่าง หน้าตา บุคคลิกภาพ รวมไปถึงการเหยียดเพศ เชื้อชาติต่างๆ
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" class="cb" name="bclass6" id="6" value="6"
                                            onclick="return myFun()"><label class="cbl" for="">
                                            6</label></td>
                                        <td>การหลอกลวง ,ก่อกวน (Trolling) </td>
                                        <td>การก่อกวนทำให้เกิดความรำคาญ โมโห เพื่อเรียกร้องความสนใจ </td>
                                    </tr>
                                    <tr>
                                        <td colspan="6" class="text-center" >
                                            <button type="submit" style="font-size:24px" class="btn btn-warning">แก้ไข</button><br>
                                            <small id="alert"></small>
                                        </td>
                                    </tr>
                                </tbody>

                            </form>

                        </table>

                    </div>
                </div>
                <hr>
            </div>


            <div class="tick-box text-center">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-12">
                        <!-- <p>
                            <span>ประโยคที่กรอก</span> => {{show_bword}} <br>
                            <!-- <span>ประเภทที่ทำนายที่ผิด</span> => {{pre_result}} -->
                        <!-- </p> --> 

                        <!-- <form action="save" method="get">
                            <input type="hidden" name="action" value="2">
                            <div class="form-group-checkbox">
                                <label class="cbl" for=""
                                    style="font-weight: bold;font-size:0.9rem;margin:10px">กรุณาเลือกประเภทที่เหมาะสม</label>

                                <ul>
                                    <li>
                                        <input type="checkbox" class="cb" name="bclass1" id="" value="1"
                                            onclick="return myFun()">
                                        <label class="cbl" for="">1</label>
                                    </li>

                                    <li>
                                        <input type="checkbox" class="cb" name="bclass2" id="" value="2"
                                            onclick="return myFun()">
                                        <label class="cbl" for="">2</label>
                                    </li>

                                    <li>
                                        <input type="checkbox" class="cb" name="bclass3" id="" value="3"
                                            onclick="return myFun()"><label class="cbl" for="">
                                            3</label>
                                    </li>
                                    <li><input type="checkbox" class="cb" name="bclass4" id="" value="4"
                                            onclick="return myFun()"><label class="cbl" for="">
                                            4</label></li>
                                    <li> <input type="checkbox" class="cb" name="bclass5" id="" value="5"
                                            onclick="return myFun()"><label class="cbl" for="">
                                            5</label></li>
                                    <li> <input type="checkbox" class="cb" name="bclass6" id="" value="6"
                                            onclick="return myFun()"><label class="cbl" for="">
                                            6</label></li>
                                </ul>
                            </div><br>
                            <button type="submit" class="btn btn-warning">แก้ไข</button><br>
                            <small id="alert"></small>
                        </form> -->

                    </div>
                </div>
            </div>

        </div>
    </section>


    <div class="container">

        <div class="content text-center">



        </div>

    </div>

    <script>
    const myFun = () => {
        let a = document.querySelectorAll('input[type="checkbox"]:checked')
        // คิวรี่คำสั่งเลือกทั้งหมดที่เป็น checkbox ซึ่งถูกเลือก
        let newvar = 0;
        let count;
        for (count = 0; count < a.length; count++) {
            if (a[count].checked == true) {
                newvar++;
            }
        }
        console.log(newvar);
        if (newvar == 4) {
            document.getElementById('alert').innerHTML = 'สามารถเลือกได้ 3 ประเภทเท่านั้น'
            newvar = 0;
            return false;
        } else {
            document.getElementById('alert').innerHTML = ''
        }
    }
    const urlParams = new URLSearchParams(window.location.search);
    const myParam = urlParams.get('index'); 
    if(myParam.lenght==9){
        const split_1 = myParam.split(", ");
        const split_2 = split_1[0].split('[')
        const split_3  = split_1[2].split(']')
        
        console.log(split_1[1]);
        console.log(split_2[1]);
        console.log(split_3[0]);

        const index_is_checked = [split_1[1],split_2[1],split_3[0]];
        for(i of index_is_checked){
                let checked = document.getElementById(i)
                checked.checked = true 
        }
    }else if(myParam.length==6){
        const split_1 = myParam.split(", ");
        const split_2 = split_1[0].split('[')
        const split_3  = split_1[1].split(']')
        
        // console.log(split_1[1]);
        console.log(split_2[1]);
        console.log(split_3[0]);

        const index_is_checked = [split_2[1],split_3[0]];
        for(i of index_is_checked){
                let checked = document.getElementById(i)
                checked.checked = false 
        }
    }else{
        const split_1 = myParam.split("[");
        const split_2 = split_1[1].split(']')
        console.log(split_2[0]);
       

        const index_is_checked = split_2[0];
      
        let checked = document.getElementById(index_is_checked)
        checked.checked = true 
    }
        
    </script>

</body>

</html>