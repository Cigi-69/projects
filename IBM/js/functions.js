const getCustomers = () => {
    return getInfo()
}

const clearTable = () => {
    totalBalance = 0
    const rows = document.querySelectorAll('#tab-body tr')
    rows.forEach(row => {
        row.remove()
    });
}

const filteredData = (filterCondition, parameters, record) => {
    if (filterCondition === 'negative' && parseInt((record.balance)) < 0) {
        makeTableAndCalculateBalance(parameters, record)
     } else if (filterCondition === 'nonActive' && record.isActive === false) {
        makeTableAndCalculateBalance(parameters, record)
     } else if (filterCondition === 'all') {
        makeTableAndCalculateBalance(parameters, record)
     }
}

const renderTable = (customers, filter) => {
    clearTable()

    customers.then((data) => {
        data.forEach((record, index) => {
            const parameters = [++index, record.name, record.company, record.gender, record.email, record.phone, record.address, record.isActive, record.balance, makeDiscount(record.isActive, record.balance)]
            filteredData(filter, parameters, record)
        });
    })
}


const createElement = (element, content, appendTo) => {
    const newElement = document.createElement(element)
    newElement.innerText = content
    appendTo.appendChild(newElement)
}

const makeDiscount = (activity, number) => {
    if (activity === false) {
        number = number.replace(/,/, '')
        number = (parseInt(number)) * 0.1
        return Number.parseFloat(number).toFixed(2)
    } else {
        return 0
    }
}

const makeColumns = (parameters, tableRow) => {
    for (let i = 0; i < parameters.length; i++) {
        createElement('td', parameters[i], tableRow)
    }
}

const makeTableAndCalculateBalance = (parameters, record) => {
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

