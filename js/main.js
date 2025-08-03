// Change navbar background and text color on scroll
window.addEventListener('scroll', function () {
    let navbar = document.querySelector('.navbar');
    if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});

// Open PDF when S.O.P button is clicked
document.getElementById("openPdfBtn").addEventListener("click", function () {
    window.open("assets/img/Marketing & Merchandising SOP.pdf", "_blank"); // Update with actual PDF path
});

document.addEventListener("DOMContentLoaded", function () {
    const scrollTopBtn = document.getElementById("scroll-top");

    // Initially hide the button (in case of refresh)
    scrollTopBtn.style.display = "none";

    // Show the button when the user scrolls down more than 200px from the top
    window.addEventListener("scroll", function () {
        if (window.scrollY > 200) {
            scrollTopBtn.style.display = "flex";  // Show the button
        } else {
            scrollTopBtn.style.display = "none";  // Hide the button when near top
        }
    });

    // Smooth Scroll to Top
    scrollTopBtn.addEventListener("click", function (event) {
        event.preventDefault();
        window.scrollTo({ top: 0, behavior: "smooth" });
    });
});

document.getElementById("download-btn").addEventListener("click", function() {
    // PDF file URL (replace with your file)
    var pdfUrl = "assets/img/Resume-of-zia.pdf"; 

    // Create an invisible anchor tag
    var link = document.createElement("a");
    link.href = pdfUrl;
    link.download = "DownloadedFile.pdf";  // Change file name if needed

    // Append to body, trigger download, and remove
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
});

// t-shirt consumption start

function calculate() {
    var body_length = parseFloat(document.getElementById('body_length').value);
    var chest = parseFloat(document.getElementById('chest').value);
    var sleeve_length = parseFloat(document.getElementById('sleeve_length').value);
    var gsm = parseFloat(document.getElementById('gsm').value);
    var wastage = parseFloat(document.getElementById('wastage').value);
  
    var result = (((body_length + sleeve_length + 6) * (chest + 4) * gsm * 2 / 10000000) * 12) * (1 + wastage / 100);
  
    // Round the result to two decimal places
    var roundedResult = result.toFixed(2);
  
    // Display result
    document.getElementById('output').innerText = roundedResult + ' / Kgs Fabric';
  
    // Store the input values and result in the hidden textarea
    document.getElementById('hiddenResult').value = `Body_length: ${body_length}\nChest: ${chest}\nSleeve_length: ${sleeve_length}\nGsm: ${gsm}\nWastage: ${wastage}\nBody Consumption Per Dozen: ${roundedResult}`;
  }
  
  function saveResult() {
    // Retrieve the result with input values from the hidden textarea
    var resultToSave = document.getElementById('hiddenResult').value;
  
    // Prompt the user for a file name
    var fileName = prompt("Enter file name:", "result.txt");
  
    if (fileName) {
        // Create a Blob containing the result
        var blob = new Blob([resultToSave], { type: 'text/plain' });
  
        // Create a link element
        var link = document.createElement('a');
  
        // Set the href attribute with the object URL of the Blob
        link.href = window.URL.createObjectURL(blob);
  
        // Set the download attribute with the desired file name
        link.download = fileName;
  
        // Append the link to the document
        document.body.appendChild(link);
  
        // Programmatically click the link to trigger the download
        link.click();
  
        // Remove the link from the document
        document.body.removeChild(link);
    }
  }
  
  function clearInputs() {
    // Clear the value of the input fields
    document.getElementById('body_length').value = '';
    document.getElementById('chest').value = '';
    document.getElementById('sleeve_length').value = '';
    document.getElementById('gsm').value = '';
    document.getElementById('wastage').value = '';
  
  
    // Clear the result
    document.getElementById('output').innerText = ' ';
  }

  // t-shirt consumption end

  //neck rib co start

  function calculate1() {
    var neck_width = parseFloat(document.getElementById('neck_width').value);
     var front_neckdrop = parseFloat(document.getElementById('front_neckdrop').value);
    
    var rib_height = parseFloat(document.getElementById('rib_height').value);
    var gsm1 = parseFloat(document.getElementById('gsm1').value);
    var wastage1 = parseFloat(document.getElementById('wastage1').value);
  
    var result = (((((neck_width * 2) + 4 + front_neckdrop) * ((rib_height * 2) + 2) * gsm1) / 10000000) * 12) * (1 + wastage1 / 100);
  
    // Round the result to two decimal places
    var roundedResult = result.toFixed(2);
  
    // Display result
    document.getElementById('output1').innerText = roundedResult +  ' / Kgs Rib';
  
    // Store the input values and result in the hidden textarea
    document.getElementById('hiddenResult1').value = `Neck_width: ${neck_width}\nFront_neckdrop: ${front_neckdrop}\nRib_height: ${rib_height}\nGsm: ${gsm1}\nWastage %: ${wastage1}\nNeck Rib Consumption Per Dozen: ${roundedResult}`;
  }
  
  function saveResult1() {
    // Retrieve the result with input values from the hidden textarea
    var resultToSave = document.getElementById('hiddenResult1').value;
  
    // Prompt the user for a file name
    var fileName = prompt("Enter file name:", "result.txt");
  
    if (fileName) {
        // Create a Blob containing the result
        var blob = new Blob([resultToSave], { type: 'text/plain' });
  
        // Create a link element
        var link = document.createElement('a');
  
        // Set the href attribute with the object URL of the Blob
        link.href = window.URL.createObjectURL(blob);
  
        // Set the download attribute with the desired file name
        link.download = fileName;
  
        // Append the link to the document
        document.body.appendChild(link);
  
        // Programmatically click the link to trigger the download
        link.click();
  
        // Remove the link from the document
        document.body.removeChild(link);
    }
  }
  
  function clearInputs1() {
    // Clear the value of the input fields
    document.getElementById('neck_width').value = '';
    document.getElementById('front_neckdrop').value = '';
    document.getElementById('rib_height').value = '';
    document.getElementById('gsm1').value = '';
    document.getElementById('wastage1').value = '';
  
  
    // Clear the result
    document.getElementById('output1').innerText = '';
  }
//neck rib con end  

// TROUSER/LEGGING CON START 

function calculate3() {
    var front_rise = parseFloat(document.getElementById('front_rise').value);
    var back_rise = parseFloat(document.getElementById('back_rise').value);
    var inseam_length = parseFloat(document.getElementById('inseam_length').value);
    var thai = parseFloat(document.getElementById('thai').value);
    var gsm2 = parseFloat(document.getElementById('gsm2').value);
    var waistBandHeight = parseFloat(document.getElementById('waistBandHeight').value);
    var wastage2 = parseFloat(document.getElementById('wastage2').value);
    


   

    //var result = (front_rise + back_rise + inseam_length + thai + gsm2 + wastage2 + waistBandHeight);

    var result = (((((front_rise + back_rise ) / 2) + 4 + (inseam_length + (waistBandHeight * 2) + 6)) * ((thai + 4) * 4) * gsm2 / 10000000) * 12) * (1 + wastage2 / 100);

    // Round the result to two decimal places
    var roundedResult = result.toFixed(2);

    // Display result
    document.getElementById('output3').innerText =  roundedResult + '/ Kgs Fabric';

    // Store the input values and result in the hidden textarea
    document.getElementById('hiddenResult').value = `Front_Rise: ${front_rise}\nBack_Rise: ${back_rise}\nInseam_Length: ${inseam_length}\nWaistBandHeight: ${waistBandHeight}\nThai: ${thai}\nGsm: ${gsm2}\nWastage: ${wastage2}\nBody Consumption Per Dozen: ${roundedResult}`;
}

function saveResult3() {
    // Retrieve the result with input values from the hidden textarea
    var resultToSave = document.getElementById('hiddenResult').value;

    

    // Prompt the user for a file name
    var fileName = prompt("Enter file name:", "result.txt");

    if (fileName) {
        // Create a Blob containing the result
        var blob = new Blob([resultToSave], { type: 'text/plain' });

        // Create a link element
        var link = document.createElement('a');

        // Set the href attribute with the object URL of the Blob
        link.href = window.URL.createObjectURL(blob);

        // Set the download attribute with the desired file name
        link.download = fileName;

        // Append the link to the document
        document.body.appendChild(link);

        // Programmatically click the link to trigger the download
        link.click();

        // Remove the link from the document
        document.body.removeChild(link);
    }


    // Function to create a table from the textarea content
    function createTableFromTextarea() {
        // Get the textarea content
        var textareaContent = document.getElementById('hiddenResult').value;
  
        // Split the content into rows
        var rows = textareaContent.split('\n');
  
        // Create the table element
        var table = document.getElementById('dynamicTable');
  
        // Create rows and cells based on textarea content
        rows.forEach(function(rowContent, rowIndex) {
          var cells = rowContent.split(',');
  
          // Create a new row
          var row = table.insertRow(rowIndex);
  
          // Create cells and populate them with content
          cells.forEach(function(cellContent, cellIndex) {
            var cell = row.insertCell(cellIndex);
            cell.textContent = cellContent.trim();
          });
        });
      }
  
      // Call the function to create the table (you can trigger this based on some event)
      createTableFromTextarea();
}






function clearInputs3() {
    // Clear the value of the input fields
    document.getElementById('front_rise').value = '';
    document.getElementById('back_rise').value = '';
    document.getElementById('inseam_length').value = '';
    document.getElementById('thai').value = '';
    document.getElementById('gsm2').value = '';
    document.getElementById('wastage2').value = '';
    document.getElementById('waistBandHeight').value = '';
   
   

    // Clear the result
    document.getElementById('output3').innerText = ' ';
}


//TROUSER/LEGGING CON END


//trouser Back pocket as like polo shirt start

function calculate8() {
    var pocket_width = parseFloat(document.getElementById('pocket_width').value);
    var pocket_height = parseFloat(document.getElementById('pocket_height').value);
    var gsm8 = parseFloat(document.getElementById('gsm8').value);
    var wastage8 = parseFloat(document.getElementById('wastage8').value);

    var result = (((pocket_width + 4) * (pocket_height + 4) * gsm8 / 10000000) * 12) * (1 + wastage8 / 100);

    // Round the result to two decimal places
    var roundedResult = result.toFixed(2);

    // Display result
    document.getElementById('output8').innerText = roundedResult + '/ Kgs Fabric';

    // Store the input values and result in the hidden textarea
    document.getElementById('hiddenResult').value = `Pocket Width: ${pocket_width}\nPocket Height: ${pocket_height}\nGsm: ${gsm8}\nWastage: ${wastage8}\nPocket Consumption Per Dozen: ${roundedResult}`;
}

function saveResult8() {
    // Retrieve the result with input values from the hidden textarea
    var resultToSave = document.getElementById('hiddenResult').value;

    // Prompt the user for a file name
    var fileName = prompt("Enter file name:", "result.txt");

    if (fileName) {
        // Create a Blob containing the result
        var blob = new Blob([resultToSave], { type: 'text/plain' });

        // Create a link element
        var link = document.createElement('a');

        // Set the href attribute with the object URL of the Blob
        link.href = window.URL.createObjectURL(blob);

        // Set the download attribute with the desired file name
        link.download = fileName;

        // Append the link to the document
        document.body.appendChild(link);

        // Programmatically click the link to trigger the download
        link.click();

        // Remove the link from the document
        document.body.removeChild(link);
    }

    
}

function clearInputs8() {
    // Clear the value of the input fields
    document.getElementById('pocket_width').value = '';
    document.getElementById('pocket_height').value = '';
    document.getElementById('gsm8').value = '';
    document.getElementById('wastage8').value = '';


    // Clear the result
    document.getElementById('output8').innerText = '';
}

//trouser Back pocket as like polo shirt end



//collar consumption start

function calculate9() {
    var collarLength = parseFloat(document.getElementById('collarLength').value);
    var collarHeight = parseFloat(document.getElementById('collarHeight').value);
    var wastage9 = parseFloat(document.getElementById('wastage9').value);
    

    var result = (((collarLength + 1)*(collarHeight + 1)*0.00009090*12))*(1 + wastage9 / 100);

    // Round the result to two decimal places
    var roundedResult = result.toFixed(2);

    // Display result
    document.getElementById('output9').innerText = roundedResult + '/ Kgs Fabric';

    // Store the input values and result in the hidden textarea
    document.getElementById('hiddenResult').value = `Collar Length: ${collarLength}\nCollar Height: ${collarHeight}\nWastage %: ${wastage9}\nCollar Consumption Per Dozen: ${roundedResult}`;
}

function saveResult9() {
    // Retrieve the result with input values from the hidden textarea
    var resultToSave = document.getElementById('hiddenResult').value;

    

    // Prompt the user for a file name
    var fileName = prompt("Enter file name:", "result.txt");

    if (fileName) {
        // Create a Blob containing the result
        var blob = new Blob([resultToSave], { type: 'text/plain' });

        // Create a link element
        var link = document.createElement('a');

        // Set the href attribute with the object URL of the Blob
        link.href = window.URL.createObjectURL(blob);

        // Set the download attribute with the desired file name
        link.download = fileName;

        // Append the link to the document
        document.body.appendChild(link);

        // Programmatically click the link to trigger the download
        link.click();

        // Remove the link from the document
        document.body.removeChild(link);
    }


    // Function to create a table from the textarea content
    function createTableFromTextarea() {
        // Get the textarea content
        var textareaContent = document.getElementById('hiddenResult').value;
  
        // Split the content into rows
        var rows = textareaContent.split('\n');
  
        // Create the table element
        var table = document.getElementById('dynamicTable');
  
        // Create rows and cells based on textarea content
        rows.forEach(function(rowContent, rowIndex) {
          var cells = rowContent.split(',');
  
          // Create a new row
          var row = table.insertRow(rowIndex);
  
          // Create cells and populate them with content
          cells.forEach(function(cellContent, cellIndex) {
            var cell = row.insertCell(cellIndex);
            cell.textContent = cellContent.trim();
          });
        });
      }
  
      // Call the function to create the table (you can trigger this based on some event)
      createTableFromTextarea();
}






function clearInputs9() {
    // Clear the value of the input fields
    document.getElementById('collarLength').value = '';
    document.getElementById('collarHeight').value = '';
    document.getElementById('wastage9').value = '';
   


    // Clear the result
    document.getElementById('output9').innerText = '';
}


//collar consumption end



//cuff consumption start

function calculate10() {
    var sleeveOpening = parseFloat(document.getElementById('sleeveOpening').value);
    var cuffHeight = parseFloat(document.getElementById('cuffHeight').value);
    var wastage10 = parseFloat(document.getElementById('wastage10').value);
    

    var result = (((((sleeveOpening * 2) + 2) * (cuffHeight + 2) * 2) * 0.00009090*12))*(1 + wastage10 / 100);

    // Round the result to two decimal places
    var roundedResult = result.toFixed(2);

    // Display result
    document.getElementById('output10').innerText = roundedResult + ' / Kgs Fabric';

    // Store the input values and result in the hidden textarea
    document.getElementById('hiddenResult').value = `Sleeve Opening: ${sleeveOpening}\nCuff Height: ${cuffHeight}\nWastage %: ${wastage10}\nCuff Consumption Per Dozen: ${roundedResult}`;
}

function saveResult10() {
    // Retrieve the result with input values from the hidden textarea
    var resultToSave = document.getElementById('hiddenResult').value;

    

    // Prompt the user for a file name
    var fileName = prompt("Enter file name:", "result.txt");

    if (fileName) {
        // Create a Blob containing the result
        var blob = new Blob([resultToSave], { type: 'text/plain' });

        // Create a link element
        var link = document.createElement('a');

        // Set the href attribute with the object URL of the Blob
        link.href = window.URL.createObjectURL(blob);

        // Set the download attribute with the desired file name
        link.download = fileName;

        // Append the link to the document
        document.body.appendChild(link);

        // Programmatically click the link to trigger the download
        link.click();

        // Remove the link from the document
        document.body.removeChild(link);
    }


    // Function to create a table from the textarea content
    function createTableFromTextarea() {
        // Get the textarea content
        var textareaContent = document.getElementById('hiddenResult').value;
  
        // Split the content into rows
        var rows = textareaContent.split('\n');
  
        // Create the table element
        var table = document.getElementById('dynamicTable');
  
        // Create rows and cells based on textarea content
        rows.forEach(function(rowContent, rowIndex) {
          var cells = rowContent.split(',');
  
          // Create a new row
          var row = table.insertRow(rowIndex);
  
          // Create cells and populate them with content
          cells.forEach(function(cellContent, cellIndex) {
            var cell = row.insertCell(cellIndex);
            cell.textContent = cellContent.trim();
          });
        });
      }
  
      // Call the function to create the table (you can trigger this based on some event)
      createTableFromTextarea();
}






function clearInputs10() {
    // Clear the value of the input fields
    document.getElementById('sleeveOpening').value = '';
    document.getElementById('cuffHeight').value = '';
    document.getElementById('wastage10').value = '';
   


    // Clear the result
    document.getElementById('output10').innerText = '';
}


//cuff consumption end



//costing start
  
function calculate7() {
    var consumption = parseFloat(document.getElementById('consumption').value);
    var spandex = parseFloat(document.getElementById('spandex').value);
    var yarnPrice = parseFloat(document.getElementById('yarnPrice').value);
    var spandexPrice = parseFloat(document.getElementById('spandexPrice').value);
    var knittingPrice = parseFloat(document.getElementById('knittingPrice').value);
    var dyeingPrice = parseFloat(document.getElementById('dyeingPrice').value);
    var alloverPrintPrice = parseFloat(document.getElementById('alloverPrintPrice').value);
    var chestPrintPrice = parseFloat(document.getElementById('chestPrintPrice').value);
    var accessoriesPrice = parseFloat(document.getElementById('accessoriesPrice').value);
    var costOfMaking = parseFloat(document.getElementById('costOfMaking').value);
    var commercialCharges = parseFloat(document.getElementById('commercialCharges').value);
    var handlingCharge = parseFloat(document.getElementById('handlingCharge').value);



    

    var result = (((( consumption * yarnPrice) + (spandex * spandexPrice) + (consumption * knittingPrice) + (consumption * dyeingPrice)) + alloverPrintPrice + chestPrintPrice + accessoriesPrice + costOfMaking) * (1 + (commercialCharges + handlingCharge) / 100)) / 12;

    // Round the result to two decimal places
    var roundedResult = result.toFixed(2);

    // Display result
    document.getElementById('output7').innerText = '$' + roundedResult;

    // Store the input values and result in the hidden textarea
    document.getElementById('hiddenResult').value = `Consumption: ${consumption}\nSpandex: ${spandex}\nYarn Price: ${yarnPrice}\nSpandex Price: ${spandexPrice}\nKnitting Price: ${knittingPrice}\nDyeing Price: ${dyeingPrice}\nAllover Print Price: ${alloverPrintPrice}\nChest Print Price: ${chestPrintPrice}\nAccessories Price: ${accessoriesPrice}\nCost Of Making: ${costOfMaking}\nCommercial Charges: ${commercialCharges}\nHandling Charge: ${handlingCharge}\nPrice Per Piece: ${roundedResult}`;
}

function saveResult7() {
    // Retrieve the result with input values from the hidden textarea
    var resultToSave = document.getElementById('hiddenResult').value;

    

    // Prompt the user for a file name
    var fileName = prompt("Enter file name:", "result.txt");

    if (fileName) {
        // Create a Blob containing the result
        var blob = new Blob([resultToSave], { type: 'text/plain' });

        // Create a link element
        var link = document.createElement('a');

        // Set the href attribute with the object URL of the Blob
        link.href = window.URL.createObjectURL(blob);

        // Set the download attribute with the desired file name
        link.download = fileName;

        // Append the link to the document
        document.body.appendChild(link);

        // Programmatically click the link to trigger the download
        link.click();

        // Remove the link from the document
        document.body.removeChild(link);
    }


    // Function to create a table from the textarea content
    function createTableFromTextarea() {
        // Get the textarea content
        var textareaContent = document.getElementById('hiddenResult').value;
  
        // Split the content into rows
        var rows = textareaContent.split('\n');
  
        // Create the table element
        var table = document.getElementById('dynamicTable');
  
        // Create rows and cells based on textarea content
        rows.forEach(function(rowContent, rowIndex) {
          var cells = rowContent.split(',');
  
          // Create a new row
          var row = table.insertRow(rowIndex);
  
          // Create cells and populate them with content
          cells.forEach(function(cellContent, cellIndex) {
            var cell = row.insertCell(cellIndex);
            cell.textContent = cellContent.trim();
          });
        });
      }
  
      // Call the function to create the table (you can trigger this based on some event)
      createTableFromTextarea();
}






function clearInputs7() {
    // Clear the value of the input fields
    document.getElementById('consumption').value = '';
    document.getElementById('spandex').value = '';
    document.getElementById('yarnPrice').value = '';
    document.getElementById('spandexPrice').value = '';
    document.getElementById('knittingPrice').value = '';
    document.getElementById('dyeingPrice').value = '';
    document.getElementById('chestPrintPrice').value = '';
    document.getElementById('alloverPrintPrice').value = '';
    document.getElementById('accessoriesPrice').value = '';
    document.getElementById('costOfMaking').value = '';
    document.getElementById('commercialCharges').value = '';
    document.getElementById('handlingCharge').value = '';
   


    // Clear the result
    document.getElementById('output7').innerText = '';
}


//costing end


//yarn count start

//fleece start

function showAdditionalInfo() {
    var select = document.getElementById("mySelect");
    var additionalInfo = document.getElementById("additionalInfo");
    var infoText = document.getElementById("infoText");

    var selectedOption = select.options[select.selectedIndex].value;

    if (selectedOption === "Select GSM for Fleece fabric") {
        additionalInfo.style.display = "none"; // Hide if default option is selected
        return;
    }

    switch (selectedOption) {
        case "200":
            infoText.innerText = "36/S , 12/S, 75D. For three thread fleece fabric need polyester binder for the middle loop";
            break;
        case "220":
            infoText.innerText = "36/S , 14/S, 75D. For three thread fleece fabric need polyester binder for the middle loop ";
            break;
        case "240":
            infoText.innerText = "34/S , 16/S, 75D. For three thread fleece fabric need polyester binder for the middle loop.";
            break;
        case "260":
            infoText.innerText = "32/S , 18/S, 75D. For three thread fleece fabric need polyester binder for the middle loop.";
            break;
        case "280":
            infoText.innerText = "30/S , 20/S, 75D. For three thread fleece fabric need polyester binder for the middle loop.";
            break;
        case "300":
            infoText.innerText = "30/S , 20/S, 75D. For three thread fleece fabric need polyester binder for the middle loop.";
            break;
        case "320":
            infoText.innerText = "28/S , 20/S, 75D. For three thread fleece fabric need polyester binder for the middle loop.";
            break;
        case "340":
            infoText.innerText = "28/S , 22/S, 75D. For three thread fleece fabric need polyester binder for the middle loop.";
            break;
        default:
            infoText.innerText = "";
    }

    additionalInfo.style.display = "block"; // Show only when an option is selected
}



  function hideAdditionalInfo() {
    var select = document.getElementById("mySelect");
    var additionalInfo = document.getElementById("additionalInfo");
    var infoText = document.getElementById("infoText");


    

    // Reset the selected option to the default option
    select.selectedIndex = 0;

    // Reset the content and hide the additional information block
    infoText.innerText = "";
    additionalInfo.style.display = "none";
  }

  //fleece end

//s/j start


  function showAdditionalInfoNew() {
    var selectElement = document.getElementById("mySelectNew");
    var infoTextElement = document.getElementById("infoTextNew");
    var additionalInfoElement = document.getElementById("additionalInfoNew");

    var selectedValue = selectElement.value;

    // Update the information text based on the selected value
    infoTextElement.textContent = "Yarn Count: " + (4320 / selectedValue).toFixed(2);

    // Show the additional information div
    additionalInfoElement.style.display = "block";
}

function hideAdditionalInfoNew() {
    var additionalInfoElement = document.getElementById("additionalInfoNew");
    var selectElement = document.getElementById("mySelectNew");

    // Reset the selectedIndex to 0 when hiding additional info
    selectElement.selectedIndex = 0;

    // Optionally, you may want to trigger the change event if there are event listeners
    var event = new Event('change');
    selectElement.dispatchEvent(event);

    additionalInfoElement.style.display = "none";
}

//s/j end

//terry start
function showAdditionalInfoNew1() {
    var selectElement = document.getElementById("mySelectNew1");
    var infoTextElement = document.getElementById("infoTextNew1");
    var additionalInfoElement = document.getElementById("additionalInfoNew1");

    var selectedValue = selectElement.value;

    // Update the information text based on the selected value
    infoTextElement.textContent = "Yarn Count: " + (6240 / selectedValue).toFixed(2);

    // Show the additional information div
    additionalInfoElement.style.display = "block";
}

function hideAdditionalInfoNew1() {
    var additionalInfoElement = document.getElementById("additionalInfoNew1");
    var selectElement = document.getElementById("mySelectNew1");

    

    // Reset the selectedIndex to 0 when hiding additional info
    selectElement.selectedIndex = 0;

    // Optionally, you may want to trigger the change event if there are event listeners
    var event = new Event('change');
    selectElement.dispatchEvent(event);

    additionalInfoElement.style.display = "none";
}


//terry end


//interlock start


function showAdditionalInfoNew2() {
    var selectElement = document.getElementById("mySelectNew2");
    var infoTextElement = document.getElementById("infoTextNew2");
    var additionalInfoElement = document.getElementById("additionalInfoNew2");

    var selectedValue = parseFloat(selectElement.value);

    // Check if selectedValue is not zero before performing the division
    if (selectedValue !== 0) {
        // Update the information text based on the selected value
        infoTextElement.textContent = "Yarn Count: " + (7200 / selectedValue).toFixed(2);
    } else {
        // Handle the case where selectedValue is zero (or not a valid number)
        infoTextElement.textContent = "Invalid selection";
    }

    // Show the additional information div
    additionalInfoElement.style.display = "block";
}

function hideAdditionalInfoNew2() {
    var additionalInfoElement = document.getElementById("additionalInfoNew2");
    var selectElement = document.getElementById("mySelectNew2");

    // Reset the selectedIndex to 0 when hiding additional info
    selectElement.selectedIndex = 0;

    // Optionally, you may want to trigger the change event if there are event listeners
    var event = new Event('change');
    selectElement.dispatchEvent(event);

    additionalInfoElement.style.display = "none";
}



//interlock end

//pique start


function showAdditionalInfoNew3() {
    var selectElement = document.getElementById("mySelectNew3");
    var infoTextElement = document.getElementById("infoTextNew3");
    var additionalInfoElement = document.getElementById("additionalInfoNew3");

    var selectedValue = parseFloat(selectElement.value);

    // Check if selectedValue is not zero before performing the division
    if (selectedValue !== 0) {
        // Update the information text based on the selected value
        infoTextElement.textContent = "Yarn Count: " + (5200 / selectedValue).toFixed(2);
    } else {
        // Handle the case where selectedValue is zero (or not a valid number)
        infoTextElement.textContent = "Invalid selection";
    }

    // Show the additional information div
    additionalInfoElement.style.display = "block";
}

function hideAdditionalInfoNew3() {
    var additionalInfoElement = document.getElementById("additionalInfoNew3");
    var selectElement = document.getElementById("mySelectNew3");

    // Reset the selectedIndex to 0 when hiding additional info
    selectElement.selectedIndex = 0;

    // Optionally, you may want to trigger the change event if there are event listeners
    var event = new Event('change');
    selectElement.dispatchEvent(event);

    additionalInfoElement.style.display = "none";
}



//pique end


//LACOST start


function showAdditionalInfoNew4() {
    var selectElement = document.getElementById("mySelectNew4");
    var infoTextElement = document.getElementById("infoTextNew4");
    var additionalInfoElement = document.getElementById("additionalInfoNew4");

    var selectedValue = parseFloat(selectElement.value);

    // Check if selectedValue is not zero before performing the division
    if (selectedValue !== 0) {
        // Update the information text based on the selected value
        infoTextElement.textContent = "Yarn Count: " + (5500 / selectedValue).toFixed(2);
    } else {
        // Handle the case where selectedValue is zero (or not a valid number)
        infoTextElement.textContent = "Invalid selection";
    }

    // Show the additional information div
    additionalInfoElement.style.display = "block";
}

function hideAdditionalInfoNew4() {
    var additionalInfoElement = document.getElementById("additionalInfoNew4");
    var selectElement = document.getElementById("mySelectNew4");

    // Reset the selectedIndex to 0 when hiding additional info
    selectElement.selectedIndex = 0;

    // Optionally, you may want to trigger the change event if there are event listeners
    var event = new Event('change');
    selectElement.dispatchEvent(event);

    additionalInfoElement.style.display = "none";
}



//LACOST end






//laycra fleece start


function showAdditionalInfoNew5() {
    var selectElement = document.getElementById("mySelectNew5");
    var infoTextElement = document.getElementById("infoTextNew5");
    var additionalInfoElement = document.getElementById("additionalInfoNew5");

    var selectedValue = parseFloat(selectElement.value);

    // Check if selectedValue is not zero before performing the division
    if (selectedValue !== 0) {
        // Update the information text based on the selected value
        infoTextElement.textContent = "Yarn Count: " + (7200 / (selectedValue - 50)).toFixed(2);
    } else {
        // Handle the case where selectedValue is zero (or not a valid number)
        infoTextElement.textContent = "Invalid selection";
    }

    // Show the additional information div
    additionalInfoElement.style.display = "block";
}

function hideAdditionalInfoNew5() {
    var additionalInfoElement = document.getElementById("additionalInfoNew5");
    var selectElement = document.getElementById("mySelectNew5");

    // Reset the selectedIndex to 0 when hiding additional info
    selectElement.selectedIndex = 0;

    // Optionally, you may want to trigger the change event if there are event listeners
    var event = new Event('change');
    selectElement.dispatchEvent(event);

    additionalInfoElement.style.display = "none";
}



//laycra fleece end

//laycra s/j start


function showAdditionalInfoNew6() {
    var selectElement = document.getElementById("mySelectNew6");
    var infoTextElement = document.getElementById("infoTextNew6");
    var additionalInfoElement = document.getElementById("additionalInfoNew6");

    var selectedValue = parseFloat(selectElement.value);

    // Check if selectedValue is not zero before performing the division
    if (selectedValue !== 0) {
        // Update the information text based on the selected value
        infoTextElement.textContent = "Yarn Count: " + (4320 / (selectedValue - 50)).toFixed(2);
    } else {
        // Handle the case where selectedValue is zero (or not a valid number)
        infoTextElement.textContent = "Invalid selection";
    }

    // Show the additional information div
    additionalInfoElement.style.display = "block";
}

function hideAdditionalInfoNew6() {
    var additionalInfoElement = document.getElementById("additionalInfoNew6");
    var selectElement = document.getElementById("mySelectNew6");

    // Reset the selectedIndex to 0 when hiding additional info
    selectElement.selectedIndex = 0;

    // Optionally, you may want to trigger the change event if there are event listeners
    var event = new Event('change');
    selectElement.dispatchEvent(event);

    additionalInfoElement.style.display = "none";
}



//laycra s/j end


//laycra terry start


function showAdditionalInfoNew7() {
    var selectElement = document.getElementById("mySelectNew7");
    var infoTextElement = document.getElementById("infoTextNew7");
    var additionalInfoElement = document.getElementById("additionalInfoNew7");

    var selectedValue = parseFloat(selectElement.value);

    // Check if selectedValue is not zero before performing the division
    if (selectedValue !== 0) {
        // Update the information text based on the selected value
        infoTextElement.textContent = "Yarn Count: " + (6240 / (selectedValue - 50)).toFixed(2);
    } else {
        // Handle the case where selectedValue is zero (or not a valid number)
        infoTextElement.textContent = "Invalid selection";
    }

    // Show the additional information div
    additionalInfoElement.style.display = "block";
}

function hideAdditionalInfoNew7() {
    var additionalInfoElement = document.getElementById("additionalInfoNew7");
    var selectElement = document.getElementById("mySelectNew7");

    // Reset the selectedIndex to 0 when hiding additional info
    selectElement.selectedIndex = 0;

    // Optionally, you may want to trigger the change event if there are event listeners
    var event = new Event('change');
    selectElement.dispatchEvent(event);

    additionalInfoElement.style.display = "none";
}



//laycra terry end


//laycra interlock start


function showAdditionalInfoNew8() {
    var selectElement = document.getElementById("mySelectNew8");
    var infoTextElement = document.getElementById("infoTextNew8");
    var additionalInfoElement = document.getElementById("additionalInfoNew8");

    var selectedValue = parseFloat(selectElement.value);

    // Check if selectedValue is not zero before performing the division
    if (selectedValue !== 0) {
        // Update the information text based on the selected value
        infoTextElement.textContent = "Yarn Count: " + (7200 / (selectedValue - 50)).toFixed(2);
    } else {
        // Handle the case where selectedValue is zero (or not a valid number)
        infoTextElement.textContent = "Invalid selection";
    }

    // Show the additional information div
    additionalInfoElement.style.display = "block";
}

function hideAdditionalInfoNew8() {
    var additionalInfoElement = document.getElementById("additionalInfoNew8");
    var selectElement = document.getElementById("mySelectNew8");

    // Reset the selectedIndex to 0 when hiding additional info
    selectElement.selectedIndex = 0;

    // Optionally, you may want to trigger the change event if there are event listeners
    var event = new Event('change');
    selectElement.dispatchEvent(event);

    additionalInfoElement.style.display = "none";
}



//laycra interlock end

//laycra pique start


function showAdditionalInfoNew9() {
    var selectElement = document.getElementById("mySelectNew9");
    var infoTextElement = document.getElementById("infoTextNew9");
    var additionalInfoElement = document.getElementById("additionalInfoNew9");

    var selectedValue = parseFloat(selectElement.value);

    // Check if selectedValue is not zero before performing the division
    if (selectedValue !== 0) {
        // Update the information text based on the selected value
        infoTextElement.textContent = "Yarn Count: " + (5200 / (selectedValue - 50)).toFixed(2);
    } else {
        // Handle the case where selectedValue is zero (or not a valid number)
        infoTextElement.textContent = "Invalid selection";
    }

    // Show the additional information div
    additionalInfoElement.style.display = "block";
}

function hideAdditionalInfoNew9() {
    var additionalInfoElement = document.getElementById("additionalInfoNew9");
    var selectElement = document.getElementById("mySelectNew9");

    // Reset the selectedIndex to 0 when hiding additional info
    selectElement.selectedIndex = 0;

    // Optionally, you may want to trigger the change event if there are event listeners
    var event = new Event('change');
    selectElement.dispatchEvent(event);

    additionalInfoElement.style.display = "none";
}



//laycra pique end


//laycra lacost start


function showAdditionalInfoNew10() {
    var selectElement = document.getElementById("mySelectNew10");
    var infoTextElement = document.getElementById("infoTextNew10");
    var additionalInfoElement = document.getElementById("additionalInfoNew10");

    var selectedValue = parseFloat(selectElement.value);

    // Check if selectedValue is not zero before performing the division
    if (selectedValue !== 0) {
        // Update the information text based on the selected value
        infoTextElement.textContent = "Yarn Count: " + (5200 / (selectedValue - 50)).toFixed(2);
    } else {
        // Handle the case where selectedValue is zero (or not a valid number)
        infoTextElement.textContent = "Invalid selection";
    }

    // Show the additional information div
    additionalInfoElement.style.display = "block";
}

function hideAdditionalInfoNew10() {
    var additionalInfoElement = document.getElementById("additionalInfoNew10");
    var selectElement = document.getElementById("mySelectNew10");

    // Reset the selectedIndex to 0 when hiding additional info
    selectElement.selectedIndex = 0;

    // Optionally, you may want to trigger the change event if there are event listeners
    var event = new Event('change');
    selectElement.dispatchEvent(event);

    additionalInfoElement.style.display = "none";
}



//laycra lacost end



//laycra 1 X 1 RIB COTTON start


function showAdditionalInfoNew11() {
    var selectElement = document.getElementById("mySelectNew11");
    var infoTextElement = document.getElementById("infoTextNew11");
    var additionalInfoElement = document.getElementById("additionalInfoNew11");

    var selectedValue = parseFloat(selectElement.value);

    // Check if selectedValue is not zero before performing the division
    if (selectedValue !== 0) {
        // Update the information text based on the selected value
        infoTextElement.textContent = "Yarn Count: " + (6000 / selectedValue).toFixed(2);
    } else {
        // Handle the case where selectedValue is zero (or not a valid number)
        infoTextElement.textContent = "Invalid selection";
    }

    // Show the additional information div
    additionalInfoElement.style.display = "block";
}

function hideAdditionalInfoNew11() {
    var additionalInfoElement = document.getElementById("additionalInfoNew11");
    var selectElement = document.getElementById("mySelectNew11");

    // Reset the selectedIndex to 0 when hiding additional info
    selectElement.selectedIndex = 0;

    // Optionally, you may want to trigger the change event if there are event listeners
    var event = new Event('change');
    selectElement.dispatchEvent(event);

    additionalInfoElement.style.display = "none";
}



//laycra 1 X 1 RIB COTTON end


//laycra 2 X 1 RIB COTTON start


function showAdditionalInfoNew12() {
    var selectElement = document.getElementById("mySelectNew12");
    var infoTextElement = document.getElementById("infoTextNew12");
    var additionalInfoElement = document.getElementById("additionalInfoNew12");

    var selectedValue = parseFloat(selectElement.value);

    // Check if selectedValue is not zero before performing the division
    if (selectedValue !== 0) {
        // Update the information text based on the selected value
        infoTextElement.textContent = "Yarn Count: " + (6250 / selectedValue).toFixed(2);
    } else {
        // Handle the case where selectedValue is zero (or not a valid number)
        infoTextElement.textContent = "Invalid selection";
    }

    // Show the additional information div
    additionalInfoElement.style.display = "block";
}

function hideAdditionalInfoNew12() {
    var additionalInfoElement = document.getElementById("additionalInfoNew12");
    var selectElement = document.getElementById("mySelectNew12");

    // Reset the selectedIndex to 0 when hiding additional info
    selectElement.selectedIndex = 0;

    // Optionally, you may want to trigger the change event if there are event listeners
    var event = new Event('change');
    selectElement.dispatchEvent(event);

    additionalInfoElement.style.display = "none";
}



//laycra 2 X 1 RIB COTTON end


//laycra 1 X 1 RIB laycra start


function showAdditionalInfoNew13() {
    var selectElement = document.getElementById("mySelectNew13");
    var infoTextElement = document.getElementById("infoTextNew13");
    var additionalInfoElement = document.getElementById("additionalInfoNew13");

    var selectedValue = parseFloat(selectElement.value);

    // Check if selectedValue is not zero before performing the division
    if (selectedValue !== 0) {
        // Update the information text based on the selected value
        infoTextElement.textContent = "Yarn Count: " + (6000 / (selectedValue - 50)).toFixed(2);
    } else {
        // Handle the case where selectedValue is zero (or not a valid number)
        infoTextElement.textContent = "Invalid selection";
    }

    // Show the additional information div
    additionalInfoElement.style.display = "block";
}

function hideAdditionalInfoNew13() {
    var additionalInfoElement = document.getElementById("additionalInfoNew13");
    var selectElement = document.getElementById("mySelectNew13");

    // Reset the selectedIndex to 0 when hiding additional info
    selectElement.selectedIndex = 0;

    // Optionally, you may want to trigger the change event if there are event listeners
    var event = new Event('change');
    selectElement.dispatchEvent(event);

    additionalInfoElement.style.display = "none";
}

function showAdditionalInfoNew14() {
    var selectElement = document.getElementById("mySelectNew14");
    var infoTextElement = document.getElementById("infoTextNew14");
    var additionalInfoElement = document.getElementById("additionalInfoNew14");

    var selectedValue = parseFloat(selectElement.value);

    // Check if selectedValue is not zero before performing the division
    if (selectedValue !== 0) {
        // Update the information text based on the selected value
        infoTextElement.textContent = "Yarn Count: " + (6250 / (selectedValue - 50)).toFixed(2);
    } else {
        // Handle the case where selectedValue is zero (or not a valid number)
        infoTextElement.textContent = "Invalid selection";
    }

    // Show the additional information div
    additionalInfoElement.style.display = "block";
}

function hideAdditionalInfoNew14() {
    var additionalInfoElement = document.getElementById("additionalInfoNew14");
    var selectElement = document.getElementById("mySelectNew14");

    // Reset the selectedIndex to 0 when hiding additional info
    selectElement.selectedIndex = 0;

    // Optionally, you may want to trigger the change event if there are event listeners
    var event = new Event('change');
    selectElement.dispatchEvent(event);

    additionalInfoElement.style.display = "none";
}



//laycra 1 X 1 RIB laycra end

//yarn count end

//cm start



function calculate6() {
    var quantityOfMachines = parseFloat(document.getElementById('quantityOfMachines').value);
    var productionQuantity = parseFloat(document.getElementById('productionQuantity').value);
    var costPerMachine = parseFloat(document.getElementById('costPerMachine').value);
    

    var result = (((quantityOfMachines * costPerMachine) / productionQuantity) * 12 );

    // Round the result to two decimal places
    var roundedResult = result.toFixed(2);

    // Display result
    document.getElementById('output6').innerText = '$' + roundedResult;

    // Store the input values and result in the hidden textarea
    document.getElementById('hiddenResult').value = `Quantity Of Machines: ${quantityOfMachines}\nProduction Quantity: ${productionQuantity}\nCost Per Machine: ${costPerMachine}\nC.M Per Dozen: ${roundedResult}`;
}

function saveResult6() {
    // Retrieve the result with input values from the hidden textarea
    var resultToSave = document.getElementById('hiddenResult').value;

    

    // Prompt the user for a file name
    var fileName = prompt("Enter file name:", "result.txt");

    if (fileName) {
        // Create a Blob containing the result
        var blob = new Blob([resultToSave], { type: 'text/plain' });

        // Create a link element
        var link = document.createElement('a');

        // Set the href attribute with the object URL of the Blob
        link.href = window.URL.createObjectURL(blob);

        // Set the download attribute with the desired file name
        link.download = fileName;

        // Append the link to the document
        document.body.appendChild(link);

        // Programmatically click the link to trigger the download
        link.click();

        // Remove the link from the document
        document.body.removeChild(link);
    }


    // Function to create a table from the textarea content
    function createTableFromTextarea() {
        // Get the textarea content
        var textareaContent = document.getElementById('hiddenResult').value;
  
        // Split the content into rows
        var rows = textareaContent.split('\n');
  
        // Create the table element
        var table = document.getElementById('dynamicTable');
  
        // Create rows and cells based on textarea content
        rows.forEach(function(rowContent, rowIndex) {
          var cells = rowContent.split(',');
  
          // Create a new row
          var row = table.insertRow(rowIndex);
  
          // Create cells and populate them with content
          cells.forEach(function(cellContent, cellIndex) {
            var cell = row.insertCell(cellIndex);
            cell.textContent = cellContent.trim();
          });
        });
      }
  
      // Call the function to create the table (you can trigger this based on some event)
      createTableFromTextarea();
}


function clearInputs6() {
    // Clear the value of the input fields
    document.getElementById('quantityOfMachines').value = '';
    document.getElementById('productionQuantity').value = '';
    document.getElementById('costPerMachine').value = '';
   


    // Clear the result
    document.getElementById('output6').innerText = '';
}


//cm end


//cm2 START
function calculate15() {
    var A = parseFloat(document.getElementById('A').value);
    var B = parseFloat(document.getElementById('B').value);
    var C = parseFloat(document.getElementById('C').value);
    var D = parseFloat(document.getElementById('D').value);
    var E = parseFloat(document.getElementById('E').value);
    var F = parseFloat(document.getElementById('F').value);
    

    var result = (((A / E) / B) * C) / (D * F) * 12;


    // Round the result to two decimal places
    var roundedResult = result.toFixed(2);

    // Display result
    document.getElementById('output15').innerText = '$' + roundedResult;

    // Store the input values and result in the hidden textarea
    document.getElementById('hiddenResult').value = `Total monthly expenses: ${A}\nTotal number of machines used for production: ${B}\nNumber of machines used per layout: ${C}\nProduction target per hour: ${D}\nWorking days in a month: ${E}\nWorking hours per day: ${F}\nC.M Per Dozen: ${roundedResult}`;
}

function saveResult15() {
    // Retrieve the result with input values from the hidden textarea
    var resultToSave = document.getElementById('hiddenResult').value;

    

    // Prompt the user for a file name
    var fileName = prompt("Enter file name:", "result.txt");

    if (fileName) {
        // Create a Blob containing the result
        var blob = new Blob([resultToSave], { type: 'text/plain' });

        // Create a link element
        var link = document.createElement('a');

        // Set the href attribute with the object URL of the Blob
        link.href = window.URL.createObjectURL(blob);

        // Set the download attribute with the desired file name
        link.download = fileName;

        // Append the link to the document
        document.body.appendChild(link);

        // Programmatically click the link to trigger the download
        link.click();

        // Remove the link from the document
        document.body.removeChild(link);
    }


    // Function to create a table from the textarea content
    function createTableFromTextarea() {
        // Get the textarea content
        var textareaContent = document.getElementById('hiddenResult').value;
  
        // Split the content into rows
        var rows = textareaContent.split('\n');
  
        // Create the table element
        var table = document.getElementById('dynamicTable');
  
        // Create rows and cells based on textarea content
        rows.forEach(function(rowContent, rowIndex) {
          var cells = rowContent.split(',');
  
          // Create a new row
          var row = table.insertRow(rowIndex);
  
          // Create cells and populate them with content
          cells.forEach(function(cellContent, cellIndex) {
            var cell = row.insertCell(cellIndex);
            cell.textContent = cellContent.trim();
          });
        });
      }
  
      // Call the function to create the table (you can trigger this based on some event)
      createTableFromTextarea();
}


function clearInputs15() {
    // Clear the value of the input fields
    document.getElementById('A').value = '';
    document.getElementById('B').value = '';
    document.getElementById('C').value = '';
    document.getElementById('D').value = '';
    document.getElementById('E').value = '';
    document.getElementById('F').value = '';
   


    // Clear the result
    document.getElementById('output15').innerText = '';
}


//cm2 end