if($(window).width() < 767){
  $('#threecolumn-carousel').carousel({
    interval: 0,
  });
}else{
  $('#threecolumn-carousel').carousel({
    interval: 3000,
  });
}

var maxheight = 0;

(function(){
  if ($(window).width() > 767){
  $('#threecolumn-carousel .item').each(function(){
    var itemToClone = $(this);

    for (var i=1;i<3;i++) {
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
  $('#threecolumn-carousel .item').each(function(){
    if($(this).height() > maxheight){
        maxheight = $(this).height();
    }
  });
  
  $("#threecolumn-carousel .carousel-inner").css({
      height: maxheight
  });
}
if($(window).width() < 767){
  $("#threecolumn-carousel .item").css({
      "display": "block"
  });
  $(".carousel-control").css({
    "display": "none"
  })
}
}());