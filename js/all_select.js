function allCheckFunc( obj ) {
  $("[class=agree]").prop("checked", $(obj).prop("checked") );
}

/* 체크박스 체크시 전체선택 체크 여부 */
function oneCheckFunc( obj )
{
var allObj = $("[class=all_agree]");
var objName = $(obj).attr("class");

if( $(obj).prop("checked") )
{
  checkBoxLength = $("[class="+ objName +"]").length;
  checkedLength = $("[class="+ objName +"]:checked").length;

  if( checkBoxLength == checkedLength ) {
    allObj.prop("checked", true);
  } else {
    allObj.prop("checked", false);
  }
}
else
{
  allObj.prop("checked", false);
}
}

$(function(){
$("[class=all_agree]").click(function(){
  allCheckFunc( this );
});
$("[class=agree]").each(function(){
  $(this).click(function(){
    oneCheckFunc( $(this) );
  });
});
});