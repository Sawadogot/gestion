$(document).ready(function(){
    $(".veen .rgstr-btn button").click(function(){
        $('.veen .wrapper').addClass('move');
        $('.body').css('background','#e0b722');
        $(".veen .login-btn button").removeClass('active');
        $(this).addClass('active');

    });
    $(".veen .login-btn button").click(function(){
        $('.veen .wrapper').removeClass('move');
        $('.body').css('background','#ff4931');
        $(".veen .rgstr-btn button").removeClass('active');
        $(this).addClass('active');
    });
});



var modal = document.getElementById("myModal");
var btn = document.getElementById("deleteButton");
var span = document.getElementsByClassName("close")[0];
var confirmDelete = document.getElementById("confirmDelete");

btn.onclick = function() {
  modal.style.display = "block";
}

span.onclick = function() {
  modal.style.display = "none";
}

confirmDelete.onclick = function() {
  // Logique pour effectuer la suppression
  modal.style.display = "none";
}
