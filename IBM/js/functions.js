// clearing the rows of the table
const clearTable = () => {
    totalBalance = 0
    const rows = document.querySelectorAll('#tab-body tr')
    rows.forEach(row => {
        row.remove()
    });
}

// filtering the result and calculating total balance of displayed records
const filteredData = (filterCondition, parameters, record) => {
    if (filterCondition === 'negative' && parseInt((record.balance)) < 0) {
        makeTableAndBalance(parameters, record)
     } else if (filterCondition === 'inactive' && record.isActive === false) {
        makeTableAndBalance(parameters, record)
     } else if (filterCondition === 'all') {
        makeTableAndBalance(parameters, record)
     }
}

// helping function for creating personalilzed mail (not setup) or link to phone number
const createLink = (data, customer, discount) => {
    if (data.indexOf('@') === -1) {
        return `<a href="tel:${data}">${data}</a>`
    } else {
        return `<a href="mailto:${data}?Subject=NailedIT - Special offer&body=Dear ${customer},%0ABody with a personalized offer and discount ${discount}€" target="_top">${data}</a>`
    }
}

// rednering the table based on the filtered data
const renderTable = (customers, filter) => {
    clearTable()
    customers.forEach((record, index) => {
        const discount = makeDiscount(record.isActive, record.balance)
        const parameters = [++index, record.name, record.company, record.gender, createLink(record.email, record.name, discount), createLink(record.phone), record.address, record.isActive, record.balance, discount]
        filteredData(filter, parameters, record)
    });
}

// helping function for creating elements based on the parameters
const createElement = (element, content, appendTo) => {
    const newElement = document.createElement(element)
    newElement.innerHTML = content
    appendTo.appendChild(newElement)
}

// helping function for calculating 10% discount for inactive customers
const makeDiscount = (activity, number) => {
    if (activity === false) {
        number = number.replace(/,/, '')
        number = (parseInt(number)) * 0.1
        return Number.parseFloat(number).toFixed(2)
    } else {
        return 0
    }
}

// helping function for creating column of the coresponding row - tableRow - from makeTableAndBalance
const makeColumns = (parameters, tableRow) => {
    for (let i = 0; i < parameters.length; i++) {
        createElement('td', parameters[i], tableRow)
    }
}

// creating the rows and calculating the balance
const makeTableAndBalance = (parameters, record) => {
    const tableRow = document.createElement('tr')
    if (parseInt(record.balance) < 0) {
        tabBody.appendChild(tableRow).classList.add('table-danger')
    } else if (record.isActive === false) {
        tabBody.appendChild(tableRow).classList.add('table-warning')
    }
    tabBody.appendChild(tableRow)
    makeColumns(parameters, tableRow)
    // calculateBalance
    totalBalance += parseInt((record.balance).replace(/,/, ''))
    totalBal.innerText = (totalBalance.toLocaleString('en-IN'))
}