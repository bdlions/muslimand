<html>
<head>
<title>Upload Form</title>
</head>
<body>

<h3>Your file was successfully uploaded!</h3>

<ul>
<?php foreach ($upload_data as $item => $value):?>
<li><?php echo $item;?>: <?php echo $value;?></li>
<?php endforeach; ?>
</ul>

<p><?php echo anchor('upload', 'Upload Another File!'); ?></p>
<div class="form-group">
    <video src="<?php echo base_url().'uploads/'. $filename1 ;?>" height="300" controls="autoplay"></video><br/>
    <video src="<?php echo base_url().'uploads/'. $filename2 ;?>" height="300" controls="autoplay"></video><br/>
</div>
</body>
</html>