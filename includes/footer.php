<div class="container" id="container-footer">
	<footer>
<!--
		<div id="top-places">
			<h5>Some top places &raquo;</h5>
			<ul>
				<li>
					<a href="#" id="city-select-1" class="city-selector" onclick="toggle_city(1);">Blacksburg, VA</a>
				</li>
				<li>
					<a href="#" id="city-select-2" class="city-selector" onclick="toggle_city(2);">Wind Rock</a>
				</li>
				<li>
					<a href="#" id="city-select-3" class="city-selector" onclick="toggle_city(3);">Roanoke, VA</a>
				</li>
				<li>
					<a href="#" id="city-select-4" class="city-selector" onclick="toggle_city(4);">Tucson, AZ</a>
				</li>
			</ul>
		</div>
-->
		<p>© <?php 
		$copyYear = 2012; 
		$curYear = date('Y'); 
		echo $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '');
		?>
		<a href="http://www.johnminnich.com">John Minnich</a>
		|
		
		
		</p>
	</footer>
</div>