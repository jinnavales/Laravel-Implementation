<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Online Resume</title>
    <link rel="icon" type="image/x-icon" href="<?php echo e(asset('assets/resume-logo.png')); ?>" /> 
    <!-- You can link CSS files here -->
    
</head>
<body>
<?php $__currentLoopData = $resumes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $resume): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
    <h1>Genesis Navales</h1>

    <h2>Contact Information</h2>
    <p>Email: <?php echo e($resume->email); ?></p>
    <p>Phone: <?php echo e($resume->phone); ?></p>

    <h2>Summary</h2>
    <p><?php echo e($resume->summary); ?></p>

    <h2>Experience</h2>
    <ul>
        <?php $__currentLoopData = explode(',', $resume->experience); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($job); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <h2>Education</h2>
    <ul>
        <?php $__currentLoopData = explode(',', $resume->education); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $edu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($edu); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <h2>Skills</h2>
    <ul>
        <?php $__currentLoopData = explode(',', $resume->skills); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($skill); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\jinnavales\online_resume\resources\views/index.blade.php ENDPATH**/ ?>