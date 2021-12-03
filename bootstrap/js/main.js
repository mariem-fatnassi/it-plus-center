$(function () {


  function inputSearchClients() {
    //
    let searchstring = $("#search").val();

    $.get("searchclient.php", { search: searchstring }, onAjaxSearchClients);
  }

  function onAjaxSearchClients(dataclients) {
    $("#zone").html(dataclients);
  }

  $("#search").on("input", inputSearchClients);
});
