<?php include 'header.php';?>
<script type="text/javascript">$('#scrollbox3').enscroll({
    showOnHover: true,
    verticalTrackClass: 'track3',
    verticalHandleClass: 'handle3'
});
</script>



<div style= "margin-left:32%" class="page-title  col-xs-6 col-xs-offset-3">

  <h1 class="scroll-title">Gallery</h1>

  <div class="scrollBar scroll-pane  col-xs-8" id = "scrollbox">

      <ul id="gallery-container" style="list-style:none;">

          <li class="gallery-box">
            <a href="<?=base_url()?>/images/8.jpg" class="swipebox" title="My Caption">
                <img src="<?=base_url()?>/images/8.jpg" alt="image">
            </a>
        </li>

        <li class="gallery-box">
           <a href="<?=base_url()?>/images/8.jpg" class="swipebox" title="My Caption">
              <img src="<?=base_url()?>/images/8.jpg" alt="image">
          </a>
          </li>

          <li class="gallery-box">
            <a href="<?=base_url()?>/images/8.jpg" class="swipebox" title="My Caption">
                <img src="<?=base_url()?>/images/8.jpg" alt="image">
            </a>
        </li>

        <li class="gallery-box">
           <a href="<?=base_url()?>/images/8.jpg" class="swipebox" title="My Caption">
              <img src="<?=base_url()?>/images/8.jpg" alt="image" >
            </a>
        </li>

    </ul>

  </div>
</div>




<?php include 'footer.php';?>
