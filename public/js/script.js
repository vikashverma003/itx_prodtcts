$(document).ready(function(){
$('.navbar-toggler').click(function(){
$(this).toggleClass('active');
});
$(".fileUpload").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".uploadbtn").addClass("selected").html(fileName);
  });
});