//timer
let interval;
let timerFunc = function () {
  let minute = '00';
  let second = 60;
  interval = setInterval(function () {
    second--;
    if (second < 10) second = '0' + second;

    document.querySelector('#timer').innerHTML = `${minute} : ${second}`;
    document.querySelector('.time').innerText = `${minute} : ${second}`;
    document.querySelector('#start').disabled = true;
    document.querySelector('#start').style.background = ' rgb(206, 104, 104)';
    if (second == 0) {
      clearInterval(interval);
      functionCheck();
      document.querySelector('#error-check-yes-no-text').innerText = "It's a pity, but you lost";
      document.querySelector('#error-check-yes-no').style.display = 'block';
      document.querySelector('#check').disabled = true;
      document.querySelector('#check').style.background = ' rgb(206, 104, 104)';

    }
  }, 1000)
}
document.querySelector('#start').addEventListener('click', timerFunc)
document.querySelector('#error-check-yes-no-close').addEventListener('click', function () {
  document.querySelector('#timer').innerHTML = '01:00'
  document.querySelector('.time').innerText = '01:00'

})
//check result/ button

document.querySelector('#check').addEventListener('click', function () {
  document.querySelector('#error-check').style.display = 'block';
})
document.querySelector('#error-check-close').addEventListener('click', function () {
  document.querySelector('#error-check').style.display = 'none';
})
document.querySelector('#error-check-yes-no-close').addEventListener('click', function () {
  document.querySelector('#error-check-yes-no').style.display = 'none';
})

//puzzle
let func = function () {
  let sliceCol = document.getElementsByClassName('slice');
  let sliceArr = Array.from(sliceCol);
  let shuffledArr = sliceArr.sort(function () {
    return Math.random() - 0.5;
  });
  let x = 0;
  let y = 0;
  for (let i = 0; i < shuffledArr.length; i++) {
    shuffledArr[i].style.backgroundPositionX = x + 'px';
    shuffledArr[i].style.backgroundPositionY = y + 'px';
    $(shuffledArr[i]).attr("count", i);
    // shuffledArr[i].style.left = x * -1 +'px';

    if (x == -300) {
      y = y - 100;
      x = 0
    } else {
      x = x - 100;
    }
  }
}
func()
document.querySelector('#new').addEventListener('click', function () {
  func();
})
let isFirst = true;
$('.slice').draggable({
  revert: 'invalid',
  start: function () {
    if (isFirst == true && document.querySelector('#start').disabled == false) {
      timerFunc();
    }
    if (isFirst == true) {
      isFirst = false;
      document.querySelector('#check').style.background = ' rgb(236, 68, 68)';
      document.querySelector('#check').disabled = false;
    }
    if ($(this).hasClass('droppedPiece')) {
      $(this).removeClass('droppedPiece');
      $(this).parent().removeClass('piecePresent')
    }
  }
})
$('.sliceArea').droppable({
  accept: function () {
    return !$(this).hasClass('piecePresent')
  },
  drop: function (event, ui) {
    let draggableElement = ui.draggable;
    let droppedOn = $(this);
    droppedOn.addClass('piecePresent');
    $(draggableElement)
      .addClass('droppedPiece')
      .css({
        top: 0,
        left: 0,
        position: 'relative'
      }).appendTo(droppedOn);
  }
})
let valid = true
let functionCheck = function () {
  let array = $('.sliceArea > .slice').toArray();
  if (array.length == 0) {
    valid = false;
  }
  for (let i = 0; i < array.length; i++) {
    if ($(array[i]).attr('count') == i) {
      valid = true;
    } else {
      valid = false;
      break
    }
  }
  if (valid == false) {
    document.querySelector('#error-check-yes-no-text').innerText = "It's a pity, but you lost";
    document.querySelector('#error-check-yes-no').style.display = 'block';
    document.querySelector('#error-check').style.display = 'none';
    clearInterval(interval);

  } else {
    document.querySelector('#error-check-yes-no-text').innerText = "Woohoo, well done, you did it!";
    document.querySelector('#error-check-yes-no').style.display = 'block';
    document.querySelector('#error-check').style.display = 'none';
    clearInterval(interval);
  }
}
document.querySelector("#error-check-check").addEventListener('click', functionCheck)

document.querySelector('#new').addEventListener('click', function () {
  document.querySelector('#start').disabled = false;
  document.querySelector('#start').style.background = ' rgb(236, 68, 68)';
  document.querySelector('#timer').innerHTML = '01:00'
  document.querySelector('.time').innerText = '01:00'
  isFirst = true;
  clearInterval(interval);
  let puzzleElements = $('#puzzle .wrapper').toArray();
  let sliceAreaElements = $('.sliceArea .slice').toArray();
  let count1 = 0;
  for (let i = 0; i < puzzleElements.length; i++) {
    if ($(puzzleElements[i]).children().length == 0) {
      $(sliceAreaElements[count1]).removeClass('droppedPiece');
      $(sliceAreaElements[count1]).parent().removeClass('piecePresent')
      $(puzzleElements[i]).append(sliceAreaElements[count1]);
      count1++

    }
  }
})
