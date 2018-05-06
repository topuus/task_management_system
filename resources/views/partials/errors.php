<?php if(count($errors)> 0): ?>
    <div class="error" style='margin-bottom: 27px;
    color: #fff;border:1px solid red;padding: 5px; border-radius: 5px;'>
        <?php  foreach ($errors as $error): ?>
            <p> <?php echo $error; ?> </p>
        <?php endforeach ?>
    </div>
<?php endif ?>
