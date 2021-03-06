@extends('Admin.base.parent')
@section('content')
	<!-- Text Input -->
    <div class="block-area" id="text-input">
        <h3 class="block-title">添加子类别</h3>
        <div class="row">
            <form action="{{ url('admin/storeSon') }}" method='post'>
                {{ csrf_field() }}
                <div class="col-lg-4">
                    <input type="text" class="form-control m-b-10" disabled="" value="{{ $list->name }}">
                </div>
                <div class="col-lg-4">
                    <input type="text" class="form-control m-b-10" placeholder="请输入子类别名" name='name'>
                </div>
                <div class="col-lg-4">
                    <input type="hidden" class="form-control m-b-10" name='upid' value="{{ $list->id }}">
                </div>
                <div class="col-lg-12">
                    <input type='submit' class="btn btn-block btn-alt" value='提交'>
                </div>
            </form>
        </div>
        <p></p>
        
    </div>
@endsection