Use btth01_cse485;
select * from baiviet;
/* a. Liệt kê các bài viết về các bài hát thuộc thể loại Nhạc trữ tình */


select * from theloai join baiviet on theloai.ma_tloai=baiviet.ma_tloai  where ten_tloai="Nhạc trữ tình";
/*b. Liệt kê các bài viết của tác giả “Nhacvietplus”*/


select baiviet.* from baiviet join tacgia on baiviet.ma_tgia = tacgia.ma_tgia where ten_tgia="Nhacvietplus";
/*c. Liệt kê các thể loại nhạc chưa có bài viết cảm nhận nào.*/
select * from theloai where ma_tloai not in (select ma_tloai from baiviet);


/*d. Liệt kê các bài viết với các thông tin sau: mã bài viết, tên bài viết, tên bài hát, tên tác giả, tên
thể loại, ngày viết.*/
select baiviet.ma_bviet,baiviet.tieude,baiviet.ten_bhat,tacgia.ten_tgia,theloai.ten_tloai,baiviet.ngayviet from (baiviet join tacgia  on baiviet.ma_tgia =tacgia.ma_tgia ) join theloai on baiviet.ma_tloai = theloai.ma_tloai;


/*Tìm thể loại có số bài viết nhiều nhất*/
select theloai.ma_tloai,(count(theloai.ma_tloai)) as soluong
from theloai join baiviet on theloai.ma_tloai=baiviet.ma_tloai 
group by theloai.ma_tloai
order by soluong DESC
limit 1;


/*f.Liệt kê 2 tác giả có số bài viết nhiều nhất*/
select baiviet.ma_tgia,tacgia.ten_tgia ,count(baiviet.ma_tgia) as soluong
from  baiviet join tacgia on baiviet.ma_tgia=tacgia.ma_tgia
group by baiviet.ma_tgia
order by soluong DESC
LIMIT 2;


/* g. Liệt kê các bài viết về các bài hát có tựa bài hát chứa 1 trong các từ “yêu”, “thương”, “anh”,
“em”*/
SELECT *
FROM baiviet
WHERE tieude LIKE '%yêu%' OR tieude LIKE '%thương%' OR tieude LIKE '%anh%' OR tieude LIKE '%em%';


/*Liệt kê các bài viết về các bài hát có tiêu đề bài viết hoặc tựa bài hát chứa 1 trong các từ
“yêu”, “thương”, “anh”, “em” */
SELECT *
FROM baiviet
WHERE (tieude LIKE '%yêu%' OR tieude LIKE '%thương%' OR tieude LIKE '%anh%' OR tieude LIKE '%em%') or ten_bhat REGEXP '(yêu|thương|anh|em)';


/*i.Tạo 1 view có tên vw_Music để hiển thị thông tin về Danh sách các bài viết kèm theo Tên
thể loại và tên tác giả*/
CREATE VIEW vw_Music AS
SELECT baiviet.*, theloai.ten_tloai  AS ten_theloai, tacgia.ten_tgia AS ten_tacgia
FROM baiviet
JOIN theloai ON baiviet.ma_tloai  = theloai.ma_tloai
JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia;
SELECT * FROM vw_Music;


/*j. Tạo 1 thủ tục có tên sp_DSBaiViet với tham số truyền vào là Tên thể loại và trả về danh sách
Bài viết của thể loại đó. Nếu thể loại không tồn tại thì hiển thị thông báo lỗi. */
DELIMITER //
CREATE PROCEDURE sp_DSBaiViet(
    IN ten_theloai VARCHAR(100)
)
BEGIN
    DECLARE theloai_id INT;
	SELECT ma_tloai INTO theloai_id FROM theloai WHERE ten_tloai= ten_theloai;
    
    IF theloai_id IS NULL THEN
        SELECT 'Thể loại không tồn tại.' AS error_message;
    ELSE
        SELECT * FROM baiviet WHERE ma_tloai = theloai_id;
    END IF;
END //
DELIMITER ;
drop procedure sp_DSBaiViet;
CALL sp_DSBaiViet("Nhạc trữ tình");


/*Thêm mới cột SLBaiViet vào trong bảng theloai. Tạo 1 trigger có tên tg_CapNhatTheLoai để
khi thêm/sửa/xóa bài viết thì số lượng bài viết trong bảng theloai được cập nhật theo.*/

ALTER TABLE theloai
ADD COLUMN SLBaiViet INT DEFAULT 0;

CREATE TEMPORARY TABLE tmp_theloai AS
SELECT ma_tloai, COUNT(*) AS sl_baiviet
FROM baiviet
GROUP BY ma_tloai;

UPDATE theloai AS t
JOIN tmp_theloai AS tmp ON t.ma_tloai = tmp.ma_tloai
SET t.SLBAIVIET = tmp.sl_baiviet;

DROP TEMPORARY TABLE tmp_theloai;

DELIMITER //
CREATE TRIGGER tg_CapNhatTheLoai
AFTER INSERT ON baiviet
FOR EACH ROW
BEGIN
    UPDATE theloai SET SLBaiViet = SLBaiViet + 1 WHERE ma_tloai = NEW.ma_tloai;
END //
CREATE TRIGGER tg_DeleteBaiViet
AFTER DELETE ON baiviet
FOR EACH ROW
BEGIN
    UPDATE theloai SET SLBaiViet = SLBaiViet - 1 WHERE ma_tloai = OLD.ma_tloai;
END //
DELIMITER ;
