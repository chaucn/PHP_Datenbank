       
        let sortDirection = false;
        // let Abteilungsdaten = [ 
        //     { "name": "Sales Operations", "abteilung": "CS-41", "Ausbildungsberuf": "Iki", "Datum": "21.10.2020"},
        //     { name: "Programmierung Navigations-App", abteilung: "DE-391", Ausbildungsberuf: "FIFA", Datum: "22.10.2020"}
        // ];

        window.onload = () => {
            loadTableData(Abteilungsdaten);
        }

        function loadTableData(Abteilungsdaten) {
            const tableBody = document.getElementById('tableData');
            let dataHtml = "";

            for(let Abteilung of Abteilungsdaten) {
                dataHtml += `<tr class="tableRow">
                <td class="JobName">${Abteilung.kurzbeschreibung}</td>
                <td class="Abteilung">${Abteilung.abteilung}</td>
                <td class="Ausbildungsberuf">${Abteilung.berufsbezeichnung}</td>
                <td class="Datum">Verfübar ab ${Abteilung.besetztBis}</td>
            </tr>`;
            }

            tableBody.innerHTML = dataHtml;
            
        }
