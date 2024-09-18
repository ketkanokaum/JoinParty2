<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join Party</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/join.css">
</head>
<body>
    <div class="container mt-5">
        <!-- Header Section -->
        <header class="d-flex justify-content-between align-items-center mb-4">
            <img src="img-join-to-party/logo.png" alt="logo" class="logo">
            <nav>
                <a href="#" class="mx-3">หน้าแรก</a>
                <a href="view-all-party.html" class="mx-3">ปาร์ตี้ของฉัน</a>
                <a href="#" class="mx-3">รายการโปรด</a>
                <a href="#" class="mx-3">โปรไฟล์ของฉัน</a>
            </nav>
        </header>

        <!-- Main Content -->
        <div class="card p-4 shadow">
            <div class="row g-4">
                <!-- Image Section -->
                <div class="col-md-6">
                    <img src="img-join-to-party/t8db9k4_home-decor-650_625x300_10_August_21.jpg" class="img-fluid rounded " alt="Party Image">
                </div>

                <!-- Details Section สำหรับ Back End!!!!!!!!!!!-->
                <div class="col-md-6">
                    <!-- ชื่อ Party -->
                    <h2 class="mb-3">มาสิ มาปาร์ตี้</h2>
                    <!-- จำนวนผู้เข้าร่วมใน Party -->
                    <p>จำนวนผู้เข้าร่วม: <span class="text-muted">22/40 คน</span></p>
                    <!-- เวลาคงเหลือของ Party  -->
                    <p id="countdown" class="text-danger">เวลาคงเหลือ: ... วัน</p>
                    
                    <!-- ใส่ข้อมูลใน Party -->
                    <ul class="list-unstyled">
                        <li><strong>วันทื่จัด:</strong> วันพฤหัสบดี ที่ 5 ธันวาคม 2567</li>
                        <li><strong>เวลา:</strong> ตั้งแต่เวลา 19:30 น. เป็นต้นไป</li>
                        <li><strong>สถานที่:</strong> ร้าน Hashtag หลัง มหาวิทยาลัยขอนแก่น</li>
                        <li><strong>คุณสมบัติ:</strong> อายุ 20 เป็นต้นไป</li>
                        <li><strong>คำอธิบายกิจกรรม:</strong> คุณพร้อมสำหรับคืนสนุกสุดเหวี่ยงหรือยัง? ฉัน/ผมอยากเชิญคุณมาร่วมปาร์ตี้สุดมันที่กำลังจะจัดขึ้น เพื่อดื่มด่ำกับบรรยากาศแห่งความสุขสนานและเพลิดเพลิน</li>
                    </ul>

                    <div class="d-flex align-items-center mt-4">
                        <button class="btn btn-success me-3">เข้าร่วม</button>
                        <a href="view-all-party.html" class="btn btn-outline-secondary me-4">ย้อนกลับ</a>
                        <i id="favorite-icon" class="bi bi-heart " style="font-size: 1.5rem; cursor: pointer;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous">
    </script>
    <!-- กดหัวใจแล้วเปลี่ยนสีได้ -->
    <script>
        document.getElementById("favorite-icon").addEventListener("click", function() {
            this.classList.toggle("bi-heart");
            this.classList.toggle("bi-heart-fill");
            this.classList.toggle("text-danger");  // เปลี่ยนสีไอคอนด้วย
        });
    </script>
    <!-- นับถอยหลังจากวันจริงๆ -->
    <script>
        function calculateDaysLeft(endDate) {
            const today = new Date();
            const end = new Date(endDate);
            const timeDifference = end - today;
            const daysLeft = Math.ceil(timeDifference / (1000 * 60 * 60 * 24));
            return daysLeft;
        }
    
        // กำหนดวันสิ้นสุดปาร์ตี้ (ปี-เดือน-วัน)
        const partyEndDate = '2024-12-05';
    
        // คำนวณวันคงเหลือแล้วอัปเดตในหน้าเว็บ
        function updateCountdown() {
            const daysLeft = calculateDaysLeft(partyEndDate);
            document.getElementById('countdown').textContent = `เวลาคงเหลือ: ${daysLeft} วัน`;
        }
    
        // เรียกใช้ฟังก์ชันทันทีที่เปิดหน้าเว็บ
        updateCountdown();
    
        // ฟังก์ชันสำหรับการกดปุ่ม "เข้าร่วม"
        document.querySelector('.btn-success').addEventListener('click', function() {
            // เปลี่ยนข้อความปุ่มเป็น "เข้าร่วมแล้ว"
            this.textContent = 'เข้าร่วมแล้ว';
    
            // ปิดการใช้งานปุ่มหลังจากกด
            this.disabled = true;
        });
    </script>

</body>
</html>