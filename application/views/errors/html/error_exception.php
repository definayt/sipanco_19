<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

<h4>An uncaught Exception was encountered</h4>

<p>Type: <?php echo esc_html(get_class($exception)); ?></p>
<p>Message: <?php echo esc_html($message); ?></p>
<p>Filename: <?php echo esc_html($exception->getFile()); ?></p>
<p>Line Number: <?php echo esc_html($exception->getLine()); ?></p>

<?php if (defined('SHOW_DEBUG_BACKTRACE') && SHOW_DEBUG_BACKTRACE === TRUE): ?>

	<p>Backtrace:</p>
	<?php foreach ($exception->getTrace() as $error): ?>

		<?php if (isset($error['file']) && strpos($error['file'], realpath(BASEPATH)) !== 0): ?>

			<p style="margin-left:10px">
			File: <?php echo esc_html($error['file']); ?><br />
			Line: <?php echo esc_html($error['line']); ?><br />
			Function: <?php echo esc_html($error['function']); ?>
			</p>
		<?php endif ?>

	<?php endforeach ?>

<?php endif ?>

</div>