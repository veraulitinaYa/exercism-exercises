//
// This is only a SKELETON file for the 'Line Up' exercise. It's been provided as a
// convenience to get you started writing code faster.
//

export const format = (name, number) => {
let suffix;

let numstring = number.toString();
let numlength = numstring.length;
let keyIndex = numstring[numlength-1];
let endnumber = false;
if ((numlength > 1) && (((numstring[numlength-1-1]+numstring[numlength-1] == "11")) || ((numstring[numlength-1-1]+numstring[numlength-1] == "12")) || (numstring[numlength-1-1]+numstring[numlength-1] == "13")) )
{
  endnumber = true;
}

if ((keyIndex== 1) && !endnumber)
  suffix = "st";
  else if ((keyIndex == 2) && !endnumber)
 suffix = "nd";
    else if ((keyIndex == 3) && !endnumber)
 suffix = "rd";
  else
  suffix = "th";

  const result = name+ ', you are the ' + number + suffix + " customer we serve today. Thank you!"; 
  console.log (result);
return result;

};
