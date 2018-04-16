<!DOCTYPE html>
<html>
<head>
<title>Quản lý đăng ký đề tài</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="publics/css/bootstrap.css" rel='stylesheet' type='text/css' />
<script src="publics/js/jquery.min.js"></script>
<!---- start-smoth-scrolling---->
<script type="text/javascript" src="publics/js/move-top.js"></script>
<script type="text/javascript" src="publics/js/easing.js"></script>
<link href="publics/css/bootstrap.min.css" rel="stylesheet" />
<link href="publics/css/datepicker.css" rel="stylesheet" />
<script src="publics/js/bootstrap.min.js"></script>
<script src="publics/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script>
$(function () {
  $('#datepicker_start').datepicker({ format: "dd//mm/yyyy" }).on('changeDate', function (ev) {
    $(this).datepicker('hide');
  });
});
</script>
<script>
$(function () {
  $('#datepicker_end').datepicker({ format: "dd//mm/yyyy" }).on('changeDate', function (ev) {
    $(this).datepicker('hide');
  });
});
</script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!--start-smoth-scrolling-->
</head>