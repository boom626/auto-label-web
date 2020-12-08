<!-- <?php
    $action = $_GET['action'];
    $bw = $_GET['bw'];
    if($action == 'y'){
        header('Location:success.php');
    }else if($action == 'n'){
        header('Location:manual.php?bw='.$bw.'');
    }
?> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="static/css/style.css">

    <title>Check</title>
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
                <h3>ประเภทที่ทำนาย</h3>
                <h2>{{pre_result}}</h2>
            </div>
            <a href="save?action=1&bw={{show_bword}}"><button class="btn btn-success">ถูกต้อง</button></a>
            <a href="notsave?&bw={{show_bword}}"><button class="btn btn-danger">ไม่ถูกต้อง</button></a>

        </div>

    </div>
</body>

</html>