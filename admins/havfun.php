<script type="text/javascript">
function addElement() {
  var ni = document.getElementById('myDiv');
  var numi = document.getElementById('theValue');
  var num = (document.getElementById('theValue').value -1)+ 2;
  numi.value = num;
  var newdiv = document.createElement('div');
  var divIdName = 'my'+num+'Div';
  newdiv.setAttribute('id',divIdName);
  newdiv.innerHTML = '<iframe src="newrows.php?erty=1" ></iframe>';
  ni.appendChild(newdiv);
}
function removeElement(divNum) {
  var d = document.getElementById('myDiv');
  var olddiv = document.getElementById(divNum);
  d.removeChild(olddiv);
}
</script>

<input type="hidden" value="0" id="theValue" />
<p><a href="javascript:addElement()">Add Some Elements</a></p>
<div id="myDiv"> </div>