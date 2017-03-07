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
            <input type='text' class="form-control" />
            <span class="input-group-addon">
                 <span class="glyphicon glyphicon-calendar"></span>
            </span>
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
            });
        </script>
</form>