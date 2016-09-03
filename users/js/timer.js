var day_names = new Array(7)
day_names[0] = "Sunday"
day_names[1] = "Monday"
day_names[2] = "Tuesday"
day_names[3] = "Wednesday"
day_names[4] = "Thursday"
day_names[5] = "Friday"
day_names[6] = "Saturday"

// This array holds the "friendly" month names
var month_names = new Array(12)
month_names[0] = "January"
month_names[1] = "February"
month_names[2] = "March"
month_names[3] = "April"
month_names[4] = "May"
month_names[5] = "June"
month_names[6] = "July"
month_names[7] = "August"
month_names[8] = "September"
month_names[9] = "October"
month_names[10] = "November"
month_names[11] = "December"

// Get the current date
date_now = new Date()

// Figure out the friendly day name
day_value = date_now.getDay()
date_text = day_names[day_value]

// Figure out the friendly month name
month_value = date_now.getMonth()
date_text += " " + month_names[month_value]

// Add the day of the month
date_text += " " + date_now.getDate()

// Add the year
date_text += ", " + date_now.getFullYear()

// Get the minutes in the hour
minute_value = date_now.getMinutes()
if (minute_value < 10) {
    minute_value = "0" + minute_value
}

// Get the hour value and use it to customize the greeting
hour_value = date_now.getHours()
if (hour_value == 0) {
   greeting = "Good morning, "
   time_text = " at " + (hour_value + 12) + ":" + minute_value + " AM"
}
else if (hour_value < 12) {
    greeting = "Good morning!"
    time_text = " at " + hour_value + ":" + minute_value + " AM"
}
else if (hour_value == 12) {
    greeting = "Good afternoon!"
    time_text = " at " + hour_value + ":" + minute_value + " PM"
}
else if (hour_value < 17) {
    greeting = "Good afternoon!"
    time_text = " at " + (hour_value - 12) + ":" + minute_value + " PM"
}
else {
    greeting = "Good evening!"
    time_text = " at " + (hour_value - 12) + ":" + minute_value + " PM"
}

document.write( date_text + time_text)
