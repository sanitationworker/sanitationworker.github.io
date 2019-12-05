<div class="row">
	<div class="col-md-12">
		&nbsp;
	</div>
</div>
<div class="row poll-options-access">
	<div class="col-md-12">
		<div class="row">
			<div class="col-md-12">
				<h4>
					<?php _e( 'Permissions', 'yop-poll' );?>
				</h4>
			</div>
		</div>
		<div class="form-horizontal">
			<div class="form-group">
				<div class="col-md-3 field-caption">
					<?php _e( 'Vote Permissions', 'yop-poll' );?>
				</div>
				<div class="col-md-9">
					<select name="vote-permissions" class="vote-permissions" style="width:100%" multiple="multiple">
						<option value="guest"><?php _e( 'Guest', 'yop-poll' );?></option>
			            <option value="wordpress"><?php _e( 'Wordpress', 'yop-poll' );?></option>
			            <option value="facebook"><?php _e( 'Facebook', 'yop-poll' );?></option>
			            <option value="google"><?php _e( 'Google', 'yop-poll' );?></option>
		            </select>
				</div>
			</div>
			<div class="form-group block-voters-section">
				<div class="col-md-3">
					<?php _e( 'Block Voters', 'yop-poll' );?>
				</div>
				<div class="col-md-9">
					<select name="block-voters" class="block-voters" style="width:100%" multiple="multiple">
						<option value="no-block"><?php _e( 'Don\'t Block', 'yop-poll' );?></option>
		                <optgroup label="<?php _e( 'Block By', 'yop-poll' );?>">
							<option value="by-cookie"><?php _e( 'Cookie', 'yop-poll' );?></option>
							<option value="by-ip"><?php _e( 'Ip', 'yop-poll' );?></option>
							<option value="by-user-id"><?php _e( 'User Id', 'yop-poll' );?></option>
						</optgroup>
		            </select>
				</div>
			</div>
			<div class="form-group block-type-section hide">
				<div class="col-md-3 field-caption">
					<?php _e( 'Block Period', 'yop-poll' );?>
				</div>
				<div class="col-md-9">
					<select class="block-length-type" style="width:100%">
						<option value="forever" selected>
							<?php _e( 'Forever', 'yop-poll' );?>
						</option>
						<option value="limited-time">
							<?php _e( 'Limited Time', 'yop-poll' );?>
						</option>
					</select>
				</div>
			</div>
			<div class="form-group block-length-section hide">
				<div class="col-md-3 field-caption">
					<?php _e( 'Period', 'yop-poll' );?>
				</div>
				<div class="col-md-2">
					<input type="text" class="form-control block-length-1" value=""/>
				</div>
				<div class="col-md-7">
					<select class="block-length-2" style="width:100%;">
	                    <option value="minutes" selected><?php _e( 'Minutes', 'yop-poll' );?></option>
	                    <option value="hours"><?php _e( 'Hours', 'yop-poll' );?></option>
	                    <option value="days"><?php _e( 'Days', 'yop-poll' );?></option>
	                </select>
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-3">
					<?php _e( 'Limit Number Of Votes per User', 'yop-poll' );?>
				</div>
				<div class="col-md-9">
					<select class="limit-votes-per-user" style="width:100%">
		                <option value="no" selected><?php _e( 'No', 'yop-poll' );?></option>
		                <option value="yes"><?php _e( 'Yes', 'yop-poll' );?></option>
		            </select>
				</div>
			</div>
			<div class="form-group votes-per-user-section hide">
				<div class="col-md-3 field-caption">
					<?php _e( 'Votes per user', 'yop-poll' );?>
				</div>
				<div class="col-md-9">
					<input type="text" class="form-control votes-per-user-allowed" style="width:100%" />
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		&nbsp;
	</div>
</div>
