<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Hey, It's me <?php echo e($data->name); ?></h2> 
<br>
    
<strong>User details: </strong><br>
<strong>Name: </strong><?php echo e($data->name); ?> <br>
<strong>Email: </strong><?php echo e($data->email); ?> <br>
<strong>Phone: </strong><?php echo e($data->phone); ?> <br>
<strong>Subject: </strong><?php echo e($data->subject); ?> <br>
<strong>Message: </strong><?php echo e($data->message); ?> <br><br>
  
Thank you
</body>
</html><?php /**PATH C:\xampp\htdocs\MailContact\resources\views/emails/contact.blade.php ENDPATH**/ ?>