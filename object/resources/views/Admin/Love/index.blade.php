@extends('Admin.base.parent')
@section('content')
	<div class="block-area" id="tableHover">
        <h3 class="block-title">商品收藏列表</h3>
        @if(session('msg'))
           <div class="alert alert-success alert-icon">
            {{ session('msg') }}
            <i class="icon"></i>
            </div>
        @endif
        @if(session('error'))
            <div class="alert alert-warning alert-icon">
            {{ session('error') }}
            <i class="icon"></i>
            </div>
        @endif
        <div class="table-responsive overflow">
            <form action='admin/love' method='post' name='myform'>
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
            </form>
            <!-- <form action='/admin/love' method='get'>
                <div class='medio-body'>
                    用户名：<input type='text' class='form-control input-sm m-b-10' name='username'>
                </div>
                <div>
                    商品名：<input type='text' class='form-control input-sm m-b-10' name='name'>
                </div>
                <input type='submit' class='btn' value='搜索'>
            </form> -->
            <table class="table table-bordered table-hover tile">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>用户名</th>
                        <th>商品名</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach($list as $v)
                    	<tr>
	                        <td>{{ $v->id }}</td>
	                        <td>{{ $v->username }}</td>
	                        <td>{{ $v->name }}</td>
	                        <td>
	                        	<a class="btn btn-sm btn-alt m-r-5" href='javascript:doDel({{ $v->id }})'>删除</a>
	                        </td>
	                    </tr>
                  @endforeach
                </tbody>
            </table>
            {{ $list->appends($where)->links() }}
        </div>
    </div>
    <script type="text/javascript">
        function doDel(id){
            if(confirm('确定删除吗？')){
                var form = document.myform;
                form.action = '/admin/love/'+id;
                form.submit();
            }
        }
    </script>
@endsection