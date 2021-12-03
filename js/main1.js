$(function () {

    function onClickvoituremodal() {
        const voitureId = $(this).html();
        console.log(voitureId);
        // Envoi d'une requête Ajax en GET avec la fonction jQuery $.get
        $.get("voituremodal.php", { id: voitureId }, onAjaxvoitureModal);
      }
    
      function onAjaxvoitureModal(voitureInfo) {
        $(".modal-body").html(voitureInfo);
      }
  
  

    $(document).on("click", "td a", onClickvoituremodal);
});