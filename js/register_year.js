$(document).ready(function () {
    setDateBox();
  });

  // select box 연도 , 월 표시
  function setDateBox() {
    var dt = new Date();
    var year = "";
    var com_year = dt.getFullYear();

    // 발행 뿌려주기
    $("#birthyy").append("<option value=''>년도</option>");

    // 올해 기준으로 -50년부터 +1년을 보여준다.
    for (var y = (com_year - 100); y <= (com_year + 0); y++) {
      $("#birthyy").append("<option value='" + y + "'>" + y + " 년" + "</option>");
    }

    // 월 뿌려주기(1월부터 12월)
    var month;
    $("#birthmm").append("<option value=''>월</option>");
    for (var i = 1; i <= 12; i++) {
      $("#birthmm").append("<option value='" + i + "'>" + i + " 월" + "</option>");
    }

    // 일 뿌려주기(1일부터 31일)
    var day;
    $("#birthdd").append("<option value=''>일</option>");
    for (var i = 1; i <= 31; i++) {
      $("#birthdd").append("<option value='" + i + "'>" + i + " 일" + "</option>");
    }

  }