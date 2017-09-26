<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<title>Redis on windows</title>
	<link rel="stylesheet" type="text/css" href="http://apps.bdimg.com/libs/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="resources/home/css/redis.css">

	<script type="text/javascript" src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
	<script type="text/javascript" src="http://apps.bdimg.com/libs/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid">
	<div class="row header">
		<h1></h1>
	</div>
	<!-- <hr /> -->

	<div class="row">
		<!-- <div class="col-md-1"></div> -->
		<div class="col-md-2">
			<div class="panel-group" id="accordion">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion"
							   href="#collapseOne">
								数据库名称（ip）
							</a>
						</h4>
					</div>
					<div id="collapseOne" class="panel-collapse collapse in">
						<div class="panel-body">
							<ul class="dbIndex">
								@foreach($info['Keyspace'] as $k => $v)
									<li>
										<a href="{{route('selectDB',['dbIndex' => mb_substr($k,2,2)])}}"
										   title="查看keys">{{$k}}</a>
										<a href="javascript:;" title="清空数据库"> <i class="glyphicon glyphicon-trash"></i></a>
									</li>
								@endforeach

							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-10">
			<div class="list-group redis-key">
				<a href="javascript:;" class="list-group-item"> keys </a>
				<a href="javascript:;" onclick="showValue()" class="list-group-item">
					搜索：<input type="text">
				</a>
				@foreach($keys as $key => $v)
					<a href="javascript:;" onclick="showValue()" class="list-group-item">
						{!! getRedisTypeByKey($key) !!}&nbsp;
						<span class="label label-sm label-danger label-mini"> {{getRedisTtlByKey($key)}} </span>&nbsp;
						{{$key}}
					</a>
				@endforeach
			</div>
		</div>
		<div class="col-md-7 redis-value">
			<p>
				<button type="button" onclick="closeValue()" class="close pull-left" aria-hidden="true">
					&times;
				</button>
				<button type="button" onclick="closeValue()" class="close" aria-hidden="true">
					&times;
				</button>
			</p>
			<h4 class="redis-title">
				value
			</h4>
			<div class="redis-content">
				username
			</div>

		</div>
	</div>

	<div class="row">

	</div>
</div>

<script>

	// 值的类
	var redisValue = $('.redis-value');

	// 修改value高度
	$(redisValue).css('height',$('.redis-key').css('height'))


	function showValue(){
	    $(redisValue).show();
	}

    /**
	 * 关闭值
     */
	function closeValue(){
	    $(redisValue).hide();
	}
</script>
</body>
</html>