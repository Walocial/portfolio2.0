$(document).ready(function() {

    const BIRTHDAY = new Date("2000-03-28")
    const TODAY = new Date();

    let age = TODAY.getFullYear() - BIRTHDAY.getFullYear();

    const hasBirthdayPassedThisYear =
    TODAY.getMonth() > BIRTHDAY.getMonth() ||
    (TODAY.getMonth() === BIRTHDAY.getMonth() && TODAY.getDate() >= BIRTHDAY.getDate());

    if (!hasBirthdayPassedThisYear) {
        age--;
    }

    let trumpetYears = age - 7;

    $('#age').text(age);
    $('#trumpet').text(trumpetYears);

});