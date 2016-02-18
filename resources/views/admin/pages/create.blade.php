@extends('app')
@include('UEditor::head');
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">新增 Page</div>

        <div class="panel-body">

          @if (count($errors) > 0)
            <div class="alert alert-danger">
              <strong>Whoops!</strong> There were some problems with your input.<br><br>
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

          <form action="{{ URL('admin/pages') }}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="text" name="title" class="form-control" required="required">
            <br>
            <!-- 加载编辑器的容器 -->
            <script id="container" name="body" type="text/plain">
                这里写你的初始化内容
            </script>
            <!-- 实例化编辑器 -->
            <script type="text/javascript">
                var ue = UE.getEditor('container');
                    ue.ready(function() {
                    ue.execCommand('serverparam', '_token', '{{ csrf_token() }}');//此处为支持laravel5 csrf ,根据实际情况修改,目的就是设置 _token 值.
                });
            </script>
            <button class="btn btn-lg btn-info">新增 Page</button>
          </form>

        </div>

      </div>
    </div>
  </div>
</div>
@endsection