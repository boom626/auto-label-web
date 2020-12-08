<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="static/css/style.css">

    <title>Home</title>
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
            <form action="/check" method="get">
                <div class="form-group">
                    <input class="form-control" type="text" name='bw' placeholder="กรอกประโยคบูลลี่ที่ต้องการ">
                </div>

                <button type="submit" class="btn btn-primary">ตรวจสอบ</button>
            </form>
        </div>
        <?php include 'footer.php';?>
    </div>
</body>

</html>