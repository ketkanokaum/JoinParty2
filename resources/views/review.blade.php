<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รีวิวกิจกรรม</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="review-party.css"> <!-- ลิงค์ไปยัง CSS ของคุณเอง -->
</head>
    <style>
        @font-face {
    font-family: fontwin;
    src: url(font/Mitr/Mitr-Light.ttf);
}

* {
    padding: 0;
    margin: 0;
    font-family: fontwin, sans-serif;
}

body {
    background-image: linear-gradient(to bottom, rgba(243, 218, 195, 0.637) 4%,rgba(98, 64, 190, 0.24) 90%);
    background-repeat: no-repeat;
    background-attachment: fixed;  
    background-size: cover;
    align-items: center;
}

.party-card {
    border-radius: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
}

.review-btn {
    display: none;
}

.logo {
    width: 10%;
}

header {
    margin-bottom: 100px;
}

nav a {
    text-decoration: none;
    color: #333;
    font-size: 1.1rem;
}

nav a:hover {
    color: #e67e22;
}

.card {
    background: #fff;
    border-radius: 20px;
}

h2,h1 {
    font-size: 1.8rem;
    font-weight: bold;
}

ul {
    margin-top: 30px;
}

ul li {
    margin-bottom: 25px;
    font-size: 1.1rem;
}

.btn-disabled, #submit-btn {
    background-color: #ffd28c;
    border: none;
    padding: 10px 20px;
    border-radius: 20px;
    color: #000000;
    font-size: 1rem;
}

.btn-outline-secondary {
    background-color: #ffffff;
    border: 1px solid #dfdfdf;
    padding: 10px 20px;
    border-radius: 20px;
    color: #000000;
    font-size: 1rem;
}

.card {
    border-radius: 100px;
}


    </style>
<body>
    <div class="container mt-5">
        <h1>รีวิวกิจกรรม</h1>

        <!-- Review Section -->
        <div class="card p-4 shadow-sm border-0 rounded">
            <div class="row g-4">
                <!-- Image Section -->
                <div class="col-md-6">
                    <img src="img-join-to-party/iq451e01af0c5fcbf2e4457c9a8166179e.jpg" class="img-fluid rounded" alt="Party Image">
                </div>

                <!-- Review Form -->
                <div class="col-md-6">
                    <h2 class="mb-3">จิตอาสาเก็บขยะหาดดงตาล</h2>
                    <p class="text-muted">วันที่: วันพุธ ที่ 31 สิงหาคม 2567</p>

                    <!-- Review Rating -->
                    <div class="mb-3">
                        <label for="rating" class="form-label">คะแนน</label>
                        <select id="rating" class="form-select">
                            <option value="" disabled selected>เลือกคะแนน</option>
                            <option value="5">5 - ดีเยี่ยม</option>
                            <option value="4">4 - ดี</option>
                            <option value="3">3 - พอใช้</option>
                            <option value="2">2 - ไม่ดี</option>
                            <option value="1">1 - แย่</option>
                        </select>
                    </div>

                    <!-- Review Text -->
                    <div class="mb-3">
                        <label for="review-text" class="form-label">ความคิดเห็น</label>
                        <textarea id="review-text" class="form-control" rows="4" placeholder="เขียนความคิดเห็นของคุณที่นี่..."></textarea>
                    </div>

                    <!-- Button -->
                    <a href="index.html" class="btn btn-outline-secondary"><i class="bi bi-arrow-left"></i>ย้อนกลับ</a>
                    <button type="submit" id="submit-btn" class="btn btn-primary btn-disabled">ส่งรีวิว</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-3AfOImrQzH2O9kP9DzYUyEB6ipL9i7sTpj9i4bB9W4ONnEbiBAS9+UGPZzAB8Sm8"
        crossorigin="anonymous"></script>

    <!-- JavaScript for Button Activation -->
    <script>
        document.getElementById('rating').addEventListener('change', function() {
            const submitButton = document.getElementById('submit-btn');
            if (this.value) {
                submitButton.classList.remove('btn-disabled');
                submitButton.disabled = false;
            } else {
                submitButton.classList.add('btn-disabled');
                submitButton.disabled = true;
            }
        });

        // Initialize the button state
        document.getElementById('submit-btn').disabled = true;
    </script>
</body>
</html>