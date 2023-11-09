<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
</head>
<body>
	<div>
		<a href='<?php echo site_url('examples/admin')?>'>Admin</a> |
		<a href='<?php echo site_url('examples/belanja')?>'>Belanja</a> |
		<a href='<?php echo site_url('examples/jenis')?>'>Jenis</a> |
		<a href='<?php echo site_url('examples/keranjang')?>'>Keranjang</a> | 
		<a href='<?php echo site_url('examples/pelanggan')?>'>Pelanggan</a> |		 
		<a href='<?php echo site_url('examples/produk')?>'>Produk</a> |
		<a href='<?php echo site_url('examples/reward')?>'>Reward</a> |
		<a href='<?php echo site_url('examples/riwayat')?>'>Riwayat</a> |
		<a href='<?php echo site_url('examples/transaksi')?>'>Transaksi</a> |
		<a href='<?php echo site_url('examples/ukuran')?>'>Ukuran</a> |
	</div>
	<div style='height:20px;'></div>  
    <div style="padding: 10px">
		<?php echo $output; ?>
    </div>
    <?php foreach($js_files as $file): ?>
        <script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>
</body>
</html>
