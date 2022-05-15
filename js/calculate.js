function calculateTax(event){
  event.preventDefault();
  var status = document.getElementById("status").value;
  var monthlySalary = document.getElementById("monthly-salary").value;
  var months = document.getElementById("months-id").value;
  var monthlyBonus = document.getElementById("bonus").value;
  var providentFund = document.getElementById("provident-fund").value;
  var trust = document.getElementById("trust").value;
  var insurance = document.getElementById("insurance").value;
  var incomeTotal = monthlySalary - ( -monthlyBonus) - providentFund - trust - insurance;
  
  if (status == "Married") {
      if(months == "yearly"){
        income = 12 *(incomeTotal);
        if (income > 2000000) {
          tax = 444000 + ((income - 2000000) * 36) / 100;
        } else if (income <= 2000000 && income > 700000) {
          tax = 54000 + ((income - 700000) * 30) / 100;
        } else if (income <= 700000 && income > 500000) {
          tax = 14000 + ((income - 500000) * 20) / 100;
        } else if (income <= 500000 && income > 400000) {
          tax = 4000 + ((income - 400000) * 10) / 100;
        } else if (income <= 400000 && income > 0) {
          tax = (income * 1) / 100;
        }
      }else if(months == "monthly"){
        income = 12 *(incomeTotal);
        if (income > 2000000) {
          tax = 444000 + ((income - 2000000) * 36) / 100;
        } else if (income <= 2000000 && income > 700000) {
          tax = 54000 + ((income - 700000) * 30) / 100;
        } else if (income <= 700000 && income > 500000) {
          tax = 14000 + ((income - 500000) * 20) / 100;
        } else if (income <= 500000 && income > 400000) {
          tax = 4000 + ((income - 400000) * 10) / 100;
        } else if (income <= 400000 && income > 0) {
          tax = (income * 1) / 100;
        }
        monthlyTax = tax / 12;
      }
      } else{
        if(months == "yearly"){
        income = 12 *(incomeTotal);
         if (income > 2000000) {
            tax = 429500 + ((income - 2000000) * 36) / 100;
          } else if (income <= 2000000 && income > 750000) {
            tax = 54500 + ((income - 750000) * 30) / 100;
          } else if (income <= 750000 && income > 550000) {
            tax = 14500 + ((income - 550000) * 20) / 100;
          } else if (income <= 550000 && income > 450000) {
            tax = 4500 + ((income - 450000) * 10) / 100;
          } else if (income <= 450000 && income > 0) {
            tax = (income * 1) / 100;;
          }
        } else if(months == "monthly"){
          income = 12 *(incomeTotal);
          if (income > 2000000) {
            tax = 429500 + ((income - 2000000) * 36) / 100;
          } else if (income <= 2000000 && income > 750000) {
            tax = 54500 + ((income - 750000) * 30) / 100;
          } else if (income <= 750000 && income > 550000) {
            tax = 14500 + ((income - 550000) * 20) / 100;
          } else if (income <= 550000 && income > 450000) {
            tax = 4500 + ((income - 450000) * 10) / 100;
          } else if (income <= 450000 && income > 0) {
            tax = (income * 1) / 100;
          }
          monthlyTax = tax / 12;
        }
      }
      document.getElementById("yearly-tax").value = tax;
      document.getElementById("monthly-tax").value = monthlyTax;
}

var form = document.getElementById('tax_form');
form.addEventListener('submit', calculateTax)