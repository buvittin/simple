<fieldset>
	<legend>re chuot</legend>
	<p>Demo #1: <a href="https://www.google.com.vn/" id="searchlink" rel="subcontent">Search DD</a></p>
	<DIV id="subcontent" style="position:absolute; visibility: hidden; border: 9px solid orange; background-color: white; width: 300px; padding: 8px;">

		<p><b>Search Google:</b></p>
		<form method="get" action="https://www.google.com.vn/" id="topform">
		<input name="query" maxlength="255" style="width: 150px" id="topsearchbox" alt="Search" /> 
		<input value="Search" class="topformbutton" type="submit" />
		</form>

		<div align="right"><a href="javascript:dropdowncontent.hidediv('subcontent')">Hide this DIV manually</a> | <a href="https://www.google.com.vn/">Google</a></div>
	</DIV>
	<script type="text/javascript">
		//Call dropdowncontent.init("anchorID", "positionString", glideduration, "revealBehavior") at the end of the page:

		dropdowncontent.init("searchlink", "right-bottom", 500, "mouseover")
		dropdowncontent.init("contentlink", "left-top", 300, "click")

	</script>
	
	<!------------------------------------------------------------------------------------>
	<form action="http://www.google.com.vn/cse" id="cse-search-box" target="_blank">
        <div>
			<input type="hidden" name="cx" value="partner-pub-9048906902887052:8wm1dp-tc3k" />
			<input type="hidden" name="ie" value="UTF-8" />
			<input type="text" name="q" size="31" />
			<input type="submit" name="sa" value="Tìm kiếm" />
        </div>
    </form>
    <script type="text/javascript" src="http://www.google.com/coop/cse/brand?form=cse-search-box&amp;lang=vi"></script> 
</fieldset>