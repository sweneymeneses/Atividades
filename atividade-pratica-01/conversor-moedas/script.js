let moedas;
let elCoinSelect = document.querySelector("#coins");
let elValue = document.querySelector("#value");

fetch('https://economia.awesomeapi.com.br/json/all')
  .then(res => res.json())
  .then(res => {
    moedas = res
  })
  .catch(err => {
    alert('Não foi possível carregar os valores atuais da cotação!');
  });

function handleConvert() {
  value = parseFloat(value);
  let selectedCoin = elCoinSelect.value;

  if (!validate()) {
    return false;
  }

  showConversonAlert(selectedCoin);
}

function validate() {
  if (isNaN(elValue.value) == true || elCoinSelect.value == "NULL") {
    alert("É necessario escolher a moeda e digitar um valor")
    return false;
  } else if (elValue.value <= 0) {
    alert("Valor deve ser positivo")
    return false;
  }

  return true;
}

function showConversonAlert(currencyCode) {
  let calc;

  calc = elValue.value * moedas[currencyCode].bid
  alert(`${elValue.value} ${currencyCode} é equivale a ${calc} BRL`);
  showTimeAlert(currencyCode)
}

function showTimeAlert(currencyCode) {
  let data = (moedas[currencyCode]["create_date"])
  let day = data.substring(8, 10)
  let month = data.substring(5, 7)
  let year = data.substring(0, 4)
  let hour = data.substring(11, 16)
  alert(`Ultima atualização da contação foi em ${day}/${month}/${year} às ${hour}`);
}
