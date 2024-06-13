<?php
    session_start();
    if (!isset($_SESSION['user_name'])){
    	header('<Location: class=""></Location:>/index.php');
    }
    if (isset($_GET['id'])) {
        $IDPhongTro = $_GET['id'];
    } else {
        echo "ID phòng trọ không được cung cấp!";
        exit();
    }
    include('/connectToDatabase.php');
    if (isset($_POST['themanh'])) {
        // Kiểm tra xem ảnh có được tải lên không
        if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
            $image = $_FILES['image'];
            $imagePath = 'uploads/' . basename($image['name']);
            
            // Di chuyển ảnh tải lên vào thư mục đích
            if (move_uploaded_file($image['tmp_name'], $imagePath)) {
                // Lưu đường dẫn ảnh vào cơ sở dữ liệu
                $add_anh_sql = "INSERT INTO hinh_anh_phong_tro (IDPhongTro, DuongDan) VALUES (?, ?)";
                $add_anh_stmt = $conn->prepare($add_anh_sql);
                $add_anh_stmt->bind_param("is", $IDPhongTro, $imagePath);

                if ($add_anh_stmt->execute()) {
                    echo "Ảnh đã được thêm thành công!";
                    header("Location: Quanlyphongchitiet.php?id=$IDPhongTro");
                    exit();
                } else {
                    echo "Lỗi: " . $conn->error;
                }
            } else {
                echo "Lỗi khi tải lên ảnh.";
            }
        } else {
            echo "Ảnh chưa được chọn hoặc có lỗi khi tải lên.";
        }
    }

    // Nếu người dùng muốn xóa ảnh
    if (isset($_POST['xoaanh'])) {
        // Xóa ảnh từ cơ sở dữ liệu
        $delete_anh_sql = "DELETE FROM hinh_anh_phong_tro WHERE  IDPhongTro = ?";
        $delete_anh_stmt = $conn->prepare($delete_anh_sql);
        $delete_anh_stmt->bind_param("i" ,$IDPhongTro);

        if ($delete_anh_stmt->execute()) {
            echo "Ảnh đã được xóa thành công!";
            header("Location: Quanlyphongchitiet.php?id=$IDPhongTro");
            exit();
        } else {
            echo "Lỗi: " . $conn->error;
        }
    }




// Lấy thông tin phòng trọ từ cơ sở dữ liệu


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Phòng Chi Tiết</title>
</head>
<body>
    
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <h3>Hình ảnh phòng trọ</h3>
        
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <?php
                    $sql2 = 'SELECT DuongDan FROM hinh_anh_phong_tro WHERE IDPhongTro = ?';
                    $stmt2 = $conn->prepare($sql2);
                    $stmt2->bind_param('i', $IDPhongTro);
                    $stmt2->execute();
                    $result2 = $stmt2->get_result();

                    $images = [];
                    while ($row = $result2->fetch_assoc()) {
                        $images[] = $row['DuongDan'];
                    }
                    
                    $num_of_images = count($images);
                    for ($i = 0; $i < $num_of_images; $i++) {
                        if ($i == 0) {
                            echo '<li data-target="#myCarousel" data-slide-to="0" class="active"></li>';
                        } else {
                            echo '<li data-target="#myCarousel" data-slide-to="' . $i . '"></li>';
                        }
                    }
                ?>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <?php
                    $count = 0;
                    foreach ($images as $Image) {
                        $Image = trim($Image); // Loại bỏ khoảng trắng thừa (nếu có)
                        if (!empty($Image)) {
                            if ($count == 0) {
                                echo '<div class="item active">
                                        <img src="' . $Image . '" alt="Hình ảnh phòng trọ">
                                    </div>';
                            } else {
                                echo '<div class="item">
                                        <img src="' . $Image . '" alt="Hình ảnh phòng trọ">
                                    </div>';
                            }
                            $count++;
                        }
                    }
                ?>
            </div>
        

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>    
        <div class="row" style="margin-top: 20px;">
                <div class="form-group col-xs-12">
                    <label>Thêm ảnh mới:</label>
                    <input type="file" class="form-control" id="upload_images" name="fileToUpload[]" onchange="previewImages()"  multiple="multiple">
                    <div class="preview_images col-xs-12" id="preview_images" style="margin: 15px 0px; padding: 0px;"></div>
                </div>
        </div>
        <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-left">
                    <button id="add_image_button" type="submit" class="btn btn-success" name="themanh" style="background-color: rgb(175, 0, 0);">Thêm Ảnh</button>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-right ">
                    <button id="delete_image_button" type="submit" class="btn btn-success" name="xoaanh" style="background-color: rgb(175, 0, 0);">Xóa Ảnh</button>
                </div>
        </div>
        

</body>
</html>

