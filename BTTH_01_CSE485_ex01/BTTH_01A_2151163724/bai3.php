<?php
$arrs = ['PHP', 'HTML', 'CSS', 'JS'];
?>
<table style="border:1px solid black;">
    <tr>
        <th style="border:1px solid black;border-collapse: collapse;">Tên khóa học</th>
    </tr>
    <?php foreach($arrs as $ele){?>
    <tr>
        <td style="border:1px solid black;">
            <?php echo($ele)?>
        </td>
    </tr>
    <?php
    }?>
</table>