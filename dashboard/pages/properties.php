		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">Home</a></li>
				<li class="active"><?= ucwords($_GET['v']); ?></li>
			</ol>
			
			<h1 class="page-header">PayRENT <small>MY PROPERTIES</small></h1>
			
			<div class="row">
				<div class="col-md-12 m-b-10">
				  <a href="#modal-dialog" data-toggle="modal" class="btn btn-lg btn-inverse pull-right width-250 m-b-10">
					<i class="fa fa-plus fa-2x pull-left"></i>Add a Property<br><small>Click Here to add</small>
				  </a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<ul class="result-list">
						<li>
							<div class="result-image bg-black p-l-20">
								<i class="fa fa-home fa-5x p-l-40"></i>
							</div>
							<div class="result-info">
								<h4 class="title"><a href="javascript:;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h4>
								<p class="location">United State, BY 10089</p>
								<div class="col-md-6 col-xs-6">
									<a href="javascript:;" data-toggle="tooltip" data-container="body" data-title="Analytics" data-original-title="" title="">
										<i class="fa fa-2x fa-bar-chart-o"></i>
									</a> <b>20 rent-able Units</b>
								</div>
								<div class="col-md-6 col-xs-6">
									<a href="javascript:;" data-toggle="tooltip" data-container="body" data-title="Tasks" data-original-title="" title="">
										<i class="fa fa-2x fa-tasks"></i>
									</a> <b>Rent per Unit: 250k</b>
								</div>
								<div class="col-md-6 col-xs-6">
									<a href="javascript:;" data-toggle="tooltip" data-container="body" data-title="Configuration" data-original-title="" title="">
										<i class="fa fa-2x fa-cog"></i> 
									</a> <b>Extra Dues: 45k</b>
								</div>
								<div class="col-md-6 col-xs-6">
									<a href="javascript:;" data-toggle="tooltip" data-container="body" data-title="Performance" data-original-title="" title="">
										<i class="fa fa-2x fa-tachometer"></i>
									</a> <b>Current Tenants: 10</b>
								</div>
							</div>
							<div class="btn-row m-b-30"><p><br/></p></div>
							<div class="result-price">
								$92,101 <small>Est. ANNUAL INCOME</small>
								<a href="javascript:;" class="btn btn-inverse btn-block">View / Edit</a>
							</div>
						</li>
					</ul>
					
					<!-- Add Property Modal --
					<div class="modal fade" id="modal-dialog">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
									<h4 class="modal-title">Modal Dialog</h4>
								</div>
								<div class="modal-body">
									Modal body content here...
								</div>
								<div class="modal-footer">
									<a href="javascript:;" class="btn btn-sm btn-white" data-dismiss="modal">Close</a>
									<a href="javascript:;" class="btn btn-sm btn-success">Action</a>
								</div>
							</div>
						</div>
					</div>
					<!-- END -->
				</div>
			</div>	
		</div>