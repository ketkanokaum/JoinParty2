<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>โปรไฟล์ของคุณ</title>
    <link rel="stylesheet" href="/profile.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>

    <input type="file" id="profilePicInput" style="display: none;">

</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary rounded" aria-label="Thirteenth navbar example">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample11" aria-controls="navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
  
          <div class="collapse navbar-collapse d-lg-flex" id="navbarsExample11">
            <a class="navbar-brand col-lg-1 me-0" href="#">
            <img src="/images/logo.png" alt="logo">
            </a>
            <ul class="navbar-nav col-lg-10 justify-content-lg-center">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href=home.html><b>หน้าแรก</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><b>ปาร์ตี้ของฉัน</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><b>รายการโปรด</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href=Profile.html><b>โปรไฟล์ของฉัน</b></a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
    
    <h3 class="bold" style="color: #595858;"><b>โปรไฟล์ของฉัน</b></h3>
        <div class="profile-card">
            <img src="{{$user->profile_photo_path ? asset('storage/' . $user->profile_photo_path) : asset('images/user-default.png')}}"  class="profile-image">
            <div class="profile-info">
                <h2>{{$user->username}}</h2>
                <p><b>{{ $user->fristname . ' ' . $user->lastname }}</b></p>
                <p><b>อีเมล : {{$user->email}} </b></p>
                <p><b>เพศ : {{$user->gender}}</b></p>
                <p><b>วันเกิด : {{$user->birthday}}</b></p>
            </div>
            <div class="profile-bio"><br><br>อธิบายเกี่ยวกับตัวเอง</div>
            <div class="bio-content">{{$user->Introduction}}</div>
        
            <!-- ปุ่มแก้ไขและออกจากระบบ -->
            <div class="buttons">
                <a href="/editProfile_user.blade.php"><button style="background-color: #ffd28c;"><b>แก้ไข</b></button></a>
                <button onclick="alert('ออกจากระบบ!')" style="background-color: #d9d9d9;"><b>ออกจากระบบ</b></button>
            </div>
        </div>

   <!-- หน้าจอป๊อปอัปสำหรับแก้ไขโปรไฟล์ -->
   <div class="overlay" id="editProfileOverlay">
                <div class="edit-profile-card">
                    <div class="profile-pic-wrapper">
                    <h3><b>แก้ไขโปรไฟล์<b></h3>
                    <img src="css/user.jpg" alt="โปรไฟล์">
            </div>

            <!-- ฟอร์มสำหรับเลือกไฟล์รูปภาพ -->
            <input type="file" id="imageInput" accept="image/*">
            <!-- แท็ก img สำหรับแสดงรูปภาพ -->
            <img id="displayImage" style="display:none; max-width: 300px; margin-top: 20px;"/>
            <div class="input-group">
                <label for="firstName">ชื่อ</label>
                <input type="text" id="firstName" value="ไก่ชน">
            </div>
            
            <div class="input-group">
                <label for="lastName">นามสกุล</label>
                <input type="text" id="lastName" value="เงินน้อยอยากรวย">
            </div>

            <div class="input-group">
                <label for="email">อีเมล</label>
                <input type="email" id="email" value="kainaja@kkumail.com">
                <div id="emailError" class="error-message"></div> <!-- ข้อความแจ้งเตือน -->
            </div>

            <div class="input-group">
                <label for="phone">เบอร์โทรศัพท์</label>
                <input type="text" id="phone" value="0953470633">
                <div id="phoneError" class="error-message"></div> <!-- ข้อความแจ้งเตือน -->
            </div>

            <div class="input-group">
                <label for="bio">อธิบายเกี่ยวกับตัวเอง</label>
                <textarea id="bio" rows="1">ชอบตกปลา!!</textarea>
            </div>
            
            <!-- ปุ่มยืนยันและยกเลิก -->
            <div class="buttons">
                <button class="confirm-btn" id="confirm-btn" style="background-color: #ffd28c; "><b>ยืนยัน</b></button>
                <button class="cancel-btn" id="cancel-btn" style="background-color: #d9d9d9;"><b>ยกเลิก</b></button>
                <button class="change-password-btn" id="change-password-btn" style="background-color: #454444; color: white; float: right; padding: 5px 10px; font-size: 14px;" onclick="window.location.href='new-page.html';">
                  <b>เปลี่ยนรหัสผ่าน</b>
              </button>
            </div>
        </div>
    </div>

    <script>
      // ฟังก์ชันยืนยันการแก้ไข
  function confirmEdit() {
      // ดึงค่าจากฟอร์มแก้ไข
      const firstName = document.getElementById("firstName").value;
      const lastName = document.getElementById("lastName").value;
      const email = document.getElementById("email").value;
      const phone = document.getElementById("phone").value;
      const bio = document.getElementById("bio").value;

    function validateForm() {
            // ลบข้อความแจ้งเตือนก่อน
            document.getElementById('emailError').textContent = '';
            document.getElementById('phoneError').textContent = '';

            const email = document.getElementById("email").value;
            const phone = document.getElementById("phone").value;
    }
      // ตรวจสอบอีเมลที่ถูกต้อง (ใช้ regex)
      const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
      if (!emailPattern.test(email)) {
        document.getElementById('emailError').textContent = "กรุณากรอกอีเมลให้ถูกต้อง";
        return;  // หยุดการทำงานถ้าอีเมลไม่ถูกต้อง
      }

      // ตรวจสอบเบอร์โทรศัพท์ที่ถูกต้อง (ใช้ตัวเลข 10 หลัก)
      const phonePattern = /^[0-9]{10}$/;
      if (!phonePattern.test(phone)) {
        document.getElementById('phoneError').textContent = "กรุณากรอกเบอร์โทรศัพท์ให้ถูกต้อง ต้องมี 10 หลัก";
        return;  // หยุดการทำงานถ้าเบอร์โทรไม่ถูกต้อง
      }
      
      // อัปเดตข้อมูลในหน้าโปรไฟล์
      document.querySelector(".profile-info h2").textContent = firstName + " " + lastName;
      document.querySelector(".profile-info p:nth-child(2)").textContent = "ชื่อ: " + firstName + " " + lastName;
      document.querySelector(".profile-info p:nth-child(3)").textContent = "อีเมล: " + email;
      document.querySelector(".profile-info p:nth-child(4)").textContent = "เบอร์: " + phone;
      document.querySelector(".bio-content").textContent = bio;

      // แสดงข้อความยืนยันและปิดหน้าต่างป๊อปอัป
      alert("ข้อมูลโปรไฟล์ถูกบันทึกเรียบร้อยแล้ว!");
      closeEdit();
  }
       
      // ฟังก์ชันเปิดหน้าต่างแก้ไขโปรไฟล์
        function openEdit() {
        document.getElementById("editProfileOverlay").style.display = "block";
        }

    // ฟังก์ชันปิดหน้าต่างแก้ไขโปรไฟล์
        function closeEdit() {
        document.getElementById("editProfileOverlay").style.display = "none";
        }   

    // ฟังก์ชันซ่อนหน้าต่างแก้ไขโปรไฟล์
    function hideEditProfile() {
    document.getElementById("editProfileOverlay").style.display = "none";
    }
// เพิ่ม event listener ให้กับปุ่มยืนยัน
document.getElementById("confirm-btn").addEventListener("click", function() {
      confirmEdit();
  });

    // เพิ่ม event listener ให้กับปุ่มยกเลิก
    document.getElementById("cancel-btn").addEventListener("click", hideEditProfile);
 

    // เมื่อคลิกที่ไอคอนกล้อง ให้เปิดหน้าต่างเลือกไฟล์
    document.querySelector(".camera-icon").addEventListener("click", function() {
    document.getElementById("profilePicInput").click();
});

    // เมื่อมีการเปลี่ยนแปลงไฟล์ที่เลือก (เช่น เมื่อผู้ใช้เลือกไฟล์รูปภาพใหม่) ให้ทำการอัพเดตภาพโปรไฟล์
    document.getElementById("profilePicInput").addEventListener("change", function(event) {
    // ดึงไฟล์ที่ถูกเลือกจาก input
    const file = event.target.files[0];
    // ตรวจสอบว่าไฟล์ที่เลือกไม่เป็นค่าว่าง
    if (file) {
        // สร้างอ็อบเจกต์ FileReader เพื่ออ่านไฟล์
        const reader = new FileReader();
        // เมื่ออ่านไฟล์เสร็จแล้ว (โหลดเสร็จ) ให้ทำการอัพเดตแหล่งที่มาของภาพโปรไฟล์
        reader.onload = function(e) {
            document.getElementById("profilePic").src = e.target.result;}
        // อ่านไฟล์เป็น Data URL (ซึ่งสามารถใช้เป็นแหล่งที่มาของรูปภาพ)
        reader.readAsDataURL(file);
    }
});
 // ฟังก์ชันแสดงรูปภาพหลังจากอัปโหลด
 document.getElementById('imageInput').addEventListener('change', function(event) {
      const file = event.target.files[0];

      if (file) {
          const reader = new FileReader();

          // เมื่อไฟล์โหลดเสร็จสิ้น
          reader.onload = function(e) {
              // ดึงรูปภาพจากไฟล์ที่เลือก
              const imgElement = document.getElementById('displayImage');
              imgElement.src = e.target.result;
              imgElement.style.display = 'block';  // แสดงรูปภาพ
          };

          // อ่านข้อมูลไฟล์เป็น URL
          reader.readAsDataURL(file);
      }
  });
    </script>

</body>
</html>