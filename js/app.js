function showVA(){
	var vA = document.getElementById('idVA');
	var cS = document.getElementById('idCS');
    var cP = document.getElementById('idCP');
    var dT = document.getElementById('idDT');
    var ast = document.getElementById('idAst');
	var tH2 = document.getElementById('idH2');	 
    tH2.innerHTML = "определите направление открытой стороны фигуры и нажмите на соответствующую кнопку со стрелкой";
    vA.style.display = 'block';
	cS.style.display = 'none';
	cP.style.display = 'none';
    dT.style.display = 'none';
    ast.style.display = 'none';
}

function showCS(){
	var vA = document.getElementById('idVA');
	var cS = document.getElementById('idCS');
    var cP = document.getElementById('idCP');
    var dT = document.getElementById('idDT');
    var ast = document.getElementById('idAst');
	var tH2 = document.getElementById('idH2');	 
    tH2.innerHTML = "выберите самую светлую фигуру";
    vA.style.display = "none";
	cS.style.display = "block";
	cP.style.display = "none";
    dT.style.display = "none";
    ast.style.display = "none";
}

function showCP(){
	var vA = document.getElementById('idVA');
	var cS = document.getElementById('idCS');
    var cP = document.getElementById('idCP');
    var dT = document.getElementById('idDT');
    var ast = document.getElementById('idAst');
	var tH2 = document.getElementById('idH2');	 
    tH2.innerHTML = "какое число видите на картинке?";
    vA.style.display = "none";
	cS.style.display = "none";
	cP.style.display="block";
    dT.style.display = "none";
    ast.style.display = "none";
}

function showDT(){
	var vA = document.getElementById('idVA');
	var cS = document.getElementById('idCS');
    var cP = document.getElementById('idCP');
    var dT = document.getElementById('idDT');
    var ast = document.getElementById('idAst');
	var tH2 = document.getElementById('idH2');	 
    tH2.innerHTML = "дуохромный тест для определения близорукости (-) и дальнозоркости (+)";
    vA.style.display = "none";
	cS.style.display = "none";
    cP.style.display = "none";
    dT.style.display = "block";
    ast.style.display = "none";
}

function showAst(){
	var vA = document.getElementById('idVA');
	var cS = document.getElementById('idCS');
    var cP = document.getElementById('idCP');
    var dT = document.getElementById('idDT');
    var ast = document.getElementById('idAst');
	var tH2 = document.getElementById('idH2');	 
    tH2.innerHTML = "звезда сименса позволит вам определить остроту вашего зрения";
    vA.style.display = "none";
	cS.style.display = "none";
	cP.style.display = "none";
    dT.style.display = "none";
    ast.style.display = "block";
}

    var countTrueAnswers = 0;
    var imagesCP = new Array('..\\images\\10.jpg', '..\\images\\13.jpg', '..\\images\\14.jpg', '..\\images\\15.jpg', '..\\images\\26.jpg', '..\\images\\29.jpg', '..\\images\\73.jpg', '..\\images\\96.jpg', '..\\images\\136.jpg');
    var indexCP = new Array(3, 10, 13, 14, 15, 26, 29, 73, 96, 136);
    var i = 0;
function fCP(){
	var imgCP = document.getElementById('imageColorPerseption');
    var text = document.getElementById('text');
    if (text.value == indexCP[i].toString()) {
        countTrueAnswers++;
    }
    text.value = '';
    imgCP.src = imagesCP[i];
    i++;
    if (i == imagesCP.length + 1) {
        alert("Уровень вашего цветопередачи: " + countTrueAnswers * 10 + "%");
        i = 0;
	    countTrueAnswers = 0;
		imgCP.src = '..\\images\\3.jpg';
		if (countTrueAnswers < 6){
		    var video = document.getElementById('videoCP');
		    video.style.display = "block";
		}		   
    }
}

function fDT(){
    var test = document.getElementById('duoTest1');
    if (test.checked)
        alert("Тест пройден");
    else
        alert("Тест не пройден");
}
			

function fAstigmatism(){
	var imgA = document.getElementById('imageAstigm');
    var cB1 = document.getElementById('checkBox1');
    var cB2 = document.getElementById('checkBox2');
    var cB3 = document.getElementById('checkBox3');
    var ast1 = document.getElementById('astigmatism1_1');
    var ast2 = document.getElementById('astigmatism1_2');
    var ast3 = document.getElementById('astigmatism1_3');
    if (imgA.src == "http://lab/images/astigmatismImg1.jpg"){
        if (ast1.checked) {
            countTrueAnswers++;
        }
		imgA.src = '..\\images\\astigmatismImg2.jpg';
        cB1.style.display = "none";
        cB2.style.display = "block";
        cB3.style.display = "none";
	   	ast1 = document.getElementById('astigmatism2_1');
        ast2 = document.getElementById('astigmatism2_2');
        ast3 = document.getElementById('astigmatism2_3');
		ast1.checked=false;
		ast2.checked=false;
		ast3.checked=false;
		return;
    }
    if (imgA.src == "http://lab/images/astigmatismImg2.jpg") {
        if (ast3.checked) {
            countTrueAnswers++;
        }
	    imgA.src = '..\\images\\astigmatismImg3.jpg';
        cB1.style.display = "none";
        cB2.style.display = "none";
        cB3.style.display = "block";
		ast1 = document.getElementById('astigmatism3_1');
        ast2 = document.getElementById('astigmatism3_2');
    	ast1.checked=false;
		ast2.checked=false;
		ast3.checked=false;
		return;
    }
    if (imgA.src == "http://lab/images/astigmatismImg3.jpg") {
        if (ast1.checked) {
            countTrueAnswers++;
        }
		ast1 = document.getElementById('astigmatism1_1');
		ast2 = document.getElementById('astigmatism1_2');
		ast3 = document.getElementById('astigmatism1_3');
		imgA.src = '..\\images\\astigmatismImg1.jpg';
		cB1.style.display = "block";
		cB2.style.display = "none";
		cB3.style.display = "none";
		ast1.checked=false;
		ast2.checked=false;
		alert("У вас " + countTrueAnswers*100/3 + "% правильных ответов.");
		countTrueAnswers=0;
		return;
    }
}
                
				
countTrueAnswersVA = 0;
images = new Array('..\\images\\vA1.jpg', '..\\images\\vA2.jpg', '..\\images\\vA3.jpg', '..\\images\\vA4.jpg');
function fVA1(){
    var imageVA = document.getElementById('iIVA');
    if (imageVA.src == "http://lab/images/vA1.jpg"){

		countTrueAnswersVA++;
    }    
    newIVA();
}
				
function fVA2() {
	
    var imageVA = document.getElementById('iIVA');
    if (imageVA.src == "http://lab/images/vA2.jpg") {
        countTrueAnswersVA++;
    }
    newIVA();
}

function fVA3() {
	
    var imageVA = document.getElementById('iIVA');
    if (imageVA.src == "http://lab/images/vA3.jpg") {
		countTrueAnswersVA++;
	}
    newIVA();
}
				
function fVA4() {
	
	var imageVA = document.getElementById('iIVA');
    if (imageVA.src == "http://lab/images/vA4.jpg") {
        countTrueAnswersVA++;
	}
    newIVA();
}
				
function newIVA(){
	
	var imageVA = document.getElementById('iIVA');
	if (imageVA.width > 15){
        imageVA.src = images[Math.floor(Math.random() * (3 - 0 + 1)) + 0];
        imageVA.width-=2;
		imageVA.height-=2;
		
    }
    else{
        alert("У вас " + countTrueAnswersVA*5 + "% правильных ответов.");
		imageVA.width = 68;
		imageVA.height = 68;
		countTrueAnswersVA = 0;
    }
}
				
	var  countTrueAnswers = 0;
	var indexICS = 1;
function trueAnswer(){
	var tH2 = document.getElementById('idH2');
	var iCS1 = document.getElementById('idICS1');
	var iCS2 = document.getElementById('idICS2');
    var iCS3 = document.getElementById('idICS3');
    var iCS4 = document.getElementById('idICS4');
	t = event.target||event.srcElement;
	if (indexICS == 1){
	    if (t.className == 'classICS4')
			countTrueAnswers++;
		tH2.innerHTML = "ВЫБЕРИТЕ САМУЮ ЯРКУЮ КАРТИНКУ, НАЖАВ НА НЕЁ";
		iCS1.src = '..\\images\\contrastSensitivity2_1.jpg';
		iCS2.src = '..\\images\\contrastSensitivity2_2.jpg';
		iCS3.src = '..\\images\\contrastSensitivity2_3.jpg';
		iCS4.src = '..\\images\\contrastSensitivity2_4.jpg';
	}
	if (indexICS == 2){
		if (t.className == 'classICS3')
			countTrueAnswers++;
		tH2.innerHTML = "ВЫБЕРИТЕ САМУЮ НЕ ЯРКУЮ КАРТИНКУ, НАЖАВ НА НЕЁ";
		iCS1.src = '..\\images\\contrastSensitivity3_1.jpg';
		iCS2.src = '..\\images\\contrastSensitivity3_2.jpg';
		iCS3.src = '..\\images\\contrastSensitivity3_3.jpg';
		iCS4.src = '..\\images\\contrastSensitivity3_4.jpg';
	}
	if (indexICS == 3){
		if (t.className == 'classICS4')
		    countTrueAnswers++;
        tH2.innerHTML = "ВЫБЕРИТЕ САМУЮ ТЕМНУЮ КАРТИНКУ, НАЖАВ НА НЕЁ";
		iCS1.src = '..\\images\\contrastSensitivity4_1.jpg';
		iCS2.src = '..\\images\\contrastSensitivity4_2.jpg';
		iCS3.src = '..\\images\\contrastSensitivity4_3.jpg';
		iCS4.src = '..\\images\\contrastSensitivity4_4.jpg';
	}
	if (indexICS == 4){
		if (t.className == 'classICS2')
		        countTrueAnswers++;
		alert("У вас " + countTrueAnswers*25 + "% правильных ответов.");
		countTrueAnswers = 0;
		indexICS = 1;
		iCS1.src = '..\\images\\contrastSensitivity1_1.jpg';
		iCS2.src = '..\\images\\contrastSensitivity1_2.jpg';
		iCS3.src = '..\\images\\contrastSensitivity1_3.jpg';
		iCS4.src = '..\\images\\contrastSensitivity1_4.jpg';
		tH2.innerHTML = "выберите самую светлую картинку, нажав на нее";
	}
	indexICS++;
}

function testName(){
	var n = document.getElementById('name');
	if (n.value == ""){
		alert('Invalid name');
	}
}

function testEmail() {
   var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
   var address = document.getElementById('email').value;
   if(reg.test(address) == false) {
      alert("Invalid Email Address");
      return false;
   }
}

function testData(){
	testName();
	testEmail();
}