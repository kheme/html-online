pos=1;
function check() {
if (reg.name.value=="") {alert("Please enter your FULL NAME!");reg.name.focus();return false}
else if (reg.email.value=="") {alert("Please enter your EMAIL ADDRESS!");reg.email.focus();return false}
else if (reg.email.value.indexOf(".")=="-1" || reg.email.value.indexOf("@")=="-1") {alert("Please enter a valid EMAIL ADDRESS!");reg.email.focus();return false}
else if (reg.password.value=="") {alert("Please enter your PASSWORD!");reg.password.focus();return false}
else if (reg.password.value!=reg.cpassword.value) {alert("Please confirm your PASSWORD, your PASSWORDS do not match!");reg.password.select();return false}
}
function doo(x,y) {cont.focus();cont.document.execCommand(x,"false",y)}
function snd() {
if (form.subject.value=="") {alert("Please enter a SUBJECT for your message!");form.subject.focus();return false}
else if (cont.document.body.innerHTML=="") {alert("Please enter a MESSAGE to send to me!");cont.focus();return false}
form.message.value=cont.document.body.innerHTML
}
function chk() {
if (form.old.value=="") {alert("Please enter your CURRENT PASSWORD!");form.old.focus();return false}
else if (document.getElementById('new').value=="") {alert("Please enter your NEW PASSWORD!");document.getElementById('new').focus();return false}
else if (form.con.value=="" || form.con.value!=document.getElementById('new').value) {alert("Please CONFIRM your NEW PASSWORD!");form.con.select();return false}
}
function ck() {
if (tell.name.value=="") {alert("Enter your name!");tell.name.focus();return false}
else if (tell.email.value=="") {alert("Enter your email address!");tell.email.focus();return false}
else if (tell.email.value.indexOf(".")=="-1" || tell.email.value.indexOf("@")=="-1") {alert("Please enter a valid EMAIL ADDRESS!");tell.email.focus();return false}
else if (tell.n1.value=="" && tell.n2.value=="") {alert("Enter AT LEAST one of your friend's name!");tell.n1.focus();return false}
else if (tell.e1.value=="" && tell.e2.value=="") {alert("Enter AT LEAST one of your friend's email address!");tell.e1.focus();return false}
else if (tell.e1.value!=="" && (tell.e1.value.indexOf(".")=="-1" || tell.e1.value.indexOf("@")=="-1")) {alert("Please enter a valid EMAIL ADDRESS for your 1st friend!");tell.e1.focus();return false}
else if (tell.e1.value!="" && tell.n1.value=="") {alert("Please enter a NAME for your 1st friend!");tell.n1.focus();return false}
else if (tell.e2.value!=="" && (tell.e2.value.indexOf(".")=="-1" || tell.e2.value.indexOf("@")=="-1")) {alert("Please enter a valid EMAIL ADDRESS for your 2nd friend!");tell.e2.focus();return false}
else if (tell.e2.value!=="" && tell.n2.value=="") {alert("Please enter a NAME for your 2nd friend!");tell.n2.focus();return false}
}
function ckf1() {
if (f1.name.value=="" || f1.name.value==" " || f1.name.value=="  ") {alert("Please enter your name!");f1.name.select();return false;}
else if (f1.email.value=="" || f1.email.value==" " || f1.email.value=="  ") {alert("Please enter your eMail address!");f1.email.select();return false;}
}
function lst() {
if (lost.email.value=="") {alert("Please enter your EMAIL ADDRESS!");lost.email.focus();return false}
else if (lost.email.value.indexOf(".")=="-1" || lost.email.value.indexOf("@")=="-1") {alert("Please enter a valid EMAIL ADDRESS!");lost.email.select();return false}
}
function crt(a,b) {
b=b.toLowerCase()
if (b=="hex") {alert(a+" [Decimal] to Hexadecimal  >  "+Math.abs(a).toString(16).toUpperCase());}
else if (b=="dec") {
if (a.length>2) {alert("Converter only converts 2-digit hexadecimal numbers");f.num.select()} else {
for (c=1;c<256;c++) {if (c.toString(16)==a.toString()) {alert(a.toUpperCase()+" [Hexadecimal] to Decimal  >  "+c.toString(10))}}}
}
}
function sho() {
alert('HTML Online - Sample HTML Code\n---------------------------------\n\n\n<table border="1">\n<tr>\n<td colspan="2" align="center">some text</td>\n</tr>\n<tr>\n<td>some text</td>\n<td>some text</td>\n</tr>\n<tr>\n<td colspan="2" align="center">some text</td>\n</tr>\n</table>\n\n\nNOTE: Always remember to place the codes I give you in your HTML Template!')
}
function sho1() {
alert('HTML Online - Sample HTML Code\n---------------------------------\n\n\n<table border="2" width="50%" bordercolor="black" height="100">\n<tr><td bordercolor="blue">some text</td></tr>\n<tr><td bordercolor="red">some text</td></tr>\n</table>\n\n\nNOTE: Always remember to place the codes I give you in your HTML Template!')
}
function sho2() {
alert('HTML Online - Sample HTML Code\n---------------------------------\n\n\n<table border="2" bgcolor="green" width="50%" bordercolor="black" height="100">\n<tr><td bgcolor="blue">some text</td></tr>\n<tr><td bgcolor="red">some text</td></tr>\n</table>\n\n\nNOTE: Always remember to place the codes I give you in your HTML Template!')
}
function sho3() {
alert('HTML Online - Sample HTML Code\n---------------------------------\n\n\n<table border="1" width="50%" bordercolor="black" height="300" cellpadding="10">\n<tr><td colspan="2" align="center">Header here</td></tr>\n<tr>\n<td width="20%">link 1</td>\n<td align="center" rowspan="5" width="80%">main content here</td>\n</tr>\n<tr><td>link 2</td></tr>\n<tr><td>link 3</td></tr>\n<tr><td>link 4</td></tr>\n</table>\n\n\nNOTE: Always remember to place the codes I give you in your HTML Template!')
}
function set_autocomplete(name, option) {
input = document.getElementById(name) ;
if (option == 0) {input.setAttribute("autocomplete", "off");}
else if (option == 1) {input.setAttribute("autocomplete", "on");}
}