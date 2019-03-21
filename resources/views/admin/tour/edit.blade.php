@extends('templates.admin.master')
@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{route('admin.index.index')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Trang chủ</a> <a href="{{route('admin.tour.index')}}">Quản lý tour</a> <a href="" class="current">Sửa tour</a> </div>
    <h1>Quản lý tour</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span18">
      	@if ($errors->any())
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Sửa dịch vụ</h5>
          </div>
	          <div class="widget-content nopadding">
	            <form class="form-horizontal" method="post" action="{{route('admin.tour.edit', $tour->id)}}" name="number_validate" id="number_validate" novalidate="novalidate" enctype="multipart/form-data">
	            	{{csrf_field()}}
	              <div class="control-group">
	                <label class="control-label">Tên hiển thị:</label>
	                <div class="controls">
	                  <input type="text" name="title" id="required" value="{{ $tour->title }}" style="width: 70%" />
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label">Hình ảnh(1200px:700px):</label>
	                <div class="controls">
	                  <input type="file" name="picture" id="required" />
	                </div>
	              </div>
	              <div class="control-group">
	              	<img src="/upload/{{ $tour->picture }}" />
	              </div>
	              <div class="control-group">
	                <label class="control-label">Chỗ ngồi:</label>
	                <div class="controls">
	                  <input type="text" name="seat" id="required" value="{{ $tour->seat }}" style="width: 70%" />
	                </div>
	              </div>
		          <div class="control-group">
		            <label class="control-label">Vé tàu</label>
		              <div class="controls">
		                @if($tour->ticket == 1)
		                <label>
		                  <input type="radio" value="1" name="ticket" checked />
		                  Có</label>
		                <label>
		                  <input type="radio" value="0" name="ticket" />
		                  Không</label>
		                <label>
		                @else
		                <label>
		                  <input type="radio" value="1" name="ticket" />
		                  Có</label>
		                <label>
		                  <input type="radio" value="0" name="ticket" checked />
		                  Không</label>
		                <label>
		                @endif
		              </div>
		          </div>
		          <div class="control-group">
		            <label class="control-label">Vé máy bay:</label>
		              <div class="controls">
		              	@if($tour->plane == 1)
		                <label>
		                  <input type="radio" value="1" name="plane" checked />
		                  Có</label>
		                <label>
		                  <input type="radio" value="0" name="plane" />
		                  Không</label>
		                <label>
		                @else
		                <label>
		                  <input type="radio" value="1" name="plane" />
		                  Có</label>
		                <label>
		                  <input type="radio" value="0" name="plane" checked />
		                  Không</label>
		                <label>
		                	@endif
		              </div>
		          </div>
	              <div class="control-group">
	                <label class="control-label">Khách sạn:</label>
	                <div class="controls">
	                  <input type="text" name="hotel" id="required" value="{{ $tour->hotel }}" style="width: 70%" />
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label">Thời gian(x ngày y đêm):</label>
	                <div class="controls">
	                  <input type="text" name="time" id="required" value="{{ $tour->time }}" style="width: 70%" />
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label">Số người:</label>
	                <div class="controls">
	                  <input type="text" name="people" id="required" value="{{ $tour->people }}" style="width: 70%" />
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label">Giá:</label>
	                <div class="controls">
	                  <input type="text" name="cost" id="required" value="{{ $tour->cost }}" style="width: 70%" />
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label">Giá khuyến mãi:</label>
	                <div class="controls">
	                  <input type="text" name="recost" id="required" value="{{ $tour->recost }}" style="width: 70%" />
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label">Keywords:</label>
	                <div class="controls">
	                  <input type="text" name="keywords" id="required" value="{{ $tour->keywords }}" style="width: 70%" />
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label">Mô tả:</label>
	                <div class="controls">
	                  <textarea name="description" rows="5" style="width: 70%" >{{ $tour->description }} </textarea>
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label">Nội dung:</label>
	                <div class="controls">
	                  <textarea name="detail" id="editor1" rows="5">{{ $tour->detail }}</textarea>
	                </div>
	              </div>
	              <div class="form-actions">
	                <input type="submit" value="Sửa" class="btn btn-success">
	              </div>
	            </form>
	          </div>
	        </div>
	      </div>
        </div>
      </div>
    </div>
</div>
</div>
@stop