function openNav() {
    document.getElementById("myNav").style.width = "100%";
  }
  
  function closeNav() {
    document.getElementById("myNav").style.width = "0%";
  }
  
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $('.back-to-top').fadeIn('slow');
    } else {
      $('.back-to-top').fadeOut('slow');
    }
  });
  
  $('.back-to-top').click(function () {
    $('html, body').animate({
      scrollTop: 0
    }, 1500, 'easeInOutExpo');
    return false;
  });
  
  
  // IFTTT Slottt Machine by Jen Hamon
  // jen@ifttt.com
  // github.com/jhamon
  var wordlist = [
    'Entrepreneurship Coach', 'Startup Strategist']
  
  function buildSlotItem(text) {
    return $('<div>').addClass('slottt-machine-recipe__item')
      .text(text)
  }
  
  function buildSlotContents($container, wordlist) {
    $items = wordlist.map(buildSlotItem);
    $container.append($items);
  }
  
  function popPushNItems($container, n) {
    $children = $container.find('.slottt-machine-recipe__item');
    $children.slice(0, n).insertAfter($children.last());
  
    if (n === $children.length) {
      popPushNItems($container, 1);
    }
  }
  
  // After the slide animation is complete, we want to pop some items off
  // the front of the container and push them onto the end. This is
  // so the animation can slide upward infinitely without adding
  // inifinte div elements inside the container.
  function rotateContents($container, n) {
    setTimeout(function () {
      popPushNItems($container, n);
      $container.css({ top: 0 });
    }, 300);
  }
  
  function randomSlotttIndex(max) {
    var randIndex = (Math.random() * max | 0);
    return (randIndex > 0) ? randIndex : randomSlotttIndex(max);
  }
  
  
  
  function animate() {
    var wordIndex = randomSlotttIndex(wordlist.length);
    $wordbox.animate({ top: -wordIndex * 150 }, 500, 'swing', function () {
      rotateContents($wordbox, wordIndex);
    });
  }
  
  $(function () {
    $wordbox = $('#wordbox .slottt-machine-recipe__items_container');
    buildSlotContents($wordbox, wordlist);
    buildSlotContents($wordbox, wordlist);
    buildSlotContents($wordbox, wordlist);
    buildSlotContents($wordbox, wordlist);
  
    setInterval(animate, 2000);
  });