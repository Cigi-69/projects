const tabRecord = document.querySelector('#record')
const tabBody = document.querySelector('#tab-body')
const totalBal = document.querySelector('#sum')
const filters = document.querySelectorAll('.custom-control-input')
let totalBalance = 0
let customers = ''

getInfo().then((data) => {
    customers = data
    renderTable(data, 'all')
}).catch((err) => {
    console.log(err)
})


filters.forEach(filter => {
    document.querySelector(`#${filter.id}`).addEventListener('change', (e) => {
        renderTable(customers, e.target.value)
    })
});