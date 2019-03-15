$(function(){
    $('.editor').summernote({
        height: 200,
        disableResizeEditor: true
      });

      $('.selectpicker').selectpicker();

      $('.tables').bootstrapTable();
      
      $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
      });
});