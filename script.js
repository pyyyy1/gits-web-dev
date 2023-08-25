document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("gradeForm");
    const resultTableBody = document.querySelector("#resultTable tbody");
    const hitungButton = document.getElementById("hitungButton");

    hitungButton.addEventListener("click", function () {
    const nama = document.getElementById("nama").value;
    const mataKuliah = document.getElementById("mataKuliah").value;
    const grade = parseInt(document.getElementById("grade").value);

    const nilaiRataRata = (4 * grade) / 4; // Menghitung rata-rata dengan skala 4
    const newRow = `
        <tr>
            <td>${nama}</td>
            <td>${mataKuliah}</td>
            <td>${grade}</td>
            <td>${nilaiRataRata.toFixed(2)}</td>
        </tr>
    `;

    resultTableBody.innerHTML += newRow;

      // Reset form
    form.reset();
    });
});
