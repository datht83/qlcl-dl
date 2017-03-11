<h3>Tự Nguyện</h3>
<form class="form-horizontal">
    <div class="form-group">
        <label class="control-label col-sm-2" for="email">Email:</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="email" placeholder="Enter email">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">Người báo cáo:</label>
        <div class="col-sm-3">
            <select class="form-control">
                <option>--- Vui lòng chọn ---</option>
                <option>Khoa phòng</option>
                <option>Cá nhân</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">Thời gian báo cáo:</label>
        <div class="col-sm-3">
            <div class='input-group date' id='datetimepicker1'>
                <input type='text' class="form-control"/>
                <span class="input-group-addon">
                 <span class="glyphicon glyphicon-calendar"></span>
            </span>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">Thời điểm xảy ra:</label>
        <div class="col-sm-3">
            <div class='input-group date' id='datetimepicker2'>
                <input type='text' class="form-control"/>
                <span class="input-group-addon">
                 <span class="glyphicon glyphicon-calendar"></span>
            </span>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="email">Địa điểm xảy ra:</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="" placeholder="Nhập địa điểm">
        </div>
    </div>
    <hr>
    <div class="form-group">
        <label class="control-label col-sm-4" for="pwd" style="font-weight: bold;font-size: 18px;text-align: left;">Mức
            độ nghiêm trọng của sự cố:</label>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">Nghiêm trọng:</label>
        <div class="col-sm-3">
            <select class="form-control">
                <option>--- Vui lòng chọn ---</option>
                <option>Tử vong</option>
                <option>Đe dọa tính mạng</option>
                <option>Nhập viện</option>
                <option>Tàn tật vĩnh viễn</option>
                <option>Khác.(Vui lòng ghi bên dưới)</option>
            </select>
        </div>
    </div>
    <div class="form-group" style="display: none">
        <label class="control-label col-sm-2" for="pwd"></label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="" placeholder="Nhập Mức độ nghiêm trọng khác">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">Suýt Xảy ra:</label>
        <div class="col-sm-3">
            <select class="form-control">
                <option>--- Vui lòng chọn ---</option>
                <option>Chưa ảnh hưởng nặng đến bệnh nhân, người nhà bệnh nhân và nhân viên y tế</option>
                <option>Khác.(Vui lòng ghi bên dưới)</option>
            </select>
        </div>
    </div>
    <div class="form-group" style="display: none">
        <label class="control-label col-sm-2" for="pwd"></label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="" placeholder="Nhập Mức độ suýt xảy ra khác">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">Sự cố sai biệt:</label>
        <div class="col-sm-3">
            <select class="form-control">
                <option>--- Vui lòng chọn ---</option>
            </select>
        </div>
    </div>
    <div class="form-group" style="display: none">
        <label class="control-label col-sm-2" for="pwd"></label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="" placeholder="Nhập Mức độ sự cố sai biệt">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-4" for="pwd" style="font-weight: bold;font-size: 18px;text-align: left;">Mô
            tả chi tiết sai sót sự cố:</label>
    </div>
    <p class="col-sm-12" for="pwd" style="font-weight: bold;font-size: 16px;text-align: left">I) Danh mục sự cố:</p>
    <div class="form-group">
        <label class="control-label col-sm-1"></label>
        <p class="col-sm-11" for="pwd" style="font-weight: bold;font-size: 16px;text-align: left">1) Quy trình thủ tục
            khám chữa bệnh :</p>
        <div class="form-group">
            <label class="control-label col-sm-2"></label>
            <div class="col-sm-10">
                <p><input type="checkbox">Nhập sai thông tin cá nhân</p>
                <p><input type="checkbox">Toa thuốc không đúng với tên bệnh nhân</p>
                <p><input type="checkbox">Kê toa không đúng quy chế (nội ngoại trú)</p>
                <p><input type="checkbox">Khác...(bắt buộc ghi)</p>
                <input style="display: none" type="email" class="form-control" id="" placeholder="Nhập thông tin khác">
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-1"></label>
        <p class="col-sm-11" for="pwd" style="font-weight: bold;font-size: 16px;text-align: left">2) Sai sót chuyên môn :</p>
        <label class="control-label col-sm-2"></label>
        <p class="col-sm-10" for="pwd" style="font-weight: bold;font-size: 16px;text-align: left">a) Lỗi về thuốc và thiết bị :</p>
        <div class="form-group">
            <label class="control-label col-sm-3"></label>
            <div class="col-sm-9">
                <p><input type="checkbox">Thuốc không có sẵn</p>
                <p><input type="checkbox">Chất lượng thuốc không đảm bảo</p>
                <p><input type="checkbox">Phản ứng bất lợi nghiêm trọng của thuốc</p>
                <p><input type="checkbox">Sử dụng các thiết bị hỏng / quá hạn / thiếu chính xác trong điều trị và chăm sóc</p>
                <p><input type="checkbox">Khác... (bắt buộc nhập)</p>
                <input style="display: none" type="email" class="form-control" id="" placeholder="Nhập thông tin khác">
            </div>
        </div>
        <label class="control-label col-sm-2"></label>
        <p class="col-sm-10" for="pwd" style="font-weight: bold;font-size: 16px;text-align: left">b) Lỗi về chuyên môn :</p>
        <div class="form-group">
            <label class="control-label col-sm-3"></label>
            <div class="col-sm-9">
                <p><input type="checkbox">Bỏ sót thuốc</p>
                <p><input type="checkbox">Nhầm lẩn thuốc</p>
                <p><input type="checkbox">Không hướng dẩn sử dụng cách dùng thuốc</p>
                <p><input type="checkbox">Thuốc sử dụng không có trong danh mục thuốc</p>
                <p><input type="checkbox">Khác... (bắt buộc nhập)</p>
                <input style="display: none" type="email" class="form-control" id="" placeholder="Nhập thông tin khác">
            </div>
        </div>

        <label class="control-label col-sm-2"></label>
        <p class="col-sm-10" for="pwd" style="font-weight: bold;font-size: 16px;text-align: left">c) Lỗi về tai nạn :</p>
        <div class="form-group">
            <label class="control-label col-sm-3"></label>
            <div class="col-sm-9">
                <p><input type="checkbox">Phỏng do sưởi đèn, chườm nóng</p>
                <p><input type="checkbox">Phỏng do chườm lạnh</p>
                <p><input type="checkbox">Gãy kim khi tiêm</p>
                <p><input type="checkbox">Nhiễm trùng vết mổ</p>
                <p><input type="checkbox">Té ngã</p>
                <p><input type="checkbox">Té từ giường xuống đất</p>
                <p><input type="checkbox">Bệnh nhân tự tử hay có ý định tự tử</p>
                <p><input type="checkbox">Bị bệnh nhân khác gây thương tích</p>
                <p><input type="checkbox">Khác... (bắt buộc nhập)</p>
                <input style="display: none" type="email" class="form-control" id="" placeholder="Nhập thông tin khác">
            </div>
        </div>

        <label class="control-label col-sm-2"></label>
        <p class="col-sm-10" for="pwd" style="font-weight: bold;font-size: 16px;text-align: left">d) Lỗi về dị ứng :</p>
        <div class="form-group">
            <label class="control-label col-sm-3"></label>
            <div class="col-sm-9">
                <p><input type="checkbox">Không hỏi bệnh nhân tiền căn dự ứng</p>
                <p><input type="checkbox">Không thử test</p>
                <p><input type="checkbox">Truyền máu quá nhanh</p>
                <p><input type="checkbox">Khác... (bắt buộc nhập)</p>
                <input style="display: none" type="email" class="form-control" id="" placeholder="Nhập thông tin khác">
            </div>
        </div>

        <label class="control-label col-sm-2"></label>
        <p class="col-sm-10" for="pwd" style="font-weight: bold;font-size: 16px;text-align: left">e) Lỗi về chăm sóc điều dưỡng :</p>
        <div class="form-group">
            <label class="control-label col-sm-3"></label>
            <div class="col-sm-9">
                <p><input type="checkbox">Nhiểm trùng vết mổ</p>
                <p><input type="checkbox">Loét do nằm lâu</p>
                <p><input type="checkbox">Khác... (bắt buộc nhập)</p>
                <input style="display: none" type="email" class="form-control" id="" placeholder="Nhập thông tin khác">
            </div>
        </div>

        <label class="control-label col-sm-2"></label>
        <p class="col-sm-10" for="pwd" style="font-weight: bold;font-size: 16px;text-align: left">f) Tổn thương do kim đâm // phơi nhiểm dịch cơ thể  <input type="checkbox"></p>
        <label class="control-label col-sm-2"></label>
        <p class="col-sm-10" for="pwd" style="font-weight: bold;font-size: 16px;text-align: left">g) Truyền nhầm nhóm máu <input type="checkbox"></p>
        <label class="control-label col-sm-2"></label>
        <p class="col-sm-10" for="pwd" style="font-weight: bold;font-size: 16px;text-align: left">h) Phòng mổ :</p>
        <div class="form-group">
            <label class="control-label col-sm-3"></label>
            <div class="col-sm-9">
                <p><input type="checkbox">Phẩu thuật sai người bệnh</p>
                <p><input type="checkbox">Phẩu thuật sai vị trí</p>
                <p><input type="checkbox">Bỏ quên / sót gạc, dụng cụ</p>
                <p><input type="checkbox">Không tuân thủ quy chế hội chẩn thăm khám người bệnh trước phẩu thuật</p>
                <p><input type="checkbox">Không thực hiện bản kiểm an toàn người bệnh trong phẩu thuật</p>
                <p><input type="checkbox">Không khám tiền mê cho người bệnh trước phẩu thuật</p>
                <p><input type="checkbox">Không tuân thủ các kỷ thuật vô trùng</p>
                <p><input type="checkbox">Không đưa bệnh nhân ký giấy cam đoan phẩu thuật</p>
                <p><input type="checkbox">Không đưa bệnh nhân ký giấy đồng thuận thay đổi phương thức điều trị (nếu có)</p>
                <p><input type="checkbox">Khác... (bắt buộc nhập)</p>
                <input style="display: none" type="email" class="form-control" id="" placeholder="Nhập thông tin khác">
            </div>
        </div>

        <label class="control-label col-sm-2"></label>
        <p class="col-sm-10" for="pwd" style="font-weight: bold;font-size: 16px;text-align: left">i) Nhận dạng người bệnh :</p>
        <div class="form-group">
            <label class="control-label col-sm-3"></label>
            <div class="col-sm-9">
                <p><input type="checkbox">Không nhận dạng người bệnh</p>
                <p><input type="checkbox">Nhận dạng sai người bệnh</p>
                <p><input type="checkbox">Khác... (bắt buộc nhập)</p>
                <input style="display: none" type="email" class="form-control" id="" placeholder="Nhập thông tin khác">
            </div>
        </div>

        <label class="control-label col-sm-2"></label>
        <p class="col-sm-10" for="pwd" style="font-weight: bold;font-size: 16px;text-align: left">j) Về hồ sơ bện án :</p>
        <div class="form-group">
            <label class="control-label col-sm-3"></label>
            <div class="col-sm-9">
                <p><input type="checkbox">Thiếu thông tin hành chính của bệnh nhân</p>
                <p><input type="checkbox">Bác sỉ ghi y lệnh không rỏ ràng</p>
                <p><input type="checkbox">Không tuân thủ quy chế kê toa</p>
                <p><input type="checkbox">Không tuân thủ quy chế hồ sơ bệnh án</p>
                <p><input type="checkbox">Không tuân thủ quy chế hội chẩn</p>
                <p><input type="checkbox">Không tuân thủ quy chế cấp cứu</p>
                <p><input type="checkbox">Khác... (bắt buộc nhập)</p>
                <input style="display: none" type="email" class="form-control" id="" placeholder="Nhập thông tin khác">
            </div>
        </div>

    </div>

    <div class="form-group">
        <label class="control-label col-sm-1"></label>
        <p class="col-sm-11" for="pwd" style="font-weight: bold;font-size: 16px;text-align: left">3) Giao tiếp:</p>
        <div class="form-group">
            <label class="control-label col-sm-2"></label>
            <div class="col-sm-10">
                <p><input type="checkbox">Ra chỉ định không hoàn chỉnh gây tác dụng bất lợi cho bệnh nhân</p>
                <p><input type="checkbox">Lổi trong giao tiếp làm xảy ra sự cố </p>
                <p><input type="checkbox">Khác...(bắt buộc ghi)</p>
                <input style="display: none" type="email" class="form-control" id="" placeholder="Nhập thông tin khác">
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-1"></label>
        <p class="col-sm-11" for="pwd" style="font-weight: bold;font-size: 16px;text-align: left">4) Môi trường:</p>
        <div class="form-group">
            <label class="control-label col-sm-2"></label>
            <div class="col-sm-10">
                <p><input type="checkbox">Bị shock do điện giật</p>
                <p><input type="checkbox">Bị bỏng trong khi điều trị tại bệnh viện </p>
                <p><input type="checkbox">Cháy nổ oxy, bình ga, hóa chất độc hại </p>
                <p><input type="checkbox">Cơ sở hạ tầng xuống cấp </p>
                <p><input type="checkbox">Cơ sở hạ tầng hư hỏng </p>
                <p><input type="checkbox">Khác...(bắt buộc ghi)</p>
                <input style="display: none" type="email" class="form-control" id="" placeholder="Nhập thông tin khác">
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-1"></label>
        <p class="col-sm-11" for="pwd" style="font-weight: bold;font-size: 16px;text-align: left">5) Xét nghiệm chẩn đoán hình ảnh:</p>
        <div class="form-group">
            <label class="control-label col-sm-2"></label>
            <div class="col-sm-10">
                <p><input type="checkbox">Dán sai nhãn mẫu xét nghiệm</p>
                <p><input type="checkbox">Nhầm kết quả giữa các bệnh nhân</p>
                <p><input type="checkbox">Các kết quả xét nghiệm của cùng 1 bệnh nhân không hợp lý</p>
                <p><input type="checkbox">Khác...(bắt buộc ghi)</p>
                <input style="display: none" type="email" class="form-control" id="" placeholder="Nhập thông tin khác">
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-1"></label>
        <p class="col-sm-11" for="pwd" style="font-weight: bold;font-size: 16px;text-align: left">6) Nhiễm khuẩn bệnh viện:</p>
        <div class="form-group">
            <label class="control-label col-sm-2"></label>
            <div class="col-sm-10">
                <p><input type="checkbox">Không thực hành kiểm soát nhiễm khuẩn tại bệnh viện</p>
                <p><input type="checkbox">Không xử lý tốt các chất thải tại bệnh viện</p>
                <p><input type="checkbox">Không tuân thủ các nguyên tắc vô trùng khi thưc hiện phẩu thuật thủ thuật</p>
                <p><input type="checkbox">Phòng bệnh không đạt tiêu chuẩn vệ sinh</p>
                <p><input type="checkbox">Khác...(bắt buộc ghi)</p>
                <input style="display: none" type="email" class="form-control" id="" placeholder="Nhập thông tin khác">
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-1"></label>
        <p class="col-sm-11" for="pwd" style="font-weight: bold;font-size: 16px;text-align: left">7) Các quy chế chuyên môn:</p>
        <div class="form-group">
            <label class="control-label col-sm-2"></label>
            <div class="col-sm-10">
                <p><input type="checkbox">Không tuân thủ quy chế kê toa</p>
                <p><input type="checkbox">Không tuân thủ quy chế hội chẩn</p>
                <p><input type="checkbox">Không tuân thủ quy chế cấp cứu</p>
                <p><input type="checkbox">Không tuân thủ quy chế trực</p>
                <p><input type="checkbox">Khác...(bắt buộc ghi)</p>
                <input style="display: none" type="email" class="form-control" id="" placeholder="Nhập thông tin khác">
            </div>
        </div>
    </div>




    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <div class="checkbox">
                <label><input type="checkbox"> Remember me</label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Submit</button>
        </div>
    </div>
    <script type="text/javascript">
        $(function () {
            $('#datetimepicker1').datetimepicker();
            $('#datetimepicker2').datetimepicker();
        });
    </script>
</form>