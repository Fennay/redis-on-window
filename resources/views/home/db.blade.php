@extends('home.layout._layout')

@section('page_css')



	<link href="/resources/assets/global/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css" rel="stylesheet"
		  type="text/css"/>
	<link href="/resources/assets/global/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet"
		  type="text/css"/>
@endsection

@section('main')
	<div class="page-content">
		<div class="page-head">
			<div class="page-title">
				<h1>Redis On Window
					<small>简单, 直观, 便利</small>
				</h1>
			</div>
		</div>
		<ul class="page-breadcrumb breadcrumb"></ul>
		<div class="row">
			<div class="col-md-12">
				<div class="portlet box green">
					<div class="portlet-title">
						<div class="caption">
							<i class="fa fa-cogs"></i>数据库信息
						</div>
						<div class="tools">
							<a href="javascript:;" class="collapse"> </a>
							<a href="javascript:;" class="reload"> </a>
							<a href="javascript:;" class="remove"> </a>
						</div>
					</div>
					<div class="portlet-body flip-scroll">
						<table class="table table-bordered table-striped table-condensed flip-content">

							<thead class="flip-content">
							<tr>
								<th>类型</th>
								<th>key</th>
								<th>过期时间</th>
								<th>value</th>
								<th>操作</th>
							</tr>
							</thead>
							@foreach($keys as $key => $v)
								<tr>
									<td> {!! getRedisTypeByKey($key) !!}</td>
									<td> {{$key}}</td>
									<td> {{getRedisTtlByKey($key)}}</td>
									<td> {{$v}}</td>
									<td><a data-toggle="modal"
										   onclick='deleteKey("{{route('deleteKey',['redisKey' => $key])}}")'
										   class="btn btn-outline btn-circle dark btn-sm black deleteKey">
											<i class="fa fa-trash-o"></i> Delete </a></td>
								</tr>
							@endforeach
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="deleteKey" class="modal fade" tabindex="-1" data-width="550">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
			<h4 class="modal-title">遵从内心,请勿受他人影响</h4>
		</div>
		<div class="modal-body">
			<div class="row">
				<div class="col-md-6">
					您确定删除吗?
				</div>
			</div>
		</div>
		<div class="modal-footer">
			<button type="button" data-dismiss="modal" class="btn btn-outline dark">取消</button>
			<a class="btn green" id="confirmDelete" href="">删除</a>
		</div>
	</div>

	<div id="info" class="modal fade" tabindex="-1" data-width="550">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
			<h4 class="modal-title">提示信息</h4>
		</div>
		<div class="modal-body">
			<div class="row">
				<div class="col-md-6">

				</div>
			</div>
		</div>
	</div>
@endsection

@section('page_js')
	<script src="/resources/assets/global/plugins/bootstrap-modal/js/bootstrap-modalmanager.js"
			type="text/javascript"></script>
	<script src="/resources/assets/global/plugins/bootstrap-modal/js/bootstrap-modal.js"
			type="text/javascript"></script>
	<script src="/resources/assets/pages/scripts/ui-extended-modals.min.js" type="text/javascript"></script>

	<script>

		function deleteKey(url) {
			$('#deleteKey').modal('show');
			// 确认删除
			$('#confirmDelete').on('click', function () {
				$('#deleteKey').modal('hide');
//				$.ajax({
//					url: url,
//					type: 'get',
//					dataType: 'json',
//					success: function (j) {
////						if(j.status=="success"){
////							info('删除成功');
////						}
////						if(j.status=="error"){
////							info(j.info);
////						}
//						info('删除成功');
//					},
//					error: function () {
//						info('删除失败');
//					}
//				});

				$.ajax({
					type: "delete",
					url: url,
					dataType: "json",
					success: function (res) {
						info(res.info);
					},
					error: function () {

					},
					async: false
				});
			});
		}

		function info(content) {
			$('#info').modal('show');
			$('#info .modal-body .col-md-6').html(content);
		}
	</script>
@endsection