const tabRecord = document.querySelector('#record')
const tabBody = document.querySelector('#tab-body')
const totalBal = document.querySelector('#sum')
const filters = document.querySelectorAll('.custom-control-input')
let totalBalance = 0

const customers = getCustomers()
renderTable(customers, 'all')

filters.forEach(filter => {
    document.querySelector(`#${filter.id}`).addEventListener('change', (e) => {
        renderTable(customers, e.target.value)
    })
});