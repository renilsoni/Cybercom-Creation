
scores = [0, 0];
roundScore = 0;
activePlayer = 0;
gamePlaying = true;
  
document.querySelector('.dice').style.display = 'none';

document.getElementById('score-0').textContent = '0';
document.getElementById('score-1').textContent = '0';
document.getElementById('current-0').textContent = '0';
document.getElementById('current-1').textContent = '0';

document.querySelector('.btn-roll').addEventListener('click',function(){

  var dice = Math.floor(Math.random() * 6 + 1);

  var diceValue = document.querySelector('.dice');
  diceValue.style.display = 'block';
  diceValue.src = 'dice-'+dice+'.png';

  if (dice !== 1)
  {
    roundScore += dice;
    document.querySelector('#current-'+activePlayer).textContent = roundScore;
  }
  else
  {
    nextPlayer();
  }

});

function nextPlayer()
{
  roundScore = 0
  document.querySelector('#current-'+activePlayer).textContent = roundScore;
  document.querySelector('.player-'+activePlayer+'-panel').classList.remove('active');
  activePlayer === 0 ? activePlayer = 1 : activePlayer = 0;
  console.log(activePlayer);
  document.querySelector('.player-'+activePlayer+'-panel').classList.add('active'); 
}

document.querySelector('.btn-hold').addEventListener('click',function(){

  scores[activePlayer] += roundScore;
  document.querySelector('#score-'+activePlayer).textContent = scores[activePlayer];

  if (scores[activePlayer] >= 100)
  {
    document.querySelector('#name-'+activePlayer).textContent = "Winner !!!";
    document.querySelector('.dice').style.display = 'none';
    document.querySelector('.btn-hold').style.display = 'none';
    document.querySelector('.btn-roll').style.display = 'none';
    document.querySelector('.player-'+activePlayer+'-panel').classList.remove('active'); 
  }
  else
  {
    nextPlayer();
  }

});

document.querySelector('.btn-new').addEventListener('click',function(){

scores = [0, 0];
roundScore = 0;
activePlayer = 0;
gamePlaying = true;
  
document.querySelector('.dice').style.display = 'none';
document.getElementById('score-0').textContent = '0';
document.getElementById('score-1').textContent = '0';
document.getElementById('current-0').textContent = '0';
document.getElementById('current-1').textContent = '0';
document.querySelector('.btn-hold').style.display = 'block';
document.querySelector('.btn-roll').style.display = 'block';
document.querySelector('.player-0-panel').classList.remove('active'); 
document.querySelector('.player-1-panel').classList.remove('active'); 
document.querySelector('.player-'+activePlayer+'-panel').classList.add('active'); 
document.getElementById('name-0').textContent = 'Player 1';
document.getElementById('name-1').textContent = 'Player 2';


});
