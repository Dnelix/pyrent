		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">Home</a></li>
				<li class="active"><?= ucwords($_GET['v']); ?></li>
			</ol>
			
			<h1 class="page-header">PayRENT <small>RENT MANAGER</small></h1>
			
			<div class="row">
				<div class="col-md-12 bg-black p-10">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#default-tab-1" data-toggle="tab" aria-expanded="true">Pending/Upcoming</a></li>
						<li class=""><a href="#default-tab-2" data-toggle="tab" aria-expanded="false">Released</a></li>
						<li class=""><a href="#default-tab-3" data-toggle="tab" aria-expanded="false">Collected</a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane fade active in" id="default-tab-1">
							<h3 class="m-t-10"><i class="fa fa-cog"></i> Upcoming/Pending Rents</h3>
							<div class="table-responsive">
								<table class="table">
									<thead>
										<tr>
											<th>#</th>
											<th>Tenant</th>
											<th>Property</th>
											<th>Room(s) Occupied</th>
											<th>Rent to Pay</th>
											<th>Due Date</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
										</tr>
										<tr>
											<td>2</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
										</tr>
										<tr>
											<td>3</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="tab-pane fade" id="default-tab-2">
							<h3 class="m-t-10"><i class="fa fa-cog"></i> Manually Approved Renters</h3>
							<div class="table-responsive">
								<table class="table">
									<thead>
										<tr>
											<th>Date</th>
											<th>Tenant</th>
											<th>Property</th>
											<th>Room(s) Occupied</th>
											<th>Rent</th>
											<th>Next Due Date</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
										</tr>
										<tr>
											<td>2</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
										</tr>
										<tr>
											<td>3</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="tab-pane fade" id="default-tab-3">
							<h3 class="m-t-10"><i class="fa fa-cog"></i> Collected via PayRENT</h3>
							<div class="table-responsive">
								<table class="table">
									<thead>
										<tr>
											<th>Date</th>
											<th>Tenant</th>
											<th>Property</th>
											<th>Room(s) Occupied</th>
											<th>Rent Paid</th>
											<th>Next Due Date</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
										</tr>
										<tr>
											<td>2</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
										</tr>
										<tr>
											<td>3</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
											<td>Table cell</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>