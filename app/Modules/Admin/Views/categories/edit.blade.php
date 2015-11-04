@extends('Admin::layout')
@section('content') 
<div class="onecolumn">
    <div class="header">
        <span style="float:left; width:85%;">Sửa danh mục truyện</span>
        <span style="float:right; margin-right:15px;">
            <ul id="control" style="margin:0px; padding:0px; list-style:none;">
                <li><a href="" title="Back">Quay lại</a></li>
            </ul>
        </span>
    </div>
    <br class="clear"/>
    <div class="content" style="min-height:400px;">
        <div class="gt">
		    {!! Form::model($category, ['route' => ['admin.categories.update', $category->id], 'method' => 'put', 'files' => true]) !!}
		        @include('Admin::categories.form')
		    {!! Form::close() !!}
		</div>
    </div>
</div>
@endsection