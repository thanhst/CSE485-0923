<?php
$tenbaihat = [
    "Ai lên xứ hoa đào",
    "Anh cho em mùa xuân",
    "Áo anh sứt chỉ đường tà",
    "Áo lụa Hà Đông",
    "Bà mẹ Gio Linh",
    "Bạc phận",
    "Bad Boy",
    "Bài ca hy vọng",
    "Bài ca không quên",
    "Bài ca Tết cho em",
    "Bài ca Trường Sơn",
    "Bài ca đất phương Nam",
    "Bên cầu biên giới",
    "Đi tìm lời ru nữ thần mặt trời",
    "Đôi chân trần",
    "Kìa con bướm vàng",
    "Ly rượu mừng",
    "Ngồi tựa song đào",
    "Nửa hồn thương đau",
    "Quảng Bình quê ta ơi",
    "Tôi là người thợ lò",
    "Bài không tên",
    "Bài thánh ca buồn",
    "Bao giờ lấy chồng?",
    "Bậu ơi đừng khóc",
    "Bèo dạt mây trôi",
    "Bên trên tầng lầu",
    "Bến xuân",
    "Biển hát chiều nay",
    "Biển nhớ",
    "Bóng cây Kơ-nia",
    "Bonjour Vietnam",
    "Bống bống bang bang",
    "Bông hồng cài áo",
    "Bùa yêu",
    "Buông đôi tay nhau ra",
    "Bước chân trên dải Trường Sơn",
    "Ca dao em và tôi",
    "Căn phòng",
    "Câu chuyện đầu năm",
    "Câu hò bên bờ Hiền Lương",
    "Cây đàn sinh viên",
    "Chào em cô gái Lam Hồng",
    "Chào sông Mã anh hùng",
    "Chạy ngay đi"
];
$tacgia=[
    "Trần Quảng Nam",
    "Trịnh Công Sơn",
    "Trịnh Công Sơn",
    "Trịnh Công Sơn",
    "Phạm Duy",
    "Trịnh Nam Sơn",
    "K-ICM ft. Jack",
    "Đông Nhi",
    "Phạm Duy",
    "Trịnh Công Sơn",
    "Trịnh Công Sơn",
    "Trịnh Công Sơn",
    "Trịnh Công Sơn",
    "Phạm Duy",
    "Trịnh Công Sơn",
    "Trịnh Công Sơn",
    "Trịnh Công Sơn",
    "Trần Tiến",
    "Trịnh Công Sơn",
    "Trịnh Công Sơn",
    "Trịnh Công Sơn",
    "Trịnh Công Sơn",
    "Trịnh Công Sơn",
    "Trịnh Công Sơn",
    "Trịnh Công Sơn",
    "Trịnh Công Sơn",
    "Trịnh Công Sơn",
    "Trịnh Công Sơn",
    "Trịnh Công Sơn",
    "Trịnh Công Sơn",
    "Trịnh Công Sơn",
    "Phạm Quỳnh Anh",
    "365daband",
    "Trịnh Công Sơn",
    "Miu Lê",
    "Sơn Tùng M-TP",
    "Trịnh Công Sơn",
    "Trịnh Công Sơn",
    "Trần Thiện Thanh",
    "Trịnh Công Sơn",
    "Trịnh Công Sơn",
    "Sơn Tùng M-TP",
    "Trịnh Công Sơn",
    "Trịnh Công Sơn",
    "Trịnh Công Sơn",
    "Nhacvietplus"
];
$tieude=["Có chăng","Tình khúc xưa","Nỗi nhớ một thời","Chàng ngự lâm cầm cây bút","Nhạc sĩ python","Tình anh","Tình em"];
$theloai=['1','2','3','4'];
$matacgia=['100','101','102','103','104','105','106','107','108','109','110','111','112'];
$tomtat=["tomtat1",'tomtat2','php khó','php dễ','tôi học dốt','không biết gì'];
$tentacgia=array_unique($tacgia);
foreach($tenbaihat as $key)
{
    $tieuderand=$tieude[array_rand($tieude)];
    $theloairand=$theloai[array_rand($theloai)];
    $tomtatrand=$tomtat[array_rand($tomtat)];
    $matacgiarand=$matacgia[array_rand($matacgia)];
    echo "insert into baiviet (tieude,ten_bhat,ma_tloai,tomtat,ma_tgia)
    values(
        '$tieuderand','$key','$theloairand','$tomtatrand','$matacgiarand'
    );<br>";
}