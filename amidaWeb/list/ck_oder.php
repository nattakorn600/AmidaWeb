<?php
session_start();
unset($_SESSION['shopping_cart']);
include 'link.php';
?>
<body class="body">
<script>
alert('่สั่งซื้อเรียบร้อยแล้ว');
window.location="oder.php";
</script>
</body>