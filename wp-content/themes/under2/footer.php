<?php wp_footer(); ?>

	</div><!-- #content -->


</div><!-- #page -->



<script type="text/javascript">



window.onload = clearCurrentLink;
window.onload =removeNode;

function clearCurrentLink(){
    var a = document.getElementsByTagName("A");
    for(var i=0;i<a.length;i++){
        if(a[i].href.split("#")[0] == window.location.href.split("#")[0]){
            removeNode(a[i]);
        }
    }
}

function removeNode(n){
    if(n.hasChildNodes()){
        for(var i=0;i<n.childNodes.length;i++){
            n.parentNode.insertBefore(n.childNodes[i].cloneNode(true),n);
        }
    }
    n.parentNode.removeChild(n);
}

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}




</script>



</body>
</html>