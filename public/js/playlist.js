fetch(LINK).then(searchResponse).then(searchJson);
 
function searchResponse(response)
{
  return response.json();
  
}

function searchJson(json)
{   
  const risultati = json;
  const song = document.querySelector('#notizie');
  song.innerHTML='';
  for(let r of risultati){
  const art = document.createElement('div'); 
  art.classList.add('art');
  
  const titolo = document.createElement('h1');
  titolo.textContent= r.titolo;
  const immagine = document.createElement('img');
  immagine.src= r.img;

  const img = document.createElement("img"); 
  img.classList.add('like');
  img.src = "img/cuore_pieno.png";

  
  art.appendChild(immagine);
  art.appendChild(titolo);
  art.appendChild(img);

  song.appendChild(art);


  }
  const immagine=document.querySelectorAll('.art');
  for(let b of immagine){
    b.addEventListener('click', seleziona);
  }
}

function seleziona(event)
{
 
  const scelta = event.currentTarget;
  const titolo = scelta.querySelector('h1').textContent;
  const image = scelta.querySelector('.like');
  image.src = 'img/cuore.png';
  fetch(LINK2 + titolo);
  fetch(LINK).then(searchResponse).then(searchJson);

  
}
