<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">Simple Calculator</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <input type="text" id="display" class="form-control" placeholder="0" readonly>
                            </div>
                            <div class="btn-group btn-group-lg w-100">
                                <button type="button" class="btn btn-light" onclick="appendToDisplay('1')">1</button>
                                <button type="button" class="btn btn-light" onclick="appendToDisplay('2')">2</button>
                                <button type="button" class="btn btn-light" onclick="appendToDisplay('3')">3</button>
                                <button type="button" class="btn btn-warning" onclick="appendToDisplay('+')">+</button>
                            </div>
                            <div class="btn-group btn-group-lg w-100 mt-2">
                                <button type="button" class="btn btn-light" onclick="appendToDisplay('4')">4</button>
                                <button type="button" class="btn btn-light" onclick="appendToDisplay('5')">5</button>
                                <button type="button" class="btn btn-light" onclick="appendToDisplay('6')">6</button>
                                <button type="button" class="btn btn-warning" onclick="appendToDisplay('-')">-</button>
                            </div>
                            <div class="btn-group btn-group-lg w-100 mt-2">
                                <button type="button" class="btn btn-light" onclick="appendToDisplay('7')">7</button>
                                <button type="button" class="btn btn-light" onclick="appendToDisplay('8')">8</button>
                                <button type="button" class="btn btn-light" onclick="appendToDisplay('9')">9</button>
                                <button type="button" class="btn btn-warning" onclick="appendToDisplay('*')">*</button>
                            </div>
                            <div class="btn-group btn-group-lg w-100 mt-2">
                                <button type="button" class="btn btn-light" onclick="appendToDisplay('0')">0</button>
                                <button type="button" class="btn btn-warning" onclick="clearDisplay()">C</button>
                                <button type="button" class="btn btn-success" onclick="calculate()"> = </button>
                                <button type="button" class="btn btn-warning" onclick="appendToDisplay('/')">/</button>
                            </div>
                            <div class="btn-group btn-group-lg w-100 mt-2">
                                <button type="button" class="btn btn-light" onclick="convertNumber('binary')">Binary</button>
                                <button type="button" class="btn btn-light" onclick="convertNumber('hex')">Hex</button>
                                <button type="button" class="btn btn-light" onclick="convertNumber('octal')">Octal</button>
                                <button type="button" class="btn btn-light" onclick="convertNumber('decimal')">Decimal</button>
                            </div>
                            <div class="btn-group btn-group-lg w-100 mt-2">
                                <button type="button" class="btn btn-light" onclick="convertCurrency('usd')">USD</button>
                                <button type="button" class="btn btn-light" onclick="convertCurrency('eur')">EUR</button>
                                <button type="button" class="btn btn-light" onclick="convertCurrency('gbp')">GBP</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        let displayValue = "";

        function appendToDisplay(value) {
            displayValue += value;
            document.getElementById("display").value = displayValue;
        }

        function clearDisplay() {
            displayValue = "";
            document.getElementById("display").value = "0";
        }

        function calculate() {
            try {
                displayValue = eval(displayValue).toString();
                document.getElementById("display").value = displayValue;
            } catch (error) {
                document.getElementById("display").value = "Error";
            }
        }

        function convertNumber(base) {
            const currentValue = parseFloat(displayValue);
            if (!isNaN(currentValue)) {
                if (base === "binary") {
                    displayValue = currentValue.toString(2);
                } else if (base === "hex") {
                    displayValue = currentValue.toString(16).toUpperCase();
                } else if (base === "octal") {
                    displayValue = currentValue.toString(8);
                } else if (base === "decimal") {
                    displayValue = currentValue.toString(10);
                }
                document.getElementById("display").value = displayValue;
            }
        }

        function convertCurrency(currency) {
            const currentValue = parseFloat(displayValue);
            if (!isNaN(currentValue)) {
                // Replace these values with actual conversion rates
                const conversionRates = {
                    usd: 1.0,
                    eur: 0.85,
                    gbp: 0.75
                };
                if (currency in conversionRates) {
                    displayValue = (currentValue * conversionRates[currency]).toFixed(2);
                    document.getElementById("display").value = displayValue;
                }
            }
        }
    </script>
</body>

</html>