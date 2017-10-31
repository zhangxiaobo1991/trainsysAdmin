<div class="navbar navbar-inverse">
	<div class="container-fluid">
		<!-- 缩小后的左侧brand标识 右侧的菜单唤醒 -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="#" class="navbar-brand"><img src="{{ asset('icon.png') }}" alt="" style="width: 20px;height: 20px"></a>
		</div>

		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">首页</a></li>
				<li><a href="">产品介绍</a></li>
				<li><a href="">公司介绍</a></li>
				<li><a href="">最近新闻</a></li>
			</ul>


			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded=false>
						当前用户<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="">修改密码</a></li>
						<li><a href="">退出登录</a></li>
						<li><a href="">查看个人信息</a></li>
					</ul>
				</li>
			</ul>
		</div>	
	</div>
</div>
