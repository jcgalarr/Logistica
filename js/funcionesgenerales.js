   function ValidNumber(evt){
        evt = (evt) ? evt : event;
        var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode : 
        ((evt.which) ? evt.which : 0));
        if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;            
        return true;
    }

function js_RucOK(Ruc) {
var I, acum, dig2, dig1 ;
var paso;		
var Cadena;		
var Valida_Ruc;

    //vb_RucOK = "0"
      alert(ruc);
	Valida_Ruc = 0;//Valida_Ruc = 0

	if(isNaN(Ruc)){//if not isNumeric(Ruc) then
		return 0;//exit function
	}//end if
	
    i=Ruc.substr(0,2);//I = cdbl(Mid(Ruc, 1, 2))

    if(i>22 || i<1){//If I > 22 Or I < 1 Then
		Valida_Ruc = 1;//Valida_Ruc = 1	'	Error en provincia
		//exit function
		return Valida_Ruc;
    }//End If

    paso = Ruc.substr(10,3);//paso = Mid(Ruc, 11, 3)
    if(Ruc.substr(2,1)=="9" && paso=="000"){//If Mid(Ruc, 3, 1) = "9" And paso = "000" Then
		Valida_Ruc = 3;//Valida_Ruc = 3	'	Error por lo menos debe haber una principal
		//exit function
		return Valida_Ruc;
    }//End If

    paso = Ruc.substr(9,4);//paso = Mid(Ruc, 10, 4)
    if((Ruc.substr(2,1)=="6" && paso=="0000") || (Ruc.substr(2,1)=="8" && paso=="0000")){//If (Mid(Ruc, 3, 1) = "6" And paso = "0000") Or (Mid(Ruc, 3, 1) = "8" And paso = "0000") Then
		Valida_Ruc = 3;//Valida_Ruc = 3	'	Error por lo menos debe haber una principal
		//exit function
		return Valida_Ruc;
    }//End If

    if(Ruc.substr(2,1)!="6" && Ruc.substr(2,1)!=8 && Ruc.substr(2,1)!=9){//If Mid(Ruc, 3, 1) <> "6" And Mid(Ruc, 3, 1) <> "8" And Mid(Ruc, 3, 1) <> "9" Then
		Valida_Ruc = 3;//Valida_Ruc = 3 
		//exit function
		return Valida_Ruc;
    }//End If

    if(Ruc.substr(2,1)=="9"){//If Mid(Ruc, 3, 1) = "9" Then
		acum = 0;//acum = 0
		Cadena = "432765432";//Cadena = "432765432"
		for(i=1;i<=9;i++){//For I = 1 To 9
			dig1 =parseFloat(Cadena.substr(i-1,1));//dig1 = cdbl(Mid(Cadena, I, 1))
			dig2 =parseFloat(Ruc,i,1);//dig2 = cdbl(Mid(Ruc, I, 1))
			acum=acum+(dig1*dig2);//acum = acum + (dig1 * dig2)
		}//Next
		acum = 11 - (acum % 11);//acum = 11 - (acum Mod 11)

		if(acum=11)
            acum=0;//If acum = 11 Then acum = 0

		if(parseFloat(Ruc.substr(9,1))!=acum){//If cdbl(Mid(Ruc, 10, 1)) <> acum Then
			Valida_Ruc = 2;//Valida_Ruc = 2 ' Error en dígito verificador
			return Valida_Ruc;//exit function
			//return 2;
		}//End If
    }//End If

    if(Ruc.substr(2,1)=="6" || Ruc.substr(2,1)=="8"){//If Mid(Ruc, 3, 1) = "6" Or Mid(Ruc, 3, 1) = "8" Then
		acum = 0;//acum = 0
		Cadena = "32765432";//Cadena = "32765432"
		for(i=1;i<=8;i++){//For I = 1 To 8
		    dig1=parseFloat(Cadena.substr(i-1,1));//dig1 = cdbl(Mid(Cadena, I, 1))
		    dig2=parseFloat(Ruc.substr(i-1,1));//dig2 = cdbl(Mid(Ruc, I, 1))
		    acum=acum+(dig1*dig2);//acum = acum + (dig1 * dig2)
		}//Next 
		acum = 11 - (acum%11);//acum = 11 - (acum Mod 11)
		if(acum==11)
            acum=0;//If acum = 11 Then acum = 0
		
		if(parseFloat(Ruc.substr(8,1))!=acum){//If cdbl(Mid(Ruc, 9, 1)) <> acum Then
			Valida_Ruc = 2;//Valida_Ruc = 2 ' Error en dígito verificador
			return Valida_Ruc;//exit function
			//return 2;
		}//End If
    }//End If

    return 1;//vb_RucOK = "1"
}

