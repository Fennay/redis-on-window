@extends('home.layout._layout')

@section('page_css')
	<link href="/resources/assets/pages/css/profile.min.css" rel="stylesheet" type="text/css"/>
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
				<div class="portlet box red">
					<div class="portlet-title">
						<div class="caption">
							<i class="fa fa-cogs"></i>服务器信息</div>
						<div class="tools">
							<a href="javascript:;" class="collapse"> </a>
							<a href="javascript:;" class="reload"> </a>
							<a href="javascript:;" class="remove"> </a>
						</div>
					</div>
					<div class="portlet-body flip-scroll">
						<table class="table table-bordered table-striped table-condensed flip-content">
								<thead class="flip-content"></thead>
								<tr>
									<td> Redis版本</td>
									<td> {{$info['Server']['redis_version']}}</td>
								</tr>
								<tr>
									<td> Redis端口号</td>
									<td> {{$info['Server']['tcp_port']}}</td>
								</tr>
								<tr>
									<td> Redis配置文件</td>
									<td> {{$info['Server']['config_file']}}</td>
								</tr>
								<tr>
									<td> 客户端连接数</td>
									<td> {{$info['Clients']['connected_clients']}}</td>
								</tr>
								<tr>
									<td> 角色</td>
									<td> {{$info['Replication']['role']}}</td>
								</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="portlet box green">
					<div class="portlet-title">
						<div class="caption">
							<i class="fa fa-cogs"></i>数据库信息</div>
						<div class="tools">
							<a href="javascript:;" class="collapse"> </a>
							<a href="javascript:;" class="reload"> </a>
							<a href="javascript:;" class="remove"> </a>
						</div>
					</div>
					<div class="portlet-body flip-scroll">
						<table class="table table-bordered table-striped table-condensed flip-content">
							@foreach($info['Keyspace'] as $k => $v)
								<thead class="flip-content">
								<tr>
									<th width="35%">数据库:【{{$k}}】 <a href="{{route('selectDB',['dbIndex' => mb_substr($k,2,2)])}}" class	="btn btn-outline btn-circle btn-sm purple"><i class="fa fa-share"></i> 查看</a></th>
									<th></th>
								</tr>
								</thead>
								<tr>
									<td> keys数量</td>
									<td> {{$v['keys']}}</td>
								</tr>
								<tr>
									<td> 过期时间</td>
									<td> {{$v['expires']}}</td>
								</tr>
								<tr>
									<td> 平均过期时间</td>
									<td> {{$v['avg_ttl']}}</td>
								</tr>
							@endforeach
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('page_js')

@endsection