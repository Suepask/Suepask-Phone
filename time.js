
        var year, month, date, hour, minute, second, today;
        
        // อาร์เรย์เก็บชื่อวัน
        var dayString=new Array();
        dayString[0]="อาทิตย์";
        dayString[1]="จันทร์";
        dayString[2]="อังคาร";
        dayString[3]="พุธ";
        dayString[4]="พฤหัสบดี";
        dayString[5]="ศุกร์";
        dayString[6]="เสาร์";
        
        // อาร์เรย์เก็บชื่อเดือน
        var monthString=new Array();
        monthString[0]="มกราคม";
        monthString[1]="กุมภาพันธ์";
        monthString[2]="มีนาคม";
        monthString[3]="เมษายน";
        monthString[4]="พฤษภาคม";
        monthString[5]="มิถุนายน";
        monthString[6]="กรกฏาคม";
        monthString[7]="สิงหาคม";
        monthString[8]="กันยายน";
        monthString[9]="ตุลาคม";
        monthString[10]="พฤศจิกายน";
        monthString[11]="ธันวาคม";
        
        // อาร์เรย์เก็บชื่อปี
        var yearCycle=new Array()
        yearCycle[0]="ชวด";
        yearCycle[1]="ฉลู";
        yearCycle[2]="ขาล";
        yearCycle[3]="เถาะ";
        yearCycle[4]="มะโรง";
        yearCycle[5]="มะเส็ง";
        yearCycle[6]="มะเมีย";
        yearCycle[7]="มะแม";
        yearCycle[8]="วอก";
        yearCycle[9]="ระกา";
        yearCycle[10]="จอ";
        yearCycle[11]="กุน";
        
        
        function convert(input) {
            var output= "0"+input;
            return(output.substring(output.length-2,output.length));
        }
        
        function now() {
            dt = new Date();
            year = dt.getFullYear();
            month = dt.getMonth();
            day = dt.getDay();
            date = dt.getDate();
            hour = dt.getHours();
            minute = dt.getMinutes();
            second = dt.getSeconds();
            today = "วัน" + dayString[day] + "ที่ " + date + " เดือน " + monthString[month] + " พ.ศ. " + (year+543) + " เวลา " + convert(hour) + ":" + convert(minute) + ":" + convert(second);
            document.getElementById('dPanel').innerHTML=today;
            setTimeout("now()",1000);
        }
