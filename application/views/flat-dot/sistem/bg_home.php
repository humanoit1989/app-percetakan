<div id="content" class="span11">
<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header" data-original-title="">
			<h2><i class="halflings-icon fire"></i><span class="break"></span>
			Konfigurasi Sistem</h2>
		</div>
		<div class="box-content">
<<<<<<< HEAD
			<?php echo form_open("dashboard/sistem/set"); ?>
			<input type="text" class="input-xlarge" value="<?php echo $this->session->userdata("key"); ?>" name="key" />
			<input type="submit" value="Cari Data" class="btn" />
			<?php echo form_close(); ?>
			<?php echo $dt_retrieve; ?>
			<span class="label label-success">JUMLAH DATA : <?php echo $this->db->get("dlmbg_setting")->num_rows(); ?></span>
=======
			<?php echo $dt_retrieve; ?>
>>>>>>> 30b93fd26dcb762b9b13b0dde45342c45bc14713
		</div>
	</div>

</div>
</div>
</div>