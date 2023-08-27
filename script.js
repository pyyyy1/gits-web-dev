document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("gradeForm");
    const resultTableBody = document.querySelector("#resultTable tbody");
    const hitungButton = document.getElementById("hitungButton");
    const averageValue = document.getElementById("averageValue");

    let totalNilai = 0;
    let totalRows = 0;

    hitungButton.addEventListener("click", function () {
    const nama = document.getElementById("nama").value;
    const mataKuliah = document.getElementById("mataKuliah").value;
    const grade = parseInt(document.getElementById("grade").value);
    let labelGrade;
    if (grade == 4){
        labelGrade = "A"
    }else if(grade == 3){
        labelGrade = "B"
    }else if(grade == 2){
        labelGrade = "C"
    }else if(grade == 1){
        labelGrade = "D"
    }else{
        labelGrade = "E"
    }

    totalNilai += grade;
    totalRows++;

    const nilaiRataRata = totalNilai / totalRows;

    const newRow = `
        <tr>
            <td>${nama}</td>
            <td>${mataKuliah}</td>
            <td>${labelGrade}</td>
            <td>${grade}</td>
        </tr>
    `;

    resultTableBody.innerHTML += newRow;
    averageValue.textContent = nilaiRataRata.toFixed(1);

      // Reset form
    form.reset();
    });
});
