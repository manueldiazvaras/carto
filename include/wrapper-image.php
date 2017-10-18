<?php
    if ($detect->isMobile()==false) {
?>
		  <div class="wrapper-box-image">
  			<div id="box-text" class="raleway">Carto test</div>
  			<div id="box-icon" class=""><i class="uk-icon uk-icon-<?php echo $icon; ?>"></i></div>
  			<div id="box-image" style="background-color:#<?php echo $bgcolor ?>;" class=""></div>
		  </div>
<?php
    } else {
?>
      <img src="http://manueldiaz.com/carto/images/carto-mobile.jpg" width="850" height="" alt=""/>
<?php
    }
?>









