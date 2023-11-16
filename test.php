<form action="" method="post">
    <select name="select_name">
        <option value="1">Thứ nhất</option>
        <option value="2">Thứ hai</option>
        <option value="3">Thứ ba</option>
    </select>
    <input type="submit" value="Gửi">
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $value = $_POST['select_name'];
    echo "Value của select form là: $value";
}

?>