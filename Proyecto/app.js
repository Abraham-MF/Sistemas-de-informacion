document.addEventListener('DOMContentLoaded', function() {
  // Inicializar Sidenav
  var sidenavElems = document.querySelectorAll('.sidenav');
  var sidenavInstances = M.Sidenav.init(sidenavElems);

  // Inicializar Collapsible
  var collapsibleElems = document.querySelectorAll('.collapsible');
  var collapsibleInstances = M.Collapsible.init(collapsibleElems);

  // Inicializar Modals
  var modalElems = document.querySelectorAll('.modal');
  var modalInstances = M.Modal.init(modalElems);

  //opciones
  var selectElems = document.querySelectorAll('select');
  M.FormSelect.init(selectElems);

  // botones
  var tabButtons = document.querySelectorAll('.tab-btn');
  tabButtons.forEach(function(button) {
    button.addEventListener('click', function() {
      var target = button.getAttribute('data-target');
      document.querySelectorAll('.content').forEach(function(content) {
        content.classList.remove('active');
      });
      document.getElementById(target).classList.add('active');
    });
  });

  document.querySelector('.content').classList.add('active');
  

});


// O con jQuery
$(document).ready(function(){
  $('.sidenav').sidenav();
  $('.collapsible').collapsible();
  $('.modal').modal();
  $('select').formSelect();
  $('.tab-btn').click(function() {
    var target = $(this).data('target');
    $('.content').removeClass('active');
    $('#' + target).addClass('active');
  });

  $('.content').first().addClass('active');

});
