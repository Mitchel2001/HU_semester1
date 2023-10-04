const mysql = require('mysql');

const connection = mysql.createConnection({
  host: 'localhost',
  user: 'root',
  password: '',
  database: 'contact'
});

connection.connect((err) => {
  if (err) {
    console.error('Fout bij het maken van verbinding met MySQL:', err);
    return;
  }
  console.log('Verbonden met MySQL-database');

  // Voer een eenvoudige query uit
  connection.query('SELECT * FROM berichten', (err, rows) => {
    if (err) {
      console.error('Fout bij het uitvoeren van de query:', err);
      return;
    } else {
      console.log('Data ontvangen uit MySQL\n');
      console.log(rows); 
      

      // Selecteer het HTML-element waarin je de gegevens wilt invoegen
      const dataList = document.getElementById('data-list');

      // Loop door de opgehaalde gegevens en voeg deze toe aan de lijst
      rows.forEach((row) => {
        const listItem = document.createElement('li');
        listItem.textContent = `ID: ${row.id}, Naam: ${row.naam}, Email: ${row.email}, Bericht: ${row.bericht}`;
        dataList.appendChild(listItem);
      });
    }
  });
});
