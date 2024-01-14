<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $indexToDelete = $_POST['indexToDelete'];

    // 读取原始笔记
    $notes = json_decode(file_get_contents('notebook.json'), true);

    // 删除指定序号的记录
    if (isset($notes[$indexToDelete - 1])) {
        array_splice($notes, $indexToDelete - 1, 1);

        // 保存更新后的笔记数组到notebook.json
        file_put_contents('notebook.json', json_encode($notes));

        echo "Note deleted successfully.";
    } else {
        echo "Invalid index to delete.";
    }
} else {
    echo "Invalid request method.";
}
?>
