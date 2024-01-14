<?php
// 读取原始笔记
$notes = json_decode(file_get_contents('notebook.json'), true);

// 获取POST请求的笔记数据
$data = json_decode(file_get_contents('php://input'), true);

// 添加新笔记到数组
$notes[] = $data;

// 保存更新后的笔记数组到notebook.json
//file_put_contents('notebook.json', json_encode($notes));
file_put_contents('notebook.json', json_encode($notes, JSON_UNESCAPED_UNICODE));
echo "Note added successfully.";
?>
