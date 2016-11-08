 <script type="text/javascript">
  var startPos;		
  $(document).ready(function()
  {
	window.scrollTo(0,0);
	startPos = $("nav").offset().top;
  });

  $(window).scroll(function()
  {
	if ($(document).scrollTop() > startPos)
	{
	  $( "nav" ).addClass('fixed-nav');
	}
	else
	{
	  if ($( "nav" ).hasClass( 'fixed-nav' ))
	  {
		$( "nav" ).removeClass('fixed-nav');
	  }
	}
  });
</script>