$(function() {

  // ScrollTo
  $('a[href^=#]').on('click', function(e) {
    var href = $(this).attr('href');
    if (href == "#login") {
      $('#login').modal('toggle');
    }
    else if (href == "#user") {
      $('#modalUser').modal('toggle');
    }
    else {
      $('html, body').animate({
        scrollTop: $(href).offset().top
      }, 'slow');
      e.preventDefault();
    }
  });

  // Div Onclick
  $('.editable').click(function(e) {
    if (e.target.tagName == 'DIV') {
      var id = e.target.id;
      $('#edit').modal('toggle');
      $('#edit #edit-headline').text(id);
      $('#edit #section').val(id);
      $('#edit .modal-body #editor').load('../functions/GetContent.php?section=' + id);
    }
  });

  // Modal OnClose
  $('#edit').on('hidden.bs.modal', function() {
    $('#edit #edit-headline').text('');
    $('#edit .modal-body #editor').text('');
  })

  // Add Login
  // Div Onclick
  $('.login').click(function(e) {
    $('#login').modal('toggle');
  });

});