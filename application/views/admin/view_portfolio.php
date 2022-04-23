<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().'admin/login');
}
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>View Portfolio</h1>
	</div>
	<div class="content-header-right">
		<a href="<?php echo base_url(); ?>admin/portfolio/add" class="btn btn-primary btn-sm">Add New</a>
	</div>
</section>

<section class="content">
	<div class="row">
		<div class="col-md-12">

			<?php
	        if($this->session->flashdata('error')) {
	            ?>
	            <div class="callout callout-danger">
	                <p><?php echo $this->session->flashdata('error'); ?></p>
	            </div>
	            <?php
	        }
	        if($this->session->flashdata('success')) {
	            ?>
	            <div class="callout callout-success">
	                <p><?php echo $this->session->flashdata('success'); ?></p>
	            </div>
	            <?php
	        }
	        ?>

			<div class="box box-info">
				<div class="box-body table-responsive">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>SL</th>
								<th>Name</th>
								<th>Category</th>
								<th>Photo</th>
								<th>Language</th>
								<th width="140">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$i=0;						
							foreach ($portfolio as $row) {
								$i++;
								?>
								<tr>
									<td style="width:100px;"><?php echo $i; ?></td>
									<td><?php echo $row['name']; ?></td>
									<td><?php echo $row['category_name']; ?></td>
									<td style="width:250px;"><img src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>" alt="<?php echo $row['name']; ?>" style="width:150px;"></td>
									<td><?php echo $row['lang_name']; ?></td>
									<td>
										<a class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModal<?php echo $i; ?>">Details</a>						
										<a href="<?php echo base_url(); ?>admin/portfolio/edit/<?php echo $row['id']; ?>" class="btn btn-primary btn-xs">Edit</a>
									</td>
								</tr>
								<div class="modal fade" id="myModal<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			                        <div class="modal-dialog" role="document">
			                            <div class="modal-content">
			                                <div class="modal-header">
			                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			                                    <h4 class="modal-title" id="myModalLabel">View Details</h4>
			                                </div>
			                                <div class="modal-body">
			                                    <div class="rTable">
			                                        <div class="rTableRow">
			                                            <div class="rTableHead"><strong>Name</strong></div>
			                                            <div class="rTableCell">
			                                                <?php echo $row['name']; ?>
			                                            </div>
			                                        </div>
			                                        <div class="rTableRow">
			                                            <div class="rTableHead"><strong>Content</strong></div>
			                                            <div class="rTableCell">
			                                                <?php echo $row['content']; ?>
			                                            </div>
			                                        </div>
			                                        
			                                        </div>
			                                        <div class="rTableRow">
			                                            <div class="rTableHead"><strong>Featured Photo</strong></div>
			                                            <div class="rTableCell">
			                                                <img src="<?php echo base_url().'public/uploads/'.$row['photo']; ?>" alt="" style="width:120px;">
			                                            </div>
			                                        </div>
			                                    </div>
			                                </div>
			                                <div class="modal-footer">
			                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			                                </div>
			                            </div>
			                        </div>
			                    </div>
								<?php
							}
							?>							
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>