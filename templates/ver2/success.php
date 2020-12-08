<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>alert</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

<body>

    <script>
     Swal.fire({
        icon: 'success',
        title:'แจ้งเตือน',
        text:'ดำเนินการบันทึกแล้ว',
        onClose:()=>{
            window.location.assign('/');
        }
     });
    </script>

</body>

</html>