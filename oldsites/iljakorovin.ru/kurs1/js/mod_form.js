function visible() {
	screenx=screen.width;
	screeny=document.documentElement.clientHeight;
	screenx=(screenx-585)/2; screenx=screenx-17;
	screeny=(screeny-390)/2; 
	document.getElementById('modal0_fon').style.display='block';
	document.getElementById('modal0_fon').style.opacity=0.3;
	document.getElementById('modal0_fon').style.position='fixed';
	document.getElementById('modal0_content').style.position='fixed';
	document.getElementById('modal0_content').style.opacity=1;
	document.getElementById('modal0_content').style.display='block';
	document.getElementById('modal0_content').style.left=screenx+'px';
	document.getElementById('modal0_content').style.top=screeny+'px';
	document.getElementById('wrapper').style.opacity=0.5;
	document.getElementById('x').style.display='block';
	str=document.getElementById(idi).getElementsByTagName('img')[1].getAttribute('src');
	str=str.substr(-17,11);
	$('#modal0_content iframe').remove();
	$('#modal0_content').append('<iframe width="585" height="366" src="//www.youtube.com/embed/'+idi+'?autoplay=1" frameborder="0" allowfullscreen ></iframe>');
}
	
function hide_modal0() { 
	$('#modal0_content, #modal0_fon').hide();
	$('#wrapper').css('opacity', 1); 
	$('#modal0_content iframe').remove();
}	
	
function send2() { flag=0;
	  if(idi=='form_2') {
		  
	       fio=document.getElementById('exampleInputEmail11').value;
		   phone=document.getElementById('exampleInputEmail2').value;
		   email=document.getElementById('exampleInputEmail3').value;
		   if (fio==''||fio=='Имя'||fio=='Введите имя!') { document.getElementById('exampleInputEmail11').setAttribute('placeholder','Введите имя!');
		                              document.getElementById('exampleInputEmail11').style.border="2px solid #f00"; flag=1;  }
									  else document.getElementById('exampleInputEmail11').style.border="1px solid #ccc";
		   if (phone==''||phone=='Телефон'||phone=='Введите телефон!') { document.getElementById('exampleInputEmail2').setAttribute('placeholder','Введите телефон!');
		                              document.getElementById('exampleInputEmail2').style.border="2px solid #f00"; flag=1; }
									  else document.getElementById('exampleInputEmail2').style.border="1px solid #ccc";
		   if (email==''||email=='e-mail'||email=='Введите email!') { document.getElementById('exampleInputEmail3').setAttribute('placeholder','Введите email!');
		                              document.getElementById('exampleInputEmail3').style.border="2px solid #f00"; flag=1; }
									  else document.getElementById('exampleInputEmail3').style.border="1px solid #ccc";						  						  
	  }
	  
	  else { 
	     fio=document.getElementById('exampleInputEmail4').value;
		   phone=document.getElementById('exampleInputEmail5').value;
		   email=document.getElementById('exampleInputEmail6').value;
		   if (fio==''||fio=='Имя'||fio=='Введите имя!') { document.getElementById('exampleInputEmail4').setAttribute('placeholder','Введите имя!');
		                              document.getElementById('exampleInputEmail4').style.border="2px solid #f00"; flag=1; }
									  else document.getElementById('exampleInputEmail4').style.border="1px solid #ccc";
		   if (phone==''||phone=='Телефон'||phone=='Введите телефон!') { document.getElementById('exampleInputEmail5').setAttribute('placeholder','Введите телефон!');
		                              document.getElementById('exampleInputEmail5').style.border="2px solid #f00"; flag=1; }
									  else document.getElementById('exampleInputEmail5').style.border="1px solid #ccc";
		   if (email==''||email=='e-mail'||email=='Введите email!') { document.getElementById('exampleInputEmail6').setAttribute('placeholder','Введите email!');
		                              document.getElementById('exampleInputEmail6').style.border="2px solid #f00"; flag=1; }
									  else document.getElementById('exampleInputEmail6').style.border="1px solid #ccc";
	  }
	  if (flag==0) mail();
  }
function mail() {	  
var xhttp;
if (window.XMLHttpRequest) { xhttp = new XMLHttpRequest();
		                     if (xhttp.overrideMimeType) { xhttp.overrideMimeType('text/txt');
			                 }
	                       } 
	                          else if (window.ActiveXObject) { 
		                      try { xhttp = new ActiveXObject("Msxml2.XMLHTTP");
		                      } 
		                      catch (e) {
			                  try { xhttp = new ActiveXObject("Microsoft.XMLHTTP");
			                  } 
			                  catch (e) {}
		                      }
		                   }
						   
				   
xhttp.onreadystatechange=function(){ if (xhttp.readyState==4 && xhttp.status==200) {
                                     document.getElementById(idi).innerHTML='Заявка отправлена'; 
									 $('#'+idi).attr('onclick', "$(this).css({'font-size':'15px'}).html('Заявка уже отправлена');");
								}
							}							
xhttp.open('GET', 'sendmail.php?name='+fio+'&phone='+phone+'&email='+email, true);
xhttp.send(null);
}


function send() { flag=0;
	
		  
	       fio=document.getElementById('exampleInputEmail7').value;
		   phone=document.getElementById('exampleInputEmail8').value;
		   
		   if (fio==''||fio=='Имя'||fio=='Введите имя!') { document.getElementById('exampleInputEmail7').setAttribute('placeholder','Введите имя!');
		                              document.getElementById('exampleInputEmail7').style.border="2px solid #f00"; flag=1;  }
									  else document.getElementById('exampleInputEmail7').style.border="1px solid #ccc";
		   if (phone==''||phone=='Телефон'||phone=='Введите телефон!') { document.getElementById('exampleInputEmail8').setAttribute('placeholder','Введите телефон!');
		                              document.getElementById('exampleInputEmail8').style.border="2px solid #f00"; flag=1; }
									  else document.getElementById('exampleInputEmail8').style.border="1px solid #ccc";

							  
									  if (flag==0) {var xhttp;
if (window.XMLHttpRequest) { xhttp = new XMLHttpRequest();
		                     if (xhttp.overrideMimeType) { xhttp.overrideMimeType('text/txt');
			                 }
	                       } 
	                          else if (window.ActiveXObject) { 
		                      try { xhttp = new ActiveXObject("Msxml2.XMLHTTP");
		                      } 
		                      catch (e) {
			                  try { xhttp = new ActiveXObject("Microsoft.XMLHTTP");
			                  } 
			                  catch (e) {}
		                      }
		                   }
						   
				   
xhttp.onreadystatechange=function(){ if (xhttp.readyState==4 && xhttp.status==200) {
	                                 document.getElementById('modal-content').innerHTML=
									 '<button type="button"'+' class="close"'+' data-dismiss="modal"'+' id="but_close"'+' aria-hidden="true">&times;</button>Заявка на звонок отправлена';
									 document.getElementById('modal-content').style.textAlign='center';
									 document.getElementById('modal-content').style.fontSize=20+'px';
									 document.getElementById('but_close').style.margin=-30+'px '+10+'px '+0+'px '+0+'px';
                                     document.getElementById('modal-content').style.padding=40+'px '+0+'px '+40+'px '+0+'px';
									 
								}
							}							
xhttp.open('GET', 'sendmail.php?name='+fio+'&phone='+phone, true);
xhttp.send(null);
									  }
}
									  
 
									  
								  
									  
									  
									  
									  
									  
