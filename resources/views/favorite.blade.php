<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join Party</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/style_favorite.css">
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

    <div class="container mt-5">
        <div class="row">
            <!-- Card 1 -->
            <div class="col-md-4">
                <div class="card party-card">
                    <img src="img-join-to-party/t8db9k4_home-decor-650_625x300_10_August_21.jpg" class="card-img-top party-img" alt="Party Image">
                    <div class="card-body">
                        <h5 class="card-title">มาสิ มาปาร์ตี้</h5>
                        <p class="card-text">วันพฤหัสบดี ที่ 5 ธันวาคม 2567</p>
                        <p class="countdown text-danger">เวลาคงเหลือ: ... วัน</p>
                        <p class="card-text">สถานที่: ร้าน Hashtag หลัง มหาวิทยาลัยขอนแก่น</p>
                        <p class="card-text">เวลา: 19:30 น.</p>
                        <div class="d-flex justify-content-between">
                            <i id="favorite-icon" class="favorite-icon bi bi-heart" style="font-size: 1.5rem; cursor: pointer;"></i>
                            <div class="d-flex">
                                <!-- review-btn ต้องเขียนเพิ่มตามจำนวน card -->
                                <button class="btn btn-secondary review-btn" id="review-btn-1">รีวิว</button>
                                <a href="join-to-party.html"><button class="btn btn-warning me-2">ข้อมูลเพิ่มเติม</button></a>
                                <button class="btn btn-success">เข้าร่วม</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal สำหรับการ์ด 1 -->
            <!-- ต้องกำหนด id, aria-labelledby จะได้เปิดหน้าต่างย่อยของแต่ละ card -->
            <div class="modal fade" id="reviewModal1" tabindex="-1" aria-labelledby="reviewModalLabel1" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <!-- ต้องกำหนด id -->
                            <h3 class="modal-title" id="reviewModalLabel1">รีวิวกิจกรรม</h3>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container mt-5">
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <img src="img-join-to-party/t8db9k4_home-decor-650_625x300_10_August_21.jpg" class="img-fluid rounded" alt="Party Image">
                                    </div>
                                    <div class="col-md-6">
                                        <h2 class="mb-3">มาสิ มาปาร์ตี้</h2>
                                        <p class="text-muted">วันพฤหัสบดี ที่ 5 ธันวาคม 2567</p>
                                        <div class="mb-3">
                                            <!-- ต้องกำหนด rating ของแต่ละ card -->
                                            <label for="rating1" class="form-label">คะแนน</label>
                                            <select id="rating1" class="form-select">
                                                <option value="" disabled selected>เลือกคะแนน</option>
                                                <option value="5">5 - ดีเยี่ยม</option>
                                                <option value="4">4 - ดี</option>
                                                <option value="3">3 - พอใช้</option>
                                                <option value="2">2 - ไม่ดี</option>
                                                <option value="1">1 - แย่</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="review-text1" class="form-label">ความคิดเห็น</label>
                                            <textarea id="review-text1" class="form-control" rows="4" placeholder="เขียนความคิดเห็นของคุณที่นี่..."></textarea>
                                        </div>
                                        <button type="submit" id="submit-btn1" class="btn btn-primary btn-disabled">ส่งรีวิว</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Card 1 -->

            <!-- Card 2 -->
            <div class="col-md-4">
                <div class="card party-card">
                    <img src="img-join-to-party/three-hands-holding-young-plant-planting.jpg" class="card-img-top party-img" alt="Party Image">
                    <div class="card-body">
                        <h5 class="card-title">ปลูกต้นไม้</h5>
                        <p class="card-text">วันพฤหัสบดี ที่ 5 ธันวาคม 2567</p>
                        <p class="countdown text-danger">เวลาคงเหลือ: ... วัน</p>
                        <p class="card-text">สถานที่: ป่าชายเลนบางปู</p>
                        <p class="card-text">เวลา: 8:30 น.</p>
                        <div class="d-flex justify-content-between">
                            <i id="favorite-icon" class="favorite-icon bi bi-heart" style="font-size: 1.5rem; cursor: pointer;"></i>
                            <div class="d-flex">
                                <!-- review-btn ต้องเขียนเพิ่มตามจำนวน card -->
                                <button class="btn btn-secondary review-btn" id="review-btn-2">รีวิว</button>
                                <button class="btn btn-warning me-2">ข้อมูลเพิ่มเติม</button>
                                <button class="btn btn-success">เข้าร่วม</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal สำหรับการ์ด 2 -->
            <!-- ต้องกำหนด id, aria-labelledby จะได้เปิดหน้าต่างย่อยของแต่ละ card -->
            <div class="modal fade" id="reviewModal2" tabindex="-1" aria-labelledby="reviewModalLabel2" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <!-- ต้องกำหนด id -->
                            <h3 class="modal-title" id="reviewModalLabel2">รีวิวกิจกรรม</h3>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container mt-5">
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <img src="img-join-to-party/three-hands-holding-young-plant-planting.jpg" class="img-fluid rounded" alt="Party Image">
                                    </div>
                                    <div class="col-md-6">
                                        <h2 class="mb-3">ปลูกต้นไม้</h2>
                                        <p class="text-muted">วันพฤหัสบดี ที่ 5 ธันวาคม 2567</p>
                                        <div class="mb-3">
                                            <!-- ต้องกำหนด rating ของแต่ละ card -->
                                            <label for="rating2" class="form-label">คะแนน</label>
                                            <select id="rating2" class="form-select">
                                                <option value="" disabled selected>เลือกคะแนน</option>
                                                <option value="5">5 - ดีเยี่ยม</option>
                                                <option value="4">4 - ดี</option>
                                                <option value="3">3 - พอใช้</option>
                                                <option value="2">2 - ไม่ดี</option>
                                                <option value="1">1 - แย่</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="review-text2" class="form-label">ความคิดเห็น</label>
                                            <textarea id="review-text2" class="form-control" rows="4" placeholder="เขียนความคิดเห็นของคุณที่นี่..."></textarea>
                                        </div>
                                        <button type="submit" id="submit-btn2" class="btn btn-primary btn-disabled">ส่งรีวิว</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Card 2 -->

            <!-- Card 3 -->
            <div class="col-md-4">
                <div class="card party-card">
                    <img src="img-join-to-party/iq451e01af0c5fcbf2e4457c9a8166179e.jpg" class="card-img-top party-img" alt="Party Image">
                    <div class="card-body">
                        <h5 class="card-title">จิตอาสาเก็บขยะหาดดงตาล</h5>
                        <p class="card-text">วันพุธ ที่ 31 สิงหาคม 2567</p>
                        <p class="countdown text-danger">เวลาคงเหลือ: ... วัน</p>
                        <p class="card-text">สถานที่: เกาะยอ สัตหีบ</p>
                        <p class="card-text">เวลา: 9:00 น.</p>
                        <div class="d-flex justify-content-between">
                            <i id="favorite-icon" class="favorite-icon bi bi-heart" style="font-size: 1.5rem; cursor: pointer;"></i>
                            <div class="d-flex">
                                <!-- review-btn ต้องเขียนเพิ่มตามจำนวน card -->
                                <button class="btn btn-secondary review-btn" id="review-btn-3">รีวิว</button>
                                <button class="btn btn-warning me-2">ข้อมูลเพิ่มเติม</button>
                                <button class="btn btn-success">เข้าร่วม</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal สำหรับการ์ด 3 -->
            <!-- ต้องกำหนด id, aria-labelledby จะได้เปิดหน้าต่างย่อยของแต่ละ card -->
            <div class="modal fade" id="reviewModal3" tabindex="-1" aria-labelledby="reviewModalLabel3" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <!-- ต้องกำหนด id -->
                            <h3 class="modal-title" id="reviewModalLabel3">รีวิวกิจกรรม</h3>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container mt-5">
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <img src="img-join-to-party/iq451e01af0c5fcbf2e4457c9a8166179e.jpg" class="img-fluid rounded" alt="Party Image">
                                    </div>
                                    <div class="col-md-6">
                                        <h2 class="mb-3">จิตอาสาเก็บขยะหาดดงตาล</h2>
                                        <p class="text-muted">วันพุธ ที่ 31 สิงหาคม 2567</p>
                                        <div class="mb-3">
                                            <!-- ต้องกำหนด rating ของแต่ละ card -->
                                            <label for="rating3" class="form-label">คะแนน</label>
                                            <select id="rating3" class="form-select">
                                                <option value="" disabled selected>เลือกคะแนน</option>
                                                <option value="5">5 - ดีเยี่ยม</option>
                                                <option value="4">4 - ดี</option>
                                                <option value="3">3 - พอใช้</option>
                                                <option value="2">2 - ไม่ดี</option>
                                                <option value="1">1 - แย่</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="review-text3" class="form-label">ความคิดเห็น</label>
                                            <textarea id="review-text3" class="form-control" rows="4" placeholder="เขียนความคิดเห็นของคุณที่นี่..."></textarea>
                                        </div>
                                        <button type="submit" id="submit-btn3" class="btn btn-primary btn-disabled">ส่งรีวิว</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Card 3 -->
            
            <!-- Card 4 -->
            <div class="col-md-4">
                <div class="card party-card">
                    <img src="img-join-to-party/gettyimages-1183414292-1-_slide-30784f99ac10f059c242d37e91d05ead475854f4.jpg" class="card-img-top party-img" alt="Party Image">
                    <div class="card-body">
                        <h5 class="card-title">test</h5>
                        <p class="card-text">วันพุธ ที่ 31 ธันวาคม 2566</p>
                        <p class="countdown text-danger">เวลาคงเหลือ: ... วัน</p>
                        <p class="card-text">สถานที่: มหาวิทยาลัยขอนแก่น</p>
                        <p class="card-text">เวลา: 8:00 น.</p>
                        <div class="d-flex justify-content-between">
                            <i id="favorite-icon" class="favorite-icon bi bi-heart" style="font-size: 1.5rem; cursor: pointer;"></i>
                            <div class="d-flex">
                                <!-- review-btn ต้องเขียนเพิ่มตามจำนวน card -->
                                <button class="btn btn-secondary review-btn" id="review-btn-4">รีวิว</button>
                                <button class="btn btn-warning me-2">ข้อมูลเพิ่มเติม</button>
                                <button class="btn btn-success">เข้าร่วม</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal สำหรับการ์ด 4 -->
            <!-- ต้องกำหนด id, aria-labelledby จะได้เปิดหน้าต่างย่อยของแต่ละ card -->
            <div class="modal fade" id="reviewModal4" tabindex="-1" aria-labelledby="reviewModalLabel4" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <!-- ต้องกำหนด id -->
                            <h3 class="modal-title" id="reviewModalLabel4">รีวิวกิจกรรม</h3>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container mt-5">
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <img src="img-join-to-party/gettyimages-1183414292-1-_slide-30784f99ac10f059c242d37e91d05ead475854f4.jpg" class="img-fluid rounded" alt="Party Image">
                                    </div>
                                    <div class="col-md-6">
                                        <h2 class="mb-3">test</h2>
                                        <p class="text-muted">วันพุธ ที่ 31 ธันวาคม 2566</p>
                                        <div class="mb-3">
                                            <!-- ต้องกำหนด rating ของแต่ละ card -->
                                            <label for="rating4" class="form-label">คะแนน</label>
                                            <select id="rating4" class="form-select">
                                                <option value="" disabled selected>เลือกคะแนน</option>
                                                <option value="5">5 - ดีเยี่ยม</option>
                                                <option value="4">4 - ดี</option>
                                                <option value="3">3 - พอใช้</option>
                                                <option value="2">2 - ไม่ดี</option>
                                                <option value="1">1 - แย่</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="review-text3" class="form-label">ความคิดเห็น</label>
                                            <textarea id="review-text3" class="form-control" rows="4" placeholder="เขียนความคิดเห็นของคุณที่นี่..."></textarea>
                                        </div>
                                        <button type="submit" id="submit-btn3" class="btn btn-primary btn-disabled">ส่งรีวิว</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Card 4 -->
        </div>
    </div>
</div>

    <script>
        // ฟังก์ชันนับถอยหลังสำหรับแต่ละการ์ด
        function calculateDaysLeft(endDate) {
            const today = new Date();
            const end = new Date(endDate);
            const timeDifference = end - today;
            const daysLeft = Math.ceil(timeDifference / (1000 * 60 * 60 * 24));
    
            // ตรวจสอบว่ากิจกรรมสิ้นสุดแล้วหรือไม่
            if (daysLeft <= 0) {
                return "กิจกรรมสิ้นสุดแล้ว";
            }
    
            return `เวลาคงเหลือ: ${daysLeft} วัน`;
        }
    
        // วันที่สิ้นสุดของแต่ละปาร์ตี้ (อาจต้องแก้)
        const partyDates = [
            '2024-12-05', 
            '2024-12-05', 
            '2023-08-31', 
            '2023-12-31'
        ];
    
        // อัปเดตเวลาคงเหลือในแต่ละการ์ดและจัดการการแสดงปุ่มรีวิว
        document.querySelectorAll('.countdown').forEach((element, index) => {
            // คำนวณเวลาคงเหลือสำหรับแต่ละปาร์ตี้โดยใช้ฟังก์ชัน calculateDaysLeft
            const daysLeftText = calculateDaysLeft(partyDates[index]);
            element.textContent = daysLeftText;
    
            // ตรวจสอบว่ากิจกรรมสิ้นสุดแล้วหรือไม่
            const eventPassed = daysLeftText.includes('กิจกรรมสิ้นสุดแล้ว');
            // เลือกปุ่มรีวิวตามลำดับการ์ด (ใช้ id ที่กำหนดตาม index)
            const reviewButton = document.getElementById(`review-btn-${index + 1}`);
            // เลือกปุ่ม "ข้อมูลเพิ่มเติม" และ "เข้าร่วมแล้ว" ของแต่ละการ์ด
            const moreInfoButton = element.closest('.card-body').querySelector('.btn-warning');
            const joinButton = element.closest('.card-body').querySelector('.btn-success');
    
            if (eventPassed) {
                // แสดงปุ่มรีวิวเมื่อกิจกรรมสิ้นสุดแล้ว
                reviewButton.style.display = 'inline-block';
                // ซ่อนปุ่ม "ข้อมูลเพิ่มเติม" และ "เข้าร่วมแล้ว"
                moreInfoButton.style.display = 'none';
                joinButton.style.display = 'none';
            } else {
                // ซ่อนปุ่มรีวิวหากกิจกรรมยังไม่สิ้นสุด
                reviewButton.style.display = 'none';
            }
        });
    
        // การกด favorite icon สำหรับการ์ด
        document.querySelectorAll('.favorite-icon').forEach(icon => {
            icon.addEventListener('click', function() {
                this.classList.toggle("bi-heart");
                this.classList.toggle("bi-heart-fill");
                this.classList.toggle("text-danger");
            });
        });
    
        // เพิ่ม event listener ให้กับปุ่มที่มี class 'btn-success' ทุกปุ่ม (ปุ่ม "เข้าร่วม")
        // ใช้ querySelectorAll เพื่อเลือกทุกปุ่มที่มี class 'btn-success'
        document.querySelectorAll('.btn-success').forEach((button, index) => {
            // เพิ่ม event listener ให้กับแต่ละปุ่ม เมื่อผู้ใช้คลิกปุ่ม
            button.addEventListener('click', function() {
                // เมื่อกดปุ่ม จะเปลี่ยนข้อความปุ่มเป็น "เข้าร่วมแล้ว"
                button.textContent = 'เข้าร่วมแล้ว';
                button.classList.remove('btn-success');
                button.classList.add('btn-secondary');
    
                // ปิดการใช้งานปุ่มหลังจากกด
                button.disabled = true;
            });
        });

    </script>

<script>
    // เมื่อเอกสารโหลดเสร็จสมบูรณ์ (DOMContentLoaded) ฟังก์ชันนี้จะทำงาน
    document.addEventListener('DOMContentLoaded', function() {
    // เลือกทุกปุ่มที่มีคลาส 'review-btn' และเก็บไว้ในตัวแปร reviewButtons
    const reviewButtons = document.querySelectorAll('.review-btn');
    // ใช้ forEach เพื่อวนลูปผ่านปุ่มรีวิวแต่ละปุ่ม
    reviewButtons.forEach((button, index) => {
        // เพิ่ม event listener ให้กับแต่ละปุ่ม เมื่อผู้ใช้คลิกปุ่มนี้
        button.addEventListener('click', function() {
            // ค้นหา Modal ที่ตรงกับ index ของการ์ด
            // โดยใช้ id ของ modal ที่ถูกสร้างตาม index เช่น 'reviewModal1', 'reviewModal2'
            const reviewModal = new bootstrap.Modal(document.getElementById(`reviewModal${index + 1}`));
            // แสดง modal ที่ตรงกับปุ่มรีวิวที่ถูกคลิก
            reviewModal.show();
        });
    });
});
</script>

<script>
    // เพิ่ม event listener ให้กับ dropdown หรือ select ที่มี id 'rating'
    // เมื่อผู้ใช้เลือกคะแนน (มีการเปลี่ยนแปลงค่าใน dropdown) ฟังก์ชันนี้จะถูกเรียกใช้
    document.getElementById('rating').addEventListener('change', function() {
        // ค้นหาปุ่ม submit ที่มี id 'submit-btn'
        const submitButton = document.getElementById('submit-btn');
        // ตรวจสอบว่าผู้ใช้ได้เลือกคะแนนใน dropdown หรือไม่
        // ถ้ามีการเลือกค่า (this.value ไม่ว่างเปล่า)
        if (this.value) {
            // ลบคลาส 'btn-disabled' ออกจากปุ่มเพื่อให้สามารถคลิกได้
            submitButton.classList.remove('btn-disabled');
            // ปรับสถานะปุ่มเป็นสามารถใช้งานได้ (disabled = false)
            submitButton.disabled = false;
        } else {
            // ถ้าผู้ใช้ยังไม่ได้เลือกค่าใน dropdown
            // เพิ่มคลาส 'btn-disabled' เพื่อแสดงว่าปุ่มไม่สามารถกดได้
            submitButton.classList.add('btn-disabled');
            // ปรับสถานะปุ่มให้เป็นไม่สามารถใช้งานได้ (disabled = true)
            submitButton.disabled = true;
        }
    });

    // ตั้งค่าเริ่มต้นของปุ่ม submit ให้อยู่ในสถานะที่ไม่สามารถคลิกได้ (disabled = true)
    document.getElementById('submit-btn').disabled = true;
</script>

</body>
</html>