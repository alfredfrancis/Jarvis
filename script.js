$(document).ready(function(){
$("input[type='checkbox']").change(function()
{
  $val=$(this).is(":checked") ? 1 : 0;

  $.post("switch.php",
      {
        bname: this.name,
        bstatus: $val
      });
});
});
