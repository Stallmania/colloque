const MINUTES = 60
const HOURS = 60 * MINUTES
const DAYS = 24 * HOURS

function countTime() {
    const countdown = document.querySelector('#countdown')
    const lunchDate = Date.parse(countdown.dataset.time) / 1000
    let difference = lunchDate-Date.now()/ 1000
    const chrono = {
            days:Math.floor(difference/DAYS),
            hours:Math.floor(difference%DAYS/HOURS),
            minutes:Math.floor(difference%HOURS/MINUTES),
            seconds:Math.floor(difference%MINUTES),
        }
    document.getElementById('days').innerText = chrono.days
    document.getElementById('hours').innerText = chrono.hours
    document.getElementById('minutes').innerText = chrono.minutes
    document.getElementById('seconds').innerText = chrono.seconds
    window.setTimeout(countTime,1000)
}
countTime()