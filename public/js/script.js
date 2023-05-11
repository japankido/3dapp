$('#roses').click(function () {
  $('#model_inline').attr("url", "../x3d/roses.x3d");
  $('#desc').html('Established in 1867, Rose\'s was the world\'s first concentrated fruit drink.');
});

$('#oasis').click(function () {
  $('#model_inline').attr("url", "../x3d/oasis.x3d");
  $('#desc').html('Oasis is a great tasting refreshing still drink made across seven delicious flavours.');
});

$('#monster_energy').click(function () {
  $('#model_inline').attr("url", "../x3d/monster-energy.x3d");
  $('#desc').html('Monster Energy is an energy drink that was created by Hansen Natural Company.');
});


$('#frontBtn').click(function() {
  $("#front").attr("set_bind", "true");
});

$('#rightBtn').click(function() {
  $("#right").attr("set_bind", "true");
})
