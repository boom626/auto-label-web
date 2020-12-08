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
    <link rel="stylesheet" href="static/css/style.css">

    <title>Check Manual</title>
</head>

<body>
    <div class="container">
        <header>

            <nav>
                <a href="index.php">Home</a>
                <a href=""></a>
            </nav>

            <h3>SANDY BULLY ClAWING</h3>

            <table>
                <tr>
                    <th>ลำดับ</th>
                    <th>ประเภท</th>
                    <th>ความหมาย</th>

                </tr>
                <tr>
                    <td>1</td>
                    <td>ปกติ (Normal) </td>
                    <td>ไม่เป็น Bully </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>การแบ่งแยก/การกีดกัน (Exclusion)</td>
                    <td>การไล่ออกจากกลุ่ม เพิกเฉย หรือการกระทำใดๆ ให้ผู้นั้นโดดเดี่ยว </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>การขมขู่ (Harassment) </td>
                    <td>การข่มขู่ทำร้ายร่างกาย ทำลายสิ่งของที่รัก หรือการกระทำใดๆ ให้เกิดความหวาดกลัว </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>การแฉ/การเปิดโปง (Revealing) </td>
                    <td>การนำข้อมูล ภาพเสียง ที่เป็นความลับหรือเรื่องส่วนตัวผู้นั้น มาเปิดเผย ให้เกิดความอับอาย </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>การดูถูก /เหยียดหยาม (Dissing) </td>
                    <td>การล้อเลียนรูปร่าง หน้าตา บุคคลิกภาพ รวมไปถึงการเหยียดเพศ เชื้อชาติต่างๆ </td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>การหลอกลวง ,ก่อกวน (Trolling) </td>
                    <td>การก่อกวนทำให้เกิดความรำคาญ โมโห เพื่อเรียกร้องความสนใจ </td>
                </tr>

            </table>
        </header>

        <div class="content text-center">

            <div class="bword">
                <h3>ประโยคที่กรอก</h3>
                <h2>{{show_bword}}</h2>
            </div>

            <form action="save" method="get">
                <input type="hidden" name="action" value="2">
                <div class="form-group-checkbox">
                    <label class="cbl" for="">ประเภทที่ </label>
                    <input type="checkbox" class="cb" name="bclass1" id="" value="1" onclick="return myFun()"><label class="cbl" for="">
                        1</label>
                    <input type="checkbox" class="cb" name="bclass2" id="" value="2" onclick="return myFun()"><label class="cbl" for="">
                        2</label>
                    <input type="checkbox" class="cb" name="bclass3" id="" value="3" onclick="return myFun()"><label class="cbl" for="">
                        3</label>
                    <input type="checkbox" class="cb" name="bclass4" id="" value="4" onclick="return myFun()"><label class="cbl" for="">
                        4</label>
                    <input type="checkbox" class="cb" name="bclass5" id="" value="5" onclick="return myFun()"><label class="cbl" for="">
                        5</label>
                    <input type="checkbox" class="cb" name="bclass6" id="" value="6" onclick="return myFun()"><label class="cbl" for="">
                        6</label>
                </div><br>
                <button type="submit" class="btn btn-warning">แก้ไข</button><br>
                <small id="alert"></small>
            </form>
        </div>

    </div>

    <script>
        const myFun = () =>{
            let a = document.querySelectorAll('input[type="checkbox"]:checked')
            
            let newvar = 0;
            let count;
            for(count=0;count<a.length;count++){
                if(a[count].checked==true){
                    newvar++;
                }
            }
            console.log(newvar);
            if(newvar==4){
                document.getElementById('alert').innerHTML = 'สามารถเลือกได้ 3 ประเภทเท่านั้น'
                newvar=0;
                return false;
            }else{
                document.getElementById('alert').innerHTML = ''
            }
        }
   </script>
  
</body>

</html>