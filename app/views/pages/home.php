<?php if(isset($bundle)): ?>
    
    <!-- Import Assets -->
	<?php $bundle->start(); ?>
        <script type="text/javascript" src="/assets/js/base.js"></script>
		<script type="text/javascript" src="/assets/js/components/phone-input.min.js"></script>
		<script type="text/javascript" src="/assets/js/pages/home.js"></script>
		<!-- // -->
		<link media="screen" type="text/css" href="/assets/css/base.css">
		<link media="screen" type="text/css" href="/assets/css/pages/home.css">
	<?php $bundle->end(); ?>

    <h2>Page!</h2>

<?php endif; ?>