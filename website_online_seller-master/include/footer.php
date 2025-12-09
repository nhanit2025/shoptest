<footer style="
            background-color: #6E4B3A; /* Nền nâu cho footer */
            color: #fff;
            padding: 50px 0; /* Padding cho toàn bộ footer */
            font-family: 'Arial', sans-serif;
            width: 100%; /* Đảm bảo footer chiếm hết chiều rộng */
            position: relative;
            left: 0;
            right: 0;
            min-height: 300px; /* Đảm bảo chiều cao tối thiểu cho footer */
        
">
	
<div id="footer-header" style="border-top: 4px solid #6E4B3A ;padding: 0; ">
	<div class="container" style="
            width: 100%; /* Đảm bảo container chiếm hết chiều rộng */
            padding: 0 15px; /* Padding hai bên */
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
             /* Đảm bảo container chiếm hết chiều cao của footer */
			 background-color: #6E4B3A;
			    padding: 0; 
				
        ">
		<div class="row" >

			<div class="col-xs-12 col-sm-5 wapper1" style=" 
             flex: 1;
    padding: 15px;
    background-color: #4E342E; /* Màu nền nâu cho cột Logo và Mô tả */
    color: #fff
        ">
				<?php
				$query_logo_footer = 'SELECT value FROM tb_information WHERE name = "logo_footer"';
				$result_logo_footer = mysqli_query($dbc, $query_logo_footer);
				if( mysqli_num_rows($result_logo_footer) > 0 ) {
					extract( mysqli_fetch_array($result_logo_footer, MYSQLI_ASSOC) );
					echo  '<img  src="'. $value .'" class="img-responsive" >';
				}
				?>  
				<!-- <img src="image/logo-bottom.png" class="img-responsive"> -->
				
					<?php
					$query_description = 'SELECT value FROM tb_information WHERE name = "description"';
					$result_description = mysqli_query($dbc, $query_description);
					if( mysqli_num_rows($result_description) > 0 ) {
						extract( mysqli_fetch_array($result_description, MYSQLI_ASSOC) );
						echo  $value;
					}
					?> 
				</p>
				
			</div>

			<div class="col-xs-12 col-sm-offset-1 col-sm-3 wapper2" style="flex: 1;
    padding: 15px;
    background-color: #4E342E;  /* M">
				<h3><span><i class="glyphicon glyphicon-list-alt"></i></span>
					Danh mục
				</h3>
				<ul>
					<?PHP 
					$array = category_name();
					foreach ($array as $value) {
						$value = explode("-+&", $value);
						?>
						<li><span><i class="glyphicon glyphicon-ok"></i></span><a href="sp-category.php?category=<?php echo $value[0]; ?>" style="color: #ccc;text-decoration: none;text-transform: capitalize;"><?php echo $value[1]; ?></a></li>
						<?php
					}
					?>
						<!-- <li><span><i class="glyphicon glyphicon-ok"></i></span>Áo thun nam</li>
						<li><span><i class="glyphicon glyphicon-ok"></i></span>Áo khoác nam</li>
						<li><span><i class="glyphicon glyphicon-ok"></i></span>Áo vest nam</li>
						<li><span><i class="glyphicon glyphicon-ok"></i></span>Áo len nam</li>
						<li><span><i class="glyphicon glyphicon-ok"></i></span>Giày nam</li>
						<li><span><i class="glyphicon glyphicon-ok"></i></span>Thắt lưng nam</li>
						<li><span><i class="glyphicon glyphicon-ok"></i></span>Ví da nam</li> -->
					</ul>
				</div>

				<div class="col-xs-12 col-sm-3 wapper3" style="flex: 1;
    padding: 15px;
    background-color: #4E342E">
					<h3><span><i class="glyphicon glyphicon-envelope"></i></span>
						Liên hệ
					</h3>
					<ul>
						<!-- query email -->
						<?php
						$query_email = 'SELECT value FROM tb_information WHERE name = "email"';
						$result_email = mysqli_query($dbc, $query_email);
						if( mysqli_num_rows($result_email) > 0 ) { 
							extract( mysqli_fetch_array($result_email, MYSQLI_ASSOC) );
							$array_email = explode(' ', trim($value));
							foreach ($array_email as $value) {
								?>
								<li><span><i class="glyphicon glyphicon-envelope"></i></span><span style="font-family: 'Open Sans Bold';background: none">Email:</span> <?php echo $value; ?></li>
								<?php 
							}
						}
						?>

						<!-- query adress -->
						<?php
						$query_adress = 'SELECT value FROM tb_information WHERE name = "adress"';
						$result_adress = mysqli_query($dbc, $query_adress);
						if( mysqli_num_rows($result_adress) > 0 ) { 
							extract( mysqli_fetch_array($result_adress, MYSQLI_ASSOC) );
							$array_adress = explode("$%^$%^", trim($value, "$%^$%^") );
							foreach ($array_adress as $value) {
								?>
								<li><span><i class="glyphicon glyphicon-map-marker"></i></span>Địa chỉ <?php echo $value; ?></li>
								<?php 
							}
						}
						?>
					</ul>
				</div>

		</div>
	</div>

</footer>