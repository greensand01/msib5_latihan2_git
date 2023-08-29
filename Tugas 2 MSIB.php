<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>

body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f4f4f4;
}

.container {
  max-width: 800px;
  margin: 50px auto;
  padding: 20px;
  background-color: #fff;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

form label,
form input,
form select,
form button {
  display: block;
  margin-bottom: 10px;
}

button {
  background-color: #007bff;
  color: #fff;
  border: none;
  padding: 10px 15px;
  cursor: pointer;
  border-radius: 5px;
}

button:hover {
  background-color: #0056b3;
}

.hidden {
  display: none;
}

table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 20px;
}

table, th, td {
  border: 1px solid #ddd;
}

th, td {
  padding: 8px;
  text-align: left;
}

th {
  background-color: #acacac;
}


  </style>

</head>
<body>
  <div class="container">
    <h1>Hitung Nilai Rata-Rata</h1>
    <form id="gradeForm">
      <label for="nama">Nama Mahasiswa:</label>
      <input type="text" id="nama" required>
      
      <label for="matkul">Mata Kuliah:</label>
      <input type="text" id="matkul" required>
      
      <label for="grade">Grade:</label>
      <select id="grade" required>
        <option value="4">A</option>    
        <option value="3">B</option>
        <option value="2">C</option>
        <option value="1">D</option>
        <option value="0">E</option>
      </select>
      
      <button type="button" id="hitungButton">Hitung</button>
    </form>
    
    <div id="result" class="hidden">
      <h2>Hasil Perhitungan:</h2>
      <table>
        <thead>
          <tr>
            <th>Nama Mahasiswa</th>
            <th>Mata Kuliah</th>
            <th>Grade</th>
            <th>Nilai Rata-rata</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody id="resultTableBody"></tbody>
      </table>
    </div>
  </div>

<script>

document.getElementById("hitungButton").addEventListener("click", function() {
  const nama = document.getElementById("nama").value;
  const matkul = document.getElementById("matkul").value;
  const grade = parseInt(document.getElementById("grade").value);

  const resultTableBody = document.getElementById("resultTableBody");
  const newRow = resultTableBody.insertRow();
  newRow.insertCell().textContent = nama;
  newRow.insertCell().textContent = matkul;
  newRow.insertCell().textContent = grade === 4 ?"A" : grade === 3 ? "B" : grade === 2 ? "C" : grade === 1 ? "D" : "E";
  newRow.insertCell().textContent = grade === 4 ?"4.00" : grade === 3 ? "3.00" : grade === 2 ? "2.00" : grade === 1 ? "1.00" : "0.00" ;
  newRow.insertCell().textContent = grade === 4 ? "LULUS" : grade === 3 ? "LULUS" : "TIDAK LULUS";
  document.getElementById("result").classList.remove("hidden");
});

  </script>
</body>
</html>


