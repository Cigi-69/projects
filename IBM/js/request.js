// Promise
const getInfo = async() => {
    const response = await fetch('https://api.myjson.com/bins/1eyqeh')
    if (response.status === 200) {
        const data = await response.json()
        return data
    } else {
        throw new Error('Unable to get data.')
    }
}