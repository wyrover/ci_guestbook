<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
  
<html>
  <head>
    <title>Upload an Image </title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>
   
  <body>
    <div id="container">
        <h2>Upload an Image </h2>
 
        <?php echo form_open_multipart('upload/doUpload'); ?>
        <input type="file" name="userfile" />
        <p><input type="submit" value="Submit" name="submit" /></p>
        <?php echo form_close(); ?>
    </div>
 
  </body>
</html>