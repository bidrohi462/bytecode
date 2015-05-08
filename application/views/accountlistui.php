<a class="btn btn-info" href=""> Add New User </a><br>
<ul class="pager">
	<li class="previous"> <a href="<?php echo site_url('accountlist/index/'.($page-1)); ?>"> &larr; Previous </a> </li>
	<li class="next"> <a href="<?php echo site_url('accountlist/index/'.($page+1)); ?>"> Next &rarr; </a> </li>
</ul>
<form action="" method="post">
	<div class="input-group">
		<input type="text" name="search_name" class="form-control" placeholder="Enter User Name">
		<span class="input-group-btn">
			<button class="btn btn-info" type="submit">Search For User By Name</button>
		</span>
	</div><!-- /input-group -->
</form>
<table class="table table-striped">
	<thead>
		<tr>
			<th>User Name</th>
			<th> Phone </th>
			<th> Address </th>
			<th> Balance </th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($accounts as $account): ?>
			<tr>
				<td> <?php echo $account->Name; ?> </td>
				<td> <?php echo $account->Phone_no; ?> </td>
				<td> <a href="<?php echo site_url('accountdetails/index/'.$account->Account_no); ?>">View account details</a> </td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
