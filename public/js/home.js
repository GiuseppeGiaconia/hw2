fetch(URL).then(searchResponse).then(searchJson);
 
  function searchResponse(response)
{
    return response.json();
}

function searchJson(json)
{
  
    const results = json.articles;
    const library = document.querySelector('#notizie');
    let max_results = 20;
    for(let i=0; i<max_results; i++)
    {
      const news = results[i];
      const art= document.createElement('div');
      const autore = news.author;
      const title = news.title;
      const descrizione_ = news.content;
      const selected_image = news.urlToImage;
      
      
    
      art.classList.add('art');
      
      const autore1 = document.createElement('h3');
      autore1.textContent = autore;
      const caption = document.createElement('h1');
      caption.textContent = title;
      const descrizione = document.createElement('span');
      descrizione.textContent = descrizione_;
      const img = document.createElement('img');
      img.src = selected_image;
      


      art.appendChild(img);
      art.appendChild(caption);
      art.appendChild(autore1);
      art.appendChild(descrizione);
      library.appendChild(art);
    }
  
    }


