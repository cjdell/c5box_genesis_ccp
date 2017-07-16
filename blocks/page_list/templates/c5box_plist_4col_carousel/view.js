if($(window).width() < 767){
  $('#fourcolumn-carousel').carousel({
    interval: 0,
  });
}else{
  $('#fourcolumn-carousel').carousel({
    interval: 3000,
  });
}

var maxheight = 0;

(function(){
  if ($(window).width() > 767){
  $('#fourcolumn-carousel .item').each(function(){
    var itemToClone = $(this);

    for (var i=1;i<4;i++) {
      itemToClone = itemToClone.next();

      // wrap around if at end of item collection
      if (!itemToClone.length) {
        itemToClone = $(this).siblings(':first');
      }

      // grab item, clone, add marker class, add to collection
      itemToClone.children(':first-child').clone()
        .addClass("cloneditem-"+(i))
        .appendTo($(this));
    }
  });
  $('#fourcolumn-carousel .item').each(function(){
    if($(this).height() > maxheight){
        maxheight = $(this).height();
    }
  });
  
  $("#fourcolumn-carousel .carousel-inner").css({
      minHeight: maxheight
  });  
}
if($(window).width() < 767){
  $("#fourcolumn-carousel .item").css({
      "display": "block"
  });
  $(".carousel-control").css({
    "display": "none"
  })
}
}());