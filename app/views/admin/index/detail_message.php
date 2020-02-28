<?php 
  foreach($one as $line){?>
    <div class="form-group mx-auto d-flex">
    <label for="exampleFormControlTextarea1">Message </label>
    <textarea class="form-control text_area_message" id="exampleFormControlTextarea1" rows="3"><?php echo $line['message'];?></textarea>
  </div>          
        <?php
}
?>
