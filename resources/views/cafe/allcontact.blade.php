@extends('layout2')
@section('main')
<table>
    <tr>
        <th>ID</th>
        <th>氏名</th>
        <th>フリガナ</th>
        <th>電話番号</th>
        <th>メールアドレス</th>
        <th>お問い合わせ内容</th>
        <th>お問い合わせ日時</th>
    </tr>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name1']; ?></td>
        <td><?php echo $row['kana']; ?></td>
        <td><?php echo $row['tel']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo nl2br(htmlspecialchars($row['body'])); ?></td>
        <td><?php echo $row['created_at']; ?></td>
        <td><a href="edit.php?id=<?php echo $row['id'] ?>">編集</a></td>
        <td><a href="delete.php?id=<?php echo $row['id']?>" onclick = "return delete_check()">削除</a></td>
    </tr>
</table>
<style>
    table{
        margin: auto;
        border: 2px solid black;
        word-break: break-all;
        margin-bottom: 5%;
    }
    th,td{
        border: 1px solid black;
        background-color: white;
        padding: 3px;
    }
    table a {
        color: blue;
        text-decoration: underline;
    }

</style>

