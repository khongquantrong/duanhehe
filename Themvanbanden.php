
<div class="containerss">
<link rel="stylesheet" href="./css/Themvanbanden.css">
<br>
        <h2>Thêm mới văn bản đến</h2>
        <form action="#">
         <div class="form-group">
                <label for="sender">Số văn bản:</label>
                <input type="text" id="numberdoc" name="numberdoc" required>
            </div>
             <!-- <div class="form-group">
                <label>Loại văn bản:</label>
                <input type="radio" id="incoming" name="docType" value="incoming" required>
                <label for="incoming">Văn bản đến</label>
                <input type="radio" id="outgoing" name="docType" value="outgoing" required>
                <label for="outgoing">Văn bản đi</label>
            </div>  -->
            <div class="form-group">
                <label for="title">Tiêu đề:</label>
                <input type="text" id="title" name="title" required>
            </div>
            <!-- <div class="datetime-picker">
            <div class="form-group">
                <label>Ngày ban hành:</label>
                <input type="date" id="dateInput">
                <input type="time" id="timeInput">
            </div>
            </div>  -->
               <!-- <div class="datetime-picker">
            <div class="form-group">
                <label>Ngày lập văn bản:</label>
                <input type="date" id="dateInput">
                <input type="time" id="timeInput">
            </div>
            </div> -->
            <div class="form-group">
                <label for="sender">Đơn vị ban hành:</label>
                <input type="text" id="unit" name="unit" required>
            </div>
            <div class="form-group">
                <label for="unit">Người gửi:</label>
                <input type="text" id="sender" name="sender" required>
            </div>
             <div class="form-group">
                <label for="unit">Người ký:</label>
                <input type="text" id="Signer" name="Signer" required>
            </div>
            <div class="form-group">
                <label for="recipient">Người nhận:</label>
                <input type="text" id="recipient" name="recipient" required>
            </div>
            <div class="datetime-picker">
            <div class="form-group">
             <label>Ngày nhận:</label>
                <input type="date" id="dateInput">
                <input type="time" id="timeInput">
            </div>
            </div>
            <div class="form-group">
                <label>Độ khẩn:</label>
                <input type="radio" id="Urgent" name="docType" value="Urgent" required>
                <label for="incoming">Khẩn cấp</label>
                <input type="radio" id="NotUrgent" name="docType" value="NotUrgent" required>
                <label for="outgoing">Không khẩn cấp</label>
            </div>
            <!-- <div class="form-group">
                <label for="content">Nội dung:</label>
                <textarea id="content" name="content" rows="4" required></textarea>
            </div>  -->
            <div class="drop-container">
                <div class="drop-message" id="dropMessage">Kéo và thả file vào đây hoặc click để chọn file</div><br>
                <input type="file" id="fileInput" class="file-input" /><br>
            </div>
            <br>
            <div class="form-group">
                <input type="submit" value="Thêm mới">
            </div>
        </form>
    </div>

