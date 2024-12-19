<script>
var win = null;
function NewWindow(mypage,myname,w,h,scroll){
LeftPosition = (screen.width) ? (screen.width-w)/2 : 0;
TopPosition = (screen.height) ? (screen.height-h)/2 : 0;
settings =
'height='+h+',width='+w+',top='+TopPosition+',left='+LeftPosition+',scrollbars='+scroll+',resizable'
win = window.open(mypage,myname,settings)
}

$(document).ready(function() {
resetcheckbox();
$('#selecctall').click(function(event) {  //on click
	if (this.checked) { // check select status
		$('.checkbox1').each(function() { //loop through each checkbox
			this.checked = true;  //select all checkboxes with class "checkbox1"              
		});
	} else {
		$('.checkbox1').each(function() { //loop through each checkbox
			this.checked = false; //deselect all checkboxes with class "checkbox1"                      
		});
	}
});


$("#del_all").on('click', function(e) {
	e.preventDefault();
	var checkValues = $('.checkbox1:checked').map(function()
	{
		return $(this).val();
	}).get();

	
	$.each( checkValues, function( i, val ) {
		$("#"+val).remove();
		});

	$.ajax({
		url: '<?="index.php?do=".$_GET['do']."&sub=delete_item_selected"?>',
		type: 'post',
		data: 'ids=' + checkValues
	}).done(function(data) {
		$("#respose").html(data);
		$('#selecctall').attr('checked', false);
	});
});


function  resetcheckbox(){
$('input:checkbox').each(function() { //loop through each checkbox
this.checked = false; //deselect all checkboxes with class "checkbox1"                      
   });
}
});
</script>