# PHP Hotel

Partendo da questo array di hotel (https://www.codepile.net/pile/OEWY7Q1G), stampare tutti gli hotel con tutti i dati disponibili.

1. Stampare in pagina i dati, senza preoccuparsi dello stile.
2. Aggiungere Bootstrap e mostrare le informazioni con una tabella/card.
3. Bonus - Aggiungere un form ad inizio pagina che tramite una richiesta GET permetta di filtrare gli hotel che hanno un parcheggio.
4. Bonus - Aggiungere un secondo campo al form che permetta di filtrare gli hotel per voto (es. inserisco 3 ed ottengo tutti gli hotel che hanno un voto di tre stelle o superiore)

NOTA: deve essere possibile utilizzare entrambi i filtri contemporaneamente (es. ottenere una lista con hotel che dispongono di parcheggio e che hanno un voto di tre stelle o superiore). Se non viene specificato nessun filtro, visualizzare come in precedenza tutti gli hotel.

## Svolgimento

1. Importare l'array di hotel in index.php
2. Tramite un foreach sull'array di hotel, stampare per ogni singolo hotel tutti i dati
3. Stampare i dati in una card di Bootstrap
4. Inserire un form con una select per filtrare gli hotel con il parcheggio
5. Inserire una condizione if per mostrare la singola card se: a) non è fleggata nessuna opzione b) è fleggata l'opzione "Tutti" c) è fleggata l'opzione che ha lo stesso valore del booleano assegnato alla chiave 'parking'
