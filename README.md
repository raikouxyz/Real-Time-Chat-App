# Ứng Dụng Real-Time Chat

## Mô Tả

Ứng dụng chat thời gian thực được xây dựng bằng PHP, MySQL, HTML, CSS và JavaScript. Ứng dụng này cho phép người dùng đăng nhập, chọn phòng chat và giao tiếp trong thời gian thực mà không cần làm mới trang. Ứng dụng cũng có chức năng xóa tất cả tin nhắn trong một phòng chat.

## Tính Năng

- **Xác Thực Người Dùng:** Người dùng có thể đăng nhập bằng cách nhập tên người dùng và chọn phòng chat từ menu thả xuống.
- **Nhắn Tin Thời Gian Thực:** Tin nhắn được gửi và nhận trong thời gian thực bằng cách sử dụng AJAX và PHP, đảm bảo trải nghiệm người dùng mượt mà mà không cần làm mới trang.
- **Xóa Tin Nhắn:** Người dùng có thể xóa tất cả tin nhắn trong một phòng chat bằng một nút bấm.
- **Giao Diện Người Dùng:** Giao diện thân thiện với người dùng được thiết kế bằng HTML và CSS.

## Công Nghệ Sử Dụng

- **Backend:** PHP, MySQL
- **Frontend:** HTML, CSS, JavaScript
- **Giao Tiếp Thời Gian Thực:** AJAX

## Cài Đặt

1. **Clone repository:**
    ```bash
    git clone https://github.com/tennguoisudung/tendoan.git
    cd tendoan
    ```

2. **Thiết lập cơ sở dữ liệu:**
    - Nhập file `database.sql` vào cơ sở dữ liệu MySQL của bạn để tạo các bảng cần thiết.
    - Cập nhật file `db.php` với thông tin đăng nhập cơ sở dữ liệu của bạn.

3. **Chạy ứng dụng:**
    - Đảm bảo máy chủ web của bạn (ví dụ: Apache) đang chạy.
    - Mở file `index.html` trong trình duyệt web của bạn để bắt đầu sử dụng ứng dụng.

## Sử Dụng

1. **Đăng nhập:**
    - Nhập tên người dùng và chọn phòng chat từ menu thả xuống.

2. **Chat:**
    - Nhập tin nhắn của bạn và nhấn "Send" để gửi tin nhắn vào phòng chat.
    - Tin nhắn sẽ xuất hiện trong thời gian thực mà không cần làm mới trang.

3. **Xóa Tin Nhắn:**
    - Nhấn nút "Delete All Messages" để xóa tất cả tin nhắn trong phòng chat hiện tại.



