<?php
if (empty($GLOBALS["tag_var1"])) {
    $myjqcharacters  = 200 ;
  } else {
    $myjqcharacters = $GLOBALS["tag_var1"];
  }
?>
<style type="text/css">
.morecontent span {
    display: none;
}
.morelink {
    display: block;
}	
</style>
<script>
$(document).ready(function() {
    // Configure/customize these variables.
    var showChar = <?php echo $myjqcharacters; ?>;  // How many characters are shown by default
    var ellipsestext = "&nbsp;...";
    var moretext = "<?php echo $GLOBALS['lang_blog_read_more']; ?>" + " >";
    var lesstext = "< " + "<?php echo $GLOBALS['lang_blog_back_button']; ?>";
    

    $('.more').each(function() {
        var content = $(this).html();
 
        if(content.length > showChar) {
 
            var c = content.substr(0, showChar);
            var h = content.substr(showChar, content.length - showChar);
 
            var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';
 
            $(this).html(html);
        }
 
    });
 
    $(".morelink").click(function(){
        if($(this).hasClass("less")) {
            $(this).removeClass("less");
            $(this).html(moretext);
        } else {
            $(this).addClass("less");
            $(this).html(lesstext);
        }
        $(this).parent().prev().toggle();
        $(this).prev().toggle();
        return false;
    });
});
</script>