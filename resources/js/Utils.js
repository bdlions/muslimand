angular.module('services.Timezone', []).
        factory('utilsTimezone', function () {

    /*this method will return human date from unix time Stamp
     * TimeFormate(Mon Nov 16 2015 13:11:19 GMT+0600 (Bangladesh Standard Time))
     * Month Day Year H:M:S with GMT 
     * return human readable time 
     * */

    var utilsTimezone = {};

    utilsTimezone.getUnixToHumanTime = function (unixTimeStamp) {
        var date = new Date(unixTimeStamp * 1000);
        return date;

    };
    /*this method return date form unixtimeStamp 
     * dateFormate("YYYY-MM-DD");
     * param unix time stamp
     * return human readable Date 
     * */
    utilsTimezone.getUnixTimeToDateYYYYMMDD = function (unixTimeStamp) {
        var humanDate = new Date(unixTimeStamp * 1000);
        var months = humanDate.getMonth() + 1;
        if (months < 10) {
            months = "0" + months;
        }
        var days = humanDate.getDay();
        if (days < 10) {
            days = "0" + days;
        }
        var formattedDate = humanDate.getFullYear() + "-" + months + "-" + days;
        return formattedDate

    }
    /*this method return date form unixtimeStamp 
     * dateFormate("YYYY-MM-DD");
     * dateFormate("DD-MM-YYYY");
     * param unix time stamp
     * return human readable Date 
     * */
    utilsTimezone.getUnixTimeToDateDDMMYYYY = function (unixTimeStamp) {
        var humanDate = new Date(unixTimeStamp * 1000);
        var months = humanDate.getMonth() + 1;
        if (months < 10) {
            months = "0" + months;
        }
        var days = humanDate.getDay();
        if (days < 10) {
            days = "0" + days;
        }
        var formattedDate = days + "-" + months + "-" + humanDate.getFullYear();
        return formattedDate

    }
    /*
     * this method return human readable time form unixtimeStamp 
     * TimeFormate("H-M-S");
     * param unix time stamp 
     * return human readable time 
     */
    utilsTimezone.getUnixTimeToHumanTime = function (unixTimeStamp) {
        var humanDate = new Date(unixTimeStamp * 1000);
        var formattedDate = humanDate.getHours() + "-" + humanDate.getMinutes() + "-" + humanDate.getSeconds();
        return formattedDate

    }

    /*this method return time difference from  current time
     * param date humen readable date 
     * formateTime(like 10mins ago)
     * return time difference 
     *  */
    utilsTimezone.convertTime = function (userCurrentDateGmt0TimeStamp, gmt0TimeStamp ) {
        var date = new Date(gmt0TimeStamp *1000);
        var today = new Date(userCurrentDateGmt0TimeStamp * 1000);
        var seconds = today.getTime() - date.getTime();
        var seconds = seconds / 1000;
        if (seconds <= 1) {
            return(seconds + " second ago");
        } else if (seconds > 1 && seconds < 60) {
            return (seconds + " seconds ago");
        } else {
            var minutes = Math.floor(seconds / 60);
            if (minutes <= 1) {
                return minutes + " minute ago.";
            }
            else if (minutes > 1 && minutes < 60) {
                return minutes + " minutes ago.";
            } else {

                var hours = Math.floor(minutes / 60);
                if (hours <= 1) {
                    return  hours + " hours ago.";
                }
                else if (hours > 1 && hours < 24) {
                    return hours + " hours ago.";
                }
                else {
                    var days = Math.floor(hours / 24);
                    if (days <= 1) {
                        return days + " day ago.";
                    }
                    else if (days > 1 && days < 30) {
                        return days + " days ago.";
                    }
                    else {
                        var months = Math.floor(days / 30);
                        if (months <= 1) {
                            return months + " month ago.";
                        }
                        else if (months > 1 && months < 12) {
                            return months + " months ago.";
                        }
                        else {
                            var years = Math.floor(months / 12);
                            return years + " years ago.";
                        }
                    }
                }
            }
        }
    };

    /*this method return time difference from  current time
     * param date humen readable date 
     * formateTime(like 2days 10mins ago )
     *  return time difference 
     *  */


    utilsTimezone.convertDateToFullTime = function (userCurrentDateGmtTimeStamp, gmt0TimeStamp) {
        var date = new Date(gmt0TimeStamp *1000);
        var today = new Date(userCurrentDateGmtTimeStamp *1000);
        var diff = today.getTime() - date.getTime();
        var years = Math.floor(diff / (1000 * 60 * 60 * 24 * 30 * 12));
        diff -= years * (1000 * 60 * 60 * 24 * 30 * 12);
        var months = Math.floor(diff / (1000 * 60 * 60 * 24 * 30));
        diff -= months * (1000 * 60 * 60 * 24 * 30);
        var days = Math.floor(diff / (1000 * 60 * 60 * 24));
        diff -= days * (1000 * 60 * 60 * 24);
        var hours = Math.floor(diff / (1000 * 60 * 60));
        diff -= hours * (1000 * 60 * 60);
        var mins = Math.floor(diff / (1000 * 60));
        diff -= mins * (1000 * 60);
        var seconds = Math.floor(diff / (1000));
        var formatedTime = "";
        if (years > 0) {
            formatedTime = formatedTime + years + " years ";
        }
        if (months > 0) {
            formatedTime = formatedTime + months + " months ";
        }
        if (hours > 0) {
            formatedTime = formatedTime + hours + " hours ";
        }
        if (mins > 0) {
            formatedTime = formatedTime + mins + " mins ";
        }
        if (seconds > 0) {
            formatedTime = formatedTime + seconds + " seconds ";
        }
        return(formatedTime + "ago");
    };
    return utilsTimezone;
});
