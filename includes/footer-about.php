<div class="container" id="container-footer">
	<footer>
		<a id="privacy" class="modal" href="javascript:void(0);">
			A word about privacy
		</a>
		<p>© <?php 
		$copyYear = 2012; 
		$curYear = date('Y'); 
		echo $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '');
		?>
		<a href="http://www.johnminnich.com">John Minnich</a>
		</p>
	</footer>
</div>