<?php
if (empty($GLOBALS["tag_var1"])) {
    $mypcharacters  = 200 ;
  } else {
    $mypcharacters = $GLOBALS["tag_var1"];
  }
?>
<style>
.read-more-p {
  display: none;
}	
</style>

<script>
$(document).ready(function(){
  	$('p').each(function(){
     
    var trimLength = <?php echo $mypcharacters ;?>; // The setting is 200 characters
    var trimMargin = 1.2; // don't trim just a couple of words
    if($(this).text().length > (trimLength * trimMargin)) {
      var text = $(this).text();
      var trimPoint = $(this).text().indexOf(" ", trimLength);
      var newContent = text.substring(0, trimPoint)+'<span class="read-more-p">'+text.substring(trimPoint)+'</span><span class="toggle"><wbr>  ... <a href="#"><?php echo $GLOBALS['lang_blog_read_more']; ?></a></span>';
      $(this).html(newContent);
    }
  });
  $('.toggle a').click(function(e){
    e.preventDefault();
    var para = $(this).closest('p');
    var initialHeight = $(this).closest('p').innerHeight();
    para.find('.read-more-p').show();
    para.find('.toggle').hide();
    var newHeight = para.innerHeight();
    para.css('max-height', initialHeight+'px');
    para.animate({ maxHeight: newHeight }, <?php echo $mypcharacters ;?>, function(){
      para.css('max-height', 'none');
    });
  });
});	
</script>