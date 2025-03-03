# Olympic Tin học 2025 - Đấu trường số - Cao Thắng

## Tổng quan dự án

**Olympic Tin học 2025 – Đấu trường số** là một hệ thống quản lý cuộc thi lập trình và tin học được phát triển để tổ chức các vòng thi đấu trực tuyến và trực tiếp tại Trường Cao đẳng Kỹ thuật Cao Thắng. Hệ thống hỗ trợ ban tổ chức, giám khảo và thí sinh trong việc quản lý vòng thi, câu hỏi, điểm số, bảng xếp hạng và báo cáo kết quả theo thời gian thực.

Dự án được xây dựng với mục tiêu:
- Tối ưu hóa quy trình tổ chức cuộc thi.
- Cung cấp giao diện trực quan, responsive trên đa nền tảng.
- Đảm bảo tính chính xác và minh bạch trong chấm điểm và xếp hạng.

## 🎯 Tính năng chính

### 1. Quản lý cuộc thi (Admin)
- Tạo và cấu hình các vòng thi (vòng loại, tứ kết, bán kết, chung kết).
- Nhập danh sách thí sinh từ file Excel và tự động phân nhóm.
- Thiết lập gói câu hỏi cho từng vòng (Alpha, Beta, RC, GOLD).
- Giám sát thống kê và xuất báo cáo (PDF/Excel).

### 2. Quản lý thí sinh và nhóm
- Chia tự động 60 thí sinh thành 6 nhóm (10 người/nhóm).
- Theo dõi trạng thái thí sinh: đang thi, trả lời đúng/sai, bị loại.
- Giao diện mobile cho giám khảo: đánh dấu “Loại” và kích hoạt “Cứu trợ”.

### 3. Hiển thị câu hỏi và trình chiếu
- Giao diện desktop hiển thị câu hỏi (văn bản, hình ảnh, video, kịch bản).
- Đồng bộ đếm ngược thời gian và hiệu ứng chuyển cảnh.

### 4. Chấm điểm và bảng xếp hạng
- Chấm điểm tự động, cập nhật thời gian thực.
- Bảng xếp hạng theo vòng, nhóm, lớp.
- Dashboard thống kê: số thí sinh, lượt bị loại, lượt cứu trợ.

### 5. Quản lý câu hỏi
- Thêm, sửa, xóa câu hỏi với đa định dạng (trắc nghiệm, điền chữ, hình ảnh, video).
- Tạo gói câu hỏi bằng công cụ kéo-thả hoặc tự động.

### 6. Báo cáo và phân tích
- Thống kê thời gian thực với biểu đồ.
- Xuất báo cáo chi tiết sau mỗi vòng thi.

## 🛠 Công nghệ sử dụng
- **Backend**: Laravel (API), MySQL.
- **Frontend**: HTML, CSS, JavaScript (responsive).
- **Realtime**: WebSocket (socket.io).
- **Bảo mật**: Phân quyền, xác thực 2FA.

## 📋 Cài đặt

### Yêu cầu
- PHP >= 8.0
- Composer
- Node.js & npm
- MySQL

### Hướng dẫn cài đặt
1. **Clone repository**:
    ```bash
    git clone https://github.com/minhdat204/Olympictech_Backend_2025.git
    cd Olympictech_Backend_2025
    ```

2. **Cài đặt dependencies PHP**:
    ```bash
    composer install
    ```

3. **Cài đặt dependencies Node**:
    ```bash
    npm install
    ```

4. **Sao chép file `.env`**:
    ```bash
    cp .env.example .env
    ```

5. **Tạo khóa ứng dụng**:
    ```bash
    php artisan key:generate
    ```

6. **Cấu hình file `.env`**:
   - Thiết lập thông tin cơ sở dữ liệu (DB_CONNECTION, DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, DB_PASSWORD).
   - Cấu hình các thông số khác nếu cần.

7. **Chạy migration để tạo cơ sở dữ liệu**:
    ```bash
    php artisan migrate
    ```

8. **Khởi động server phát triển**:
    ```bash
    php artisan serve
    ```

### Lệnh bổ sung
- **Biên dịch tài nguyên frontend**:
    ```bash
    npm run dev
    ```

- **Chạy WebSocket server**:
    ```bash
    node server.js
    ```

## 🚀 Sử dụng
1. **Đăng nhập**:
   - Admin: Quản lý toàn bộ hệ thống.
   - Giám khảo: Theo dõi và quản lý nhóm thí sinh qua giao diện mobile.

2. **Chuẩn bị thi**:
   - Nhập danh sách thí sinh, cấu hình vòng thi và gói câu hỏi.

3. **Trong thi đấu**:
   - Giao diện desktop hiển thị câu hỏi, giám khảo quản lý qua mobile.

4. **Sau thi đấu**:
   - Xem bảng xếp hạng, xuất báo cáo.

---

**Olympic Tin học 2025 – Đấu trường số** là một dự án đầy tiềm năng để hỗ trợ tổ chức các cuộc thi chuyên nghiệp và hiện đại!
