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

const makeTable = (parameters, record) => {
    const tableRow = document.createElement('tr')
    if (parseInt(record.balance) < 0) {
        tabBody.appendChild(tableRow).classList.add('table-danger')
    } else if (record.isActive === false) {
        tabBody.appendChild(tableRow).classList.add('table-warning')
    }
    tabBody.appendChild(tableRow)
    makeColumns(parameters, tableRow)
}