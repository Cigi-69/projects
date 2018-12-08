const tabRecord = document.querySelector('#record')
const tabBody = document.querySelector('#tab-body')
const totalBal = document.querySelector('#sum')

let totalBalance = 0
getInfo().then((data) => {
    data.forEach((record) => {
        const parameters = [++record.index, record.name, record.company, record.gender, record.email, record.phone, record.address, record.isActive, record.balance, makeDiscount(record.isActive, record.balance)]

        totalBalance += parseInt((record.balance).replace(/,/, ''))
        makeTable(parameters, record)
    });

    totalBal.innerText = (totalBalance.toLocaleString('en-IN'))
})