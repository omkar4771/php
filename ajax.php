<script
  src="https://code.jquery.com/jquery-2.2.4.min.js">
</script>

<a href="javascript:void(0)" onclick ="click_here()">Click Here</a>

<script>
    function click_here(){
        JQuery.ajax({
            url:"ajaxdemo.php",
            type :'post',
            success : function (result){
                alert (result);
            }
        });
    }
</script>