$('#roses').click(function () {
  $('#model_inline').attr("url", "../assignment/application/assets/x3d/roses.x3d");
  $('#desc').html('Established in 1867, Rose\'s was the world\'s first concentrated fruit drink.');
});

$('#oasis').click(function () {
  $('#model_inline').attr("url", "../assignment/application/assets/x3d/oasis.x3d");
  $('#desc').html('Oasis is a great tasting refreshing still drink made across seven delicious flavours.');
});

$('#monster_energy').click(function () {
  $('#model_inline').attr("url", "../assignment/application/assets/x3d/monster-energy.x3d");
  $('#desc').html('Monster Energy is an energy drink that was created by Hansen Natural Company.');
});


$('#frontBtn').click(function() {
  $("#front").attr("set_bind", "true");
});

$('#rightBtn').click(function() {
  $("#right").attr("set_bind", "true");
});

$('#leftBtn').click(function() {
  $("#left").attr("set_bind", "true");
});

$('#backBtn').click(function() {
  $("#back").attr("set_bind", "true");
});

$('#topBtn').click(function() {
  $("#top").attr("set_bind", "true");
});

$('#bottomBtn').click(function() {
  $("#bottom").attr("set_bind", "true");
});

$('#wire').click(function() {
  var e = document.getElementById('x3d');
  e.runtime.togglePoints(true);
  e.runtime.togglePoints(true);
});

$('#rotate').click(function() {
  $('#timeSensor').attr('enabled', 'true');
});

$('#stopRotate').click(function() {
  $('#timeSensor').attr('enabled', 'false');
});
