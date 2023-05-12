$.getJSON('../assignment/?apiGetReferenceData', function(data) {
  let htmlStr = '';
  data.forEach(item => {
    htmlStr += `<li><a href="${item.url}">${item.name}</a></li>`;
  });
  $('#reference').html(htmlStr);
});
