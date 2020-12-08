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
    <!-- <link rel="stylesheet" href="static/css/style.css"> -->

    <title>Check</title>
    <style>
        section.main-content {
            margin:20px 0px 0px 20px;
        }
        section.main-content .result-box{
            margin:15px;
        }
        section.main-content .title{
            padding:10px;
            font-weight:bold;
        }
        section.main-content .result-box span{
            font-size:1.2rem;
            font-weight:bold;
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

                        <h3 class="title text-center">คู่มือการใช้งาน</h3>
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th>ลำดับ</th>
                                    <th>ประเภท</th>
                                    <th>ความหมาย</th>
                                </tr>
                            </thead>
                            <tbody>
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
                                    <td>การข่มขู่ทำร้ายร่างกาย ทำลายสิ่งของที่รัก หรือการกระทำใดๆ ให้เกิดความหวาดกลัว
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>การแฉ/การเปิดโปง (Revealing) </td>
                                    <td>การนำข้อมูล ภาพเสียง ที่เป็นความลับหรือเรื่องส่วนตัวผู้นั้น มาเปิดเผย
                                        ให้เกิดความอับอาย </td>
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
                            </tbody>


                        </table>

                    </div>
                </div>
                <hr>
            </div>


            <div class="result-box text-center">
                <div class="row">
                    <div class="col-12 col-sm-12">
                        <p>
                            <span>ประโยคที่กรอก</span> => {{show_bword}} <br>
                            <span>ประเภทที่ทำนาย</span> => {{index}}
                        </p>
                        <a href="save?action=1&bw={{show_bword}}"><button class="btn btn-success">ถูกต้อง</button></a>
                        <a href="notsave?bw={{show_bword}}&index={{index}}"><button class="btn btn-danger">ไม่ถูกต้อง</button></a>
                    </div>
                </div>

                    <div class="bword">
                        
                    </div>
                    

            </div>

        </div>
    </section>
</body>

</html>